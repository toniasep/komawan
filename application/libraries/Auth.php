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
		$masuk = $this->CI->db->get_where('v_user_paket', $data)->row();
		if($masuk != NULL){
			if(password_verify($password, $masuk->password)){
				$sess_data['masuk'] = '1';
				$sess_data['id'] = $masuk->user_id;
				$sess_data['nama'] = $masuk->user_nama;
				$sess_data['email'] = $masuk->email;
				$sess_data['hp'] = $masuk->hp;
				$sess_data['hak_akses'] = $masuk->hak_akses;
				$sess_data['paket_id'] = $masuk->paket_id;
				$sess_data['paket_nama'] = $masuk->paket_nama;
				$sess_data['tgl_expire'] = $masuk->tgl_expire;
				$sess_data['produk_max'] = $masuk->produk_max;
				$sess_data['transaksi_max'] = $masuk->transaksi_max;
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