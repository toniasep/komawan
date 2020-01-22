<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan extends CI_Controller
{
	function index()
	{
		if($this->session->userdata('masuk') == '1'){
			$where = [
				'user_id' => $this->session->userdata('id'),
				'dihapus' => '0'
			];
			$hasil['data_pelanggan'] = $this->m_main->tampil_where('tbl_pelanggan', $where);

			$this->load->view('global/v_header');
			$this->load->view('pelanggan/v_pelanggan', $hasil);
			$this->load->view('global/v_footer');
		}else{
			redirect(base_url().'masuk');
		}
	}

	function tambah(){
		if($this->session->userdata('masuk') == '1'){
			if($this->input->post('submit') != NULL){
				$data = [
					'nama' => $this->input->post('nama'),
					'hp' => $this->input->post('hp'),
					'email' => $this->input->post('email'),
					'alamat' => $this->input->post('alamat'),
					'pos_id' => $this->input->post('kelurahan'),
					'dihapus' => '0',
					'user_id' => $this->session->userdata('id'),
					'ditambah_oleh' => $this->session->userdata('email'),
					'tgl_tambah' => date("Y-m-d H:i:s")
				];

				$this->m_main->tambah('tbl_pelanggan', $data);

				redirect(base_url().'/transaksi/tambah');
			}else{
				$hasil['data_pos'] = $this->m_main->tampil('tbl_pos');

				$this->load->view('global/v_header');
				$this->load->view('pelanggan/v_pelanggan_tambah', $hasil);
				$this->load->view('global/v_footer');
			}
		}else{
			redirect(base_url().'masuk');
		}
	}

	function list_pelanggan(){
		$where = [
			'user_id' => $this->session->userdata('id'),
			'dihapus' => '0'
		];
		$hasil = $this->m_main->tampil_where('tbl_pelanggan', $where)->result();
		json_encode($hasil);
	}

}