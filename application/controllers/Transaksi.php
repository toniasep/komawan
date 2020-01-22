<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller
{
	function index()
	{
		if($this->session->userdata('masuk') == '1'){
			$where = [
				'user_id' => $this->session->userdata('id'),
				'dihapus' => '0'
			];
			$hasil['data_transaksi'] = $this->m_main->tampil_where('v_transaksi', $where);

			$this->load->view('global/v_header');
			$this->load->view('transaksi/v_transaksi', $hasil);
			$this->load->view('global/v_footer');
		}else{
			redirect(base_url().'masuk');
		}
	}

	function tambah()
	{
		$where = [
			'user_id' => $this->session->userdata('id'),
			'dihapus' => '0'
		];
		$hasil['data_pos'] = $this->m_main->tampil('tbl_pos');
		$hasil['pelanggan'] = $this->m_main->tampil_where('tbl_pelanggan', $where);
		$hasil['produk'] = $this->m_main->tampil_where('tbl_produk', $where);

		$this->load->view('global/v_header');
		$this->load->view('transaksi/v_transaksi_tambah', $hasil);
		$this->load->view('global/v_footer');
	}
	

}