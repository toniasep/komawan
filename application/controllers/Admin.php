<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{
	function index()
	{
		if($this->session->userdata('su') == '1'){

			$hasil['data_user'] = $this->m_main->tampil('tbl_user');

			$this->load->view('admin/v_user', $hasil);
		}else{
			redirect(base_url().'admin/masuk');
		}
	}

	function masuk(){
		if($this->input->post('submit') != NULL){

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($email == 'su@klola.id' and $password == 'su'){
				$sess_data['su'] = '1';
				$this->session->set_userdata($sess_data);
				redirect(base_url('admin'));
			}else{
				$this->session->set_flashdata('pesan', 'Login Gagal. Pastikan Email/Password Benar');
				$this->load->view('admin/v_masuk');
			}
			
		}else{
			$this->session->set_flashdata('pesan', '');
			$this->load->view('admin/v_masuk');
		}
	}


	function keluar(){
		$this->auth->keluar();
		redirect(base_url().'admin/masuk');
	}
}