<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\ClassifyModel;
class ClassifyController extends Controller{
    /**
     * 显示管理分类页面
     */
    public function showCla(){
        //查询classify表中的数据
        $cla=new ClassifyModel();
        $count=$cla->count();
        //实例化Page类，   一页显示多少条
        $page=new \Think\Page($count,10);
        //获得分页导航条
        $show=$page->show();
        //查询当前页所有数据
        $data=$cla->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('show',$show);
        $this->assign('data',$data);
        $this->display('manageCla');
    }
    
    /**
     * 显示添加分类页面
     */
    public function showAddCla(){
        $this->display("addCla");
    }
    
    /**
     * 实现添加分类数据到数据库
     */
    public function add(){
        //先判断表单内容是否为空
        if(isset($_POST['id'])&&isset($_POST['value'])){
            //接收表单中的内容
            $cla=new ClassifyModel();
            $data=$cla->create();
            //把表单内容放入数据库中
            $res = $cla->add($data);
            //判断添加是否成功
            if($res){
                //成功跳转到manageBlog
                $this->success('add success','showCla');
            }else{    
                //失败跳转到manageBlog
                $this->success('add error','showCla');
            }
        }else{
            $this->error('plz input full','showCla');
        }
    }
    
    /**
     * 删除分类信息
     */
    public function deleteAll(){
        //判断是否有选择要删除的数据
        if(isset($_POST['id'])){
            $cla=new ClassifyModel();
            //接收要删除的id二维数组
            $id=$_POST['id'];
            //把id数组转成用，隔开的字符串
            $data=implode(',', $id);
            //删除数据并判断是否成功
            if($cla->delete($data)){
                $this->success('delete success','showCla');
            }else{
                $this->error('delete error','showCla');
            }
        }else{
            $this->error('plz select something','showCla');
        }
    }
    
    /**
     * 显示修改页面
     */
    public function edit(){
        //判断是否有选择要修改的数据
        if(isset($_GET['id'])){
            //接收由URL传过来的id
            $id=$_GET['id'];
            //去数据库查询指定id的那一条数据
            $cla=new ClassifyModel();
            $row=$cla->where("id=$id")->find();
            //把数据分配给edit.html并显示
            $this->assign('row',$row);
            $this->display('edit');
        }else{
            $this->error('plz select something','showCla');
        }
    }
    
    /**
     * 验证修改信息，实现数据修改并写入数据库
     */
    public function editOk(){
        //判断是否输入了修改的信息
        if(isset($_POST['id'])&&isset($_POST['value'])){
            //接收id
            $id=$_POST['id'];
            //将修改写入数据库
            $cla=new ClassifyModel();
            $data=$cla->create();
            if($cla->save($data)){
                $this->success('edit success','showCla');
            }else{
                $this->error('edit error','showCla');
            }
        }else{
            $this->error("plz check your input","showCla");
        }
    }
    
    
    
}