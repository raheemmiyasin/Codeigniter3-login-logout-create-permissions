<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends My_Force_Admin {
    
    public function __construct() {
	parent::__construct();
            
    }
    
    public function index() {
        
        $data['page_title'] = 'Admin - Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('admin/view');
        $this->load->view('templates/footer');
    }
} // END controller
