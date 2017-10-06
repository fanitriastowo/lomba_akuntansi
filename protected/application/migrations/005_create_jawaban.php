<?php

class Migration_create_jawaban extends CI_Migration {

   function __construct() {
      parent::__construct();
   }

   public function up() {
      $this->dbforge->add_field("id INT NOT NULL PRIMARY KEY AUTO_INCREMENT");
      $this->dbforge->add_field("jawaban TEXT");
      $this->dbforge->add_field("user_id INT unsigned");
      $this->dbforge->add_field("soal_id INT");
      $this->dbforge->add_field(
          "CONSTRAINT jawaban_users_fk FOREIGN KEY(user_id) REFERENCES akuntansi_users(id) ON UPDATE NO ACTION ON DELETE CASCADE");
      $this->dbforge->add_field(
          "CONSTRAINT jawaban_soal_fk FOREIGN KEY(soal_id) REFERENCES akuntansi_soal(id) ON UPDATE NO ACTION ON DELETE CASCADE");
      $this->dbforge->create_table('jawaban');
   }

   public function down() {
      $this->dbforge->drop_table('jawaban');
   }
}