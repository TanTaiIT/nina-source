<div class="title-main"><span><?=$title_crumb?></span></div>
<div class="content-main css_flex_album">
    <?php if(count($product)>0) { echo $func->lay_thuvien($product,1); //1:click hình zoon tại trang, 0: vào chi tiết ?>

    <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>