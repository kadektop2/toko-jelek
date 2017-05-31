<?php

class Home extends MY_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		$iklan = $this->iklan_m->where(array('is_verified' => 1))->with_id_member()->get_all();
		$data['session'] = $this->session->all_userdata();
		$this->data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$this->data['iklan'] = $iklan;
		$this->data['content'] = $this->smarty->view("public/content_home.html", $this->data, true);
		$this->smarty->display("public/layout.html", $this->data);
	}

	function login(){
		$this->data['content'] = $this->smarty->view("public/content_login.html", array(), true);
		$this->smarty->display("public/layout.html", $this->data);
	}

	function profile() {
		$this->data['content'] = $this->smarty->view("public/content_profile.html", array(), true);
		$this->smarty->display("public/layout.html", $this->data);
	}

	function register(){
		$this->data['content'] = $this->smarty->view("public/content_register.html", array(), true);
		$this->smarty->display("public/layout.html", $this->data);
	}

	function iklan() {
		$this->data['content'] = $this->smarty->view("public/content_semuaiklan.html", array(), true);
		$this->smarty->display("public/layout.html", $this->data);
	}

	function ceklogin(){
		$email	  = $this->input->post('email');
		$password = md5($this->input->post('password'));

		//setelah login, data diambil
		$data = $this->member_m->where(array('email' => $email, 'password' => $password))->get();

		if($data != null){
			//jika data tidak null, maka simpan data user di session. Jadi kalo mau ambil apa2 dari user gak perlu request ke db. Biar db nya gak ngos2an
			$sess['member'] = array(
					'level' => $data->level,
					'nama' => $data->nama,
					'dob' => $data->dob,
					'foto' => $data->foto,
					'hp' => $data->hp,
					'username' => $data->username,
					'email' => $data->email,
					'm_logged_in' => "true",
				);
			$this->session->set_userdata($sess);

			redirect('home');
			//give success message
		} else {
			redirect('home/login');
			//give error message
		}
	}

	function prosesdaftar(){
		$config['upload_path']          = './assets/uploads/images';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2048;
        $config['encrypt_name']           = true;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
            $error = array('error' => $this->upload->display_errors());

            var_dump($error);
        }
        else
     	{
            $dat = $this->upload->data();
            $username = strtolower(str_replace(" ", "_", $this->input->post('nama')));
            $data = $this->member_m->insert(array('username' => $username, 'hp' => $this->input->post('hp'), 'foto' => $dat['file_name'], 'nama' => $this->input->post('nama'), 'level' => 'member', 'dob' => $this->input->post('dob'), 'email' => $this->input->post('email'), 'password' => md5($this->input->post('password'))));

            if($data > 0){
            	redirect('home');
            } else {
            	redirect('home/register');
            }
        }
	}

	function logout(){
		$this->unset_only();
		redirect('home/login');
	}

	function unset_only() {
    	$user_data = $this->session->all_userdata();

    	foreach ($user_data as $key => $value) {
        	$this->session->unset_userdata($key);
    	}
	}

	function test(){
		var_dump($this->session->all_userdata());
		echo $this->session->all_userdata()['nama'];
	}
}