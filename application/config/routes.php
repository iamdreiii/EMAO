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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Home_controller/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// index
$route['index'] = 'Home_controller/home';
// CRONJOB
$route['Cron'] = 'Cron_controller/cron';
//ADMIN DASHBOARD
$route['Admin'] = 'Admin_controller/dashboard';
// ADMIN USERLIST
$route['Users'] = 'Admin_controller/userslist';
// ADMIN Setting ABOUT PAGE
$route['Setting'] = 'Setting_controller/setting';
// ADMIN DISPERSAL
$route['Dispersal-Monitoring'] = 'Dispersal_controller/dispersalhome';
$route['Dispersal-Monitoring/(:any)'] = 'Dispersal_controller/dispersalhome/$1';
$route['Dispersal-Due'] = 'Dispersal_controller/duedispersal';
$route['Dispersal-Due/(:any)'] = 'Dispersal_controller/duedispersal/$1';
$route['Dispersal-Today'] = 'Dispersal_controller/duetoday';
$route['Dispersal-Today/(:any)'] = 'Dispersal_controller/duetoday/$1';
$route['Dispersal-All'] = 'Dispersal_controller/dispersalmodel3';
$route['Dispersal-Setting'] = 'Dispersal_controller/dispersalsetting';
// ADMIN DISPERSAL CONSULTATION
$route['Pending-Consultation'] = 'Dispersal_controller/pendingconsultation';
$route['Ongoing-Consultation'] = 'Dispersal_controller/ongoingconsultation';
$route['Accepted-Consultation'] = 'Dispersal_controller/acceptedconsultation';
// ADMIN ANNOUCEMENT
$route['Announcement'] = 'Admin_controller/announcement';
// ADMIN VACCINATION
$route['CalendarAdmin'] = 'Vaccination_controller/vaccination';
// ADMIN FORUM CATEGORIES
$route['Forum-Categories'] = 'Forum_controller/categories';
$route['Forum-Forums'] = 'Forum_controller/forums';
// ADMIN FAQ DASHBOARD
$route['FAQ-Dash'] = 'Faq_controller/faqsadmin';
// ADMIN FARMER
$route['Farmer-Profiling'] = 'Farmer_controller/farmer';
$route['Farmer-Print/(:any)'] = 'Farmer_controller/print/$1';
$route['Farmer-View/(:any)'] = 'Farmer_controller/viewfarmer/$1';
$route['Farmer-Edit/(:any)'] = 'Farmer_controller/editfarmer/$1';
$route['Farmer-Add'] = 'Farmer_controller/addfarmer';
// ADMIN PETS
$route['Pet-List'] = 'Pet_controller/pets';
// ADMIN ANIMAL HEALT LIST
$route['Animal-Tips-List'] = 'Animal_controller/animalhealthtips';
//ADMIN MAIL
$route['Compose'] = 'Mail_controller/compose';
$route['Inbox'] = 'Mail_controller/inbox';
$route['Inbox/(:any)'] = 'Mail_controller/inbox/$1';
$route['Read/(:any)'] = 'Mail_controller/read/$1';
$route['Reply/(:any)'] = 'Mail_controller/reply/$1';
// ADMIN RTC
$route['Chats'] = 'Chat_controller/chats';
$route['Client'] = 'Chat_controller/client';
$route['Chat-History'] = 'Chat_controller/showchats';
$route['Chats-History'] = 'Chat_controller/showchat';
//HOMEPAGE
$route['Home/(:any)'] = 'Home_controller/home/$1';
$route['Home'] = 'Home_controller/home';
$route['Home-Search'] = 'Search_controller/homesearch';
$route['About'] = 'Home_controller/about';
$route['Blog-Single/(:any)'] = 'Home_controller/blogsingle/$1';
$route['Contact-us'] = 'Email_controller/contactus';
$route['FAQ'] = 'Home_controller/faq';
$route['Privacy-Policy'] = 'Home_controller/privacypolicy';
$route['Terms'] = 'Home_controller/terms';
$route['Calendar'] = 'Home_controller/calendar';
$route['Dispersal-Consultation'] = 'Home_controller/dispersalconsultation';
//HOME FORUM
$route['Discussion'] = 'Forum_controller/discussion';
$route['Discussion-Search'] = 'Search_controller/discussionsearch';
$route['Discussion/(:any)'] = 'Forum_controller/discussion/$1';
$route['Ask-Question'] = 'Forum_controller/askquestion';
$route['Question-Details/(:any)'] = 'Forum_controller/questiondetails/$1';
$route['Filter-Category/(:any)'] = 'Forum_controller/filterbycategory/$1';
$route['Filter-Forum/(:any)'] = 'Forum_controller/filterbyforum/$1';
$route['Filter'] = 'Forum_controller/filterdiscussion';
//HOME ANIMAL HEALTH TIPS
$route['Animal-Health-Tips/(:any)'] = 'Home_controller/animalhealth/$1';
$route['Animal-Health-Tips'] = 'Home_controller/animalhealth';
$route['AnimalHealthTip-Single/(:any)'] = 'Home_controller/ahtsingle/$1';
$route['AnimalHealthTip-Search'] = 'Search_controller/animalhealthsearch';
//USER
$route['Login'] = 'User_controller/login';
$route['Logout'] = 'User_controller/logout';
$route['Signup'] = 'User_controller/signup';
$route['Forgot-Password'] = 'User_controller/forgotpassword';
$route['Forgot-Password/(:any)'] = 'User_controller/forgotpassword/$1';
$route['Reset-Password/(:any)'] = 'User_controller/changepassword/$1';
$route['Change-Password'] = 'User_controller/changepasswordnow';
$route['User-Profile'] = 'User_controller/userprofile';
$route['User-Setting'] = 'User_controller/usersetting';
$route['emailactivation/(:any)'] = 'User_controller/activateemail/$1';
// USER PET
$route['Fetch-Pet-Vaccine-History/(:any)'] = 'Pet_controller/userpetid/$1';
// MAPS
$route['Map'] = 'Home_Controller/map';
//USER WORD SLIP
$route['file'] = 'Word_Controller/generatefile';
$route['pdf'] = 'Word_Controller/generatepdf';
$route['unlinkfile'] = 'Word_Controller/unlink';
$route['mailfile'] = 'Word_Controller/sendmailfile';
$route['sms'] = 'Cron_Controller/cron';
// BACKUP DB
$route['Backup-Database'] = 'Word_Controller/backup';
$route['chart'] = 'Admin_Controller/chart';
// ADMIN SIGNATORY
$route['signatory'] = 'Signatory_Controller/signatory';
// ADMIN PETS CATEGORY
$route['petcategory'] = 'PetCategory_Controller/petcategory';
$route['petsubcategory'] = 'PetCategory_Controller/petsubcategory';
