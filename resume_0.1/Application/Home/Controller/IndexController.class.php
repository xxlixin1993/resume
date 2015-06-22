<?php
namespace Home\Controller;
use Think\Controller;
use Admin\Model\BlogModel;
use Admin\Model\PhotoModel;
use Admin\Model\PersonModel;
class IndexController extends Controller {
    /**
     * 显示首页
     */
    public function index(){
        $this->blogIndex();
        $this->photoIndex();
        $this->profileIndex();
        $this->display('index');
    }
    
    
    /**
     * 显示blog首页面
     */
    public function blogIndex(){
        //查询数据
        $blog=new BlogModel();
        $data=$blog->select();
        //遍历数组，显示把blog表中的content从新赋值换行输出
        for($i=0;$i<count($data);$i++){
            //把blog表中的content从新赋值换行输出
            $data[$i]['content']=stripslashes($data[$i]['content']);
        }
        //分配数据到模板
        $this->assign('data',$data);
    }
    
    /**
     * 显示图片页面
     */
    public function photoIndex(){
        //查询数据
        $photo=new PhotoModel();
        $data=$photo->select();
        //分配数据到模板
        $this->assign('photodata',$data);
    }
    
    /**
     * 显示首页简介信息
     */
    public function profileIndex(){
        //查询数据
        $person=new PersonModel();
        $data=$person->find();
        //遍历数组，显示把person表中的内容从新赋值换行输出
        foreach($data as $k=>$v){
           $data[$k]=nl2br($v);
        }
        //分配数据到模板
        $this->assign('profiledata',$data);
    }
}