<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'FunctionalController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = "Auth";

$route['index'] = "FunctionalController/index";
$route['aboutus'] = "FunctionalController/aboutus";
$route['myservices'] = "FunctionalController/myservices";
$route['contactus'] = "FunctionalController/contactus";
$route['blogs'] = "FunctionalController/blogs";
$route['login'] = "FunctionalController/login";
$route['register'] = "FunctionalController/register";
$route['home'] = "FunctionalController/home";
$route['our_partner'] = "FunctionalController/our_partner";
$route['portfolio'] = "FunctionalController/portfolio";
$route['itservice'] = "FunctionalController/itservice";
$route['blogs-detail/(:any)'] = "FunctionalController/blogs_detail/$1";
$route['insert_data'] = "FunctionalController/insert";
$route['fetch_blog_data'] = "FunctionalController/fetch_blog_data";
$route['fetch_comments_count'] = "FunctionalController/fetch_comments_count";
$route['fetch_blog_record'] = "FunctionalController/fetch_blog_record";
$route['fetch_contact_data'] = "FunctionalController/fetch_contact_data";
$route['insert_comment/(:any)'] = "FunctionalController/insert_comment/$1";
$route['fetch_comments_data/(:any)'] = "FunctionalController/fetch_comments_data/$1";
$route['commentsCount/(:any)'] = "FunctionalController/commentsCount/$1";
$route['blogCommentsCount'] = "FunctionalController/blogCommentsCount";
$route['blog_details/(:any)'] = "FunctionalController/fetch_blog_details/$1";
$route['fetch_google_map_data'] = "FunctionalController/fetch_google_map_data";
$route['insert_blog_likes_count'] = "FunctionalController/insert_blog_likes_count";

$route['admin/dashboard'] = "admin/Admin_controller/dashboard";
$route['admin/menus'] = "admin/Admin_controller/menus";
$route['admin/menus-add'] = "admin/Admin_controller/menus_add";
$route['admin/Menus-edit/(:any)'] = "admin/Admin_controller/menus_edit/$1";
$route['admin/menus-save'] = "admin/Admin_controller/menus_save";
$route['admin/Menus-update/(:any)'] = "admin/Admin_controller/menus_update/$1";

$route['register'] = "admin/Admin_controller/register";
$route['reset-password/(:any)'] = "admin/Admin_controller/resetPassword/$1";
$route['getForgotPassword'] = "admin/Admin_controller/getForgotPassword";
$route['get-change-password/(:any)'] = "admin/Admin_controller/getChangePassword/$1";


//-----groups Start-----//
$route['admin/groups'] = 'admin/groups_controller/groups';
$route['admin/add_groups'] = 'admin/groups_controller/add_groups';
$route['admin/save_groups'] = 'admin/groups_controller/save_groups';
$route['admin/update_groups'] = 'admin/groups_controller/update_groups';
$route['admin/groups-menu-alloc/(:any)'] = "admin/groups_controller/group_menu_alloc/$1";
$route['admin/group-menu-alloc-save/(:any)'] = "admin/groups_controller/group_menu_alloc_save/$1";
//-----groups End-----//

//-----admin_registration Start-----//
$route['admin/admin_registration'] = 'admin/Admin_registration_controller/admin_registration';
$route['admin/add_admin_registration'] = 'admin/Admin_registration_controller/add_admin_registration';
$route['admin/save_admin_registration'] = 'admin/Admin_registration_controller/save_admin_registration';
$route['admin/update_admin_registration'] = 'admin/Admin_registration_controller/update_admin_registration';
//-----admin_registration End-----//


//-----blogs Start-----//
$route['admin/blogs'] = 'admin/Blogs_controller/blogs';
$route['admin/add_blogs'] = 'admin/Blogs_controller/add_blogs';
$route['admin/save_blogs'] = 'admin/Blogs_controller/save_blogs';
$route['admin/update_blogs'] = 'admin/Blogs_controller/update_blogs';
//-----blogs End-----//

//-----comments Start-----//
$route['admin/comments'] = 'admin/Comments_controller/comments';
$route['admin/add_comments'] = 'admin/Comments_controller/add_comments';
$route['admin/save_comments'] = 'admin/Comments_controller/save_comments';
$route['admin/update_comments'] = 'admin/Comments_controller/update_comments';
//-----comments End-----//

//-----contact_us Start-----//
$route['admin/contact_us'] = 'admin/Contact_us_controller/contact_us';
$route['admin/add_contact_us'] = 'admin/Contact_us_controller/add_contact_us';
$route['admin/save_contact_us'] = 'admin/Contact_us_controller/save_contact_us';
$route['admin/update_contact_us'] = 'admin/Contact_us_controller/update_contact_us';
//-----contact_us End-----//

//-----contact_message Start-----//
$route['admin/contact_message'] = 'admin/Contact_message_controller/contact_message';
$route['admin/add_contact_message'] = 'admin/Contact_message_controller/add_contact_message';
$route['admin/save_contact_message'] = 'admin/Contact_message_controller/save_contact_message';
$route['admin/update_contact_message'] = 'admin/Contact_message_controller/update_contact_message';
//-----contact_message End-----//
