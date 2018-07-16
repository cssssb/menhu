<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<hr class="a1002_hr"> <?php include template("content","header_min"); ?>
<div class=" a1001_topright a2002_rightbox">
        <h1 class="a2002_h1"><?php echo $title;?></h1>
        <span><?php echo $inputtime;?></span>
        <hr class="a2002_hr">
        <div class="a2002_rightbig">
            <div class="a2002_centerright">
    
                <p class="a2002_rightp"><?php echo $content;?></p>
            </div>
            <div class="a2002_rightimg">
                <img src="<?php echo $thumb;?>" alt="">
            </div>
        </div>
    
        <div class="a1002_centerrigiht">
    
            <div class="a2003_link">
                <span class="a2003_link1">分享到:</span>
                <div class="bdsharebuttonbox">
                    <a href="#" class="bds_more" data-cmd="more"></a>
                    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                </div>
                <script>window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "1", "bdSize": "24" }, "share": {}, "image": { "viewList": ["qzone", "tsina", "weixin", "sqq"], "viewText": "分享到：", "viewSize": "16" }, "selectShare": { "bdContainerClass": null, "bdSelectMiniList": ["qzone", "tsina", "weixin", "sqq"] } }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
            </div>
            <div class="a2002_put1">
                <h2 class="a2002_h2">相关推荐</h2>
                <br> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f8b3eec4358684f67b3f104222ff05e4&action=lists&catid=%24catid&order=id+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>'10',));}?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                <span class="a2002_span5">
                    <a href="<?php echo $val['url'];?>"><?php echo $val['title'];?>
                    </a>
                    <span class="a2002_time"><?php echo date('Y-m-d',$val['inputtime']);?></span>
                </span>
    
                <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
    </div>
<?php include template("content","footer"); ?>
