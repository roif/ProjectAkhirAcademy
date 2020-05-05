<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $data['link'] = 'Home';
        $data['id'] = '';
        $this->load->view('templates/header', $data);
        if (empty($this->session->userdata('level_id'))) {
            $this->load->view('home/index');
        } else {
            if ($this->session->userdata('level_id') == 1) {
                redirect('Siswa');
            } else {
                redirect('Guru');
            }
        }
    }

    public function info($id = "")
    {
        $data['link'] = 'Home';
        $data['judul'] = 'Halaman Info';
        $data['id'] = '';
        $this->load->view('templates/header', $data);
        if ($id == null) {
            $data['kelas'] = $this->Kelas_model->getAllKelas();
            $this->load->view('home/matinfo', $data);
        } else {
            $data['kelas'] = $this->Kelas_model->getInfoKelas($id);
            $this->load->view('home/kelas', $data);
        }
        $this->load->view('templates/footer', $data);
    }

    public function register($level = '')
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini telah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $data['level'] = $level;
        if ($this->form_validation->run() == false) {
            $this->load->view('register/register_header', $level);
            if ($level == '' || $level == 'Siswa') {
                $this->load->view('register/index_siswa', $level);
            } else {
                $this->load->view('register/index_guru', $level);
            }
            $this->load->view('register/register_footer', $level);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'gambar' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'level_id' => $this->input->post('level', true),
                'donasi_id' => null,
                'kelas_id' => null,
            ];
            $this->Home_model->tambahDataUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! akun Anda berhasil ditambahkan
            </div>');
            redirect('Home/login');
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Login';
            $this->load->view('login/index');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //user ada
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id_user' => $user['id_user'],
                    'email' => $user['email'],
                    'kelas_id' => $user['kelas_id'],
                    'level_id' => $user['level_id'],
                ];
                $this->session->set_userdata($data);
                if ($user['level_id'] == 1) {
                    redirect('Siswa');
                } else {
                    redirect('Guru');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password Anda salah!
                </div>');
                redirect('Home/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar
            </div>');
            redirect('Home/login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('kelas_id');
        $this->session->unset_userdata('level_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Anda telah keluar!
            </div>');
        redirect('Home/login');
    }
}
