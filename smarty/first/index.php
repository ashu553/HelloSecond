<?php
	require '../libs/Smarty.class.php';

	class Contacts{

			var $name = "Ashish";
			var $city = "Bhopal";
			var $phone = "8370077349";

	}

	$contact = new Contacts;

	$smarty = new Smarty;

	$smarty->assign('title','Hello');
	$smarty->assign('contac',$contact);
	$smarty->display('test.tpl');



?>