<?php

/**
 * Created by PhpStorm.
 * User: triastowo
 * Date: 06-Oct-17
 * Time: 16:42
 */
class home extends CI_Controller {


   function __construct() {
      parent::__construct();
   }

   public function index() {
      $this->load->view("home");
   }

   public function cetak_kwitansi() {
      $prinsipal = $this->ion_auth->user()->row();
      $model['model'] = $prinsipal;
      $this->load->view('kwitansi', $model);
   }
}