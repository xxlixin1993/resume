<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    /**
     * 显示后台主页
     */
    public function index(){
        // 判断是否登录过，还是直接访问的URL
        if(empty($_SESSION['username'])){
            header("Content-type:text/html;charset=utf-8");
            $this->redirect('Admin/login',array(),2,'跳转到登录页面...');
        }
        $this->display('index');
    }
}