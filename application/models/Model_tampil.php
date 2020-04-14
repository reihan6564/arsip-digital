<?php
class Model_tampil extends CI_Model
{
    public function tampil_doc_keluar()
    {
        return $this->db->get('tb_dokumen_keluar')->result_array();
    }
    public function tampil_doc_masuk()
    {
        return $this->db->get('tb_dokumen_masuk')->result_array();
    }
    public function tampil_kategori()
    {
        return $this->db->get('tb_kategori_dokumen')->result_array();
    }
    public function hitung_db()
    {
        $query = "SELECT count(id_dokumen_masuk) as jumlah_db FROM tb_dokumen_masuk WHERE status = 'Belum Dibaca'";
        return $this->db->query($query)->result_array();
    }
    public function hitung_dl()
    {
        $query = "SELECT count(id_dokumen_keluar) as jumlah_dl FROM tb_dokumen_keluar";
        return $this->db->query($query)->result_array();
    }
    public function hitung_ktg()
    {
        $query = "SELECT count(id_kategori) as jumlah_ktg FROM tb_kategori_dokumen";
        return $this->db->query($query)->result_array();
    }
}
