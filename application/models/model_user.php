<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    // Perkiraan
    function perkiraan($bulan)
    {
        return $this->db->query("SELECT pemilik FROM `sawah` WHERE month(tgl_tanam)='$bulan' and year(tgl_tanam) = '2021'")->result_array();
    }

    // Perkiraan
    function jumlah_ru($bulan)
    {
        return $this->db->query("SELECT SUM(luas_ru) as banyak FROM sawah WHERE month(tgl_tanam)='$bulan' and year(tgl_tanam) = '2021'")->result_array();
    }

    // Politik
    function tambah_parpol($data)
    {
        $this->db->insert('umum_politik', $data);
    }

    function hapus_parpol($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('umum_politik');
    }

    function edit_parpol($data)
    {
        $this->db->set('nama_parpol', $data['nama_parpol']);
        $this->db->where('id', $data['id']);
        $this->db->update('umum_politik');
    }

    // Ormas

    function tambah_ormas($data)
    {
        $this->db->insert('umum_ormas', $data);
    }

    function hapus_ormas($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('umum_ormas');
    }

    function edit_ormas($data)
    {
        $this->db->set('nama', $data['nama']);
        $this->db->set('alamat', $data['alamat']);
        $this->db->set('jml_anggota', $data['jml_anggota']);
        $this->db->where('id', $data['id']);
        $this->db->update('umum_ormas');
    }

    //tempat ibadah
    function tambah_tmpIbadah($data)
    {
        $this->db->insert('umum_tempatibadah', $data);
    }

    function hapus_tempatIbadah($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('umum_tempatibadah');
    }

    function edit_tempatIbadah($data)
    {
        $this->db->set('nama', $data['nama']);
        $this->db->set('alamat', $data['alamat']);
        $this->db->set('agama', $data['agama']);
        $this->db->where('id', $data['id']);
        $this->db->update('umum_tempatibadah');
    }

    //puskomin

    function get_ktp($nik)
    {
        return $this->db->query("SELECT * FROM umum_ktp WHERE nik='$nik'")->result_array();
    }

    function lihat_puskomin($id)
    {
        return $this->db->query("SELECT * FROM umum_puskomin WHERE id='$id'")->result_array();
    }


    // function puskomin_penting()
    // {
    //     return $this->db->query("SELECT * FROM umum_puskomin WHERE level='Penting'")->result_array();
    // }

    // function puskomin_segera()
    // {
    //     return $this->db->query("SELECT * FROM umum_puskomin WHERE level='Segera'")->result_array();
    // }

    function tambah_puskomin($data)
    {

        $this->db->insert('umum_puskomin', $data);
    }

    function hapus_puskomin($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('umum_puskomin');
    }
}
