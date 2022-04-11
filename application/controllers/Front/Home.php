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

	//   public function contact()
	// {	
	// 	if ($_POST) 
	// 		$content = array(
	// 			'contact_name' =>	$this->input->post('contact_name',TRUE),
	// 			'contact_email' => $this->input->post('contact_email', TRUE),
	// 			'contact_phone' => $this->input->post('contact_phone',TRUE),
	// 			'contact_message' => $this->input->post('contact_message',TRUE),
	// 			'contact_status' => 'enable'
	// 		);
	// 		$data['table'] = 'contact';
	// 		$this->general->insert($data,$content);
	// 		redirect('home');
	// }

}


?>