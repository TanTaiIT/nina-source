<div class="title-main"><span><?=(@$title_cat!='')?$title_cat:@$title_crumb?></span></div>
<div class="content-main css_flex_product">
    <?php if(count($_SESSION['sanphamyeuthich']) > 0) {  

    	foreach($_SESSION['sanphamyeuthich'] as $yeuthich){

    		$v = $d->rawQueryOne("select type, id, ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, noidung$lang, masp, luotxem, id_brand, id_mau, id_size, id_list, id_cat, id_item, id_sub, id_tags, photo, options, giakm, giamoi, gia from #_product where id = ? and type = ? and hienthi > 0 limit 0,1",array($yeuthich,'san-pham'));
    		
        	echo $func->lay_sanpham_yeuthich($v);
        }
    ?>
        
    <?php  } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>