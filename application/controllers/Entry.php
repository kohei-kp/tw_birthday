<?php
defined('BASEPATH') OR exit('Not direct script access allowed');

/**
 * 参加ページのコントローラ
 */
class Entry extends CI_Controller
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
        $this->load->view('common/header', [ 'page_title' => '参加' ]);
        $this->load->view('entry/entry');
        $this->load->view('common/footer');
    }
}
