<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 public function __construct() {		

	   	parent::__construct(); 

		Header('Access-Control-Allow-Origin: *'); 

	}

	

	public function dashboard(){    

		if ( ! file_exists(APPPATH.'views/user/dashboard.php')){

            // Whoops, we don't have a page for that!

            show_404();

        }

		if($this->session->has_userdata('userID')){

			$data['userID'] = $this->session->userdata('userID');	

			$data['fname'] = $this->session->userdata('fname');	

			$data['lname'] = $this->session->userdata('lname');	

			$data['email'] = $this->session->userdata('email');	

			$data['refCode'] = $this->session->userdata('referral_code');

			$data['user_type'] = $this->session->userdata('user_type');				

			$data['profile'] = $this->buytolet_model->get_user($data['userID']);			

			$data['profile_pic'] = $this->buytolet_model->get_user_pic($data['userID']);			

			$data['verification_status'] = $this->session->userdata('verified');			

			$data['balance'] = $this->buytolet_model->get_wallet_balance($data['userID']); 			

			$data['bss_request_count'] = $this->buytolet_model->count_user_requests($data['userID']);			

			$data['bss_inspection_count'] = $this->buytolet_model->count_bss_inspections($data['userID']);

			$data['portfolio_count'] = $this->buytolet_model->get_total_portfolios($data['userID'], 1);

			$data['co_count'] = $this->buytolet_model->get_total_portfolios($data['userID'], 1, 1);

			$data['buy_to_let'] = $this->buytolet_model->getUserProperties($data['userID'], 2);

			$data['buy_to_live'] = $this->buytolet_model->getUserProperties($data['userID'], 1);

			$data['owner'] = $this->buytolet_model->get_owned_property($data['userID']);			

			$data['gift_basket'] = $this->buytolet_model->getGiftBasketTotal($data['userID']);			

			$data['profile_title'] = "Dashboard";

			$data['title'] = "Dashboard";

			$this->load->view('user/templates/header', $data);

            $this->load->view('user/templates/verification-bar', $data);

			$this->load->view('user/dashboard', $data);			

			$this->load->view('user/templates/js-files', $data);

			$this->load->view('user/templates/footer');		

		}else{			

			redirect( base_url()."login" ,'refresh');

		}

	}

	

	public function property_portfolio(){

    

		if ( ! file_exists(APPPATH.'views/user/dashboard.php')){



            // Whoops, we don't have a page for that!

            show_404();



        }



		if($this->session->has_userdata('userID')){



			$data['userID'] = $this->session->userdata('userID');			



			$data['fname'] = $this->session->userdata('fname');			



			$data['lname'] = $this->session->userdata('lname');			



			$data['email'] = $this->session->userdata('email');		



			$data['refCode'] = $this->session->userdata('referral_code');		



			$data['user_type'] = $this->session->userdata('user_type');		

			

			$data['profile'] = $this->buytolet_model->get_user($data['userID']);	

			

			$data['profile_pic'] = $this->buytolet_model->get_user_pic($data['userID']);

			

			$data['verification_status'] = $this->session->userdata('verified');

			

			$data['balance'] = $this->buytolet_model->get_wallet_balance($data['userID']); 

			

			$data['bss_request_count'] = $this->buytolet_model->count_user_requests($data['userID']);

			

			$data['co_own_units'] = $this->buytolet_model->co_own_units($data['userID']);

			

			$data['bss_inspection_count'] = $this->buytolet_model->count_bss_inspections($data['userID']);

			

			$data['co_own_total'] = $this->buytolet_model->getUserSharesTotal($data['userID']);

			

			$data['buy_to_let'] = $this->buytolet_model->getUserProperties($data['userID'], 2);

			

			//$data['finance_value'] = $this->buytolet_model->getSumOfMarketValue(@$data['recent_financing']['propertyID']);

			

			$data['buy_to_live'] = $this->buytolet_model->getUserProperties($data['userID'], 1);

			

			$data['gifts'] = $this->buytolet_model->get_gifts($data['userID']);



			$data['profile_title'] = "Property Portfolio";



			$data['title'] = "Property Portfolio";



			$this->load->view('user/templates/header', $data);



            $this->load->view('user/templates/property-portfolio-submenu', $data);



            $this->load->view('user/templates/verification-bar', $data);



			$this->load->view('user/property-portfolio', $data);

			

			$this->load->view('user/templates/js-files', $data);



			$this->load->view('user/templates/footer');		



		}else{			



			redirect( base_url()."login" ,'refresh');			



		}



	}

	

	public function co_ownership_property($id){

    

		if ( ! file_exists(APPPATH.'views/user/co-ownership-property.php')){



            // Whoops, we don't have a page for that!

            show_404();



        }



		if($this->session->has_userdata('userID')){



			$data['userID'] = $this->session->userdata('userID');			



			$data['fname'] = $this->session->userdata('fname');			



			$data['lname'] = $this->session->userdata('lname');			



			$data['email'] = $this->session->userdata('email');		



			$data['refCode'] = $this->session->userdata('referral_code');		



			$data['user_type'] = $this->session->userdata('user_type');		

			

			$data['profile'] = $this->buytolet_model->get_user($data['userID']);	

			

			$data['profile_pic'] = $this->buytolet_model->get_user_pic($data['userID']);

			

			$data['verification_status'] = $this->session->userdata('verified');

			

			$data['balance'] = $this->buytolet_model->get_wallet_balance($data['userID']); 

			

			$data['bss_request_count'] = $this->buytolet_model->count_user_requests($data['userID']);

			

			$data['bss_inspection_count'] = $this->buytolet_model->count_bss_inspections($data['userID']);

			

			$data['gifts'] = $this->buytolet_model->get_gifts($data['userID']);

			

			$data['co_details'] = $this->buytolet_model->get_co_own_property($id);

			

			$data['all_co_own_properties'] = $this->buytolet_model->get_all_co_own_properties($data['userID']);



			$data['profile_title'] = "Property Portfolio";



			$data['title'] = "Property Portfolio";



			$this->load->view('user/templates/header', $data);



            $this->load->view('user/templates/property-portfolio-submenu', $data);



            $this->load->view('user/templates/verification-bar', $data);



			$this->load->view('user/co-ownership-property', $data);

			

			$this->load->view('user/templates/js-files', $data);



			$this->load->view('user/templates/footer');		



		}else{			



			redirect( base_url()."login" ,'refresh');			



		}



	}

	

	public function co_ownership(){

    

		if ( ! file_exists(APPPATH.'views/user/co-ownership.php')){



            // Whoops, we don't have a page for that!

            show_404();



        }



		if($this->session->has_userdata('userID')){



			$data['userID'] = $this->session->userdata('userID');			



			$data['fname'] = $this->session->userdata('fname');			



			$data['lname'] = $this->session->userdata('lname');			



			$data['email'] = $this->session->userdata('email');		



			$data['refCode'] = $this->session->userdata('referral_code');		



			$data['user_type'] = $this->session->userdata('user_type');		

			

			$data['profile'] = $this->buytolet_model->get_user($data['userID']);	

			

			$data['profile_pic'] = $this->buytolet_model->get_user_pic($data['userID']);

			

			$data['verification_status'] = $this->session->userdata('verified');

			

			$data['balance'] = $this->buytolet_model->get_wallet_balance($data['userID']); 

			

			$data['bss_request_count'] = $this->buytolet_model->count_user_requests($data['userID']);

			

			$data['bss_inspection_count'] = $this->buytolet_model->count_bss_inspections($data['userID']);

			

			$data['gifts'] = $this->buytolet_model->getAllUsersGifts($data['userID']);

			

			$data['all_co_own_properties'] = $this->buytolet_model->get_all_co_own_properties($data['userID']);

			



			$data['profile_title'] = "Property Portfolio";



			$data['title'] = "Property Portfolio";



			$this->load->view('user/templates/header', $data);



            $this->load->view('user/templates/property-portfolio-submenu', $data);



            $this->load->view('user/templates/verification-bar', $data);



			$this->load->view('user/co-ownership', $data);

			

			$this->load->view('user/templates/js-files', $data);

			$this->load->view('user/templates/footer');	

		}else{			

			redirect( base_url()."login" ,'refresh');

		}

	}

	

	public function bss_financing(){    

		if ( ! file_exists(APPPATH.'views/user/bss-financing.php')){

            // Whoops, we don't have a page for that!

            show_404();

        }

		if($this->session->has_userdata('userID')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');	

			$data['lname'] = $this->session->userdata('lname');	

			$data['email'] = $this->session->userdata('email');	

			$data['refCode'] = $this->session->userdata('referral_code');		

			$data['user_type'] = $this->session->userdata('user_type');					

			$data['profile'] = $this->buytolet_model->get_user($data['userID']);				

			$data['profile_pic'] = $this->buytolet_model->get_user_pic($data['userID']);			

			$data['verification_status'] = $this->session->userdata('verified');			

			$data['balance'] = $this->buytolet_model->get_wallet_balance($data['userID']); 			

			$data['bss_request_count'] = $this->buytolet_model->count_user_requests($data['userID']);			

			$data['bss_inspection_count'] = $this->buytolet_model->count_bss_inspections($data['userID']);			

			$data['gifts'] = $this->buytolet_model->get_gifts($data['userID']);			

			$data['bss_finance_property'] = $this->buytolet_model->get_finance_property();			

			$data['finance_properties'] = $this->buytolet_model->get_all_finance_properties($data['userID']);

			$data['profile_title'] = "Property Portfolio";

			$data['title'] = "Property Portfolio";

			$this->load->view('user/templates/header', $data);

            $this->load->view('user/templates/property-portfolio-submenu', $data);

            $this->load->view('user/templates/verification-bar', $data);

			$this->load->view('user/bss-financing', $data);

			$this->load->view('user/templates/js-files', $data);

			$this->load->view('user/templates/footer');	

		}else{			

			redirect( base_url()."login" ,'refresh');	

		}

	}

	

	public function profile(){    

		if ( ! file_exists(APPPATH.'views/user/profile.php')){

            // Whoops, we don't have a page for that!

            show_404();

        }

		if($this->session->has_userdata('userID')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');	

			$data['lname'] = $this->session->userdata('lname');	

			$data['email'] = $this->session->userdata('email');	

			$data['refCode'] = $this->session->userdata('referral_code');	

			$data['user_type'] = $this->session->userdata('user_type');				

			$data['profile'] = $this->buytolet_model->get_user($data['userID']);			

			$data['profile_pic'] = $this->buytolet_model->get_user_pic($data['userID']);			

			$data['verification_status'] = $this->session->userdata('verified');

			$data['profile_title'] = "Profile";

			$data['title'] = "Profile";

			$this->load->view('user/templates/header', $data);

            $this->load->view('user/templates/verification-bar', $data);

			$this->load->view('user/profile', $data);			

			$this->load->view('user/templates/js-files', $data);

			$this->load->view('user/templates/footer');		

		}else{	

			redirect( base_url()."login" ,'refresh');

		}

	}

	

	public function referral(){    

		if ( ! file_exists(APPPATH.'views/user/referral.php')){

            // Whoops, we don't have a page for that!

            show_404();

        }

		if($this->session->has_userdata('userID')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');	

			$data['lname'] = $this->session->userdata('lname');	

			$data['email'] = $this->session->userdata('email');	

			$data['refCode'] = $this->session->userdata('referral_code');

			$data['user_type'] = $this->session->userdata('user_type');				

			$data['profile'] = $this->buytolet_model->get_user($data['userID']);				

			$data['profile_pic'] = $this->buytolet_model->get_user_pic($data['userID']);			

			$data['verification_status'] = $this->session->userdata('verified');

			$data['profile_title'] = "Referral";

			$data['title'] = "Referral";

			$this->load->view('user/templates/header', $data);

            $this->load->view('user/templates/verification-bar', $data);

			$this->load->view('user/referral', $data);			

			$this->load->view('user/templates/js-files', $data);

			$this->load->view('user/templates/footer');	

		}else{		

			redirect( base_url()."login" ,'refresh');

		}

	}

	

	public function wallet(){    

		if ( ! file_exists(APPPATH.'views/user/wallet.php')){

            // Whoops, we don't have a page for that!

            show_404();

        }

		if($this->session->has_userdata('userID')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');	

			$data['lname'] = $this->session->userdata('lname');	

			$data['email'] = $this->session->userdata('email');		

			$data['refCode'] = $this->session->userdata('referral_code');	

			$data['user_type'] = $this->session->userdata('user_type');				

			$data['profile'] = $this->buytolet_model->get_user($data['userID']);				

			$data['profile_pic'] = $this->buytolet_model->get_user_pic($data['userID']);			

			$data['verification_status'] = $this->session->userdata('verified');			

			$data['wallet'] = $this->buytolet_model->get_wallet_details($data['userID']); 			

			$data['bss_request_count'] = $this->buytolet_model->count_user_requests($data['userID']);			

			$data['bss_inspection_count'] = $this->buytolet_model->count_bss_inspections($data['userID']);			

			$data['gifts'] = $this->buytolet_model->get_gifts($data['userID']);

			$data['profile_title'] = "Wallet";

			$data['title'] = "Wallet";

			$this->load->view('user/templates/header', $data);			

            $this->load->view('user/templates/verification-bar', $data);

			$this->load->view('user/wallet', $data);			

			$this->load->view('user/templates/js-files', $data);

			$this->load->view('user/templates/footer');		

		}else{

			redirect( base_url()."login" ,'refresh');			

		}

	}	

	public function send_gift(){

		if ( ! file_exists(APPPATH.'views/user/send-gift.php')){

            // Whoops, we don't have a page for that!

            show_404();

        }

		if($this->session->has_userdata('userID')){

			$data['userID'] = $this->session->userdata('userID');	

			$data['fname'] = $this->session->userdata('fname');			

			$data['lname'] = $this->session->userdata('lname');	

			$data['email'] = $this->session->userdata('email');	

			$data['refCode'] = $this->session->userdata('referral_code');

			$data['user_type'] = $this->session->userdata('user_type');				

			$data['profile'] = $this->buytolet_model->get_user($data['userID']);			

			$data['profile_pic'] = $this->buytolet_model->get_user_pic($data['userID']);			

			$data['verification_status'] = $this->session->userdata('verified');			

			$data['giftbags'] = $this->buytolet_model->getGiftbags($data['userID']);			

			$data['sent_gifts'] = $this->buytolet_model->getSentGifts($data['userID']);			

			$data['added_gifts'] = $this->buytolet_model->getAddedGifts($data['userID']);

			$data['profile_title'] = "Send Gift";

			$data['title'] = "Send Gift";

			$this->load->view('user/templates/header', $data);			

            $this->load->view('user/templates/verification-bar', $data);

			$this->load->view('user/send-gift', $data);		

			$this->load->view('user/templates/js-files', $data);

			$this->load->view('user/templates/footer');		

		}else{			
			redirect( base_url()."login" ,'refresh');	

		}

	}

	public function payments(){    

		if ( ! file_exists(APPPATH.'views/user/payments.php')){

            // Whoops, we don't have a page for that!

            show_404();

        }

		if($this->session->has_userdata('userID')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');	

			$data['lname'] = $this->session->userdata('lname');	

			$data['email'] = $this->session->userdata('email');	

			$data['refCode'] = $this->session->userdata('referral_code');		

			$data['user_type'] = $this->session->userdata('user_type');					

			$data['profile'] = $this->buytolet_model->get_user($data['userID']);				

			$data['profile_pic'] = $this->buytolet_model->get_user_pic($data['userID']);			

			$data['verification_status'] = $this->session->userdata('verified');			

			$data['wallet'] = $this->buytolet_model->get_wallet_details($data['userID']); 			

			$data['transactions'] = $this->buytolet_model->get_all_transactions($data['userID']);			

			$data['profile_title'] = "Payments";

			$data['title'] = "Payments";

			$this->load->view('user/templates/header', $data);

            $this->load->view('user/templates/property-portfolio-submenu', $data);

            $this->load->view('user/templates/verification-bar', $data);

			$this->load->view('user/payments', $data);			

			$this->load->view('user/templates/js-files', $data);

			$this->load->view('user/templates/footer');		

		}else{			

			redirect( base_url()."login" ,'refresh');			

		}

	}	

	public function gift_basket(){    

		if ( ! file_exists(APPPATH.'views/user/payments.php')){

            // Whoops, we don't have a page for that!

            show_404();

        }

		if($this->session->has_userdata('userID')){

			$data['userID'] = $this->session->userdata('userID');

			$data['fname'] = $this->session->userdata('fname');	

			$data['lname'] = $this->session->userdata('lname');	

			$data['email'] = $this->session->userdata('email');	

			$data['refCode'] = $this->session->userdata('referral_code');	

			$data['user_type'] = $this->session->userdata('user_type');				

			$data['profile'] = $this->buytolet_model->get_user($data['userID']);			

			$data['profile_pic'] = $this->buytolet_model->get_user_pic($data['userID']);			

			$data['verification_status'] = $this->session->userdata('verified');			

			$data['wallet'] = $this->buytolet_model->get_wallet_details($data['userID']);			

			$data['transactions'] = $this->buytolet_model->get_all_transactions($data['userID']);			

			$data['profile_title'] = "Payments";

			$data['title'] = "Payments";

			$this->load->view('user/templates/header', $data);

            $this->load->view('user/templates/property-portfolio-submenu', $data);

            $this->load->view('user/templates/verification-bar', $data);

			$this->load->view('user/gift-basket', $data);			

			$this->load->view('user/templates/js-files', $data);

			$this->load->view('user/templates/footer');	

		}else{			

			redirect( base_url()."login" ,'refresh');

		}

	}	

	public function send_to_gift_basket()
	{
		$gifted = $this->input->post('gift_amount');		

		$owned_share = $this->input->post('user_shares');		

		$request_id = $this->input->post('request_id');		

		$property_id = $this->input->post('property_id');

		if(!$this->buytolet_model->check_request_shares_condition($request_id)['share_condition']){	

			$remaining_shares = $owned_share - $gifted;		

			$user_id = $this->session->userdata('userID');		

			$result = $this->buytolet_model->gift_basket_deposit($gifted, $request_id, $user_id, $property_id);

			if($result){
				//Update request table
				$res = $this->buytolet_model->update_request($user_id, $remaining_shares);

				echo 1;		    

			}else{		    

				echo 0;		    

			}

		}else{

			echo 0;

		}

	}	

	public function send_user_gift(){	    

	    $result = "error";	    

	    $msg = "";	    

	    $data['userID'] = $this->session->userdata('userID');	    

	    $requestID = $this->input->post('requestID');	    

	    $noOfShares = $this->input->post('noOfShares');	    

	    $sharesAdded = $this->buytolet_model->getAddedGiftsByRequestID($requestID);	    

	    $sharesSpent = $this->buytolet_model->getSpentGiftsByRequestID($requestID);	    

	    $sharesAvailable = $sharesAdded['shares'] - $sharesSpent['shares_spent'];	    

	    if($sharesAvailable < $noOfShares){	        

	        $msg = "Insufficient shares available";	        

	    }else{	        

	        //Proceed with sending gift to user

	        $data = $this->input->post();

	        $user = $this->buytolet_model->check_email($data['email']);                        

            $user_id = '';            

            if($user){

                //Get user ID

                $user_id = $this->buytolet_model->get_user_by_email($data['email'])['userID'];

            }else{

                //Generate new ID

                $user_id = $this->generate_user_id(12);

				$details['userID'] =  $user_id;

				$details['fname'] = $data['firstName'];

				$details['lname'] = $data['lastName'];

				$details['email'] = $data['email'];

				$details['phone'] = $data['phone'];

				$details['refcode'] = $this->session->userdata('referral_code');

				$res = $this->create_user_account($details);

				if($res){

					//send a new user actionable message

				}
            }

	        //$result = $this->buytolet_model->sendGift($data);	        

	        if($this->buytolet_model->insert_beneficiary_details($data['userID'], $data['requestID'], $data['firstName'], $data['lastName'], $data['email'], $data['phone'], $data['noOfShares'], '0', $user_id)){	            

	            $request = $this->buytolet_model->getRequest($ref_id);	            

	            //Populate spent shares table

	            if($this->buytolet_model->insertSpentShares($data['userID'], $data['noOfShares'], $data['requestID'], $user_id, $request['propertyID'])){	                

	                $result = "success";	                

	                $msg = "Successfully updated";

	            }

	        }        

	        //Send certificate to user

	    }	    

	    echo json_encode(array("result" => $result, "msg" => $msg));	    

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

