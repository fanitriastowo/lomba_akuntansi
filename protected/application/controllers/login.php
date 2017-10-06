<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

   function __construct() {
      parent::__construct();
   }

   /**
    * Login page
    */
   public function index() {
      $this->load->view('login');
   }

   /**
    * Post Login
    */
   public function login_post() {
      // ambil value dari form login
      // username = no_pendaftaran; diambil dari database lain
      $username = $this->input->post('username');
      $password = 'CALON123456789';

      // koneksi pusat
      $this->load->model('pusat_m');
      $user_from_pusat = $this->pusat_m->get_by_id($username);

      // check user di pusat
      if ($user_from_pusat != NULL) {

         // cancel jika user sudah pernah ujian
         if ($user_from_pusat->stsujian == 2) {
            $this->session->set_flashdata('sudah_ujian', TRUE);
            redirect('login');
         }

         // check jika di database local sudah ada user-nya
         if ($this->ion_auth->login($username, $password)) {
            redirect('login/persiapan');

            // check di database pusat dan register ke lokal
         } else if ($user_from_pusat->id == $username) {
            $username = $user_from_pusat->id;
            $password = 'CALON123456789';
            $email = 'calon@calon.com';
            $additional_data = array(
                'first_name' => 'Calon',
                'last_name' => 'Mahasiswa',
            );
            $group_ids = array('2');
            $this->ion_auth->register($username, $password, $email, $additional_data, $group_ids);
            $this->ion_auth->login($username, $password);
            redirect('login/persiapan');
         }
      }

      // jika tidak terdaftar
      $this->session->set_flashdata('invalid', TRUE);
      redirect('login');
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

      // koneksi pusat
      $this->load->model('pusat_m');
      $user_from_pusat = $this->pusat_m->get_by_id($principal->username);
      $user_from_pusat->pil1 = $this->pusat_m->get_namaprodi_by_id($user_from_pusat->pil1);
      $user_from_pusat->pil2 = $this->pusat_m->get_namaprodi_by_id($user_from_pusat->pil2);

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
            $this->ujian_m->save($save_ujian, $is_idle->id);

            // redirect ke soal
            redirect('soal');
         }
      }

      // load soal model
      $this->load->model('soal_m');

      //ambil paket soal 1 - 7 diacak dari database simpan ke table ujian
      $paket_soal = $this->soal_m->get_paket_soal($principal->id, $user_from_pusat->jenispendf);

      $data['principal'] = $user_from_pusat;
      $this->load->view('persiapan', $data);
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
