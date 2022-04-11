<?php 

class Signup extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
		
		$this->load->view('front/signup');		

	}


	public function register()
	{	
		if ($_POST) {

			$this->form_validation->set_rules('fn', 'Full Name', 'required'); 
			$this->form_validation->set_rules('e','Email','required|valid_email|is_unique[users.e]',array('is_unique' => 'The %s is already taken'));
			$this->form_validation->set_rules('p', 'Password', 'required|min_length[5]|max_length[15]'); 
			$this->form_validation->set_rules('cp', 'Confirm password', 'min_length[5]|max_length[15]|required|matches[p]'); 

			if ($this->form_validation->run() == FALSE)
			{	
				$this->load->view('front/signup');
			}

			else
			{
				$content = array(
					'fn' =>	$this->input->post('fn',TRUE),
					'e' => $this->input->post('e', TRUE),
					'p' => $this->input->post('p', TRUE),
					// 'p' => $this->encryption->encrypt($this->input->post('p')),
				);

				$data['table'] = 'users';
				$done = $this->general->insert($data,$content);

				if($done)
				{
					$this->session->set_userdata('auth', $content);

					$this->session->set_flashdata('success', 'Registered Successfully');
					redirect();
				}
				else
				{
					$this->session->set_flashdata('success', 'Something went wrong');
					redirect('signup');
				}
			}
		}

		else
		{
			redirect('signup');
		}


	}

}

