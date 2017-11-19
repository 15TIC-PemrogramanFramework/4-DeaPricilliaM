<?php 
/**
* 
*/
class izin_control extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('izin/izin_model');
		$this->load->model('film/film_model');
		$this->load->model('lembaga/lembaga_model');
	}

	function index()
	{
		$data['izin']=$this->izin_model->select(); //Membuat array
		$this->load->view('project/izin/form_menampilkanIzin',$data);
	}

	function tambah(){

		$izin=$this->izin_model->ambil_data();
		$data=array(
			'aksi'=> site_url('izin/izin_control/tambah_aksi'),
			'id_izin'=> set_value('id_izin'),
			'film'=> $this->film_model->Ambil_data(),
			'lembaga'=> $this->lembaga_model->Ambil_data(),
			'status'=> set_value('status'),
			'button'=> 'Tambah',
			);
		$this->load->view('project/izin/form_setelahIzin',$data);
	}

	function tambah_aksi(){

		$data=array(
			'id_film'=> $this->input->post('id_film'),
			'id_lembaga'=> $this->input->post('id_lembaga'),
			'id_izin'=> $this->input->post('id_izin'),
			'status'=> $this->input->post('status'),
			);
		$this->izin_model->tambah_data($data);
		redirect(site_url('izin/izin_control'));	
	}

	function delete($id){
		
		$this->izin_model->hapus_data($id);
		redirect(site_url('izin/izin_control'));
	}

	function update($id){

		$izin=$this->izin_model->ambil_data_id($id); //memanggil data dari database berdasarkan id yang sudah dipilih. 
		$data=array(
			'aksi'=> site_url('izin/izin_control/update_aksi'), //membuat nama aksi ketika kita mengklik button
			'id_film'=> set_value('id_film', $izin->id_film),
			'id_lembaga'=> set_value('id_lembaga', $izin->id_lembaga),
			'id_izin'=> set_value('id_izin', $izin->id_izin),
			'status'=> set_value('status', $izin->status), //memanggil data yang didatabase dan ditampilkan di form, isinya adalah data dari database. 
			'film'=> $this->film_model->Ambil_data(),
			'lembaga'=> $this->lembaga_model->Ambil_data(),
			'button'=> 'Edit',
			);
		$this->load->view('project/izin/form_setelahIzin',$data); 
	}
	function update_aksi(){

		$data=array( 
			'id_lembaga'=> $this->input->post('id_lembaga'), //mengisikan database sesuai dengan yang diinputkan di form
			'id_film'=> $this->input->post('id_film'),
			'status'=> $this->input->post('status'),
			);
		
		$id_izin=$this->input->post('id_izin'); 
		$this->izin_model->edit_data($id_izin,$data);
		redirect(site_url('izin/izin_control'));
	}

}
?>