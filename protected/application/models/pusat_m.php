<?php 

class Pusat_m extends CI_Model {
   
   function __construct(){
      parent::__construct();
   }

   /**
    * get single user from pusat by id
    * @return single row
    */
   function get_by_id($id) {
      // the TRUE paramater tells CI that you'd like to return the database object.
      $pusat = $this->load->database('pusat', TRUE);
      $query = $pusat->where('id', $id)->get('pmb_pendaftaran');
      return $query->row();
   }

   /**
    * save or update pmb_pendaftaran
    * @param  array $data
    * @param  string $id
    */
   public function update_pmbpendaftaran($data, $id) {
      // the TRUE paramater tells CI that you'd like to return the database object.
      $pusat = $this->load->database('pusat', TRUE);

      // Update $data here
      $pusat->set($data);
      $pusat->where('id', $id);
      $pusat->update('pmb_pendaftaran');
      return $id;
   }   

   /**
    * insert pmb_ujian
    * @param  array $data
    */
   public function insert_pmb_ujian($data) {
      // the TRUE paramater tells CI that you'd like to return the database object.
      $pusat = $this->load->database('pusat', TRUE);
      
      // Update $data here
      $pusat->set($data);
      $pusat->insert('pmb_ujian');
   }   

   /**
    * insert pmb_ujian_temp
    * @param  array $data
    */
   public function save_jawaban($data) {
      // the TRUE paramater tells CI that you'd like to return the database object.
      $pusat = $this->load->database('pusat', TRUE);
      
      // Update $data here
      $pusat->set($data);
      $pusat->insert('pmb_ujian_temp');
   }

   /**
    * get nama prodi by id (prodi ada di database pmbsetting)
    */
   public function get_namaprodi_by_id($kode_prodi) {
       $pusat_setting = $this->load->database('pusat_setting', TRUE);
       $prodi = $pusat_setting->where('id', $kode_prodi)->get('pmb_prodi');
       return $prodi->row();
   }

   /**
    * insert pengumuman kelulusan
    */
   public function insert_pengumuman($data) {
       $pusat = $this->load->database('pusat', TRUE);
       $pusat->set($data);
       $pusat->insert('pengumuman');
   }
}
