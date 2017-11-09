<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home class
 */
class Soal extends CI_Controller {

   function __construct() {
      parent::__construct();
   }

   /**
    * Access Home Page
    */
   public function index() {
      // redirect ke login jika belum
      if (!$this->ion_auth->logged_in()) {
         redirect('login');
      }

      // load principal
      $principal = $this->ion_auth->user()->row();

      $this->load->model('soal_m');
      $data['list_soal'] = array();

      $this->load->model('ujian_m');
      $ujian = $this->ujian_m->get_by('user_id', $principal->id, TRUE);

      $finish = null;
      if ($ujian->idle == 1) { // invoke if user is idle (is logged in)

         // ambil tiap soal berdasarkan paket yang didapat user
         $paket1 = $this->soal_m->get_with_jawaban($ujian->paket1, $principal->id);
         $paket2 = $this->soal_m->get_with_jawaban($ujian->paket2, $principal->id);
         $paket3 = $this->soal_m->get_with_jawaban($ujian->paket3, $principal->id);
         $paket4 = $this->soal_m->get_with_jawaban($ujian->paket4, $principal->id);
         $paket5 = $this->soal_m->get_with_jawaban($ujian->paket5, $principal->id);
         $paket6 = $this->soal_m->get_with_jawaban($ujian->paket6, $principal->id);
         $paket7 = $this->soal_m->get_with_jawaban($ujian->paket7, $principal->id);

         // merge dengan model
         $data['list_soal'] = array_merge($data['list_soal'], $paket1);
         $data['list_soal'] = array_merge($data['list_soal'], $paket2);
         $data['list_soal'] = array_merge($data['list_soal'], $paket3);
         $data['list_soal'] = array_merge($data['list_soal'], $paket4);
         $data['list_soal'] = array_merge($data['list_soal'], $paket5);
         $data['list_soal'] = array_merge($data['list_soal'], $paket6);
         $data['list_soal'] = array_merge($data['list_soal'], $paket7);

         $finish = strtotime($ujian->waktu_selesai);

      } else { // invoke if it's a new user

         // ambil tiap soal berdasarkan paket yang didapat user
         $paket1 = $this->soal_m->get_with_tambahan($ujian->paket1);
         $paket2 = $this->soal_m->get_with_tambahan($ujian->paket2);
         $paket3 = $this->soal_m->get_with_tambahan($ujian->paket3);
         $paket4 = $this->soal_m->get_with_tambahan($ujian->paket4);
         $paket5 = $this->soal_m->get_with_tambahan($ujian->paket5);
         $paket6 = $this->soal_m->get_with_tambahan($ujian->paket6);
         $paket7 = $this->soal_m->get_with_tambahan($ujian->paket7);

         // merge dengan model
         $data['list_soal'] = array_merge($data['list_soal'], $paket1);
         $data['list_soal'] = array_merge($data['list_soal'], $paket2);
         $data['list_soal'] = array_merge($data['list_soal'], $paket3);
         $data['list_soal'] = array_merge($data['list_soal'], $paket4);
         $data['list_soal'] = array_merge($data['list_soal'], $paket5);
         $data['list_soal'] = array_merge($data['list_soal'], $paket6);
         $data['list_soal'] = array_merge($data['list_soal'], $paket7);

         // get current time and calculate finish time
         $start_time = time();
         $end_time = 3600; // add 90 Minute
         $finish = $start_time + $end_time;

         // update status idle menjadi TRUE
         $value = array(
             'idle' => 1,
             'stsujian' => 1,
             'waktu_mulai' => date('Y-m-d H:i:s', $start_time),
             'waktu_selesai' => date('Y-m-d H:i:s', $finish),
             'autosave_time' => date('Y-m-d H:i:s', $start_time)
         );
         $this->ujian_m->save($value, $ujian->id);
      }

      $data['finish_time'] = date('m/d/Y H:i:s', $finish);
      $data['user'] = $principal;
      $this->load->view('soal', $data);
   }

   /**
    * ajax post to save into database
    */
   public function save_ajax() {
      $soal_id = $this->input->post('soal_id');
      $jawaban = $this->input->post('jawaban');
      $user_id = $this->input->post('user_id');

      $this->load->model('jawaban_m');
      $data = array(
          'jawaban' => $jawaban,
          'user_id' => $user_id,
          'soal_id' => $soal_id
      );

      // get jawaban by soal_id and user_id,
      // if it exist, than it's update otherwise it's insert
      $result = $this->jawaban_m->get_by_soalid_and_userid($soal_id, $user_id, TRUE);
      if (empty($result)) {
         // insert new jawaban (new user)
         $this->jawaban_m->save($data);

      } else {
         // update jawaban (logged user)
         $this->jawaban_m->save($data, $result->id);
      }

   }

   /**
    * Selesai setelah user mengisi semua soal atau waktu habis
    * redirect ke view selesai_test.php
    */
   public function selesai_test() {
      // redirect quisioner
      // redirect('quisioner');
      $this->load->view('selesai_test');
   }

   /**
    * load halaman selesai
    */
   public function selesai() {
      // load model
      $this->load->model('ujian_m');
      $this->load->model('soal_m');

      $principal = $this->ion_auth->user()->row();

      // update status user menjadi in_active
      $value = array('active' => 0);
      $this->ion_auth->update($principal->id, $value);

      $ujian_by_userid = $this->ujian_m->get_by('user_id', $principal->id, TRUE);

      // start sync
      if ($ujian_by_userid->stssync == 0) {
         $benar = 0;
         $salah = 0;
         $result = $this->jawaban_m->get_by('user_id', $principal->id);
         foreach ($result as $key => $value) {
            $single_soal = $this->soal_m->get($value->soal_id, TRUE);
            if ($value->jawaban == $single_soal->kunci_jawaban) {
               $benar++;
            } else {
               $salah++;
            }
         }


         // update status idle dan stsujian lokal
         $ujian_data = array('idle' => 0, 'stsujian' => 2, 'stssync' => 1);
         $this->ujian_m->save($ujian_data, $ujian_by_userid->id);

      }

      // logout
      $this->ion_auth->logout();
      $this->load->view('selesai_test');
   }

   /**
    * update waktu_selesai setiap 5 menit,
    */
   public function update_waktu_selesai() {
      $principal = $this->ion_auth->user()->row();
      $this->load->model('ujian_m');
      $ujian = $this->ujian_m->get_by('user_id', $principal->id, TRUE);

      // simpan waktu sekarang setiap 5 menit
      $data = array('autosave_time' => date('Y-m-d H:i:s', time()));
      $this->ujian_m->save($data, $ujian->id);
   }

}

/* End of file akun.php */
/* Location: ./application/controller/akun.php */
