<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('adminLogin')) {

			if ($this->uri->segment(2)) {

				if ($this->uri->segment(2)!='login') {
					redirect('admin');
				}
		}
		else{
			if($this->uri->segment(2)) {
				redirect('admin/default');
			}
			
		}
	}
	
}



	public function index()
	{
		$this->load->view('admin/login');
	}

	public function login(){
	$exist=$this->db->from('admin')->where(['mail'=>$this->input->post('email'),'password'=>$this->input->post('sifre')])->get()->row();
		if($exist){

			$this->session->set_userdata('adminLogin',true);
			$this->session->set_userdata('adminInfo',$exist);
			redirect('admin/default');

		}
		else{
			$message="E-Mail adresiniz veya şifreniz hatalıdır!";
			$this->session->set_flashdata('error',$message);
			redirect('admin');
		}
	
	}

	public function default(){
		$this->load->view('admin/default');
	}

	public function exit()
	{
		$this->session->sess_destroy();
	}
}
