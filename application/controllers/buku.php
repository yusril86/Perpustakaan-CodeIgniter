<?php
class buku extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('model_data');
        // $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('navbar');
        $data ['sewa'] = $this->model_data->get_product();
        $this->load->view('buku_view',$data);
    }

    function add_new()
    {
        $this->load->view('navbar');
        $this->load->view('Tambah_buku');
    }

    function save()
    {
        $tanggal_sewa=date('Y-m-d');
        $nama_penyewa = $this->input->post('nama_penyewa');
        $judul_buku = $this->input->post('judul_buku');
        $durasi = $this->input->post('durasi');
        $no_hp = $this->input->post('no_hp');
        $this->model_data->save($nama_penyewa,$judul_buku,$durasi,$tanggal_sewa,$no_hp);
        redirect('buku');
    }

    function delete()
    {
        $id = $this->uri->segment(3);
        $this->model_data->delete($id);
        // $this->session->set_flashdata('flash','hapus');
        redirect('buku');
    }


    function searching()
    {   
        $this->load->view('navbar');
       $keyword=$this->input->post('keyword');
        $data['sewa']= $this->model_data->searching($keyword);
        $this->load->view('buku_view',$data);



        // if ($this->input->post('submit')){
        //     $data['keyword']=$this->input->post('keyword');
        // }else{
        //     $data['keyword']=null;
        // }
    }
}
?>