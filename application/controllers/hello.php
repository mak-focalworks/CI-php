<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
    public function index(){
        $data['header'] = 'template/jumbotron';
        $this->load->view('template/header',$data);
        $this->load->view('hello_page');
        $this->load->view('template/footer');
    }
    public function slider()
    {
        $data['header'] = 'template/slider';
        $this->load->view('template/header',$data);
        $this->load->view('hello_page');
        $this->load->view('template/footer');
    }
}