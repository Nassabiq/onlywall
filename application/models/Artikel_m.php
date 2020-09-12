<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_m extends CI_Model
{
    public function getKategori()
    {
        $query = $this->db->get('artikel_kategori');
        if ($query->num_rows() != 0) {
            # code...

            return $query->result();
        } else {
            return false;
        }
    }

    public function getArtikel()
    {
        $this->db->select('*');
        $this->db->from('artikel_post');
        $this->db->join('artikel_kategori', 'artikel_kategori.id_kategori = artikel_post.id_kategori');

        $query  = $this->db->get();

        if ($query->num_rows() != 0) {
            # code...

            return $query->result();
        } else {
            return false;
        }
    }

    public function getArtikelbyId($id_artikel)
    {
        $this->db->select('*');
        $this->db->from('artikel_post');
        $this->db->where('id_artikel', $id_artikel);
        $this->db->join('artikel_kategori', 'artikel_kategori.id_kategori = artikel_post.id_kategori');

        $query  = $this->db->get();

        if ($query->num_rows() != 0) {
            # code...

            return $query->row_array();
        } else {
            return false;
        }
    }
}
