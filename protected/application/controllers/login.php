<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

   function __construct() {
      parent::__construct();
   }

   /**
    * Login page
    */
   public function index() {
      // redirect if already logged in
      if ($this->ion_auth->logged_in()) {
         redirect('user/profile');
      }
      $this->load->view('login');
   }

   /**
    * Post Login
    */
   public function login_post() {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      // check credential dan jika buka administrator
      if ($this->ion_auth->login($username, $password)) {
         redirect('home');
      }

      // jika tidak terdaftar
      $this->session->set_flashdata('invalid', TRUE);
      redirect('login');
   }


   /**
    * Logout Peserta
    */
   public function logout() {
      // Check apakah sudah login
      if ($this->ion_auth->logged_in()) {

         // jika sudah login maka logout
         $this->ion_auth->logout();
         redirect('login');
      } else {

         // jika belum, login
         redirect('login');
      }
   }

}

/* End of file home.php */
/* Location: ./application/controller/home.php */
