<?php include_once('include/head.inc.php');?>
	
<body>
<!--header-nav-->
<?php include_once('include/upper_nav.inc.php'); ?>
<!--end header nav-->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				
				<li><i class="fa fa-cart-arrow-down"></i><a href="#">Manage Account</a><span>|</span></li>
				
				<li><i class="fa fa-share-square"></i><a href="#">Notifications</a><span>|</span></li>	
				<li><i class="fa fa-sign-out"></i><a href="#">Logout</a></li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs" >
					<ol class="nav navbar-nav nav_1">
						<li><a href="issue.php">Issue Tender</a></li>
						<li><a href="edit1.php">Edit Tender</a></li>
						<li><a href="delete1.php">Delete Tender</a></li>
						<li><a href="#">Tender History</a></li>
						<li><a href="#">Successful Tender</a></li>
					<!--	<li><a href="products.html">Tranquilizers</a></li>
					    <li><a href="products.html">Antipyretics</a></li>
						<li><a href="products.html">Oral Contraceptives</a></li>-->
					</ol>
				 </div>
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>Manage Account</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Personal Details</div>
				  </div>
				  <div class="form">
					<h2>Hospital Details</h2>
					<form action="#" method="post">
					  Name<input type="text" name="name" placeholder="name" required=" " value="name">
					 Phone no <input type="text" name="phone no" placeholder="phone no" required=" " value="phone no">
					 Mail Id <input type="text" name="mail Id" placeholder="mail Id" required=" " value="mail Id">
					 Unique no <input type="text" name="unique no" placeholder="unique no" required=" " value="unique no">
					 Address<input type="text" name="address" placeholder="address" required=" " value="address">
					  <input type="submit" value="Submit">
					</form>
				  </div>
				  <div class="form">
					<h2>Personal Details</h2>
					<form action="#" method="post">
					  <input type="text" name="Name" placeholder="Name" required=" ">
					  <input type="email" name="Email" placeholder="Email Address" required=" ">
					  <input type="text" name="Phone" placeholder="Phone Number" required=" ">
					  <input type="text" name="Username" placeholder="Username" required=" ">
					  
					  <input type="submit" value="Submit">
					</form>
				  </div>
				  <div class="cta" id="forgetPass"><a href="#" style="visibility: visible;">Forgot your password?</a></div>
				</div>
			</div>
			<script type="text/javascript">
				function manufactuerDealerCheck(){
					    if (document.getElementById('manuCheck').checked) {
					        document.getElementById('ifManufacturer').style.display = 'block';
					      document.getElementById('ifDealer').style.display = 'none';
					    }
					  if (document.getElementById('dealCheck').checked) {
					        document.getElementById('ifDealer').style.display = 'block';
					    document.getElementById('ifManufacturer').style.display = 'none';
					  }

					}
			</script>
			<script>
				$('.toggle').click(function(){
				  
				 if ( $('#forgetPass').css('visibility') == 'hidden' )
    				$('#forgetPass').css('visibility','visible');
				  else
				    $('#forgetPass').css('visibility','hidden');
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
	<!<div class="newsletter-top-serv-btm">
		<div class="container">
			<div class="col-md-4 wthree_news_top_serv_btm_grid" align="left">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-sticky-note" aria.hidden="true"></i>
				</div>
				<h3><b>Release</b></h3>
				<p>Issue your tender for the online market.Get the best deals and rates.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid" align="center">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-bar-chart" aria-hidden="true"></i>
				</div>
				<h3><b>Record</b></h3>
				<p>Manage the records of your tenders.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid" align="right">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<h3><b>Deliver</b></h3>
				<p>Experience safe and authentic delivery of your products</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter-top-serv-btm -->
<!-- newsletter -->
<!--	<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>sign up for our newsletter</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="subscribe now">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div><!-- //newsletter -->
<!-- footer -->
		<?php include_once('include/footer.inc.php'); ?>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>