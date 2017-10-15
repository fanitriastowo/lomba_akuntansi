<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class administrator extends CI_Controller {

   function __construct() {
      parent::__construct();
   }

   /**
    * Login page admin panel
    */
   public function index() {
      if ($this->ion_auth->is_admin()) {
         redirect('administrator/admin_panel');
      }
      $this->load->view('administrator/admin_login');
   }

   /**
    * post login admin
    */
   public function login_post() {
      // ambil value dari form login
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      // check credential dan jika buka administrator
      if ($this->ion_auth->login($username, $password)) {
         if ($this->ion_auth->is_admin()) {
            redirect('administrator/admin_panel');
         } else {
            $this->ion_auth->logout();
            $this->session->set_flashdata('not_admin', TRUE);
            redirect('administrator');
         }
      }

      // jika invalid
      $this->session->set_flashdata('invalid', TRUE);
      redirect('administrator');
   }

   /**
    * Admin Panel
    */
   public function admin_panel() {
      $model['users'] = $this->ion_auth->users(2)->result();
      $this->load->view('administrator/admin_panel', $model);
   }

   /**
    * Admin Logout
    */
   public function logout() {
      $this->ion_auth->logout();
      redirect('administrator');
   }
}

/* End of file administrator.php */
/* Location: ./application/controller/administrator.php */