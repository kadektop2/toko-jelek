<?php

class MY_Controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		$data = array();
		$this->data['msession'] = $this->session->userdata('member');
		$this->data['asession'] = $this->session->userdata('admin');
		// var_dump($this->session->userdata('admin'));	
		$marray = $this->session->userdata('member');
		$aarray = $this->session->userdata('admin');
		$this->data['m_logged_in'] = $marray["m_logged_in"];
		$this->data['a_logged_in'] = $aarray["a_logged_in"];
	}
}