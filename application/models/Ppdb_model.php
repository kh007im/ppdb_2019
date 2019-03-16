<?php

class Ppdb_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function semua_peserta()
	{
		return $this->db->get('peserta')->result();
	}
	
	public function buat_kode()   
	{

		$this->db->select('RIGHT(peserta.nopes,3) as kode', FALSE);
		$this->db->order_by('nopes','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('peserta');      //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
		 //jika kode ternyata sudah ada.      
		 $data = $query->row();      
		 $kode = intval($data->kode) + 1;    
		}
		else {      
		 //jika kode belum ada      
		 $kode = 1;    
		}

		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		$kodejadi = "PPDB-TSANTHREE-".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		return $kodejadi;  
 	}

	function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('username',$username);
		
		return $this->db->get()->row();
	}
	
	function daftar_peserta($data)
	{
		$this->db->insert('peserta',$data);
	}
	
	function cek_akun($username,$password)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		return $this->db->get()->row();
	}
	
	function select_by_id($id_peserta)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('id_peserta',$id_peserta);
		
		return $this->db->get()->row();
	}
	
	function update_biodata($data,$id_peserta)
	{
		$this->db->where('id_peserta',$id_peserta);
		$this->db->update('peserta',$data);
	}
	
	function pengumuman()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('keterangan','LULUS');
		
		return $this->db->get()->result();
	}
	
	function kirim_pesan($data)
	{
		$this->db->insert('pesan',$data);
	}
	
	function tampilpengumuman()
	{
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->where('id','2');
		
		return $this->db->get()->row();
	}
}