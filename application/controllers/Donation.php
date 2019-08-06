<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation extends CI_Controller {

    var $page = array();

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // redirect('donation/index');
        $this->load->view('index');
    }

    public function payment()
    {
        $this->load->view('payment');
    }
}