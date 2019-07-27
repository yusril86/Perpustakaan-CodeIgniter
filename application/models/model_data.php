<?php
class model_data extends CI_Model
{
    function get_product()
    {
     
        $tampil =$this->db->get('sewa');
        return $tampil;
    }

    function save($nama_penyewa,$judul_buku,$durasi,$tanggal_sewa,$no_hp){
        $data = array (
            'penyewa' => $nama_penyewa,
            'judul' => $judul_buku,
            'no_hp' => $no_hp,
            'Durasi'=> $durasi,
            'tanggal_sewa' => $tanggal_sewa
        );
        $this->db->insert('sewa',$data);
     }

     function delete($id)
     {
        $this->db->where('id',$id);
        $this->db->delete('sewa');
     }

     function searching($keyword)
     {
        $this->db->like('penyewa',$keyword);
        $this->db->or_like('no_hp',$keyword);
        return $this->db->get('sewa');
     }
}