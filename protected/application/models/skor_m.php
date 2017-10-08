<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skor_m extends MY_Model {
   
   protected $_table_name = 'akuntansi_skor';
   protected $_order_by = 'id';

   function __construct() {
      parent::__construct();
   }

}

/* End of file skor_m.php */
/* Location: ./application/model/skor_m.php */