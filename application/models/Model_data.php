<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_data extends CI_Model{

	public function load_mahasiswa(){
		$sql = $this->db->query("SELECT * FROM mahasiswa");
		return $sql->result_array();
	}

	public function simpan($post){

		$nama = $this->db->escape($post['nama']);
		$nim = $this->db->escape($post['nim']);

		$sql = $this->db->query("INSERT INTO mahasiswa VALUES (NULL, $nama, $nim)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM mahasiswa WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){

		$nama = $this->db->escape($post['nama']);
		$nim = $this->db->escape($post['nim']);


		$sql = $this->db->query("UPDATE mahasiswa SET name = $nama, nim = $nim WHERE id = ".intval($id));

		return true;
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');
	}	

}