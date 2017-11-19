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
	}

	function index()
	{
		$data['izin']=$this->izin_model->Ambil_data(); //Membuat array
		$this->load->view('project/izin/form_setelahIzin',$data);
	}
]}

?>