<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Taipei");

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>商品頁</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<?php require_once('Header_head.php') ?>
<!-- scrollmagic -->
<script src="src/libs/gsap/src/minified/TweenMax.min.js"></script>
 <script type="text/javascript" src="src/libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
 <script type="text/javascript" src="src/libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
<script type="text/javascript" src="src/libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
<!-- 自己的js -->
<script src="js/product.js"></script>
<!-- css們 -->
<link rel="stylesheet" type="text/css" href="src/libs/slick/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="src/libs/slick/slick/slick.css">
<link rel="stylesheet" type="text/css" href="src/libs/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/product.css">

</head>
<body>
    <?php require_once('Header.php') ?> 

    <!-- ScrollMagic -->
    <div id="trigger1"></div>
    <a><div class="cart cartNo cartBtn" id="cartCircle">0</div></a>

    <div class="pro_container">
        <!-- 種子頁 -->
        <section class="pro_seed">
            
            <!-- 遮雨棚+標題 -->
            <div class="pro_tent">
                <div><img src="src/image/product/pro-tent.png"></div>
                <h2>種子市場</h2>
            </div>
        
            <!-- 商品區 -->
            <ul class="pro_s_cabinet" id="pro_s_cabinet">
        
                <!-- 商品:li*8>div*2 -->

                <?php 
                    try {
                        require_once("php/connectGrowing_hope.php");
                        $sql = "select *
                                from      mixproduct 
                                where     pro_type = 1
                                and       pro_status = 1
                                order by  pro_no DESC
                                limit     0,8;";

                        $product = $pdo->query($sql);
                        //$isEight用來計算跑了幾個資料，不滿八個要自動用完售補滿
                        $isEight =0;
                        while ( $proRow = $product->fetchObject() ) {
                            $isEight++;

                            $pro_no     = $proRow ->pro_no;
                            $pro_type   = $proRow ->pro_type;
                            $pro_realno = $proRow ->pro_realno;
                            $pro_name   = $proRow ->pro_name;
                            $pro_price  = $proRow ->pro_price;
                            $pro_std    = $proRow ->pro_std;
                            $pro_status = $proRow ->pro_status;
                            $pro_pho    = $proRow ->pro_pho;
                            $pro_info   = $proRow ->pro_info;
                            // echo $isEight;

                            // echo $pro_no.$pro_type.$pro_realno.$pro_name .$pro_price.$pro_status.$pro_pho.$pro_info."<br>";

                ?>
                <li class="pro_s_each">
                    
                    <!-- hover前:菜圖+菜名 -->
                    <div class="pro_s_vegetable">
        
                        <!-- 菜的牌子 -->
                        <div class="pro_s_brand">
                            <div><img src="src/image/product/pro-brand.png"></div>
                            <div><?php echo $pro_name?></div>
							<div class="pro_s_new" hidden><img src="src/image/product/pro-new.png" ></div>
                        </div>
                        
                        <!-- 菜菜 -->
                        <div class="pro_s_img"><img src="src/image/product/<?php echo $pro_pho?>" alt="<?php echo $pro_name?>"></div>
        
                    </div>
        
                    <!-- hover後:資訊+購買 -->
                    <div class="pro_s_white">
                        <div class="pro_s_info">
                            <h3><?php echo $pro_name?></h3>
                            <div class="pro_s_line"></div>
                            <p class="pro_s_txt"><?php echo nl2br($pro_std)?></p>
                            <div class="pro_s_buy">
                                <span>$<?php echo $pro_price?>/包</span>
                                <span class="btn_green addButton" id="<?php echo $pro_realno?>">加入購物
                                    <input type="hidden" name="proInfo" value="<?php echo $pro_info?>">
                                </span>
                            </div>
                        </div>
                    </div>
        
                </li>
				<?php
                        }
                        if ( $isEight<8 ) {
                            for( $e = 0; $e<(8-$isEight) ; $e++){
                ?>

                                <li class="pro_s_each">
                                    <div class="pro_s_img"><img src="src/image/product/pro-soldOut.png" alt=""></div>
                                </li>
                <?php
                            }
                        }               
                ?>

                <!-- 手機版的種子資訊，蓋全版，透過js抽換資料 -->
                <div class="pro_s_mobileInfo" id="pro_s_mobileInfo">

  <!--                   <div class="pro_s_white">
  						<span class="iii"><img src="src/image/login/pop_close.png"></span>
                        <div class="pro_s_info">
                            <h3>多彩椒</h3>
                            <div class="pro_s_line"></div>
                            <p class="pro_s_txt">
                                發芽適溫：20~30℃<br>
                                平均採收：45-60天<br>
                                可生食，結果即可食用<br>
                            </p>
                            <div class="pro_s_buy">
                                <span>$50/包</span>
                                <span class="btn_green addButton" id="s004">加入購物
                                    <input type="hidden" name="proInfo" value="多彩椒|s004.png|50">
                                </span>
                            </div>
                        </div>
                    </div> -->

                </div>
                <div class="ccc"></div>
            </ul>
        
            <!-- 攤販底部 -->
            <div class="pro_s_end">
                <div>
                    <img src="src/image/product/pro-s-end.jpg">
                </div>
            </div>
        
        </section>
        
        
        
        









        <!-- 魚缸============================================== -->
        <section class="pro_tank">
        
            <!-- 遮雨棚+標題 -->
            <div class="pro_tent">
                <div><img src="src/image/product/pro-tent.png"></div>
                <h2>魚缸超市</h2>
            </div>

            <!-- 商品區-魚缸 -->
            <div class="pro_t_wheel">

                <div class="pro_t_lightbox">
                    <!-- 商品選單 -->
                    <ul class="pro_t_shelf" id="pro_t_shelf">
                        
                        <?php
                            $sql2 = "
                                select  *
                                from    mixproduct 
                                where   pro_type = 2 
                                        and pro_status = 1 
                                        and pro_pho like '%1.jpg'
                                        order by  pro_no DESC;";
                                // limit   0,4  要限制只顯示四筆以防萬一嗎?

                            $product2 = $pdo->query($sql2);
                            
                            while ( $allTank = $product2->fetchObject() ) {
                                $tank_no     = $allTank ->pro_no;
                                $tank_type   = $allTank ->pro_type;
                                $tank_realno = $allTank ->pro_realno;
                                $tank_name   = $allTank ->pro_name;
                                $tank_price  = $allTank ->pro_price;
                                $tank_std    = $allTank ->pro_std;
                                 // $std    = nl2br( $std);
                                $tank_status = $allTank ->pro_status;
                                $tank_pho    = $allTank ->pro_pho;
                                $tank_info   = $allTank ->pro_info;
                                

                        ?>

                            
                        <li class="pro_t_each" id="<?php echo $tank_realno?>">
                            <div class="pro_t_pho">
                                <img src="src/image/product/<?php echo $tank_pho?>" alt="<?php echo $tank_info?>" title="<?php echo $tank_name?>">
                            </div>
                            <div>
                                <div class="pro_t_name"><?php echo $tank_name?></div>
                                <div class="pro_t_price">$<?php echo $tank_price?>/個</div>
                            </div>
                            <textarea style="display:none;"class="pro_t_std"><?php echo $tank_std ?></textarea>
                        </li>

                        <?php
                                }                       
                        ?>

                        
                    </ul>
                </div>


                <!-- 向左右 -->
                <div class="pro_t_toRL mobileHidden">
                    <span href="#" id="toLeft"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                    <span href="#" id="toRight"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                </div>

            </div>

            <!-- 層架圖 -->
            <div class="pro_t_shelfImg">
                <img src="src/image/product/pro-shelf.png">
            </div>

            <!-- 魚缸資料區 -->
            <div class="pro_t_info">

                <!-- 大圖+標題+按鈕的部分 -->
                <div class="pro_t_infoTop">
                    <!-- 左-大圖 -->
                    <div class="pro_t_infoTL mobileHidden">
                        <div>
                            <img id="tank_Large" src="src/image/product/pro-t0091.jpg" alt="主圖">
                        </div>
                    </div>
                    <!-- 右-大標小圖按鈕 -->
                    <div class="pro_t_infoTR">
                    
                        <h3>香草與魚</h3>
                        <ul class="pro_t_imgGroup pro_slick">
                            <li><img src="src/image/product/pro-t0091.jpg" alt="主圖"></li>
                            <li><img src="src/image/product/pro-t0092.jpg" alt="結構圖"></li>
                            <li><img src="src/image/product/pro-t0093.jpg" alt="細部圖"></li>
                            <li><img src="src/image/product/pro-t0094.jpg" alt="情境圖"></li>
                            <li><img src="src/image/product/pro-t0095.jpg" alt="尺寸圖"></li>
                        </ul>
                        <div class="pro_t_TBuy">
                            <span>$1950/個</span>
                            <span class="btn_green addButton" id="t009">加入購物車
                                <input type="hidden" name="proInfo" value="香草與魚|t009.jpg|1950">
                            </span>
                            <div class="ccc"></div>
                        </div>
                    
                    </div> <!--pro_t_infoR-->
                    <div class="ccc"></div>
                </div> <!--pro_t_infoTop-->


                <!-- 規格 -->
                <div class="pro_t_infoBottom">
                    <h4 class="pro_t_caption">產品規格</h4>
                    <p>
                        <!-- <?php //echo $tank_std ;?> -->
                        <!-- 包裝內容：香草與魚2.0智能版x1組(包含魚缸主體、燈架)、發泡煉石x1包、植物固定海綿、USB充電線x1(不含插頭)<br>
                        材　　質：鋁合金、塑料 <br>
                        商品尺寸：23.3 x 17.7 x 35.8 cm <br>
                        容　　量：1300 ml <br>
                        淨　　重：450g <br>
                        電壓規範：DC 5V 1A (若連接電腦建議使用USB3.0接孔) <br>
                        植物燈　：12 Light bulbs, 2w <br>
                        魚缸燈　：6 Light bulbs, 1w <br>
                        感溫棒　：IP67金屬導熱封裝ds18b20 溫度感測晶片 <br>
                        產　　地：台灣製造 <br> -->
                    </p>
                </div>


                <!-- 注意事項 -->
                <div class="pro_t_infoBottom">
                    <h4 class="pro_t_caption">注意事項</h4>
                    <p>
                        ※原廠保留產品規格修改權利，數據請以原廠資料為準。 <br>
                        ※PC缸體建議使用超細纖維布清洗，禁止使用菜瓜布、鋼刷等硬材質，以免造成缸面刮花。 <br>
                        ※商品圖檔為示意圖，其內容物不含植株及活體魚，實際商品內容僅含標準配備，購買前請詳閱配備說明。 <br>
                        ※建議飼養體積較小的淡水魚種，例：金魚/鬥魚/球魚/米老鼠/孔雀魚...等 <br>
                        ※魚種的生活飲食習慣以及疾病問題，可向水族館專業人員諮詢。 <br>
                        ※本賣場產品圖片，可能會因為拍攝角度、環境、螢幕設定、燈光明暗等因素，而產生色差，故請以實際收到貨品為準。<br>
                    </p>
                </div>               
            </div> <!--pro_t_info-->


            <?php
                } catch (PDOException $e) {
                    echo "錯誤原因 : " , $e->getMessage(),"<br>";
                    echo "行號 : " , $e->getLine(),"<br>";
                }
            ?>

          <?php require_once('Footer.php') ?>
        </section>


        
    </div> <!--container-->


<!-- 魚缸詳細資料輪播 -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="src/libs/slick/slick/slick.min.js"></script>
<script>
    $(document).ready(proSlick);

    function proSlick(){

        if (document.body.clientWidth < 767){
            $('.pro_slick').slick({
              dots:true,
              centerMode: true,
              centerPadding: '60px',
              slidesToShow: 3,
              responsive: [
                {
                  breakpoint: 480,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0',
                    slidesToShow: 1
                  }
                }
              ]
            });
        }

    }
   
</script>
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript" src="js/login-ajax.js"></script>





</body>
</html>