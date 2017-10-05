<?php 

class Migration_create_soal_tambahan extends CI_Migration {
   
   function __construct() {
      parent::__construct();
   }

   public function up() {
      $this->dbforge->add_field("id INT NOT NULL PRIMARY KEY");
      $this->dbforge->add_field("isi TEXT");
      $this->dbforge->create_table('soal_tambahan');
   }

   public function down() {
      $this->dbforge->drop_table('soal_tambahan');
   }
}