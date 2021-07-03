<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Home extends CI_Controller
{

	public function index()
	{
		$this->load->view('Home/V_Home');
	}

	public function Dashboard()
	{
		$this->load->view('Template/V_Header');
		$this->load->view('Dashboard/V_Input');
		$this->load->view('Template/V_Footer');
	}
}
