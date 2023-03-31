<?php

class Buytolet_model extends CI_Model {

	public function __construct()
	{
			parent::__construct();

			$this->load->database();
	}

	// Declare variables

	private $_limit;

	private $_pageNumber;

	private $_offset;

	// setter getter function

	public function setLimit($limit) {

		$this->_limit = $limit;

	}

	public function setPageNumber($pageNumber) {

		$this->_pageNumber = $pageNumber;

	}

	public function setOffset($offset) {

		$this->_offset = $offset;

	}
	
	public function getPropertyFilterCount($s_data){
		
		$this->db->select('*');
		
		$this->db->from('buytolet_property');
		
		$this->db->where('active', 1);
		
		if($s_data['apt_type']){

			$this->db->like('apartment_type', $s_data['apt_type']);

		}
		
		if($s_data['city']){

			$this->db->like('city', $s_data['city']);

		}
		
		if($s_data['beds']){

			$this->db->where('bed', $s_data['beds']);

		}
		
		if($s_data['bath']){

			$this->db->where('bath', $s_data['bath']);

		}
		
		if($s_data['tenancy']){

			$this->db->like('tenantable', $s_data['tenancy']);

		}
		if($s_data['price']){

			$this->db->where('price >=', ($s_data['price'] - 50000000));

		}
		
		if($s_data['price']){

			$this->db->where('price <=', $s_data['price']);

		}

		return $this->db->count_all_results();
		
	}
	
	public function getAllPropCount() {

		$this->db->from('buytolet_property');
		
		$this->db->where('active', 1);

		return $this->db->count_all_results();
		

	}
    public function getPoolAptCount() {

		$this->db->from('buytolet_property');
		
		$this->db->where('pool_buy', 'yes');
		
		$this->db->where('active', 1);

		return $this->db->count_all_results();

	}
	public function check_email($email){

		$this->db->select('email');

		$this->db->from('buytolet_users');

		$this->db->where('email', $email);

		$this->db->limit(1);



		$query = $this->db->get();



		if($query->num_rows() > 0){

			

			return 1;

			

		}else{

			return 0;
			
		}

	}
	
	public function add_user($id, $fname, $lname, $email, $phone, $password, $confirmationCode, $medium, $age, $income, $occupation, $position, $address, $gender, $accredited_investor, $investment_experience, $investment_goal, $investment_capital, $financing_choice, $investment_period, $purchase_plan, $preferred_location_1, $preferred_location_2){

		$this->userID = $id;

		$this->firstname = $fname; // please read the below note

		$this->lastname = $lname;

		$this->email = $email;

		$this->phone = $phone;

		$this->password = $password;

		$this->status = 'Active';
		
		$this->medium = $medium;
		
		$this->age = $age;
		
		$this->income = $income;
		
		$this->occupation = $occupation;
		
		$this->position = $position;
		
		$this->address = $address;
		
		$this->gender = $gender;
		
		$this->accredited_investor = $accredited_investor;
		
		$this->investment_experience = $investment_experience;
		
		$this->investment_goal = $investment_goal;
		
		$this->investment_capital = $investment_capital;
		
		$this->financing_choice = $financing_choice;
		
		$this->investment_period = $investment_period;
		
		$this->purchase_plan = $purchase_plan;
		
		$this->preferred_location_1 = $preferred_location_1;
		
		$this->preferred_location_2 = $preferred_location_2;

		$this->confirmation_code = $confirmationCode; 

		$this->registration_date = date('Y-m-d H:i:s');

		if($this->db->insert('buytolet_users', $this)){	

			$lastlog = date('Y-m-d H:i:s');

			$res = $this->db->insert('buytolet_login', array('email' => $email, 'password' => $password, 'userID' => $id, 'last_login' => $lastlog, 'confirmation_link' => $confirmationCode));

			if($res){
			    
			    

				return 1;

			}else{

				return 0;

			}
		}else{

			return 0;

		}			

	}
	public function register($id, $fname, $lname, $email, $password, $phone, $income, $confirmationCode, $referral, $user_type, $interest, $rc, $gender, $user_agent){

        $this->userID = $id;

        $this->firstName = $fname; // please read the below note

        $this->lastName = $lname;

        $this->email = $email;

        $this->password = $password;

        $this->phone = $phone;

        $this->income = $income;

        $this->referral = $referral;
        
        $this->gender = $gender;
        
        //$this->referred_by = $referred_by;
        
        $this->referral_code = $rc;

        $this->user_type = $user_type;

        $this->interest = $interest;

        $this->verified = 'no';

        $this->points = 0;

        $this->status = 'Active';
		
		$this->platform = 'Web';
		
		$this->user_agent = $user_agent;

        $this->regDate = date('Y-m-d H:i:s');

        if($this->db->insert('user_tbl', $this)){

            $lastlog = date('Y-m-d H:i:s');

            return $this->db->insert('login_tbl', array('email' => $email, 'password' => $password, 'userID' => $id, 'lastLogin' => $lastlog, 'confirmation' => $confirmationCode));
            
        }else{
            
            return 0;
        }

    }
	public function login_user($username, $password){

		$this->db->select('a.password, a.lastLogin, a.confirmation, b.*, b.user_type');

		$this->db->from('login_tbl as a');

		$this->db->where('a.email', $username);

		$this->db->where('a.password', $password);

		$this->db->where('b.status', 'Active');

		$this->db->join('user_tbl as b', 'b.userID = a.userID');

		$this->db->limit(1);

		$query = $this->db->get();

		return $query->row_array();

	}
	/*public function login_user($username, $password){

		$this->db->select('a.email, a.password, a.last_login, a.userID, a.confirmation_link, b.userID, b.status, b.firstname, b.lastname, b.phone');
		
		$this->db->from('buytolet_login as a');

		$this->db->where('a.email', $username);

		$this->db->where('a.password', $password);

		$this->db->join('buytolet_users as b', 'b.userID = a.userID');

		$query = $this->db->get();
		
		return $query->row_array();

	}*/
	
