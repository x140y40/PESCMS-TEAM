<?php

return array(
    'LANGUAGE' => 'zh', //默认语言
    'ERROR_MES' => 'ON', //是否开启错误信息 | 必须大写 ON | OFF
    'ERROR_RANK' => '16', //需要显示的错误等级
    'ERROR_PROMPT' => '/Core/Theme/error.php', //脚本运行错误提示页面
    'APP_GROUP_LIST' => 'Team', //项目分组设定
    'DEFAULT_GROUP' => 'Team', //默认分组
    'FILE_CACHE_PATH' => './Temp', //文件缓存路径
    'FILE_CACHE_TIME' => '1800', //缓存时间(秒)
    'LOG_PATH' => '/log', //日志目录 | 默认为根目录log
    'LOG_DELETE' => '7', //日志删除隔间时间
    #'ADMIN_MES_PROMPT' => '', //后台提示页
    'SHOP_MES_PROMPT' => './Theme/Shop/jump.php', //前台提示页
    #'USER_MES_PROMPT' => '', //用户提示页
    'UPLOAD_PATH' => '/upload', //上传的目录
);