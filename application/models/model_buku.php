<?php
class model_buku extends CI_Model
{
    function get_product()
    {
        $tampil =$this->db->get('buku');
        return $tampil;
    }

}