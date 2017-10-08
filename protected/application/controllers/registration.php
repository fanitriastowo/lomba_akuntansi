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
      $bulan_lahir = $this->input->post('bulan_lahir');
      $tahun_lahir = $this->input->post('tahun_lahir');
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
      $jenis_sekolah = $this->input->post('jenis_sekolah');
      $password = $this->input->post('password');
      $pertanyaan = $this->input->post('pertanyaan');
      $jawaban = $this->input->post('jawaban');

      // generate ID
      $generated_id = $this->__generate_id($jenis_sekolah);

      // photo field
      // Set filename
      $config['file_name'] = date('dmy') . $generated_id;
      $config['upload_path'] = 'uploads/users/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '3096';
      $config['max_height'] = '4098';
      $config['max_width'] = '4098';
      $this->load->library('upload', $config);
      $photo = NULL;

      if ($this->upload->do_upload('photo')) {

         $photo = $this->upload->data();
         if ($photo['image_width'] > 250) {
            $configResize = array(
                'image_library' => 'gd',
                'source_image' => $photo['full_path'],
                'width' => 250,
                'height' => 250,
                'maintain_ratio' => FALSE
            );

            $this->load->library('image_lib', $configResize);
            $this->image_lib->resize();
         }
      }


      $additional_data = array(
          'nama' => $nama,
          'jenis_kelamin' => $jenis_kelamin,
          'tempat_lahir' => $tempat_lahir,
          'tanggal_lahir' => "{$tahun_lahir}-{$bulan_lahir}-{$tanggal_lahir}",
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
          'jawaban' => $jawaban,
          'photo' => date('dmy') . $generated_id . $photo['file_ext']
      );

      $result = '';
      if (!$this->ion_auth->username_check($generated_id)) {
         $result = $this->ion_auth->register($generated_id, $password, null, $additional_data, 'members');
      } else {
         $generated_id = $this->__generate_id($jenis_sekolah);
         $result = $this->ion_auth->register($generated_id, $password, null, $additional_data, 'members');
      }

      if ($result) {
         $this->session->set_flashdata('succes_registration', 'Registrasi Berhasil');
         redirect('home/cetak_kwitansi');
      } else {
         $this->session->set_flashdata('error_registration', $this->ion_auth->errors());
         redirect('registration');
      }
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