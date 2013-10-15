<?php
class viewModel{

	public function __constract(){

	}

	public function getView($pageName = '', $data = array()){

		include $pageName;
	}

}
?>