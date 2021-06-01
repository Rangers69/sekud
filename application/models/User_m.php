<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $post['email']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('users');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['email'] = $post['email'];
        $params['name'] = $post['name'];
        $params['password'] = md5($post['password']);
        $params['phone'] = $post['phone'] != "" ? $post['phone'] : null;
        $params['wa'] = $post['wa'];
        $params['type'] = $post['type'];
        $this->db->insert('users', $params);
    }

    public function edit($post)
    {
        $params['email'] = $post['email'];
        $params['name'] = $post['name'];
        if (!empty($post['password'])) {
            $params['password'] = md5($post['password']);
        }
        $params['phone'] = $post['phone'] != "" ? $post['phone'] : null;
        $params['wa'] = $post['wa'] != "" ? $post['wa'] : null;
        $params['type'] = $post['type'];
        $this->db->where('id', $post['id']);
        $this->db->update('users', $params);
    }

    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

   
}
