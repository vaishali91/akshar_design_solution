<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Branch_Manager extends CI_Controller {

	public function index() {
		$this -> load -> view('backend/branch_manager/batch');
	}

}
?>