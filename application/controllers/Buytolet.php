<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$client = new \GuzzleHttp\Client();

class Buytolet extends CI_Controller {
    
    protected $response = '';

	public function __construct() {
		
	   	parent::__construct(); 
		Header('Access-Control-Allow-Origin: *'); 
		$this->load->library('session');

	}

	public function index()
	{
		//Get featured properties

		$states = array('2648', '2671');

		$data['buy_to_live_properties'] = $this->buytolet_model->getHomeProps(1, 4);
		
		$data['buy_to_let_properties'] = $this->buytolet_model->getHomeProps(2, 4);

		$data['pool_properties'] = $this->buytolet_model->getPoolHomeProps();

		$data['locations'] = $this->buytolet_model->get_locations($states);
		//to check later, the fn get_locations(). the group by('a.city') breaks my query in the model.

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		//Check login status

		$data['title'] = "Welcome to Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('index', $data);

		//$this->load->view('index-uc', $data);
		
		//$this->load->view('splash', $data);

		$this->load->view('templates/footer', $data);

	}

	public function home_test()
	{

		$states = array('2648', '2671');

		$data['buy_to_live_properties'] = $this->buytolet_model->getHomePropsTest(1, 4);
		
		$data['buy_to_let_properties'] = $this->buytolet_model->getHomePropsTest(2, 4);

		$data['pool_properties'] = $this->buytolet_model->getPoolHomeProps();

		$data['locations'] = $this->buytolet_model->get_locations($states);

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		//Check login status

		$data['title'] = "Welcome to Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('index-test', $data);

		//$this->load->view('index-uc', $data);
		
		//$this->load->view('splash', $data);

		$this->load->view('templates/footer', $data);

	}

	public function about_us(){

		if($this->session->has_userdata('loggedIn')){
		    
			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "About Us :: Buy2Let";
		
		$data['content'] = $this->buytolet_model->get_about();

		$this->load->view('templates/header', $data);

		$this->load->view('about-us', $data);

		$this->load->view('templates/footer', $data);
		
 
	}
	public function terms_and_conditions(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "Terms and Conditions :: Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('terms-and-conditions', $data);

		$this->load->view('templates/footer', $data);
		
 
	}
	public function co_own_tandc(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "Co-ownership Terms and Conditions :: Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('co-own-tandc', $data);

		$this->load->view('templates/footer', $data);
		
 
	}
	
	public function investor_basic(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "Investor Profile :: Buy2Let";
		
		$data['content'] = $this->buytolet_model->get_about();

		$this->load->view('templates/header', $data);

		$this->load->view('investor-basic', $data);

		$this->load->view('templates/footer', $data);
		
 
	}
	public function how_it_works(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "How it works :: Buy2Let";
		
		$data['content'] = $this->buytolet_model->get_hiw();

		$this->load->view('templates/header', $data);

		$this->load->view('how-it-works', $data);

		$this->load->view('templates/footer', $data);
		
 
	}
	public function faq(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}
		
		$data['title'] = "Frequently Asked Questions :: BuySmallSmall";
		
		//$data['content'] = $this->buytolet_model->get_faq();

		$this->load->view('templates/header', $data);

		$this->load->view('faq', $data);

		$this->load->view('templates/footer', $data);
 
	}
	public function general_faq(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}
		
		$data['title'] = "Frequently Asked Questions :: BuySmallSmall";
		
		//$data['content'] = $this->buytolet_model->get_faq();

		$this->load->view('templates/header', $data);

		$this->load->view('general-faq', $data);

