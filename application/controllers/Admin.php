<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_Auth');
        $this->load->model('Model_insert');
        $this->load->model('Model_tampil');
        $this->load->model('Model_delete');
        $this->load->model('Model_update');
        $this->load->helper('download');
        $this->load->library('pdf');
        //

    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            //cek tanggal tempo
            $data['hdb'] = $this->Model_tampil->hitung_db();
            $data['hdl'] = $this->Model_tampil->hitung_dl();
            $data['ktg'] = $this->Model_tampil->hitung_ktg();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/dashboard', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function doc_masuk()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $data['hdb'] = $this->Model_tampil->hitung_db();
            $data['acak'] = $this->acaknoardM();
            $data['doc_masuk'] = $this->Model_tampil->tampil_doc_masuk();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/dokumen_masuk', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function baca_doc_keluar()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $data['hdb'] = $this->Model_tampil->hitung_db();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/baca_doc_keluar', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function doc_keluar()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $data['hdb'] = $this->Model_tampil->hitung_db();
            $data['doc_keluar'] = $this->Model_tampil->tampil_doc_keluar();
            $data['acak'] = $this->acaknoardK();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/dokumen_keluar', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function kategori_doc()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $data['hdb'] = $this->Model_tampil->hitung_db();
            $data['kategori'] = $this->Model_tampil->tampil_kategori();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/kategori', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function pencarian_dokumen()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $data['hdb'] = $this->Model_tampil->hitung_db();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/pencarian_dokumen', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function hasil_pencarian_dokumen()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            if ($this->input->post('dokumen') == "dokumen_keluar") {
                $dokumen = $this->input->post('cari');
                $kateg = $this->input->post('kategori');
                if ($this->input->post('pilih') == "no_dokumen") {
                    $query = $this->db->query("SELECT * FROM tb_dokumen_keluar where `no_dokumen` like '%$dokumen%' and `id_kategori` like '%$kateg%'")->result_array();
                    $data['queri'] = $query;
                    if ($query) {
                        $data['hdb'] = $this->Model_tampil->hitung_db();
                        $this->load->view('template/header', $data);
                        $this->load->view('template/sidebar', $data);
                        $this->load->view('template/navbar', $data);
                        $this->load->view('admin/h_pencarian_dokumen', $data);
                        $this->load->view('template/footer', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pencarian No Dokumen/No Arsip Tidak Ada Yang Cocok</div>');
                        redirect('admin/pencarian_dokumen');
                    }
                } else if ($this->input->post('pilih') == "no_arsip") {
                    $query = $this->db->query("SELECT * FROM tb_dokumen_keluar where `no_arsip` like '%$dokumen%' and `id_kategori` like '%$kateg%'")->result_array();
                    $data['queri'] = $query;
                    if ($query) {
                        $data['hdb'] = $this->Model_tampil->hitung_db();
                        $this->load->view('template/header', $data);
                        $this->load->view('template/sidebar', $data);
                        $this->load->view('template/navbar', $data);
                        $this->load->view('admin/h_pencarian_dokumen', $data);
                        $this->load->view('template/footer', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pencarian No Dokumen/No Arsip Tidak Ada Yang Cocok</div>');
                        redirect('admin/pencarian_dokumen');
                    }
                }
            } else if ($this->input->post('dokumen') == "dokumen_masuk") {
                $dokumen = $this->input->post('cari');
                $kateg = $this->input->post('kategori');
                if ($this->input->post('pilih') == "no_dokumen") {
                    $query = $this->db->query("SELECT * FROM tb_dokumen_masuk where `no_dokumen` like '%$dokumen%' and `id_kategori` like '%$kateg%'")->result_array();
                    $data['query'] = $query;
                    if ($query) {
                        $data['hdb'] = $this->Model_tampil->hitung_db();
                        $this->load->view('template/header', $data);
                        $this->load->view('template/sidebar', $data);
                        $this->load->view('template/navbar', $data);
                        $this->load->view('admin/h_pencarian_dokumen', $data);
                        $this->load->view('template/footer', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata Kunci Pencarian Tidak Ada Yang Cocok</div>');
                        redirect('admin/pencarian_dokumen');
                    }
                } else if ($this->input->post('pilih') == "no_arsip") {
                    $query = $this->db->query("SELECT * FROM tb_dokumen_masuk where `no_arsip` like '%$dokumen%' and `id_kategori` like '%$kateg%'")->result_array();
                    $data['query'] = $query;
                    if ($query) {
                        $data['hdb'] = $this->Model_tampil->hitung_db();
                        $this->load->view('template/header', $data);
                        $this->load->view('template/sidebar', $data);
                        $this->load->view('template/navbar', $data);
                        $this->load->view('admin/h_pencarian_dokumen', $data);
                        $this->load->view('template/footer', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata Kunci Pencarian No Dokumen/No Arsip Tidak Ada Yang Cocok</div>');
                        redirect('admin/pencarian_dokumen');
                    }
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap Pilih Nomor Dan Dokumennya Terlebih Dahulu</div>');
                redirect('admin/pencarian_dokumen');
            }
        }
    }

    public function acaknoardK()
    {
        $quers = $this->db->query("SELECT * FROM tb_dokumen_keluar")->row_array();
        $quer = $this->db->query("SELECT RIGHT(no_arsip, 3) as no_keluar FROM `tb_dokumen_keluar` ORDER BY no_arsip DESC")->row_array();
        $akhir = intval($quer['no_keluar']);
        $i = 1;
        $akhir = $akhir + 1;
        if (strlen($akhir) == 1) {
            $a = "ARDK00" . $akhir;
        } elseif (strlen($akhir) == 2) {
            $a = "ARDK0" . $akhir;
        } elseif (strlen($akhir) == 3) {
            $a = "ARDK" . $akhir;
        } else {
            $a = "ARDK001";
        }
        return $a;
    }

    public function acaknoardM()
    {
        $quers = $this->db->query("SELECT * FROM tb_dokumen_masuk")->row_array();
        $quer = $this->db->query("SELECT RIGHT(no_arsip, 3) as no_masuk FROM `tb_dokumen_masuk` ORDER BY no_arsip DESC")->row_array();
        $akhir = intval($quer['no_masuk']);
        $i = 1;
        $akhir = $akhir + 1;
        if (strlen($akhir) == 1) {
            $a = "ARDM00" . $akhir;
        } elseif (strlen($akhir) == 2) {
            $a = "ARDM0" . $akhir;
        } elseif (strlen($akhir) == 3) {
            $a = "ARDM" . $akhir;
        } else {
            $a = "ARDM001";
        }
        return $a;
    }

    public function download_dokumen($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File dokumen tidak ada</div>');
            redirect('admin');
        } else {
            $this->Model_update->update_status($id);
            force_download('assets/file-document-masuk/' . $id, NULL);
        }
    }
    public function download_dokumen_k($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File dokumen tidak ada</div>');
            redirect('admin');
        } else {
            //$this->Model_update->update_status($id);
            force_download('assets/file-document-keluar/' . $id, NULL);
        }
    }


    public function edit_profile()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $data['hdb'] = $this->Model_tampil->hitung_db();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/e_profile', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function edit_doc_keluar($id)
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        $data['id'] = $id;
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $data['hdb'] = $this->Model_tampil->hitung_db();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/e_dokumen_keluar', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function edit_doc_masuk($id)
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        $data['id'] = $id;
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $data['hdb'] = $this->Model_tampil->hitung_db();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/e_dokumen_masuk', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function edit_kategori_doc($id)
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        $data['id'] = $id;
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $data['hdb'] = $this->Model_tampil->hitung_db();
            $data['kategori'] = $this->Model_tampil->tampil_kategori();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/e_kategori', $data);
            $this->load->view('template/footer', $data);
        }
    }



    public function laporan_doc()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $data['hdb'] = $this->Model_tampil->hitung_db();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('laporan/laporan_doc', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function laporan_doc_keluar()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $this->load->view('laporan/laporan_doc_keluar', $data);
        }
    }

    public function laporan_doc_masuk()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $this->load->view('laporan/laporan_doc_masuk', $data);
        }
    }

    public function laporan_kategori()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Arsip Digital';
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        } else {
            $this->load->view('laporan/laporan_kategori', $data);
        }
    }

    //
    //
    // Function Tambah data
    //
    // 
    public function tambah_doc_keluar()
    {
        $this->form_validation->set_rules('no_dokumen', 'no_dokumen', 'required|trim');
        $this->form_validation->set_rules('no_arsip', 'no_arsip', 'required|trim');
        $this->form_validation->set_rules('keamanan', 'keamanan', 'required|trim');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        $this->form_validation->set_rules('tujuan_dokumen', 'tujuan_dokumen', 'required|trim');
        $this->form_validation->set_rules('indeks_dokumen', 'indeks_dokumen', 'required|trim');
        $this->form_validation->set_rules('tanggal_dokumen', 'tanggal_dokumen', 'required|trim');
        $this->form_validation->set_rules('tanggal_dokumen_keluar', 'tanggal_dokumen_keluar', 'required|trim');
        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim');        
		if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/doc_keluar');
        } else {
            $upload_doc = $_FILES['isi']['name'];

            if ($upload_doc) {
                $config['allowed_types'] = 'doc|docx|pdf';
                $config['max_size'] = '10240';
                $config['upload_path'] = './assets/file-document-keluar/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('isi')) {
                    $new_doc = $this->upload->data('file_name');
                } else {
                    $elor =  $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $elor . ' File harus berformat doc|docx|pdf</div>');
                    redirect('admin/doc_keluar');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Harap isi file dokumen terlebih dahulu</div>');
                redirect('admin/doc_keluar');
            }
            $this->Model_insert->insert_doc_keluar($new_doc);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen Sudah di Upload</div>');
            redirect('admin/doc_keluar');
        }
    }

    public function tambah_doc_masuk()
    {
        $this->form_validation->set_rules('no_dokumen', 'no_dokumen', 'required|trim');
        $this->form_validation->set_rules('no_arsip', 'no_arsip', 'required|trim');
        $this->form_validation->set_rules('keamanan', 'keamanan', 'required|trim');
        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
        $this->form_validation->set_rules('asal_dokumen', 'asal_dokumen', 'required|trim');
        $this->form_validation->set_rules('indeks_dokumen', 'indeks_dokumen', 'required|trim');
        $this->form_validation->set_rules('tanggal_dokumen', 'tanggal_dokumen', 'required|trim');
        $this->form_validation->set_rules('tanggal_dokumen_masuk', 'tanggal_dokumen_masuk', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/doc_keluar');
        } else {
            $upload_doc = $_FILES['isi']['name'];

            if ($upload_doc) {
                $config['allowed_types'] = 'doc|docx|pdf';
                $config['max_size'] = '10240';
                $config['upload_path'] = './assets/file-document-masuk/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('isi')) {
                    $new_doc = $this->upload->data('file_name');
                } else {
                    $elor =  $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $elor . ' File harus berformat doc|docx|pdf</div>');
                    redirect('admin/doc_masuk');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Harap isi file dokumen terlebih dahulu</div>');
                redirect('admin/doc_masuk');
            }
            $this->Model_insert->insert_doc_masuk($new_doc);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen Sudah di Upload</div>');
            redirect('admin/doc_masuk');
        }
    }

    public function tambah_kategori()
    {
        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/kategori_doc');
        } else {
            $this->Model_insert->insert_kategori();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori Sudah di Ditambahkan</div>');
            redirect('admin/kategori_doc');
        }
    }

    //
    //
    // Function Update data
    //
    //

    public function update_doc_keluar()
    {
        $this->form_validation->set_rules('no_dokumen', 'no_dokumen', 'required|trim');
        $this->form_validation->set_rules('no_arsip', 'no_arsip', 'required|trim');
        $this->form_validation->set_rules('keamanan', 'keamanan', 'required|trim');
        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
        $this->form_validation->set_rules('tujuan_dokumen', 'tujuan_dokumen', 'required|trim');
        $this->form_validation->set_rules('indeks_dokumen', 'indeks_dokumen', 'required|trim');
        $this->form_validation->set_rules('tanggal_dokumen', 'tanggal_dokumen', 'required|trim');
        $this->form_validation->set_rules('tanggal_dokumen_keluar', 'tanggal_dokumen_keluar', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/doc_keluar');
        } else {
            $upload_doc = $_FILES['isi']['name'];

            if ($upload_doc) {
                $config['allowed_types'] = 'doc|docx|pdf';
                $config['max_size'] = '10240';
                $config['upload_path'] = './assets/file-document-keluar/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('isi')) {
                    $new_doc = $this->upload->data('file_name');
                } else {
                    $elor =  $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $elor . ' File harus berformat doc|docx|pdf</div>');
                    redirect('admin/doc_keluar');
                }
            } else {
                $new_doc = "";
            }
            $this->Model_update->update_doc_keluar($new_doc);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen Sudah di Update</div>');
            redirect('admin/doc_keluar');
        }
    }

    public function update_doc_masuk()
    {
        $this->form_validation->set_rules('no_dokumen', 'no_dokumen', 'required|trim');
        $this->form_validation->set_rules('no_arsip', 'no_arsip', 'required|trim');
        $this->form_validation->set_rules('keamanan', 'keamanan', 'required|trim');
        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
        $this->form_validation->set_rules('asal_dokumen', 'asal_dokumen', 'required|trim');
        $this->form_validation->set_rules('indeks_dokumen', 'indeks_dokumen', 'required|trim');
        $this->form_validation->set_rules('tanggal_dokumen', 'tanggal_dokumen', 'required|trim');
        $this->form_validation->set_rules('tanggal_dokumen_masuk', 'tanggal_dokumen_masuk', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/doc_masuk');
        } else {
            $upload_doc = $_FILES['isi']['name'];
            if ($upload_doc) {
                $config['allowed_types'] = 'doc|docx|pdf';
                $config['max_size'] = '10240';
                $config['upload_path'] = './assets/file-document-masuk/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('isi')) {
                    $new_doc = $this->upload->data('file_name');
                } else {
                    $elor =  $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $elor . ' File harus berformat doc|docx|pdf</div>');
                    redirect('admin/doc_masuk');
                }
            } else {
                $new_doc = "";
            }
            $this->Model_update->update_doc_masuk($new_doc);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen Sudah di Update</div>');
            redirect('admin/doc_masuk');
        }
    }

    public function update_kategori()
    {
        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/kategori_doc');
        } else {
            $this->Model_update->update_kategori();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori Sudah di Diubah</div>');
            redirect('admin/kategori_doc');
        }
    }

    public function update_profile()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin');
        } else {
            $new_image = $_FILES['gambar']['name'];

            if ($new_image) {
                $config['allowed_types'] = 'png|jpg|gif';
                $config['max_size'] = '10240';
                $config['upload_path'] = './assets/img/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    $elor =  $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $elor . ' File harus berformat png|jpg|gif</div>');
                    redirect('admin');
                }
            } else {
                $new_image = "";
            }
            $this->Model_update->update_profile($new_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile Sudah Di Diubah, Harap Login Kembali !</div>');
            redirect('auth');
        }
    }

    //
    //
    // Function Delete data
    //
    //

    public function hapus_doc_keluar($id)
    {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen Sudah di Delete</div>');
        $this->Model_delete->delete_doc_keluar($id);
        redirect('admin/doc_keluar');
    }

    public function hapus_doc_masuk($id)
    {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen Sudah di Delete</div>');
        $this->Model_delete->delete_doc_masuk($id);
        redirect('admin/doc_masuk');
    }

    public function hapus_kategori($id)
    {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori Sudah di Delete</div>');
        $this->Model_delete->delete_kategori($id);
        redirect('admin/kategori_doc');
    }
}
