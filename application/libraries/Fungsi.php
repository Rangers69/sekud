<?php

class Fungsi
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $id = $this->ci->session->userdata('id');
        $user_data = $this->ci->user_m->get($id)->row();
        return $user_data;
    }

    

   
}
