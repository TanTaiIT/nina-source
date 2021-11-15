<div class="menu">
    <div class="flex-menu">
        <ul class="d-flex align-items-center justify-content-between wrap-content menu_desktop">
            <li><a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href="" title="<?=trangchu?>"><h2><?=trangchu?></h2></a></li>
            <li class="line"></li>
            <li><a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="<?=gioithieu?>"><h2><?=gioithieu?></h2></a></li>
            <li class="line"></li>
            <li>
                <a class="transition <?php if($com=='san-pham') echo 'active'; ?>" href="san-pham" title="<?=sanpham?>"><h2><?=sanpham?></h2></a>
                <?=$func->formenu('product','san-pham');?>
            </li>
            <li class="line"></li>
            <li>
                <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="<?=tintuc?>"><h2><?=tintuc?></h2></a>
                <?=$func->formenu('news','tin-tuc');?>
            </li>
            <li class="line"></li>
            <li><a class="transition <?php if($com=='tuyen-dung') echo 'active'; ?>" href="tuyen-dung" title="<?=tuyendung?>"><h2><?=tuyendung?></h2></a></li>
            <li class="line"></li>
            <li><a class="transition <?php if($com=='thu-vien-anh') echo 'active'; ?>" href="thu-vien-anh" title="<?=thuvienanh?>"><h2><?=thuvienanh?></h2></a></li>
            <li class="line"></li>
            <li><a class="transition <?php if($com=='video') echo 'active'; ?>" href="video" title="Video"><h2>Video</h2></a></li>
            <li class="line"></li>
            <li><a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><h2><?=lienhe?></h2></a></li>       
        </ul>
        <div class="search w-clear">
            <input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
            <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
        </div>
    </div>
</div>