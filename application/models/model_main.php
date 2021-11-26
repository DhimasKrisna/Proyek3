<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_main extends CI_Model
{

    function login($nik, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $nik);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
    }

    function tambah_user($username, $password)
    {
        $data_user = [
            'username' => $username,
            'password' => $password,
            'role' => "user",
            'aktif' => "tidak"
        ];

        $this->db->insert('user', $data_user);

        // $this->db->where('nik_user', $nik);
        // $this->db->set('password', $password);
        // $this->db->update('user');
    }

    function cek_user($username)
    {
        return $this->db->query("SELECT * FROM user WHERE username='$username'")->result_array();
    }
}
