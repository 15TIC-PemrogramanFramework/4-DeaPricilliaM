<?php 
/**
* 
*/
class film_control extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('film/film_model');
	}

	function index()
	{
		$data['film']=$this->film_model->Ambil_data(); //Membuat array
		$this->load->view('project/film/form_list_film',$data);
	}

	function tambah(){

		$data=array(
			'aksi'=> site_url('film/film_control/tambah_aksi'),
			'judul_film'=> set_value('judul_film'),
			'rating_film'=> set_value('rating_film'),
			'durasi_film'=>set_value('durasi_film'),
			'kategori'=>set_value('kategori'),
			'jam_tayang'=>set_value('jam_tayang'),
			'id_film'=> set_value('id_film'),
			'button'=> 'Tambah',
			);
		$this->load->view('project/film/form_film',$data);
	}

	function tambah_aksi(){

		$data=array(
			'judul_film'=> $this->input->post('judul_film'),
			'rating_film'=> $this->input->post('rating_film'),
			'durasi_film'=> $this->input->post('durasi_film'),
			'kategori'=> $this->input->post('kategori'),
			'jam_tayang'=>$this->input->post('jam_tayang'),
			);
		$this->film_model->tambah_data($data);
		redirect(site_url('film/film_control'));	
	}

	function delete($id){
		
		$this->film_model->hapus_data($id);
		redirect(site_url('film/film_control'));
	}

	function update($id){

		$film=$this->film_model->ambil_data_id($id); //memanggil data dari database berdasarkan id yang sudah dipilih. 
		$data=array(
			'aksi'=> site_url('film/film_control/update_aksi'), //membuat nama aksi ketika kita mengklik button
			'judul_film'=> set_value('judul_film', $film->judul_film), //memanggil data yang didatabase dan ditampilkan di form, isinya adalah data dari database. 
			'rating_film'=> set_value('rating_film', $film->rating_film),
			'durasi_film'=> set_value('durasi_film', $film->durasi_film),
			'kategori'=> set_value('kategori', $film->kategori),
			'jam_tayang'=>set_value('jam_tayang', $film->jam_tayang),
			'id_film'=> set_value('id_film', $film->id_film),
			'button'=> 'Edit',
			);
		$this->load->view('project/film/form_film',$data); 
	}
	function update_aksi(){

		$data=array( 
			'judul_film'=> $this->input->post('judul_film'), //mengisikan database sesuai dengan yang diinputkan di form
			'rating_film'=> $this->input->post('rating_film'),
			'durasi_film'=> $this->input->post('durasi_film'),
			'kategori'=> $this->input->post('kategori'),
			'jam_tayang'=>$this->input->post('jam_tayang'),
			);
		
		$id_film=$this->input->post('id_film'); 
		
		$this->film_model->edit_data($id_film,$data);
		redirect(site_url('film/film_control'));
	}

}
?>