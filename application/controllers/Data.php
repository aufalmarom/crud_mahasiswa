<?php
Class Data extends CI_Controller{
	public function index(){
		$this->load->model("model_data");
		$data['list_mahasiswa'] = $this->model_data->load_mahasiswa();

		$this->load->view("data_mahasiswa",$data);
	}


	public function add(){
		$this->load->model("model_data");
		$data['tipe'] = "Tambah";

		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_data->simpan($_POST);
			redirect("data");
		}

		$this->load->view("form_mahasiswa",$data);
	}

	

	public function edit($id){
		$this->load->model("model_data");
		$data['tipe'] = "Edit";
		$data['default'] = $this->model_data->get_default($id);

		if(isset($_POST['tombol_submit'])){
			$this->model_data->update($_POST, $id);
			redirect("data");
		}

		$this->load->view("form_mahasiswa",$data);
	}


	public function delete($id){
		$this->load->model("model_data");
		$this->model_data->hapus($id);
		redirect("data");
	}



}