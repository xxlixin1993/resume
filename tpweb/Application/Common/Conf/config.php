<?php
return array(
	//'配置项'=>'配置值'
	
    // 项目分组设定,多个组之间用逗号分隔,例如'Home,Admin'
    'APP_GROUP_LIST'   => 'Home,Admin',
    // 默认分组
    'DEFAULT_GROUP'         => 'Home',
    
    //tpl模板的分隔符
    'TMPL_L_DELIM'=>'{',
    'TMPL_R_DELIM'=>'}',
    
	//模板中允许使用php
	'TMPL_DENY_PHP'=>false,
    
    //关闭模板缓存
    'TMPL_CACHE_ON' => false,
    //关闭静态缓存
    'HTML_CACHE_ON'=>false,
    
    /* 数据库设置 */
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => '127.0.0.1', // 服务器地址
    'DB_NAME'               => 'tpweb',          // 数据库名
    'DB_USER'               => 'tpweb',      // 用户名
    'DB_PWD'                => '123456',          // 密码
    'DB_PORT'               => '3306',        // 端口
    'DB_PREFIX'             => '',    // 数据库表前缀,默认是think_
    'DB_CHARSET'            => 'UTF8',      // 数据库编码默认采用utf8
    
    //定义images路径
    'TMPL_PARSE_STRING'=>array(
	   '__HOMEIMG__'=>'/Public/Home/images',
       '__HOMEFONTS__'=>'/Public/Home/fonts',
        '__HOMECSS__'=>'/Public/Home/css',
        '__HOMEJS__'=>'/Public/Home/js',
        '__ADMINJS__'=>'/Public/Admin/js',
        '__ADMINIMG__'=>'/Public/Admin/images',
        '__ADMINCSS__'=>'/Public/Admin/css',
        '__HOMEVIEW__'=>'/Application/Home/View'
   
    )    
);