	public function getCities($id){
		
		$this->db->select('id, name, state_id');
		
		$this->db->from('cities');
		
		$this->db->where('state_id', $id);
		
		$query = $this->db->get();
		
		return $query->result_array();
		
	}
	public function getApt(){
		
		$this->db->select('id, type');
		
		$this->db->from('apt_type_tbl');
		
		$query = $this->db->get();
		
		return $query->result_array();
		
	}

	public function getHomeProps(){

		$this->db->select('a.propertyID, a.property_name, a.price, a.promo_price, a.promo_category, a.address, a.city, a.state, a.bed, a.bath, a.toilet, a.apartment_type, a.tenantable, a.expected_rent, a.property_size, a.property_info, a.location_info, a.floor_plan, a.image_folder, a.featured_image, a.status, a.poster, a.mortgage, a.developer, a.pool_units, a.available_units, a.pool_buy, a.availability, a.active, a.asset_appreciation_1, a.asset_appreciation_2, a.asset_appreciation_3, a.asset_appreciation_4, a.asset_appreciation_5, a.construction_lvl, a.start_date, a.finish_date, b.id, b.type, b.slug');

		$this->db->from('buytolet_property as a');

		$this->db->where('a.status', 'New');
		
		$this->db->where('a.active', 1);
		
		//$this->db->where('a.availability !=', 'Sold');
		
	    $this->db->where('a.featured', 1);

		$this->db->join('apt_type_tbl as b', 'b.id = a.apartment_type', 'LEFT');

		$this->db->limit(4);
		
		//$this->db->order_by('a.asset_appreciation_1', 'DESC');
		
		$query = $this->db->get();

		return $query->result_array();
	}
	
	public function getPoolHomeProps(){

		$this->db->select('a.id, a.propertyID, a.property_name, a.price, a.promo_price, a.promo_category, a.address, a.city, a.state, a.bed, a.bath, a.toilet, a.apartment_type, a.tenantable, a.expected_rent, a.property_size, a.property_info, a.location_info, a.floor_plan, a.image_folder, a.featured_image, a.status, a.poster, a.mortgage, a.developer, a.pool_units, a.available_units, a.pool_buy, a.availability, a.active, a.asset_appreciation_1, a.asset_appreciation_2, a.asset_appreciation_3, a.asset_appreciation_4, a.asset_appreciation_5, a.construction_lvl, a.start_date, a.finish_date, b.id, b.type, b.slug');

		$this->db->from('buytolet_property as a');

		$this->db->where('a.status', 'New');

		$this->db->where('a.pool_buy', 'yes');
		
		$this->db->where('a.active', 1);
		
		//$this->db->where('a.availability !=', 'Sold');

		$this->db->join('apt_type_tbl as b', 'b.id = a.apartment_type', 'LEFT');

		$this->db->limit(2);
		
		$this->db->order_by('a.asset_appreciation_1', 'DESC');

		$query = $this->db->get();	

		return $query->result_array();
	}
	
