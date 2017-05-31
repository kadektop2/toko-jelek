<?php

# tadinya CI_Controller, harusnya MY_Contoller

class Iklan extends MY_Controller {
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
		$crud->set_table('iklan');
		$crud->set_field_upload('foto','assets/uploads/images', 'jpg|jpeg|png');
		$crud->set_relation("id_member","members","{nama}");
        $crud->set_relation("id_kategori","kategori_iklan","{nama}");
        $crud->columns('id_member', 'id_kategori','judul', 'foto', 'harga','verif_iklan');
        $crud->callback_column("verif_iklan", array($this, "verif_action"));
        $crud->set_theme('datatables');
		$this->data['gc_data'] = $crud->render();

		$this->smarty->display('admin/layout.html', $this->data);
	}

	function verif_action($value, $row) {
        $id = $row->id;
        $iklan = $this->iklan_m->get($id);
		
        if ($iklan->is_verified == 0) {
            return '<a href="'.base_url().'admin/iklan/verify/' . $row->id . '">Verify</a>';
        } else {
			return '<a href="'.base_url().'admin/iklan/unverify/' . $row->id . '">Unverify</a>';
        }
    }

    function verify() {
        echo "<script>"
        . "var check = confirm('Apakah anda ingin memverifikasi iklan ini');"
        . "if(check === true){";
        $id = (int) $this->uri->segment(4);
        if ($id > 0) {
        	$this->iklan_m->update(array('is_verified' => 1), $id);
        }
        echo "window.location.href='" . base_url() . "admin/iklan';"
        . "}else{";
        echo "window.location.href='" . base_url() . "admin/iklan';"
        . "}"
        . "</script>";
    }

    function unverify() {
        echo "<script>"
        . "var check = confirm('Apakah anda ingin mengaktifkan user ini');"
        . "if(check === true){";
        $this->load->model("member_model");
        $id = (int) $this->uri->segment(4);
        if ($id > 0) {
			$this->iklan_m->update(array('is_verified' => 0), $id);
        }
        echo "window.location.href='" . base_url() . "admin/iklan';"
        . "} else{";
        echo "window.location.href='" . base_url() . "admin/iklan';"
        . "}"
        . "</script>";
    }

	function kategori(){
		$crud = new grocery_CRUD();
		$crud->set_table('kategori_iklan');
		$crud->set_theme('datatables');
		$this->data['gc_data'] = $crud->render();

		$this->smarty->display('admin/layout.html', $this->data);
	}
}