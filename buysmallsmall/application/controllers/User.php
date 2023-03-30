<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function dashboard()
	{
		//Get featured properties
		//$data['property'] = $this->buytolet_model->getProperty($id);
		
		//$data['similarProps'] = $this->buytolet_model->similarProperties($data['property']['city']);
		
		if($this->session->has_userdata('loggedIn')){			

			$data['userID'] = $this->session->userdata('userID');
			
			$data['fname'] = $this->session->userdata('fname');
			
			$data['lname'] = $this->session->userdata('lname');
		
			//Check login status
			$data['title'] = "Dashboard :: Buy2Let";

			$this->load->view('templates/header', $data);
			$this->load->view('user/templates/sidebar', $data);
			$this->load->view('user/dashboard', $data);
			$this->load->view('templates/footer', $data);
		}else{
			
			redirect( base_url().'login' ,'refresh');
			
		}
	}
	
	public function my_properties()
	{
		//Get featured properties
		//$data['property'] = $this->buytolet_model->getProperty($id);
		
		//$data['similarProps'] = $this->buytolet_model->similarProperties($data['property']['city']);
		
		if($this->session->has_userdata('loggedIn')){			

			$data['userID'] = $this->session->userdata('userID');
			
			$data['fname'] = $this->session->userdata('fname');
			
			$data['lname'] = $this->session->userdata('lname');
		
			//Check login status
			$data['title'] = "Dashboard :: Buy2Let";

			$this->load->view('templates/header', $data);
			$this->load->view('user/templates/sidebar', $data);
			$this->load->view('user/dashboard', $data);
			$this->load->view('templates/footer', $data);
		}else{
			
			redirect( base_url().'login' ,'refresh');
			
		}
	}
	
	
}
