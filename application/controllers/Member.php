<?php

class Member extends MY_Controller {
	function __construct(){
		parent::__construct();
	}

	function index($id = ''){
		$this->data['member'] = $this->member_m->get($id);
		$this->data['iklan'] = $this->iklan_m->where('id_member',$id)->with_id_member()->get_all();
		$this->data['content'] = $this->smarty->view("public/content_profile.html", $this->data, true);
		$this->smarty->display("public/layout.html", $this->data);
	}
}