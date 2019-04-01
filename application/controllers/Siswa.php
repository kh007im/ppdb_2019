<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('SiswaModel');
	}
	
	public function index(){
		$data['peserta'] = $this->SiswaModel->view();
		$this->load->view('view', $data);
	}
	
	public function export(){
		// Load plugin PHPExcel nya
		require(APPPATH.'third_party/PHPExcel/PHPExcel.php');
		require(APPPATH.'third_party/PHPExcel/PHPExcel/Writer/Excel2007.php');
		
		// Panggil class PHPExcel nya
		$excel = new PHPExcel();

		// Settingan awal file excel
		$excel->getProperties()->setCreator('Matt Khojim')
							   ->setLastModifiedBy('Matt Khojim')
							   ->setTitle("Data Peserta PPDB 2019")
							   ->setSubject("Siswa")
							   ->setDescription("Rekap Peserta PPDB 2019")
							   ->setKeywords("Peserta PPDB");
		// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
		$style_col = array(
			'font' => array('bold' => true), // Set font nya jadi bold
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
			)
		);

		// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
		$style_row = array(
			'alignment' => array(
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
			)
		);

		$excel->setActiveSheetIndex(0)->setCellValue('A1', "REKAP PESERTA PPDB 2019"); // Set kolom A1 dengan tulisan "REKAP PESERTA ASIKOM 2019"
		$excel->getActiveSheet()->mergeCells('A1:L1'); // Set Merge Cell pada kolom A1 sampai E1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

		// Buat header tabel nya pada baris ke 3
		$excel->setActiveSheetIndex(0)->setCellValue('A3', "No"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('B3', "No Peserta"); // Set kolom A3 dengan tulisan "NO PESERTA"
		$excel->setActiveSheetIndex(0)->setCellValue('C3', "Username"); // Set kolom B3 dengan tulisan "USERNAME"
		$excel->setActiveSheetIndex(0)->setCellValue('D3', "Password"); // Set kolom C3 dengan tulisan "PASSWORD"
		$excel->setActiveSheetIndex(0)->setCellValue('E3', "NISN"); // Set kolom D3 dengan tulisan "NAMA LENGKAP"
		$excel->setActiveSheetIndex(0)->setCellValue('F3', "NIK"); // Set kolom E3 dengan tulisan "JENIS KELAMIN"
		$excel->setActiveSheetIndex(0)->setCellValue('G3', "Nama Siswa"); // Set kolom A3 dengan tulisan "ASAL SEKOLAH"
		$excel->setActiveSheetIndex(0)->setCellValue('H3', "Tempat Lahir"); // Set kolom B3 dengan tulisan "KELAS"
		$excel->setActiveSheetIndex(0)->setCellValue('I3', "Tanggal Lahir"); // Set kolom C3 dengan tulisan "NAMA PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('J3', "Jenis Kelamin"); // Set kolom D3 dengan tulisan "NIP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('K3', "Status Anak"); // Set kolom E3 dengan tulisan "HP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('L3', "Kelas"); // Set kolom E3 dengan tulisan "HP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('M3', "Paralel"); // Set kolom E3 dengan tulisan "HP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('N3', "Wali Kelas"); // Set kolom E3 dengan tulisan "HP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('O3', "Rangking"); // Set kolom E3 dengan tulisan "HP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('P3', "Status Siswa"); // Set kolom E3 dengan tulisan "JENIS LOMBA"
		$excel->setActiveSheetIndex(0)->setCellValue('Q3', "Asal Sekolah"); // Set kolom E3 dengan tulisan "HP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('R3', "Hobi"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('S3', "Cita-cita"); // Set kolom A3 dengan tulisan "NO PESERTA"
		$excel->setActiveSheetIndex(0)->setCellValue('T3', "Anak Ke"); // Set kolom B3 dengan tulisan "USERNAME"
		$excel->setActiveSheetIndex(0)->setCellValue('U3', "Jumlah Saudara"); // Set kolom C3 dengan tulisan "PASSWORD"
		$excel->setActiveSheetIndex(0)->setCellValue('V3', "Jenis Sekolah Sebelumnya"); // Set kolom C3 dengan tulisan "PASSWORD"
		$excel->setActiveSheetIndex(0)->setCellValue('W3', "Nama Sekolah Sebelumnya"); // Set kolom D3 dengan tulisan "NAMA LENGKAP"
		$excel->setActiveSheetIndex(0)->setCellValue('X3', "NPSN"); // Set kolom E3 dengan tulisan "JENIS KELAMIN"
		$excel->setActiveSheetIndex(0)->setCellValue('Y3', "No Ujian Sekolah Sebelumnya"); // Set kolom A3 dengan tulisan "ASAL SEKOLAH"
		$excel->setActiveSheetIndex(0)->setCellValue('Z3', "No Seri SKHUN"); // Set kolom B3 dengan tulisan "KELAS"
		$excel->setActiveSheetIndex(0)->setCellValue('AA3', "No Seri Ijazah"); // Set kolom C3 dengan tulisan "NAMA PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('AB3', "Total Nilai UN"); // Set kolom C3 dengan tulisan "PASSWORD"
		$excel->setActiveSheetIndex(0)->setCellValue('AC3', "Tanggal Lulus"); // Set kolom C3 dengan tulisan "PASSWORD"
		$excel->setActiveSheetIndex(0)->setCellValue('AD3', "Status Kepemilikan Rumah"); // Set kolom D3 dengan tulisan "NIP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('AE3', "Alamat Orang Tua"); // Set kolom E3 dengan tulisan "HP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('AF3', "Propinsi"); // Set kolom E3 dengan tulisan "JENIS LOMBA"
		$excel->setActiveSheetIndex(0)->setCellValue('AG3', "Kabupaten"); // Set kolom C3 dengan tulisan "PASSWORD"
		$excel->setActiveSheetIndex(0)->setCellValue('AH3', "Kecamatan"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('AI3', "Desa"); // Set kolom A3 dengan tulisan "NO PESERTA"
		$excel->setActiveSheetIndex(0)->setCellValue('AJ3', "Kodepos"); // Set kolom B3 dengan tulisan "USERNAME"
		$excel->setActiveSheetIndex(0)->setCellValue('AK3', "Jarak"); // Set kolom C3 dengan tulisan "PASSWORD"
		$excel->setActiveSheetIndex(0)->setCellValue('AL3', "Tempat Tinggal Siswa"); // Set kolom D3 dengan tulisan "NAMA LENGKAP"
		$excel->setActiveSheetIndex(0)->setCellValue('AM3', "Nama Kepala Keluarga"); // Set kolom E3 dengan tulisan "JENIS KELAMIN"
		$excel->setActiveSheetIndex(0)->setCellValue('AN3', "No KK"); // Set kolom A3 dengan tulisan "ASAL SEKOLAH"
		$excel->setActiveSheetIndex(0)->setCellValue('AO3', "Nama Ayah"); // Set kolom B3 dengan tulisan "KELAS"
		$excel->setActiveSheetIndex(0)->setCellValue('AP3', "NIK Ayah"); // Set kolom C3 dengan tulisan "NAMA PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('AQ3', "Tempat Lahir Ayah"); // Set kolom D3 dengan tulisan "NIP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('AR3', "Tanggal Lahir Ayah"); // Set kolom E3 dengan tulisan "HP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('AS3', "Pendidikan Ayah"); // Set kolom E3 dengan tulisan "JENIS LOMBA"
		$excel->setActiveSheetIndex(0)->setCellValue('AT3', "Pekerjaan Ayah"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('AU3', "Status Ayah"); // Set kolom A3 dengan tulisan "NO PESERTA"
		$excel->setActiveSheetIndex(0)->setCellValue('AV3', "Nama Ibu"); // Set kolom B3 dengan tulisan "KELAS"
		$excel->setActiveSheetIndex(0)->setCellValue('AW3', "NIK Ibu"); // Set kolom C3 dengan tulisan "NAMA PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('AX3', "Tempat Lahir Ibu"); // Set kolom D3 dengan tulisan "NIP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('AY3', "Tanggal Lahir Ibu"); // Set kolom E3 dengan tulisan "HP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('AZ3', "Pendidikan Ibu"); // Set kolom E3 dengan tulisan "JENIS LOMBA"
		$excel->setActiveSheetIndex(0)->setCellValue('BA3', "Pekerjaan Ibu"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('BB3', "Status Ibu"); // Set kolom A3 dengan tulisan "NO PESERTA"
		$excel->setActiveSheetIndex(0)->setCellValue('BC3', "Nama Wali"); // Set kolom B3 dengan tulisan "KELAS"
		$excel->setActiveSheetIndex(0)->setCellValue('BD3', "NIK Wali"); // Set kolom C3 dengan tulisan "NAMA PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('BE3', "Tempat Lahir Wali"); // Set kolom D3 dengan tulisan "NIP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('BF3', "Tanggal Lahir Wali"); // Set kolom E3 dengan tulisan "HP PEMBINA"
		$excel->setActiveSheetIndex(0)->setCellValue('BG3', "Pendidikan Wali"); // Set kolom E3 dengan tulisan "JENIS LOMBA"
		$excel->setActiveSheetIndex(0)->setCellValue('BH3', "Pekerjaan Wali"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('BI3', "Rata2 Penghasilan"); // Set kolom B3 dengan tulisan "USERNAME"
		$excel->setActiveSheetIndex(0)->setCellValue('BJ3', "No KKS"); // Set kolom C3 dengan tulisan "PASSWORD"
		$excel->setActiveSheetIndex(0)->setCellValue('BK3', "No PKH"); // Set kolom D3 dengan tulisan "NAMA LENGKAP"
		$excel->setActiveSheetIndex(0)->setCellValue('BL3', "No PIP"); // Set kolom E3 dengan tulisan "JENIS KELAMIN"

		// Apply style header yang telah kita buat tadi ke masing-masing kolom header
		$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('V3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('W3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('X3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('Y3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('Z3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AA3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AB3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AC3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AD3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AE3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AF3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AG3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AH3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AI3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AJ3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AK3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AL3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AM3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AN3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AO3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AP3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AQ3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AR3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AS3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AT3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AU3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AV3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AW3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AX3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AY3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AZ3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BA3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BB3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BC3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BD3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BE3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BF3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BG3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BH3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BI3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BJ3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BK3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('BL3')->applyFromArray($style_col);

		// Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
		$siswa = $this->SiswaModel->view();

		$no = 1; // Untuk penomoran tabel, di awal set dengan 1
		$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
		foreach($siswa as $data){ // Lakukan looping pada variabel siswa
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nopes);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->username);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->password);
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->nis);
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->nik);
			$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->nama_siswa);
			$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->tempat_lahir);
			$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->tanggal_lahir);
			//$excel->setActiveSheetIndex(0)->setCellValueExplicit('J'.$numrow, $data->nip_pemb, PHPExcel_Cell_DataType::TYPE_STRING);
			$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->jk);
			$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->status_anak);
			$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->kelas);
			$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->paralel);
			$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->wali_kelas);
			$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data->ranking);
			$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data->status_siswa);
			$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data->asal_sek);
			$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data->hobi);
			$excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data->cita);
			$excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data->anak_nomer);
			$excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data->jmlh_sau);
			$excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $data->sek_seb);
			$excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data->nama_sekbel);
			$excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, $data->npsn);
			$excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $data->skhun);
			$excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, $data->no_skhun);
			$excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, $data->no_ijasah);
			$excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $data->totnilun);
			$excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow, $data->tnggl_lulus);
			$excel->setActiveSheetIndex(0)->setCellValue('AD'.$numrow, $data->status_kep_rumah);
			$excel->setActiveSheetIndex(0)->setCellValue('AE'.$numrow, $data->alamat_ortu);
			$excel->setActiveSheetIndex(0)->setCellValue('AF'.$numrow, $data->prop_ortu);
			$excel->setActiveSheetIndex(0)->setCellValue('AG'.$numrow, $data->kab_ortu);
			$excel->setActiveSheetIndex(0)->setCellValue('AH'.$numrow, $data->kec_ortu);
			$excel->setActiveSheetIndex(0)->setCellValue('AI'.$numrow, $data->desa_ortu);
			$excel->setActiveSheetIndex(0)->setCellValue('AJ'.$numrow, $data->kodepos_ortu);
			$excel->setActiveSheetIndex(0)->setCellValue('AK'.$numrow, $data->jarak);
			$excel->setActiveSheetIndex(0)->setCellValue('AL'.$numrow, $data->tempat_tinggal_siswa);
			$excel->setActiveSheetIndex(0)->setCellValue('AM'.$numrow, $data->nama_kep_kel);
			$excel->setActiveSheetIndex(0)->setCellValue('AN'.$numrow, $data->no_kk);
			$excel->setActiveSheetIndex(0)->setCellValue('AO'.$numrow, $data->nama_ayah);
			$excel->setActiveSheetIndex(0)->setCellValue('AP'.$numrow, $data->nik_ayah);
			$excel->setActiveSheetIndex(0)->setCellValue('AQ'.$numrow, $data->tempat_lahir_ayah);
			$excel->setActiveSheetIndex(0)->setCellValue('AR'.$numrow, $data->tanggal_lahir_ayah);
			$excel->setActiveSheetIndex(0)->setCellValue('AS'.$numrow, $data->pend_ayah);
			$excel->setActiveSheetIndex(0)->setCellValue('AT'.$numrow, $data->pekerj_ayah);
			$excel->setActiveSheetIndex(0)->setCellValue('AU'.$numrow, $data->status_ayah);
			$excel->setActiveSheetIndex(0)->setCellValue('AV'.$numrow, $data->nama_ibu);
			$excel->setActiveSheetIndex(0)->setCellValue('AW'.$numrow, $data->nik_ibu);
			$excel->setActiveSheetIndex(0)->setCellValue('AX'.$numrow, $data->tempat_lahir_ibu);
			$excel->setActiveSheetIndex(0)->setCellValue('AY'.$numrow, $data->tanggal_lahir_ibu);
			$excel->setActiveSheetIndex(0)->setCellValue('AZ'.$numrow, $data->pend_ibu);
			$excel->setActiveSheetIndex(0)->setCellValue('BA'.$numrow, $data->pekerj_ibu);
			$excel->setActiveSheetIndex(0)->setCellValue('BB'.$numrow, $data->status_ibu);
			$excel->setActiveSheetIndex(0)->setCellValue('BC'.$numrow, $data->nama_wali);
			$excel->setActiveSheetIndex(0)->setCellValue('BD'.$numrow, $data->nik_wali);
			$excel->setActiveSheetIndex(0)->setCellValue('BE'.$numrow, $data->tempat_lahir_wali);
			$excel->setActiveSheetIndex(0)->setCellValue('BF'.$numrow, $data->tanggal_lahir_wali);
			$excel->setActiveSheetIndex(0)->setCellValue('BG'.$numrow, $data->pend_wali);
			$excel->setActiveSheetIndex(0)->setCellValue('BH'.$numrow, $data->pekerj_wali);
			$excel->setActiveSheetIndex(0)->setCellValue('BI'.$numrow, $data->rata_pengh);
			$excel->setActiveSheetIndex(0)->setCellValue('BJ'.$numrow, $data->no_kks);
			$excel->setActiveSheetIndex(0)->setCellValue('BK'.$numrow, $data->no_pkh);
			$excel->setActiveSheetIndex(0)->setCellValue('BL'.$numrow, $data->no_pkh);
			
			// Ngedit iki sampe mumet ndaseeee
			$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('B'.$numrow)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
			$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AA'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AB'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AC'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AD'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AE'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AF'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AG'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AH'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AI'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AJ'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AK'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AL'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AM'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AN'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AO'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AP'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AQ'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AR'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AS'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AT'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AU'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AV'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AW'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AX'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AY'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AZ'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BA'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BB'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BC'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BD'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BE'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BF'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BG'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BH'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BI'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BJ'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BK'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('BL'.$numrow)->applyFromArray($style_row);
			
			//$excel->getActiveSheet()->getStyle('J'.$numrow)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
			//$excel->getActiveSheet()->getStyle('K'.$numrow)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
			
			$no++; // Tambah 1 setiap kali looping
			$numrow++; // Tambah 1 setiap kali looping
		}

		// Set width kolom
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(10); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('F')->setWidth(15); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('G')->setWidth(20); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('H')->setWidth(8); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('I')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('J')->setWidth(20); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('K')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('L')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('M')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('N')->setWidth(10); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('O')->setWidth(25); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('P')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('R')->setWidth(15); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('S')->setWidth(20); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('T')->setWidth(8); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('U')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('V')->setWidth(20); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('W')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('X')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('Y')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('Z')->setWidth(10); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('AA')->setWidth(25); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('AB')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('AC')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('AD')->setWidth(15); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('AE')->setWidth(20); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('AF')->setWidth(8); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('AG')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('AI')->setWidth(20); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('AJ')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('AK')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('AL')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('AM')->setWidth(10); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('AN')->setWidth(25); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('AO')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('AP')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('AQ')->setWidth(15); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('AR')->setWidth(20); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('AS')->setWidth(8); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('AT')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('AU')->setWidth(20); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('AV')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('AW')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('AX')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('AY')->setWidth(10); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('AZ')->setWidth(25); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('BA')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('BB')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('BC')->setWidth(15); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('BD')->setWidth(20); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('BE')->setWidth(8); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('BF')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('BG')->setWidth(20); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('BH')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('BI')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('BJ')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('BK')->setWidth(10); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('BL')->setWidth(25); // Set width kolom C
		
		// Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

		// Set orientasi kertas jadi LANDSCAPE
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

		// Set judul file excel nya
		$excel->getActiveSheet(0)->setTitle("Rekap Peserta");
		$excel->setActiveSheetIndex(0);

		// Proses file excel
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Rekap_Peserta_PPDB.xlsx"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');

		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
	}
}
