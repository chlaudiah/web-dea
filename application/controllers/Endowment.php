<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Endowment extends CI_Controller {

    var $page = array();

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // redirect('endowment/step1');
        $this->page['body'] = 'index';
        $this->load->view('templates/template', $this->page);
    }

    public function step1()
    {   
        // load view
        $this->page['body'] = 'personal-information';
        $this->load->view('templates/template', $this->page);
    }

    public function step2()
    {
        $postData = $this->input->post(null,TRUE);
        // $this->page['personal'] = $postData;
        // redirect('endowment/step2', $page);
        $this->session->set_userdata('personal', $postData);
        $this->page['body'] = 'endowment-information';
        $this->load->view('templates/template', $this->page);
    }

    public function step3()
    {
        $postData = $this->input->post(null,TRUE);
        // $this->page['endowment'] = $postData;
        // redirect('endowment/step3');
        $this->session->set_userdata('endowment', $postData);
        $this->page['body'] = 'payment-method';
        $this->load->view('templates/template', $this->page);
    }

    public function step4()
    {
        $postData = $this->input->post(null,TRUE);
        // $this->page['payment'] = $postData;
        // redirect('endowment/step4');
        $this->session->set_userdata('payment', $postData);
        $this->page['body'] = 'invoice';
        $this->load->view('templates/template', $this->page);
    }

    public function addData()
    {
        $this->session->set_flashdata('alert', 'success');
        $this->page['body'] = 'personal-information';
        $this->load->view('templates/template', $this->page);
    }
}
