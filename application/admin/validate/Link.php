<?php
namespace app\admin\validate;

use think\Validate;

class Link extends Validate
{
   protected $rule = [
   		'title'=>'unique:link|require|max:25',
   		'url'=>'url|unique:link|require|max:60',
   		'des'=>	'require',
   		


   ];

   protected $message=[
   		'title.require'=>'链接标题不得为空',
   		'title.unique'=>'链接标题不得重复',
   		'title.max'=>'链接标题长度不得大于25个字符',
   		'url.unique'=>'链接地址不得重复',
   		'url.require'=>'链接地址不得为空',
   		'url.max'=>'链接地址长度不得大于60个字符',
   		'url.url'=>'链接地址不正确',
   		'des.require'=>'链接描述不得为空',
   ];

      protected $scene=[
        'add'=>['title','url','desc'],
        'edit'=>['title','url'],
    ];



   



   

   
     

}
