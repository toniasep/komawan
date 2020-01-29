<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{
	function index()
	{
		if($this->session->userdata('su') == '1'){

			$hasil['data_user'] = $this->m_main->user_aktif();
			$hasil['status'] = 'aktif';

			$this->load->view('admin/v_user', $hasil);
		}else{
			redirect(base_url().'admin/masuk');
		}
	}

	function daftar_paket(){

		$hasil['data_paket'] = $this->m_main->tampil('tbl_transaksi_paket');

		$this->load->view('admin/v_paket', $hasil);

	}

	function hapus(){
		if($this->session->userdata('su') == '1'){
			$where['id'] = $this->uri->segment(3);
			$data = [
				'dihapus' => '1',
				'diedit_oleh' => $this->session->userdata('email'),
				'tgl_edit' => date("Y-m-d H:i:s")
			];	

			$this->m_main->ubah('tbl_user', $data, $where);

			redirect(base_url().'admin');
		}else{
			redirect(base_url().'masuk');
		}
	}

	function aktivasi(){
		if($this->session->userdata('su') == '1'){
			$where['id'] = $this->uri->segment(3);
			$data = [
				'tgl_bayar' => date("Y-m-d H:i:s"),
				'tgl_aktif' => date("Y-m-d H:i:s"),
				'tgl_expire' => date("Y-m-d H:i:s", strtotime("+30 days")),
				'status' => '1'
			];	

			$this->m_main->ubah('tbl_transaksi_paket', $data, $where);

			redirect(base_url().'admin');
		}else{
			redirect(base_url().'masuk');
		}
	}

	function masuk(){
		if($this->input->post('submit') != NULL){

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($email == 'su' and $password == 'su'){
				$sess_data['su'] = '1';
				$this->session->set_userdata($sess_data);
				redirect(base_url('admin'));
			}else{
				$this->session->set_flashdata('pesan', 'Login Gagal. Pastikan Email/Password Benar');
				$this->load->view('admin/v_masuk');
			}
			
		}else{
			$this->session->set_flashdata('pesan', '');
			$this->load->view('admin/v_masuk');
		}
	}


	function keluar(){
		$this->auth->keluar();
		redirect(base_url().'admin/masuk');
	}
}