<?php
class  Home extends CI_Controller
{
	function _construct()
	{
	parent :: __construct();
	if($this->session->userdata('user_id')=="")
	{
            redirect(base_url(),'refresh');
	}
		//$this->load->library('form_validation');
	}
	
	function index()
	{
		
		if($this->session->userdata('user_id')=="")
	{
            redirect(base_url(),'refresh');
	}
	else
	{
		$this->load->model('model_home');
		$data['allimages'] = $this->model_home->get_images();
		$this->load->view('images', $data);
	}
	}
	
	function add()
	{
		if($this->session->userdata('user_id')=="")
	{
            redirect(base_url(),'refresh');
	}
	else
	{
		$this->load->view('add');
	}
	}
	
	function save()
	{
		
		if($this->session->userdata('user_id')=="")
	{
            redirect(base_url(),'refresh');
	}
	else
	{
		$this->load->model('model_home');
		$res = $this->model_home->save_image();
		if($res==1)
		{
			redirect(base_url(),'refresh');
		}
		else
		show_404();
	}
		
	}
	
	function edit_page($img_id)
	{
		if($this->session->userdata('user_id')=="")
	{
            redirect(base_url(),'refresh');
	}
	else
	{
		$this->load->model('model_home');
		
		$data['image']	 = $this->model_home->get_image($img_id);
		$this->load->view('edit', $data);
	}
		
	}
	function edit_image($id)
	{
		if($this->session->userdata('user_id')=="")
	{
            redirect(base_url(),'refresh');
	}
	else
	{
		
		$this->load->model('model_home');
		$data['image']	= $this->model_home->get_image_name_update($id);
		$deleted_image = $data['image']->img_name;
		unlink('assets/uploads/'.$deleted_image);
		$this->load->model('model_home');
		$res	      	 = $this->model_home->edit_image();
		if($res==1)
		{
			redirect(base_url(),'refresh');
		}
		else
		show_404();
	}
		
	}
	
	function delete_image($img_id)
	{
		if($this->session->userdata('user_id')=="")
	{
            redirect(base_url(),'refresh');
	}
	else
	{
		$this->load->model('model_home');
		$res = $this->model_home->delete_image($img_id);
		if($res==1)
		{
			redirect(base_url(),'refresh');
		}
		else
		show_404();
	}
		
	}
				
}

		
		

	

		

