<?php 

class Plan extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
		$content['main_content'] = 'plan';
		$this->load->view('front/inc/view',$content);

	}


	public function start()
	{
		if($_POST)
		{
			$data = array(

				'place' => $this->input->post('place'),
				'start' => $this->input->post('startDate'),
				'end' => $this->input->post('endDate'),
			);

			$this->session->set_userdata('trip_place', $data);
			$tripData = $this->session->userdata('trip_place');
			
			function getDatesFromRange($start, $end, $format = 'm-d-Y') {


				$array = array();

				$interval = new DateInterval('P1D');

				$realEnd = new DateTime($end);
				$realEnd->add($interval);

				$period = new DatePeriod(new DateTime($start), $interval, $realEnd);


				foreach($period as $date) {                 
					$array[] = $date->format($format); 
				}

				return $array;
			}


			$startDate = $data['start'];
			$endDate = $data['end'];

			$date = getDatesFromRange($startDate, $endDate);

			$this->session->set_userdata('trip_date', $date);

			$tripDate = $this->session->userdata('trip_date');

	   		// echo '<pre>'; print_r($tripData);
	   		// echo '<pre>'; print_r($tripDate); exit();
			if ($this->session->userdata('auth')) {
			redirect('activity');
			}
			else
			{
				redirect('login');
			}

		}

	}


}


?>