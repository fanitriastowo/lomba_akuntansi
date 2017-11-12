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
    * approwe members test
    */
   public function approve_test() {
      $user_id = $this->input->post('user_id');
      $status_ujian = $this->input->post('belum_ujian');
      $user = array(
          'belum_ujian' => $status_ujian
      );

      $this->ion_auth->update($user_id, $user);
      redirect("administrator");
   }

   /**
    * approwe members test
    */
   public function get_user_transfer_image($id) {
      $user = $this->ion_auth->user($id)->row();
      return $this->output->set_content_type('application/json')->set_output(json_encode($user));
   }

   /**
    * approwe members test
    */
   public function get_user_detail($id) {
      $user = $this->ion_auth->user($id)->row();
      return $this->output->set_content_type('application/json')->set_output(json_encode($user));
   }

   /**
    * Admin Logout
    */
   public function logout() {
      $this->ion_auth->logout();
      redirect('home');
   }
}

/* End of file administrator.php */
/* Location: ./application/controller/administrator.php */