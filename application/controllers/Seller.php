<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class seller extends CI_Controller
{
	function index(){

	}

	function toko(){
		$where = [
				'toko_id' => $this->uri->segment(2),
				'dihapus' => '0'
			];

		$userdata = $this->m_main->tampil_where('tbl_user', $where);
		if ($userdata->result()) {
			$user_id = $userdata->result()[0]->id;
			$where = [
					'user_id' => $user_id,
					'dihapus' => '0'
				];

			$hasil['data_produk'] = $this->m_main->tampil_where('tbl_produk', $where);
			$this->load->view('buyer/v_buyer', $hasil);			
		}else{
			echo "Toko tidak ditemukan";
		}

	}

	function cart(){
		$this->load->view('buyer/v_cart');
	}

}