	public function getProperties(){		

		$this->db->select('a.id, a.propertyID, a.property_name, a.price, a.promo_price, a.promo_category, a.address, a.city, a.state, a.bed, a.bath, a.toilet, a.apartment_type, a.tenantable, a.expected_rent, a.property_size, a.property_info, a.location_info, a.floor_plan, a.image_folder, a.featured_image, a.status, a.poster, a.mortgage, a.developer, a.pool_units, a.available_units, a.pool_buy, a.availability, a.active, a.asset_appreciation_1, a.asset_appreciation_2, a.asset_appreciation_3, a.asset_appreciation_4, a.asset_appreciation_5, a.construction_lvl, a.start_date, a.finish_date, b.id, b.type, b.slug, c.id, c.name as propState');		

		$this->db->from('buytolet_property as a');		

		$this->db->where('a.status', 'New');
		
		$this->db->where('a.active', 1);		

		$this->db->join('apt_type_tbl as b', 'b.id = a.apartment_type', 'LEFT');
		
		$this->db->join('states as c', 'c.id = a.state', 'LEFT');
		
		$this->db->order_by("a.id", "DESC");
		
		//$this->db->order_by("a.asset_appreciation_1", "DESC");

		$this->db->limit($this->_pageNumber, $this->_offset);

		$query = $this->db->get();

		return $query->result_array();			



	}
	public function getPoolProps(){		

		$this->db->select('a.id, a.propertyID, a.property_name, a.price, a.promo_price, a.promo_category, a.address, a.city, a.state, a.bed, a.bath, a.toilet, a.apartment_type, a.tenantable, a.expected_rent, a.property_size, a.property_info, a.location_info, a.floor_plan, a.image_folder, a.featured_image, a.status, a.poster, a.mortgage, a.developer, a.pool_units, a.available_units, a.pool_buy, a.availability, a.active, a.asset_appreciation_1, a.asset_appreciation_2, a.asset_appreciation_3, a.asset_appreciation_4, a.asset_appreciation_5, a.construction_lvl, a.start_date, a.finish_date, b.id, b.type, b.slug, c.id, c.name as propState');		

		$this->db->from('buytolet_property as a');		

		$this->db->where('a.status', 'New');		

		$this->db->where('a.pool_buy', 'yes');	
		
		$this->db->where('a.active', 1);	

		$this->db->join('apt_type_tbl as b', 'b.id = a.apartment_type', 'LEFT');
		
		$this->db->join('states as c', 'c.id = a.state', 'LEFT');
		
		$this->db->order_by("a.id", "DESC");		

		$this->db->limit($this->_pageNumber, $this->_offset);

		$query = $this->db->get();

		return $query->result_array();			



	}

	

	public function similarProperties($city){

		$this->db->select('a.id, a.propertyID, a.property_name, a.price, a.promo_price, a.promo_category, a.address, a.city, a.state, a.bed, a.bath, a.toilet, a.apartment_type, a.tenantable, a.expected_rent, a.property_size, a.property_info, a.location_info, a.floor_plan, a.image_folder, a.featured_image, a.status, a.poster, a.mortgage, a.developer, a.pool_units, a.pool_buy, a.availability, a.active, a.asset_appreciation_1, a.asset_appreciation_2, a.asset_appreciation_3, a.asset_appreciation_4, a.asset_appreciation_5, a.construction_lvl, a.start_date, a.finish_date, b.id, b.type, b.slug, c.id, c.country_id, c.name as propState');

		$this->db->from('buytolet_property as a');	
		
		$this->db->where('a.active', 1);	

		$this->db->like('a.city', $city);

		$this->db->join('apt_type_tbl as b', 'b.id = a.apartment_type', 'LEFT');

		$this->db->join('states as c', 'c.id = a.state', 'LEFT');
		
		$this->db->order_by("a.id", "DESC");

		$this->db->limit(4);

		$query = $this->db->get();			

		if($query->num_rows() > 1){				

			return $query->result_array();					

		}else{		

			return 0;					

		}

	}

	public function getProp($id){		

		$this->db->select('*');		

		$this->db->from('buytolet_property');	

		$this->db->where('propertyID', $id);		

		$query = $this->db->get();
		
		return $query->row_array();

	}

