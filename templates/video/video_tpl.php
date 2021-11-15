<div class="title-main"><span><?=@$title_crumb?></span></div>
<div class="content-main css_flex_video">
    <?php if(isset($video) && count($video) > 0) { echo $func->lay_video($video); ?>
       
    <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>