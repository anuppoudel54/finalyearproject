<?php
	@include("function/session.php");
	include("db/dbconn.php");
	include("recommend.php");

$id = (int) $_SESSION['id'];




$Q1= mysqli_query($conn,"SELECT * FROM rating") or die(mysqli_error());
$matrix=array();
while($gift=mysqli_fetch_array($Q1)){
	$user=mysqli_query($conn,"SELECT firstname FROM customer where customerid=$gift[uid]");
	$username=mysqli_fetch_array($user);


$matrix[$username['firstname']] [$gift['pname']]=$gift['rating'];
}
$user=mysqli_query($conn,"SELECT firstname FROM customer where customerid=$id");
	$username=mysqli_fetch_array($user);
	//print_r($username);

	 $recommendation=array();
	 $recommendation=getRecommendation($matrix,$username['firstname']);
	 //print_r($recommendation);

/////////display
   // foreach ($recommendation as $gift => $rating) {
  	// //print_r($gift);

   // 	$query = mysqli_query($conn, "SELECT *FROM product where product_name='$gift'") or die (mysqli_error());
   // 	while($fetch=mysqli_fetch_array($query)){
   // 		//print_r($fetch);
   // 		echo "<div class='float'>";
			// 				echo "<center>";
			// 				echo "<a href='details.php?id=".$fetch['product_id']."'><img class='img-polaroid' src='photo/".$fetch['product_image']."' height = '300px' width = '300px'></a>";
			// 				echo "".$fetch['product_name']."";
			// 				echo "<br />";
			// 				echo "P ".$fetch['product_price']."";
			// 				echo "<br />";
			// 				echo "<h3 class='text-info' style='position:absolute; margin-top:-90px; text-indent:15px;'> Size: ".$fetch['product_size']."</h3>";
			// 				echo "</center>";
			// 				echo "</div>";

       
   // 	}


   //}


	
?>