	public function getProperty($id){		

		$this->db->select('a.propertyID, a.property_name, a.price, a.promo_price, a.promo_category, a.address, a.city, a.state, a.bed, a.bath, a.toilet, a.apartment_type, a.tenantable, a.expected_rent, a.property_size, a.property_info, a.location_info, a.floor_plan, a.image_folder, a.featured_image, a.status, a.views, a.poster, a.mortgage, a.payment_plan, a.minimum_payment_plan, a.payment_plan_period, a.pool_units, a.pool_buy, a.available_units, a.availability, a.active, a.asset_appreciation_1, a.asset_appreciation_2, a.asset_appreciation_3, a.asset_appreciation_4, a.asset_appreciation_5, a.construction_lvl, a.start_date, a.finish_date, a.percentage_per_share, b.id, b.type, b.slug, c.id, c.country_id, c.name as propState');		

		$this->db->from('buytolet_property as a');	

		$this->db->where('a.propertyID', $id);	
		
		$this->db->where('a.active', 1);	

		$this->db->join('apt_type_tbl as b', 'b.id = a.apartment_type', 'LEFT');		

		$this->db->join('states as c', 'c.id = a.state', 'LEFT');		

		$query = $this->db->get();

		if($query->num_rows() == 1){

			return $query->row_array();

		}else{

			return 0;

		}

	}

	

	public function setInspection($inspDate, $propID, $userID){

		

		$digits = 5;

		$randomNumber = '';

		$count = 0;



		while($count < $digits){

			$randomDigit = mt_rand(0, 9);

			$randomNumber .= $randomDigit;

			$count++;

		}		

		$id = $randomNumber;		

		$this->inspection_date = $inspDate;

		$this->propertyID = $propID;

		$this->userID = $userID;

		$this->inspectionID = $id;

		$this->status = 'New';

		$this->date_of_entry = date("Y-m-d H:i:s");		

		if($this->db->insert('buytolet_inspection', $this)){

			return 1;

		}else{

			return 0;

		}

	}
	
	public function insertRequest($buyer_type, $payment_plan, $property_id, $cost, $firstname, $lastname, $email, $phone, $address, $country, $state, $city, $userID, $payable, $mop, $payment_period, $unit_amount, $promo_code){
		
		$this->userID = $userID;
		
		$this->propertyID = $property_id;
		
		$this->plan = $payment_plan;
		
		$this->buyer_type = $buyer_type;
		
		$this->firstname = $firstname;
		
		$this->lastname = $lastname;
		
		$this->email = $email;
		
		$this->phone = $phone;
		
		$this->address = $address;
		
		$this->country = $country;
		
		$this->state = $state;
		
		$this->city = $city;
		
		$this->amount = $cost;
		
		$this->payable = $payable;
		
		$this->method = $mop;
		
		$this->unit_amount = $unit_amount;
		
		$this->status = 'new'; 
		
		$this->payment_period = $payment_period;
		
		$this->promo_code = $promo_code;
		
		$this->request_date = date('Y-m-d H:i:s');
		
		if($this->db->insert("buytolet_request", $this)){
			
			return 1;
			
		}else{
			
			return 0;
			
		}
		
		
	}
	
	public function get_about(){
		
		$this->db->select("*");
		$this->db->from('buytolet_about_us');
		$query = $this->db->get();
		return $query->row_array();
		
	}
	public function get_hiw(){
		
		$this->db->select("*");
		$this->db->from('buytolet_hiw');
		$query = $this->db->get();
		return $query->row_array();
		
	}
	public function filter($s_data){
		
		
		$this->db->select('a.propertyID, a.property_name, a.price, a.promo_price, a.promo_category, a.address, a.city, a.state, a.bed, a.bath, a.toilet, a.apartment_type, a.tenantable, a.expected_rent, a.property_size, a.property_info, a.location_info, a.floor_plan, a.image_folder, a.featured_image, a.status, a.poster, a.mortgage, a.developer, a.pool_units, a.availability, a.pool_buy, a.asset_appreciation_1, a.asset_appreciation_2, a.asset_appreciation_3, a.asset_appreciation_4, a.asset_appreciation_5, a.construction_lvl, a.start_date, a.finish_date, b.id, b.type, b.slug, c.id, c.name as propState');	
		
		$this->db->from('buytolet_property as a');
		
		$this->db->where('a.active', 1);
		
		if($s_data['apt_type']){

			$this->db->where('a.apartment_type', $s_data['apt_type']);

		}
		
		if($s_data['city']){

			$this->db->like('a.city', $s_data['city']);

		}
		
		if($s_data['beds']){

			$this->db->where('a.bed', $s_data['beds']);

		}
		
		if($s_data['bath']){

			$this->db->where('a.bath', $s_data['bath']);

		}
		
		if($s_data['tenancy']){

			$this->db->like('a.tenantable', $s_data['tenancy']);

		}
		
		/*if($s_data['price']){

			$this->db->where('price >=', ($s_data['price'] - 50000000));

		}*/
		
		if($s_data['price']){

			$this->db->where('a.price <=', $s_data['price']);

		}
		
		
				
		/*if($s_data['price']){

			$this->db->where('price <=', intval($s_data['price']));

		}*/
		$this->db->join('apt_type_tbl as b', 'b.id = a.apartment_type', 'LEFT');
		
		$this->db->join('states as c', 'c.id = a.state', 'LEFT');	

		$this->db->limit($this->_pageNumber, $this->_offset);

		$query = $this->db->get();
		
		return $query->result_array();
		
	}
	
