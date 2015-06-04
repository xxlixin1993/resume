<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\AdminModel;
class AdminController extends Controller {
    /**
     * 显示登录页面
     */
    public function login(){
        $this->display('login');
    }
    
    /**
     * 检查登录用户
     */
    public function checkLogin(){
 
        //判断表单中的用户名和密码
       if($_POST['submit']){
           $username=$_POST['username'];
           $password=$_POST['password'];
           //保存用户名信息
           session('username',$username);
           //cookie是有作用域的，0表示生命周期为当前浏览器关闭结束，/表示作用域在全局
           setcookie("username",$username,'0','/');
           
           $admin=new AdminModel();
           //到数据库验证用户名和密码
           if($admin->where("username='$username' and password='$password'")->count()>0){
               //跳转到Index/index，空数组，1秒后，显示字符串跳转中。。。
               $this->redirect("Index/index",array(),1,"跳转中...");
           }else{
               $this->error('验证失败','login');
           }
       }else{
           $this->error('验证失败','login');
       }
    }
}