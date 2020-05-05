<?php
class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->model('Siswa_model');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['judul'] = 'Halaman Home Siswa';
        $data['link'] = 'Siswa';
        $data['id'] = '1';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        if (empty($this->session->userdata('level_id'))) {
            redirect('Home');
        } else {
            if ($this->session->userdata('level_id') == 1) {
                if (empty($this->session->userdata('kelas_id'))) {
                    $this->load->view('siswa/index', $data);
                } else {
                    $data['kelas'] = $this->Kelas_model->getInfoKelas($this->session->userdata('kelas_id'));
                    $this->load->view('siswa/indexAda', $data);
                }
            } else {
                redirect('Guru');
            }
        }
        $this->load->view('templates/footer');
    }

    public function akun()
    {
        $data['judul'] = 'Halaman Akun Siswa';
        $data['link'] = 'Siswa';
        $data['id'] = '1';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('siswa/akun', $data);
        $this->load->view('templates/footer');
    }

    public function info($id = "")
    {
        $data['judul'] = 'Halaman Info';
        $data['link'] = 'Siswa';
        $data['id'] = '1';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        if ($id == null) {
            $data['kelas'] = $this->Kelas_model->getAllKelas();
            $this->load->view('siswa/matinfo', $data);
        } else {
            $data['kelas'] = $this->Kelas_model->getInfoKelas($id);
            $this->load->view('siswa/kelas', $data);
        }
        $this->load->view('templates/footer', $data);
    }

    public function daftar($id = null)
    {
        $this->Kelas_model->updateKelas($id);
    }
    public function hapus()
    {
        $this->Kelas_model->hapusKelas();
    }
    public function warning()
    {
        $this->load->view('siswa/hapus');
    }
    public function hapusAkun()
    {
        $this->Siswa_model->hapusAkun();
    }
    public function ubah()
    {
        $data['judul'] = 'Ubah Password';
        $data['link'] = 'Siswa';
        $data['id'] = '1';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('pass_awal', 'Pass awal', 'trim|required');
        $this->form_validation->set_rules('pass_baru1', 'Pass baru', 'trim|required|min_length[3]|matches[pass_baru2]');
        $this->form_validation->set_rules('pass_baru2', 'Ulangi Pass baru', 'trim|required|min_length[3]|matches[pass_baru1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('siswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $pass_awal = $this->input->post('pass_awal');
            $pass_baru = $this->input->post('pass_baru1');
            if (!password_verify($pass_awal, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password awal Anda salah!
            </div>');
                redirect('Siswa/ubah');
            } else {
                if ($pass_awal == $pass_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password baru tidak boleh sama dengan Password lama!
                </div>');
                    redirect('Siswa/ubah');
                } else {
                    $pass_hash = password_hash($pass_baru, PASSWORD_DEFAULT);
                    $this->Siswa_model->ubahPassword($pass_hash);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Password berhasil diganti!
                </div>');
                    redirect('Siswa/ubah');
                }
            }
        }
    }
}
