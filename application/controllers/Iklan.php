<?php

class Iklan extends MY_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){

	}

	function detail($id = ''){
		if($id != ''){
			$detail = $this->iklan_m->with_id_member()->with_id_kategori()->get($id);
			$this->data['detail'] = $detail;
			$this->data['categories'] = $this->kategori_m->get_all();
			$this->data['related'] = $this->iklan_m->where(array('id_kategori' => $detail->id_kategori->id))->get_all();
			$this->data['content'] = $this->smarty->view("public/content_detail.html", $this->data, true);
			$this->smarty->display("public/layout.html", $this->data);
		}
	}

	function kategori($id = '',$page = '',$limit = '', $sort = '', $list = ''){
		if($id != ''){
			$products = $this->iklan_m->where(array('id_kategori' => $id))->with_id_member()->with_id_kategori()->get_all();
			$this->data['products'] = $products;
			$this->data['content'] = $this->smarty->view("public/content_kategori.html", $d, true);
			$this->smarty->display("public/layout.html", $this->data);
		}
	}

	function search(){
		$keyword = $this->input->post('keyword');
		$dcari = $this->iklan_m->search('judul', $keyword)->with_id_member()->with_id_kategori()->get_all();
		$this->data['iklan'] = $dcari;
		$this->data['keyword'] = $keyword;
		$this->data['content'] = $this->smarty->view("public/content_search.html", $this->data, true);
		$this->smarty->display("public/layout.html", $this->data);
	}
}