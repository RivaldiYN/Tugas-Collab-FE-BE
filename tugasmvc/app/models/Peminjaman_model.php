<?php

class Peminjaman_model
{
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPeminjamanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPeminjaman($data)
    {
        $query = "INSERT INTO peminjaman VALUES (null, :nama, :noKTP, :jenisKendaraan, :jenisKelamin)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('noKTP', $data['noKTP']);
        $this->db->bind('jenisKendaraan', $data['jenisKendaraan']);
        $this->db->bind('jenisKelamin', $data['jenisKelamin']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPeminjaman($id)
    {
        $query = "DELETE FROM peminjaman WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPeminjaman($data)
    {
        $query = "UPDATE peminjaman SET 
        nama = :nama,
        noKTP = :noKTP,
        jenisKendaraan = :jenisKendaraan,
        jenisKelamin = :jenisKelamin
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('noKTP', $data['noKTP']);
        $this->db->bind('jenisKendaraan', $data['jenisKendaraan']);
        $this->db->bind('jenisKelamin', $data['jenisKelamin']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataPeminjaman()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM peminjaman WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
