<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
}
