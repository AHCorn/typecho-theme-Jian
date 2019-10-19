<div class="side-bar">
               
 <div class="nav" style="padding-top: 5px;padding-right: 10px;padding-left: 10px;">
 <div class="about">
     <a href="<?php $this->options->siteUrl(); ?>">
<img class="logo2" src="<?php $this->options->logoUrl(); ?>">
 
<div class="jojo" style="margin-bottom: 0px;margin-top: 17px;">博主</div>
     
<p class="p2" ><?php $this->author->screenName(); ?></p>
    
     
<p class="p3"style="margin-top: 0px;top: 0px;"><?php $this->options->about(); ?></p>

   </a>
 </div>

        <div align="center">
<label id="menu-toggle" for="menu-checkbox">菜单QaQ</label>
    <input id="menu-checkbox" type="checkbox">
    <div class="tag-list">
  
 <?php $this->widget('Widget_Metas_Category_List')->parse('<a href="{permalink}">{name}</a> '); ?>


        <?php $this->widget('Widget_Contents_Page_List')->parse('<a  href="{permalink}">{title}</a>'); ?>

      </div>
    </div>
  </div>
</div>
