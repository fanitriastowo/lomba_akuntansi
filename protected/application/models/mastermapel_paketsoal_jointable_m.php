<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mastermapel_paketsoal_jointable_m extends MY_Model {
   
   protected $_table_name = 'cbt_mastermapel_paketsoal_jointable';
   protected $_order_by = 'id';

   function __construct() {
      parent::__construct();
   }

   public function get_paketsoal_by_idmapel($idmapel) {
      return $this->get_by('idmapel', $idmapel, $single = FALSE);
   }
}

/* End of file Mastermapel_paket_jointable_m.php */
/* Location: ./application/model/Mastermapel_paket_jointable_m.php */