<?php
namespace app\index\controller;

use think\Controller;

class Agent extends Controller
{
    public function add_agent()
    {
        return $this->fetch('index/agent/add_agent');
    }
    public function  add_tuiguanhao(){
        return $this->fetch('index/agent/add_tuiguanhao');
    }
    public function all_accounts(){
        return $this->fetch('index/agent/all_accounts');
    }
}
