<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buyer extends CI_Controller
{
	function index()
	{
		$where = [
				// 'user_id' => $this->session->userdata('id'),
				'dihapus' => '0'
			];

		$hasil['data_produk'] = $this->m_main->tampil_where('tbl_produk', $where);
		$this->load->view('buyer/v_buyer', $hasil);
	}

}