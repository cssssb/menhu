<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<hr class="a1002_hr"> <?php include template("content","header_min"); ?>
<div class=" a1001_topright a2002_rightbox a3002_rightbox">

    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d4647a7486c14bb7a4b88eb57f168532&action=lists&catid=%24catid&posid=%24posid&order=id+DESC&num=6&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'posid'=>$posid,'order'=>'id DESC','moreinfo'=>'1','limit'=>'6',));}?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
    <div class="a3002right_content1 a3002right_content2">
        <h2>
            <span>
                <a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
            </span>
        </h2>
        <?php if($val['thumb'] != null) { ?>
        <img src="<?php echo $val['thumb'];?>" alt="">
        <p class="a3002right_p1"><?php echo $val['description'];?>
        </p>
        <span class="a3002right_span2"><?php echo catpos($catid);?></span>
        <?php } else { ?>
        <p class="a3002right_p2"><?php echo $val['content'];?>
        </p>
        <?php } ?>
        <span class="a3002right_span2">发布时间 <?php echo date('Y-m-d',$val['inputtime']);?></span>
        <hr class="a3002_hr">
    </div>
    <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


</div>
<div class="a3002right_content1">
    <h2>信息系统集成的
        <span>项目管理研究</span>
    </h2>
    <div class="a3002left_img">
        <img src="<?php echo CSS_PATH;?>cms/src/study1.jpg" alt="">
    </div>
    <p class="a3002right_p1">随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展随着计算机项目管理研究的不断发展

    </p>
    <span class="a3002right_span1">技术文章&nbsp;&nbsp; 2017-05-03</span>


<hr class="a3002_hr">
</div>

</div>


</div>


 <?php include template("content","footer"); ?>