<?php
return array(
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址(直接使用127.0.0.1 效率高)
    'DB_NAME'               =>  'zs',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'admin',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
//    'DB_PARAMS'          	=>  array(), // 数据库连接参数
    'DB_PARAMS'    =>    array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),

    'PAGE_SIZE'             =>  10, //分页中每页显示的条数
    'SHOW_PAGE_TRACE'       =>  false,
    'SUPER_MANAGER_NAME'    =>  'admin',
    'NO_LOGIN_CHECK_URLS'   => array('Admin/Admin/login','Admin/Verify/index'),

    'COOKIE_DOMAIN'         =>  '.zs.com',      // Cookie有效域名

);