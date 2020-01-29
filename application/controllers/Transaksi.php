<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller
{
	function index()
	{
		if($this->session->userdata('masuk') == '1'){
			$whereb = [
				'user_id' => $this->session->userdata('id'),
				'dihapus' => '0',
				'status' => 'belum_diproses'
			];
			$hasil['data_transaksi_belum'] = $this->m_main->tampil_where('v_transaksi', $whereb);
			$wheres = [
				'user_id' => $this->session->userdata('id'),
				'dihapus' => '0',
				'status' => 'sudah_diproses'
			];
			$hasil['data_transaksi_sedang'] = $this->m_main->tampil_where('v_transaksi', $wheres);
			$wheresu = [
				'user_id' => $this->session->userdata('id'),
				'dihapus' => '0',
				'status' => 'sudah_dikirim'
			];
			$hasil['data_transaksi_sudah'] = $this->m_main->tampil_where('v_transaksi', $wheresu);

			$this->load->view('global/v_header');
			$this->load->view('transaksi/v_transaksi', $hasil);
			$this->load->view('global/v_footer');
		}else{
			redirect(base_url().'masuk');
		}
	}

	function tambah(){

		if($this->session->userdata('masuk') == '1'){
			if($this->input->post('submit') != NULL){
				$where = [
					'user_id' => $this->session->userdata('id'),
					'dihapus' => '0'
				];
				$total_transaksi = $this->m_main->tampil_where('tbl_transaksi', $where)->num_rows();
				if($total_transaksi < $this->session->userdata('transaksi_max')){

					$produk = $this->input->post('produk');
					$qty = $this->input->post('qty');
					$harga = $this->input->post('harga');
					$total_harga = 0;
					for($i = 0; $i < count($harga); $i++){
						$total_harga += $harga[$i];
					}

					$data = [
						'pelanggan_id' => $this->input->post('pelanggan_id'),
						'total_harga' => $total_harga,
						'user_id' => $this->session->userdata('id'),
						'kurir' => 'Anterin',
						'status' => 'belum_diproses',
						'dihapus' => '0',
						'ditambah_oleh' => $this->session->userdata('email'),
						'tgl_tambah' => date("Y-m-d H:i:s")
					];
					$id_terakhir = $this->m_main->tambah('tbl_transaksi', $data);

					for($i = 0; $i < count($produk); $i++){
						$data = [
							'transaksi_id' => $id_terakhir,
							'produk_id' => $produk[$i],
							'qty' => $qty[$i],
							'harga' => $harga[$i],
							'ditambah_oleh' => $this->session->userdata('email'),
							'tgl_tambah' => date("Y-m-d H:i:s")
						];
						$this->m_main->tambah('tbl_detail_transaksi', $data);
					}

					redirect(base_url().'transaksi');
				}else{
					echo "<h1>TRANSAKSI LEBIH DARI MAX</h1>";
				}

			}else{
				$where = [
					'user_id' => $this->session->userdata('id'),
					'dihapus' => '0'
				];
				$hasil['data_pos'] = $this->m_main->tampil('tbl_pos');
				$hasil['pelanggan'] = $this->m_main->tampil_where('v_pelanggan_kelurahan', $where);
				$hasil['produk'] = $this->m_main->tampil_where('tbl_produk', $where);

				$this->load->view('global/v_header');
				$this->load->view('transaksi/v_transaksi_tambah', $hasil);
				$this->load->view('global/v_footer');
			}
		}else{
			redirect(base_url().'masuk');
		}

	}
	
	function updateProsesSudah($id){
		if($this->session->userdata('masuk') == '1'){
			if($id != NULL){
				$where = [
					'id' => $id,
					'user_id' => $this->session->userdata('id'),
					'dihapus' => '0'
				];
				$data = [
					'status' => 'sudah_diproses'
				];

				$this->m_main->ubah('tbl_transaksi', $data, $where);

				redirect(base_url().'transaksi');
			}else{
				echo "Gagal Update Transaksi";
				
			}
		}else{
			redirect(base_url().'masuk');
		}
	}
	
	function updateSudahKirim($id){
		if($this->session->userdata('masuk') == '1'){
			if($id != NULL){
				$where = [
					'id' => $id,
					'user_id' => $this->session->userdata('id'),
					'dihapus' => '0'
				];
				$data = [
					'status' => 'sudah_dikirim'
				];

				$this->m_main->ubah('tbl_transaksi', $data, $where);

				redirect(base_url().'transaksi');
			}else{
				echo "Gagal Update Transaksi";
				
			}
		}else{
			redirect(base_url().'masuk');
		}
	}

	public function label(){
		$this->load->view('transaksi/v_label');
	}

	public function nota_transaksi($id){

        $this->pdf->load_view('transaksi/v_label');
        set_time_limit (500);
        $this->pdf->render();
        $this->pdf->stream("Nota_".$id.".pdf");
    }
}