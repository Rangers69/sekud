<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tryout extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
        check_admin();
	}

	public function index()
	{
		
        $data['row'] = $this->tryout_m->get();
		$this->template->load('template', 'tryout/tryout_data',$data);
	}

	function get_json() {
        $this->datatables->add_column('no','$1','id');
        $this->datatables->select('id,name,tryout_type,start_date,end_date,price');
        $this->datatables->add_column('action',anchor('tryout/edit/$1', 'Update', array('class' => 'btn btn-primary btn-xs'))." ".
        anchor('tryout/del/$1', 'Delete', array('class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm(\'Yakin hapus data?\')')), 'id');
        $this->datatables->from('tryout_event');
        return print_r($this->datatables->generate());

    }


	public function add()
	{
		$this->form_validation->set_rules('typeId', 'Tryou Id', 'required');
		$this->form_validation->set_rules('type', 'Tryou Type', 'required');
		$this->form_validation->set_rules('name', 'Judul', 'required');
		$this->form_validation->set_rules('startDate', 'Tanggal Mulai', 'required');
		$this->form_validation->set_rules('endDate', 'Tanggal Berkahir', 'required');
		$this->form_validation->set_rules('provider', 'Provider', 'required');
		$this->form_validation->set_rules('price', 'Harga', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('creator', 'Creator', 'required');

		$this->form_validation->set_message('required','%s belum terisi');
		$this->form_validation->set_message('min_length','{field} minimal 5 karaktek');


        $this->form_validation->set_error_delimiters('<span class="is-invalid">', '</span>'); //untuk tex error merah di semua field

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'tryout/tryout_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->tryout_m->add($post);
            if ($this->db->affected_rows() > 0) {
              $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            }
            echo "<script>window.location='" . base_url('tryout') . "';</script>";
        }
	}

    public function edit($id)
	{
        $this->form_validation->set_rules('typeId', 'Tryou Id', 'required');
		$this->form_validation->set_rules('type', 'Tryou Type', 'required');
		$this->form_validation->set_rules('name', 'Judul', 'required');
		$this->form_validation->set_rules('startDate', 'Tanggal Mulai', 'required');
		$this->form_validation->set_rules('endDate', 'Tanggal Berkahir', 'required');
		$this->form_validation->set_rules('provider', 'Provider', 'required');
		$this->form_validation->set_rules('price', 'Harga', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('creator', 'Creator', 'required');

		$this->form_validation->set_message('required','%s belum terisi');
		$this->form_validation->set_message('min_length','{field} minimal 5 karaktek');


        $this->form_validation->set_error_delimiters('<span class="is-invalid">', '</span>'); //untuk tex error merah di semua field

        if ($this->form_validation->run() == FALSE) {
            $query = $this->tryout_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'tryout/tryout_form_edit', $data);
            } else {
                echo "<script> alert('Data tidak ditemukan');";
                echo "window.location='" . base_url('tryout') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->tryout_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil diubah');
            }
            echo "<script>window.location='" . base_url('tryout') . "';</script>";
        }
	}


	public function del($id)
    {
        $this->tryout_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        echo "<script>window.location='" . base_url('tryout') . "';</script>";
    }
}
