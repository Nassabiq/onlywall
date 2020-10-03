<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account_m extends CI_Model
{
    public function getRole()
    {
        $query = $this->db->get('user_role');
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function getUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('user_role', 'user_role.id_role = user.role_id');

        $query  = $this->db->get();

        if ($query->num_rows() != 0) {
            # code...

            return $query->result();
        } else {
            return false;
        }
    }

    public function getUserbyId($id_user)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $id_user);
        $this->db->join('user_role', 'user_role.id_role = user.role_id');

        $query  = $this->db->get();

        if ($query->num_rows() != 0) {
            # code...

            return $query->row_array();
        } else {
            return false;
        }
    }
}
