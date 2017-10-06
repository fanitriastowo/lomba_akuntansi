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

   public function index() {
      $this->load->view("registration");
   }
}