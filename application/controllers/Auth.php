<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		check_already_login();
        $this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
        if (isset($post['tombol'])) {
			$query = $this->user_m->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'id' => $row->id,
					'type' => $row->type,
					'name' => $row->names
				);
				$this->session->set_userdata($params);
				$this->session->set_flashdata('success', 'Selamat Anda berhasil login');
				redirect('dashboard');
              
			} else {
				echo " <script>
                alert('Login gagal, email / password salah');
                window.location='" . base_url('auth') . "';
                </script>";
			}
		}
	}

	public function logout()
    {
        $params = array('id',  'type');
        $this->session->unset_userdata($params);
        redirect('auth');
    }
}
