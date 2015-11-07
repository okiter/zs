<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/1
 * Time: 22:06
 */

namespace Admin\Controller;


use Think\Controller;

class CaseController extends BaseController
{

    public function _before_edit_view(){
        $typeModel  = D('Type');
        $types = $typeModel->select();
        $this->assign('types',$types);
    }

}