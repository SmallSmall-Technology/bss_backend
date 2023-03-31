<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	https://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

// |	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/
$route['test/shares-certificate'] = 'buytolet/shares_certificate';

$route['user/send-gift'] = 'user/send_gift';

$route['user/referrals'] = 'user/referral';

$route['user/profile'] = 'user/profile';

$route['user/dashboard'] = 'user/dashboard';

$route['user/gift-basket'] = 'user/gift_basket';

$route['user/financing'] = 'user/bss_financing';

$route['user/outright/(:any)'] = 'user/bss_outright/$1';

$route['user/send-a-gift/(:any)'] = 'user/send_gift/$1';

$route['user/co-ownership-property/(:any)'] = 'user/co_ownership_property/$1';

$route['user/co-ownership'] = 'user/co_ownership';

$route['user/property-portfolio'] = 'user/property_portfolio';

$route['user/wallet'] = 'user/wallet';

$route['user/payments'] = 'user/payments';

$route['user/transactions'] = 'user/transactions';

$route['test-letter'] = 'buytolet/outright_offer_letter';

$route['investor-basic'] = 'buytolet/investor_basic';

$route['guaranteed-rent'] = 'buytolet/guaranteed_rent';

$route['marketplace-fee'] = 'buytolet/marketplace_fee';

$route['final'] = 'buytolet/final_page';

$route['successful-payment'] = 'buytolet/payment_successful';

$route['reset/(:any)/(:any)'] = 'buytolet/user_reset/$1/$2'; 

$route['verify'] = 'buytolet/verify';

$route['result-page'] = 'buytolet/result_page';

$route['buytolet/get-all-images/(:any)/(:any)'] = 'buytolet/get_all_images/$1/$2'; 

$route['buytolet/remove-image/(:any)/(:any)'] = 'buytolet/remove_image/$1/$2'; 

$route['activate/(:any)'] = 'buytolet/activate/$1';

$route['delete-images/(:any)'] = 'buytolet/delete_images/$1';

$route['copy-images/(:any)/(:any)'] = 'buytolet/copy_images/$1/$2';

$route['upload-fp-image/(:any)/(:any)/(:any)/(:any)'] = 'buytolet/upload_fp_image/$1/$2/$3/$4';

$route['upload-images/(:any)/(:any)/(:any)'] = 'buytolet/upload_images/$1/$2/$3';
$route['get-images/(:any)'] = 'buytolet/get_images/$1';

$route['create-folder/(:any)'] = 'buytolet/create_folder/$1';

$route['finance-confirmation'] = 'buytolet/finance_confirmation';

$route['co-own-confirmation'] = 'buytolet/co_own_confirmation';

$route['co-own-form'] = 'buytolet/co_own_form';

$route['finance-form'] = 'buytolet/finance_form';

$route['personal-info'] = 'buytolet/personal_info';

$route['employment-info'] = 'buytolet/employment_info';

$route['upload-info'] = 'buytolet/upload_info';

$route['buyer-form'] = 'buytolet/buyer_form';

$route['buyer-information'] = 'buytolet/buyer_information';

$route['filter/(:any)'] = 'buytolet/filter/$1';

$route['filter'] = 'buytolet/filter';

$route['properties/(:any)/(:any)'] = 'buytolet/properties/$1/$2';

$route['properties/(:any)'] = 'buytolet/properties/$1';

$route['search-properties/(:any)'] = 'buytolet/search_properties/$1';

$route['search-properties'] = 'buytolet/search_properties';

$route['properties-test/(:any)'] = 'buytolet/properties_test/$1';

$route['pool-buy/(:any)'] = 'buytolet/poolbuy/$1';

$route['pool-buy'] = 'buytolet/poolbuy';

$route['properties'] = 'buytolet/properties';

$route['buy/(:any)'] = 'buytolet/properties/$1';

$route['buy'] = 'buytolet/properties';

$route['property-test/(:any)'] = 'buytolet/property_test/$1';

$route['signup-test'] = 'buytolet/signup_test/';

$route['property/(:any)'] = 'buytolet/property/$1';

$route['sole-own/(:any)'] = 'buytolet/sole_own/$1';

$route['co-own/(:any)'] = 'buytolet/co_own/$1';

$route['co-own-test/(:any)'] = 'buytolet/co_own_test/$1';

$route['final'] = 'buytolet/final_page';

$route['login'] = 'buytolet/login';

$route['logout'] = 'buytolet/logout';

$route['signup-investor-profile'] = 'buytolet/signup_investor/';
 
$route['signup'] = 'buytolet/signup'; 

$route['pool-buy-faq'] = 'buytolet/pool_buy_faq'; 

$route['faq'] = 'buytolet/faq';

$route['general-faq'] = 'buytolet/general_faq';

$route['get-started'] = 'buytolet/get_started'; 

$route['investment-types'] = 'buytolet/investment_types'; 

$route['property-title'] = 'buytolet/property_title'; 

$route['rent-guarantee'] = 'buytolet/rent_guarantee'; 

$route['terminologies'] = 'buytolet/terminologies';

$route['financing'] = 'buytolet/financing';

$route['partnership'] = 'buytolet/partnership';

$route['property-inspection'] = 'buytolet/property_inspection'; 

$route['search/(:any)'] = 'buytolet/search/$1';

$route['search'] = 'buytolet/search';

$route['how-it-works'] = 'buytolet/how_it_works';

$route['terms-and-conditions'] = 'buytolet/terms_and_conditions'; 

$route['co-own-tandc'] = 'buytolet/co_own_tandc'; 

$route['about-us'] = 'buytolet/about_us'; 

$route['home-test'] = 'buytolet/home_test';

$route['default_controller'] = 'buytolet';
// $route['default_controller'] = 'welcome';


$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

