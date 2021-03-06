<?php
defined('SRC_URL') or define('SRC_URL','http://www.zs.com');
return array(
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING'  =>array(
        '__CSS__' => SRC_URL.'/Public/Admin/css', // 更改默认的/Public 替换规则
        '__JS__' => SRC_URL.'/Public/Admin/js', // 更改默认的/Public 替换规则
        '__IMG__' => SRC_URL.'/Public/Admin/images', // 更改默认的/Public 替换规则
        '__UEDITOR__' => SRC_URL.'/Public/Admin/ueditor', // ztree的路径
        '__UPLOADIFY__' => SRC_URL.'/Public/Admin/uploadify', // 更改默认的/Public 替换规则
        '__LAYER__' => SRC_URL.'/Public/Admin/layer/layer.js', // 更改默认的/Public 替换规则

    ),
    'UPLOAD'=>array(
        'mimes'         =>  array(), //允许上传的文件MiMe类型
        'maxSize'       =>  0, //上传的文件大小限制 (0-不做限制)
        'exts'          =>  array(), //允许上传的文件后缀
        'rootPath'      =>  './Uploads/', // 必须写为./ 保存根路径
    )
);