<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('admin_model');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('download');
	}
	
	function login()
	{
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		
		$akun = $this->admin_model->cek_akun($username,$password);
		$temp_account = count((array)$akun);
		
		if ($temp_account > 0)
		{
			$data = array(
							'level'=>$akun->level,
							'logged_in'=>true
			);
			
			$this->session->set_userdata($data);
			$this->template->admin('admin/beranda');
		}
		else
		{
			$this->template->home('home/content');
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->template->ppdb('ppdb/daftar');
	}

	function beranda()
	{
		$this->template->admin('admin/beranda');
	}
	
	function daftarpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->daftarpeserta();
			$data['jumlah'] = count((array)$peserta);
			
			$data['peserta'] = $this->admin_model->daftarpeserta();
			$this->template->admin('admin/daftarpeserta',$data);
		}
		// else
		// {
		// 	$this->template->home('home/content');
		// }		
	}
	
	function biodatapeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['peserta'] = $this->admin_model->select_by_id($id_peserta);
			$this->template->admin('admin/pesertaselengkapnya',$data);
		}
		else
		{
			$this->template->home('home/content');
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
	
	function editpeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['peserta'] = $this->admin_model->select_by_id($id_peserta);
			$this->template->admin('admin/editpeserta',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function proseseditpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['nama_lengkap']=$this->input->post('nama_lengkap');
			$data['jenis_kelamin']=$this->input->post('jenis_kelamin');
			$data['asal_sek']=$this->input->post('asal_sek');
			$data['kelas']=$this->input->post('kelas');
			$data['nama_pemb']=$this->input->post('nama_pemb');
			$data['nip_pemb']=$this->input->post('nip_pemb');
			$data['hp_pemb']=$this->input->post('hp_pemb');
			$data['lomba']=$this->input->post('lomba');
			
			$id_peserta=$this->input->post('id_peserta');
			
			$this->admin_model->up_biodata($id_peserta,$data);
			
			redirect(site_url('admin/daftarpeserta'));
		}
		else
		{
			$this->template->home('home/content');
		}
			
	}
	
	function hapus_peserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$this->admin_model->hapus_peserta($id_peserta);
			redirect('admin/daftarpeserta');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function tambahpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$this->template->admin('admin/tambahpeserta');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function prosestambahpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['nama_lengkap']=$this->input->post('nama_lengkap');
			$data['jenis_kelamin']=$this->input->post('jenis_kelamin');
			$data['asal_sek']=$this->input->post('asal_sek');
			$data['kelas']=$this->input->post('kelas');
			$data['nama_pemb']=$this->input->post('nama_pemb');
			$data['nip_pemb']=$this->input->post('nip_pemb');
			$data['hp_pemb']=$this->input->post('hp_pemb');
			$data['lomba']=$this->input->post('lomba');
			
			$this->admin_model->tambahpeserta($data);
			redirect('admin/daftarpeserta');
		}
		else
		{
			$this->template->home('home/content');
		}
			
	}
	
	function daftarverifpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$this->template->admin('admin/daftarverifpeserta');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function belumdiverifikasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->pesertabelumdiverifikasi();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->admin_model->pesertabelumdiverifikasi();
			$this->template->admin('admin/belumdiverifikasi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function telahverifikasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->pesertatelahverifikasi();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->admin_model->pesertatelahverifikasi();
			$this->template->admin('admin/telahverifikasi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function verifikasipeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['status'] = 'diverifikasi';
			$this->admin_model->up_biodata($id_peserta,$data);
			redirect('admin/belumdiverifikasi');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function unverifikasipeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['status'] = 'belum diverifikasi';
			$this->admin_model->up_biodata($id_peserta,$data);
			redirect('admin/telahverifikasi');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function daftarpesan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['pesan'] = $this->admin_model->daftarpesan();
			$this->template->admin('admin/daftarpesan',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function bukapesan($id)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['status'] = 2;
			$this->admin_model->uppesan($id,$data);
			
			$data2['pesan'] = $this->admin_model->bukapesan($id);
			$this->template->admin('admin/bukapesan',$data2);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function pengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['pengumuman'] = $this->admin_model->pengumuman();
			$this->template->admin('admin/pengumuman',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function hidupkanpengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$id = 2;
			$data['status'] = 'dihidupkan';
			$this->admin_model->uppengumuman($id,$data);
			redirect('admin/pengumuman');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function matikanpengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$id = 2;
			$data['status'] = 'dimatikan';
			$this->admin_model->uppengumuman($id,$data);
			redirect('admin/pengumuman');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function download($nama)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$name = $nama;
			$data = file_get_contents('uploads/kk/'.$nama);
			force_download($name, $data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	//public function export_excel(){
      //      $data = array( 'title' => 'Laporan Excel',
        //    'peserta' => $this->admin_model->daftarpeserta());
          //  $this->load->view('daftarpeserta',$data);
    //}
}