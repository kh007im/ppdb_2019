<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('ppdb_model');
		$this->load->helper('date');
	}
	
	public function index()
	{
		//$data['kodeunik'] = $this->Ppdb_model->buat_kode();
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='peserta')
		{
			$this->template->dashboard_user('ppdb/dashboard/home');
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function daftar()
	{
		$this->template->ppdb('ppdb/daftar');
	}
	
	function proses_daftar()
	{
		$data['username'] = $this->input->post('username',true);
		$data['password'] = $this->input->post('password',true);
		$data['nopes'] = $this->ppdb_model->buat_kode();

		$username = $this->input->post('username',true);
		$cek_username = $this->ppdb_model->cek_username($username);
		$num_account = count((array)$cek_username);

		//$data['kodeunik'] = $this->ppdb_model->buat_kode();
		
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		
		if ($this->form_validation->run()==FALSE)
		{
			$this->template->ppdb('ppdb/pendaftaran');
		}
		else
		{
			if ($num_account > 0)
			{
				$this->session->set_flashdata('error','<div class="alert alert-warning" role="alert">Maaf username sudah ada yang menggunakan</div>');
				$this->template->ppdb('ppdb/pendaftaran');
			}
			else
			{
				$this->ppdb_model->daftar_peserta($data);
				$this->session->set_flashdata('error','<div class="alert alert-success" role="alert">Pendaftaran berhasil. Silahkan Login dengan menggunakan Akun yang sudah didaftarkan</div>');
				$this->template->ppdb('ppdb/pendaftaran');
			}
		}
	}
	
	function prosedur()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/prosedur');
		}
		else
		{
			$this->template->ppdb('ppdb/prosedur');
		}
	}
	
	function proses_login()
	{
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		
		$akun2 = $this->ppdb_model->cek_akun($username,$password);
		$akun = count((array)$akun2);
		
		if ($akun > 0)
		{
			$data_session = array(
									'level'=>$akun2->level,
									'nama_siswa'=>$akun2->nama_siswa,
									'id_peserta'=>$akun2->id_peserta,
									'status'=>$akun2->status,
									'id_peserta'=>$akun2->id_peserta,
									'logged_in'=>true
			);
			
			$this->session->set_userdata($data_session);
			$this->template->dashboard_user('ppdb/dashboard/home');
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->template->ppdb('ppdb/daftar');
	}
	
	function update_biodata($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$this->template->dashboard_user('ppdb/dashboard/form_biodata',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function up_biodata()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		
				
				$data['nama_siswa']=$this->input->post('nama_siswa', 'required');
				$data['nisn']=$this->input->post('nisn', 'required');
				$data['nik']=$this->input->post('nik', 'required');
				$data['tempat_lahir']=$this->input->post('tempat_lahir', 'required');
				$data['tanggal_lahir']=$this->input->post('tanggal_lahir', 'required');
				$data['jk']=$this->input->post('jk', 'required');
				$data['asal_sek']=$this->input->post('asal_sek');
				$data['nama_sekbel']=$this->input->post('nama_sekbel');
				$data['npsn']=$this->input->post('npsn');
				$data['status_sekbel']=$this->input->post('status_sekbel');
				$data['nama_kabsekbel']=$this->input->post('nama_kabsekbel');
				$data['hobi']=$this->input->post('hobi');
				$data['cita']=$this->input->post('cita');
				$data['status_anak']=$this->input->post('status_anak');
				$data['anak_nomer']=$this->input->post('anak_nomer');
				$data['jmlh_sau']=$this->input->post('jmlh_sau');
				$data['tempat_tinggal_siswa']=$this->input->post('tempat_tinggal_siswa');
				$data['alat_transport']=$this->input->post('alat_transport');
				$data['tempat_tinggal_siswa']=$this->input->post('tempat_tinggal_siswa');
				$data['alamat_ortu']=$this->input->post('alamat_ortu');
				$data['prop_ortu']=$this->input->post('prop_ortu');
				$data['kab_ortu']=$this->input->post('kab_ortu');
				$data['kec_ortu']=$this->input->post('kec_ortu');
				$data['desa_ortu']=$this->input->post('desa_ortu');
				$data['kodepos_ortu']=$this->input->post('kodepos_ortu');
				$data['status_kep_rumah']=$this->input->post('status_kep_rumah');
				
				$data['nama_kep_kel']=$this->input->post('nama_kep_kel');
				$data['no_kk']=$this->input->post('no_kk');
				$data['nama_ayah']=$this->input->post('nama_ayah');
				$data['nik_ayah']=$this->input->post('nik_ayah');
				$data['tempat_lahir_ayah']=$this->input->post('tempat_lahir_ayah');
				$data['tanggal_lahir_ayah']=$this->input->post('tanggal_lahir_ayah');
				$data['pend_ayah']=$this->input->post('pend_ayah');
				$data['pekerj_ayah']=$this->input->post('pekerj_ayah');
				$data['status_ayah']=$this->input->post('status_ayah');
				$data['nama_ibu']=$this->input->post('nama_ibu');
				$data['nik_ibu']=$this->input->post('nik_ibu');
				$data['tempat_lahir_ibu']=$this->input->post('tempat_lahir_ibu');
				$data['tanggal_lahir_ibu']=$this->input->post('tanggal_lahir_ibu');
				$data['pend_ibu']=$this->input->post('pend_ibu');
				$data['pekerj_ibu']=$this->input->post('pekerj_ibu');
				$data['status_ibu']=$this->input->post('status_ibu');
				$data['nama_wali']=$this->input->post('nama_wali');
				$data['nik_wali']=$this->input->post('nik_wali');
				$data['tempat_lahir_wali']=$this->input->post('tempat_lahir_wali');
				$data['tanggal_lahir_wali']=$this->input->post('tanggal_lahir_wali');
				$data['pend_wali']=$this->input->post('pend_wali');
				$data['pekerj_wali']=$this->input->post('pekerj_wali');
				$data['rata_pengh']=$this->input->post('rata_pengh');
				$data['no_kks']=$this->input->post('no_kks');
				$data['no_pkh']=$this->input->post('no_pkh');
				$data['no_kip']=$this->input->post('no_kip');
				
				
				
				$id_peserta=$this->input->post('id_peserta');
				
				$this->ppdb_model->update_biodata($data,$id_peserta);
				
				$data2['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
				$this->session->set_flashdata('info','Dokumen telah berhasil diupdate');
				$this->template->dashboard_user('ppdb/dashboard/form_biodata',$data2);
			
	}
	
	function daftarpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		$data['peserta'] = $this->ppdb_model->semua_peserta();
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/daftar_peserta',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/daftar_peserta',$data);
		}
	}
	
	function form_biodata()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$data['format']='DATE_RFC850';
			$data['time']=time();
			
			$this->template->dashboard_user('ppdb/dashboard/form_biodata',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function form_preview()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$data['format']='DATE_RFC850';
			$data['time']=time();
			$this->template->dashboard_user('ppdb/dashboard/form_preview',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function cetak()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['format']='DATE_RFC850';
			$data['time']=time();
			$data['peserta']=$this->ppdb_model->select_by_id($id_peserta);		
			$html = $this->load->view('ppdb/dashboard/form_pdf',$data, true);
			// Nomor perserta (untuk nama file)
			

			// Cetak dengan html2pdf
			require(APPPATH."/third_party/html2pdf_v4.03/html2pdf.class.php");
			try {
					if(ob_get_length() > 0) {
                        ob_clean();
                    }
					//ob_end_clean();
					$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
					$html2pdf->WriteHTML($html);
					$html2pdf->Output('Bukti Pendaftaran.pdf');
				} 
			catch (HTML2PDF_exception $e) 
				{
					// echo $e;
					$this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Coba ' . anchor('dashboard/biodata-preview', 'ulangi ', 'class="alert-link"') . ' beberapa saat lagi!');
					redirect('ppdb/form_preview');
				}
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function status()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$this->template->dashboard_user('ppdb/dashboard/status',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/content');
		}
	}
	
	function pengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		$data['pengumuman'] = $this->ppdb_model->tampilpengumuman();
		$data['peserta'] = $this->ppdb_model->pengumuman();
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/pengumuman',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/pengumuman',$data);
		}
	}
	
	function kontak()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/kontak');
		}
		else
		{
			$this->template->ppdb('ppdb/kontak');
		}
	}
	
	function proses_kontak()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		
		$data['nama'] = $this->input->post('nama',true);
		$data['nope'] = $this->input->post('nope',true);
		$data['isi'] = $this->input->post('isi',true);
		$data['judul'] = $this->input->post('judul',true);
		
		if (!empty($logged_in) && $level == 'peserta')
		{	
			$this->ppdb_model->kirim_pesan($data);
			$this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Pesan Berhasil Dikirim</div>');
			$this->template->dashboard_user('ppdb/kontak');
		}
		else
		{
			$this->ppdb_model->kirim_pesan($data);
			$this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Pesan Berhasil Dikirim</div>');
			$this->template->ppdb('ppdb/kontak');
		}
	}
}