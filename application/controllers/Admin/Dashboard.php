<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller{
	
	public function index()
	{	

		$this->db->where('master_admin_status', 'enable');
		$query = $this->db->get('master_admin');
		$content['count'] = $query->num_rows(); 

		
		$content['main_content'] = 'dashboard/dashboard';		
		$content['title'] = 'Dashboard';
		$this->load->view('admin/inc/view',$content);
	}



	
}
