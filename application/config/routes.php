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
$route['default_controller'] = 'welcome';
$route['welcome/send_email'] = 'welcome/send_email';
$route['aboutus'] = 'aboutus';
$route['register'] = 'register';
$route['contactus'] = 'contactus';
$route['contactus/sendMessage'] = 'contactus/sendMessage';
$route['register/registerUser/:type'] = 'register/registerUser/USER_TYPE';
$route['navcontroller/changeToSpanish'] = 'navcontroller/changeToSpanish';
$route['navcontroller/changeToEnglish'] = 'navcontroller/changeToEnglish';
$route['login'] = 'login';
$route['login/loginRequest'] = 'login/loginRequest';
$route['buyfromus'] = 'buyfromus';
$route['buyfromustwo'] = 'buyfromustwo';
$route['individualhome'] = 'individualhome';
$route['individualhome/registerEvent/:id'] = 'individualhome/registerEvent/EVENT_ID';
$route['businesshome'] = 'businesshome';
$route['businesshome/registerEvent/:id'] = 'businesshome/registerEvent/EVENT_ID';
$route['agenthome'] = 'agenthome';
$route['volunteerlist'] = 'volunteerlist';
$route['foundationlist'] = 'foundationlist';
$route['foundationlist/updateFoundation/:id'] = 'foundationlist/updateFoundation/FOUNDATION_ID';
$route['events'] = 'events';
$route['buyfromustwo/getEvent/:id'] = 'buyfromustwo/getEvent/EVENT_ID';
$route['buyfromustwo/cart/:id'] = 'buyfromustwo/cart/EVENT_ID';
$route['addevent'] = 'addevent';
$route['addevent/edit/:id'] = 'addevent/edit/EVENT_ID';
$route['addevent/update/:id'] = 'addevent/update/EVENT_ID';
$route['addevent/add'] = 'addevent/add';
$route['agentprofile'] = 'agentprofile';
$route['individualprofile'] = 'individualprofile';
$route['individualprofile/update'] = 'individualprofile/update';
$route['businessprofile'] = 'businessprofile';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
