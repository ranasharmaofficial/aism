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
$route['default_controller'] = 'Home';
$route['admin'] = 'juggler/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route["blog/(.*)"] = 'blog/$1';
$route["post/(.*)"] = 'blog/post/$1';
$route["categories/(.*)"] = 'blog/category/$1';

$route["service/(.*)"] = 'services/details/$1';
$route["course/(.*)"] = 'online_courses/details/$1';
$route["category/(.*)"] = 'online_courses/category/$1';
$route["event/(.*)"] = 'events/details/$1';
$route["product/(.*)"] = 'book_online/details/$1';

//Rana routes
$route["call-request"] = 'juggler/request/callRequest';
$route["ohsas-45001-lead-auditor"] = 'About_us/ohsasLeadAuditor';
$route["qms-iso-9001-lead-auditor"] = 'About_us/qmsIsoLeadAuditor';
$route["iso-45001-2018-irca-lead-auditor"] = 'About_us/isoIrcaLeadAuditor';
$route["iosh-managing-system"] = 'About_us/ioshManagingSystem';
$route["iosh-working-safety"] = 'About_us/ioshWorkingSafety';
$route["certificates-courses"] = 'Diploma_course/certificateCourses';
$route["diploma-industrial-safety"] = 'Diploma_course/diplomaIndustrySafety';
$route["diploma-food-safety"] = 'Diploma_course/diplomaFoodSafety';
