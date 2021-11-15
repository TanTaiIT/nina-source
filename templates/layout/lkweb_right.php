<style>
    .lkweb_right{
        position: fixed;
        right: 0;
        top: 20%;
        z-index: 99;
    }

    .lkweb_right a{
        display: block;
        margin-bottom: 5px;
        transition: 0.5s;

    }

    .lkweb_right a:hover{
        transform: rotate(30deg);
    }

</style>

<div class="lkweb_right">
    <?php foreach($lkweb_right as $v) {?>
        <a href="<?=$v['link']?>"><img src="<?=UPLOAD_PHOTO_L.$v['photo']?>" alt=""></a>
    <?php } ?>
</div>