<?php
class Main extends CI_controller{
	function index(){
		$data = array('view'=>'vTemplates/portfolio-details');
		$this->load->view('vAdmin/tplAdppAdmin',$data);
	}
}


?>