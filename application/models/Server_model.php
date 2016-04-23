<?php
class Server_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    /**
     * サーバリストを取得
     */
    public function get_server()
    {
        $query = $this->db->get('Server');
        return $query->result_array();
    }
}
