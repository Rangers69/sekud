<?php
defined('BASEPATH') or exit('No direct script access allowed');

class school_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('schools_detail');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

  
    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('schools_detail');
    }

   
}
