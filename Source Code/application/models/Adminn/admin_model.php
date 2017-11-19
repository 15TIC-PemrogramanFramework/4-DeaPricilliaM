<?php 
/**
* 

*/
class admin_model extends CI_Model
{

	public $nama_table 	= 'admin';
	public $id 			= 'username_admin';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();

	}
function ambil_data_id($id) //Kedua 
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row(); //memanggil data berdasarkan id, row() gunanya memanggil data hanya satu baris saja 
	}


}
 ?>