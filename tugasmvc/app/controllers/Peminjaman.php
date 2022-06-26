<?php

class Peminjaman extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Peminjaman';
        $data['pmj'] = $this->model('Peminjaman_model')->getAllPeminjaman();
        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Daftar Peminjaman';
        $data['pmj'] = $this->model('Peminjaman_model')->getPeminjamanById($id);
        $this->view('templates/header', $data);
        $this->view('peminjaman/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Peminjaman_model')->tambahDataPeminjaman($_POST) > 0) {
            Flasher::setFlash('berhasil',  ' ditambahkan', 'success');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', ' ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Peminjaman_model')->hapusDataPeminjaman($id) > 0) {
            Flasher::setFlash('berhasil',  ' dihapus', 'success');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', ' dihapus', 'danger');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Peminjaman_model')->getPeminjamanById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Peminjaman_model')->ubahDataPeminjaman($_POST) > 0) {
            Flasher::setFlash('berhasil',  ' diubah', 'success');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', ' diubah', 'danger');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Peminjaman';
        $data['pmj'] = $this->model('Peminjaman_model')->cariDataPeminjaman();
        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }
}
