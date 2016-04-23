<?php
class Entry_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    /**
     * エントリーをすべて取得
     */
    public function get_entry()
    {
        $query = $this->db->get('Entry');
        return $query->result_array();
    }

    /**
     * エントリーする
     */
    public function set_entry()
    {
        $data = [
            'name'    => $this->input->post('name'),
            'server_id' => $this->input->post('server_name'),
            'comment' => $this->input->post('comment')
        ];

        return $this->db->insert('entry', $data);
    }

    /**
     * IDを取得
     */
    public function get_id()
    {
        return $this->db->insert_id();
    }

    /**
     * 削除
     */
    public function delete_entry($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('entry');
    }
}
