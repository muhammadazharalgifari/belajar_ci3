<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $data['judul'] = "CodeIgniter";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }

    public function about(){
        $data['judul'] = "Tentang Saya";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }

    public function dashboard() {
        $this->load->view('strap');
    }

    
}