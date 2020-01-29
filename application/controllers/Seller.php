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

	function add_cart(){
		$data = [
			'ip' => $this->get_client_ip(),
			'produk_id' => $this->input->post('produk_id')
		];
		$this->m_main->tambah('tbl_cart', $data);
		echo $this->tampil_cart();
	}

	function tampil_cart(){
		$where = [
			'ip' => $this->get_client_ip()
		];
		$hasil = $this->m_main->tampil_where('v_cart', $where);
		echo json_encode($hasil);
	}

	function get_client_ip() {
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	        //ip from share internet
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	        //ip pass from proxy
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    }else{
	        $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
    }

}