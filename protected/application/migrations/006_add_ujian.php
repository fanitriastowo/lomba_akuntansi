<?php

class Migration_add_ujian extends CI_Migration {

   function __construct() {
      parent::__construct();
   }

   public function up() {
      $this->dbforge->add_field("id INT NOT NULL PRIMARY KEY AUTO_INCREMENT");
      $this->dbforge->add_field("user_id INT unsigned");
      $this->dbforge->add_field("waktu_mulai DATETIME");
      $this->dbforge->add_field("waktu_selesai DATETIME");
      $this->dbforge->add_field("autosave_time DATETIME");
      $this->dbforge->add_field("paket1 tinyint(1)");
      $this->dbforge->add_field("paket2 tinyint(1)");
      $this->dbforge->add_field("paket3 tinyint(1)");
      $this->dbforge->add_field("paket4 tinyint(1)");
      $this->dbforge->add_field("paket5 tinyint(1)");
      $this->dbforge->add_field("paket6 tinyint(1)");
      $this->dbforge->add_field("paket7 tinyint(1)");
      $this->dbforge->add_field("stsujian tinyint(1) DEFAULT 0");
      $this->dbforge->add_field("stssync tinyint(1) DEFAULT 0");
      $this->dbforge->add_field("idle tinyint(1) DEFAULT 0");
      $this->dbforge->add_field(
          "CONSTRAINT ujian_users_fk FOREIGN KEY(user_id) REFERENCES akuntansi_users(id) ON UPDATE NO ACTION ON DELETE CASCADE");
      $this->dbforge->create_table('ujian');
   }

   public function down() {
      $this->dbforge->drop_table('ujian');
   }

}