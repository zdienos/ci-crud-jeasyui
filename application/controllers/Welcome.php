<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function index()
	{
		$this->load->view('welcome_message');
	}

	function getusers()
	{
		echo "tesss";
	}

	function saveuser()
	{
		echo "saveuser";
	}

	function updateuser()
	{
		echo "updateuser";
	}

	function deleteuser()
	{
		echo "deleteuser";
	}


}
