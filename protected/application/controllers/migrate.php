<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Migrate extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    /**
     * Run Migration
     *
    public function index(){
        $this->load->library('migration');
        if ($this->migration->current() === FALSE) {
            show_error($this->migration->error_string());
        } else {
            echo "Success";
        }
    }

}

/* End of file migrate.php */
/* Location: ./application/controller/migrate.php */