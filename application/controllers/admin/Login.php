<?php 

class Login extends MY_Controller {
	function __construct(){
		parent::__construct();

        $this->data['website_name'] = "Toko Jelek";
        $this->data['website_logo'] = "jelek.jpg";
	}

	function index(){
		if($this->data['a_logged_in']  == 'true'){
			redirect('admin/dashboard');
		}
		$this->smarty->display("admin/login.html", $this->data);
	}

	function auth(){
		$identity = $this->input->post('identity');
		$password = md5($this->input->post('password'));

		$data = $this->member_m->where(array('email' => $identity, 'password' => $password))->get();

		if($data != null && $data->level == 'admin'){
			$sess['admin'] = array(
					'level' => $data->level,
					'nama' => $data->nama,
					'dob' => $data->dob,
					'username' => $data->username,
					'foto' => $data->foto,
					'hp' => $data->hp,
					'email' => $data->email,
					'a_logged_in' => "true",
				);
			$this->session->set_userdata($sess);

			redirect('admin/dashboard');
			//give success message
		} else {
			redirect('admin/login');
			//give error message
		}
	}
}