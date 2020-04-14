<?php
class Model_delete extends CI_Model
{

    public function delete_doc_keluar($id)
    {
        $query = $this->db->get_where('tb_dokumen_keluar', ['id_dokumen_keluar' => $id])->row_array();
        $dokumen = $query['isi_file_dokumen'];
        unlink(FCPATH . 'assets/file-document-keluar/' . $dokumen);
        $this->db->delete('tb_dokumen_keluar', ['id_dokumen_keluar' => $id]);
    }

    public function delete_doc_masuk($id)
    {
        $query = $this->db->get_where('tb_dokumen_masuk', ['id_dokumen_masuk' => $id])->row_array();
        $dokumen = $query['isi_file_dokumen'];
        unlink(FCPATH . 'assets/file-document-masuk/' . $dokumen);
        $this->db->delete('tb_dokumen_masuk', ['id_dokumen_masuk' => $id]);
    }

    public function delete_kategori($id)
    {
        $this->db->delete('tb_kategori_dokumen', ['id_kategori' => $id]);
    }
}
