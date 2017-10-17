<?php

/**
 * Created by PhpStorm.
 * User: triastowo
 * Date: 09-Oct-17
 * Time: 22:43
 */
class akun extends CI_Controller {

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
}