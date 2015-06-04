<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\PersonModel;
class PersonController extends Controller {
    /**
     * 显示修改首页信息的页面
     */
    public function edit(){
        //查询数据
        $person=new PersonModel();
        $row=$person->find();
        //分配数据给模板并显示
        $this->assign('row',$row);
        $this->display('showEdit');
    }
    
    /**
     * 实现修改的功能，把修改页面的数据录入数据库
     */
    public function editOk(){
        //判断是否点击了提交
        if(isset($_POST['submit'])){
            //将修改写入数据库
            $person=new PersonModel();
            $data=$person->create();
            if($person->save($data)){
                $this->success('edit success');
            }else{
                $this->error('edit error','edit');
            }
        }else{
            $this->error("plz check your input","edit");
        }
    }
}