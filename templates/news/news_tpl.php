<div class="title-main"><span><?=(@$title_cat!='')?$title_cat:@$title_crumb?></span></div>
<div class="content-main css_flex_baiviet"> <?php //css_baiviet_ngang: thể hiện 4 bài viết 1 hàng  ?>
    <?php if(count($news)>0) { echo $func->lay_baiviet($news,'news'); ?>
    <?php  } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>