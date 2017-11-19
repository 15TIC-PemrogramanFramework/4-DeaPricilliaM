<?php 
/**
* 
*/
class pengguna_control extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna/pengguna_model');
		$this->load->model('customer/customer_model');
	}

	function index()
	{	
		$id = $this->session->userdata('logined');
		$data['customer']=$this->customer_model->Ambil_data_idx($id); //Membuat array
		$this->load->view('project/pengguna/menampilkan_pengguna',$data);
	}
	function pesan()
	{	
			$id = $this->session->userdata('logined');
		$data=array(
			'aksi'=> site_url('pengguna/pengguna_control/pesan_aksi'),
			
			'customer'=>$this->pengguna_model->Ambil_data_ids($id),
			
			'button'=> 'Tambah',
			);
		$this->load->view('project/pengguna/pengguna_pesan',$data);
	}

	function tambah(){

		$data=array(
			'aksi'=> site_url('customer/customer_control/tambah_aksi'),
			'nama_customer'=> set_value('nama_customer'),
			'alamat_customer'=> set_value('alamat_customer'),
			
			'button'=> 'Tambah',
			);
		$this->load->view('project/customer/form_customer',$data);
	}

	function tambah_aksi(){

		$data=array(
			'nama_customer'=> $this->input->post('nama_customer'),
			'alamat_customer'=> $this->input->post('alamat_customer'),
			);
		$this->customer_model->tambah_data($data);
		redirect(site_url('customer/customer_control'));	
	}

	function delete($id){
		
		$this->customer_model->hapus_data($id);
		redirect(site_url('customer/customer_control'));
	}

	function update($id){

		$customer=$this->customer_model->ambil_data_id($id); //memanggil data dari database berdasarkan id yang sudah dipilih. 
		$data=array(
			'aksi'=> site_url('pengguna/pengguna_control/update_aksi'),
			'nama_customer'=> set_value('nama_customer', $customer->nama_customer), //memanggil data yang didatabase dan ditampilkan di form, isinya adalah data dari database. 
			'pass'=> set_value('pass', $customer->pass),
			'alamat_customer'=> set_value('alamat_customer', $customer->alamat_customer),
			'jenis_kelamin'=> set_value('jenis_kelamin', $customer->jenis_kelamin),
			'id_cus'=> set_value('id_cus', $customer->id_cus),
			'button'=> 'Edit',
			);
		$this->load->view('project/customer/form_customer',$data); 
	}
	function update_aksi(){

		$data=array( 
			'nama_customer'=> $this->input->post('nama_customer'), //mengisikan database sesuai dengan yang diinputkan di form
			'pass'=> $this->input->post('pass'),
			'alamat_customer'=> $this->input->post('alamat_customer'),
			'jenis_kelamin'=> $this->input->post('jenis_kelamin'),
			);
		
		$id_cus=$this->input->post('id_cus'); 
		
		$this->pengguna_model->edit_data($id_cus,$data);
		redirect(site_url('pengguna/pengguna_control/index'));	}

}
?>