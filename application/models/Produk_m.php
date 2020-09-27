<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_m extends CI_Model
{
    public function getKategori()
    {
        $query = $this->db->get('produk_kategori');
        if ($query->num_rows() != 0) {
            # code...

            return $query->result();
        } else {
            return false;
        }
    }
    public function getProduk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('produk_kategori', 'produk_kategori.id_kategori = produk.id_kategori');

        $query  = $this->db->get();

        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getProdukbyId($id_produk)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_produk', $id_produk);
        $this->db->join('produk_kategori', 'produk_kategori.id_kategori = produk.id_kategori');

        $query  = $this->db->get();

        if ($query->num_rows() != 0) {
            # code...

            return $query->row_array();
        } else {
            return false;
        }
    }
}
