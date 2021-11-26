<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_user');
    }

    public function index()
    {
        $data['title'] = 'Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/user/header', $data);
        $this->load->view('main/user/beranda');

        if ($id = $this->input->get('lg') != null) {
            $this->load->view('templates/user/alert');
        }

        $this->load->view('templates/user/footer');
    }

    public function lihat_berita()
    {
        $id = $this->input->get('id');
        $data['puskomin'] = $this->Model_user->lihat_puskomin($id);
        $data['title'] = 'Detail Berita | Badan Kesatuan Bangsa dan Politik';

        $this->load->view('templates/user/header', $data);
        $this->load->view('main/user/lihat_berita', $data);
        $this->load->view('templates/user/footer');
    }

    // Visi

    public function visi()
    {
        $data['title'] = 'Visi & Misi | Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/user/header', $data);
        $this->load->view('main/user/visi');
        $this->load->view('templates/user/footer');
    }

    public function test()
    {
        $data['title'] = 'Visi & Misi | Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/user/header', $data);
        $this->load->view('main/user/test');
        $this->load->view('templates/user/footer');
    }

    // Struktur
    public function struktur()
    {
    }

    // Politik
    public function politik()
    {
        $data['title'] = 'Politik | Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/user/header', $data);
        $this->load->view('main/user/politik');
        $this->load->view('templates/user/footer');
    }

    public function tambah_politik()
    {
        $this->load->view('templates/user/header');
        $this->load->view('main/user/features/tambah_politik');
        $this->load->view('templates/user/footer');
    }

    public function aksi_tambahPolitik()
    {
        $nama_parpol = htmlspecialchars($this->input->post('nama'));
        $kec = $this->input->get('kec');
        $data = array(
            'nama_parpol' => $nama_parpol,
            'kecamatan' => $kec
        );
        if ($this->session != null) {
            $this->Model_user->tambah_parpol($data);
        }
        redirect('user/politik');
    }

    public function edit_politik()
    {
        $this->load->view('templates/user/header');
        $this->load->view('main/user/features/edit_politik');
        $this->load->view('templates/user/footer');
    }

    public function aksi_editPolitik()
    {
        $id = $this->input->get('id');
        $nama_parpol = htmlspecialchars($this->input->post('nama'));
        $data = array(
            'id' => $id,
            'nama_parpol' => $nama_parpol,
        );
        if ($this->session != null) {
            $this->Model_user->edit_parpol($data);
        }
        redirect('user/politik');
    }

    public function hapus_politik()
    {
        $id = $this->input->get('id');
        $this->Model_user->hapus_parpol($id);
        redirect('user/politik');
    }

    // Ormas
    public function ormas()
    {
        $data['title'] = 'Organisasi Masyarakat | Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/user/header', $data);
        $this->load->view('main/user/ormas');
        $this->load->view('templates/user/footer');
    }

    public function tambah_ormas()
    {
        $this->load->view('templates/user/header');
        $this->load->view('main/user/features/tambah_ormas');
    }

    public function aksi_tambahOrmas()
    {
        $nama = htmlspecialchars($this->input->post('nama'));
        $kec = $this->input->get('kec');
        $alamat = htmlspecialchars($this->input->post('alamat'));
        $jml = htmlspecialchars($this->input->post('jml_anggota'));
        $data = array(
            'nama' => $nama,
            'kecamatan' => $kec,
            'alamat' => $alamat,
            'jml_anggota' => $jml
        );
        if ($this->session != null) {
            $this->Model_user->tambah_ormas($data);
        }
        redirect('user/ormas');
    }

    public function hapus_ormas()
    {
        $id = $this->input->get('id');
        $this->Model_user->hapus_ormas($id);
        redirect('user/ormas');
    }

    public function edit_ormas()
    {
        $this->load->view('templates/user/header');
        $this->load->view('main/user/features/edit_ormas');
        $this->load->view('templates/user/footer');
    }

    public function aksi_editOrmas()
    {
        $id = $this->input->get('id');
        $nama = htmlspecialchars($this->input->post('nama'));
        $alamat = htmlspecialchars($this->input->post('alamat'));
        $jml = htmlspecialchars($this->input->post('jml_anggota'));
        $data = array(
            'id' => $id,
            'nama' => $nama,
            'alamat' => $alamat,
            'jml_anggota' => $jml
        );
        if ($this->session != null) {
            $this->Model_user->edit_ormas($data);
        }
        redirect('user/ormas');
    }

    // puskomin
    public function puskomin()
    {
        $data['title'] = 'Puskomin | Badan Kesatuan Bangsa dan Politik';
        $data['biasa'] = $this->Model_user->month_data("01");
        $data['segera'] = $this->Model_user->month_data("02");
        $data['penting'] = $this->Model_user->month_data("03");

        $this->load->view('templates/user/header', $data);
        $this->load->view('main/user/puskomin', $data);
        $this->load->view('templates/user/footer');
    }

    public function lihat_puskomin()
    {
        $id = $this->input->get('id');
        $data['title'] = 'Puskomin | Badan Kesatuan Bangsa dan Politik';
        $data['puskomin'] = $this->Model_user->lihat_puskomin($id);

        $this->load->view('templates/user/header', $data);
        $this->load->view('main/user/lihat_puskomin', $data);
        $this->load->view('templates/user/footer');
    }

    public function tambah_puskomin($nik)
    {
        $data['ktp'] = $this->Model_user->get_ktp($nik);

        $this->load->view('templates/user/header');
        $this->load->view('main/user/features/tambah_puskomin', $data);
        $this->load->view('templates/user/footer');
    }

    public function aksi_tambah_puskomin()
    {
        $config['upload_path']          = './uploads/img/puskomin/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
            echo $this->upload->display_errors();
            echo 'error';
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $nama = $this->input->get('nama');
            $nik = $this->input->get('nik');
            $kec = $this->input->get('kec');
            $jab = htmlspecialchars($this->input->post('jabatan'));
            $judul = htmlspecialchars($this->input->post('judul'));
            $isi = htmlspecialchars($this->input->post('isi'));
            $kat = htmlspecialchars($this->input->post('level'));
            $jenis = htmlspecialchars($this->input->post('jenis'));
            $ditu = htmlspecialchars($this->input->post('ditujukan'));
            $lokasi = htmlspecialchars($this->input->post('latlong-input'));
            $data = array(
                'nama' => $nama,
                'jabatan' => $jab,
                'nik' => $nik,
                'alamat' => $kec,
                'judul' => $judul,
                'isi' => $isi,
                'gambar' => $gambar,
                'lokasi' => $lokasi,
                'level' => $kat,
                'jenis' => $jenis,
                'ditujukan' => $ditu
            );
            if ($this->session != null) {
                $this->Model_user->tambah_puskomin($data);
            }
            redirect('user/puskomin');
        }
    }

    public function hapus_puskomin()
    {
        $id = $this->input->get('id');
        $this->Model_user->hapus_puskomin($id);
        redirect('user/puskomin');
    }

    // Tempat Ibadah
    public function tempat_ibadah()
    {
        $data['title'] = 'Tempat Ibadah | Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/user/header', $data);
        $this->load->view('main/user/tempat_ibadah');
        $this->load->view('templates/user/footer');
    }

    public function tambah_tempatIbadah()
    {
        $this->load->view('templates/user/header');
        $this->load->view('main/user/features/tambah_tmpIbadah');
        $this->load->view('templates/user/footer');
    }

    public function aksi_tambah_TempatIbadah()
    {
        $nama = htmlspecialchars($this->input->post('nama'));
        $alamat = htmlspecialchars($this->input->post('alamat'));
        $agama = htmlspecialchars($this->input->post('agama'));
        $kec = $this->input->get('kec');
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'kecamatan' => $kec,
            'agama' => $agama
        );
        if ($this->session != null) {
            $this->Model_user->tambah_tmpIbadah($data);
        }
        redirect('user/tempat_ibadah');
    }

    public function hapus_tempatIbadah()
    {
        $id = $this->input->get('id');
        $this->Model_user->hapus_tempatIbadah($id);
        redirect('user/tempat_ibadah');
    }

    public function edit_tempatIbadah()
    {
        $this->load->view('templates/user/header');
        $this->load->view('main/user/features/edit_tempatIbadah');
        $this->load->view('templates/user/footer');
    }

    public function aksi_editTempatIbadah()
    {
        $id = $this->input->get('id');
        $nama = htmlspecialchars($this->input->post('nama'));
        $alamat = htmlspecialchars($this->input->post('alamat'));
        $agama = htmlspecialchars($this->input->post('agama'));
        $data = array(
            'id' => $id,
            'nama' => $nama,
            'alamat' => $alamat,
            'agama' => $agama
        );
        if ($this->session != null) {
            $this->Model_user->edit_tempatIbadah($data);
        }
        redirect('user/tempat_ibadah');
    }
}
