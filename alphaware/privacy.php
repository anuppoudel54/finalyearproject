<?php 
	include("function/login.php");
	include("function/customer_signup.php");
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
			<ul>
				<li><a href="#signup"   data-toggle="modal">Sign Up</a></li>
				<li><a href="#login"   data-toggle="modal">Login</a></li>
			</ul>
	</div>
	
	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Login...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
	
	<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Sign Up Here...</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Firstname" required>
						<input type="text" name="mi" placeholder="Middle Initial" maxlength="1" required>
						<input type="text" name="lastname" placeholder="Lastname" required>
						<input type="text" name="address" placeholder="Address" style="width:430px;"required>
						<input type="text" name="country" placeholder="Province" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">
						<input type="text" name="telephone" placeholder="Telephone Number" maxlength="8">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
	
	<br>
<div id="container">
	<div class="nav">	
			 <ul>
				<li><a href="index.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus.php">   <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus.php"><i class="icon-inbox"></i>Contact Us</a></li>
				<li><a href="privacy.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
				<li><a href="faqs.php"><i class="icon-question-sign"></i>FAQs</a></li>
			</ul>
	</div>
	

	
	
		<div id="content">
			<legend><h2>Privacy Policy</h2></legend>
			      <h3>1. What does this Privacy Policy cover?</h3>
				<p>Thank you for visiting a website or application provided by us. We are committed to respecting your privacy. This Privacy Policy outlines our collection and use of personal information. We collect information through: (a) our various websites; (b) various social media accounts and channels

				including, but not limited to, Facebook, Twitter, Instagram, Pinterest and YouTube; and (c) through our various other messaging, telephone and other forms of communications, mobile technologies, applications and services, in each case, as may be updated by us from time to time (collectively, the "Services"). The privacy practices outlined in this policy are incorporated by reference into our Terms of Use for the

				Services. Please note that we may have separate privacy policies for certain websites. Please be sure to consult with the website or application that you are using to understand our privacy practices for that website or application.

				Please consult this Privacy Policy from time to time since we may, at any time, and without notice, revise this Privacy Policy by updating this posting.

				If, at any time, you choose to not accept the terms of this Privacy Policy, you should not access or use the Services. Please continue reading below for information on how we use and disclose personal information
				</p>
			<hr>
				<h3>2. What types of Personal Information and related information do we collect from you?</h3>
					<p>The Services

We collect certain personal information through the Services described above - including through our websites, through social media accounts and channels, and via our applications, mobile technologies, telephone discussions, email and other forms of communication. In order for you to place orders, make purchases, complete transactions, interact with us or have access to certain features of the Services, we may require you to register or provide certain personal information. This information may include, but is not limited to, your name, contact information, email address, age or date of birth, payment information, rewards program information or a username and password.

Purchase and Recipient Information

When making purchases through the Services, we may also require you to provide a credit card, billing address and gift message and that you provide information about a recipient or potential recipient of a gift or a purchase you make through the Services.

Social Media Sites

We may also receive personal information from social media platforms, as well as from people with whom you are friends or are otherwise connected on social media platforms. For example, if you access the Services through a third-party connection or log in through Instagram, Twitter, Facebook Connect or another third-party service, by following." "liking. or linking your account to one or more of the Services, that third party may pass to us information about you, including, without limitation, your name, birthday, gender, user ID number, user ID number of your friends, the email address associated with your account, your profile picture, your physical location, your photos, your photo likes, your photo tags, and an access token to authenticate to the third-party service. We may also collect additional information regarding your hobbies, interests or "likes" that you make available through your profile on the third-party service, any other information that you have permitted the third party to share with us, and any information you have made public in connection with that service.

Third Parties

We may supplement the information you provide to us with data we obtain or receive from third parties, such as our affiliates, marketing firms, data vendors or address verification services. For example, if you change your address and fail to advise us, we may verify your address through a third-party address verification company. We may combine information we collect online with information we collect offline.

Mobile Applications

As disclosed upon installation (in case of Android) or prompted for permission (in the case of iOS), our mobile applications may access personal information on your device. For example, when placing an order through our mobile applications you may enter a shipping address from your device's address book or receive birthday reminders for contacts or if placing an order including an image our application would require access to your device's photo library:

Can I use a debit card?

Yes, we accopt debit cards as form of payment. However, please note that we authonze credit cards and debit cards at point of sale but we do not charge your card for an order until the order has shipped. This can be mistaken for a double billing. Each financial institution is different, therefore please refer to the issuing bank of your debit card for their specific authorization processes,</p>
			<hr>
				<h3>3. How do we use Personal Information?</h3>
					<p>We may use personal information in order to facilitate your use of the Services, including receiving, processing, fulfilling and delivering your purchases. We may use personal information to identify you when you log in to the Services, to provide a better experience through the Services, or to personalize your experience across the Services. We may also use personal information to better understand our customers and to better tailor or enhance the Services. For example, we may also use personal information for data analysis and segmentation, understanding our customers across our various platforms and brands, and providing recommendations and reminders for events and other business purposes. We may also use personal information as we believe to be necessary or appropriate to protect our rights, privacy, safety or property, and/or that of our affiliated companies, you or others, and to allow us to pursue available remedies or limit the damages that we may sustain.

					We may send you e-mail communications or promotional offers to an email address, through a device (such as a mobile device or application) or through other contact information provided through the Services. If you do not want to receive such communications from us, please see Section 9. We may contact you using information you have entered into the Services either recently or in the past regardless of whether you have opted in or out of email marketing messaging.

					To the extent to which you participate with interactive features through the Services such as the social media sites, any personal information that you provide may be published in the manner consistent with the interactive feature

					To the extent to which you participate in any sweepstakes, promotions or contests through the Services, any personal information provided by you may be used in accordance with separate or different terms and conditions under the applicable rules of such sweepstakes, promotion or contest, which may differ from this Privacy Policy

					By providing information through the Services (including through our mobile applications), you authorize us to share information among our family of websites and mobile applications Further, certain of the Services including through our mobile applications) allow for cross application authentication which means that not you log in to one of the Services voir may be logged in to any of the services as well</p>
					
			<hr>
				<h4>Online policy</h4>
					<p>The Privacy Policy does not extend to anything that is inherent in the operation of the internet, and 
						therefore beyond adidas' control, and is not to be applied in any manner contrary to applicable law or 
						governmental regulation. This online privacy policy only applies to information collected through our 
						website and not to information collected offline.</p>
			
		</div>
	<br />
</div>
	<br />
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyrght &copy; </label>
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