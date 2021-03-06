<?php
namespace App\Controller;

class HelloController extends AppController{
    public function initialize(){
        $this->viewBuilder()->Layout('Hello');
        $this->set('msg', 'Hello/index');
        $this->set('footer', 'Hello/footer2');
    }

    public function index(){
        $str = $this->request->query['text1'];
        $result = "";
        if($str != ""){
            $result = "you type: " . $str;
        }
        else{
            $result = "empty.";
        }
        $this->set("result", $result);
    }
}