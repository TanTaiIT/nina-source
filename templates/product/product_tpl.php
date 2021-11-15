<div class="title-main"><span><?=(@$title_cat!='')?$title_cat:@$title_crumb?></span></div>

<?php if($source=='search'){?>

	<div class="content-main css_flex_product">
	    <?php if(isset($product) && count($product) > 0) {  

	        echo $func->lay_sanpham($product);?>
	        
	    <?php  } else { ?>
	        <div class="alert alert-warning" role="alert">
	            <strong><?=khongtimthayketqua?></strong>
	        </div>
	    <?php } ?>
	    <div class="clear"></div>
	    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
	</div>

<?php }else{ ?>

	<div class="sanpham_col_flex">
		<?php include TEMPLATE.LAYOUT."left.php"; ?>
		<div class="pro_right">
			<div class="content-main css_flex_product">
			    <?php if(isset($product) && count($product) > 0) {  

			        echo $func->lay_sanpham($product);?>
			        
			    <?php  } else { ?>
			        <div class="alert alert-warning" role="alert">
			            <strong><?=khongtimthayketqua?></strong>
			        </div>
			    <?php } ?>
			    <div class="clear"></div>
			    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
			</div>
		</div>
	</div>
	
<?php } ?>