<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_laundry extends CI_Model
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
	}

	function transaksi_laporan($dari, $sampai){
		$this->db->select('*')
				->from('v_transaksi')
				->where('tgl_masuk BETWEEN "'. date('Y-m-d', strtotime($dari)). '" and "'. date('Y-m-d', strtotime($sampai)).'"')
				->where('dihapus = "0"');
		return $this->db->get();
	}

	function transaksi_total_pendapatan($dari, $sampai){
		$this->db->select('sum(total) as total_pendapatan')
				->from('v_transaksi')
				->where('tgl_masuk BETWEEN "'. date('Y-m-d', strtotime($dari)). '" and "'. date('Y-m-d', strtotime($sampai)).'"')
				->where('dihapus = "0"');
		return $this->db->get();
	}

}