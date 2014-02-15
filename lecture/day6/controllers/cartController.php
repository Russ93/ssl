<?php
//cartController.php

require_once('models/cartModel.php');
require_once('models/viewModel.php');

$view = new viewModel(); 
$cart = new cartModel(); 
//$cart->getView(strtolower($queryMethod));

if ($queryMethod=='additem') {
	$resultmessage = $cart->additem($queryData);
	$view->getView('itemadded', $resultmessage);
}

if ($queryMethod=='deleteitem') {
	$resultmessage = $cart->deleteitem($queryData);
	$view->getView('itemdeleted', $resultmessage);
}
