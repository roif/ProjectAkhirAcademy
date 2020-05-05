<?php

class Kelas_model extends CI_Model
{
    public function getAllKelas()
    {
        return $this->db->get('kelas')->result_array();
    }
    public function getInfoKelas($id)
    {
        return $this->db->get_where('kelas', ['kelas_id' => $id])->row_array();
    }
    public function updateKelas($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($data['user']['kelas_id'] == null) {
            $data = [
                'kelas_id' => intval($id)
            ];
            $this->db->where('id_user', $this->session->userdata('id_user'));
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kelas Berhasil Ditambahkan
                </div>');
            $data = [
                'kelas_id' => $data['kelas_id'],
            ];
            $this->session->set_userdata($data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Anda hanya bisa memilih satu kelas!
                </div>');
        }
        redirect('siswa/');
    }
    public function updateKelasGuru($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($data['user']['kelas_id'] == null) {
            $data = [
                'kelas_id' => intval($id)
            ];
            $this->db->where('id_user', $this->session->userdata('id_user'));
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kelas Berhasil Diupdate
                </div>');
            $data = [
                'kelas_id' => $data['kelas_id'],
            ];
            $this->session->set_userdata($data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Anda hanya bisa memilih satu kelas!
                </div>');
        }
        redirect('Guru/index');
    }
    public function hapusKelas()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($data['user']['kelas_id'] == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Anda belum memiliki kelas! silahkan daftar
            </div>');
        } else {
            $data = [
                'kelas_id' => null
            ];
            $this->db->where('id_user', $this->session->userdata('id_user'));
            $this->db->update('user', $data);
            $this->session->unset_userdata('kelas_id');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Kelas berhasil dihapus!
                </div>');
        }
        redirect('siswa/index');
    }
}
