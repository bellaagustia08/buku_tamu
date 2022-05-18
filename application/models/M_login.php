<?php
class M_login extends CI_Model
{

    public function cek_login($where)
    {
        return $this->db->get_where('user', $where);
    }

    public function cek_session()
    {
        $status = $this->session->userdata('status');
        if (empty($status)) {
            $this->session->sess_destroy();
            redirect(base_url('login'));
        }
    }
}
