<?php
/**
 * 何为简？本主题的体积与界面说明了一切。
 * 
 * @package 简和
 * @author 安和
 * @version 2.1
 * @link http://lolicorn.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');?>
<html>
<body>
  <?php  $this->need('side.php'); ?>
<div class="main">
<div class="article-list">
<div class="content">

<?php while($this->next()): ?>
<time datetime="<?php $this->date('c'); ?>"><?php $this->date('M j, Y'); ?></time>
<h2 style="
    margin-top: 5px;
"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
<hr>
<?php endwhile; ?>
<center>
<?php $this->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-change', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
</center>
