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
					'dihapus' => '0',
					'user_id' => $this->session->userdata('id'),
					'ditambah_oleh' => $this->session->userdata('email'),
					'tgl_tambah' => date("Y-m-d H:i:s")
				];

				$this->m_main->tambah('tbl_pelanggan', $data);
			}else{
				$this->load->view('global/v_header');
				$this->load->view('pelanggan/v_pelanggan_tambah');
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
		echo json_encode($hasil);
	}

	function cari(){
		$where = [
			'id' => $this->input->get('id'),
			'dihapus' => '0'
		];
		$hasil = $this->m_main->tampil_where('v_user_kelurahan', $where)->result();
		echo json_encode($hasil);
	}

	function hapus(){
		if($this->session->userdata('masuk') ==  '1'){
			$where['id'] = $this->uri->segment(3);
			$data = [
				'dihapus' => '1',
				'diedit_oleh' => $this->session->userdata('email'),
				'tgl_edit' => date("Y-m-d H:i:s")
			];	

			$this->m_main->ubah('tbl_pelanggan', $data, $where);

			redirect(base_url().'pelanggan');
		}else{
			redirect(base_url().'masuk');
		}
	}
	

}