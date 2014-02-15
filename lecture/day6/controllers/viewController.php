<?php
//VIEW controller

require_once('models/viewModel.php');

$view = new viewModel(); 
$view->getView(strtolower($queryMethod));

