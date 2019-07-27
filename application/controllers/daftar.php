<?php
class daftar extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('model_buku');
        // $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('navbar');
        $data ['buku'] = $this->model_buku->get_product();
        $this->load->view('daftar_buku',$data);
    }
}