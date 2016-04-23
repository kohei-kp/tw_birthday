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
        $this->load->model('entry_model');
        $this->load->model('server_model');
    }

    /**
     * 画面表示
     */
    public function index()
    {
        // ヘルパー呼び出し
        $this->load->helper('form');
        $this->load->library('form_validation');

        $server_list = $this->server_model->get_server();

        $data['name'] = '';
        $data['comment'] = '';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('common/header', [ 'page_title' => '参加' ]);
            $this->load->view('entry/entry', [ 'entry_data' => $data, 'server_list' => $server_list]);
            $this->load->view('common/footer');
        }
        else
        {

            // 登録成功すれば、指定位置にファイルアップロード
            if ($this->entry_model->set_entry())
            {
                $id = $this->entry_model->get_id();
                $config['upload_path'] = './entry/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['file_name'] = $id . '.jpg';
                $config['max_width'] = 180;
                $config['max_height'] = 180;
                $this->load->library('upload', $config);

                // アップロード成功したらトップへ
                if (! $this->upload->do_upload('entry-image'))
                {
                    echo $this->upload->display_errors();
                    $this->entry_model->delete_entry($id);
                    $error = ['error' => $this->upload->display_errors()];
                    $this->load->view('common/header', [ 'page_title' => '参加' ]);
                    $this->load->view('entry/entry', [ 'entry_data' => $data, 'server_list' => $server_list ]);
                    $this->load->view('common/footer');
                }
                else
                {
                    $this->load->view('common/header');
                    $this->load->view('top/top');
                    $this->load->view('common/footer');
                }
            }
        }
    }
}
