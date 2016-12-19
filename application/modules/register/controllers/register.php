<?php

class register extends CI_Controller
{
	 public function __construct() {
        parent:: __construct();
		
        $this->load->model("reg_model");
    }

	function index()
	{
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	
		
		$this->form_validation->set_rules('username', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('name', 'required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('mnum', 'Contact No', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('password', 'Password','trim|required|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required');
	
		
		if ($this->form_validation->run() == FALSE)
		{
      		
			$this->load->view('registration');
		}
		else 
		{
			$userN =$this->input->post('username'); 
            $passD =$this->input->post('password');
            $name =$this->input->post('name');
			$date = date("Y-m-d"); 
			$mnum =$this->input->post('mnum');
            $this->reg_model->save($userN,$passD,$name,$date,$mnum);
			$this->load->view('login');
			
		}


            
		}
	

	

}

		
		

	

		

