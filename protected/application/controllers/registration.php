<?php

/**
 * Created by PhpStorm.
 * User: triastowo
 * Date: 06-Oct-17
 * Time: 16:57
 */
class registration extends CI_Controller {

   function __construct() {
      parent::__construct();
   }

   /**
    *
    */
   public function index() {
      $this->load->view("registration");
   }

   /**
    *
    */
   public function registrasi() {
      $nama = $this->input->post('nama');
      $jenis_kelamin = $this->input->post('jenis_kelamin');
      $tempat_lahir = $this->input->post('tempat_lahir');
      $tanggal_lahir = $this->input->post('tanggal_lahir');
      $no_handphone = $this->input->post('no_handphone');
      $jalan = $this->input->post('jalan');
      $no_rumah = $this->input->post('no_rumah');
      $rt = $this->input->post('rt');
      $rw = $this->input->post('rw');
      $desa = $this->input->post('desa');
      $kecamatan = $this->input->post('kecamatan');
      $kabupaten = $this->input->post('kabupaten');
      $provinsi = $this->input->post('provinsi');
      $asal_sekolah = $this->input->post('asal_sekolah');
      $jenis_sekolah = $this->input->post('smk');
      $sma = $this->input->post('sma');
      $password = $this->input->post('password');
      $confirm_password = $this->input->post('confirm_password');
      $pertanyaan = $this->input->post('pertanyaan');
      $jawaban = $this->input->post('jawaban');

      $additional_data = array(
          'nama' => $nama,
          'jenis_kelamin' => $jenis_kelamin,
          'tempat_lahir' => $tempat_lahir,
          'tanggal_lahir' => $tanggal_lahir,
          'phone' => $no_handphone,
          'jalan' => $jalan,
          'no_rumah' => $no_rumah,
          'rt' => $rt,
          'rw' => $rw,
          'desa' => $desa,
          'kecamatan' => $kecamatan,
          'kabupaten' => $kabupaten,
          'provinsi' => $provinsi,
          'asal_sekolah' => $asal_sekolah,
          'jenis_sekolah' => $jenis_sekolah,
          'pertanyaan' => $pertanyaan,
          'jawaban' => $jawaban
      );

      $generated_id = $this->__generate_id($jenis_sekolah);
      $result = '';
      if (!$this->ion_auth->username_check($generated_id)) {
         $result = $this->ion_auth->register($generated_id, $password, null, $additional_data, 'members');
      } else {
         $result = $this->ion_auth->register($this->__generate_id($jenis_kelamin), $password, null, $additional_data, 'members');
      }

      if ($result) {
         $this->session->set_flashdata('succes_registration', 'Registrasi Berhasil');
         redirect('registration/cetak_kwitansi');
      } else {
         $this->session->set_flashdata('error_registration', $this->ion_auth->errors());
         redirect('registration');
      }
   }

   public function cetak_kwitansi() {
      $this->load->view('kwitansi');
   }

   /**
    * @param $jenis_sekolah
    * @return string ID
    */
   private function __generate_id($jenis_sekolah) {

      $number = rand(1000, 9999);
      $sma_smk = 1;
      if ($jenis_sekolah == 'SMA') {
         $sma_smk = 1;
      } else {
         $sma_smk = 2;
      }
      return "{$number}-{$sma_smk}";
   }
}