<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller
{
	function index()
	{
		if($this->session->userdata('masuk') == '1'){
			$where = [
				'user_id' => $this->session->userdata('id'),
				'dihapus' => '0'
			];
			$hasil['data_produk'] = $this->m_main->tampil_where('tbl_produk', $where);

			$this->load->view('global/v_header');
			$this->load->view('produk/v_produk', $hasil);
			$this->load->view('global/v_footer');
		}else{
			redirect(base_url().'masuk');
		}
	}

	function tambah(){
		if($this->session->userdata('masuk') == '1'){
			if($this->input->post('submit') != NULL){
				$where = [
					'user_id' => $this->session->userdata('id'),
					'dihapus' => '0'
				];
				$total_produk = $this->m_main->tampil_where('tbl_produk', $where)->num_rows();
				if($total_produk < $this->session->userdata('produk_max')){
					$data = [
						'nama' => $this->input->post('nama'),
						'sku' => $this->input->post('sku'),
						'stok' => $this->input->post('stok'),
						'harga_beli' => $this->input->post('harga_beli'),
						'harga_jual' => $this->input->post('harga_jual'),
						'berat' => $this->input->post('berat'),
						'deskripsi' => $this->input->post('deskripsi'),
						'dihapus' => '0',
						'user_id' => $this->session->userdata('id'),
						'ditambah_oleh' => $this->session->userdata('email'),
						'tgl_tambah' => date("Y-m-d H:i:s")
					];

					$this->m_main->tambah('tbl_produk', $data);

					redirect(base_url().'produk');
				}else{
					echo "<h1>PRODUK SUDHA LEBIH</h1>";
				}
				
			}else{
				$this->load->view('global/v_header');
				$this->load->view('produk/v_produk_tambah');
				$this->load->view('global/v_footer');
			}
		}else{
			redirect(base_url().'masuk');
		}
	}

	function hapus(){
		if($this->session->userdata('masuk') ==  '1'){
			$where['id'] = $this->uri->segment(3);
			$data = [
				'dihapus' => '1',
				'diedit_oleh' => $this->session->userdata('email'),
				'tgl_edit' => date("Y-m-d H:i:s")
			];	

			$this->m_main->ubah('tbl_produk', $data, $where);

			redirect(base_url().'produk');
		}else{
			redirect(base_url().'masuk');
		}
	}
	
	function ubah(){
		if($this->session->userdata('masuk') == '1'){
			if($this->input->post('submit') != NULL){
				$where = [
					'id' => $this->input->post('id'),
					'user_id' => $this->session->userdata('id'),
					'dihapus' => '0'
				];
				$data = [
					'nama' => $this->input->post('nama'),
					'sku' => $this->input->post('sku'),
					'stok' => $this->input->post('stok'),
					'harga_beli' => $this->input->post('harga_beli'),
					'harga_jual' => $this->input->post('harga_jual'),
					'berat' => $this->input->post('berat'),
					'deskripsi' => $this->input->post('deskripsi'),
					'dihapus' => '0',
					'user_id' => $this->session->userdata('id'),
					'ditambah_oleh' => $this->session->userdata('email'),
					'tgl_tambah' => date("Y-m-d H:i:s")
				];

				$this->m_main->ubah('tbl_produk', $data, $where);

				redirect(base_url().'produk');
			}else{
				$where = [
					'id' => $this->uri->segment(3),
					'user_id' => $this->session->userdata('id'),
					'dihapus' => '0'
				];
				$hasil['produk'] = $this->m_main->tampil_where('tbl_produk', $where)->row();
				if($hasil['produk'] != NULL){
					$this->load->view('global/v_header');
					$this->load->view('produk/v_produk_ubah', $hasil);
					$this->load->view('global/v_footer');
				}else{
					echo "<h1>GO DIE</h1>";
				}
				
			}
		}else{
			redirect(base_url().'masuk');
		}
	}

}