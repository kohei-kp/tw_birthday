<?php
defined('BASEPATH') OR exit('Not direct script access allowed');

/**
 * Topページのコントローラ
 */
class Top extends CI_Controller
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
        $this->load->view('common/header');
        $this->load->view('top/top');
        $this->load->view('common/footer');
    }

}
