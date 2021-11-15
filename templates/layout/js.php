<script type="text/javascript">
    var NN_FRAMEWORK = NN_FRAMEWORK || {};
    var CONFIG_BASE = '<?=$config_base?>';
    var WEBSITE_NAME = '<?=(isset($setting['ten'.$lang]) && $setting['ten'.$lang] != '') ? addslashes($setting['ten'.$lang]) : ''?>';
    var TIMENOW = '<?=date("d/m/Y",time())?>';
    var SHIP_CART = <?=(isset($config['order']['ship']) && $config['order']['ship'] == true) ? 'true' : 'false'?>;
    var GOTOP = 'assets/images/top.png';
    var LANG = {
        'no_keywords': '<?=chuanhaptukhoatimkiem?>',
        'delete_product_from_cart': '<?=banmuonxoasanphamnay?>',
        'no_products_in_cart': '<?=khongtontaisanphamtronggiohang?>',
        'wards': '<?=phuongxa?>',
        'back_to_home': '<?=vetrangchu?>',
    };
</script>
<?php
    $js->setCache("cached");
    $js->setJs("./assets/js/jquery.min.js");
    $js->setJs("./assets/bootstrap/bootstrap.js");
    $js->setJs("./assets/js/wow.min.js");
    $js->setJs("./assets/simplyscroll/jquery.simplyscroll.js");
    $js->setJs("./assets/fotorama/fotorama.js");
    $js->setJs("./assets/owlcarousel2/owl.carousel.js");
    $js->setJs("./assets/magiczoomplus/magiczoomplus.js");
    $js->setJs("./assets/slick/slick.js");
    //$js->setJs("./assets/sliderengine/amazingslider.js");
    //$js->setJs("./assets/sliderengine/initslider-1.js");
    $js->setJs("./assets/fancybox3/jquery.fancybox.js");
    $js->setJs("./assets/photobox/photobox.js");
    $js->setJs("./assets/datetimepicker/php-date-formatter.min.js");
    $js->setJs("./assets/datetimepicker/jquery.mousewheel.js");
    $js->setJs("./assets/datetimepicker/jquery.datetimepicker.js");
    $js->setJs("./assets/toc/toc.js");
    $js->setJs("./assets/js/functions.js");
    $js->setJs("./assets/js/phantrang_ajax.js");
    $js->setJs("./assets/js/apps.js");
    echo $js->getJs();
?>

<?php if(isset($config['googleAPI']['recaptcha']['active']) && $config['googleAPI']['recaptcha']['active'] == true) { ?>
    <!-- Js Google Recaptcha V3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?=$config['googleAPI']['recaptcha']['sitekey']?>"></script>
    <script type="text/javascript">
        grecaptcha.ready(function () {
            grecaptcha.execute('<?=$config['googleAPI']['recaptcha']['sitekey']?>', { action: 'Newsletter' }).then(function (token) {
                var recaptchaResponseNewsletter = document.getElementById('recaptchaResponseNewsletter');
                recaptchaResponseNewsletter.value = token;
            });
            <?php if($source=='contact') { ?>
                grecaptcha.execute('<?=$config['googleAPI']['recaptcha']['sitekey']?>', { action: 'contact' }).then(function (token) {
                    var recaptchaResponseContact = document.getElementById('recaptchaResponseContact');
                    recaptchaResponseContact.value = token;
                });
            <?php } ?>
        });
    </script>
<?php } ?>

<?php if(isset($config['oneSignal']['active']) && $config['oneSignal']['active'] == true) { ?>
    <!-- Js OneSignal -->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script type="text/javascript">
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "<?=$config['oneSignal']['id']?>"
            });
        });
    </script>
<?php } ?>

<!-- Js Structdata -->
<?php include TEMPLATE.LAYOUT."strucdata.php"; ?>

<!-- Js Addons -->
<?=$addons->setAddons('script-main', 'script-main', 0.5);?>
<?=$addons->getAddons();?>

