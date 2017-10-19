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

   private function __generate_image_name() {
      return $number = rand(10000, 99999);
   }

}