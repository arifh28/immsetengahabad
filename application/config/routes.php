<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller']            = "login";
$route['panel'] 						= 'C_panel';
$route['panel/auth'] 					= 'C_panel/auth';
$route['panel/logout'] 					= 'C_panel/logout';

$route['panel/home'] 					= 'C_admin';
$route['panel/landing'] 				= 'C_admin/landing';
$route['panel/landing/add'] 			= 'C_admin/landingadd';
$route['panel/landing/edit/(:any)']		= 'C_admin/landingedit/$1';
$route['panel/landing/del/(:any)']		= 'C_admin/landingdelete/$1';
$route['panel/landing/save'] 			= 'C_admin/landingsave';
$route['panel/setting'] 				= 'C_admin/config';
$route['panel/setting/edit/(:any)']		= 'C_admin/configedit/$1';
$route['panel/setting/save']			= 'C_admin/configsave';
$route['panel/user']					= 'C_admin/user';
$route['panel/user/save']				= 'C_admin/saveuser';
$route['panel/menu']					= 'C_admin/menu';
$route['panel/menu/add']				= 'C_admin/menuadd';
$route['panel/menu/save']				= 'C_admin/menusave';
$route['panel/menu/edit/(:any)']		= 'C_admin/menuedit/$1';
$route['panel/menu/del/(:any)']			= 'C_admin/menudelete/$1';
$route['panel/pages']					= 'C_admin/page';
$route['panel/pages/add']				= 'C_admin/pagesadd';
$route['panel/pages/save']				= 'C_admin/pagessave';
$route['panel/pages/edit/(:any)']		= 'C_admin/pagesedit/$1';
$route['panel/pages/del/(:any)']		= 'C_admin/pagesdelete/$1';

$route['panel/artikel']					= 'C_admin/artikel';
$route['panel/artikel/add']				= 'C_admin/artikeladd';
$route['panel/artikel/edit/(:any)']		= 'C_admin/artikeledit/$1';
$route['panel/artikel/save']			= 'C_admin/artikelsave';
$route['panel/artikel/del/(:any)']		= 'C_admin/artikeldelete/$1';

$route['404_override']          = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */