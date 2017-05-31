<?php

class Iklan_model extends MY_Model {
	public $table = "iklan";

	function __construct()
	{
		$this->has_one['id_member'] = array('foreign_model'=>'Member_model','foreign_table'=>'members','foreign_key'=>'id','local_key'=>'id_member');
		$this->has_one['id_kategori'] = array('foreign_model'=>'Kategori_model','foreign_table'=>'kategori_iklan','foreign_key'=>'id','local_key'=>'id_kategori');
		parent::__construct();
	}

	public function search($column, $term, $w = 'both')
    {
        $this->db->like($column, $term, $w);
        return $this;
    }
}