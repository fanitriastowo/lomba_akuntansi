<?php 

class Soal_m extends MY_Model {

   protected $_table_name = 'akuntansi_soal';
   protected $_order_by = 'id';

   function __construct(){
      parent::__construct();
      $this->load->model('jawaban_m');
   }

   /**
    * Ambil soal beserta tambahannya dengan LEFT OUTER JOIN 3 table
    * dan jawaban dari user yang sudah terjawab.
    * LEFT OUTER JOIN table soal, soal_tambahan, jawaban
    * 
    * @param integer $idpaket 
    * @return array of object soal
    */
   public function get_with_jawaban($idpaket, $iduser) {
      $this->db->select('akuntansi_soal.*, akuntansi_soal_tambahan.isi AS soal_tambahan');
      $this->db->join('akuntansi_soal_tambahan', 'akuntansi_soal.tambahan = akuntansi_soal_tambahan.id', 'LEFT OUTER');
      $this->db->where('akuntansi_soal.idpaket', $idpaket);
      $list_of_soal = parent::get();
      $result = array();
      foreach ($list_of_soal as $key => $value) {

         // ambil jawaban_user dari masing-masing soal dan user
         $jawaban = $this->jawaban_m->get_jawaban_by_soalid_and_userid($value->id, $iduser);

         // construct array baru yang sudah berisi soal, soal_tambahan, dan jawaban per user
         $result[$key] = (object) array (
            "id" => $value->id,
            "idpaket" => $value->idpaket,
            "soal" => $value->soal,
            "pilihan_a" => $value->pilihan_a,
            "pilihan_b" => $value->pilihan_b,
            "pilihan_c" => $value->pilihan_c,
            "pilihan_d" => $value->pilihan_d,
            "pilihan_e" => $value->pilihan_e,
            "poin" => $value->poin,
            "kunci_jawaban" => $value->kunci_jawaban,
            "tambahan" => $value->tambahan,
            "soal_tambahan" => $value->soal_tambahan,
            "jawaban_user" => $jawaban == NULL ? NULL : $jawaban->jawaban // check if $jawaban has any value
         );
      }
      return $result;
   }

   /**
    * Ambil soal beserta tambahannya dengan LEFT OUTER JOIN
    * 
    * @param integer $idpaket 
    * @return array of object soal
    */
   public function get_with_tambahan($idpaket) {
      $this->db->select('akuntansi_soal.*, akuntansi_soal_tambahan.isi AS soal_tambahan');
      $this->db->join('akuntansi_soal_tambahan', 'akuntansi_soal.tambahan = akuntansi_soal_tambahan.id', 'LEFT OUTER');
      $this->db->where('akuntansi_soal.idpaket', $idpaket);
      return parent::get();
   }
   
   /**
    * Ambil paket soal, dan update user
    * @param object $user_id
    */
   public function get_paket_soal($user_id, $jenispendf) {

      // load mastermapel_paketsoal_jointable_m model
      $this->load->model('mastermapel_paketsoal_jointable_m');

      // load ujian_m
      $this->load->model('ujian_m');

      // ambil record ujian
      $ujian = $this->ujian_m->get_by('user_id', $user_id, TRUE);

      // Check jenis soal
      if ($jenispendf == 1) { // Jenis Soal IPA

         // ambil paket Bahasa Inggris IPA secara random
         $paket1 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(8);
         $rand_keys1 = array_rand($paket1, 1);
         
         // ambil paket Bahasa Indonesia IPA secara random
         $paket2 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(9);
         $rand_keys2 = array_rand($paket2, 1);
         
         // ambil paket Matematika IPA secara random
         $paket3 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(10);
         $rand_keys3 = array_rand($paket3, 1);

         // ambil paket Agama IPA secara random
         $paket4 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(11);
         $rand_keys4 = array_rand($paket4, 1);

         // ambil paket Biologi IPA secara random
         $paket5 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(12);
         $rand_keys5 = array_rand($paket5, 1);

         // ambil paket Fisika IPA secara random
         $paket6 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(13);
         $rand_keys6 = array_rand($paket6, 1);

         // ambil paket Kimia IPA secara random
         $paket7 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(14);
         $rand_keys7 = array_rand($paket7, 1);

         // update colom paket user
         $data = array(
            'user_id' => $user_id,
            'paket1' => $paket1[$rand_keys1]->idpaket,
            'paket2' => $paket2[$rand_keys2]->idpaket,
            'paket3' => $paket3[$rand_keys3]->idpaket,
            'paket4' => $paket4[$rand_keys4]->idpaket,
            'paket5' => $paket5[$rand_keys5]->idpaket,
            'paket6' => $paket6[$rand_keys6]->idpaket,
            'paket7' => $paket7[$rand_keys7]->idpaket
         );
         /*$data = array(
            'user_id' => $user_id,
            'paket1' => 10,
            'paket2' => 12,
            'paket3' => 15,
            'paket4' => 16,
            'paket5' => 19,
            'paket6' => 20,
            'paket7' => 23
         );*/

         // simpan ujian baru jika belum ada record di table ujian, otherwise update
         $this->ujian_m->save($data, $ujian->id);

      } else { // Jenis Soal IPS

         // ambil paket Bahasa Indonesia IPS secara random
         $paket1 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(1);
         $rand_keys1 = array_rand($paket1, 1);
         
         // ambil paket Bahasa Inggris IPS secara random
         $paket2 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(2);
         $rand_keys2 = array_rand($paket2, 1);
         
         // ambil paket Agama IPS secara random
         $paket3 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(3);
         $rand_keys3 = array_rand($paket3, 1);

         // ambil paket Matematika IPS secara random
         $paket4 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(4);
         $rand_keys4 = array_rand($paket4, 1);

         // ambil paket IPS secara random
         $paket5 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(5);
         $rand_keys5 = array_rand($paket5, 1);

         // ambil paket IPS secara random
         $paket6 = $this->mastermapel_paketsoal_jointable_m->get_paketsoal_by_idmapel(6);
         $rand_keys6 = array_rand($paket6, 1);

         // update colom paket user
         $data = array(
            'user_id' => $user_id,
            'paket1' => $paket1[$rand_keys1]->idpaket,
            'paket2' => $paket2[$rand_keys2]->idpaket,
            'paket3' => $paket3[$rand_keys3]->idpaket,
            'paket4' => $paket4[$rand_keys4]->idpaket,
            'paket5' => $paket5[$rand_keys5]->idpaket,
            'paket6' => $paket6[$rand_keys6]->idpaket,
            'paket7' => NULL
         );
         /*$data = array(
            'user_id' => $user_id,
            'paket1' => 3,
            'paket2' => 6,
            'paket3' => 7,
            'paket4' => 9,
            'paket5' => 5,
            'paket6' => NULL,
            'paket7' => NULL
         );*/

         // simpan ujian baru jika belum ada record di table ujian, otherwise update
         $this->ujian_m->save($data, $ujian->id);

      }
   }

}

/* End of file soal_m.php */
/* Location: ./application/model/soal_m.php */
