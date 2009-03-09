<?php
class Main extends Controller {

	function index()
	{    
	 $this->load->helper('form');	
	 $this->load->view('main_v');
	}
}
?>
