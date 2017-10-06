<?php

/**
 *
 */
class Migration_create_users extends CI_Migration {

   function __construct() {
      return parent::__construct();
   }

   public function up() {

      // Table Groups
      $table_groups = "
            CREATE TABLE `akuntansi_groups` (
                `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
                `name` varchar(20) NOT NULL,
                `description` varchar(100) NOT NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";

      $table_users = "
            CREATE TABLE `akuntansi_users` (
                `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                `ip_address` varbinary(16) NOT NULL,
                `username` varchar(100) NOT NULL,
                `password` varchar(80) NOT NULL,
                `salt` varchar(40) DEFAULT NULL,
                `email` varchar(100) NOT NULL,
                `activation_code` varchar(40) DEFAULT NULL,
                `forgotten_password_code` varchar(40) DEFAULT NULL,
                `forgotten_password_time` int(11) unsigned DEFAULT NULL,
                `remember_code` varchar(40) DEFAULT NULL,
                `created_on` int(11) unsigned NOT NULL,
                `last_login` int(11) unsigned DEFAULT NULL,
                `active` tinyint(1) unsigned DEFAULT NULL,
                `first_name` varchar(50) DEFAULT NULL,
                `last_name` varchar(50) DEFAULT NULL,
                `company` varchar(100) DEFAULT NULL,
                `phone` varchar(20) DEFAULT NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";

      $table_users_groups = "
            CREATE TABLE `akuntansi_users_groups` (
                `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                `user_id` int(11) unsigned NOT NULL,
                `group_id` mediumint(8) unsigned NOT NULL,
                PRIMARY KEY (`id`),
                KEY `fk_users_groups_users1_idx` (`user_id`),
                KEY `fk_users_groups_groups1_idx` (`group_id`),
                CONSTRAINT `uc_users_groups` UNIQUE (`user_id`, `group_id`),
                CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `akuntansi_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
                CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `akuntansi_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";

      $table_login_attempts = "
            CREATE TABLE `akuntansi_login_attempts` (
                `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                `ip_address` varbinary(16) NOT NULL,
                `login` varchar(100) NOT NULL,
                `time` int(11) unsigned DEFAULT NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";

      ///////////////////////////////////////////////////////
      //====================== insert =====================//
      ///////////////////////////////////////////////////////
      $insert_groups = "
            INSERT INTO `akuntansi_groups` (`id`, `name`, `description`) VALUES
                (1,'admin','Administrator'),
                (2,'members','General User');
        ";

      $insert_users = "
            INSERT INTO `akuntansi_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
                ('1',0x7f000001,'administrator','59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4','9462e8eee0','admin@admin.com','',NULL,'1268889823','1268889823','1', 'Admin','istrator','ADMIN','0');
        ";

      $insert_users_groups = "
        INSERT INTO `akuntansi_users_groups` (`id`, `user_id`, `group_id`) VALUES
            (1,1,1),
            (2,1,2);
        ";

      ///////////////////////////////////////////////////////
      //====================== Execute =====================//
      ///////////////////////////////////////////////////////
      $this->db->query($table_groups);
      $this->db->query($table_users);
      $this->db->query($table_users_groups);
      $this->db->query($table_login_attempts);

      $this->db->query($insert_groups);
      $this->db->query($insert_users);
      $this->db->query($insert_users_groups);
   }

   public function down() {
      $this->dbforge->drop_table("users_groups");
      $this->dbforge->drop_table("groups");
      $this->dbforge->drop_table("users");
      $this->dbforge->drop_table("login_attempts");
   }
}