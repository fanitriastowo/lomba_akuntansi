<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jawaban_m extends MY_Model{

   protected $_table_name = 'cbt_jawaban';
   protected $_order_by = 'id';

   function __construct(){
      parent::__construct();
   }

   /**
    * ambil data tunggal jawaban berdasarkan soalid dan userid
    * @param  [int] $soalid 
    * @param  [int] $userid 
    */
   public function get_by_soalid_and_userid($soal_id, $user_id) {
      $this->db->where('soal_id', $soal_id);
      $this->db->where('user_id', $user_id);
      return $this->get(NULL, TRUE);
   }

   /**
    * ambil data tunggal hanya field jawaban berdasarkan soalid dan userid
    * @param  [int] $soalid 
    * @param  [int] $userid 
    */
   public function get_jawaban_by_soalid_and_userid($soal_id, $user_id) {
      $this->db->select('jawaban');
      $this->db->from('jawaban');
      $this->db->where('soal_id', $soal_id);
      $this->db->where('user_id', $user_id);
      return $this->db->get()->row();
   }

   /**
    * ambil data tunggal hanya field jawaban berdasarkan soalid dan userid
    * @param  [int] $soalid 
    * @param  [int] $userid 
    */
   public function delete_all_jawaban_by_userid($user_id) {
      $this->db->where('user_id', $user_id);
      $this->db->delete($this->_table_name);
   }

}

/* End of file jawaban_m.php */
/* Location: ./application/model/jawaban_m.php */