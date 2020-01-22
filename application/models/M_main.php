<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_main extends CI_Model
{
	public function tampil($table)
	{
		return $this->db->get($table);
	}
	
	public function tampil_where($table,$data)
	{
		return $this->db->get_where($table, $data);
	}

	public function tampil_join($field, $table, $where)
	{
		$this->db->select($field)
			->from($table)
			->where($where);
		return $this->db->get();
	}

	public function cari($table,$data,$cari)
	{
		foreach($data as $key => $value) {
		    if($key == 0) {
		        $this->db->like($value, $cari);
		    } else {
		        $this->db->or_like($value, $cari);
		    }
		}
		return $this->db->get($table);
	}
	
	function hapus($table,$where)
	{
		$this->db->delete($table, $where);
	}
	
	function ubah($table,$data,$field_key)
	{
		$this->db->update($table,$data,$field_key);
	}
	
	function tambah($table,$data)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	function user_aktif(){
		return $this->db->query("SELECT * FROM v_user_paket WHERE dihapus = '0' AND STATUS = '1' group by ORDER BY tgl_aktif DESC");
	}

	function user_belum_aktif(){
		return $this->db->query("SELECT * FROM v_user_paket WHERE dihapus = '0' AND STATUS = '0' ORDER BY tgl_expire DESC");
	}

}