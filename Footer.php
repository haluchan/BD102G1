
	
	

	<footer class="col-xs-12 backgroundimg">
			<div class="footer-space"></div>

				<div class="footerTitle">
					<img class="header-img" src="src/image/hopeFarm/footer-title.png">
				</div>
				<div class="footerItemList">
					<ul>
						<li><a class="header-a" href="hopeFarm.php"><h3 class="header-h3">希望農場</h3></a></li>
						<li><a class="header-a" href="event.php"><h3 class="header-h3">體驗活動</h3></a></li>
						<li><a class="header-a" href="fish.php"><h3 class="header-h3">都市小農</h3></a></li>
						<li><a class="header-a" href="pointFarm.php"><h3 class="header-h3">紅利菜園</h3></a></li>
						
					</ul>
					<ul>
						<li><a class="header-a" href="product.php"><h3 class="header-h3">商品專區</h3></a></li>
						<!-- <li><a class="header-a" href="member.php"><h3 class="header-h3">會員專區</h3></a></li> -->
						<li><h3 id="memH3" class="header-h3">會員專區</h3></li>
						<li><a class="header-a" href="application.php"><h3 class="header-h3">申請資助</h3></a></li>
						
					</ul>
					<ul>
						<li><a class="header-a" ><h3 class="header-h3">聯絡我們</h3></a></li>
						<li><a class="header-a" ><h3 class="header-h3">03-4257387</h3></a></li>
						<li><a class="header-a" ><h3 class="header-h3">320 桃園市中壢區中大路300號</h3></a></li>
					</ul>
			  </div>
			  <div class="footerIcon">
					<a class="header-a" href=""><img class="header-img" src="src/image/hopeFarm/footer-icon01.png"></a>
					<a class="header-a" href=""><img class="header-img" src="src/image/hopeFarm/footer-icon02.png"></a>
					<a class="header-a" href=""><img class="header-img" src="src/image/hopeFarm/footer-icon03.png"></a>
					
			  </div>
			  <div class="clear"></div>
			
	</footer>

<script type="text/javascript" src="js/NAV-HEAD.js"></script>
<script type="text/javascript">
// document.addEventListener("load" , function(){
//===memH3.click
var member4=document.getElementById("memH3");
member4.addEventListener("click" ,memberarea,false);
// document.getElementById("memH3").click(){
// alert("test");
  	
function memberarea(){
  	var xhr = new XMLHttpRequest();
  	xhr.onreadystatechange = function(){
  		if(xhr.readyState==4){
			if( xhr.status == 200){
  				if( (xhr.responseText).indexOf('error') !== -1){
  					alert("not yet");
  				}else{
  				// alert("123");
  				location.href = "member.php";
  				}
  			}else{
  				alert( xhr.status );
  			}
  		}
  	}
  	var url = "memCheckLoginStatus.php";
    xhr.open( "Get" , url , true);
    xhr.send( null );
}


	//===memH3.click
// ,true);
</script>
