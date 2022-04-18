<?php 

class Activity extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{
		
		$id = $this->session->userdata('auth')['users_id'];

		$content['days'] = $this->session->userdata('trip_date');
		
		$content['place'] = $this->session->userdata('trip_place');
		
		$content['destination'] = $content['place']['place'];
		
		$content['activity'] = $this->session->userdata('activity');

		// echo '<pre>'; print_r($content['hotel']);exit;

		$content['main_content'] = 'activity';
		$this->load->view('front/inc/view',$content);			
	}

	public function getSearch()
	{
		if($_POST['shift'] || $_POST['day'])
		{
			$shift = $_POST['shift'] ?? "";
			$day = $_POST['day'] ?? "";
			$id = $this->session->userdata('auth')['users_id'];
			$data = $this->db->query("SELECT * FROM `activity` WHERE activity_day LIKE '%$day%' AND users_id = $id");
			$result = $data->result();
			echo json_encode($result);
		}
	}



	public function add()
	{	

		if ($_POST) {

			// $id = 1;
			$id = $this->session->userdata('auth')['users_id'];
			$current_data = $this->db->select('activity_day')->from('activity')
			->where(array('users_id' => $id, 'activity_status' => 'enable'))->get()->result();

			if(!empty($current_data))
			{
			  // echo '<pre>'; print_r($current_data);exit;

				foreach($current_data as $date)
				{
					$post_date = $this->input->post('day',TRUE);

					$get_date = $date->activity_day;

					if($post_date == $get_date)
					{
						echo 'date already exists'; exit;
					}
				}
				$content = array(
					'activity_name' =>	$this->input->post('activity_name',TRUE),
					'activity_desc' => $this->input->post('desc', TRUE),
					'activity_shift' => $this->input->post('shift',TRUE),
					'activity_day' => $this->input->post('day',TRUE),
					'activity_place' => $this->input->post('place',TRUE),
					'activity_cost' => $this->input->post('activity_cost',TRUE),
					'users_id' => $this->session->userdata('auth')['users_id'],
				);

				$this->session->set_userdata('activity', $content);

				$activity = $this->session->userdata('activity');

				$data['table'] = 'activity';
				$this->general->insert($data,$content);
				redirect('activity');


			}

		}
	}

	// public function add()
	// {	

	// 	if ($_POST) {

	// 		// $id = 1;
	// 		$id = $this->session->userdata('auth')['users_id'];
	// 		$current_data = $this->db->select('activity_day')->from('activity')
	// 		->where(array('users_id' => $id, 'activity_status' => 'enable'))->get()->result();

	// 		if(!empty($current_data))
	// 		{
	// 			foreach($current_data as $data)
	// 				// echo '<pre>'; print_r($data->activity_day); 
	// 			{
	// 				echo '<pre>'; print_r($data); exit;
	// 				$post_date = $this->input->post('day');

	// 				if($post_date == $data->activity_day)
	// 				{
	// 					$this->session->set_flashdata('error', 'Date already exists.');
	// 					redirect('activity');
	// 				}	
	// 				else
	// 				{
	// 					$content = array(
	// 						'activity_name' =>	$this->input->post('activity_name',TRUE),
	// 						'activity_desc' => $this->input->post('desc', TRUE),
	// 						'activity_shift' => $this->input->post('shift',TRUE),
	// 						'activity_day' => $this->input->post('day',TRUE),
	// 						'activity_place' => $this->input->post('place',TRUE),
	// 						'activity_cost' => $this->input->post('activity_cost',TRUE),
	// 						'users_id' => $this->session->userdata('auth')['users_id'],
	// 					);

	// 					$this->session->set_userdata('activity', $content);

	// 					$activity = $this->session->userdata('activity');

	// 					$data['table'] = 'activity';
	// 					$this->general->insert($data,$content);
	// 					redirect('activity');
	// 				}
	// 			}
	// 		}


	// 	}
	// }



	public function hotel()
	{	
		if ($_POST) 
			$content = array(
				'hotel_name' =>	$this->input->post('hotel_name',TRUE),
				'hotel_confirmation' => $this->input->post('hotel_confirmation', TRUE),
				'hotel_address' => $this->input->post('hotel_address',TRUE),
				'hotel_notes' => $this->input->post('hotel_notes',TRUE),
				'hotel_start_data' => $this->input->post('hotel_start_data',TRUE),
				'hotel_end_date' => $this->input->post('hotel_end_date',TRUE),
				'hotel_cost' => $this->input->post('hotel_cost',TRUE),
				'users_id' => $this->session->userdata('auth')['users_id'],
			);

		$this->session->set_userdata('hotel', $content);

		$hotel = $this->session->userdata('hotel');

			// echo '<pre>'; print_r($hotel);exit;

		$data['table'] = 'hotel';
		$this->general->insert($data,$content);
		redirect('other_details');
	}


	public function flight()
	{	
		if ($_POST) 
			$content = array(
				'flight_name' =>	$this->input->post('flight_name',TRUE),
				'flight_depart_date' => $this->input->post('flight_depart_date', TRUE),
				'flight_depart_time' => $this->input->post('flight_depart_time',TRUE),
				'flight_arrive_date' => $this->input->post('flight_arrive_date',TRUE),
				'flight_arrive_time' => $this->input->post('flight_arrive_time',TRUE),
				'flight_depart_airport' => $this->input->post('flight_depart_airport',TRUE),
				'flight_arrive_airport' => $this->input->post('flight_arrive_airport',TRUE),
				'flight_conformation' => $this->input->post('flight_conformation',TRUE),
				'flight_notes' => $this->input->post('flight_notes',TRUE),
				'flight_cost' => $this->input->post('flight_cost',TRUE),
				'users_id' => $this->session->userdata('auth')['users_id'],
			);

		$this->session->set_userdata('flight', $content);

		$flight = $this->session->userdata('flight');

			// echo '<pre>'; print_r($flight);exit;

		$data['table'] = 'flight';
		$this->general->insert($data,$content);
		redirect('other_details');
	}

}


