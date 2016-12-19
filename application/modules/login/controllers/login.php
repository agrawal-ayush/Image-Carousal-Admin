<?php

class  login extends MX_Controller
{	
function __construct()
	{
		parent :: __construct();
		if($this->session->userdata('user_id')!="")
		{	
			redirect('home','refresh');
		}		
	}

function index()
{	
		if($this->session->userdata('user_id'))
		{
			redirect('home','refresh');
		}
		else
		{
	$this->load->view('login-form');
		}

}
function login_check()
	{
		$this->load->model('model_login');
		$data['login']=$this->model_login->login_check();
	
		if($data['login'] != "0" )
				{
				$user_id=$data['login'][0]->user_id;
				$user_name=$data['login'][0]->name;
				$sess = array('user_id'=>$user_id,'user_name' => $user_name,);
				$this->session->set_userdata($sess);
				//echo $this->session->userdata('user_id');
				redirect('home','refresh');
				}
		else
			{		
			$data['msg']="check your userid and password";
			$this->load->view('login-form',$data);
			}
	}

}