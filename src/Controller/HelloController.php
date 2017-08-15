<?php
namespace App\Controller;

class HelloController extends AppController{
    public function initialize(){
        $this->name = 'Hello';
        $this->viewBuilder()->autoLayout(true);
        $this->viewBuilder()->Layout('Hello');
    }

    public function index(){
        $this->set('msg', 'ヘッダーエレメント！！');
        $n = rand(1,2);
        $this->set('footer', 'Hello/footer' . $n);
    }
}