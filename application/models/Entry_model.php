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
            'name'          => $this->input->post('name'),
            'server_id'     => $this->input->post('server_name'),
            'comment'       => $this->input->post('comment'),
            'twitter_id'    => $this->input->post('twitter_id'),
            'birthday_year' => 2016,
            'character_id'  => 5
        ];

        return $this->db->insert('Entry', $data);
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
        return $this->db->delete('Entry');
    }

    /**
     * カウントを+する
     */
    public function add_count()
    {
        $this->db->where('id', $this->input->post('entry_name'));
        $this->db->set('count', 'count+1', false);
        return $this->db->update('Entry');
    }

    /**
     * ランキングを取得
     */
    public function get_runking()
    { 
        $this->db->order_by('count', 'desc');
        $query = $this->db->get('Entry');
        return $query->result_array();
    }


}
