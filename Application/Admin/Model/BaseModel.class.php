<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/21
 * Time: 14:06
 */

namespace Admin\Model;


use Think\Model;
use Think\Page;

/**
 * 设置为abstract主要是被子类继承而不直接创建对象
 * Class BaseModel
 * @package Admin\Model
 */
abstract class BaseModel extends Model
{
    // 是否批处理验证
    protected $patchValidate = true;

    /**
     * 查询出需要在列表中显示的数据
     * @return mixed
     */
    public function getList($field='*',$wheres=array())
    {

        //准备排序
        $orders = array();
        if(in_array('sort',$this->getDbFields())){
            $orders['sort'] = 'asc';
        }

        //准备查询条件
        if(in_array('status',$this->getDbFields())){  //如果当前表中有status字段时
            $wheres['status'] = array('gt', -1);
        }
        return $this->field($field)->order($orders)->where($wheres)->select();
    }

    /**
     * 根据id改变一行数据为status的状态值
     * @param $id
     * @param $status
     * @return bool
     */
    public function changeStatus($id, $status)
    {
        $data = array('id' => array('in',$id));
        $this->where($data);
        return parent::delete();
    }

    /**
     * 返回分页所需要的数据:
     *  * 分页数据:
     * array(
        * rows=>分页列表中的数据
     *  pageHtml=>'分页工具条'
     * )
     *
     * @param $wheres array  查询条件
     */
    public function getPageResult($wheres = array())
    {
        //过滤没有被删除的数据
        if(in_array('status',$this->getDbFields())){  //如果当前表中有status字段时
            $wheres['obj.status'] = array('gt', -1);
        }

        //>>1.提供$pageHtml的值
        $count = $this->alias('obj')->where($wheres)->count();
        $pageSize = C('PAGE_SIZE')==null? 10 : C('PAGE_SIZE');
        $page = new Page($count, $pageSize);
        //当总条数大于每页多少条时再显示总条数
        if ($page->totalRows > $page->listRows) {
            $page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        }
        $pageHtml = $page->show();
        //>>2.提供$rows的值,当前页的数据
        $orders = array();
        if(in_array('sort',$this->getDbFields())){
            $orders['obj.sort'] = 'asc';
        }

        $this->_setModel();

        $rows = $this->alias('obj')->order($orders)->limit($page->firstRow, $page->listRows)->where($wheres)->select();
        //对rows进一步处理
        $this->_handleRows($rows);
        return array('rows' => $rows, 'pageHtml' => $pageHtml);
    }

    /**
     * 该方法主要是被子类覆盖.
     */
    protected function _setModel(){

    }


    /**该方法主要是被子类覆盖,修改rows中的数据
     * @param &$rows , 必须使用引用
     */
    protected function _handleRows(&$rows){

    }



}