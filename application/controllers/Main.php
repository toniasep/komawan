<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller
{
	function index()
	{
		if($this->session->userdata('masuk') == '1'){

			$where = [
				'user_id' => $this->session->userdata('id'),
				'dihapus' => '0'
			];
			$hasil['data_pelanggan'] = $this->m_main->tampil_where('tbl_pelanggan', $where);
			$hasil['data_produk'] = $this->m_main->tampil_where('tbl_produk', $where);
			$hasil['data_transaksi'] = $this->m_main->tampil_where('v_transaksi', $where);

			$this->load->view('global/v_header');
			$this->load->view('global/v_dashboard', $hasil);
			$this->load->view('global/v_footer');
		}else{
			redirect(base_url().'masuk');
		}
	}

	function masuk(){
		if($this->input->post('submit') != NULL){

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if(!$this->auth->masuk($email,$password)){
				$this->session->set_flashdata('pesan', 'Login Gagal. Pastikan Email/Password Benar');
				$this->load->view('global/v_masuk');
			}else{
				redirect(base_url());
			}
			
		}else{
			$this->session->set_flashdata('pesan', '');
			$this->load->view('global/v_masuk');
		}
	}

	function daftar(){
		if($this->input->post('submit') != NULL){
			$data = [
				'nama' => $this->input->post('nama'),
				'hp' => $this->input->post('hp'),
				'email' => $this->input->post('email'),
				'paket_id' => $this->input->post('paket_id'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'hak_akses' => '0',
				'dihapus' => '0',
				'ditambah_oleh' => $this->input->post('email'),
				'tgl_tambah' => date("Y-m-d H:i:s")
			];

			$this->m_main->tambah('tbl_user', $data);

			echo "<script>alert('Berhasil Daftar, Silahkan Masuk');</script>";
			redirect(base_url().'masuk');
		}else{
			$this->load->view('global/v_daftar');
		}
	}

	function keluar(){
		$this->auth->keluar();
		redirect(base_url().'masuk');
	}

	function keranjang(){
		$where = [
			'ip' => getHostByName(getHostName())
		];
		$hasil['keranjang'] = $this->m_main->tampil_where('v_cart', $where);
		$this->load->view('buyer/v_cart', $hasil);
	}

}