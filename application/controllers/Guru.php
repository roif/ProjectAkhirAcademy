<?php
class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Guru_model');
        $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Halaman Guru';
        $data['link'] = 'Guru';
        $data['id'] = '2';
        $data['kelas'] = $this->Kelas_model->getAllKelas();
        $this->load->view('templates/header', $data);
        if (empty($this->session->userdata('level_id'))) {
            redirect('Home');
        } else {
            if ($this->session->userdata('level_id') == 1) {
                redirect('Siswa');
            } else {
                if (empty($this->session->userdata('kelas_id'))) {
                    $this->load->view('guru/kelas', $data);
                } else {
                    $data['siswa'] = $this->Siswa_model->getInfoSiswa($this->session->userdata('kelas_id'));
                    $data['kelas'] = $this->Kelas_model->getInfoKelas($this->session->userdata('kelas_id'));
                    $this->load->view('guru/index', $data);
                }
            }
        }
        $this->load->view('templates/footer');
    }
    public function akun()
    {
        $data['judul'] = 'Halaman Akun Guru';
        $data['link'] = 'Guru';
        $data['id'] = '2';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('guru/akun', $data);
        $this->load->view('templates/footer');
    }
    public function info($id = '')
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['link'] = 'Guru';
        $data['id'] = '2';
        $data['judul'] = 'Info Kelas';
        $data['kelas'] = $this->Kelas_model->getInfoKelas($id);
        $this->load->view('templates/header', $data);
        if ($id == '') {
            redirect('Guru/index');
        } else {
            $this->load->view('guru/detailKelas', $data);
        }
        $this->load->view('templates/footer');
    }
    public function pilih($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Halaman Guru';
        $data['link'] = 'Guru';
        $data['id'] = '2';
        $data['judul'] = 'Info Kelas';
        $this->Kelas_model->updateKelasGuru($id);
    }
    public function ubah()
    {
        $this->Kelas_model->hapusKelas();
        redirect('Guru/kelas');
    }
    public function hapus()
    {
        $this->load->view('guru/hapus');
    }
    public function hapusAkun()
    {
        $this->Guru_model->hapusAkun();
    }
    public function ubahPassword()
    {
        $data['judul'] = 'Ubah Password';
        $data['link'] = 'Guru';
        $data['id'] = '2';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('pass_awal', 'Pass awal', 'trim|required');
        $this->form_validation->set_rules('pass_baru1', 'Pass baru', 'trim|required|min_length[3]|matches[pass_baru2]');
        $this->form_validation->set_rules('pass_baru2', 'Ulangi Pass baru', 'trim|required|min_length[3]|matches[pass_baru1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('guru/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $pass_awal = $this->input->post('pass_awal');
            $pass_baru = $this->input->post('pass_baru1');
            if (!password_verify($pass_awal, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password awal Anda salah!
            </div>');
                redirect('Guru/ubahpassword');
            } else {
                if ($pass_awal == $pass_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password baru tidak boleh sama dengan Password lama!
                </div>');
                    redirect('Guru/ubahpassword');
                } else {
                    $pass_hash = password_hash($pass_baru, PASSWORD_DEFAULT);
                    $this->Guru_model->ubahPassword($pass_hash);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Password berhasil diganti!
                </div>');
                    redirect('Guru/ubahpassword');
                }
            }
        }
    }
}
