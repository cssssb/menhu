<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59614048a5e848178418c0ccc02092e7&action=category&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'limit'=>'20',));}?> 
    <title><?php echo $catname;?></title>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>cms/css//bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>cms/css/first_style.css">
    <script src="<?php echo CSS_PATH;?>cms/js/jquery-3.3.1.js"></script>
</head>

<body>

    <div class="container">
        <!-- nav部分 -->
        <!-- 顶部导航栏table -->
        <div class="row a1001_nav">
            <img src="<?php echo CSS_PATH;?>cms/src/img-02.jpg" alt="" class="a1001_topimg">
            <div class="col-md-6 a1001_top_title">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a452386e3cc22701a7c62a9a35273572&action=category&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a href="<?php echo $r['url'];?>">
                    <li><?php echo $r['catname'];?></li>
                </a>
                <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </div>
        </div>
        <!-- 顶部logo区域 -->
        <div class="row a1001big_logo">
            <img src="<?php echo CSS_PATH;?>cms/src/logo_02.png" alt="">
            <div class="a1001_bigtitle">
                <span class="a1001_logotitle">
                    信息系统集成及服务项目管理人员学习平台
                </span>
                <br />
                <span class="a1001_logoenglish">
                    Information system integration and service project management learning platform
                </span>
            </div>
        </div>
        <span class="a3001_menu">
            <a href="<?php echo WEB_PATH;?>">首页</a>

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e2d866a3526bb364da9d58b5dd144e2e&action=category&num=25&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'limit'=>'25',));}?>
            <a href="{catpos($url)">
                <?php echo'<span>></span>'.catpos($catid);?>
            </a>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=938f610d62e2316f0833ebeec536f454&action=lists&num=25&catid=%24catid&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'limit'=>'25',));}?>
            <a href="<?php echo $url;?>"><?php echo $title;?></a>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </span>
        <!-- 顶部搜索框 -->
        <!-- <div class="row a1001_search">
            <div class=" a1001_searchdiv">
                <input type="search">
                <a href="#">查询</a>
            </div>
        </div> -->