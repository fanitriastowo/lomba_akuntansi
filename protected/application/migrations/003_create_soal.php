<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_soal extends CI_Migration {

   function __construct() {
      parent::__construct();
   }

   public function up() {
      $this->dbforge->add_field("id INT NOT NULL PRIMARY KEY AUTO_INCREMENT");
      $this->dbforge->add_field("idpaket INT NOT NULL");
      $this->dbforge->add_field("soal TEXT");
      $this->dbforge->add_field("pilihan_a TEXT");
      $this->dbforge->add_field("pilihan_b TEXT");
      $this->dbforge->add_field("pilihan_c TEXT");
      $this->dbforge->add_field("pilihan_d TEXT");
      $this->dbforge->add_field("pilihan_e TEXT");
      $this->dbforge->add_field("poin INT");
      $this->dbforge->add_field("kunci_jawaban char(1)");
      $this->dbforge->add_field("tambahan INT");
      $this->dbforge->add_field(
          "CONSTRAINT soal_soal_tambahan_fk FOREIGN KEY(tambahan) REFERENCES akuntansi_soal_tambahan(id) ON UPDATE NO ACTION ON DELETE CASCADE");
      $this->dbforge->create_table('soal');
   }

   public function down() {
      $this->dbforge->drop_table('soal');
   }
}

/* End of file 002_create_soal.php */
/* Location: ./application/migrations/002_create_soal.php */