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
				'paket_id' => '01',
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'hak_akses' => '1',
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
				'id' => $_GET['id'],
				'dihapus' => '0'
			];

		$userdata = $this->m_main->tampil_where('tbl_user', $where);
		$hasil['user'] = $userdata;

		$where = [
			'ip' => getHostByName(getHostName())
		];
		$hasil['keranjang'] = $this->m_main->tampil_where('v_cart', $where);
		$this->load->view('buyer/v_cart', $hasil);
	}


	public function upgrade(){
		$where = [
			'id' => $this->input->post('paket_id')
		];
		$hasil['data_paket'] = $this->m_main->tampil_where('tbl_paket', $where);

		$data = [
			'user_id' => $this->session->userdata('id'),
			'paket_id' => $this->input->post('paket_id'),
			'tgl_daftar' => date("Y-m-d"),
			'total' => $hasil['data_paket']->result()[0]->harga,
			'status' => '0'
		];

		$this->m_main->tambah('tbl_transaksi_paket', $data);

		$this->load->view('global/v_header');
		$this->load->view('global/v_upgrade', $hasil);
		$this->load->view('global/v_footer');
	}

	function konfirmasiPembayaran(){

		$this->load->view('global/v_header');
		$this->load->view('global/v_konfirmasi_pembayaran');
		$this->load->view('global/v_footer');
	}

	function transaksi_buyer(){
		$data = [
			'nama' => $this->input->post('nama'),
			'hp' => $this->input->post('hp'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'dihapus' => '0',
			'user_id' => $this->uri->segment(3),
			'ditambah_oleh' => $this->session->userdata('email'),
			'tgl_tambah' => date("Y-m-d H:i:s")
		];

		$pelanggan_id = $this->m_main->tambah('tbl_pelanggan', $data);

		$produk = $this->input->post('produk');
		$qty = $this->input->post('qty');
		$harga = $this->input->post('harga');
		$total_harga = 0;
		for($i = 0; $i < count($harga); $i++){
			$total_harga += $harga[$i];
		}

		$data = [
			'pelanggan_id' => $pelanggan_id,
			'total_harga' => $total_harga,
			'user_id' => $this->uri->segment(3),
			'status' => 'belum_diproses',
			'dihapus' => '0',
			'ditambah_oleh' => 'pelanggan '.$pelanggan_id,
			'tgl_tambah' => date("Y-m-d H:i:s")
		];
		$id_terakhir = $this->m_main->tambah('tbl_transaksi', $data);

		for($i = 0; $i < count($produk); $i++){
			$data = [
				'transaksi_id' => $id_terakhir,
				'produk_id' => $produk[$i],
				'qty' => $qty[$i],
				'harga' => $harga[$i],
				'ditambah_oleh' => 'pelanggan '.$pelanggan_id,
				'tgl_tambah' => date("Y-m-d H:i:s")
			];
			$this->m_main->tambah('tbl_detail_transaksi', $data);
		}

		$where = [
			'ip' => getHostByName(getHostName())
		];
		$this->m_main->hapus('tbl_cart', $where);

		echo "<script>alert('BERHASIL MEMBUAT TRANSAKSI')</script>";
		redirect(base_url().'seller/'.$this->uri->segment(3));

	}

}