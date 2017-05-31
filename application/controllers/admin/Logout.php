<?php

class Logout extends MY_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->unset_only();
		redirect('admin/login');
	}


	function unset_only() {
    	$user_data = $this->session->all_userdata();

    	foreach ($user_data as $key => $value) {
        	$this->session->unset_userdata($key);
    	}
	}
}