<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('tryout_package');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['id'] = $post['id'];
        $params['tryout_id'] = $post['tryoutId'];
        $params['test_package_id'] = $post['packageID'];
        $params['status'] = $post['status'];
        $params['creator'] = $post['creator'];
     
        $this->db->insert('tryout_package', $params);
    }


    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tryout_package');
    }

   
}
