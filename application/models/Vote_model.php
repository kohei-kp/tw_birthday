<?php
class Vote_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    /**
     * 投票を全て取得
     */
    public function get_vote()
    {
        $query = $this->db->get('Vote');
        return $query->result_array();
    }

    /**
     * 投票する
     */
    public function set_vote()
    {
        $data = [
            'entry_id' => $this->input->post('entry_name'),
            'comment'  => $this->input->post('comment')
        ];

        return $this->db->insert('Vote', $data);
    }

}
