<?php
    include ("ajax_config.php");
   
    global $config_base,$lang,$config;
    // Lấy trang hiện tại
    $id_danhmuc = (int)$_POST['id_danhmuc'];
    $id_list = (int)$_POST['id_list'];
    $page_per = (int)$_POST['page_per'];
    $table_select = (string)$_POST['table_select'];
    $type_select = (string)$_POST['type_select'];
    $where_select = (string)$_POST['where_select'];
    $tab_return = (string)$_POST['tab_return'];
    $page = (string)$_POST['page'];
    $showphantrang = (int)$_POST['showphantrang'];//echo ($showphantrang);
    // Kiểm tra trang hiện tại có bé hơn 1 hay không
    if ($page < 1) {
        $page = 1;
    }
    // Số record trên một trang
    $limit = $page_per;
    // Tìm start
    $start = ($limit * $page) - $limit;
    if($id_danhmuc) $where_tmp .= " and id_list=" . $id_danhmuc;
    if($id_list) $where_tmp .= " and id_cat=" . $id_list;
    $where = "hienthi=1 and type='$type_select' $where_select $where_tmp order by stt,id desc";
    $text_sql = "select * from table_$table_select where $where limit $start,$limit";

    $sqlc_num="SELECT count(id) as dem FROM table_$table_select where $where";
    $arr_sqlc_num=array(); 
    $count_num = $d->rawQueryOne($sqlc_num,$arr_sqlc_num);
    
    // Câu truy vấn
    $arr_sqlc_records=array();
    $result_records = $d->rawQuery($text_sql,$arr_sqlc_records);
    
    //$result_records = get_result($text_sql);
    //die($config['product']['san-pham']['showbuttonmuahang']);
?>
<?php if($result_records) {

    switch($type_select) {
            case 'san-pham':                
                echo '<div class="run-slick">'.$func->lay_sanpham($result_records).'</div>';
                break;
            case 'thu-vien':
                echo ''.$func->lay_thuvien($result_records,'item',0,0,0,0,1,$type_select,0,_upload_tintuc_l).'';
                break;
            case 'cong-trinh':
                echo ''.$func->lay_congtrinh($result_records,'item',0,0,0,0,1,$type_select,1,_upload_tintuc_l,'catchuoi3','',1,0).'';
                break;
            case 'video':
                echo ''.$func->lay_video($result_records,'item',0,0,0,0,1,$type_select,0).'';
                break;
            case 'orther':
                echo ''.$func->lay_tinkhac($type_select,'',1,0,'','','',1,0,'catchuoi2',0,$result_records,_upload_tintuc_l,0,1,1).'';
                break;      
            default:
                echo ''.$func->lay_news($type_select,'',1,0,'','','',1,0,'catchuoi2',0,$result_records,_upload_tintuc_l,1,1,1).'';
                break;
        } ?>
        
    <script>
        $(document).ready(function() {
           
                $('.run-slick').slick({
                    lazyLoad: 'progressive', infinite: true, accessibility:true, vertical:false, slidesToShow: 4,  
                    slidesToScroll: 1, autoplay:true,  autoplaySpeed:3000, speed:1000, arrows:true, 
                    centerMode:false,  dots:false,  draggable:true,  responsive: [ 
                    {  breakpoint: 800, settings: { slidesToShow: 2, slidesToScroll: 1,arrows:true } } ]
                });
        });            
    </script>

<?php } ?>

 
