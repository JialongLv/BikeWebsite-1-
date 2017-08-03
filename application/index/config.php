<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // +----------------------------------------------------------------------
    // | 应用设置
    // +----------------------------------------------------------------------

   

    // +----------------------------------------------------------------------
    // | 模板设置
    // +----------------------------------------------------------------------

    'template'               => [
      
        // 模板后缀
        'view_suffix'  => 'html',
       
       
    ],

    // 视图输出字符串内容替换
    'view_replace_str'  =>  [
    '__PUBLIC__'=>'/public/',
    '__ROOT__' => '/',
    '__INDEX__'=> 'http://127.0.0.1/bike/public/static/index',
]

 

  

  
    

    
];
