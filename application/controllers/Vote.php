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
        $this->load->helper('form');

        $entry_list = $this->entry_model->get_entry();

        $this->load->view('common/header', [ 'page_title' => '投票' ]);
        $this->load->view('vote/vote', [ 'show_form_flag' => true, 'entry_list' => $entry_list ]);
        $this->load->view('common/footer');
    }
}
