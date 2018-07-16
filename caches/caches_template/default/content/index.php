<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<hr class="a1002_hr"> <?php include template("content","header_min"); ?>
<div class=" a1001_topright">
    <div class="a1002_table">
        <a href="#" class="a1002_a1">平台通知</a>
        <a href="#" class="a1002_a2">项目经理</a>
        <a href="#" class="a1002_a3">高级项目经理</a>
        <a href="#" class="a1002_a4">运营项目经理</a>

    </div>
        <div class="a1002_tabs a1002_tab2">
                <div class="a1002tab_list1">
                        <h2 class="a1002_midtitle a1002_midtitle1">考核方式</h2>
                        <h2 class="a1002_midtitle a1002_midtitle1">考核方式2</h2>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=05e7acb7e2d4aff601992113cc927841&action=lists&catid=23&order=id+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'23','order'=>'id DESC','limit'=>'10',));}?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                        <a href="<?php echo $val['url'];?>">
                            <span class="a1002_spantri a1002_spantri1"> <?php echo $val['title'];?> </a>
                        </span><?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        <!-- <span class="a1002_spantri a1002_spantri2">实践课程操作指南</span> -->
                        </div>
            </div>
            <div class="a1002_tabs a1002_tab3">
                <h2 class="a1002_h2">项目经理</h2>

                <div class="a1002tab_list1">
                    <h2 class="a1002_midtitle a1002_midtitle1">考核方式</h2>
                    <h2 class="a1002_midtitle a1002_midtitle1">考核方式2</h2>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c88bbae687b8a15e1b0b757b59d45d43&action=lists&catid=24&order=id+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'24','order'=>'id DESC','limit'=>'10',));}?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                    <a href="<?php echo $val['url'];?>">
                        <span class="a1002_spantri a1002_spantri1"> <?php echo $val['title'];?> </a>
                    </span><?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
            <div class="a1002_tabs a1002_tab4">
                <h2 class="a1002_h2">高级项目经理</h2>

                <div class="a1002tab_list1">
                    <h2 class="a1002_midtitle a1002_midtitle1">考核方式</h2>
                    <h2 class="a1002_midtitle a1002_midtitle1">考核方式2</h2>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=69122830ebd7b9a2a68ca8c4bc7f7d8f&action=lists&catid=25&order=id+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','order'=>'id DESC','limit'=>'10',));}?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                    <a href="<?php echo $val['url'];?>">
                        <span class="a1002_spantri a1002_spantri1"> <?php echo $val['title'];?> </a>
                    </span><?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
            <div class="a1002_tabs a1002_tab5">
                <h2 class="a1002_h2">运营项目经理</h2>

                <div class="a1002tab_list1">
                    <h2 class="a1002_midtitle a1002_midtitle1">考核方式</h2>
                    <h2 class="a1002_midtitle a1002_midtitle1">考核方式2</h2>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3c0174953112a4d529b0ed9ccb049bc&action=lists&catid=26&order=id+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','order'=>'id DESC','limit'=>'10',));}?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                        <a href="<?php echo $val['url'];?>">
                            <span class="a1002_spantri a1002_spantri1"> <?php echo $val['title'];?> </a>
                        </span><?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
    </div>
</div>

<div class="a1002_centerrigiht">
    <h2 class="a1002_h2">常见问题</h2>
    <div class="a1003_div6">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b40139088eeaeafa20f26972c7088e31&action=lists&thumb=1&catid=20&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('thumb'=>'1','catid'=>'20','order'=>'id DESC','limit'=>'6',));}?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>

            <a href="<?php echo $val['url'];?>" class="a1003_6div">
                <div class="a1003_imgon">
                    <img src="<?php echo $val['thumb'];?>" alt="">
                </div>
                <span class="a1003_span1"><?php echo $val['title'];?></span>
                <span class="a1003_span2"><?php echo $val['data'];?></span>
                <span class="a1003_span3">北京</span>
            </a>
            <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="a1003_imgp">
            <h2 class="a1002_h2">相关下载</h2>
            <div class="a1003_lastbottom">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c57cdcbe829b0afe7f6cc61281002725&action=lists&thumb=1&catid=21&order=id+ASC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('thumb'=>'1','catid'=>'21','order'=>'id ASC','limit'=>'1',));}?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                <div class="a1003_bottomimg">
                    <img src="<?php echo $val['thumb'];?>" alt="">
                </div>
                <h3 class="a1003_bottomh3"><?php echo $val['title'];?></h3>
                <p><?php echo $key['content'];?>
                </p>

            </div>
            <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <div class="a1003_bottomp">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3e17a8343da307feaf8de4fe98845358&action=lists&catid=21&order=id+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'21','order'=>'id DESC','limit'=>'10',));}?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                <span class="a1002_spantri">
                    <a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
                </span>
                <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="a1003_about">
            <h2 class="a1002_h2">关于我们</h2>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0e92cb87609e22b752d22639146ecbc4&action=lists&catid=27&order=id+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'27','order'=>'id DESC','limit'=>'10',));}?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
            <span class="a1002_spantri">
                <a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
            </span>
            <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>


</div>
<?php include template("content","footer"); ?>
<script src="<?php echo CSS_PATH;?>cms/js/first.js">
</script>