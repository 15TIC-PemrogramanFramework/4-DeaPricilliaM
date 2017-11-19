<?php 
/**
* 
*/
class pesan_control extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pesan/pesan_model');
		$this->load->model('film/film_model');
		$this->load->model('customer/customer_model');
		$this->load->model('studio/studio_model');
	}

	function index()
	{
		$data['pesan']=$this->pesan_model->select(); //Membuat array
		$this->load->view('project/pesan/form_menampilkanPesan',$data);
	}

	function tambah(){

		$pesan=$this->pesan_model->ambil_data();
		$data=array(
			'aksi'=> site_url('pesan/pesan_control/tambah_aksi'),
			'id_pesan'=> set_value('id_pesan'),
			'film'=> $this->film_model->Ambil_data(),
			'customer'=> $this->customer_model->Ambil_data(),
			'studio'=> $this->studio_model->Ambil_data(),
			'button'=> 'Tambah',
			);
		$this->load->view('project/pesan/form_setelahPesan',$data);
	}

	function tambah_aksi(){

		$data=array(
			'id_film'=> $this->input->post('id_film'),
			'id_cus'=> $this->input->post('id_cus'),
			'id_studio'=> $this->input->post('id_studio'),
			'id_pesan'=> $this->input->post('id_pesan'),
			);
		$this->pesan_model->tambah_data($data);
		redirect(site_url('pesan/pesan_control'));	
	}

	function delete($id){
		
		$this->pesan_model->hapus_data($id);
		redirect(site_url('pesan/pesan_control'));
	}

	function update($id){

		$pesan=$this->pesan_model->ambil_data_id($id); //memanggil data dari database berdasarkan id yang sudah dipilih. 
		$data=array(
			'aksi'=> site_url('pesan/pesan_control/update_aksi'), //membuat nama aksi ketika kita mengklik button
			'id_film'=> set_value('id_film', $pesan->id_film),
			'id_cus'=> set_value('id_cus', $pesan->id_cus),
			'id_studio'=> set_value('id_studio', $pesan->id_studio),
			'id_pesan'=> set_value('id_pesan', $pesan->id_pesan), //memanggil data yang didatabase dan ditampilkan di form, isinya adalah data dari database. 
			'film'=> $this->film_model->Ambil_data(),
			'customer'=> $this->customer_model->Ambil_data(),
			'studio'=> $this->studio_model->Ambil_data(),
			'button'=> 'Edit',
			);
		$this->load->view('project/pesan/form_setelahPesan',$data); 
	}
	function update_aksi(){

		$data=array( 
			'id_cus'=> $this->input->post('id_cus'), //mengisikan database sesuai dengan yang diinputkan di form
			'id_studio'=> $this->input->post('id_studio'),
			'id_film'=> $this->input->post('id_film'),
			);
		
		$id_pesan=$this->input->post('id_pesan'); 
		$this->pesan_model->edit_data($id_pesan,$data);
		redirect(site_url('pesan/pesan_control'));
	}

}
?>