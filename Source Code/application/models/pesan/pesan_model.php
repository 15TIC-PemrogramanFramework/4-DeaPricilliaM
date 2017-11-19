	<?php  
/**
* 
*/
class pesan_model extends CI_Model
{
	public $pesan			=	'pesan';
	public $id				=	'id_pesan';
	public $order			=	'ASC';

	function __construct()
	{
		parent::__construct();

	}
	function Ambil_data() //isinya adalah query
	{
		$this->db->order_by($this->id, $this->order); 
		return $this->db->get($this->pesan)->result(); // memanggil seluruh record didatabase 
	}
	function ambil_data_id($id)
	{
		$this->db->where($this->id, $id); 
		return $this->db->get($this->pesan)->row();
	}
	function hapus_data($id)
	{
		$this->db->where($this->id,$id); 
		return $this->db->delete($this->pesan); // menghapus data dari database
	}
	function tambah_data($data){
		return $this->db->insert($this->pesan,$data); // memasukkan record dari form ke database, $data adalah variabe penampung data yang dari form. 
	}
	function edit_data($id,$data){ //Pertama 

		$this->db->where($this->id,$id); //memanggil data sesuai dengan id yang dipilih di form 
		return $this->db->update($this->pesan,$data); // mengupdate database dengan mengisikan data yang diinputkan di form.
	}

	function select(){
		$this->db->distinct();
		$this->db->select('p.id_pesan,f.judul_film, c.nama_customer, s.nama_studio');
		$this->db->from('pesan p');
		$this->db->join('film f', 'f.id_film = p.id_film');
		$this->db->join('customer c', 'c.id_cus = p.id_cus');
		$this->db->join('studio s', 's.id_studio = p.id_studio');
		return $this->db->get($this->pesan)->result();

	}
}