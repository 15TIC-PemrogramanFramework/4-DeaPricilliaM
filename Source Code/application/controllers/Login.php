<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Adminn/admin_model');
		$this->load->model('customer/customer_model');
	}

	public function index()
	{
		$jabatan = $this->input->post('jabatan');
		$username = $this->input->post('username');

		if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('home');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('login');
		}
		else
		{
			if($jabatan==1){
				$customer = $this->customer_model->ambil_data_id($username);
				


				if(strtolower($this->input->post('username')) == $customer->id_cus  &&
					$this->input->post('password') == $customer->pass)
					
				{
					$this->session->set_userdata('logined', $this->input->post('username'));
					$this->session->set_userdata('status', 'customer');
					redirect("pengguna/pengguna_control/index");
				}
				else 
				{
					redirect("/");


				}

			}
			elseif($jabatan==2){
				$admin = $this->admin_model->ambil_data_id($username);
				


				if(strtolower($this->input->post('username')) == $admin->username_admin  &&
					$this->input->post('password') == $admin->password_admin)
					
				{
					$this->session->set_userdata('logined', $this->input->post('username'));
					$this->session->set_userdata('status', 'admin');
					redirect("customer/customer_control/index");
				}
				else 
				{
					redirect("/");


				}

			}
			
			else{
				redirect("/");
			}
		}

	} 
	
	public function logout()
	{
		$this->session->unset_userdata('logined');
		redirect("/");
	} 
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */