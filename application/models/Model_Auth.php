<?php
class Model_Auth extends CI_Model
{
    function chek_login($username, $password)
    {
        $chek = $this->db->get_where('tb_admin', array('username' => $username, 'password' => $password));
        if ($chek->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function insert_registrasi($new_image)
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'gambar' => $new_image
        ];
        $this->db->insert('tb_admin', $data);
    }
}
