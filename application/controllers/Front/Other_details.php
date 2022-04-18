<?php 

class Other_details extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
		$id = $this->session->userdata('auth')['users_id'];

		$content['hotel'] = $this->db->select('*')->from('hotel')
		->where(array('users_id' => $id, 'hotel_status' => 'enable'))
		->order_by("hotel_created_at", "desc")->get()->result();
		
		$content['flight'] = $this->db->select('*')->from('flight')
		->where(array('users_id' => $id, 'flight_status' => 'enable'))
		->order_by("flight_created_at", "desc")->get()->result();

		$content['main_content'] = 'other_details';
		$this->load->view('front/inc/view',$content);		

	}

}

?>