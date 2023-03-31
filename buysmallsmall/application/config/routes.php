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

|	$route['default_controller'] = 'welcome';

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
$route['user/dashboard'] = 'user/dashboard'; 

$route['investor-basic'] = 'buytolet/investor_basic';

$route['guaranteed-rent'] = 'buytolet/guaranteed_rent';

$route['marketplace-fee'] = 'buytolet/marketplace_fee';

$route['final'] = 'buytolet/final_page';

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

$route['buyer-information'] = 'buytolet/buyer_information';

$route['filter/(:any)'] = 'buytolet/filter/$1';

$route['filter'] = 'buytolet/filter';

$route['properties/(:any)'] = 'buytolet/properties/$1';

$route['pool-buy/(:any)'] = 'buytolet/poolbuy/$1';

$route['pool-buy'] = 'buytolet/poolbuy';

$route['properties'] = 'buytolet/properties';

$route['buy/(:any)'] = 'buytolet/properties/$1';

$route['buy'] = 'buytolet/properties';

$route['property-test/(:any)'] = 'buytolet/property_test/$1';

$route['signup-test'] = 'buytolet/signup_test/';

$route['property/(:any)'] = 'buytolet/property/$1';

$route['login'] = 'buytolet/login';

$route['logout'] = 'buytolet/logout';

$route['signup-investor-profile'] = 'buytolet/signup_investor/';
 
$route['signup'] = 'buytolet/signup'; 

$route['pool-buy-faq'] = 'buytolet/pool_buy_faq'; 

$route['faq'] = 'buytolet/faq'; 

$route['how-it-works'] = 'buytolet/how_it_works';

$route['terms-and-conditions'] = 'buytolet/terms_and_conditions'; 

$route['about-us'] = 'buytolet/about_us'; 

$route['home-test'] = 'buytolet/home_test';

$route['default_controller'] = 'buytolet';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

