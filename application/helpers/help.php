<?php
function userdata($field)
{
    $ci = get_instance();
    $ci->load->model('M_crud');

    $userId = $ci->session->userdata('login_session')['tb_user'];
    return $ci->admin->get('tb_user', ['email' => $userId])[$field];
}