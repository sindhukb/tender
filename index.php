<?php include_once('include/head.inc.php');?>

	

<body>

<!--header-nav-->

<!-- header -->

	<div class="agileits_header">

		<div class="w3l_offers">

			<a href="index.php">Online tendering!!</a>

		</div>

		

		<div class="clearfix"> </div>

	</div>

<!-- script-for sticky-nav -->

	<script>

	$(document).ready(function() {

		 var navoffeset=$(".agileits_header").offset().top;

		 $(window).scroll(function(){

			var scrollpos=$(window).scrollTop(); 

			if(scrollpos >=navoffeset){

				$(".agileits_header").addClass("fixed");

			}else{

				$(".agileits_header").removeClass("fixed");

			}

		 });

		 

	});

	</script>

<!-- //script-for sticky-nav -->

	<div class="logo_products">

		<div class="container">

			

				<h1 align="center"><i class="fa fa-medkit"></i>&nbsp;<span>Tender</span> Manager</a></h1>

			<!--<div class="w3ls_logo_products_left1">

				<ul class="special_items">

					<li><a href="events.html">Events</a><i>/</i></li>

					<li><a href="about.html">About Us</a><i>/</i></li>

					<li><a href="products.html">Best Deals</a><i>/</i></li>

					<li><a href="services.html">Services</a></li>

				</ul>

			</div>-->

			<!--<div class="w3ls_logo_products_left1">

				<ul class="phone_email">

					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>

					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>

				</ul>

			</div>-->

			<div class="clearfix"> </div>

		</div>

	</div>

<!-- //header -->

<!--end header nav-->

<!-- products-breadcrumb -->

	<div class="products-breadcrumb">

		<div class="container">

			<ul>

				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>

				<li><i class="fa fa-sign-out" aria-hidden="true"></i><a href="login.php">Login | Signup</a><span>|</span></li>

				<li><i class="fa fa-group" aria-hidden="true"></i><a href="about.php">About Us</a><span>|</span></li>

				<!--<li><i class="fa fa-question-circle" aria-hidden="true"></i><a href="#">FAQ</a></li>

				<!--<li>Branded Foods</li>-->

			</ul>

		</div>

	</div>

<!-- //header -->

<!-- banner -->

	<div class="banner">

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

				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">

					<ul class="nav navbar-nav nav_1">

						<li><a href="index.php">E-Tendering System</a></li>

						<li><a href="login.php">Issue your Tender online</a></li>

						<li><a href="login.php">Find the best deals</a></li>

					    <li><a href="login.php">Manage Tender Records</a></li>

					</ul>

				 </div><!-- /.navbar-collapse -->

			</nav>

		</div>

		<div class="w3l_banner_nav_right">
			<div class="container">
			<img src="images/0.jpg" height="400" width="1080"><br><br><br><br><br>
			<!--<div class="centered" style="height:500;width=500;">Centered</div>-->
			</div>

		</div>

		<div class="clearfix"></div>

	</div>

<!-- banner -->



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

