<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
    }

    public function index()
	{
		$this->load->view('login');
    }
    
    public function Reservasi()
    {
        $this->load->view('reserves');
    }

    public function Report()
    {
        $this->load->view('report');
    }

    public function mainPage()
    {
        $this->load->view('mainPage');
    }
}

?>