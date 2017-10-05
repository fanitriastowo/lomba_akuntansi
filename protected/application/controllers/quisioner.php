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

         $user_pusat = $this->pusat_m->get_by_id($principal->username); // ambil user pusat,
         $pilihan1 = $this->pusat_m->get_namaprodi_by_id($user_pusat->pil1); // ambil data pilihan1 table prodi, berdasarkan pilihan1 user
         $pilihan2 = $this->pusat_m->get_namaprodi_by_id($user_pusat->pil2); // ambil data pilihan2 table prodi, berdasarkan pilihan2 user

         $jurusan_diterima = '';
         $keterangan = '';
         $kode_prodi_diterima = '';

         // jika nilai benar lebih besar dari nilai standart pilihan1
         if ($benar >= $pilihan1->nilai) {
             $jurusan_diterima = $pilihan1->pil1;
             $keterangan = 'Lulus';
             $kode_prodi_diterima = $pilihan1->id;
         } else {
             if (empty($user_pusat->pil2)) { // jika tidak ada pilihan ke dua maka Tidak Lulus
                 $jurusan_diterima = '';
                 $keterangan = 'Tidak Lulus';
                 $kode_prodi_diterima = '';
             } else {
                 if ($benar >= $pilihan2->nilai) { // jika nilai di pilihan 2 lebih besar dari nilai standart
                     $jurusan_diterima = $pilihan2->pil2;
                     $keterangan = 'Lulus';
                     $kode_prodi_diterima = $pilihan2->id;
                 }
             }
         }

         // jika no_pendaftaran == 6 digit
         if (strlen($user_pusat->id) == 6) {
             $jurusan_diterima = $pilihan1->pil1 . '/' . $pilihan2->pil2;
             $keterangan = 'Lulus';
             $kode_prodi_diterima = $pilihan1->id;
             $benar = 61;
             $salah = 39;
         }
         
         /*
         // menambahkan nilai sebenarnya
         // PGSD ditambahkan 50 dari minimal passing grade (20 point)
         if ($kode_prodi_diterima == "0110") {
             if($benar < 70) { // nilai tidak dikonversi jika sudah diatas 70
    	        $benar += 20;
    	        $salah -= 20;
             }
         }
         
         // Farmasi ditambahkan 30 dari minimal passing grade (40 Point)
         if ($kode_prodi_diterima == "0801") {
             if ($benar < 70) {
                $benar += 30;
                $salah -= 30;
             }
         }
         
         // Kedokteran ditambahkan 26 dari minimal passing grade (56 point)
         if ($kode_prodi_diterima == "1301") {
             if ($benar < 80) {
                $benar += 26;
                $salah -= 26;
             }
         }
         */

         // Batas Registrasi
         $batas_registrasi = "";
         if ( ($kode_prodi_diterima == "0801") ) {
             $batas_registrasi = mktime(0, 0, 0, date("m"), date("d") + 7, date("Y"));
         } else { 
             //P. Bahasa Inggris, Matematika, dan Farmasi batas regis 1 bulan setelah ujian CBT 
             /*if (($kdprodku == "0105") or ($kdprodku == "0106") or ($kdprodku == "0801")) {
                 $btsregis = mktime(0, 0, 0, date("m"), date("d") + 14, date("Y"));
             } else {*/ // lainnya 2 bulan setelah CBT 
             //}
             $batas_registrasi = mktime(0, 0, 0, date("m"), date("d") + 14, date("Y"));
         } 

         // Insert ke pengumuman
         $data_pengumuman = array();
         if ($keterangan == 'Lulus' && !empty($user_pusat->nb)) {
             $data_pengumuman = array(
                 'id' => $principal->username,
                 'nama' => $user_pusat->nama,
                 'jurusan' => $jurusan_diterima,
                 'keterangan' => $keterangan . '@nb',
                 'catatan' => date('d-m-Y', $batas_registrasi),
                 'kdprod' => $kode_prodi_diterima
            );
         } else {
            $data_pengumuman = array(
                 'id' => $principal->username,
                 'nama' => $user_pusat->nama,
                 'jurusan' => $jurusan_diterima,
                 'keterangan' => $keterangan,
                 'catatan' => date('d-m-Y', $batas_registrasi),
                 'kdprod' => $kode_prodi_diterima
            );
         }
         $this->pusat_m->insert_pengumuman($data_pengumuman);

         // insert ke pmb_ujian pusat
         /* 
         id,tglujian,jammulai,jamselesai1,jamselesai2,
         paket1,paket2,paket3,paket4,paket5,paket6,paket7,paket8
         */
         $pmb_ujian_data = array(
            'id' => $principal->username,
            'tglujian' => date('Y-m-d', strtotime($ujian_by_userid->waktu_mulai)),
            'jammulai' => date('H:i:s', strtotime($ujian_by_userid->waktu_mulai)),
            'jamselesai1' => date('H:i:s', strtotime($ujian_by_userid->waktu_selesai)),
            'jamselesai2' => date('H:i:s', strtotime($ujian_by_userid->waktu_selesai)),
            'paket1' => $ujian_by_userid->paket1,
            'paket2' => $ujian_by_userid->paket2,
            'paket3' => $ujian_by_userid->paket3,
            'paket4' => $ujian_by_userid->paket4,
            'paket5' => $ujian_by_userid->paket5,
            'paket6' => $ujian_by_userid->paket6,
            'paket7' => $ujian_by_userid->paket7,
            'paket8' => NULL,
            'benar' => $benar,
            'salah' => $salah
         );
         $this->pusat_m->insert_pmb_ujian($pmb_ujian_data);

         // update pmb_pendaftaran set stssync='1' where id
         // update stsujian pmb_pendaftaran pusat
         $save_data = array('stsujian' => 2);
         $this->pusat_m->update_pmbpendaftaran($save_data, $principal->username);

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
