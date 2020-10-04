<?php
class Pages extends CI_Controller {

    //viewメソッドの第二引数はviewに渡すデータを入れる
    public function view($page = 'home')
    {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                // おっと、そのページはありません！
                show_404();
            }
            //view上の$titleを定義している
            $data['title'] = ucfirst($page); // 頭文字を大文字に
    
            //viewは表示順にロードしなければいけない
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
    }
}