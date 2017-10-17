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
                `id` MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(20) NOT NULL,
                `description` VARCHAR(100) NOT NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";

      $table_users = "
            CREATE TABLE `akuntansi_users` (
                `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                `ip_address` VARBINARY(16) NOT NULL,
                `username` VARCHAR(100) NOT NULL,
                `password` VARCHAR(80) NOT NULL,
                `salt` VARCHAR(40) DEFAULT NULL,
                `email` VARCHAR(100) DEFAULT NULL,
                `activation_code` VARCHAR(40) DEFAULT NULL,
                `forgotten_password_code` VARCHAR(40) DEFAULT NULL,
                `forgotten_password_time` INT(11) UNSIGNED DEFAULT NULL,
                `remember_code` VARCHAR(40) DEFAULT NULL,
                `created_on` INT(11) UNSIGNED NOT NULL,
                `last_login` INT(11) UNSIGNED DEFAULT NULL,
                `active` TINYINT(1) UNSIGNED DEFAULT NULL,
                `nama` VARCHAR(200) NOT NULL,
                `company` VARCHAR(100) DEFAULT '-',
                `phone` VARCHAR(20) NOT NULL DEFAULT '0',
                `tempat_lahir` VARCHAR(150) NULL ,
                `tanggal_lahir` DATE DEFAULT '2017-10-10' NOT NULL,
                `jalan` VARCHAR(200) NULL DEFAULT '-',
                `no_rumah` VARCHAR(20) NULL DEFAULT '-',
                `rt` VARCHAR(5) NULL DEFAULT '-',
                `rw` VARCHAR(5) NULL DEFAULT '-',
                `desa` VARCHAR(100) NULL DEFAULT '-',
                `kecamatan` VARCHAR(100) NULL DEFAULT '-',
                `kabupaten` VARCHAR(100) NULL DEFAULT '-',
                `provinsi` VARCHAR(50) NULL DEFAULT '-',
                `asal_sekolah` VARCHAR(200) NOT NULL,
                `jenis_sekolah` VARCHAR(5) NOT NULL,
                `pertanyaan` TEXT NOT NULL,
                `jawaban` TEXT NOT NULL,
                `photo` VARCHAR(50) DEFAULT 'blank.jpg',
                `bukti_transfer` VARCHAR(50) DEFAULT 'transfer.jpg',
                `sudah_transfer` CHAR(1) NOT NULL DEFAULT '0',
                `belum_ujian` CHAR(1) NOT NULL DEFAULT '0',
                `sudah_ujian` CHAR(1) NOT NULL DEFAULT '0',
                `jenis_kelamin` CHAR(1) NOT NULL DEFAULT 'L',
                `tanggal_daftar` date NULL DEFAULT '2017-10-10',
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";

      $table_users_groups = "
            CREATE TABLE `akuntansi_users_groups` (
                `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                `user_id` INT(11) UNSIGNED NOT NULL,
                `group_id` MEDIUMINT(8) UNSIGNED NOT NULL,
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
                `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                `ip_address` VARBINARY(16) NOT NULL,
                `login` VARCHAR(100) NOT NULL,
                `time` INT(11) UNSIGNED DEFAULT NULL,
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
            INSERT INTO `akuntansi_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`, `nama`, `company`, `phone`, `tempat_lahir`,  `jalan`, `no_rumah`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `asal_sekolah`, `jenis_sekolah`, `pertanyaan`, `jawaban`, `jenis_kelamin`, `tanggal_daftar`) VALUES
                (
                '1',0x7f000001,'administrator','59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4','9462e8eee0','admin@admin.com','',NULL,'1268889823',
                '1268889823','1', 'Admin', 'ADMIN','0', 'BANYUMAS', 'jln. Tambangan', '39', '02', '01', 'Patikraja', 'Patikraja', 'Banyumas',
                'Jawa Tengah', 'SMK Negeri 2 Purwokerto', 'SMK', 'Siapa nama drummer favorite?', 'Danny Carey', 'L', '2017-10-10'
                );
        ";

      $insert_users_groups = "
        INSERT INTO `akuntansi_users_groups` (`id`, `user_id`, `group_id`) VALUES
            (1,1,1);
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