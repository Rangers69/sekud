<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
        check_admin();
	}

	public function index()
	{
		
        $data['row'] = $this->package_m->get();
		$this->template->load('template', 'package/package_data',$data);
	}

    function get_json() {
        $this->datatables->add_column('no','$1','id');
        $this->datatables->select('id,tryout_id,test_package_id,status,creator');
        $this->datatables->add_column('action',anchor('package/edit/$1', 'Update', array('class' => 'btn btn-primary btn-xs'))." ".
        anchor('package/del/$1', 'Delete', array('class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm(\'Yakin hapus data?\')')), 'id');
        $this->datatables->from('tryout_package');
        return print_r($this->datatables->generate());

    }

    public function add()
	{
		$this->form_validation->set_rules('id', 'ID', 'required|is_unique[tryout_package.id]');
		$this->form_validation->set_rules('tryoutId', 'Tryou Id', 'required');
		$this->form_validation->set_rules('packageID', 'Package Id', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('creator', 'Creator', 'required');

		$this->form_validation->set_message('required','%s belum terisi');
        $this->form_validation->set_message('is_unique','%s sudah terpakai, silahkan ganti!!');


        $this->form_validation->set_error_delimiters('<span class="is-invalid">', '</span>'); //untuk tex error merah di semua field

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'package/package_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->package_m->add($post);
            if ($this->db->affected_rows() > 0) {
              $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            }
            echo "<script>window.location='" . base_url('package') . "';</script>";
        }
	}


	public function del($id)
    {
        $this->package_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        echo "<script>window.location='" . base_url('package') . "';</script>";
    }
}
