<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\PhotoModel;
class PhotoController extends Controller {
    /**
     * 显示图片管理页面
     */
    public function showPhoto(){
        $photo=new PhotoModel();
        //计算共有多少条数据
        $count=$photo->count();
        //实例化Page类，   一页显示多少条
        $page=new \Think\Page($count,10);
        //获得分页导航条
        $show=$page->show();
        //查询当前页所有数据
        $data=$photo->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('show',$show);
        $this->assign('data',$data);
        $this->display('managePhoto');
    }
    
    /**
     * 实现删除功能
     */
    public function deleteAll(){
        //判断是否有选择要删除的数据
        if(isset($_POST['id'])){
            $photo=new PhotoModel();
            //接收要删除的id二维数组
            $id=$_POST['id'];
            //把id数组转成用，隔开的字符串
            $data=implode(',', $id);
            //删除数据并判断是否成功
            if($photo->delete($data)){
                $this->success('delete success','showPhoto');
            }else{
                $this->error('delete error','showPhoto');
            }
        }else{
            $this->error('plz select something','showPhoto');
        }
    }
    
    /**
     * 显示图片上传页面
     */
    public function showPhotoAdd(){    
            $photo=new PhotoModel();
            $res=$photo->select();
            $this->assign('res',$res);
            $this->display('addPhoto');
    }
    

    
    /**
     * 实现图片上传功能
     */
    public function upload(){
        // 实例化上传类
        $upload = new \Think\Upload();
        // 设置附件上传大小
        $upload->maxSize=3145728;
        // 设置附件上传类型
        $upload->exts=array('jpg', 'gif', 'png', 'jpeg');
        // 设置附件上传目录
        $upload->savePath='./Public/Uploads/'; 
    
        // 上传文件
        $info=$upload->upload();
        if(!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
            exit();
        }else{
            //上传成功
            //组合pname
            $_POST['pname']=$info['pname']['savepath'].$info['pname']['savename'];
            //先判断表单内容是否为空
            if(isset($_POST['classes'])&&isset($_POST['pname'])&&isset($_POST['submit'])){
                //接收表单中的内容
                $photo=new PhotoModel();
                $data=$photo->create();
                //把表单内容放入数据库中
                $res = $photo->add($data);
                //判断添加是否成功
                if($res){
                    //成功跳转到showPhoto
                    $this->success('add success','showPhoto');
                }else{
                    //失败跳转到showPhoto
                    $this->success('add error','showPhoto');
                }
            }else{
                $this->error('plz input full','showPhoto');
            }
        }    
    }
    
    
    
    
}