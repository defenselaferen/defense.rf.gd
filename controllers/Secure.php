<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Secure extends CI_Controller
{
	public function index()
	{
		if(isset($_SESSION['UserCheck']))
		{
			redirect('Home');
		}

		$this->load->view('Secure/Secure');

	}
}