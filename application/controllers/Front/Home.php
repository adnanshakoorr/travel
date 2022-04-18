<?php 

class Home extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
		// $data['table'] = "homepage";
		// $content['homepages'] = $this->general->get($data);

		$content['main_content'] = 'index';

		$this->load->view('front/inc/view',$content);		

	}


	

}


?>