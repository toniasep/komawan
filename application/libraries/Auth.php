<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class auth{
	var $CI = NULL;

   	function __construct(){
   		$this->CI =& get_instance();
   	}

	function masuk($email, $password){
		$data = array(
			'email' => $email,
			'dihapus'=>'0'
		);
		$masuk = $this->CI->db->get_where('tbl_user', $data)->row();
		if($masuk != NULL){
			if(password_verify($password, $masuk->password)){
				$sess_data['masuk'] = '1';
				$sess_data['id'] = $masuk->id;
				$sess_data['nama'] = $masuk->nama;
				$sess_data['email'] = $masuk->email;
				$sess_data['hp'] = $masuk->hp;
				$sess_data['hak_akses'] = $masuk->hak_akses;
				$this->CI->session->set_userdata($sess_data);
				return true;
			}
		}
		return false;
	}

	function is_masuk($hak_akses){
		if($this->CI->session->userdata('masuk') == '1' && $this->CI->session->userdata('hak_akses') == $hak_akses){
			return true;
		}
		return false;
	}

	function keluar(){
		$this->CI->session->sess_destroy();
	}

	// function get_menu(){
	// 	$hak_akses = $this->CI->session->userdata('hak_akses');
	// 	return $this->CI->db->get_where('tbl_menu', ['hak_akses'=>$hak_akses]);
	// }
}