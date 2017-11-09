<?php

/**
 * Created by PhpStorm.
 * User: triastowo
 * Date: 09-Oct-17
 * Time: 22:43
 */
class Akun extends CI_Controller {

   function __construct() {
      parent::__construct();
   }

   public function index() {
      if ($this->ion_auth->logged_in()) {
         $model['model'] = $this->ion_auth->user()->row();
         $this->load->view("akun", $model);
      } else {
         redirect('login');
      }
   }

   public function cetak_kwitansi() {
      $this->load->helper('tcpdf_helper');
      $model['model'] = $this->ion_auth->user()->row();
      $this->load->view('kwitansi', $model);
   }

   public function upload_kwitansi() {

      $principal = $this->ion_auth->user()->row();
      $image_name = $this->__generate_image_name();

      // photo field
      // Set filename
      $config['file_name'] = $image_name;
      $config['upload_path'] = 'uploads/bukti_transfer/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '3096';
      $config['max_height'] = '4098';
      $config['max_width'] = '4098';
      $this->load->library('upload', $config);

      // check sudah pernah upload bukti transfer
      if (!$principal->sudah_transfer) {        // 0

         if ($this->upload->do_upload('bukti_transfer')) {
            $updated_image = $this->upload->data();

            $user = array(
                'sudah_transfer' => 1,
                'bukti_transfer' => $image_name . $updated_image['file_ext']
            );
            $this->ion_auth->update($principal->id, $user);

         }

      } else {                                  // 1

         if ($this->upload->do_upload('bukti_transfer')) {
            $updated_image = $this->upload->data();

            $user = array(
                'bukti_transfer' => $image_name . $updated_image['file_ext']
            );
            $this->ion_auth->update($principal->id, $user);

         }

      }
      redirect('akun');
   }


   /**
    * menampilkan halaman persiapan pengerjaan soal
    */
   public function persiapan() {
      // redirect ke login jika belum
      if (!$this->ion_auth->logged_in()) {
         redirect('login');
      }

      // ambil principal
      $principal = $this->ion_auth->user()->row();

      $this->load->model('ujian_m');
      $is_idle = $this->ujian_m->get_by('user_id', $principal->id, TRUE);

      // jika user baru dan belum pernah ujian
      if ($is_idle == NULL) {
         // simpan principal id ke ujian
         $save_ujian = array('user_id' => $principal->id);
         $this->ujian_m->save($save_ujian);

      } else {
         // jika sedang ujian (status idle)
         if ($is_idle->idle == 1) {

            // waktu_sekarang + (90 menit - (autosave_time - waktu_mulai))
            $formula = (
                time() +
                (5400 -
                    (
                        strtotime($is_idle->autosave_time) -
                        strtotime($is_idle->waktu_mulai)
                    )
                )
            );

            // update table ujian dengan waktu selesai yang diganti
            $save_ujian = array('waktu_selesai' => date('Y-m-d H:i:s', $formula));
            //$this->ujian_m->save($save_ujian, $is_idle->id);

            // redirect ke soal
            redirect('soal');
         }
      }

      // load soal model
      $this->load->model('soal_m');

      //ambil paket soal 1 - 7 diacak dari database simpan ke table ujian
      $this->soal_m->get_paket_soal($principal->id, 2);

      $data['principal'] = $principal;
      $this->load->view('persiapan', $data);
   }


   private function __generate_image_name() {
      return $number = rand(10000, 99999);
   }

}