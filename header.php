<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/jianhe.css'); ?>"> 
  <link rel="stylesheet" href="https://cdn.bootcss.com/normalize/8.0.0/normalize.min.css">
 
 <?php $this->header(); ?>
</head>
<title> <?php $this->options->title(); ?><?php $this->archiveTitle(); ?> </title>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

