<?php include_once('include/head.inc.php');?>
	
<body>
<!--header-nav-->
<?php include_once('include/upper_nav.inc.php'); ?>
<!--end header nav-->
<!-- products-breadcrumb -->
<?php include_once('include/navigator_dealer.inc.php'); ?>

		<div class="w3_login">
			<h3>Request Order</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					
				  </div>
	            <div class="form" style="display:visible;">
					<h2>Request Order</h2>
					<form action="#" method="post">
					 Drug Name <input type="text" name="dname" placeholder="Drug Name" required=" "><br>
					 Company Name <input type="text" name="cname" placeholder="Comapany Name" required=" "><br>
					 Composition <br><input type="text" name="composition" placeholder="composition" required=" "><br>
					 Quantity<input type="text" name="quantity" placeholder="quantity" required=" "><br>
					 Date<br><input type="Date" name="date" placeholder="Date" required=" "><br><br><br>
					  <input type="submit" value="Submit">

					</form>
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