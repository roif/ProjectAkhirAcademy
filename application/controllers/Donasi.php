<?php
class Donasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index($id = '')
    {
        if ($id == '') {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Silahkan login terlebih dahulu untuk melakukan Donasi!
                </div>');
            redirect('Home');
        }
    }
}
