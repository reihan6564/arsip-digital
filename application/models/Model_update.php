<?php
class Model_update extends CI_Model
{

    public function update_doc_keluar($new_doc)
    {

        if ($new_doc == "") {
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
            ];
        } else {
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
        }

        $id = $this->input->post('id');
        $this->db->where('id_dokumen_keluar', $id);
        $this->db->update('tb_dokumen_keluar', $data);
    }

    public function update_doc_masuk($new_doc)
    {

        if ($new_doc == "") {
            $data = [
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'no_dokumen' => htmlspecialchars($this->input->post('no_dokumen', true)),
                'no_arsip' => htmlspecialchars($this->input->post('no_arsip', true)),
                'keamanan_arsip' => htmlspecialchars($this->input->post('keamanan', true)),
                'asal_dokumen' => htmlspecialchars($this->input->post('asal_dokumen', true)),
                'indeks_dokumen' => htmlspecialchars($this->input->post('indeks_dokumen', true)),
                'tanggal_dokumen' => htmlspecialchars($this->input->post('tanggal_dokumen', true)),
                'tanggal_dokumen_masuk' => htmlspecialchars($this->input->post('tanggal_dokumen_masuk', true)),
                'id_kategori' => htmlspecialchars($this->input->post('kategori', true))
            ];
        } else {
            $data = [
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'no_dokumen' => htmlspecialchars($this->input->post('no_dokumen', true)),
                'no_arsip' => htmlspecialchars($this->input->post('no_arsip', true)),
                'keamanan_arsip' => htmlspecialchars($this->input->post('keamanan', true)),
                'asal_dokumen' => htmlspecialchars($this->input->post('asal_dokumen', true)),
                'indeks_dokumen' => htmlspecialchars($this->input->post('indeks_dokumen', true)),
                'tanggal_dokumen' => htmlspecialchars($this->input->post('tanggal_dokumen', true)),
                'tanggal_dokumen_masuk' => htmlspecialchars($this->input->post('tanggal_dokumen_masuk', true)),
                'id_kategori' => htmlspecialchars($this->input->post('kategori', true)),
                'isi_file_dokumen' => $new_doc
            ];
        }

        $id = $this->input->post('id');
        $this->db->where('id_dokumen_masuk', $id);
        $this->db->update('tb_dokumen_masuk', $data);
    }

    public function update_kategori()
    {
        $data = [
            'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori', true))
        ];
        $id = $this->input->post('id');
        $this->db->where('id_kategori', $id);
        $this->db->update('tb_kategori_dokumen', $data);
    }

    public function update_profile($new_image)
    {
        if ($this->input->post('password')) {
            if ($new_image == '') {
                $data = [
                    'username' => htmlspecialchars($this->input->post('username', true)),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
                ];
            } else {
                $data = [
                    'username' => htmlspecialchars($this->input->post('username', true)),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'gambar' => $new_image
                ];
            }
        } else {
            if ($new_image == '') {
                $data = [
                    'username' => htmlspecialchars($this->input->post('username', true))
                ];
            } else {
                $data = [
                    'username' => htmlspecialchars($this->input->post('username', true)),
                    'gambar' => $new_image
                ];
            }
        }
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('tb_admin', $data);
    }

    public function update_status($id)
    {
        $data = [
            'status' => 'Sudah Dibaca'
        ];
        $this->db->where('isi_file_dokumen', $id);
        $this->db->update('tb_dokumen_masuk', $data);
    }
}
