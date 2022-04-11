<?php 

class Login extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
		$this->load->view('front/login');		

	}



	public function sigin()
	{ 	
      if (($_POST))
      {		
        $email = $this->input->post('e',TRUE);
        $password = $this->input->post('p',TRUE);
        $users['where'] = array('e' => $email);		
        $users['table'] = 'users';	
        $result = $this->general->get($users);
        if($result){
          foreach($result as $row)
          {
            $pass = $row['p'];
            $emailDb = $row['e'];
            $name =	$row['fn'];
          }

          if($pass == $password && $email == $emailDb)
          {
            $session_data = array(				
              'e' => $email,
              'fn' => $name,						
            );	 


            $this->session->set_userdata('auth', $session_data);   
            $this->session->set_flashdata('success', 'Login Successfull.');
            redirect();
          }else
          {
            $this->session->set_flashdata('error', 'Invalid Email Or Password.');
            redirect('login');
          }							
        }			
      } else
      {
          $this->load->view('login');
      }	
   	
	}


	public function logout()
	{
		$this->session->sess_destroy('auth');
		redirect();
	}	

}


?>