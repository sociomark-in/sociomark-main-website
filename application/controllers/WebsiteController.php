<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller
{
	public function index(){
		$this->load->view("website/pages/index");
	}
}
