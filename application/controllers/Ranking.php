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
    }

    /**
     * 画面表示
     */
    public function index()
    {
        $this->load->view('common/header', [ 'page_title' => 'ランキング' ]);
        $this->load->view('ranking/ranking');
        $this->load->view('common/footer');
    }
}
