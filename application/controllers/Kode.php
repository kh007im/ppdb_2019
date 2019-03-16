<?php
  public function index() {
      $data['kodeunik'] = $this->kode_model->buat_kode(); // variable $kodeunik merujuk ke file model_user.php pada function buat_kode. paham kan ya? harus paham dong
      $this->load->view('ppdb/dashboard/home', $data);
}
?>