		$this->load->view('templates/footer', $data);
 
	}
	public function get_started(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "Get started :: BuySmallSmall";

		$this->load->view('templates/header', $data);

		$this->load->view('get-started', $data);

		$this->load->view('templates/footer', $data);
		
	}
	public function investment_types(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "Get started :: BuySmallSmall";

		$this->load->view('templates/header', $data);

		$this->load->view('investment-types', $data);

		$this->load->view('templates/footer', $data);
 
	}
	public function property_title(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "Get started :: BuySmallSmall";

		$this->load->view('templates/header', $data);

		$this->load->view('property-title', $data);

		$this->load->view('templates/footer', $data);
 
	}
	public function rent_guarantee(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "Get started :: BuySmallSmall";

		$this->load->view('templates/header', $data);

		$this->load->view('rent-guarantee', $data);

		$this->load->view('templates/footer', $data);
 
	}
	public function terminologies(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "Get started :: BuySmallSmall";

		$this->load->view('templates/header', $data);

		$this->load->view('terminologies', $data);

		$this->load->view('templates/footer', $data);
 
	}
	public function partnership(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "Get started :: BuySmallSmall";

		$this->load->view('templates/header', $data);

		$this->load->view('partnership', $data);

		$this->load->view('templates/footer', $data);
 
	}
	public function property_inspection(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "Get started :: BuySmallSmall";

		$this->load->view('templates/header', $data);

		$this->load->view('property-inspection', $data);

		$this->load->view('templates/footer', $data);
 
	}
	public function pool_buy_faq(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}

		$data['title'] = "Frequently Asked Questions :: Buy2Let";
		
		//$data['content'] = $this->buytolet_model->get_faq();

		$this->load->view('templates/header', $data);

		$this->load->view('pool-buy-faq', $data);

		$this->load->view('templates/footer', $data);
		
 
	}
	public function signup()
	{

		if(!$this->session->has_userdata('loggedIn')){

			//Check login status

			$data['title'] = "Signup :: Buy2Let";

			//$this->load->view('templates/header', $data);

			$this->load->view('signup', $data);

			//$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url() ,'refresh');

		}

	}
	public function signup_investor()

	{

		if(!$this->session->has_userdata('loggedIn')){

			//Check login status

			$data['title'] = "Investor Profile :: Buy2Let";

			$this->load->view('templates/header', $data);

			$this->load->view('signup-investor', $data);

			$this->load->view('templates/footer', $data);
			
			

		}else{

			redirect( base_url() ,'refresh');

		}

	}
	

	public function signup_test()
	{

		if(!$this->session->has_userdata('loggedIn')){

			//Check login status

			$data['title'] = "Signup :: Buy2Let";

			$this->load->view('templates/header', $data);

			$this->load->view('signup-test', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url() ,'refresh');

		}

	}

	

	public function login()
	{

		if(!$this->session->has_userdata('loggedIn')){

			/*$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');*/

			//Check login status

			$data['title'] = "Login :: Buy2Let";

			$this->load->view('templates/header', $data);

			$this->load->view('login', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url() ,'refresh');

		}

	}
	
	public function buyer_form(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');
			
			$data['phone'] = $this->session->userdata('phone');

			$data['email'] = $this->session->userdata('email');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

			//Check login status

			$data['title'] = "Buyer Information :: Buy2Let";



			$this->load->view('templates/header', $data);

			$this->load->view('buyer-form', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url()."login" ,'refresh');

		}

	}

	public function finance_form(){
		
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');
			
			$data['phone'] = $this->session->userdata('phone');

			$data['email'] = $this->session->userdata('email');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

			//Check login status

			$data['title'] = "Finance Form :: Buy SmallSmall";

			$this->load->view('templates/header', $data);

			$this->load->view('finance-form', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url()."login" ,'refresh');

		}
	}
	
	public function co_own_form(){
		
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');
			
			$data['phone'] = $this->session->userdata('phone');

			$data['email'] = $this->session->userdata('email');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

			//Check login status

			$data['title'] = "Co Own Form :: Buy SmallSmall";

			$this->load->view('templates/header', $data);

			$this->load->view('co-own-form', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url()."login" ,'refresh');

		}
	}
	
	public function personal_info(){
		
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');
			
			$data['phone'] = $this->session->userdata('phone');

			$data['email'] = $this->session->userdata('email');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

			//Check login status

			$data['title'] = "Personal Details Form";

			$this->load->view('templates/header', $data);

			$this->load->view('personal-info', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url()."login" ,'refresh');

		}
	}
	
	public function employment_info(){
		
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');
			
			$data['phone'] = $this->session->userdata('phone');

			$data['email'] = $this->session->userdata('email');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

			//Check login status

			$data['title'] = "Employment Details Form";

			$this->load->view('templates/header', $data);

			$this->load->view('employment-info', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url()."login" ,'refresh');

		}
	}
	
	public function upload_info(){
		
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');
			
			$data['phone'] = $this->session->userdata('phone');

			$data['email'] = $this->session->userdata('email');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

			//Check login status

			$data['title'] = "Upload Documents";

			$this->load->view('templates/header', $data);

			$this->load->view('upload-info', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url()."login" ,'refresh');

		}
	}

	public function finance_confirmation(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');
			
			$data['phone'] = $this->session->userdata('phone');

			$data['email'] = $this->session->userdata('email');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

			//Check login status

			$data['title'] = "Finance Confirmation :: Buy2Let";

			$this->load->view('templates/header', $data);

			$this->load->view('finance-confirmation', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url()."login" ,'refresh');

		}
	}
	
	public function co_own_confirmation(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');
			
			$data['phone'] = $this->session->userdata('phone');

			$data['email'] = $this->session->userdata('email');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['refID'] = $this->session->userdata('refID');
			
			$data['interest'] = $this->session->userdata('interest');

			//Check login status

			$data['title'] = "Finance Confirmation :: Buy2Let";

			$this->load->view('templates/header', $data);

			$this->load->view('co-own-confirmation', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url()."login" ,'refresh');

		}
	}
	
	public function marketplace_fee(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

			//Check login status

			$data['title'] = "Marketplace Fee :: Buy2Let";

			$this->load->view('templates/header', $data);

			$this->load->view('marketplace-fee', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url()."login" ,'refresh');

		}

	}
	public function verify(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');
			
			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['email'] = $this->session->userdata('email');

			$data['phone'] = $this->session->userdata('phone');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');
			
			//Check login status

			$data['title'] = "Verify Page :: Buy2Let";

			$this->load->view('templates/header', $data);

			$this->load->view('verify', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url()."login" ,'refresh');

		}

	}
	public function final_page(){

		//if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');
			
			$data['header'] = "Successful";
			
			$data['note'] = "";

			//Check login status

			$data['title'] = "Buy Small Small";

			$this->load->view('templates/header', $data);

			$this->load->view('final', $data);

			$this->load->view('templates/footer', $data);

		//}else{

			//redirect( base_url()."login" ,'refresh');

		//}

	}
	public function payment_successful(){

		//if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');
			
			$prop_name = $this->buytolet_model->getProp($this->session->userdata('property_id'));
			
			$amount = $this->session->userdata('amount');
			
			$data['header'] = "<span style='color:green'>Successful</span>";
			
			$data['note'] = "We have received your 5% commitment fee of N".number_format($amount)." for ".$prop_name["property_name"].",  We've sent a copy of your offer letter and contract of sale to your email. <a href='https://rent.smallsmall.com'>Click here to view on your dashboard</a>.<p>Our customer support team will reach out to you within 24hours to help you close your purchase.</p>";

			//Check login status

			$data['title'] = "Buy Small Small";

			$this->load->view('templates/header', $data);

			$this->load->view('final', $data);

			$this->load->view('templates/footer', $data);

		//}else{

			//redirect( base_url()."login" ,'refresh');

		//}

	}
	public function guaranteed_rent(){

		$data['userID'] = $this->session->userdata('userID');

		$data['fname'] = $this->session->userdata('fname');

		$data['lname'] = $this->session->userdata('lname');

		$data['user_type'] = $this->session->userdata('user_type');			

		$data['loggedIn'] = $this->session->userdata('loggedIn');
		
		$data['interest'] = $this->session->userdata('interest');

		//Check login status

		$data['title'] = "Guaranteed Rent :: Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('guaranteed-rent', $data);

		$this->load->view('templates/footer', $data);


	}
	public function property($id){

		//Get featured properties

		$data['property'] = $this->buytolet_model->getProperty($id);		

		$data['similarProps'] = $this->buytolet_model->similarProperties($data['property']['city']);		

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');			

			$data['fname'] = $this->session->userdata('fname');			

			$data['lname'] = $this->session->userdata('lname');		

			$data['email'] = $this->session->userdata('email');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');
		
		
    		//Update property views
    		$views = intval($data['property']['views']) + 1;
    		
    		$this->buytolet_model->updateViews($views, $id);
    
    		//Check login status
    
    		$data['title'] = $data['property']['property_name']." :: Buy2Let";		
    
    		$this->load->view('templates/header', $data);
    
    		$this->load->view('property', $data);
    
    		$this->load->view('templates/footer', $data);
    		
		}else{
		    //Ask to Login
		    redirect( base_url()."login" ,'refresh');
		}

	}
	
	public function sole_own($id){

		//Get featured properties

		$data['property'] = $this->buytolet_model->getProperty($id);		

		$data['similarProps'] = $this->buytolet_model->similarProperties($data['property']['city']);		

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');			

			$data['fname'] = $this->session->userdata('fname');			

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');
		
		
    		//Update property views
    		$views = intval($data['property']['views']) + 1;
    		
    		$this->buytolet_model->updateViews($views, $id);
    
    		//Check login status
    
    		$data['title'] = $data['property']['property_name']." :: Buy2Let";		
    
    		$this->load->view('templates/header', $data);
    
    		$this->load->view('property', $data);
    
    		$this->load->view('templates/footer', $data);
    		
		}else{
		    
		    //Ask to Login
		    redirect( base_url()."login" ,'refresh');
		    
		}

	}
	
	public function co_own($id){

		//Get featured properties

		$data['property'] = $this->buytolet_model->getProperty($id);		

		$data['similarProps'] = $this->buytolet_model->similarProperties($data['property']['city']);		

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');			

			$data['fname'] = $this->session->userdata('fname');			

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');
		
		
    		//Update property views
    		$views = intval($data['property']['views']) + 1;
    		
    		$this->buytolet_model->updateViews($views, $id);
    
    		//Check login status
    
    		$data['title'] = $data['property']['property_name']." :: Buy2Let";		
    
    		$this->load->view('templates/header', $data);
    
    		$this->load->view('co-own-property', $data);
    
    		$this->load->view('templates/footer', $data);
    		
		}else{
		    //Ask to Login
		    redirect( base_url()."login" ,'refresh');
		}

	}
	
	public function co_own_test($id){

		//Get featured properties

		$data['property'] = $this->buytolet_model->getProperty($id);		

		$data['similarProps'] = $this->buytolet_model->similarProperties($data['property']['city']);		

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');			

			$data['fname'] = $this->session->userdata('fname');			

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');
		
		
    		//Update property views
    		$views = intval($data['property']['views']) + 1;
    		
    		$this->buytolet_model->updateViews($views, $id);
    
    		//Check login status
    
    		$data['title'] = $data['property']['property_name']." :: Buy2Let";		
    
    		$this->load->view('templates/header', $data);
    
    		$this->load->view('co-own-prop-backup', $data);
    
    		$this->load->view('templates/footer', $data);
    		
		}else{
		    //Ask to Login
		    redirect( base_url()."login" ,'refresh');
		}

	}
	
	public function property_test($id){
		
		//Get featured properties

		$data['property'] = $this->buytolet_model->getProperty($id);		

		$data['similarProps'] = $this->buytolet_model->similarProperties($data['property']['city']);		

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');			

			$data['fname'] = $this->session->userdata('fname');			

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');
		}
		

		//Check login status

		$data['title'] = $data['property']['property_name']." :: Buy2Let";		

		$this->load->view('templates/header', $data);

		$this->load->view('property-test', $data);

		$this->load->view('templates/footer', $data);

	}

	public function properties($slug = '')
	{
        
		$config['total_rows'] = $this->buytolet_model->getAllPropCount($slug);
		
		$data['total_count'] = $config['total_rows'];

		$config['suffix'] = '';
		
		$data['cities'] = $this->buytolet_model->getCities(2671);

		$data['apts'] = $this->buytolet_model->getApt();

		$data['locations'] = $this->buytolet_model->get_locations($states);

		if ($config['total_rows'] > 0) {

			$page_number = $this->uri->segment(3);
			
			$config['base_url'] = base_url() . 'properties/'.$slug.'/';

			$config['uri_segment'] = 3;	

			if (empty($page_number))

				$page_number = 1;

			$offset = ($page_number - 1) * $this->pagination->per_page;

			$this->buytolet_model->setPageNumber($this->pagination->per_page);

			$this->buytolet_model->setOffset($offset);

			$this->pagination->cur_page = $page_number;

			$this->pagination->initialize($config);			

			$data['page_links'] = $this->pagination->create_links();

			$data['from_row'] = $offset + 1;
			
		    $data['properties'] = $this->buytolet_model->getProperties($slug);
			
			$data['to_row'] = $page_number * count($data['properties']);

		}
        
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}
		
		$data['slug'] = $slug;

		//Check login status

		$data['title'] = "Properties :: Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('properties', $data);

		$this->load->view('templates/footer', $data);

	}
	
	public function properties_test($slug = '')
	{
        
		$config['total_rows'] = $this->buytolet_model->getAllPropCount($slug);
		
		$data['total_count'] = $config['total_rows'];

		$config['suffix'] = '';
		
		$data['cities'] = $this->buytolet_model->getCities(2671);

		$data['apts'] = $this->buytolet_model->getApt();

		if ($config['total_rows'] > 0) {

			$page_number = $this->uri->segment(3);
			
			$config['base_url'] = base_url() . 'properties/'.$slug.'/';

			$config['uri_segment'] = 3;	

			if (empty($page_number))

				$page_number = 1;

			$offset = ($page_number - 1) * $this->pagination->per_page;

			$this->buytolet_model->setPageNumber($this->pagination->per_page);

			$this->buytolet_model->setOffset($offset);

			$this->pagination->cur_page = $page_number;

			$this->pagination->initialize($config);			

			$data['page_links'] = $this->pagination->create_links();

			$data['from_row'] = $offset + 1;
			
		    $data['properties'] = $this->buytolet_model->getProperties($slug);
			
			$data['to_row'] = $page_number * count($data['properties']);

		}
        
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}
		
		$data['slug'] = $slug;

		//Check login status

		$data['title'] = "Properties :: Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('properties-test', $data);

		$this->load->view('templates/footer', $data);

	}
	
	public function search_properties()
	{
	    $slug = '';
	    
	    $search_crit['investment-type'] = $this->input->post('investment-type');
	    
	    $search_crit['location'] = $this->input->post('location');
	    
	    if($search_crit['investment-type'] == 5){
	        
	        $slug = 'co-ownership';
	        
	    }else if($search_crit['investment-type'] == 2){
	        
	        $slug = 'buy-to-let';
	        
	    }else if($search_crit['investment-type'] == 1){
	        
	        $slug = 'buy-to-live';
	        
	    }
	    
	    
	    if (@$search_crit['investment-type'] === null && @$search_crit['location'] === null){ 
		    
		    $search_crit = $this->session->userdata('search');
		
		}else{ 
		    
		    $this->session->set_userdata('search', $search_crit);
		    
		}
        
		$config['total_rows'] = $this->buytolet_model->getAllSearchCount($search_crit);
		
		$data['total_count'] = $config['total_rows'];

		$config['suffix'] = '';
		
		$data['cities'] = $this->buytolet_model->getCities(2671);

		$data['apts'] = $this->buytolet_model->getApt();

		if ($config['total_rows'] > 0) {

			$page_number = $this->uri->segment(2);
			
			$config['base_url'] = base_url() . 'search-properties';

			$config['uri_segment'] = 2;	

			if (empty($page_number))

				$page_number = 1;

			$offset = ($page_number - 1) * $this->pagination->per_page;

			$this->buytolet_model->setPageNumber($this->pagination->per_page);

			$this->buytolet_model->setOffset($offset);

			$this->pagination->cur_page = $page_number;

			$this->pagination->initialize($config);			

			$data['page_links'] = $this->pagination->create_links();

			$data['from_row'] = $offset + 1;
			
		    $data['properties'] = $this->buytolet_model->getSearchProperties($search_crit);
			
			$data['to_row'] = $page_number * count($data['properties']);

		}
        
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}
		
		$data['slug'] = $slug;

		//Check login status

		$data['title'] = "Properties :: Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('properties', $data);

		$this->load->view('templates/footer', $data);

	}
	
	public function poolbuy()

	{
        
		$config['total_rows'] = $this->buytolet_model->getPoolAptCount();

		$data['total_count'] = $config['total_rows'];

		$config['suffix'] = '';
		
		$data['cities'] = $this->buytolet_model->getCities(2671);

		$data['apts'] = $this->buytolet_model->getApt();

		if ($config['total_rows'] > 0) {

			$page_number = $this->uri->segment(2);
			
			$config['base_url'] = base_url() . 'pool-buy/';

			$config['uri_segment'] = 2;	

			if (empty($page_number))

				$page_number = 1;

			$offset = ($page_number - 1) * $this->pagination->per_page;


			$this->buytolet_model->setPageNumber($this->pagination->per_page);


			$this->buytolet_model->setOffset($offset);


			$this->pagination->cur_page = $page_number;


			$this->pagination->initialize($config);			

			$data['page_links'] = $this->pagination->create_links();

			$data['from_row'] = $offset + 1;
			
		    $data['properties'] = $this->buytolet_model->getPoolProps();
			
			$data['to_row'] = $page_number * count($data['properties']);

		}
		
        
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}
		

		//Check login status

		$data['title'] = "Properties :: Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('properties', $data);

		$this->load->view('templates/footer', $data);

	}

	

	public function signupForm(){
	    
	    $ua = $_SERVER['HTTP_USER_AGENT'];

		$fname = trim($this->input->post("fname"));

		$lname = trim($this->input->post("lname"));

		$email = trim($this->input->post("email"));

		$phone = trim($this->input->post("phone"));

		$medium = trim($this->input->post("medium"));

		$age = trim($this->input->post("age"));

		$password = md5($this->input->post("password"));
		
		$income = $this->input->post("income");
		
		$occupation = $this->input->post("occupation");
		
		$position = $this->input->post("position");
		
		$address = $this->input->post("address");
				
		$gender = $this->input->post("gender");
		
		$ref_code = $this->input->post("ref_code");
		
		$user_agent = $this->browserName($ua);

		$confirmationCode = md5(date('d-m-Y h:i:s'));
		
		$code = substr($confirmationCode, -5);
	            
	    $rc = strtoupper(substr($lname, 0, 3).$code);		

		//Check to see if email exists already

		$email_res = $this->buytolet_model->check_email($email);		

		if(!$email_res){
		    //Check if user has been bought a gift before
		    $beneficiary = $this->buytolet_model->check_beneficiary_details($email)['userID'];
		    
		    $id = ($beneficiary)? $beneficiary : $this->generate_user_id(12);
			//Insert details in user table

			//$res = $this->buytolet_model->add_user($id, $fname, $lname, $email, $phone, $password, $medium, $age, $income, $occupation, $position, $address, $gender, $accredited_investor, $investment_experience, $investment_goal, $investment_capital, $financing_choice, $investment_period, $purchase_plan, $preferred_location_1, $preferred_location_2);
			$registration = $this->buytolet_model->register($id, $fname, $lname, $email, $password, $phone, $income, $confirmationCode, $medium, 'tenant', 'Buy', $rc, $gender, $user_agent['userAgent']);

			if($registration){    
			    
			    $data['name'] = $lname;
			    
			    $data['confirmationLink'] = base_url().'activate/'.$confirmationCode;

				$messageR = "Successful Registration";

				// Send Data to notification DB when mail is being sent to notify user on dashboard
				$subject = "SmallSmall Confirmation";
				$notificationDataSentToDb = $this->buytolet_model->insertNotification($subject, $messageR, $userID, $fname);

				//Successful insert then send email to user				
				$this->email->from('donotreply@buy.smallsmall.com', 'SmallSmall');

    			$this->email->to($email);
    
    			$this->email->subject("SmallSmall Confirmation");	
    			
    			$this->email->set_mailtype("html");
    
    			$message = $this->load->view('email/header.php', $data, TRUE);
    
    			$message .= $this->load->view('email/confirmation.php', $data, TRUE);
    
    			$message .= $this->load->view('email/footer.php', $data, TRUE);
    
    			$this->email->message($message);
    
    			$emailRes = $this->email->send();
				
				echo 1;

			}else{

				//Unsuccessful insert

				echo "Error inserting details";

			}

		}else{

			echo "User email exists already";

		}
		

	}
	
	public function filter(){
		
		$s_data['city']  = $this->input->post('city');
		
		$s_data['beds']  = $this->input->post('bedrooms');	
		
		$s_data['bath']  = $this->input->post('bath');
		
		$s_data['tenancy']  = $this->input->post('tenancy');
		
		$s_data['price']  = $this->input->post('price');

		$s_data['apt_type']  = $this->input->post('apt_type');
		
		$config['total_rows'] = $this->buytolet_model->getPropertyFilterCount($s_data);
		
		$data['cities'] = $this->buytolet_model->getCities(2671);

		$data['apts'] = $this->buytolet_model->getApt();

		$data['total_count'] = $config['total_rows'];

		$config['suffix'] = '';

		if ($config['total_rows'] > 0) {

			$page_number = $this->uri->segment(2);

			$config['base_url'] = base_url() . 'filter';

			if (empty($page_number))

				$page_number = 1;

			$offset = ($page_number - 1) * $this->pagination->per_page;

			$this->buytolet_model->setPageNumber($this->pagination->per_page);

			$this->buytolet_model->setOffset($offset);

			$this->pagination->cur_page = $page_number;

			$this->pagination->initialize($config);
			

			$data['page_links'] = $this->pagination->create_links(); 
			
			$data['from_row'] = $offset + 1;

			$data['properties'] = $this->buytolet_model->filter($s_data);
			
			$data['to_row'] = $page_number * count($data['properties']);
			

		}
		
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');

		}
		

		//Check login status

		$data['title'] = "Search Results :: Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('properties', $data);

		$this->load->view('templates/footer', $data);
	}

	public function scheduleInsp(){			

		$inspDate = trim($this->input->post("insp_date"));

		$inspTime = $this->input->post("insp_time");

		$inspPeriod = $this->input->post("insp_period");

		$userID = $this->session->userdata('userID');

		$email = $this->session->userdata('email');

		$fname = $this->session->userdata('fname');

		$lname = $this->session->userdata('lname');
		
		$data['interest'] = $this->session->userdata('interest');

		$propID = $this->input->post('propID');		

		//Insert date
		$res = $this->buytolet_model->setInspection($inspDate, $inspTime, $inspPeriod, $propID, $userID);		

		if($res){
			
    		$property = $this->buytolet_model->getProp($propID);

			// To send notification mail to db for New Inspection Request

			$subject = "New Inspection Request!";
			$message = "This is to notify you that you have been schedule for inspection on '$inspPeriod'";
			$notification_data_sent_to_db = $this->buytolet_model->insertNotification($subject, $message, $userID, $fname);
			
    		$data['name'] = $fname.' '.$lname;
    				
    		$data['propName'] = $property['property_name'];
    				
    		$data['propAddress'] = $property['address'].', '.$property['city'];
    			    
    		$data['propertyName'] = $property['property_name'];
    			    
    		$data['inspectionDate'] = date('d F Y', strtotime($inspDate));
    			    
    		$data['inspectionTime'] = $inspTime.' '.$inspPeriod;
    			    
    		$this->email->from('donotreply@smallsmall.com', 'Small Small');
    			    
    	    $this->email->to($email);
    			    
    	    $this->email->bcc('hello@buysmallsmall.ng');
    
    		$this->email->subject("New Inspection Request!");
    
    		$this->email->set_mailtype("html");
    
    		$message = $this->load->view('email/header.php', $data, TRUE);
    
    		$message .= $this->load->view('email/inspection-email.php', $data, TRUE);
    
    		$message .= $this->load->view('email/footer.php', $data, TRUE);
    
    		$this->email->message($message);
    
    		$custEmail = $this->email->send();    

			echo 1;			

		}else{			

			echo "Error setting up inspection";			

		}		

		

	}

	public function loginForm(){		

		$username = trim($this->input->post("username"));

		$password = md5($this->input->post("password"));	

		//Login

		$user = $this->buytolet_model->login_user($username, $password);

		if(!empty($user)){
			//Successful insert then send email to user

			if($user['confirmation'] == ''){

				if($user['status'] == 'Active'){

					$userdata = array('userID' => $user['userID'], 'loggedIn' => 'yes', 'fname' => $user['firstName'], 'lname' => $user['lastName'], 'email' => $user['email'], 'verified' => $user['verified'], 'phone' => $user['phone'], 'user_type' => $user['user_type'], 'referral_code' => $user['referral_code'], 'rss_points' => $user['points'], 'interest' => $user['interest']);
			        //Set session
			        
					$this->session->set_userdata($userdata);	
					
					echo 1;
					
				}else{					

					echo "This account may have been suspended";				

				}				

			}else{				

				echo "Account not confirmed!";				

			}

		}else{

			echo "Check Username/Password";

		}	

		

	}
	public function insertRequest(){
		
		if(!$this->session->has_userdata('loggedIn')){

			redirect( base_url()."login" ,'refresh');

		}
		$data['userID'] = $this->session->userdata('userID');
		
		$buyer_type = 'Investor';

		$payable = $this->input->post('payable');

		$balance = $this->input->post('balance');
		
		$payment_plan = $this->input->post("payment_plan");
		
		$property_id = $this->input->post("property_id");
		
		$personal_details = $this->input->post('personal_details');
		
		$employment_details = $this->input->post('employment_details');
		
		$cost = $this->input->post("cost");
		
		$promo_code = $this->input->post("promo_code");
		
		$unit_amount = $this->input->post("unit_amount");
		
		$payment_period = $this->input->post("payment_period");
		
		$mop = $this->input->post("method_of_payment");
		
		$id_path = $this->input->post("id_path");
		
		$statement_path = $this->input->post("statement_path");
		
		$prop = $this->buytolet_model->getProperty($property_id);
		
		$result = $this->buytolet_model->insertRequest($buyer_type, $payment_plan, $property_id, $cost, $data['userID'], $payable, $balance, $mop, $payment_period, $unit_amount, $promo_code, $id_path, $statement_path, $employment_details, $personal_details);
		
		if($result){

			if($prop['pool_buy'] == 'yes')
				$new_pool_units = $prop['available_units'] - $unit_amount;
				$this->buytolet_model->update_units($new_pool_units, $property_id);
		    
		    echo 1;
			    			
		}else{
		    
			echo $result;
			
		}
		
	}
	
	public function insertCoOwnRequest(){
		
		if(!$this->session->has_userdata('loggedIn')){

			redirect( base_url()."login" ,'refresh');

		}
		$ref = md5(date('YmdHis'));
		
		$data['userID'] = $this->session->userdata('userID');
		
		$buyer_type = 'Investor';

		$payable = $this->input->post('payable');

		$balance = 0;
		
		$payment_plan = 'co-own';
		
		$property_id = $this->input->post("property_id");
		
		$firstname = $this->input->post('firstname');
		
		$lastname = $this->input->post('lastname');
		
		$email = $this->input->post('email');
		
		$phone = $this->input->post('phone');
		
		$company_name = $this->input->post('companyName');
		
		$position = $this->input->post('position');
		
		$occupation = $this->input->post('occupation');
		
		$income_range = $this->input->post('income_range');
		
		$company_address = $this->input->post('company_address');
		
		$cost = $this->input->post("cost");
		
		$promo_code = "";
		
		$unit_amount = $this->input->post("unit_amount");
		
		//$unit_amount = $this->input->post("shares_amount");
		
		$payment_period = $this->input->post("payment_period");
		
		$mop = "paystack";
		
		$id_path = $this->input->post("id_path");
		
		$beneficiary_id_path = NULL; //$this->input->post("beneficiary_id_path");
		
		$beneficiary_type = $this->input->post('beneficiary_type');
		
		$beneficiary_firstname = $this->input->post('beneficiary-firstname');
		
		$beneficiary_lastname = $this->input->post('beneficiary-lastname');
		
		$beneficiary_email = $this->input->post('beneficiary-email');
		
		$beneficiary_phone = $this->input->post('beneficiary-phone');
		
		$beneficiary_shares = $this->input->post('beneficiary-shares');
		
		$prop = $this->buytolet_model->getProperty($property_id);
		
		$result = $this->buytolet_model->insertCoOwnRequest($ref, $buyer_type, $payment_plan, $property_id, $cost, $data['userID'], $payable, $balance, $mop, $payment_period, $unit_amount, $promo_code, $id_path, $beneficiary_id_path, $firstname, $lastname, $email, $phone, $company_name, $position, $occupation, $income_range, $company_address, $beneficiary_type);
		
		if($result){
		    //Update the remaining pool units
		    $new_pool_units = $prop['available_units'] - $unit_amount;
		    
			$this->buytolet_model->update_units($new_pool_units, $property_id);
			
			$userdata = array('refID' => $ref);
			
			$this->session->set_userdata($userdata);
			
			
		    //Check if user is not only buying for self
            if($beneficiary_type != 'Self' && is_array($beneficiary_firstname)){
                
                for($i = 0; $i < count($beneficiary_firstname); $i++){
                    
                    //Check if user is already a member then use userid else generate new ID
                    $user = $this->buytolet_model->check_email($beneficiary_email[$i]);
                        
                    $user_id = '';
                    
                    if($user){
                        //Get user ID
                        $user_id = $this->buytolet_model->get_user_by_email($beneficiary_email[$i])['userID'];
                    }else{
                        //Generate new ID
                        $user_id = $this->generate_user_id(12);
                        
                        $details['userID'] =  $user_id;

						$details['fname'] = $beneficiary_firstname[$i];

						$details['lname'] = $beneficiary_lastname[$i];

						$details['email'] = $beneficiary_email[$i];

						$details['phone'] = $beneficiary_phone[$i];

						$details['refcode'] = $this->session->userdata('referral_code');

						$res = $this->create_user_account($details);

						if($res){

							//send a new user actionable message

						}			
                    }
                
                    $this->buytolet_model->insert_beneficiary_details($data['userID'], $ref, $beneficiary_firstname[$i], $beneficiary_lastname[$i], $beneficiary_email[$i], $beneficiary_phone[$i], $beneficiary_shares[$i], $beneficiary_id_path, $user_id);
                    
                    
                    //$name = $beneficiary_firstname[$i].' '.$beneficiary_lastname[$i];
                    
                }
                
            }
            
		    echo 1;
			    			
		}else{
		    
			echo $result;
			
		}
		
	}
	
	public function get_user(){
	    echo $this->buytolet_model->get_user_by_email('seuncrowther@yahoo.com')['userID'];
	}

	public function logout(){

		$this->session->unset_userdata('userdata');

		$this->session->sess_destroy();

		$url = @$_SERVER['HTTP_REFERER'];
		
		if($url){
		    
			redirect($url);
			
		}else{
		    
			redirect( base_url() ,'refresh');
			
		}

   	}
   	public function create_folder($foldername){
   	    
   	    $success = mkdir("./uploads/buytolet/".$foldername);
   	    
        if ($success) {
            
            mkdir("./uploads/buytolet/".$foldername."/floor-plan");
            
            return 1;
            
        }else{
            
            return 0;
            
        }
   	}
   	
   	public function upload_images($file_name, $md5_file_name, $folder){
   	    // ----- Site 2, pullfile.php -----

        // This script will pull a file from site 1 and
        // place it in '/uploaded'
        
        // used to cross-check the uploaded file
        $fileMd5 = $md5_file_name;
        $fileName = $file_name;
        
        // we need to pull the file from the './tmp/' dir on site 1
        $pulledFile = file_get_contents('https://www.rentsmallsmall.com/tmp/'.$file_name);
        
        // save that file to disk
        $result = file_put_contents('./uploads/buytolet/'.$folder.'/'.$fileName, $pulledFile);
        if (! $result) {
            echo 'Error: problem writing file to disk';
            exit;
        }
        
        $pulledMd5 = md5_file('./'.$folder.'/'.$fileName);
        if ($pulledMd5 != $fileMd5) {
            echo 'Error: md5 mis-match';
            exit;
        }
        
        // At this point, everything should be right.
        // We pass back 'done' to site 1, so we know 
        // everything went smooth. This way, a 'blank'
        // return can be treated as an error too.
        echo 1;
        exit;
   	}
   	
   	public function upload_fp_image($file_name, $md5_file_name, $folder, $fp){
   	    // ----- Site 2, pullfile.php -----

        // This script will pull a file from site 1 and
        // place it in '/uploaded'
        
        // used to cross-check the uploaded file
        $fileMd5 = $md5_file_name;
        $fileName = $file_name;
        
        // we need to pull the file from the './tmp/' dir on site 1
        $pulledFile = file_get_contents('https://www.rentsmallsmall.com/tmp/'.$file_name);
        
        // save that file to disk
        $result = file_put_contents('./uploads/buytolet/'.$folder.'/'.$fp.'/'.$fileName, $pulledFile);
        if (! $result) {
            echo 'Error: problem writing file to disk';
            exit;
        }
        
        $pulledMd5 = md5_file('./tmp/'.$fileName);
        if ($pulledMd5 != $fileMd5) {
            echo 'Error: md5 mis-match';
            exit;
        }
        
        // At this point, everything should be right.
        // We pass back 'done' to site 1, so we know 
        // everything went smooth. This way, a 'blank'
        // return can be treated as an error too.
        echo 1;
        exit;
   	}
   	
   	public function get_images($folder){
   	    
   	    $dir = './uploads/buytolet/'.$folder;
   	    
   	    $image_dir = 'uploads/buytolet/'.$folder;
   	    
   	    $dir_contents = scandir($dir);
 
		$count = 0;
		
		$allImages = '';
		
		$content_size = count($dir_contents);
		
		//print_r($dir_contents);

		foreach ($dir_contents as $file) {

			if ($file !== '.' && $file !== '..' && $count <= ($content_size - 2)) { 
			    
				$allImages .= '<span class="imgCover removal-id-'.$count.'" id="id-'.$file.'"><img src="'.base_url().''.$image_dir.'/'.$file.'" id="'.$file.'" class="upldImg img-responsive img-thumbnail" onclick="selectFeatured(this.id)" title="Click to select as featured image" /><div class="remove-btl-img img-removal" id="img-properties-'.$file.'-'.$count.'">remove <i class="fa fa-trash"></i></div></span>';
				
			}
			$count++;

		}
		
		echo $allImages;
   	    
   	}
   	
   	public function delete_images($folder){
   	    
   	    $dir = './uploads/buytolet/'.$folder;
   	    
   	    $items = scandir($dir);
   	    
        foreach ($items as $item) {
            
            if ($item === '.' || $item === '..') {
                
                continue;
                
            }
            
            $path = $dir.'/'.$item;
            
            if (is_dir($path)) {
                
                //delete_images($path);
                $fp_items = scandir($dir.'/floor-plan');
                
                foreach($fp_items as $fp_item){
                    
                    if ($item === '.' || $item === '..') {
                
                        continue;
                        
                    }else{
                    
                        unlink($path."/".$fp_item);
                        
                    }
                    
                }
                
                rmdir($dir."/floor-plan");
                
            } else {
                
                unlink($path);
                
            }
        }
        rmdir($dir);
   	}
   	
   	public function copy_images($sourceFolder, $destinationFolder){
   	    
   	    // Store the path of source file 
		$source = './uploads/buytolet/'.$sourceFolder;  

		// Store the path of destination file 
		$destination = './uploads/buytolet/'.$destinationFolder;  
		
		$dir = opendir($source);
		 
		// directory 
		while($file = readdir($dir)){
			// Skip . and .. 
			if(($file != '.') && ($file != '..')){  
			  	// Check if it's folder / directory or file 
			  	if(is_dir($source.'/'.$file)){  
					// Recursively calling this function for sub directory  
					//recursive_files_copy($source.'/'.$file, $destination.'/'.$file); 
			  	}else{  
					// Copying the files
					copy($source.'/'.$file, $destination.'/'.$file);  
			  	}  
			}  
		}  

		closedir($dir);
		
		$source_2 = './uploads/buytolet/'.$sourceFolder."/floor-plan";
			
		$destination_2 = './uploads/buytolet/'.$destinationFolder."/floor-plan";
		
		$dir2 = opendir($source_2);
		
		while($file = readdir($dir2)){
			// Skip . and .. 
			if(($file != '.') && ($file != '..')){  
				// Check if it's folder / directory or file 
				if(is_dir($source_2.'/'.$file)){  
					// Recursively calling this function for sub directory  
					//recursive_files_copy($source.'/'.$file, $destination.'/'.$file); 
				}else{  
					// Copying the files
					copy($source_2.'/'.$file, $destination_2.'/'.$file);  
				}  
			}  
		}  

		closedir($dir2);
   	}
   	
   	public function get_all_images($folder, $featuredImg){
   	    
   	    
   	    $images = "";
   	    $featImg = "";
   	    $image_result = "";
   	    
   	    //Get all images from folder and return
   	    $dir = './uploads/buytolet/'.$folder.'/';

		if (file_exists($dir) == false) {

			$image_result = 'Directory \''. $dir .'\' not found!';

		} else {

			$dir_contents = scandir($dir);

			$count = 0;
			
			$content_size = count($dir_contents);
			
			//print_r($dir_contents);

    		foreach ($dir_contents as $file) {
    				
    			if ($file !== '.' && $file !== '..' && $count <= ($content_size - 2)) { 
    			    
    			    if($count == ($content_size - 2)){
    			        
    			        $image_result .= '"'.$file.'"';
    			        
    			    }else{
    			        
    			        $image_result .= '"'.$file.'",';
    			        
    			    }
    			    
    			}
    			$count++;
    
    		}

		}
		
		echo $image_result;
   	}
   	
   	public function activate($code){
   	    
   	    $verify_stat = $this->buytolet_model->verify_account($code);
   	    
   	    if($verify_stat){
   	        
   	        //Successful
   	        
   	        $data['title'] = "Successful :: Buy2Let";
   	        
   	        $data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
   	        
   	        $data['page_title'] = "<span style='color:green'>Successful!</span>";
   	        
   	        $data['page_content'] = "You have successfully verified your account, you can proceed to the Login page and log into your account.";

			$this->load->view('templates/header', $data);

			$this->load->view('result-page', $data);

			$this->load->view('templates/footer', $data);
			
   	    }else{
   	        
   	        $data['title'] = "Oops :: Buy2Let";
   	        
   	        $data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
			$data['interest'] = $this->session->userdata('interest');
   	        
   	        $data['page_title'] = "<span style='color:red'>Oops!</span>";
   	        
   	        $data['page_content'] = "Your account could not be confirmed at this moment, please contact our customer service numbers or email";

			$this->load->view('templates/header', $data);

			$this->load->view('result-page', $data);

			$this->load->view('templates/footer', $data);
   	    }
   	}
   	
   	public function insert_stats(){
		
		//Get IP Address		
		$ip_add = $_SERVER['REMOTE_ADDR'];
		
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		
		$referrer = 'https://www.buy2let.ng';
		
		if(isset($_SERVER['HTTP_REFERER'])){
		    $referrer = $_SERVER['HTTP_REFERER'];
		}
		
		//Get Device Type
		
		//Get Country and city
		$geo = $this->getGeo($ip_add);
		
		$country = $geo[0];
		
		$city = $geo[1];
		
		$ua = $this->browserName($user_agent);
		
		//Browser name
		$browser_name = $ua['name'];
		
		//Device name
		$device = $ua['userAgent'];
		
		$visits = 1;
		
		//Check if user has visits today already
		
		$today_result = $this->buytolet_model->check_returning($ip_add);
		
		$visits = @$today_result['visits'] + 1;
		
		if(!$today_result){
		    //Add to visits today
		    $this->buytolet_model->addVisits($ip_add, $country, $city, $browser_name, 1, $device, $referrer);
		}else{
		    $this->buytolet_model->updateVisits( $visits, $ip_add );
		}
		
	}
	
	public function getGeo($ip){ 
  
		// Use JSON encoded string and converts 
		// it into a PHP variable 
		$ipdat = @json_decode(file_get_contents( 
			"http://www.geoplugin.net/json.gp?ip=" . $ip)); 
		
		$geos = array($ipdat->geoplugin_countryName, $ipdat->geoplugin_city );
		
		return $geos;

		/*echo 'Country Name: ' . $ipdat->geoplugin_countryName . "\n"; 
		echo 'City Name: ' . $ipdat->geoplugin_city . "\n"; 
		echo 'Continent Name: ' . $ipdat->geoplugin_continentName . "\n"; 
		echo 'Latitude: ' . $ipdat->geoplugin_latitude . "\n"; 
		echo 'Longitude: ' . $ipdat->geoplugin_longitude . "\n"; 
		echo 'Currency Symbol: ' . $ipdat->geoplugin_currencySymbol . "\n"; 
		echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode . "\n"; 
		echo 'Timezone: ' . $ipdat->geoplugin_timezone; */
	}
	
	public function browserName($u_agent){
		
		  $bname = 'Unknown';
		  $platform = 'Unknown';
		  $version= "";
		  $ub = "";

		  //First get the platform?
		  if (preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		  }elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		  }elseif (preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'windows';
		  }

		  // Next get the name of the useragent yes seperately and for good reason
		  if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		  }elseif(preg_match('/Firefox/i',$u_agent)){
			$bname = 'Mozilla Firefox';
			$ub = "Firefox";
		  }elseif(preg_match('/OPR/i',$u_agent)){
			$bname = 'Opera';
			$ub = "Opera";
		  }elseif(preg_match('/Chrome/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
			$bname = 'Google Chrome';
			$ub = "Chrome";
		  }elseif(preg_match('/Safari/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
			$bname = 'Apple Safari';
			$ub = "Safari";
		  }elseif(preg_match('/Netscape/i',$u_agent)){
			$bname = 'Netscape';
			$ub = "Netscape";
		  }elseif(preg_match('/Edge/i',$u_agent)){
			$bname = 'Edge';
			$ub = "Edge";
		  }elseif(preg_match('/Trident/i',$u_agent)){
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		  }

		  // finally get the correct version number
		  $known = array('Version', @$ub, 'other');
		  $pattern = '#(?<browser>' . join('|', $known) .
		')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
		  if (!preg_match_all($pattern, $u_agent, $matches)) {
			// we have no matching number just continue
		  }
		  // see how many we have
		  $i = count($matches['browser']);
		  if ($i != 1) {
			//we will have two since we are not using 'other' argument yet
			//see if version is before or after the name
			if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
				@$version= $matches['version'][0];
			}else {
				@$version= $matches['version'][1];
			}
		  }else {
			@$version= $matches['version'][0];
		  }

		  // check if we have a number
		  if ($version==null || $version=="") {$version="?";}

		  return array(
			'userAgent' => $u_agent,
			'name'      => $bname,
			'version'   => $version,
			'platform'  => $platform,
			'pattern'    => $pattern
		  );
		 
	} 
	public function shorten_title($string){
		
		if (strlen($string) >= 25) {
			echo substr($string, 0, 25). " ... ";
		}
		else {
			echo $string;
		}
		
	}
	
    public function remove_image($folder, $imgName){
		
		if ($folder && $imgName) {
		    
			$filename = "./uploads/buytolet/".$folder."/".$imgName; 
			
			if (file_exists($filename)) {
				
				unlink($filename);
				
			  	echo 1;
				
			} else {
				
			  	echo 0;
				
			}
		}else{
		    echo 0;
		}
	}
	
	public function result_page(){
	    
	    $data['title'] = "Successful :: Buy2Let";
   	        
        $data['page-title'] = "<span style='color:green'>Successful</span>";
           
        $data['page-content'] = "You have successfully verified your account, you can proceed to the Login page and log into your account.";

		$this->load->view('templates/header', $data);

		$this->load->view('result-page', $data);

		$this->load->view('templates/footer', $data);
	}
	
	public function resetForm(){
	    
	    $username = $this->input->post("username");
	    
	    $response = $this->buytolet_model->getUser($username);
	    
	    if($response){
	        
	        $code = md5(date('Y-m-d H:i:s'));
			
			$result = $this->buytolet_model->insertResetDetails($response['userID'], $code);
	        
	        $data['resetLink'] = base_url().'reset/'.$response['userID'].'/'.$code;
	        
	        $this->email->from('donotreply@smallsmall.com', 'Buy2Let');

			$this->email->to($username);

			$this->email->subject("Password Reset Instruction");	
			
			$this->email->set_mailtype("html");

			$message = $this->load->view('email/header.php', $data, TRUE);

			$message .= $this->load->view('email/passwordreset.php', $data, TRUE);

			$message .= $this->load->view('email/footer.php', $data, TRUE);

			$this->email->message($message);

			$emailRes = $this->email->send();
	        
	        echo 1;
	        
	    }else{
	        
	        echo "Email doesn't not exist";
	        
	    }
	}
	
	public function user_reset($userID, $reset_code){
		
		$res = $this->buytolet_model->reset_password($userID, $reset_code);
		
		if($res){
			
			
			$data['tempID'] = $userID;
			
			if(!$this->session->has_userdata('userID')){
			    
			    $userdata = array('tempID' => $res['userID']);
			    
			    $data['user_id'] = $res['userID'];

				$this->session->set_userdata($userdata);

				$data['title'] = "Reset Password Buy2Let";

				$this->load->view('templates/header', $data);

        		$this->load->view('reset-page', $data);
        
        		$this->load->view('templates/footer', $data);

			}else{

				$data['title'] = "Reset Error";

    			$data['page_title'] = '<span style="color:red">Unsuccessful!</span>';
    
    			$data['page_content'] = 'This reset link is expired or already used, you can request another reset link by clicking on "Forgot Password"';
    
    			$this->load->view('templates/header', $data);

        		$this->load->view('result-page', $data);
        
        		$this->load->view('templates/footer', $data);

			}
		}else{
			
			$data['title'] = "Reset Error";

			$data['page_title'] = '<span style="color:red">Unsuccessful!</span>';

			$data['page_content'] = 'This reset link is expired or already used, you can request another reset link by clicking on "Forgot Password"';

			$this->load->view('templates/header', $data);

    		$this->load->view('result-page', $data);
    
    		$this->load->view('templates/footer', $data);
			
		}
		
		
	}
	
	public function newPass(){
	    
	    $password = md5($this->input->post("password"));
	    
	    $userID = $this->input->post("userID");
	    
	    $response = $this->buytolet_model->changePass($userID, $password);
	    
	    if($response){
	        
	         echo 1;
	         
	    }else{
	        
	        echo 0;
	        
	    }
	}
	
	public function confirmCode(){
	    
	    $result = "error";
	    
	    $msg = "";
	    
	    $promocode = $this->input->post("promocode");
	    
	    $response = $this->buytolet_model->confirm_code($promocode);
	    
	    if($response){
	        
	        $result = "success";
	        
	        $msg = $response['value'];
	        
	    }
	    
	    echo json_encode(array("result" => $result, "msg" => $msg));
	}

	public function uploadIdentification($folder){
	    
	    $filename = '';

		if(!$folder){

			$folder = md5(date("Ymd His"));
		}	

		sleep(1);		

		if (!is_dir('./uploads/financing/'.$folder)) {

			mkdir('./uploads/financing/'.$folder, 0711, TRUE);			

		}		

		if($_FILES["files"]["name"] != ''){

			$output = '';

			$config["upload_path"] = './uploads/financing/'.$folder;

			$config["allowed_types"] = 'jpg|jpeg|png|JPG|PNG|JPEG|pdf';

			$config['max_size'] = '5000';
			
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			$this->upload->initialize($config);

			if(is_array($_FILES["files"]["name"])){

				for($count = 0; $count < count($_FILES["files"]["name"]); $count++){

					$_FILES["file"]["name"] = $_FILES["files"]["name"][$count];

					$_FILES["file"]["type"] = $_FILES["files"]["type"][$count];

					$_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];

					$_FILES["file"]["error"] = $_FILES["files"]["error"][$count];

					$_FILES["file"]["size"] = $_FILES["files"]["size"][$count];

					if($this->upload->do_upload('file')){

						$data = $this->upload->data();

						$output = "success";
						
						$filename = $data["file_name"];

					}

				}

			}else{

				$_FILES["file"]["name"] = $_FILES["files"]["name"];

				$_FILES["file"]["type"] = $_FILES["files"]["type"];

				$_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"];

				$_FILES["file"]["error"] = $_FILES["files"]["error"];

				$_FILES["file"]["size"] = $_FILES["files"]["size"];

				if($this->upload->do_upload('file')){

					$data = $this->upload->data();

					$output = "success";
					
					$filename = $data["file_name"];

				}

			}

			echo json_encode(array('result' => $output, 'folder' => $folder, 'filename' => $filename));

		}		

	}
	public function getProperty(){
	    
	    $result = "error";
	    
	    $details = array();
	    
	    $id = $this->input->post("prop_id");
	    
	    $response = $this->buytolet_model->getProp($id);
	    
	    if($response){
	        
	        $result = "success";
	        
	        $details = $response;
	        
	    }
	    
	    echo json_encode(array("result" => $result, "details" => $details));
	}
	
	public function updatePayment(){
		
		if(!$this->session->has_userdata('loggedIn')){

			redirect( base_url()."login" ,'refresh');

		}
		
		$userID = $this->session->userdata('userID');
		
		$email = $this->session->userdata('email');
		
		$phone = $this->session->userdata('phone');
		
		$name = $this->session->userdata('fname').' '.$this->session->userdata('lname');

		$payable = $this->input->post('payable');
		
		//$cost = $this->input->post("cost");
		
		$ref_id = $this->input->post("ref");
		
		//Get propertty ID using reference ID
		$prop = $this->buytolet_model->getPropWithRef($ref_id);

		$property_id = $prop['propertyID'];
		
		$propdata = array("property_id" => $property_id, "amount" => $payable);
		
		$this->session->set_userdata($propdata);
		
		$mop = 'Paystack';
		
		$prop = $this->buytolet_model->getProperty($property_id);
		
		$result = $this->buytolet_model->insertPayment($property_id, $userID, $payable, $mop, $ref_id);
		
		if($result){
		    
		    //Send email and attach offer letter to user
		    
		    $notificationRes = 0;
			$email_result = 0;
			$subject = 'Property Offer Update';
		    
		    $property_details = $prop['property_name'].''.$prop['address'].', '.$prop['city'].' '.$prop['propState'];
		    
		    if($this->input->post('plan') == 'Outright'){

				$message = '<p>Your outright property details” '.$prop['property_name'].''.$prop['address'].', '.$prop['city'].' '.$prop['propState'].'”.</p>
    			BuySmallsmall is a real estate investment platform that is making property investment easy and accessible to everyone, our platform allows you to own a small portfolio and grow it by earning passive income and benefit from capital appreciation.';
		        
		        $email_result = $this->outright_offer_letter($ref_id, $email, $phone, $prop['property_name'], $name, $prop['address'], $prop['city'], $prop['propState'], $cost, $payable, $prop['bed'], $prop['type']);
		        // Send notification message to user at dashboard
				$notificationRes = $this-> insertNotification($subject, $message, $userID, $name);

		    }else if($this->input->post('plan') == 'Financing'){
		        
		        $request = $this->buytolet_model->getRequest($ref_id);
		        
		        $transaction_fee = $request['amount'] * 0.04;

				$message = '<p>Your finance offer” '.$prop['property_name'].''.$prop['address'].', '.$prop['city'].' '.$prop['propState'].', '.$request['finance_balance'].'”.</p>
    			BuySmallsmall is a real estate investment platform that is making property investment easy and accessible to everyone, our platform allows you to own a small portfolio and grow it by earning passive income and benefit from capital appreciation.';
		        
		        $email_result = $this->finance_offer_letter($ref_id, $email, $phone, $prop['property_name'], $name, $prop['address'], $prop['city'], $prop['propState'], $cost, $payable, $prop['bed'], $prop['type'], $request['finance_balance'], $request['payable'], $request['amount'], $request['payment_period'], $transaction_fee);
		        // Send notification message to user at dashboard
				$notificationRes = $this-> insertNotification($subject, $message, $userID, $name);

		    }else if($this->input->post('plan') == 'Co-own'){
		        
		        $request = $this->buytolet_model->getRequest($ref_id);
		        
		        $beneficiary = $this->buytolet_model->getBeneficiaries($request['refID']);
		        
		        $message = '<p>You are now a co-landlord in this property ” '.$prop['property_name'].''.$prop['address'].', '.$prop['city'].'”.  You have bought '.$request['unit_amount'].' shares in this property.</p>
    			BuySmallsmall is a real estate investment platform that is making property investment easy and accessible to everyone, our platform allows you to own a small portfolio and grow it by earning passive income and benefit from capital appreciation.';
    			
    			//Send notification email to buyer
        		$email_res = $this->notification_letter($email, $message, $name);

				// Send notification message to user at dashboard
				$notificationRes = $this-> insertNotification($subject, $message, $userID, $name);
	
    			if($request['purchase_beneficiary'] == 'Self'){
        			
        			$user_certificate = $this->shares_certificate($userID,  $request['refID'], $name, $email, $request['unit_amount'], $property_details, $message, $prop['hold_period'], $prop['maturity_date']);
        			
        			$this->buytolet_model->updateSharesCertificateFieldO($user_certificate['filename'], $request['refID'], $userID);
    			}
    			
    			if(count($beneficiary) > 0){
    			    
    			    for($i = 0; $i < count($beneficiary); $i++){
    			        
        			    $message = 'You are now a co-landlord in this property ”'.$prop['property_name'].''.$prop['address'].', '.$prop['city'].'”,  “'.$name.'” has bought '.$beneficiary[$i]['no_of_units'].' shares for you in this property.
                    <p><a href="'.base_url().'login">Click to accept</a> and complete your profile.</p>
                    BuySmallsmall is a real estate investment platform that is making property investment easy and accessible to everyone, our platform allows you to own a small portfolio and grow it by earning passive income and benefit from capital appreciation.';
                        
                        //$email_res = $this->notification_letter($beneficiary[$i]['email'], $message, $beneficiary[$i]['lastname']);
                        $name = $beneficiary[$i]['firstname'].' '.$beneficiary[$i]['lastname'];
                        
                        $certificate = $this->shares_certificate($beneficiary[$i]['receiverID'],  $beneficiary[$i]['requestID'], $name, $beneficiary[$i]['email'], $beneficiary[$i]['no_of_units'], $property_details, $message, $prop['hold_period'], $prop['maturity_date']);
                        
						// Send notification message to user at dashboard
						$notificationRes = $this-> insertNotification($subject, $message, $userID, $name);


                        if(!empty($certificate)){
                            //Update shares certificate folder
                            $this->buytolet_model->updateSharesCertificateFieldB($certificate['filename'], $beneficiary[$i]['requestID'], $beneficiary[$i]['receiverID']);
                            
                            
                        }
        			    
        			}
        			
    			}
    			
    			echo 1;
		    }
			    			
		}else{
		    
			echo 0;
			
		}
		
	}
	
	public function validate_bvn(){
	    
	    $bvn = $this->input->post("bvn");
	    
	    $curl = curl_init();
	    
	    //$data = array( 'bvn' => $bvn );
        			
		curl_setopt_array($curl, array(
			
		  	CURLOPT_URL => "https://api.dojah.io/api/v1/kyc/bvn?bvn=".$bvn."",

		  	CURLOPT_RETURNTRANSFER => true,

		  	CURLOPT_HTTPHEADER => [
		  	    
				"AppId: 6221f564a0ee230034779486",
				
                "Authorization: prod_sk_aRm9dbhC01RIFBnV8zBr0Jrhc",
                
				"accept: text/plain"
				
		  	]
		));

		$response = curl_exec($curl);
		
		$err = curl_error($curl);
		
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		
		echo $httpcode;
		
		//https://api.dojah.io/api/v1/kyc/bvn?dob=YYYY-MM-DD
		
		
	}
	function calculateRepayment($period, $amount){
	    
	    
	    
	}
	
	public function outright_offer_letter($ref = 'aeorjf787g90dfdfdfdf', $email = 'seuncrowther@yahoo.com', $phone = '080********', $property_name = 'Olivia Court 5 Bedroom Duplex', $buyer_name = 'Pidah Tnadah', $property_address = '1B Admiralty way, Lekki Phase 1', $property_city = 'Lekki', $property_state = 'Lagos', $total_amount = '5000000', $trans_fee = '400000', $bed = '5', $apt_type = '5 Bedroom'){
	    //Prepare PDF document
	    
	    $data['name'] = $buyer_name;
	    
	    $data['property_name'] = $property_name;
	    
	    $data['address'] = $property_address.' '.$property_city.', '.$property_state;
	    
	    $pdf_content = '<div style="width:100%;height:800px;padding:20px;background:url('."https://buy.smallsmall.com/assets/images/cs-bg-1.png".');background-position:center;background-size:cover;background-repeat:no-repeat"></div>';
	    
	    //<div style="width:100%;height:800px;padding:20px;position:relative"><img src="https://buy.smallsmall.com/assets/images/cs-bg-1.png" width="100%" /><div style="width:70%;height:100px;position:absolute;top:100px;left:10%;background:#333;z-index:99999999999"></div></div>
	    
	    //Set folder to save PDF to
            $this->html2pdf->folder('./uploads/offers/');
            
            //Set the filename to save/download as
            $this->html2pdf->filename($ref.'_offer_letter.pdf');
            
            //Set the paper defaults
            $this->html2pdf->paper('a4', 'landscape');
            
            //Load html view
            $this->html2pdf->html($pdf_content); 
    		 
            //Create the PDF
            $path = $this->html2pdf->create('save');
            
            $this->email->from('no-reply@smallsmall.com', 'SmallSmall');
    
    		$this->email->to($email);
    		
    		$this->email->cc('accounts@smallsmall.com');
    		
    		$this->email->bcc('hello@buysmallsmall.ng, tunde.b@smallsmall.com');
    				
    		$this->email->set_mailtype("html");
    
    		$this->email->subject("Offer letter:".$property_name."");	
    
    		$message = $this->load->view('email/header.php', $data, TRUE);
    
    		$message .= $this->load->view('email/offer-letter-email.php', $data, TRUE);
    
    		$message .= $this->load->view('email/footer.php', $data, TRUE);
    
    		$this->email->message($message);
            
            if($path){
    			
    		    $this->email->attach($path);
    		    
    		}
    
    		$emailRes = $this->email->send();
    		
    		echo $pdf_content;
    		
    		//return $emailRes;
	}
	
	/*public function outright_offer_letter($ref, $email, $phone, $property_name, $buyer_name, $property_address, $property_city, $property_state, $total_amount, $trans_fee, $bed, $apt_type){
	    //Prepare PDF document
	    
	    $data['name'] = $buyer_name;
	    
	    $data['property_name'] = $property_name;
	    
	    $data['address'] = $property_address.' '.$property_city.', '.$property_state;
	    
	    $pdf_content = '<div style="width:100%;display:inline-block;"><table width="100%"><tr><td width="33.3%" valign="top"><img src="'.base_url().'assets/images/smallsmall-pnglogo.png" width="200px" /></td><td width="33.3%"></td><td width="33.3%"></td></tr></table><div style="width:100%;height:2px;background:#000;margin-bottom:40px;font-family:helvetica;"></div><table width="100%"><tr><td width="33.3%"><b style="font-family:helvetica;">'.date('d F Y').'</b><p style="font-family:helvetica;">'.$buyer_name.'<br />'.$email.'<br />'.$phone.'<br /></p></td><td width="33.3%"></td><td width="33.3%"></td></tr></table><table width="100%"><tr><td width="100%"><div style="width:100%;display:inline-block;font-family:helvetica;"><b><u>Dear '.strtoupper($buyer_name).'</u></b><p><b><u>OFFER LETTER FOR THE SALE OF '.strtoupper($bed).' BEDROOM LOCATED AT '.strtoupper($property_address).' '.strtoupper($property_city).', '.strtoupper($property_state).'.</u></b></p><p>Sequel to your indication of purchase on our platform for which we thank you, we write to offer you the interest on  the aforementioned property by way of Sale viz:</p></div></td></tr></table><table width="100%" cellpadding="10px"><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Description:</b></td><td style="font-family:helvetica;">'.$property_name.'</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Location:</b></td><td style="font-family:helvetica;">'.$property_address.', '.$property_city.', '.$property_state.'</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Purchase price:</b></td><td style="font-family:helvetica;">N'.number_format($total_amount).'</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Payment term:</b></td><td style="font-family:helvetica;">Financing</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Transaction fee(5%):</b></td><td style="font-family:helvetica;">N'.number_format($trans_fee).'</td></tr></table><p style="font-family:helvetica;">Kindly indicate your acceptance of this offer by signing with the acceptance button below.<br /><br />Please note that this offer is only valid for 5 working days and full payment is expected within this period. Offer will be considered as invalid if full payment is not received.</p><table width="100%"><tr><td style="font-family:helvetica;" width="33.3%">Yours Sincerely,<br />For Smallsmall Tech Ltd<div style="width:100%;height:auto;"><img src="'.base_url().'assets/img/chisom-signature.png" width="150px" height="auto" /></div><b>Chisom Olisaemeka</b><br /><b>VP Marketing and Sales</b><br /></td><td width="33.3%"></td><td width="33.3%"></td></tr></table></div>';
	    
	    //Set folder to save PDF to
            $this->html2pdf->folder('./uploads/offers/');
            
            //Set the filename to save/download as
            $this->html2pdf->filename($ref.'_offer_letter.pdf');
            
            //Set the paper defaults
            $this->html2pdf->paper('a4', 'portrait');
            
            //Load html view
            $this->html2pdf->html($pdf_content); 
    		 
            //Create the PDF
            $path = $this->html2pdf->create('save');
            
            $this->email->from('no-reply@smallsmall.com', 'SmallSmall');
    
    		$this->email->to($email);
    		
    		$this->email->cc('accounts@smallsmall.com');
    		
    		$this->email->bcc('hello@buysmallsmall.ng, tunde.b@smallsmall.com');
    				
    		$this->email->set_mailtype("html");
    
    		$this->email->subject("Offer letter:".$property_name."");	
    
    		$message = $this->load->view('email/header.php', $data, TRUE);
    
    		$message .= $this->load->view('email/offer-letter-email.php', $data, TRUE);
    
    		$message .= $this->load->view('email/footer.php', $data, TRUE);
    
    		$this->email->message($message);
            
            if($path){
    			
    		    $this->email->attach($path);
    		    
    		}
    
    		$emailRes = $this->email->send();
    		
    		return $emailRes;
	}*/
	
	public function shares_certificate($receiverID, $requestID, $name, $email, $shares_amount, $property_details, $message, $hold_period, $maturity_date){
	    
	    //Prepare PDF document
	    
	    $date_of_purchase = date('Y-m-d');
	    
	    $data['name'] = $name;
	    
	    $data['address'] = $property_details;
	    
	    $data['message'] = $message;
	    
	    $def_hold_period = '';
	    
	    if($hold_period == 'One Year'){
	        
	        $def_hold_period = '1 Year';
	        
	    }elseif($hold_period == 'Two Years'){
	        
	        $def_hold_period = '2 Years';
	        
	    }elseif($hold_period == 'Three Years'){
	        
	        $def_hold_period = '3 Years';
	        
	    }elseif($hold_period == 'Four Years'){
	        
	        $def_hold_period = '4 Years';
	        
	    }elseif($hold_period == 'Five Years'){
	        
	        $def_hold_period = '5 Years';
	        
	    }elseif($hold_period == 'Six Years'){
	        
	        $def_hold_period = '6 Years';
	        
	    }
	    
	    $filename = '';
	    
	    
            
        $pdf_content = '<div style="width:100%;display:inline-block;text-align:center;"><table width="100%"><tr><td width="33.3%"></td><td width="33.3%" style="text-align:center" valign="top"><img src="images/bss-logo.png" width="200px" /></td><td width="33.3%"></td></tr></table><div style="width:100%;background:transparent;margin:40px auto 40px 0;color:#64318A;font-size:30px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;margin:40px 0 40px 0">*** SHARES CERTIFICATE ***</div><div style="width:100%;line-height:40px;color:#64318A;font-size:26px;font-family:Arial, Helvetica, sans-serif;text-transform:uppercase"></div><table style="display:inline-block;margin:auto;font-family:Arial, Helvetica, sans-serif;min-width:30px;max-width:70%;" cellpadding="10"><tr><td><div style="text-align:left">This is to certify that <span style="width:500px;display:inline-block;color:#000;font-size:18px;border-bottom:2px solid #000;font-family:Verdana, Geneva, Tahoma, sans-serif;line-height:24px;text-align:center">'.$name.'</span></div></td></tr><tr><td><div style="text-align:left">is the registered holder of <span style="width:100px;display:inline-block;color:#000;font-size:18px;border-bottom:2px solid #000;font-family:Verdana, Geneva, Tahoma, sans-serif;line-height:24px;text-align:center">'.$shares_amount.'</span> property shares of</div></td></tr><tr><td><div style="text-align:left"><span style="display:inline-block;color:#000;font-size:18px;border-bottom:2px solid #000;font-family:Verdana, Geneva, Tahoma, sans-serif;line-height:24px;text-align:center"> '.$property_details.'</span></div></td></tr><tr><td><div style="text-align:left">The hold period of this shares is <span style="width:100px;display:inline-block;color:#000;font-size:18px;border-bottom:2px solid #000;font-family:Verdana, Geneva, Tahoma, sans-serif;line-height:24px;text-align:center">'.$hold_period.'</span> and expected date of maturity is <span style="width:100px;display:inline-block;color:#000;font-size:18px;border-bottom:2px solid #000;font-family:Verdana, Geneva, Tahoma, sans-serif;line-height:24px;">'.date('d M, Y', strtotime($maturity_date)).'</span></div></td></tr><tr><td><div style="text-align:left"></div></td></tr></table> <table width="100%"><tr><td style="text-align:center;font-family:Arial, Helvetica, sans-serif;" width="33.3%"><div style="width:100%;height:auto;"><img src="'.base_url().'assets/img/chisom-signature.png" width="150px" height="auto" /></div><b style="color:#64318A">VP Marketing and Sales</b><br /></td><td width="33.3%" style="text-align:center"></td><td width="33.3%" style="text-align:center;font-family:Arial, Helvetica, sans-serif;"><span style="width:200px;display:inline-block;color:#000;font-size:18px;border-bottom:2px solid #000;font-family:Verdana, Geneva, Tahoma, sans-serif;line-height:24px;margin-bottom:10px;">'.$date_of_purchase.'</span><br /><span style="color:#64318A">Date of issue:</span></td></tr></table></div>';
            
            $dir = './uploads/shares_certificate/'.$receiverID.'/';
            
            $user_dir = $dir.$requestID.'/';
            
            if(!is_dir($dir)){
                
                mkdir($dir);
                
                mkdir($user_dir);
                
            }
            
            $filename = date('YmdHis').'_certificate.pdf';
	    
	        //Set folder to save PDF to
            $this->html2pdf->folder($user_dir);
            
            //Set the filename to save/download as
            $this->html2pdf->filename($filename);
            
            //Set the paper defaults
            $this->html2pdf->paper('a4', 'landscape');
            
            //Load html view
            $this->html2pdf->html($pdf_content); 
    		 
            //Create the PDF
            $path = $this->html2pdf->create('save');
            
            $this->email->from('no-reply@smallsmall.com', 'SmallSmall');
    
    		$this->email->to($email);
    		
    		//$this->email->cc('accounts@smallsmall.com');
    		
    		//$this->email->bcc('hello@buysmallsmall.ng, tunde.b@smallsmall.com');
    				
    		$this->email->set_mailtype("html");
    
    		$this->email->subject("Share Certificate:".$property_details."");	
    
    		$message = $this->load->view('email/header.php', $data, TRUE);
    
    		$message .= $this->load->view('email/shares-certificate-email.php', $data, TRUE);
    
    		$message .= $this->load->view('email/footer.php', $data, TRUE);
    
    		$this->email->message($message);
            
            if($path){
    			
    		    $this->email->attach($path);
    		    
    		}
    
    		$emailRes = $this->email->send();
    		
    		return array("status" => $emailRes, "filename" => $filename);
	}
	
	public function finance_offer_letter($ref, $email, $phone, $property_name, $buyer_name, $property_address, $property_city, $property_state, $total_amount, $trans_fee, $finance_balance, $payable, $amount, $payment_period, $transaction_fee){
	    //Prepare PDF document
	    
	    $data['name'] = $buyer_name;
	    
	    $data['property_name'] = $property_name;
	    
	    $data['address'] = $property_address.' '.$property_city.', '.$property_state;
	    
	    $pdf_content = '<div style="width:100%;display:inline-block;"><table width="100%"><tr><td width="33.3%" valign="top"><img src="'.base_url().'assets/images/smallsmall-pnglogo.png" width="200px" /></td><td width="33.3%"></td><td width="33.3%"></td></tr></table><div style="width:100%;height:2px;background:#000;margin-bottom:40px;font-family:helvetica;"></div><table width="100%"><tr><td width="33.3%"><b style="font-family:helvetica;">'.date('d F Y').'</b><p style="font-family:helvetica;">'.$buyer_name.'<br />'.$email.'<br />'.$phone.'<br /></p></td><td width="33.3%"></td><td width="33.3%"></td></tr></table><table width="100%"><tr><td width="100%"><div style="width:100%;display:inline-block;font-family:helvetica;"><b><u>Dear '.$buyer_name.'</u></b><p><b><u>OFFER LETTER FOR THE SALE OF '.strtoupper($bed).' BEDROOM LOCATED AT '.strtoupper($property_address).' '.strtoupper($property_city).', '.strtoupper($property_state).'.</u></b></p><p>Sequel to your indication of purchase on our platform for which we thank you, we write to offer you the interest on  the aforementioned property by way of Sale viz:</p></td></tr></table><table width="100%" cellpadding="10px"><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Description:</b></td><td style="font-family:helvetica;">'.$property_name.'</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Location:</b></td><td style="font-family:helvetica;">'.$property_address.', '.$property_city.', '.$property_state.'</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Purchase price:</b></td><td style="font-family:helvetica;">N'.number_format($total_amount).'</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Payment term:</b></td><td style="font-family:helvetica;">Financing</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Equity (%):</b></td><td style="font-family:helvetica;">N'.number_format($payable).'</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Principal (%):</b></td><td style="font-family:helvetica;">N'.number_format($finance_balance).'</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Tenure:</b></td><td style="font-family:helvetica;">'.($payment_period/12).' Years( $payment_period Months )</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Repayment:</b></td><td style="font-family:helvetica;">MONTHLY (REFER TO PAYMENT SCHEDULE)</td></tr><tr><td style="font-family:helvetica;" width="33%" valign="top"><b>Transaction fee(4%):</b></td><td style="font-family:helvetica;">N'.number_format($transaction_fee).'</td></tr></table><p style="font-family:helvetica;">Kindly indicate your acceptance of this offer by signing with the acceptance button below.<br /><br />Please note that this offer is only valid for 5 working days and full payment is expected within this period. Offer will be considered as invalid if full payment is not received.</p><table width="100%"><tr><td style="font-family:helvetica;" width="33.3%">Yours Sincerely,<br />For Smallsmall Tech Ltd<div style="width:100%;height:auto;"><img src="'.base_url().'assets/img/chisom-signature.png" width="150px" height="auto" /></div><b>Chisom Olisaemeka</b><br /><b>VP Marketing and Sales</b><br /></td><td width="33.3%"></td><td width="33.3%"></td></tr></table></div>';
	    
	    //Set folder to save PDF to
            $this->html2pdf->folder('./uploads/offers/'.$ref.'/');
            
            //Set the filename to save/download as
            $this->html2pdf->filename($ref.'_offer_letter.pdf');
            
            //Set the paper defaults
            $this->html2pdf->paper('a4', 'portrait');
            
            //Load html view
            $this->html2pdf->html($pdf_content); 
    		 
            //Create the PDF
            $path = $this->html2pdf->create('save');
            
            $this->email->from('no-reply@smallsmall.com', 'SmallSmall');
    
    		$this->email->to($email);
    		
    		$this->email->cc('accounts@smallsmall.com');
    		
    		$this->email->bcc('hello@buysmallsmall.ng, tunde.b@smallsmall.com');
    				
    		$this->email->set_mailtype("html");
    
    		$this->email->subject("Offer letter:".$property_name."");	
    
    		$message = $this->load->view('email/header.php', $data, TRUE);
    
    		$message .= $this->load->view('email/offer-letter-email.php', $data, TRUE);
    
    		$message .= $this->load->view('email/footer.php', $data, TRUE);
    
    		$this->email->message($message);
            
            if($path){
    			
    		    $this->email->attach($path);
    		    
    		}
    
    		$emailRes = $this->email->send();
    		
    		return $emailRes;
	}
	
	public function notification_letter($email , $message, $name){
	    
	    $data['message'] = $message;
	    
	    $data['name'] = $name;
	    
        $this->email->from('no-reply@smallsmall.com', 'SmallSmall');

		$this->email->to($email);
		
		$this->email->cc('accounts@smallsmall.com');
		
		$this->email->bcc('hello@buysmallsmall.ng, tunde.b@smallsmall.com');
				
		$this->email->set_mailtype("html");

		$this->email->subject("Co Own Property Purchase.");	

		$message = $this->load->view('email/header.php', $data, TRUE);

		$message .= $this->load->view('email/property-notification-email.php', $data, TRUE);

		$message .= $this->load->view('email/footer.php', $data, TRUE);

		$this->email->message($message);

		$emailRes = $this->email->send();
		
		return $emailRes;
	}
	public function generate_user_id($number){
	    
	    $digits = $number;
	    
		$randomNumber = '';
		
		$count = 0;

		while($count < $digits){

			$randomDigit = mt_rand(0, 9);

			$randomNumber .= $randomDigit;

			$count++;

		}		

		return $randomNumber;
	}
	
	//parameter array
	public function create_user_account($details){

		$password = md5('Password@123');

		$confirmationCode = md5(date('YmdHis'));

		return $this->buytolet_model->create_user_account($details['id'], $details['fname'], $details['lname'], $details['email'], $password, $details['phone'], $details['refCode'], $confirmationCode);

	}
	
	public function getPropertyWorth($user_id){

		$worth = 0;

		$properties = $this->buytolet_model->getAllUserCoOwnProperties($user_id);

		if(count($properties) > 1){
			
			for($i = 0; $i < count($properties); $i++){

				$worth = $worth + $properties[$i]['amount'];

			}
		}else{
			//Return single property worth
			$worth = $properties[0]['amount'];
		}

		return $worth;
	}


	public function filter_properties()
	{

		// Filter values from POST data
		{
			$slug = '';

			$search_crit['slug'] = $this->input->post('slug');

			$search_crit['list_price'] = $this->input->post('list_price');

			$search_crit['location'] = $this->input->post('location');

			$search_crit['property_type'] = $this->input->post('property_type');

			if ($search_crit['slug'] == 5) {

				$slug = 'co-ownership';
			} else if ($search_crit['slug'] == 2) {

				$slug = 'buy-to-let';
			} else {

				$slug = 'buy-to-live';
			}
			echo $slug;

			if (@$search_crit['slug'] === null && @$search_crit['list_price'] === null && @$search_crit['location'] === null && @$search_crit['property_type'] === null) {

				$search_crit = $this->session->userdata('filter');
			} else {

				$this->session->set_userdata('filter', $search_crit);
			}

			$config['total_rows'] = $this->buytolet_model->getFilterPropertiesCount($search_crit);

			$data['total_count'] = $config['total_rows'];

			$config['suffix'] = '';

			$data['locations'] = $this->buytolet_model->get_locations($states);

			$data['cities'] = $this->buytolet_model->getCities(2671);

			$data['apts'] = $this->buytolet_model->getApt();	

			if ($config['total_rows'] > 0) {

				$page_number = $this->uri->segment(2);

				$config['base_url'] = base_url() . 'properties-filter';

				$config['uri_segment'] = 2;

				if (empty($page_number))

					$page_number = 1;

				$offset = ($page_number - 1) * $this->pagination->per_page;

				$this->buytolet_model->setPageNumber($this->pagination->per_page);

				$this->buytolet_model->setOffset($offset);

				$this->pagination->cur_page = $page_number;

				$this->pagination->initialize($config);

				$data['page_links'] = $this->pagination->create_links();

				$data['from_row'] = $offset + 1;

				$data['properties'] = $this->buytolet_model->getFilterProperties($search_crit);

				$data['to_row'] = $page_number * count($data['properties']);
			}

			if ($this->session->has_userdata('loggedIn')) {

				$data['userID'] = $this->session->userdata('userID');

				$data['fname'] = $this->session->userdata('fname');

				$data['lname'] = $this->session->userdata('lname');

				$data['user_type'] = $this->session->userdata('user_type');

				$data['loggedIn'] = $this->session->userdata('loggedIn');

				$data['interest'] = $this->session->userdata('interest');
			}

			$data['slug'] = $slug;

			//Check login status

			$data['title'] = "Properties :: Buy2Let";

			$this->load->view('templates/header', $data);

			$this->load->view('properties', $data);

			$this->load->view('templates/footer', $data);
		}
	}


}

