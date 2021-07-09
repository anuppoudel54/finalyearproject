<?php
	include("function/session.php");
	include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>e-Gift Shoppe</title>
	<link rel="icon" href="img\favicon.ico">
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
	<a href="#">
	<img src="img/172155.png">
		<label>Gift Shoppe</label>
			
			<?php

				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
	
			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile"  data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	</div>
	
	<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">My Account</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];
			
								$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = mysqli_fetch_array ($query);
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Country:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Telephone Number:</td><td class="profile"><?php echo $fetch['telephone'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
	
	
	
	<br>
<div id="container">
	<div class="nav">	
			 <ul>
				<li><a href="home.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product1.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus1.php">   <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus1.php"><i class="icon-inbox"></i>Contact Us</a></li>
				<li><a href="privacy1.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
				<li><a href="faqs1.php"><i class="icon-question-sign"></i>FAQs</a></li>
			</ul>
	</div>
	
	<form method="post" class="well" style="background-color:#fff;">
	<table class="table">
	<label style="font-size:25px;">My orders</label>
	<thead>	
							<th>Product</th>
							<th>Transaction No.</th>
							<th>AMOUNT</th>
							<th>Current Rating</th>
							<th>Change Rating</th>
						</thead>
		
	<tbody>
							<?php 
						
							if (isset($_POST['submit'])) {
							$Q4 = mysqli_query($conn, "SELECT * FROM rating WHERE uid = $id and pid='$_POST[poid]'");
							$r4 = mysqli_num_rows($Q4);
							print_r($r4);
							if ($r4>0) {
								$rtup=mysqli_query($conn,"UPDATE rating set rating='$_POST[rating]' where pid='$_POST[poid]'");

							}
							else{
							
							
							
							
							
							
								
	                       $result=mysqli_query($conn,"INSERT into rating(uid,pid,pname,rating)values('$id','$_POST[poid]','$_POST[void]','$_POST[rating]')");
	                        }
	                    }
							
							

							$Q1 = mysqli_query($conn, "SELECT * FROM transaction WHERE order_stat = 'Confirmed'and customerid='$id'");
							while($r1 = mysqli_fetch_array($Q1)){
						
							$tid = $r1['transaction_id'];
							
							$Q2 = mysqli_query($conn, "SELECT * FROM transaction_detail LEFT JOIN product ON product.product_id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$tid' ");
							$r2 = mysqli_fetch_array($Q2);
							
							$pid = $r2['product_id'];
							
							$o_qty = $r2['order_qty'];
							
							$p_price = $r2['product_price'];
							$brand = $r2['product_name'];

							$Q3 = mysqli_query($conn, "SELECT * FROM rating WHERE uid = $id and pid='$pid'");
							$r3 = mysqli_fetch_array($Q3);
							@$rate=$r3['rating'];
							print_r($rate);
							
							
                         $Q4=mysqli_query($conn,"INSERT into orders (uiid,tid,prname,tmo) VALUES($_SESSION[id],'$r1[transaction_id]','$r2[product_name]','$r2[product_price]')");
                         @$q5=mysqli_query($conn,"UPDATE orders set currate='$r3[rating]' where tid='$r1[transaction_id]'");
                          

		                   



							
							echo "<tr>";
							echo "<td>".$brand."</td>";
							echo "<td>".$tid."</td>";
							echo "<td>".formatMoney($p_price)."</td>";

							if(@is_null($r3['rating']))
								{
									echo "<td>Not Rated</td>";
								}
							else{
								$rate=$r3['rating'];
								echo "<td>".$rate."</td>";
							}
							echo '<td> <form action="order.php" method="post">
							<input type="number" name="rating" id ="rating" min="1" max="5">
							<input type="hidden" name="poid" value='.$pid.'>
							<input type="hidden" name="void" value='.$brand.'>
							<input type="submit" name="submit">


							</form>


							</td>';
							echo "</tr>";
							//cho print_r($r1);
							//echo print_r($brand);

							
							}
							
							// $Q3 = mysqli_query($conn, "SELECT sum(amount) FROM transaction WHERE order_stat = 'Confirmed'");
							// while($r3 = mysqli_fetch_array($Q3)){
							
							// $amnt = $r3['sum(amount)'];
							// echo "<tr><td></td><td>TOTAL : </td> <td><b>Php ".formatMoney($amnt)."</b></td></tr>";
							
                             
							// }


							?>
						  </tbody>

	</table>
	</form>
	
			
			
		</div>
		<?php
function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}
?>
			
			
		<br />		
		<br />	
</div>
<br />
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; </label>
			<p style="font-size:25px;">E-Gift Shoppe Inc. 2021</p>
		</div>
			
			<div id="foot">
				<h4>Links</h4>
					<ul>
						<a href="http://www.facebook.com/alphaware"><li>Facebook</li></a>
						<a href="http://www.twitter.com/alphaware"><li>Twitter</li></a>
						<a href="http://www.pinterest.com/alphaware"><li>Pinterest</li></a>
						<a href="http://www.tumblr.com/alphaware"><li>Tumblr</li></a>
					</ul>
			</div>
	</div>
</body>
</html>