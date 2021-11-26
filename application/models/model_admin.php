<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_admin extends CI_Model
{
    function tambah_user($username, $password, $role)
    {
        $data_user = [
            'username' => $username,
            'password' => $password,
            'role' => $role,
            'aktif' => "ya"
        ];

        $this->db->insert('user', $data_user);

        // $this->db->where('nik_user', $nik);
        // $this->db->set('password', $password);
        // $this->db->update('user');
    }

    function edit_user($data)
    {
        $this->db->set('username', $data['username']);
        $this->db->set('password', $data['password']);
        $this->db->set('role', $data['role']);
        $this->db->where('id', $data['id']);
        $this->db->update('user');
    }

    function active_user($id)
    {
        $this->db->set('aktif', "ya");
        $this->db->where('id', $id);
        $this->db->update('user');
    }

    function cek_user($username)
    {
        return $this->db->query("SELECT * FROM user WHERE username='$username'")->result_array();
    }

    function hapus_user($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    //user

    
    function tambah_sawah($pemilik, $jenis, $tanam)
    {
        $data_user = [
            'pemilik' => $pemilik,
            'jenis' => $jenis,
            'tgl_tanam' => $tanam
        ];

        $this->db->insert('sawah', $data_user);
    }

    function edit_sawah($data)
    {
        $this->db->set('pemilik', $data['pemilik']);
        $this->db->set('jenis', $data['jenis']);
        $this->db->set('tgl_tanam', $data['tgl_tanam']);
        $this->db->where('id', $data['id']);
        $this->db->update('sawah');
    }

    function hapus_sawah($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sawah');
    }



    //sawah

    function tambah_harga($jmlPanen, $tglPanen, $harga)
    {
        $data_user = [
            'jumlah_panen' => $jmlPanen,
            'tanggal_panen' => $tglPanen,
            'harga' => $harga
        ];

        $this->db->insert('harga_bawang', $data_user);
    }

    function edit_harga($data)
    {
        $this->db->set('jumlah_panen', $data['jumlah_panen']);
        $this->db->set('tanggal_panen', $data['tanggal_panen']);
        $this->db->set('harga', $data['harga']);
        $this->db->where('id', $data['id']);
        $this->db->update('harga_bawang');
    }

    function hapus_harga($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('harga_bawang');
    }

    //harga_bawang






    //range

    function tambah_parpol($data)
    {
        $this->db->insert('umum_politik', $data);
    }

    function edit_parpol($data)
    {
        $this->db->set('nama_parpol', $data['nama_parpol']);
        $this->db->set('periode', $data['periode']);
        $this->db->where('id', $data['id']);
        $this->db->update('umum_politik');
    }

    function hapus_parpol($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('umum_politik');
    }

    function get_puskominHarian()
    {
        return $this->db->query("SELECT * FROM umum_puskomin WHERE DATE(dibuat_pada) = CURDATE()")->result_array();
    }

    function get_puskominMingguan()
    {
        return $this->db->query("SELECT * FROM umum_puskomin WHERE yearweek(DATE(dibuat_pada), 1) = yearweek(curdate(), 1)")->result_array();
    }

    function get_puskominBulanan()
    {
        return $this->db->query("SELECT * FROM umum_puskomin WHERE MONTH(dibuat_pada) = MONTH(NOW()) AND YEAR(dibuat_pada) = YEAR(NOW())")->result_array();
    }

    function getPertanyaanSb($p)
    {
        return $this->db->query("SELECT * FROM layanan_kuisioner WHERE $p='Sangat Baik' ")->result_array();
    }

    function getPertanyaanB($p)
    {
        return $this->db->query("SELECT * FROM layanan_kuisioner WHERE $p='Baik' ")->result_array();
    }

    function getPertanyaanKB($p)
    {
        return $this->db->query("SELECT * FROM layanan_kuisioner WHERE $p='Kurang Baik' ")->result_array();
    }

    function getPertanyaanTB($p)
    {
    }

    function download_berkas($id)
    {
        return $this->db->query("SELECT berkas_diperlukan FROM layanan_penelitian WHERE id=$id ")->result_array();
    }

    function balas_surat($data)
    {
        $this->db->set('balasan', $data['balasan']);
        $this->db->set('komentar', $data['komentar']);
        $this->db->set('status_surat', $data['status_surat']);
        $this->db->where('id', $data['id']);
        $this->db->update('layanan_penelitian');
    }
}
