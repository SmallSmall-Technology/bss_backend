<?php

class Giftbasket_model extends CI_Model {

	public function __construct()
	{
			parent::__construct();
	}

    public function insert_in_gift_basket($data){
	    
	    $this->user_id = $data['user_id'];
	    
	    $this->shares = $data['shares_amount'];
	    
	    $this->request_id = $data['request_id'];
	    
	    $this->property_id = $data['property_id'];
	    
	    $this->date_created = date('Y-m-d');
	    
	    return $this->db->insert('gift_basket', $this);
	    
	}
	
	public function insert_in_spent_gift_basket($data){
	    
	    $this->user_id = $data['user_id'];
	    
	    $this->shares_spent = $data['shares_amount'];
	    
	    $this->request_id = $data['request_id'];
	    
	    $this->property_id = $data['property_id'];
	    
	    $this->date_created = date('Y-m-d');
	    
	    return $this->db->insert('gift_basket', $this);
	    
	}
	
}
	