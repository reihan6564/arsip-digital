<?php
class Model_insert extends CI_Model
{

    public function insert_doc_keluar($new_doc)
    {
        $data = [
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
            'no_dokumen' => htmlspecialchars($this->input->post('no_dokumen', true)),
            'no_arsip' => htmlspecialchars($this->input->post('no_arsip', true)),
            'keamanan_arsip' => htmlspecialchars($this->input->post('keamanan', true)),
            'tujuan_dokumen' => htmlspecialchars($this->input->post('tujuan_dokumen', true)),
            'indeks_dokumen' => htmlspecialchars($this->input->post('indeks_dokumen', true)),
            'tanggal_dokumen' => htmlspecialchars($this->input->post('tanggal_dokumen', true)),
            'tanggal_dokumen_keluar' => htmlspecialchars($this->input->post('tanggal_dokumen_keluar', true)),
            'id_kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'isi_file_dokumen' => $new_doc
        ];
        $this->db->insert('tb_dokumen_keluar', $data);
    }

    public function insert_doc_masuk($new_doc)
    {
        $data = [
            'id_kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
            'no_dokumen' => htmlspecialchars($this->input->post('no_dokumen', true)),
            'no_arsip' => htmlspecialchars($this->input->post('no_arsip', true)),
            'keamanan_arsip' => htmlspecialchars($this->input->post('keamanan', true)),
            'asal_dokumen' => htmlspecialchars($this->input->post('asal_dokumen', true)),
            'indeks_dokumen' => htmlspecialchars($this->input->post('indeks_dokumen', true)),
            'tanggal_dokumen' => htmlspecialchars($this->input->post('tanggal_dokumen', true)),
            'tanggal_dokumen_masuk' => htmlspecialchars($this->input->post('tanggal_dokumen_masuk', true)),
            'isi_file_dokumen' => $new_doc,
            'status' => 'Belum Dibaca',
        ];
        $this->db->insert('tb_dokumen_masuk', $data);
    }

    public function insert_kategori()
    {
        $data = [
            'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori', true))
        ];
        $this->db->insert('tb_kategori_dokumen', $data);
    }
}
