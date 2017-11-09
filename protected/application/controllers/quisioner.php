<?php 

class Quisioner extends CI_Controller {
   
   function __construct() {
      parent::__construct();
   }

   /**
    * tampilkan halaman quisioner
    */
   public function index() {
      // redirect if not logged in
      if (!$this->ion_auth->logged_in()) {redirect('login');}
      $this->load->view('quisioner');
   }

   /**
    * post quisioner, and save into database
    */
   public function post() {
      // load model
      $this->load->model('ujian_m');
      $this->load->model('jawaban_m');
      $this->load->model('jawaban_quisioner_m');
      $this->load->model('pusat_m');
      $this->load->model('soal_m');

      $principal = $this->ion_auth->user()->row();
      $ujian = $this->ujian_m->get_by('user_id', $principal->id, TRUE);

      // insert jawaban quisioner sejumlah soal (jumlah 22)
      $data_soal1 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 1,'jawaban_quisioner' => $this->input->post('soal_1'));
      $data_soal2 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 2, 'jawaban_quisioner' => $this->input->post('soal_2'));
      $data_soal3 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 3, 'jawaban_quisioner' => $this->input->post('soal_3'));
      $data_soal4 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 4, 'jawaban_quisioner' => $this->input->post('soal_4'));
      $data_soal5 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 5, 'jawaban_quisioner' => $this->input->post('soal_5'));
      $data_soal6 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 6, 'jawaban_quisioner' => $this->input->post('soal_6'));
      $data_soal7 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 7, 'jawaban_quisioner' => $this->input->post('soal_7'));
      $data_soal8 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 8, 'jawaban_quisioner' => $this->input->post('soal_8'));
      $data_soal9 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 9, 'jawaban_quisioner' => $this->input->post('soal_9'));
      $data_soal10 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 10, 'jawaban_quisioner' => $this->input->post('soal_10'));
      $data_soal11 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 11, 'jawaban_quisioner' => $this->input->post('soal_11'));
      $data_soal12 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 12, 'jawaban_quisioner' => $this->input->post('soal_12'));
      $data_soal13 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 13, 'jawaban_quisioner' => $this->input->post('soal_13'));
      $data_soal14 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 14, 'jawaban_quisioner' => $this->input->post('soal_14'));
      $data_soal15 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 15, 'jawaban_quisioner' => $this->input->post('soal_15'));
      $data_soal16 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 16, 'jawaban_quisioner' => $this->input->post('soal_16'));
      $data_soal17 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 17, 'jawaban_quisioner' => $this->input->post('soal_17'));
      $data_soal18 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 18, 'jawaban_quisioner' => $this->input->post('soal_18'));
      $data_soal19 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 19, 'jawaban_quisioner' => $this->input->post('soal_19'));
      $data_soal20 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 20, 'jawaban_quisioner' => $this->input->post('soal_20'));
      $data_soal21 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 21, 'jawaban_quisioner' => $this->input->post('soal_21'));
      $data_soal22 = array('user_id' => $principal->id, 'ujian_id' => $ujian->id, 'quisioner_id' => 22, 'jawaban_quisioner' => $this->input->post('soal_22'));

      $this->jawaban_quisioner_m->save($data_soal1);
      $this->jawaban_quisioner_m->save($data_soal2);
      $this->jawaban_quisioner_m->save($data_soal3);
      $this->jawaban_quisioner_m->save($data_soal4);
      $this->jawaban_quisioner_m->save($data_soal5);
      $this->jawaban_quisioner_m->save($data_soal6);
      $this->jawaban_quisioner_m->save($data_soal7);
      $this->jawaban_quisioner_m->save($data_soal8);
      $this->jawaban_quisioner_m->save($data_soal9);
      $this->jawaban_quisioner_m->save($data_soal10);
      $this->jawaban_quisioner_m->save($data_soal11);
      $this->jawaban_quisioner_m->save($data_soal12);
      $this->jawaban_quisioner_m->save($data_soal13);
      $this->jawaban_quisioner_m->save($data_soal14);
      $this->jawaban_quisioner_m->save($data_soal15);
      $this->jawaban_quisioner_m->save($data_soal16);
      $this->jawaban_quisioner_m->save($data_soal17);
      $this->jawaban_quisioner_m->save($data_soal18);
      $this->jawaban_quisioner_m->save($data_soal19);
      $this->jawaban_quisioner_m->save($data_soal20);
      $this->jawaban_quisioner_m->save($data_soal21);
      $this->jawaban_quisioner_m->save($data_soal22);

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

         // delete jawaban di database local
         // $this->jawaban_m->delete_all_jawaban_by_userid($principal->id);
             
      }

      // logout
      $this->ion_auth->logout();
      redirect('soal/selesai');
   }

}
