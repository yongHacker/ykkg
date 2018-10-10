<?php

// +----------------------------------------------------------------------
// | 新闻中心管理
// +----------------------------------------------------------------------

namespace Content\Controller;

use Common\Controller\AdminBase;
use Libs\Util\Page;

class VideoController extends AdminBase {
    //列表页
    public function index(){
        $p = I('page') ? I('page')-1 : 0;
        $counts = M('video')->where('deleted=0')->count();
        $page = new Page($counts,20);
        $limit = "$p,$page->Page_size";
        $show = $page->show('Admin');
        $list = M('video')->where('deleted=0')->limit($limit)->order('id desc')->select();

        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }
    //添加页
    public function add(){
        if (IS_POST){
            $data = I('post.');
            $data['create_time'] = time();
            $res = M('video')->add($data);
            if ($res){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }else{
            $this->display();
        }


    }
    //编辑页
    public function edit(){
        if (IS_POST){
            $data = I('post.');
            $data['update_time'] = time();
            $res = M('video')->where(array('id'=>$data['id']))->save($data);
            if($res){
                $this->success('修改成功');
            }else{
                $this->error('修改失败,请重试');
            }
        }else{
            $id = I('id');
            $data = M('video')->where(array('id'=>$id))->find();

            $this->assign('data',$data);
            $this->display();
        }

    }
    //删除
    public function deleted(){
        $id = I('id');
        $res = M('video')->where(array('id'=>$id))->save(array('deleted'=>1));
        if ($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

}
