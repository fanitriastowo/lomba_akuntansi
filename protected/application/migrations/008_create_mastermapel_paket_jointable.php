<?php 

class Migration_create_mastermapel_paket_jointable extends CI_Migration {

   function __construct() {
      parent::__construct();
   }

   public function up() {
      $this->dbforge->add_field("id INT NOT NULL PRIMARY KEY AUTO_INCREMENT");
      $this->dbforge->add_field("idmapel INT NOT NULL");
      $this->dbforge->add_field("idpaket INT NOT NULL");
      $this->dbforge->add_field(
        "CONSTRAINT idmapel_mastermapel_fk FOREIGN KEY(idmapel) REFERENCES akuntansi_master_mapel(id) ON UPDATE NO ACTION ON DELETE CASCADE");
      $this->dbforge->create_table('mastermapel_paketsoal_jointable');
   }

   public function down() {
      $this->dbforge->drop_table('mastermapel_paketsoal_jointable');
   }
}