<?php
//cartModel.php

class cartModel {
	public function additem($itemnumber) {
		return "Item added was $itemnumber";
	}

	public function deleteitem($itemnumber) {
		return "Item deleted was $itemnumber";
	}
}

