<?php
class Siswa_model extends CI_Model
{
    public function getAllSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }
    public function getInfoSiswa($id)
    {
        return $this->db->get_where('user', [
            'kelas_id' => $id,
            'level_id' => 1
        ])->result_array();
    }
    public function hapusAkun()
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->delete('user');
        $this->session->unset_userdata('kelas_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Akun berhasil dihapus!
                </div>');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('kelas_id');
        $this->session->unset_userdata('level_id');
        redirect('Home/register');
    }
    public function ubahPassword($pass_hash)
    {
        $this->db->set('password', $pass_hash);
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('user');
    }
}
