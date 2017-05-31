<?php

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();
		if($this->data['a_logged_in'] === null){
			redirect('admin/login');
		}

        $this->data['website_name'] = "Toko Jelek";
        $this->data['website_logo'] = "jelek.jpg";
	}

	function index(){
		$this->smarty->display("admin/layout.html", $this->data);
	}
}