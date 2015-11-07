<?php


/**
 * 显示Model的错误信息
 * @param $model
 * @return string
 */
function showModelError($model)
{
    $errors = $model->getError();
    if(empty($errors)){  //没有错误信息下面的代码不需要执行
        return '';
    }
    $errorInfo = '<ul>';
    if (is_array($errors)) {
        foreach ($errors as $error) {
            $errorInfo .= "<li>{$error}</li>";
        }
    } else {
        $errorInfo .= "<li>{$errors}</li>";
    }
    $errorInfo .= '</ul>';
    return $errorInfo;
}

if(!function_exists('array_column')){
    /**
     * 取出二维数组中一列的值
     * @param $rows   二维数组
     * @param $column_name   一列的名字
     * @return array
     */
   function array_column($rows,$column_name){
       $temp = array();
        foreach($rows as $row){
            $temp[] =  $row[$column_name];
        }
       return $temp;
   }
}


/**
 * 将数组连接起来
 * @param $arr
 * @param string $limit
 */
function arr2str($arr,$limit = ','){
     return implode($limit,$arr);
}

/**
 * 字符串变为数组
 * @param $str
 * @param string $limit
 */
function str2arr($str,$limit = ','){
    return explode($limit,$str);
}


/**
 * 将传入的数据生成一个下拉列表的html.
 * @param $name  下拉列表的名字
 * @param $rows  下拉列表中的数据
 * @param $defaultValue  默认选中的值
 * @param $valueField  需要指定的列表的名字作为  下拉框的值
 * @param $textField  需要指定的列表的名字作为  下拉框的文本内容
 */
function arr2select($name,$rows,$defaultValue='',$valueField='id',$textField='name'){
    $select_html = "<select name='{$name}' class='{$name}'>";
          $select_html.="<option value=''>--请选择--</option>";
           foreach($rows as $row){

               //选中默认的
               $selected = '';
                if($row[$valueField]==$defaultValue){
                    $selected = "selected='selected'";
                }
               //输出option
                $select_html.="<option {$selected}  value='{$row[$valueField]}'>{$row[$textField]}</option>";
           }
    $select_html .= "</select>";
    echo $select_html;
}


function myMd5($str,$salt){
    return md5($str.md5($salt));
}

/**
 * 和用户相关的函数
 */

function login($userinfo=null){
    if(!empty($userinfo)){
        session('USERINFO',$userinfo);
    }else{
        return  session('USERINFO');
    }
}

/**
 * 判断用户是否登录
 * @return bool
 */
function isLogin(){
    return login()!=null;
}

/**
 * 退出登录
 */
function logout(){
    session('USERINFO',null);
    session('URLS',null);
    session('PERMISSION_IDS',null);
}

/**
 * 保存用户权限的URL
 * @param null $urls
 * @return mixed
 */
function savePermissionURL($urls=null){
    if(!empty($urls)){
        session('URLS',$urls);
    }else{
        return  session('URLS');
    }
}
/**
 * 保存用户权限的ID
 * @param null $ids
 * @return mixed
 */
function savePermissionId($id=null){
    if(!empty($id)){
        session('PERMISSION_IDS',$id);
    }else{
        return  session('PERMISSION_IDS');
    }
}