	public function verify_account($code){
	    
	    $updates = array("confirmation_link" => NULL);
	    
	    $this->db->where("confirmation_link", $code);
	    
	    return $this->db->update("buytolet_login", $updates);
	    
	}
	public function updateViews($views, $id){
		$data = array('views' => $views);
		
		$this->db->where('propertyID', $id);
		
		if($this->db->update('buytolet_property', $data)){
			
			return 1;
			
		}else{
			
			return 0;
			
		}	
	}
	public function update_units($units, $id){
	    
		$data = array('available_units' => $units);
		
		$this->db->where('propertyID', $id);
		
		if($this->db->update('buytolet_property', $data)){
			
			return 1;
			
		}else{
			
			return 0;
			
		}	
	}
	
	public function check_returning($ip_add){
	    
	    $this->db->select('*');
	    
	    $this->db->from('btl_stats');
	    
	    $this->db->where("ip_address", $ip_add);
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0){			

			return 1;		

		}else{			

			return 0;
			
		}
	}
	
	public function addVisits($ip_add, $country, $city, $browser_name, $visit, $device, $referrer){
	    
	    $this->ip_address = $ip_add;
	    
	    $this->country = $country;
	    
	    $this->city = $city;
	    
	    $this->browser_type = $browser_name;
	    
	    $this->device_type = $device;
	    
	    $this->visits = $visit;
	    
	    $this->referrer_website = $referrer;
	    
	    $this->visit_time = date("Y-m-d H:i:s");
	    
	    $this->date_of_entry = date("Y-m-d H:i:s");
	    
	    if($this->db->insert('btl_stats', $this)){
	        return 1;
	    }else{
	        return 0;
	    }
	    
	}
	
	public function updateVisits($visits, $ip){
	    
	    $updates = array('visits' => $visits);
	    
	    $this->db->where("ip_address", $ip);
	    
	    $this->db->update('btl_stats', $updates);
	}
	
	public function get_faqs(){
	    
	    $this->db->select('*');
	    
	    $this->db->from('buytolet_faq');
	    
	    $query = $this->db->get();
	    
	    return $query->result_array();
	}
	
	public function insertResetDetails($userID, $reset_code){
		
		$this->userID = $userID;
		
		$this->reset_code = $reset_code;
		
		$this->request_date = date('Y-m-d');
		
		$this->expiry_date = date('Y-m-d', strtotime("+2 days"));
		
		if($this->db->insert('btl_pwd_reset', $this)){
			
			return 1;
			
		}else{
			
			return 0;
			
		}		
		
	}
	
	public function getUser($username){
	    
	    $this->db->select('*');
	    
	    $this->db->from('buytolet_users');
	    
	    $this->db->where('email', $username);
	    
	    $query = $this->db->get();
	    
	    return $query->row_array();
	    
	}
	
	public function reset_password($user_id, $reset_code){
		
		$today = date("Y-m-d H:i:s");
		
		$this->db->select('reset_code, userID, request_date, expiry_date');

		$this->db->from('btl_pwd_reset');
		
		$this->db->where('reset_code', $reset_code);
		
		$this->db->where('userID', $user_id);
		
		$this->db->where('expiry_date >=', $today);
		
		$this->db->order_by("id", "DESC");

		$this->db->limit(1);
		
		$query = $this->db->get();

		if($query->num_rows() > 0){

			return $query->row_array();			

		}else{

			return 0;			

		}
		
	}
	
	public function changePass($userID, $password){
	    
	    $update = array("password" => $password);
	    
	    $this->db->where("userID", $userID);
	    
	    if($this->db->update('buytolet_users', $update)){
	        $new_update = array("password", $password);
	        
	        $this->db->where("userID", $userID);
	        
	        return $this->db->update('buytolet_login', $update);
	    }else{
	        return 0;
	    }
	}
	
	public function confirm_code($code){
	    
	    $today = date('Y-m-d');
	    
	    $this->db->select('*');
	    
	    $this->db->from('promo_code');
	    
	    $this->db->where('promo_code', $code);
	    
	    $this->db->where('start_date <=', $today);
	    
	    $this->db->where('end_date >=', $today);
	    
	    $query = $this->db->get();
	    
	    if($query->num_rows() > 0){
	    
	        return $query->row_array();
	        
	    }else{
	        
	        return 0;
	        
	    }
	    
	}
}
?>