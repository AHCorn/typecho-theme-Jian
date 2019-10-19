<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('头像地址url'), _t('用于侧边栏头像显示，必须填写'));
        $form->addInput($logoUrl); 
      
        $about = new Typecho_Widget_Helper_Form_Element_Text('about', NULL, NULL, _t('个人介绍'), _t('一个简短的个人介绍，由于适配原因仅支持11字以内，必须填写'));
        $form->addInput($about);
}
