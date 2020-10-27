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

    public function getArtikel2($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('artikel_post');
        $this->db->join('artikel_kategori', 'artikel_kategori.id_kategori = artikel_post.id_kategori');

        $query  = $this->db->get('', $limit, $start);

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

    public function getSimilarCategory($id_artikel)
    {
        $this->db->select('*');
        $this->db->from('artikel_post');
        $this->db->where('id_artikel', $id_artikel);

        $query  = $this->db->get();

        foreach ($query->result() as $row) {
            $kategori = $row->id_kategori;
        }

        $match =  explode(',', $kategori);
        $result = [];
        for ($i = 0; $i < count($match); $i++) {
            $this->db->like('id_kategori', $match[$i]);
            $this->db->from('artikel_post');
            $sqlQuery = $this->db->get();
            if ($sqlQuery->num_rows() > 0)
                $result[] = $sqlQuery->result();
        }
        return $result;
    }
}
