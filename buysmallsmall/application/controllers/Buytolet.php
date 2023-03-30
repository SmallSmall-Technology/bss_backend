<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Buytolet extends CI_Controller {



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
	public function __construct() {
		
		header('Access-Control-Allow-Origin: *');
    	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	   	parent::__construct();  
		$this->load->library('session');

	}

	public function index()

	{

		//Get featured properties

		$data['properties'] = $this->buytolet_model->getHomeProps();

		$data['pool_properties'] = $this->buytolet_model->getPoolHomeProps();

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');

		}

		//Check login status

		$data['title'] = "Welcome to Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('index', $data);
		
		//$this->load->view('splash', $data);

		$this->load->view('templates/footer', $data);

	}

	public function home_test()
	{

		//Get featured properties

		$data['properties'] = $this->buytolet_model->getHomeProps();

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');

		}

		//Check login status

		$data['title'] = "Buy2Let";

		

		$this->load->view('templates/header', $data);

		$this->load->view('index', $data);

		$this->load->view('templates/footer', $data);

	}

	public function about_us(){

		if($this->session->has_userdata('loggedIn')){
		    
			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');

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

		}

		$data['title'] = "Terms and Conditions :: Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('terms-and-conditions', $data);

		$this->load->view('templates/footer', $data);
		
 
	}
	public function investor_basic(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');

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

		}
		
		$data['contents'] = $this->buytolet_model->get_faqs();

		$data['title'] = "Frequently Asked Questions :: Buy2Let";
		
		//$data['content'] = $this->buytolet_model->get_faq();

		$this->load->view('templates/header', $data);

		$this->load->view('faq', $data);

		$this->load->view('templates/footer', $data);
		
 
	}
	public function pool_buy_faq(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');

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

			$this->load->view('templates/header', $data);

			$this->load->view('signup', $data);

			$this->load->view('templates/footer', $data);

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
	
	public function buyer_information(){

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');
			
			$data['phone'] = $this->session->userdata('phone');

			$data['email'] = $this->session->userdata('email');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');

			//Check login status

			$data['title'] = "Buyer Information :: Buy2Let";



			$this->load->view('templates/header', $data);

			$this->load->view('buyer-information', $data);

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

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
			
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

		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');

			//Check login status

			$data['title'] = "Successful :: Buy2Let";

			$this->load->view('templates/header', $data);

			$this->load->view('final', $data);

			$this->load->view('templates/footer', $data);

		}else{

			redirect( base_url()."login" ,'refresh');

		}

	}
	public function guaranteed_rent(){

		$data['userID'] = $this->session->userdata('userID');

		$data['fname'] = $this->session->userdata('fname');

		$data['lname'] = $this->session->userdata('lname');

		$data['user_type'] = $this->session->userdata('user_type');			

		$data['loggedIn'] = $this->session->userdata('loggedIn');

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

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');
		}
		
		//Update property views
		$views = intval($data['property']['views']) + 1;
		
		$this->buytolet_model->updateViews($views, $id);

		//Check login status

		$data['title'] = $data['property']['property_name']." :: Buy2Let";		

		$this->load->view('templates/header', $data);

		$this->load->view('property', $data);

		$this->load->view('templates/footer', $data);

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
		}
		

		//Check login status

		$data['title'] = $data['property']['property_name']." :: Buy2Let";		

		$this->load->view('templates/header', $data);

		$this->load->view('property-test', $data);

		$this->load->view('templates/footer', $data);

	}

	public function properties()

	{
        
		$config['total_rows'] = $this->buytolet_model->getAllPropCount();
		

		$data['total_count'] = $config['total_rows'];
		
			

		$config['suffix'] = '';
		
		$data['cities'] = $this->buytolet_model->getCities(2671);

		$data['apts'] = $this->buytolet_model->getApt();

		if ($config['total_rows'] > 0) {


			$page_number = $this->uri->segment(2);
			
			$config['base_url'] = base_url() . 'properties/';

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
			
		    $data['properties'] = $this->buytolet_model->getProperties();
			
			$data['to_row'] = $page_number * count($data['properties']);

		}
		
        
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');

			$data['lname'] = $this->session->userdata('lname');

			$data['user_type'] = $this->session->userdata('user_type');			

			$data['loggedIn'] = $this->session->userdata('loggedIn');

		}
		

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

		}
		

		//Check login status

		$data['title'] = "Properties :: Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('properties', $data);

		$this->load->view('templates/footer', $data);

	}

	

	public function signupForm(){
	    
	    $ua = $_SERVER['HTTP_USER_AGENT'];
	    
	    $digits = 12;

		$randomNumber = '';

		$count = 0;

		while($count < $digits){

			$randomDigit = mt_rand(0, 9);

			$randomNumber .= $randomDigit;

			$count++;

		}		

		$id = $randomNumber;

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
		
		$accredited_investor = $this->input->post("accredited_investor");
		
		$investment_experience = $this->input->post("investment_experience");
		
		$investment_goal = $this->input->post("investment_goal");
		
		$investment_capital = $this->input->post("investment_capital");
		
		$financing_choice = $this->input->post("financing_choice");
		
		$investment_period = $this->input->post("investment_period");
		
		$purchase_plan = $this->input->post("purchase_plan");
		
		$preferred_location_1 = $this->input->post("preferred_location_1");
		
		$preferred_location_2 = $this->input->post("preferred_location_2");
		
		$gender = $this->input->post("gender");
		
		$user_agent = $this->browserName($ua);

		$confirmationCode = md5(date('d-m-Y h:i:s'));		

		//Check to see if email exists already

		$email_res = $this->buytolet_model->check_email($email);		

		if(!$email_res){

			//Insert details in user table

			$res = $this->buytolet_model->add_user($id, $fname, $lname, $email, $phone, $password, $confirmationCode, $medium, $age, $income, $occupation, $position, $address, $gender, $accredited_investor, $investment_experience, $investment_goal, $investment_capital, $financing_choice, $investment_period, $purchase_plan, $preferred_location_1, $preferred_location_2);

			if($res){
			    
			    $registration = $this->buytolet_model->register($id, $fname, $lname, $email, $password, $phone, $income, $confirmationCode, $medium, 'tenant', 'Buy', '', $gender, $user_agent['userAgent']);
			    
			    $data['name'] = $lname;
			    
			    $data['confirmationLink'] = base_url().'activate/'.$confirmationCode;

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

		}
		

		//Check login status

		$data['title'] = "Search Results :: Buy2Let";

		$this->load->view('templates/header', $data);

		$this->load->view('properties', $data);

		$this->load->view('templates/footer', $data);
	}

	public function scheduleInsp(){			

		$inspDate = trim($this->input->post("insp_date"));

		$userID = $this->session->userdata('userID');

		$propID = $this->input->post('propID');		

		//Insert date

		$res = $this->buytolet_model->setInspection($inspDate, $propID, $userID);		

		if($res){
			//Successful

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

			if($user['confirmation_link'] == ''){

				if($user['status'] == 'Active'){

					$userdata = array('userID' => $user['userID'], 'loggedIn' => 'yes', 'fname' => $user['firstName'], 'lname' => $user['lastName'], 'email' => $user['email'], 'verified' => $user['verified'], 'phone' => $user['phone'], 'user_type' => $user['user_type'], 'referral_code' => $user['referral_code'], 'rss_points' => $user['points']);
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
		
		$buyer_type = $this->input->post("buyer_type");
		
		$payment_plan = $this->input->post("payment_plan");
		
		$property_id = $this->input->post("property_id");
		
		$cost = $this->input->post("cost");
		
		$firstname = $this->input->post("firstname");
		
		$lastname = $this->input->post("lastname");
		
		$email = $this->input->post("email");
		
		$phone = $this->input->post("phone");
		
		$address = $this->input->post("address");
		
		$country = $this->input->post("country");
		
		$state = $this->input->post("state");
		
		$city = $this->input->post("city");
		
		$payable = $this->input->post("payable");
		
		$promo_code = $this->input->post("promo_code");
		
		$unit_amount = $this->input->post("unit_amount");
		
		$payment_period = $this->input->post("payment_period");
		
		$mop = $this->input->post("method_of_payment");
		
		$prop = $this->buytolet_model->fetchProperty($property_id);
		
		$new_pool_units = $prop['available_units'] - $unit_amount;
		
		$result = $this->buytolet_model->insertRequest($buyer_type, $payment_plan, $property_id, $cost, $firstname, $lastname, $email, $phone, $address, $country, $state, $city, $data['userID'], $payable, $mop, $payment_period, $unit_amount, $promo_code);
		
		if($result){
		    
		    if($this->buytolet_model->update_units($new_pool_units, $property_id)){
		    
			    echo 1;
			    
		    }else{
		        
		        echo 0;
		        
		    }
			
		}else{
		    
			echo 0;
			
		}
		
	}

	public function logout(){

		$this->session->sess_destroy();

		$url = $_SERVER['HTTP_REFERER'];

		redirect($url);

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
		
		$visits = $today_result['visits'] + 1;
		
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
	        
	        $this->email->from('donotreply@buy2let.ng', 'Buy2Let');

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
}

