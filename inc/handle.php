<?php
    include_once 'lib/session.php';
    Session::init();
?>
<?php
    include_once 'lib/database.php';
    include_once 'helpers/format.php';
	spl_autoload_register(function ($className) {
        include_once("classses/" .$className. ".php");
    });
	$db = new Database();
	$fm = new Format();
	$cat = new cart();
	$category = new category();
	$product = new product();
    $brand = new brand();
    $user = new user();
    $order = new order();
    $sendMail = new Mail();
    $discount = new discount();
?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>