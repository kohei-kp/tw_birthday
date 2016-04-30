<?php
defined('BASEPATH') OR exit('Not direct script access allowed');

/**
 * ランキングページのコントローラ
 */
class Ranking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('entry_model');
        $this->load->model('vote_model');
    }

    /**
     * 画面表示
     */
    public function index()
    {

        $runking    = $this->entry_model->get_runking();
        $vote_list  = $this->vote_model->get_vote();

        $data = [];
        foreach ($vote_list as $vote)
        {
            $data[$vote['entry_id']][] = $vote['comment'];
        }

        $this->load->view('common/header', [ 'page_title' => 'ランキング' ]);
        $this->load->view('ranking/ranking', [ 'entry_list' => $runking , 'vote_list' => $data ]);
        $this->load->view('common/footer');
    }
}
