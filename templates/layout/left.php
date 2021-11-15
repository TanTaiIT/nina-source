<div class="pro_left">
    <div id="danhmuc">
        <p class="tieude_right">danh mục sản phẩm</p>
        <?=$func->formenu_left('product','san-pham');?>
    </div>

    <div class="hotrotructuyen">
        <p class="tieude_right">hỗ trợ trực tuyến</p>
        <?php $yahoo = $d->rawQuery("select ten$lang, ngaytao, id, options2 from #_news where type = ? and hienthi > 0 order by stt,id desc",array('ho-tro-truc-tuyen')); ?>
        <div class="cont-hotro">

        <?php if(count($yahoo)!=0){?>
            <?php for($i=0;$i<count($yahoo);$i++){
                $optyahoo = (isset($yahoo[$i]['options2']) && $yahoo[$i]['options2'] != '') ? json_decode($yahoo[$i]['options2'],true) : null;
                ?>
            <div class="item-yahoo">
                <div class="name-yaoo"><?=$yahoo[$i]['ten'.$lang]?></div>
                <div class="dienthoai-yahoo">Điện thoại: <span><a href="tel:<?=$optyahoo['dienthoai']?>"><?=$optyahoo['dienthoai']?></a></span></div>
                <div class="dienthoai-yahoo"><span>Email: </span><?=$optyahoo['email']?></div>
                <div class="icon-yaoo">
                    <a href="<?=$optyahoo['facebook']?>"><img src="assets/images/hotro_face.png" /></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optyahoo['dienthoai']);?>"><img src="assets/images/zalo-combo.png" /></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="skype:<?=$optyahoo['skype']?>?chat"><img src="assets/images/hotro_skype.png" /></a>            
                </div>        
            </div>
            <?php }?>
        <?php }?> 

        <style type="text/css">
            div.cont-hotro{
                background:#fff;
                box-sizing:border-box;
                border:2px solid #3f85ca;
                padding:10px;
                }        
            div.item-yahoo{
                padding:10px 0px;
                border-bottom:1px solid #ccc;       
                }
            div.name-yaoo{
                font-size:16px;color: #3f85ca;font-weight:bold;
                }
            div.name-yaoo span{
                color:#f00;
                }
            div.icon-yaoo{
                text-align:center;
                }
            div.icon-yaoo img{max-width: 40px !important}
            div.dienthoai-yahoo span a{
                color:#000;
                text-decoration:none;       
                font-size:15px;
                }
            div.dienthoai-yahoo span a:hover{
                color:#00C;
                }
        </style>         
        </div>
    </div>
</div>