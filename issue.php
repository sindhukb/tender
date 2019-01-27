<?php include_once('include/head.inc.php');?>
	
<body>
<!--header-nav-->
<?php include_once('include/upper_nav.inc.php'); ?>
<!--end header nav-->
<!-- dealer nav bar-->
	<?php include_once('include/nav2.inc.php'); ?>
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
						<li><a href="products.html">Tender History</a></li>
						<li><a href="products.html">Successful Tender</a></li>
					<!--	<li><a href="products.html">Tranquilizers</a></li>
					    <li><a href="products.html">Antipyretics</a></li>
						<li><a href="products.html">Oral Contraceptives</a></li>-->
					</ol>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		</div>
	
<!-- //dealer nav bar-->,
		<div class="w3_login">
			<h3>Issue Tender</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					
				  </div>
	            <div class="form" style="display:visible;">
					<form action="#" method="post">
					 Component Name<input type="text" name="cname"  required=" "><br>
					 Composition<input type="text" name="composition"  required=" "><br>
					 Expected rate<br><input type="text" name="rate"  required=" "><br>
					 Expected Date-Of-Delivery<input type="date" name="dod"  required=" "><br><br>
					 Tender Start-Date<br><input type="Date" name="sd" required=" "><br><br>
					 Tender End-Date<br><input type="Date" name="ed" required=" "  height="42px" width="320px"><br><br>
					 <input type="submit" value="Submit"><br><br>
					 </form>
					<div class="cta"  style=" background:#84C639; width: 100%;border: 0;padding: 0px 15px;font-size: 14px;font-weight: bold;">
					<form>
					<input type="submit" onclick="notification_hospital.php" value="Cancel">
					</form></div>
				</div>
			</div>
		</div>
	</div>
			
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

			if (total < 1) {
				alert('The minimum order quantity is 1. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>