<!-- Js Body -->
<?=htmlspecialchars_decode($setting['bodyjs'])?>

<?php if($source=='index'){?>
    
    <!-- <script>
        $('.rundt').slick({
            lazyLoad: 'progressive', infinite: true, accessibility:false, vertical:false, slidesToShow: 1,  
            slidesToScroll: 1, autoplay:true,  autoplaySpeed:3000, speed:1000, arrows:false, 
            centerMode:false,  dots:false,  draggable:true, variableWidth:true,
        });

    </script> -->
    
    <script>
        $(document).ready(function() {

            /* phan trang san pham noi bat */
            init_paging('', 'page_noibat', 4, 'product', 'san-pham', 'and noibat>0',1);
            /* phan trang san pham noi bat */

            /* Chạy slick theo tab cap 1 */
            $(document).on('click', '.list_slick a', function(event) {
                event.preventDefault();
                $(this).parent('.list_slick').find('a').removeClass('active');
                $(this).addClass('active');
                init_run_slick('list_slick', 'page_slick', 15, 'product', 'san-pham', 'and noibat>0',1);
            });
            init_run_slick('list_slick', 'page_slick', 15, 'product', 'san-pham', 'and noibat>0',1);
            /* Chạy slick theo tab cap 1 */
            
            /* phan trang theo tab cap 1 */
                $(document).on('click', '.list_sanpham a', function(event) {
                    event.preventDefault();
                    $(this).parent('.list_sanpham').find('a').removeClass('active');
                    $(this).addClass('active');
                    init_paging('list_sanpham', 'page_sanpham', 4, 'product', 'san-pham', 'and noibat>0',1);
                });
                init_paging('list_sanpham', 'page_sanpham', 4, 'product', 'san-pham', 'and noibat>0',1);
                /* phan trang theo tab cap 1 */

                /* phan trang theo tab loai */
                $(document).on('click', '.list_tab a', function(event) {
                    event.preventDefault();
                    $(this).parent('.list_tab').find('a').removeClass('active');
                    $(this).addClass('active');
                    init_paging_loai('list_tab', 'page_tabloai', 4, 'product', 'san-pham',1);
                });
                init_paging_loai('list_tab', 'page_tabloai', 4, 'product', 'san-pham',1);
                /* phan trang theo tab loai */
                
                /* phan trang san pham for cap 1 */
                <?php foreach ($cap1 as $k => $v) { ?>
                    init_paging_category('<?=$v['id']?>', 'page_danhmuc<?=$v['id']?>', 4, 'product', 'san-pham', 'and noibat>0'); 
                <?php } ?>
                /* phan trang san pham for cap 1 */

                /* phan trang theo cap 2 chay for cap 1 */
                <?php foreach ($cap1 as $k => $v) { ?>    
                    init_paging_category_list('<?=$v['id']?>', 'list_<?=$v['id']?>', 'page_danhmuc_list<?=$v['id']?>', 4, 'product', 'san-pham', 'and noibat>0',1);
       
                    $(document).on('click', '.list_<?=$v['id']?> a', function(event) {
                        event.preventDefault();
                        $(this).parent('.list_<?=$v['id']?>').find('a').removeClass('active');
                        $(this).addClass('active');
                        init_paging_category_list('<?=$v['id']?>', 'list_<?=$v['id']?>', 'page_danhmuc_list<?=$v['id']?>', 4, 'product', 'san-pham', 'and noibat>0',1);
                    });   
                <?php } ?>
                /* phan trang theo cap 2 chay for cap 1 */

        });            
    </script>

    <script>
        /*$(document).ready(function(){               
            var fired77 = false;
            window.addEventListener("scroll", function(){
            if ((document.documentElement.scrollTop != 0 && fired77 === false) || (document.body.scrollTop != 0 && fired77 === false)) {
                $('.load-video-tc').load('ajax/ajax_video_slick.php');
                fired77 = true;
            }
            }, true);
        });*/
    </script>
    
<?php } ?>