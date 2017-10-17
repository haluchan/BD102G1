<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>商品頁</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<script src="src/libs/jquery/dist/jquery.min.js"></script>
<script src="src/libs/slick/slick/slick.min.js"></script>
<script src="js/product.js"></script>
<link rel="stylesheet" type="text/css" href="src/libs/slick/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="src/libs/slick/slick/slick.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" type="text/css" href="src/libs/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/product.css">
</head>
<body>
    <?php require_once('Header.php') ?> 

    <div class="pro_container">
        <!-- 種子頁 -->
        <section class="pro_seed">
            
            <!-- 遮雨棚+標題 -->
            <div class="pro_tent">
                <div><img src="src/image/product/pro-tent.png"></div>
                <h1>種子市場</h1>
            </div>
        
            <!-- 商品區 -->
            <ul class="pro_s_cabinet" id="pro_s_cabinet">
        
                <!-- 商品:li*8>div*2 -->
                <li class="pro_s_each">
                    
                    <!-- hover前:菜圖+菜名 -->
                    <div class="pro_s_vegetable">
        
                        <!-- 菜的牌子 -->
                        <div class="pro_s_brand">
                            <div><img src="src/image/product/pro-brand.png"></div>
                            <div>朝天椒</div>
							<div class="pro_s_new"><img src="src/image/product/pro-new.png" alt=""></div>
                        </div>
                        
                        <!-- 菜菜 -->
                        <div class="pro_s_img"><img src="src/image/product/pro-s001.png" alt></div>
        
                    </div>
        
                    <!-- hover後:資訊+購買 -->
                    <div class="pro_s_white">
                        <div class="pro_s_info">
                            <h2>朝天椒</h2>
                            <div class="pro_s_line"></div>
                            <p class="pro_s_txt">
                                發芽適溫：25~30℃<br>
                                    平均採收：75-90天<br>
                                    日照條件：半日照可<br>
                                    辣味極強，早生，豐產<br>
                            </p>
                            <div class="pro_s_buy">
                                <span>$50/包</span>
                                <span class="btn_green addButton" id="s001">加入購物
                                    <input type="hidden" name="proInfo" value="朝天椒|s001.png|50">
                                </span>
                            </div>
                        </div>
                    </div>
        
                </li>
				




                <li class="pro_s_each">  
                    <!-- hover前:菜圖+菜名 -->
                    <div class="pro_s_vegetable">
        
                        <!-- 菜的牌子 -->
                        <div class="pro_s_brand">
                            <div><img src="src/image/product/pro-brand.png"></div>
                            <div>青江菜</div>
							<div class="pro_s_new"><img src="src/image/product/pro-new.png" alt=""></div>
                        </div>
                        
                        <!-- 菜菜 -->
                        <div class="pro_s_img"><img src="src/image/product/pro-s002.png" alt></div>
        
                    </div>
        
                    <!-- hover後:資訊+購買 -->
                    <div class="pro_s_white">
                        <div class="pro_s_info">
                            <h2>青江菜</h2>
                            <div class="pro_s_line"></div>
                            <p class="pro_s_txt">
                                發芽適溫：20~30℃<br>
                                平均採收：30-35天<br>
                                日照條件：全日照<br>
                                青梗湯匙菜，煮食口感佳<br>
                            </p>
                            <div class="pro_s_buy">
                                <span>$50/包</span>
                                <span class="btn_green addButton" id="s002">加入購物
                                    <input type="hidden" name="proInfo" value="青江菜|s002.png|50">
                                </span>
                            </div>
                        </div>
                    </div>
        
                </li>
				





                <li class="pro_s_each">  
                    <!-- hover前:菜圖+菜名 -->
                    <div class="pro_s_vegetable">
        
                        <!-- 菜的牌子 -->
                        <div class="pro_s_brand">
                            <div><img src="src/image/product/pro-brand.png"></div>
                            <div>小南瓜</div>
							<div class="pro_s_new" hidden><img src="src/image/product/pro-new.png" alt=""></div>
                        </div>
                        
                        <!-- 菜菜 -->
                        <div class="pro_s_img"><img src="src/image/product/pro-s003.png" alt></div>
        
                    </div>
        
                    <!-- hover後:資訊+購買 -->
                    <div class="pro_s_white">
                        <div class="pro_s_info">
                            <h2>小南瓜</h2>
                            <div class="pro_s_line"></div>
                            <p class="pro_s_txt">
                                發芽適溫：22~30℃<br>
                                平均採收：開花後35-40天<br>
                                果皮墨綠色，黏性強，口感極佳<br>
                            </p>
                            <div class="pro_s_buy">
                                <span>$50/包</span>
                                <span class="btn_green addButton" id="s003">加入購物
                                    <input type="hidden" name="proInfo" value="小南瓜|s003.png|50">
                                </span>
                            </div>
                        </div>
                    </div>
        
                </li>
				
                <li class="pro_s_each">  
                    <!-- hover前:菜圖+菜名 -->
                    <div class="pro_s_vegetable">
        
                        <!-- 菜的牌子 -->
                        <div class="pro_s_brand">
                            <div><img src="src/image/product/pro-brand.png"></div>
                            <div>多彩椒</div>
							<div class="pro_s_new" hidden><img src="src/image/product/pro-new.png" alt=""></div>
                        </div>
                        
                        <!-- 菜菜 -->
                        <div class="pro_s_img"><img src="src/image/product/pro-s004.png" alt></div>
        
                    </div>
        
                    <!-- hover後:資訊+購買 -->
                    <div class="pro_s_white">
                        <div class="pro_s_info">
                            <h2>多彩椒</h2>
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
                    </div>
        
                </li>
				
                <li class="pro_s_each">  
                    <!-- hover前:菜圖+菜名 -->
                    <div class="pro_s_vegetable">
        
                        <!-- 菜的牌子 -->
                        <div class="pro_s_brand">
                            <div><img src="src/image/product/pro-brand.png"></div>
                            <div>觀賞茄</div>
							<div class="pro_s_new" hidden><img src="src/image/product/pro-new.png" alt=""></div>
                        </div>
                        
                        <!-- 菜菜 -->
                        <div class="pro_s_img"><img src="src/image/product/pro-s005.png" alt></div>
        
                    </div>
        
                    <!-- hover後:資訊+購買 -->
                    <div class="pro_s_white">
                        <div class="pro_s_info">
                            <h2>觀賞茄</h2>
                            <div class="pro_s_line"></div>
                            <p class="pro_s_txt">
                                發芽適溫：22~30℃<br>
                                平均採收：75天<br>
                                日照條件：半日照<br>
                                富含花青素，抗病性強<br>
                            </p>
                            <div class="pro_s_buy">
                                <span>$50/包</span>
                                <span class="btn_green addButton" id="s005">加入購物
                                    <input type="hidden" name="proInfo" value="觀賞茄|s005.png|50">
                                </span>
                            </div>
                        </div>
                    </div>
        
                </li>
				
                <li class="pro_s_each">  
                    <!-- hover前:菜圖+菜名 -->
                    <div class="pro_s_vegetable">
        
                        <!-- 菜的牌子 -->
                        <div class="pro_s_brand">
                            <div><img src="src/image/product/pro-brand.png"></div>
                            <div>紅蘿蔔</div>
							<div class="pro_s_new" hidden><img src="src/image/product/pro-new.png" alt=""></div>
                        </div>
                        
                        <!-- 菜菜 -->
                        <div class="pro_s_img"><img src="src/image/product/pro-s006.png" alt></div>
        
                    </div>
        
                    <!-- hover後:資訊+購買 -->
                    <div class="pro_s_white">
                        <div class="pro_s_info">
                            <h2>紅蘿蔔</h2>
                            <div class="pro_s_line"></div>
                            <p class="pro_s_txt">
                                發芽適溫：20~30℃<br>
                                平均採收：75-90天<br>
                                日照條件：半日照<br>
                                甜度高，適生鮮食用<br>
                            </p>
                            <div class="pro_s_buy">
                                <span>$50/包</span>
                                <span class="btn_green addButton" id="s006">加入購物
                                    <input type="hidden" name="proInfo" value="紅蘿蔔|s006.png|50">
                                </span>
                            </div>
                        </div>
                    </div>
        
                </li>
				
                <li class="pro_s_each">  
                    <!-- hover前:菜圖+菜名 -->
                    <div class="pro_s_vegetable">
        
                        <!-- 菜的牌子 -->
                        <div class="pro_s_brand">
                            <div><img src="src/image/product/pro-brand.png"></div>
                            <div>小番茄</div>
							<div class="pro_s_new" hidden><img src="src/image/product/pro-new.png" alt=""></div>
                        </div>
                        
                        <!-- 菜菜 -->
                        <div class="pro_s_img"><img src="src/image/product/pro-s007.png" alt></div>
        
                    </div>
        
                    <!-- hover後:資訊+購買 -->
                    <div class="pro_s_white">
                        <div class="pro_s_info">
                            <h2>小番茄</h2>
                            <div class="pro_s_line"></div>
                            <p class="pro_s_txt">
                                發芽適溫：25-32℃<br>
                                平均採收：60-75天<br>
                                日照條件：全日照<br>
                                果肉厚實飽滿，座果率高<br>
                            </p>
                            <div class="pro_s_buy">
                                <span>$50/包</span>
                                <span class="btn_green addButton" id="s007">加入購物
                                    <input type="hidden" name="proInfo" value="小番茄|s007.png|50">
                                </span>
                            </div>
                        </div>
                    </div>
        
                </li>
				
                <li class="pro_s_each">  
                    <!-- hover前:菜圖+菜名 -->
                    <div class="pro_s_vegetable">
        
                        <!-- 菜的牌子 -->
                        <div class="pro_s_brand">
                            <div><img src="src/image/product/pro-brand.png"></div>
                            <div>四季蔥</div>
							<div class="pro_s_new" hidden><img src="src/image/product/pro-new.png" alt=""></div>
                        </div>
                        
                        <!-- 菜菜 -->
                        <div class="pro_s_img"><img src="src/image/product/pro-s008.png" alt></div>
        
                    </div>
        
                    <!-- hover後:資訊+購買 -->
                    <div class="pro_s_white">
                        <div class="pro_s_info">
                            <h2>四季蔥</h2>
                            <div class="pro_s_line"></div>
                            <p class="pro_s_txt">
                                發芽適溫：20~30℃<br>
                                平均採收：100-120天<br>
                                長壽蔥，肉質軟，味甜<br>
                            </p>
                            <div class="pro_s_buy">
                                <span>$50/包</span>
                                <span class="btn_green addButton" id="s008">加入購物
                                    <input type="hidden" name="proInfo" value="四季蔥|s008.png|50">
                                </span>
                            </div>
                        </div>
                    </div>
        
                </li>

                <!-- 手機版的種子資訊，蓋全版，透過js抽換資料 -->
                <div class="pro_s_mobileInfo" id="pro_s_mobileInfo">

  <!--                   <div class="pro_s_white">
  						<span class="iii"><img src="src/image/login/pop_close.png"></span>
                        <div class="pro_s_info">
                            <h2>多彩椒</h2>
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
                <h1>魚缸超市</h1>
            </div>

            <!-- 商品區-魚缸 -->
            <div class="pro_t_wheel">

                <div class="pro_t_lightbox">
                    <!-- 商品選單 -->
                    <ul class="pro_t_shelf" id="pro_t_shelf">

                        <li class="pro_t_each" id="t001">
                            <div class="pro_click">
                                <img src="src/image/product/pro-t0011.jpg" alt="">
                            </div>
                            <div>
                                <div class="pro_s_name">香草與魚 Herb & Fish</div>
                                <div>$9999/個</div>
                            </div>
                        </li>

                        <li class="pro_t_each" id="t004">
                            <div>
                                <img src="src/image/product/pro-t0011.jpg" alt="">
                            </div>
                            <div>
                                <div class="pro_s_name">香草與魚 Herb & Fish</div>
                                <div>$9998/個</div>
                            </div>
                        </li>
                        
                        <div class="pro_t_shelfImg">
                            <img src="src/image/product/pro-shelf.png">
                        </div>

                        <li class="pro_t_each" id="t002">
                            <div>
                                <img src="src/image/product/pro-t0021.jpg" alt="">
                            </div>
                            <div>
                                <div class="pro_s_name">水中幻月 Water Moon</div>
                                <div>$8888/個</div>
                            </div>
                        </li>
                                        
                        <li class="pro_t_each" id="t003">
                            <div>
                                <img src="src/image/product/pro-t0031.jpg" alt="">
                            </div>
                            <div>
                                <div class="pro_s_name">水中幻月 Water Moon</div>
                                <div>$7777/個</div>
                            </div>
                        </li>
                        <div class="ccc"></div>
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
                            <img id="tank_Large" src="src/image/product/pro-t0011.jpg" alt="主圖">
                        </div>
                    </div>
                    <!-- 右-大標小圖按鈕 -->
                    <div class="pro_t_infoTR">
                    
                        <h2>香草與魚 Herb & Fish</h2>
                        <ul class="pro_t_imgGroup" id="myElement" >
                            <li><img src="src/image/product/pro-t0011.jpg" alt="主圖"></li>
                            <li><img src="src/image/product/pro-t0012.jpg" alt="結構圖"></li>
                            <li><img src="src/image/product/pro-t0013.jpg" alt="細部圖"></li>
                            <li><img src="src/image/product/pro-t0014.jpg" alt="情境圖"></li>
                            <li><img src="src/image/product/pro-t0015.jpg" alt="尺寸圖"></li>
                        </ul>
                        <div class="pro_t_TBuy">
                            <span>$9999/個</span>
                            <span class="btn_green addButton" id="t001">加入購物車
                                <input type="hidden" name="proInfo" value="香草與魚I|t001.jpg|999">
                            </span>
                        </div>
                    
                    </div> <!--pro_t_infoR-->
                    <div class="ccc"></div>
                </div> <!--pro_t_infoTop-->


                <!-- 規格和注意事項 -->
                <div class="pro_t_infoBottom">
                    <h3 class="pro_t_caption">產品規格</h3>
                    <p>
                        包裝內容：香草與魚2.0智能版x1組(包含魚缸主體、燈架)、發泡煉石x1包、植物固定海綿、USB充電線x1(不含插頭)<br>
                        材　　質：鋁合金、塑料 <br>
                        商品尺寸：23.3 x 17.7 x 35.8 cm <br>
                        容　　量：1300 ml <br>
                        淨　　重：450g <br>
                        電壓規範：DC 5V 1A (若連接電腦建議使用USB3.0接孔) <br>
                        植物燈　：12 Light bulbs, 2w <br>
                        魚缸燈　：6 Light bulbs, 1w <br>
                        感溫棒　：IP67金屬導熱封裝ds18b20 溫度感測晶片 <br>
                        產　　地：台灣製造 <br>
                    </p>
                </div>

                <div class="pro_t_infoBottom">
                    <h3 class="pro_t_caption">注意事項</h3>
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

          <?php require_once('Footer.php') ?>
        </section>


        
    </div> <!--container-->

</body>
</html>