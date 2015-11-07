<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/1
 * Time: 22:00
 */

namespace Admin\Controller;


use Think\Controller;

class SysconfigController extends Controller
{


    public function site(){
        $model  = M('Sysconfig');
        if(IS_POST){
            $_POST['id'] = 1;
            $model->create();
            $model->save();
            $this->success('保存成功!');
        }else{
           $row =  $model->find(1);
           $this->assign($row);
           $this->display('site');
        }
    }





    public function contact(){
        $model  = M('Sysconfig');
        if(IS_POST){
            $_POST['id'] = 1;
            $model->create();
            $model->save();
            $this->success('保存成功!');
        }else{
           $row =  $model->find(1);
           $this->assign($row);
           $this->display('contact');
        }
    }


    public function about(){
        $model  = M('Sysconfig');
        if(IS_POST){
            $_POST['id'] = 1;
            $model->create();
            $model->save();
            $this->success('保存成功!');
        }else{
           $row =  $model->find(1);
           $this->assign($row);
           $this->display('about');
        }
    }





}