<?php

class navigate extends CI_Controller
{
	 public function __construct() {
        parent:: __construct();
		
        $this->load->model("navigate_model");
    }

	function index()
	{
		$data['allimages'] = $this->navigate_model->get_images();
		$this->load->view('navigate_view', $data);
	}
}

		
		

	

		

