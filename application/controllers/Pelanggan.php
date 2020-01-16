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
				// $data = [
				// 	'nama' => $this->input->post('nama'),
				// 	'sku' => $this->input->post('sku'),
				// 	'stok' => $this->input->post('stok'),
				// 	'harga_beli' => $this->input->post('harga_beli'),
				// 	'harga_jual' => $this->input->post('harga_jual'),
				// 	'berat' => $this->input->post('berat'),
				// 	'deskripsi' => $this->input->post('deskripsi'),
				// 	'dihapus' => '0',
				// 	'user_id' => $this->session->userdata('id'),
				// 	'ditambah_oleh' => $this->session->userdata('email'),
				// 	'tgl_tambah' => date("Y-m-d H:i:s")
				// ];

				// $this->m_main->tambah('tbl_produk', $data);

				// redirect(base_url().'produk');
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


}