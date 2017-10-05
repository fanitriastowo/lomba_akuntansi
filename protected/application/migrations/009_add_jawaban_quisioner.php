<?php 

class Migration_add_jawaban_quisioner extends CI_Migration {
   
   function __construct() {
      parent::__construct();
   }

   public function up() {
      $this->dbforge->add_field("id INT PRIMARY KEY AUTO_INCREMENT");
      $this->dbforge->add_field("user_id INT unsigned");
      $this->dbforge->add_field("ujian_id INT NOT NULL");
      $this->dbforge->add_field("jawaban_quisioner TEXT");
      $this->dbforge->add_field(
         "CONSTRAINT jawaban_user_fk FOREIGN KEY(user_id) REFERENCES cbt_users(id) ON UPDATE NO ACTION ON DELETE CASCADE");
      $this->dbforge->add_field(
         "CONSTRAINT quisioner_ujian_fk FOREIGN KEY(ujian_id) REFERENCES cbt_ujian(id) ON UPDATE NO ACTION ON DELETE CASCADE");
      $this->dbforge->create_table('jawaban_quisioner');
   }

   public function down() {
      $this->dbforge->drop_table('jawaban_quisioner');
   }
}