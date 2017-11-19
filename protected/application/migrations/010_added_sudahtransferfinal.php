<?php
/**
 * Created by PhpStorm.
 * User: triastowo
 * Date: 19-Nov-17
 * Time: 15:26
 */

class Migration_added_sudahtransferfinal extends CI_Migration {

   function __construct() {
      parent::__construct();
   }

   public function up() {
      $query = "ALTER TABLE akuntansi_users
         ADD sudah_transfer_final CHAR(1) DEFAULT 0";
      $this->db->query($query);
   }

   public function down() {
      $this->dbforge->drop_column('akuntansi_users', 'sudah_transfer_final');
   }
}