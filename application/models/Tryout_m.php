<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tryout_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('tryout_event');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['tryout_type_id'] = $post['typeId'];
        $params['tryout_type'] = $post['type'];
        $params['name'] = $post['name'];
        $params['start_date'] = $post['startDate'];
        $params['end_date'] = $post['endDate'];
        $params['provider'] = $post['provider'];
        $params['price'] = $post['price'];
        $params['status'] = $post['status'];
        $params['creator'] = $post['creator'];
        $this->db->insert('tryout_event', $params);
    }


    public function edit($post)
    {
        $params['tryout_type_id'] = $post['typeId'];
        $params['tryout_type'] = $post['type'];
        $params['name'] = $post['name'];
        $params['start_date'] = $post['startDate'];
        $params['end_date'] = $post['endDate'];
        $params['provider'] = $post['provider'];
        $params['price'] = $post['price'];
        $params['status'] = $post['status'];
        $params['creator'] = $post['creator'];
        $this->db->where('id', $post['id']);
        $this->db->update('tryout_event', $params);
    }


    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tryout_event');
    }

   
}
