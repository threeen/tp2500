<?php
namespace app\index\controller;

use think\Controller;

class Accounts extends Controller
{
    //账号列表
    public function AccountsList()
    {
        return $this->fetch('index/accounts/table');
    }
    //操作记录
    public function operateRecord(){
        return $this->fetch('index/operate/operate_record');
    }
    //在线列表
    public function aliveAccounts(){
        return $this->fetch('index/accounts/alive_accounts');
    }
    //申请送分
    public function applySendScore(){
        return $this->fetch('index/accounts/apply_send_score');
    }
    //已删账号列表
    public function alreadyDel(){
        return $this->fetch('index/accounts/already_del');
    }
    //更改密码
    public function changePass(){
        return $this->fetch('index/accounts/change_pass');
    }
}
