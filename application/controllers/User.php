<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
        check_admin();
	}

	public function index()
	{
		
        $data['row'] = $this->user_m->get();
		$this->template->load('template', 'user/user_data',$data);
	}

    function get_json() {
        $this->datatables->add_column('no','$1','id');
        $this->datatables->select('id,name,email,phone,wa');
        $this->datatables->add_column('action',anchor('user/edit/$1', 'Update', array('class' => 'btn btn-primary btn-xs'))." ".
        anchor('user/del/$1', 'Delete', array('class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm(\'Yakin hapus data?\')')), 'id');
        $this->datatables->from('users');
        return print_r($this->datatables->generate());

    }
	public function add()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]');
        $this->form_validation->set_rules('wa', 'WA', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');

		$this->form_validation->set_message('required','%s belum terisi');
		$this->form_validation->set_message('min_length','{field} minimal 5 karaktek');


        $this->form_validation->set_error_delimiters('<span class="is-invalid">', '</span>'); //untuk tex error merah di semua field

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'user/user_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) {
              $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            }
            echo "<script>window.location='" . base_url('user') . "';</script>";
        }
	}

    public function edit($id)
	{
        $this->form_validation->set_rules('email', 'Email', 'required|callback_username_check');
        $this->form_validation->set_rules('name', 'Name', 'required');

        if($this->input->post('password')) {
        $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]');
        }

        if($this->input->post('passconf')) {
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]');
        }

        $this->form_validation->set_rules('wa', 'WA', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');

		$this->form_validation->set_message('required','%s belum terisi');
		$this->form_validation->set_message('min_length','{field} minimal 5 karaktek');


        $this->form_validation->set_error_delimiters('<span class="is-invalid">', '</span>'); //untuk tex error merah di semua field

        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_form_edit', $data);
            } else {
                echo "<script> alert('Data tidak ditemukan');";
                echo "window.location='" . base_url('user') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil diubah');
            }
            echo "<script>window.location='" . base_url('user') . "';</script>";
        }
	}

    public function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM users WHERE email = '$post[email]' AND id != '$post[id]' ");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
            return FALSE;
        } else {
            return TRUE;
        }
    }

	public function del($id)
    {
        $this->user_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        echo "<script>window.location='" . base_url('user') . "';</script>";
    }
}
