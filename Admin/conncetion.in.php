<?php
session_start();
$con = new mysqli("localhost","root","","techsky");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/Admin_pro/');
define('SITE_PATH','http://localhost/Admin_pro/');


define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'/Image_admin/Admin-products/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'Image_admin/Admin-products/');

?>