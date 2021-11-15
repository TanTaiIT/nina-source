<div class="box-sanpham-tc">
    <div class="wap_1200">
        <div class="title-main"><span>Sản phẩm nổi bật</span></div>
        <div class="page_noibat css_flex_ajax"></div>
    </div>
</div>

<div class="box-sanpham-tc">
	<div class="wap_1200">
	<div class="title-main"><span>Chạy slick theo tab cấp 1</span></div>
    <div class="list_monnb list_slick">
        <a data-id="0">Tất cả</a>
        <?php foreach ($cap1 as $k2 => $v2) { ?>
        <a data-id="<?=$v2['id']?>"><?=$v2['ten'.$lang]?></a>
        <?php } ?>
    </div>
    <div class="page_slick css_flex_ajax"></div>
    </div>
</div>

<div class="box-sanpham-tc">
	<div class="wap_1200">
	<div class="title-main"><span>Phân trang theo tab cấp 1</span></div>
    <div class="list_monnb list_sanpham">
        <a data-id="0">Tất cả</a>
        <?php foreach ($cap1 as $k2 => $v2) { ?>
        <a data-id="<?=$v2['id']?>"><?=$v2['ten'.$lang]?></a>
        <?php } ?>
    </div>
    <div class="page_sanpham css_flex_ajax"></div>
    </div>
</div>

<div class="box-sanpham-tc">
    <div class="wap_1200">
        <div class="title-main"><span>Phân trang theo tag loại</span></div> 
        <div class="list_monnb list_tab">
            <a data-id="noibat>0">Sản phẩm nổi bật</a>
            <a data-id="moi>0">Sản phẩm mới</a>
        </div>
        <div class="page_tabloai css_flex_ajax"></div>
    </div>
</div>

<?php foreach ($cap1 as $k => $v1) { 
    $product_id = $func->get_product_id('noibat','san-pham','id_list',$v1['id'],2);  
    //die($product_id);  
    if(count($product_id)>0){
    ?>
<div class="box-sanpham-tc">
    <div class="wap_1200">
    <div class="title-main"><span><?=$v1['ten'.$lang]?></span></div>
    <div class="page_danhmuc css_flex_ajax page_danhmuc<?=$v1['id']?>"></div>
    </div>
</div>
<?php }} ?>

<?php foreach ($cap1 as $k => $v1) {
    $product_id = $func->get_product_id('noibat','san-pham','id_list',$v1['id'],2);    
    if(count($product_id)>0){
    $sql_cap2 = ("select * from #_product_cat where type='san-pham' and hienthi=1 and id_list=".$v1['id']." order by stt,id desc");
    $arr_cap2=array();
	$dmc2 = $d->rawQuery($sql_cap2,$arr_cap2);

?>
<div class="box-sanpham-tc">
    <div class="wap_1200">
    <div class="title-main"><span><?=$v1['ten'.$lang]?></span></div>
    <div class="list_monnb list_<?=$v1['id']?>">
        <a data-id="0">Tất cả</a>
        <?php foreach ($dmc2 as $k2 => $v2) { ?>
        <a data-id="<?=$v2['id']?>"><?=$v2['ten'.$lang]?></a>
        <?php } ?>
    </div>
    <div class="page_danhmuc css_flex_ajax page_danhmuc_list<?=$v1['id']?>"></div>
    </div>
</div>
<?php }} ?>

<?php if(count($brand)) { ?>
	<div class="wrap-brand">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="control-carousel prev-carousel prev-brand transition"><i class="fas fa-chevron-left"></i></p>
			<div class="owl-carousel owl-theme owl-brand">
				<?php foreach($brand as $v) { ?>
					<div>
						<a class="brand text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>">
							<img onerror="this.src='<?=THUMBS?>/150x150x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x150x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/>
						</a>
					</div>
				<?php } ?>
			</div>
			<p class="control-carousel next-carousel next-brand transition"><i class="fas fa-chevron-right"></i></p>
		</div>
	</div>
<?php } ?>

<?php if(count($newsnb) || count($videonb)) { ?>
<div class="wap_1200">
	<div class="wrap-intro wap-tin-video">
		<div class="left-intro">
			<p class="title-intro"><span>Tin tức mới</span></p>
			<div class="newshome-intro w-clear">				
				<a class="newshome-best text-decoration-none" href="<?=$newsnb[0][$sluglang]?>" title="<?=$newsnb[0]['ten'.$lang]?>">
					<p class="pic-newshome-best scale-img"><img onerror="this.src='<?=THUMBS?>/360x200x2/assets/images/noimage.png';" src="<?=WATERMARK?>/news/360x200x1/<?=UPLOAD_NEWS_L.$newsnb[0]['photo']?>" alt="<?=$newsnb[0]['ten'.$lang]?>"></p>
					<h3 class="name-newshome text-split"><?=$newsnb[0]['ten'.$lang]?></h3>
					<p class="time-newshome">Ngày đăng: <?=date("d/m/Y",$newsnb[0]['ngaytao'])?></p>
					<p class="desc-newshome text-split"><?=$newsnb[0]['mota'.$lang]?></p>
					<span class="view-newshome transition"><?=xemthem?></span>
					<?php //$optchinhanh = (isset($newsnb[0]['options']) && $newsnb[0]['options'] != '') ? json_decode($newsnb[0]['options'],true) : null;
				    //echo $optchinhanh["chucvu"]; ?>
				</a>
				<div class="newshome-scroll">
					<ul>
						<?php foreach($newsnb as $v) {?>
							<li>
								<a class="newshome-normal text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>">
									<p class="pic-newshome-normal scale-img"><img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x120x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"></p>
									<div class="info-newshome-normal">
										<h3 class="name-newshome text-split"><?=$v['ten'.$lang]?></h3>
										<p class="time-newshome"><?=ngaydang?>: <?=date("d/m/Y",$v['ngaytao'])?></p>
										<p class="desc-newshome text-split"><?=$v['mota'.$lang]?></p>
									</div>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="right-intro">
			<p class="title-intro"><span>Video clip</span></p>
			<div class="videohome-intro">
				<?=$addons->setAddons('video-fotorama', 'video-fotorama', 10);?>
	            <?php /* $addons->setAddons('video-select', 'video-select', 10); */ ?>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<?php if(count($partner)){ ?>
	<div class="wrap-partner">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="control-carousel prev-carousel prev-partner transition"><i class="fas fa-chevron-left"></i></p>
			<div class="owl-carousel owl-theme owl-partner">
				<?php foreach($partner as $v) { ?>
					<div>
						<a class="partner text-decoration-none" href="<?=$v['link']?>" target="_blank" title="<?=$v['ten'.$lang]?>">
							<img onerror="this.src='<?=THUMBS?>/175x95x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x120x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/>
						</a>
					</div>
				<?php } ?>
			</div>
			<p class="control-carousel next-carousel next-partner transition"><i class="fas fa-chevron-right"></i></p>
		</div>
	</div>
<?php } ?>