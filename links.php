<?php
/**
 * 友情链接
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('side.php'); ?>
<div class="main">
<div class="article-list">
<link rel="stylesheet" href="<?php $this->options->themeUrl('/css/post.css'); ?>"> 

<h1 style="
    margin-bottom: 0px;
    margin-top: 0px;
"><?php $this->title() ?></h1>
<?php $this->content(); ?>
<?php Links_Plugin::output(); ?>
  <?php $this->need('comments.php'); ?>
</div>



      
