<?php
/**
 * 
 * @authors halu (you@example.org)
 * @date    2017-10-28 18:39:43
 * @version $Id$
 */

isset($_SESSION["mem_id"] === false){
	echo "<input type='hidden' id='idCheck' name='' value='checked'>";

}

?>

<script type="text/javascript">
	
	var idCheck = document.getElementById("idCheck");

	function idcheck(){

		if (idCheck.value !== "checked"){

			document.alert("請先登入");

		} 
	}


</script>