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
      $model['users'] = $this->ion_auth->user_by('sudah_ujian', 1)->result();
      $this->load->view('administrator/admin_panel', $model);
   }

   /**
    * Admin Panel
    */
   public function admin_panel_archive() {
      $model['users'] = $this->ion_auth->users(2)->result();
      $this->load->view('administrator/admin_panel_archive', $model);
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
   public function approve_sudah_transfer_final() {
      $user_id = $this->input->post('user_id');
      $sudah_transfer_final = $this->input->post('sudah_transfer_final');
      $user = array('sudah_transfer_final' => $sudah_transfer_final);
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
      $this->load->model('soal_m');
      $this->load->model('jawaban_m');

      $user = $this->ion_auth->user($id)->row();
      $user_id = $user->id;

      $jawabans = $this->jawaban_m->get_by('user_id', $user_id);
      $benar = 0;
      $salah = 0;
      foreach ($jawabans as $jawaban) {
         $single_soal = $this->soal_m->get($jawaban->soal_id, TRUE);
         if ($jawaban->jawaban == $single_soal->kunci_jawaban) {
            $benar++;
         } else {
            $salah++;
         }
      }

      $return = array(
         "id" => $user->id,
         "ip_address" => $user->ip_address,
         "username" => $user->username,
         "password" => $user->password,
         "salt" => $user->salt,
         "email" => $user->email,
         "activation_code" => $user->activation_code,
         "forgotten_password_code" => $user->forgotten_password_code,
         "forgotten_password_time" => $user->forgotten_password_time,
         "remember_code" => $user->remember_code,
         "created_on" => $user->created_on,
         "last_login" => $user->last_login,
         "active" => $user->active,
         "nama" => $user->nama,
         "company" => $user->company,
         "phone" => $user->phone,
         "tempat_lahir" => $user->tempat_lahir,
         "tanggal_lahir" => $user->tanggal_lahir,
         "jalan" => $user->jalan,
         "no_rumah" => $user->no_rumah,
         "rt" => $user->rt,
         "rw" => $user->rw,
         "desa" => $user->desa,
         "kecamatan" => $user->kecamatan,
         "kabupaten" => $user->kabupaten,
         "provinsi" => $user->provinsi,
         "asal_sekolah" => $user->asal_sekolah,
         "jenis_sekolah" => $user->jenis_sekolah,
         "pertanyaan" => $user->pertanyaan,
         "jawaban" => $user->jawaban,
         "photo" => $user->photo,
         "bukti_transfer" => $user->bukti_transfer,
         "sudah_transfer" => $user->sudah_transfer,
         "belum_ujian" => $user->belum_ujian,
         "sudah_ujian" => $user->sudah_ujian,
         "jenis_kelamin" => $user->jenis_kelamin,
         "tanggal_daftar" => $user->tanggal_daftar,
         "sudah_transfer_final" => $user->sudah_transfer_final,
         "benar" => $benar,
         "salah" => $salah
      );

      return $this->output->set_content_type('application/json')->set_output(json_encode($return));
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