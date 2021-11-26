<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_admin');
    }

    public function index()
    {

        $data['title'] = 'Beranda | Admin';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/index');
        $this->load->view('templates/admin/footer');

        if ($id = $this->input->get('tg') == 'same_user') {
            $this->load->view('templates/user/alertSameUser');
        }
    }

    public function tampil_tambah_user()
    {
        $data['title'] = 'Tambah User | Admin';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tambah_user');
        $this->load->view('templates/admin/footer');
    }

    public function aksi_tambah_user()
    {
        // $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('role', 'role', 'required');
        $data['title'] = "Tambah User | Admin";

        if ($this->form_validation->run() == false) {
            redirect('admin/index');
        } else {
            // $nik = htmlspecialchars($this->input->post('nik'));
            $username = htmlspecialchars($this->input->post('username'));
            $password = htmlspecialchars($this->input->post('password'));
            $role = htmlspecialchars($this->input->post('role'));
            if ($this->Model_admin->cek_user($username)) {
                redirect('admin?tg=same_user', 'refresh');
            } else {
                $this->Model_admin->tambah_user($username, $password, $role);
                redirect('admin/daftar_user');
            }
        }
    }

    public function daftar_user()
    {
        $data['title'] = 'Daftar User | Admin';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tabel/user');
        $this->load->view('templates/admin/footer');
    }

    public function verif_user()
    {
        $data['title'] = 'Daftar User | Admin';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tabel/userV');
        $this->load->view('templates/admin/footer');
    }

    public function hapus_user()
    {
        $id = $this->input->get('id');
        $this->Model_admin->hapus_user($id);
        redirect('admin/daftar_user');
    }

    public function edit_user()
    {
        $data['title'] = 'Edit User | Admin';
        $data['id'] = $this->input->get('id');
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/edit_user');
        $this->load->view('templates/admin/footer');
    }

    public function aksi_edit_User()
    {
        $id = $this->input->get('id');
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));
        $role = htmlspecialchars($this->input->post('role'));
        $data = array(
            'id' => $id,
            'username' => $username,
            'password' => $password,
            'role' => $role
        );
        if ($this->session != null) {
            $this->Model_admin->edit_user($data);
        }


        redirect('admin/daftar_user');
    }

    public function active_user()
    {
        $id = $this->input->get('id');

        if ($this->session != null) {
            $this->Model_admin->active_user($id);
        }
        redirect('admin/verif_user');
    }



    //batesan user

    public function daftar_sawah()
    {
        $data['title'] = 'Daftar User | Admin';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tabel/sawah');
        $this->load->view('templates/admin/footer');
    }

    public function tampil_tambah_sawah()
    {
        $data['title'] = 'Tambah Data Penanaman | Admin';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tambah_sawah');
        $this->load->view('templates/admin/footer');
    }

    public function aksi_tambah_sawah()
    {
        // $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('pemilik', 'pemilik', 'required');
        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        $this->form_validation->set_rules('tanam', 'tanam', 'required');
        $data['title'] = "Tambah Data Penanaman | Admin";

        if ($this->form_validation->run() == false) {
            redirect('admin/index');
        } else {
            // $nik = htmlspecialchars($this->input->post('nik'));
            $pemilik = htmlspecialchars($this->input->post('pemilik'));
            $jenis = htmlspecialchars($this->input->post('jenis'));
            $tanam = htmlspecialchars($this->input->post('tanam'));
            
            $this->Model_admin->tambah_sawah($pemilik, $jenis, $tanam);
            redirect('admin/daftar_sawah');
            
        }
    }

    public function hapus_sawah()
    {
        $id = $this->input->get('id');
        $this->Model_admin->hapus_sawah($id);
        redirect('admin/daftar_sawah');
    }

    public function edit_sawah()
    {
        $data['title'] = 'Edit Data Penanaman | Admin';
        $data['id'] = $this->input->get('id');
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/edit_sawah');
        $this->load->view('templates/admin/footer');
    }

    public function aksi_edit_Sawah()
    {
        $id = $this->input->get('id');
        
        $pemilik = htmlspecialchars($this->input->post('pemilik'));
        $jenis = htmlspecialchars($this->input->post('jenis'));
        $tanam = htmlspecialchars($this->input->post('tanam'));
        $data = array(
            'id' => $id,
            'pemilik' => $pemilik,
            'jenis' => $jenis,
            'tgl_tanam' => $tanam
        );
        if ($this->session != null) {
            $this->Model_admin->edit_sawah($data);
            redirect('admin/daftar_sawah');
        }


        
    }

    //sawah

    public function daftar_harga()
    {
        $data['title'] = 'Daftar Harga Bawang Merah | Admin';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tabel/harga');
        $this->load->view('templates/admin/footer');
    }

    public function tampil_tambah_harga()
    {
        $data['title'] = 'Tambah Data Harga | Admin';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tambah_harga');
        $this->load->view('templates/admin/footer');
    }

    public function aksi_tambah_harga()
    {
        // $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('jmlPanen', 'jmlPanen', 'required');
        $this->form_validation->set_rules('tglPanen', 'tglPanen', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $data['title'] = "Tambah Data Harga | Admin";

        if ($this->form_validation->run() == false) {
            redirect('admin/index');
        } else {
            // $nik = htmlspecialchars($this->input->post('nik'));
            $jmlPanen = htmlspecialchars($this->input->post('jmlPanen'));
            $tglPanen = htmlspecialchars($this->input->post('tglPanen'));
            $harga = htmlspecialchars($this->input->post('harga'));
            
            $this->Model_admin->tambah_harga($jmlPanen, $tglPanen, $harga);
            redirect('admin/daftar_harga');
            
        }
    }

    public function hapus_harga()
    {
        $id = $this->input->get('id');
        $this->Model_admin->hapus_harga($id);
        redirect('admin/daftar_harga');
    }

    public function edit_harga()
    {
        $data['title'] = 'Edit Data Harga | Admin';
        $data['id'] = $this->input->get('id');
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/edit_harga');
        $this->load->view('templates/admin/footer');
    }

    public function aksi_edit_harga()
    {
        $id = $this->input->get('id');
        
        $jmlPanen = htmlspecialchars($this->input->post('jmlPanen'));
        $tglPanen = htmlspecialchars($this->input->post('tglPanen'));
        $harga = htmlspecialchars($this->input->post('harga'));
        $data = array(
            'id' => $id,
            'jumlah_panen' => $jmlPanen,
            'tanggal_panen' => $tglPanen,
            'harga' => $harga
        );
        if ($this->session != null) {
            $this->Model_admin->edit_harga($data);
            redirect('admin/daftar_harga');
        }
    }


    //rego brambang

    public function daftar_politik()
    {
        $data['title'] = 'Daftar Partai Politik | Admin Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tabel/politik');
        $this->load->view('templates/admin/footer');
    }

    public function tambah_politik()
    {
        $data['title'] = 'Tambah Partai Politik | Admin Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/features/tambah_politik');
        $this->load->view('templates/admin/footer');
    }

    public function proses_tambahPolitik()
    {
        $nama_parpol = htmlspecialchars($this->input->post('nama'));
        $periode = htmlspecialchars($this->input->post('periode'));
        $data = array(
            'nama_parpol' => $nama_parpol,
            'periode' => $periode
        );
        if ($this->session != null) {
            $this->Model_admin->tambah_parpol($data);
        }
        redirect('admin/daftar_politik');
    }

    public function edit_politik()
    {
        $data['title'] = 'Edit Partai Politik | Admin Badan Kesatuan Bangsa dan Politik';
        $data['id'] = $this->input->get('id');
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/features/edit_politik');
        $this->load->view('templates/admin/footer');
    }

    public function proses_editPolitik()
    {
        $id = $this->input->get('id');
        $nama_parpol = htmlspecialchars($this->input->post('nama'));
        $periode = htmlspecialchars($this->input->post('periode'));
        $data = array(
            'id' => $id,
            'nama_parpol' => $nama_parpol,
            'periode' => $periode
        );
        if ($this->session != null) {
            $this->Model_admin->edit_parpol($data);
        }


        redirect('admin/daftar_politik');
    }

    public function hapus_politik()
    {
        $id = $this->input->get('id');
        $this->Model_admin->hapus_parpol($id);
        redirect('admin/daftar_politik');
    }

    public function daftar_ormas()
    {
        $data['title'] = 'Daftar Ormas | Admin Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tabel/ormas');
        $this->load->view('templates/admin/footer');
    }

    public function daftar_puskomin()
    {
        $data['title'] = 'Daftar Data Puskomin | Admin Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tabel/puskomin');
        $this->load->view('templates/admin/footer');
    }

    public function daftar_tempat_ibadah()
    {
        $data['title'] = 'Daftar Tempat Ibadah | Admin Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tabel/tempat_ibadah');
        $this->load->view('templates/admin/footer');
    }

    public function daftar_pengajuan_penelitian()
    {
        $data['title'] = 'Daftar Pengajuan Penelitian | Admin Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tabel/penelitian');
        $this->load->view('templates/admin/footer');
    }

    public function detail_pengajuan_penelitian()
    {
        $data['title'] = 'Daftar Berita | Admin Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/features/detail_penelitian', $data);
        $this->load->view('templates/admin/footer');
    }

    public function proses_balas_penelitian()
    {
        $config['upload_path']          = './uploads/layanan/balasan/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('surat_balasan')) {
            $id = $this->input->get('id');
            $komentar = htmlspecialchars($this->input->post('komentar'));
            $status_surat = htmlspecialchars($this->input->post('status_surat'));
            $data = array(
                'id'                => $id,
                'status_surat'      => $status_surat,
                'komentar'          => $komentar
            );
            $this->Model_admin->balas_surat($data);
            redirect('admin/daftar_pengajuan_penelitian');
        } else {
            $id = $this->input->get('id');
            $surat_balasan = $this->upload->data();
            $surat_balasan = $surat_balasan['file_name'];
            $komentar = htmlspecialchars($this->input->post('komentar'));
            $status_surat = htmlspecialchars($this->input->post('status_surat'));
            $data = array(
                'id'                => $id,
                'status_surat'      => $status_surat,
                'komentar'          => $komentar,
                'balasan'           => $surat_balasan
            );
            $this->Model_admin->balas_surat($data);
            redirect('admin/daftar_pengajuan_penelitian');
        }
    }

    public function download_berkas()
    {
        $this->load->helper('download');
        $id = $this->input->get('id');
        $berkas = $this->Model_admin->download_berkas($id);
        force_download('uploads/layanan/berkas/' . $berkas[0]['berkas_diperlukan'], null);
    }

    public function daftar_kuisioner()
    {
        $data['title'] = 'Daftar Responden Kuisioner | Admin Badan Kesatuan Bangsa dan Politik';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/tabel/kuisioner');
        $this->load->view('templates/admin/footer');
    }

    public function grafik_kuisioner()
    {
        $data['title'] = 'Laporan Hasil Kuisioner | Admin Badan Kesatuan Bangsa dan Politik';
        $data['p1Sb'] = $this->Model_admin->getPertanyaanSb('p1');
        $data['p1B'] = $this->Model_admin->getPertanyaanB('p1');
        $data['p1KB'] = $this->Model_admin->getPertanyaanKB('p1');
        $data['p1TB'] = $this->Model_admin->getPertanyaanTB('p1');

        $data['p2Sb'] = $this->Model_admin->getPertanyaanSb('p2');
        $data['p2B'] = $this->Model_admin->getPertanyaanB('p2');
        $data['p2KB'] = $this->Model_admin->getPertanyaanKB('p2');
        $data['p2TB'] = $this->Model_admin->getPertanyaanTB('p2');

        $data['p3Sb'] = $this->Model_admin->getPertanyaanSb('p3');
        $data['p3B'] = $this->Model_admin->getPertanyaanB('p3');
        $data['p3KB'] = $this->Model_admin->getPertanyaanKB('p3');
        $data['p3TB'] = $this->Model_admin->getPertanyaanTB('p3');

        $data['p4Sb'] = $this->Model_admin->getPertanyaanSb('p4');
        $data['p4B'] = $this->Model_admin->getPertanyaanB('p4');
        $data['p4KB'] = $this->Model_admin->getPertanyaanKB('p4');
        $data['p4TB'] = $this->Model_admin->getPertanyaanTB('p4');

        $data['p5Sb'] = $this->Model_admin->getPertanyaanSb('p5');
        $data['p5B'] = $this->Model_admin->getPertanyaanB('p5');
        $data['p5KB'] = $this->Model_admin->getPertanyaanKB('p5');
        $data['p5TB'] = $this->Model_admin->getPertanyaanTB('p5');

        $data['p6Sb'] = $this->Model_admin->getPertanyaanSb('p6');
        $data['p6B'] = $this->Model_admin->getPertanyaanB('p6');
        $data['p6KB'] = $this->Model_admin->getPertanyaanKB('p6');
        $data['p6TB'] = $this->Model_admin->getPertanyaanTB('p6');

        $data['p7Sb'] = $this->Model_admin->getPertanyaanSb('p7');
        $data['p7B'] = $this->Model_admin->getPertanyaanB('p7');
        $data['p7KB'] = $this->Model_admin->getPertanyaanKB('p7');
        $data['p7TB'] = $this->Model_admin->getPertanyaanTB('p7');

        $data['p8Sb'] = $this->Model_admin->getPertanyaanSb('p8');
        $data['p8B'] = $this->Model_admin->getPertanyaanB('p8');
        $data['p8KB'] = $this->Model_admin->getPertanyaanKB('p8');
        $data['p8TB'] = $this->Model_admin->getPertanyaanTB('p8');

        $data['p9Sb'] = $this->Model_admin->getPertanyaanSb('p9');
        $data['p9B'] = $this->Model_admin->getPertanyaanB('p9');
        $data['p9KB'] = $this->Model_admin->getPertanyaanKB('p9');
        $data['p9TB'] = $this->Model_admin->getPertanyaanTB('p9');
        $this->load->view('templates/admin/header', $data);
        $this->load->view('main/admin/features/grafik_kuisioner');
        $this->load->view('templates/admin/footer');
    }

    public function cetak_harian()
    {
        $data['puskomin'] = $this->Model_admin->get_puskominHarian();
        $data['laporan'] = "DATA LAPORAN HARIAN";
        $this->load->view('main/admin/features/cetak_harian', $data);
    }

    public function cetak_mingguan()
    {
        $data['puskomin'] = $this->Model_admin->get_puskominMingguan();
        $data['laporan'] = "DATA LAPORAN MINGGUAN";
        $this->load->view('main/admin/features/cetak_harian', $data);
    }

    public function cetak_bulanan()
    {
        $data['puskomin'] = $this->Model_admin->get_puskominBulanan();
        $data['laporan'] = "DATA LAPORAN BULANAN";
        $this->load->view('main/admin/features/cetak_harian', $data);
    }
}
