<?php

function check_already_login()
{
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id');
    if ($user_session) {
        redirect('dashboard');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id');
    if (!$user_session) {
        redirect('auth');
    }
}


function check_admin()
{
    $ci = &get_instance();
    if ($ci->fungsi->user_login()->type != 99) {
        redirect('dashboard');
    }
}