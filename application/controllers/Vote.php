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
    }

    /**
     * 画面表示
     */
    public function index()
    {
        $this->load->view('common/header', [ 'page_title' => '投票' ]);
        $this->load->view('vote/vote');
        $this->load->view('common/footer');
    }
}
