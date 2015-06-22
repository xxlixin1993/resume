<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\BlogModel;
use Admin\Model\ClassifyModel;
class BlogController extends Controller {
    /**
     * 显示发表博文页面
     */
    public function showAddBlog(){
        //查询分类信息
        $cla=new ClassifyModel();
        $data=$cla->select();
        //把分类数据发送给addBlog.html
        $this->assign("data",$data);
        $this->display('addBlog');
    }
    
    /**
     * 把addBlog页面提交的表单，写入数据库
     */
    public function add(){
        //先判断表单内容是否为空
        if(isset($_POST['title'])&&isset($_POST['content'])&&isset($_POST['classifyid'])){
            //接收表单中的内容
            $blog=new BlogModel();
            
            $_POST['content']= addslashes($_POST['content']);

            $data=$blog->create();
            //把表单内容放入数据库中
            $res = $blog->add($data);
            //判断添加是否成功
            if($res){
                //成功跳转到manageBlog
                $this->success('add success','showManBlog');
            }else{    
                //失败跳转到manageBlog
                $this->success('add error','showManBlog');
            }
        }else{
            $this->error('plz input full','showManBlog');
        }
    }
    
    /**
     * 把数据库中的信息显示到管理blog页面上
     * 并显示管理博文页面
     */
    public function showManBlog(){
        $blog=new BlogModel();
        //计算共有多少条数据
        $count=$blog->count();
        //实例化Page类，   一页显示多少条
        $page=new \Think\Page($count,10);
        //获得分页导航条
        $show=$page->show();
        //查询当前页所有数据
        $data=$blog->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('show',$show);
        $this->assign('data',$data);
        $this->display('manageBlog');

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
            $blog=new BlogModel();
            $row=$blog->where("id=$id")->find();
            //$row=stripslashes($row['content']);
            // echo stripslashes($row['content']);
            // echo "<pre>";var_dump($row);
            //查询classify表中的所有分类显示给edit.html可供修改
            $cla=new ClassifyModel();
            $data=$cla->select();
            
            //把数据分配给edit.html并显示
            $this->assign('row',$row);
            $this->assign('data',$data);
            $this->display('edit');
        }else{
            $this->error('plz select something','showManBlog');
        }
    }
    
    /**
     * 验证修改信息，实现数据修改并写入数据库
     */
    public function editOk(){
        //判断是否输入了修改的信息
        if(isset($_POST['title'])&&isset($_POST['content'])&&isset($_POST['classifyid'])){
            //接收id
            $id=$_POST['id'];
            //将修改写入数据库
            $blog=new BlogModel();
            $data=$blog->create();
            if($blog->save($data)){
                $this->success('edit success','showManBlog');
            }else{
                $this->error('edit error','showManBlog');
            }
        }else{
            $this->error("plz check your input","showManBlog");
        }
    }
    
    /**
     * 实现删除blog的功能
     */
    public function deleteAll(){
        //判断是否有选择要删除的数据
        if(isset($_POST['id'])){
            $blog=new BlogModel();
            //接收要删除的id二维数组
            $id=$_POST['id'];
            //把id数组转成用，隔开的字符串
            $data=implode(',', $id);
            //删除数据并判断是否成功
            if($blog->delete($data)){
                $this->success('delete success','showManBlog');
            }else{
                $this->error('delete error','showManBlog');
            }
        }else{
            $this->error('plz select something','showManBlog');
        }
    }
}