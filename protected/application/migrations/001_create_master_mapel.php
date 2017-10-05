<?php 

class Migration_create_master_mapel extends CI_Migration {
	
	function __construct() {
		parent::__construct();
	}

	public function up() {
		$this->dbforge->add_field("id INT NOT NULL PRIMARY KEY");
		$this->dbforge->add_field("mapel VARCHAR(200)");
		$this->dbforge->create_table('master_mapel');
	}

	public function down() {
		$this->dbforge->drop_table('master_mapel');
	}
}