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
		if($this->session->userdata('adminLogin')){
			redirect('admin/default');
		}
		$this->load->view('admin/login');
	}

	public function login(){
	$exist=Yonetim::find(['mail'=>$this->input->post('email'),'password'=>$this->input->post('sifre')]);
	
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
		$dataTitle['breadcrumb']="Anasayfa";
		$this->load->view('admin/default',$dataTitle);
	}

	public function exit()
	{
		$this->session->sess_destroy();
	
	}


	public function settings()
	{
		$dataTitle['breadcrumb']="Ayarlar";
		$this->load->view('admin/config',$dataTitle);
	}
	public function settingsInsert()
	{
		$data=[
			'title'=>InsertValue('title'),
			'info'=>InsertValue('info'),
			'mail'=>InsertValue('mail'),
			'phone'=>InsertValue('phone'),
			'facebook'=>InsertValue('facebook'),
			'instagram'=>InsertValue('instagram'),
			'youtube'=>InsertValue('youtube')];
			$data['logo']=UploadImage('logo','config','png');
			$data['icon']=UploadImage('icon','config','png|ico|jpg');

			Ayarlar::insert($data);
			Alertifys('success','thumb-up','Başarılı','Ayarlar güncellendi');
			TrunBack();


	}
}
