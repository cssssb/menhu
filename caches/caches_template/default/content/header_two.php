<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="a1002_form">
    <div class="a1002_centerleft">
        <h2 class="a1002_h2">报名入口</h2>
        <div class="col-md-3 a1002_as">
            <a href="http://47.93.26.208:8002/" target="_blank" class="a1002_1a">项目经理培训报名</a>
            <a href="http://47.93.26.208:8002/" target="_blank" class="a1002_2a">运维经理培训报名</a>
            <a href="http://47.93.26.208:8002/" target="_blank" class="a1002_3a">证书查询</a>
        </div>
        <div class="a1003_leftbottom">
            <h2 class="a1002_h2">行业动态</h2>
            <!-- <div class="a1003_actimg1">
                <img src="src/2.jpg" alt="">
            </div>
            <div class="a1003_actimg1">
                <img src="src/2.jpg" alt="">
            </div> -->
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2a0a9049d76a6cf9eec01d531e12051a&action=lists&catid=22&order=id+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'22','order'=>'id DESC','limit'=>'4',));}?>
    <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
    <div class="a1003_p5 a1003_p51">
        <span>20<?php echo date('y-m-d',$val[inputtime]);?></span>
        <p><a href="<?php echo $val['url'];?>" target="_blank"><?php echo $val['title'];?></a></p>
    </div>
 <?php $n++;}unset($n); ?>
               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>