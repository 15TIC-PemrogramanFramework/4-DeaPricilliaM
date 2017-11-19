<?php 
/**
* 
*/
class studio_control extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('studio/studio_model');
	}

	function index()
	{
		$data['customer']=$this->stuio_model->Ambil_data(); //Membuat array
		$this->load->view('project/pesan/form_setelahPesan',$data);
	}
]}

?>