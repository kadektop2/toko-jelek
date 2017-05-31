<?php

class Member extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		//session yang bener
        if($this->data['a_logged_in'] === null){
            redirect('admin/login');
        }

        // session yang salah       
        // if($this->session->userdata('a_logged_in') === null){
        //     redirect('admin/login');
        // }
        
        $this->data['website_name'] = "Toko Jelek";
        $this->data['website_logo'] = "jelek.jpg";
	}

	function index(){
		$crud = new grocery_CRUD();
		$crud->set_table('members');
		$crud->set_theme('flexigrid');
		$crud->columns('nama', 'dob','hp', 'email', 'foto');
		$crud->set_field_upload('foto','assets/uploads/images', 'jpg|jpeg|png');
		$crud->callback_delete(array($this,'delete_member'));
		$crud->callback_before_update(array($this,'hash_password'));
		$crud->callback_before_insert(array($this,'hash_password'));
		$this->data['gc_data'] = $crud->render();

		$this->smarty->display('admin/layout.html', $this->data);
	}

	function hash_password($post_array, $primary_key) {
		if(!empty($post_array['password']))
		{
			$post_array['password'] = md5($post_array['password']);
		}
		else
		{
			unset($post_array['password']);
		}
		 
		return $post_array;
	}

	function delete_member($primary_key)
	{
		$data = $this->iklan_m->where(array('id_member' => $primary_key))->get_all();

		if(count($data) > 0){
			foreach($data as $key => $value){
				$this->iklan_m->delete($value->id);
			}
		}

		$ds = $this->member_m->delete($primary_key);
		if($ds){
			return true;
		} else {
			return false;
		}
	}
}