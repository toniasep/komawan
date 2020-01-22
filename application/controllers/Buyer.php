<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buyer extends CI_Controller
{
	function index()
	{
		$this->load->view('buyer/v_buyer');
	}

}