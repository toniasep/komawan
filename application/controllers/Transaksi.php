<?php
class transaksi extends CI_Controller
{
	function index()
	{
		$this->load->view('v_header');
		$this->load->view('v_list_transaksi');
		$this->load->view('v_footer');
	}

	function add_transaksi()
	{
		$this->load->view('v_header');
		$this->load->view('v_add_transaksi');
		$this->load->view('v_footer');
	}
	

}