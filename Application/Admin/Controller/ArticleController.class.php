<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
    	 $this->display();
    }
	
    public function artadd(){

		$this->assign('title',"我要投稿");
    	$this->display();
    }
	
	public function login(){

		$this->display();
    }
    
	public function catlist(){

        $art_class = M('art_class');

        if (IS_POST) {
            $data = I("post.");
            $msg  = "未知错误！";
            if ($data['submit'] == 'new') {
                $r = $art_class->add($data);
                $msg = $r ? "添加分类成功" : "添加分类失败";
            } elseif ($data['submit'] == 'edit') {
                $r = $art_class->where("classid = '$data[classid]'")->save($data);
                $msg = $r ? "恭喜你，修改成功" : "对不起，修改失败";
            }

            $this->redirect('Article/catlist', array(), 3, $msg);
            return;
        }

        $list = $art_class->field('classid,parentid,classname,classorder')->select();
        $list = self::cattree($list);
        $this->assign('list',$list);
        $this->assign('title',"分类管理");
        $this->display();
    }

    public function catedit ($id = 0) {
        $cat = M("art_class");
        if(!$id) {  //新增
            $this->assign('act','new');
        } else {    //修改
            $catinfo = $cat->where("classid = '$id'")->find();
            $this->assign('cat',$catinfo);
            $this->assign('act','edit');
        }
        $catlist = $cat->field('classid,parentid,classname,classorder')->order('parentid,classorder desc')->select();
        $cattree = self::cattree($catlist);
        $this->assign('cattree',$cattree);
        $this->display();
    }

    public  function  catdel ($id = 0) {
        if ($id){
            $r = M("art_class")->delete($id);
            if ($r) {
                $this->success("删除成功");
            } else {
                $this->error("删除失败");
            }
        } else {
            $this->error("参数错误！");
        }
    }

    public function cattree ($arr,$pid = 0,$c = "├")
    {
        $rq = array();
        if ($pid == 0) {
            $b = "";
        } else {
            $c = $c . "──";
            $b = "┴";
        }
        foreach ($arr as $key => $info) {

            if ($info['parentid'] == $pid) {

                $info['classname'] = $c . $b . $info['classname'];
                $rq[] = $info;

                unset($arr[$key]);
                $rq = array_merge($rq,self::cattree ($arr,$info['classid'],$c));
            }


        }

        return $rq;
    }


}