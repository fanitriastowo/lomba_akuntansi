<?php

class Migration_create_skor extends CI_Migration {

   function __construct() {
      parent::__construct();
   }

   public function up() {
      $this->dbforge->add_field("id INT NOT NULL PRIMARY KEY AUTO_INCREMENT");
      $this->dbforge->add_field("user_id INT unsigned");
      $this->dbforge->add_field("skor INT");
      $this->dbforge->add_field("keterangan VARCHAR(250)");
      $this->dbforge->add_field(
          "CONSTRAINT skor_users_fk FOREIGN KEY(user_id) REFERENCES akuntansi_users(id) ON UPDATE NO ACTION ON DELETE CASCADE");
      $this->dbforge->create_table('skor');
   }

   public function down() {
      $this->dbforge->drop_table('skor');
   }
}