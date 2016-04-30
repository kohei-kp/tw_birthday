<?php
defined('BASEPATH') OR exit('Not direct script access allowed');

/**
 * 投票ページのコントローラ
 */
class Vote extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('entry_model');
        $this->load->model('server_model');
        $this->load->model('vote_model');
    }

    /**
     * 画面表示
     */
    public function index()
    {
        // ヘルパー呼び出し
        $this->load->helper('form');
        $this->load->library('form_validation');

        $entry_list = $this->entry_model->get_entry();

        $comment = '';

        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('common/header', [ 'page_title' => '投票' ]);
            $this->load->view('vote/vote', [
                'show_form_flag' => false,
                'entry_list'     => $entry_list,
                'comment'        => $comment
            ]);
            $this->load->view('common/footer');
        }
        else
        {
            // DB登録
            if ($this->vote_model->set_vote() && $this->entry_model->add_count())
            {
                // とりあえずTOPへ
                $this->load->view('common/header');
                $this->load->view('top/top');
                $this->load->view('common/footer');
            }
        }
    }
}
