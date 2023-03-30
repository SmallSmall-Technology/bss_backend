<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//$client = new \GuzzleHttp\Client();

class Giftbasket extends CI_Controller {
    
    protected $response = '';

	public function __construct() {
		
	   	parent::__construct();
	   	
		Header('Access-Control-Allow-Origin: *');

	}
	
	public function move_to_gift_bag(){
		
		if(!$this->session->has_userdata('loggedIn')){

			redirect( base_url()."login" ,'refresh');

		}
		
		$data['user_id'] = $this->session->userdata('userID');
		
		$data['shares_amount'] = $this->input->post('gift_amount');
		
		$owned_share = $this->input->post('user_shares');
		
		//From a particular transaction
		$data['request_id'] = $this->input->post("request_id");
		
		$data['property_id'] = $this->input->post("property_id");
		
		$remaining_shares = $owned_share - $data['shares_amount'];
		
		if($this->giftbasket_model->insert_in_gift_basket($data)){
		    
		    //Update request table
		    if($this->buytolet_model->update_request($data['request_id'], $remaining_shares)){
		        echo 1;
		    }else{
		        echo 0;
		    }
		    
		    
		}else{
		    
		    echo 0;
		    
		}
		
	}
	
	public function send_from_giftbag(){
	    
	    $userID = $this->session->userdata('userID');
		
		$beneficiary_shares = $this->input->post("shares_amount");
		
		$beneficiary_firstname = $this->input->post("firstname");
		
		$beneficiary_lastname = $this->input->post("lastname");
		
		$beneficiary_id_path = 0;
		
		$request_id = $this->input->post("request_id");
		
		$beneficiary_email = $this->input->post("email");
		
		$beneficiary_phone = $this->input->post("phone");
		
		//Check if user is already a member then use userid else generate new ID
        $user = $this->buytolet_model->check_email($beneficiary_email);
            
        $receiver_id = '';
        
        if($user){
            //Get user ID
            $receiver_id = $this->buytolet_model->get_user_by_email($beneficiary_email)['userID'];
        }else{
            //Generate new ID
            $receiver_id = $this->generate_user_id(12);
        }
	    
	    
	    if($this->buytolet_model->insert_beneficiary_details($userID, $request_id, $beneficiary_firstname, $beneficiary_lastname, $beneficiary_email, $beneficiary_phone, $beneficiary_shares, $beneficiary_id_path, $receiver_id)){
	        
	        //Insert in reduction table
	        $data['user_id'] = $userID;
	        $data['request_id'] = $request_id;
	        $data['property_id'] = $this->input->post("property_id");;
	        $data['shares_amount'] = $beneficiary_shares;
	        
	        if($this->giftbag_model->insert_in_spent_gift_basket($data)){
	            
	            echo 1;
	            
	        }else{
	            
	            echo 0;
	            
	        }
	        
	    }else{
	         echo 0;
	        
	    }
	    
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
	
}