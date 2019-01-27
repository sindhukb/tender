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
				<li>Log In & Sign Up</li>
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
						<li><a href="#">E-Tendering System</a></li>
						<li><a href="#">Issue your tender online</a></li>
						<li><a href="#">Find the best deals</a></li>
						<li><a href="#">Manage tender records</a></li>
					<!--	<li><a href="#">Tranquilizers</a></li>
					    <li><a href="#">Antipyretics</a></li>
						<li><a href="#">Oral Contraceptives</a></li>-->
					</ol>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>Log In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Sign Up</div>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="php/login_controller.php" method="POST">
						<span id="error_login" style="display: none;"></span>
					  <input type="text" name="username" id="username_login" placeholder="username" required=" " >
					  <input type="password" name="password" id="password_login" placeholder="********" required=" " >
					  <input type="submit" value="Login">
					</form>
					<?php  
						if(isset($_GET['status']))
						{  
						if($_GET['status']=='fail')
						{
					?>
					<script type="text/javascript">
							document.getElementById('username_login').style.borderColor = "red";
							document.getElementById('password_login').style.borderColor = "red";
							document.getElementById('error_login').style.display="block";
							document.getElementById('error_login').style.color="red";
        					$("#error_login").html("Username or Password incorrect");
        			</script>
        			<?php 
        			}
        			} ?>
					
				  </div>
				  <div class="form">
					<h2>Create an account(POC's Details)</h2>
					<form action="php/signup_controller.php" method="POST">
					  <input type="text" name="name" id="name" placeholder="Name" required=" ">
					  <input type="email" name="email" id="email" placeholder="Email Address" required=" ">
					  <input type="text" name="phone" id="phone" placeholder="Phone Number" required=" ">
					  <input type="text" name="username" id="username" placeholder="Username" required=" " onblur="checkUsernameAvail()"><span id="uname_check" style="display:none; padding-bottom: 10px "></span>
					  <input type="password" name="password" id="password" placeholder="Password" required=" ">
					  <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required=" ">
					  <p><b>Sign in as:</b></p>
					  <input type="radio" onclick="javascript:manufactuerHospitalCheck();" name="manuhos" id="manuCheck" value="0" required=" ">&nbsp; Manufacturer<br>
					  <input type="radio" onclick="javascript:manufactuerHospitalCheck();" name="manuhos" value="1" id="hosCheck">&nbsp; Hospital<br><br>
					  <div id="ifHospital" style="display:none;">
				      <label> Hospital Details</label><br>
				      	<input type="text" name="hname" id="hname" placeholder="Hospital Name" >
				      	<input type="text" name="haddress" id="haddress" placeholder="Address" >
				      	<input type="text" name="hphone" id="hphone" placeholder="Hospital Contact Detail" >
				      	<input type="email" name="hemail" id="hemail" placeholder="Hospital Email Address" >
				      	<input type="text" name="uid" id="uid" placeholder="Unique Identification Number" >
						<br>
				      </div>
				      <div id="ifManufacturer" style="display:none;">
				      	<label> Company Details</label><br>
				      	<input type="text" name="cname" id="cname" placeholder="Company Name" >
				      	<input type="text" name="caddress" id="caddress" placeholder="Address" >
				      	<input type="text" name="cphone" id="cphone" placeholder="Company Contact Detail" >
				      	<input type="email" name="cemail" id="cemail" placeholder="Company Email Address" >
				      	<input type="text" name="gstno" id="gstno" placeholder="GST Number" >
				      </div>
					  <input type="submit" value="Register" name="submit">
					</form>
				  </div>
				  <div class="cta" id="forgetPass"><a href="#" style="visibility: visible;">Forgot your password?</a></div>
				</div>
			</div>
			<script type="text/javascript">
				function manufactuerHospitalCheck(){
					    if (document.getElementById('manuCheck').checked) {
					        document.getElementById('ifManufacturer').style.display = 'block';
					      document.getElementById('ifHospital').style.display = 'none';
					    }
					  if (document.getElementById('hosCheck').checked) {
					        document.getElementById('ifHospital').style.display = 'block';
					    document.getElementById('ifManufacturer').style.display = 'none';
					  }

					}
			</script>
			<script>
				function checkUsernameAvail()
				{
					var uname=document.getElementById('username').value;
					//console.log(uname)
					 $.ajax({
					 	type:'GET', 
					 	url: 'php/checkusername.php?username='+uname,
					 	//dataType: 'json',
					 	success: function(data){
					 	//console.log(data);
        				if (data==0)
        				{
        					//console.log(data);
        					document.getElementById('uname_check').style.display="block";
        					document.getElementById('uname_check').style.color="green";
        					document.getElementById('username').style.borderColor = "green";
        					$("#uname_check").html("");
        				}
        				else if(data==2)
        				{
        					document.getElementById('uname_check').style.display="block";
        					document.getElementById('uname_check').style.color="red";
        					document.getElementById('username').style.borderColor = "red";
        					$("#uname_check").html("Username cannot be empty");
        				}
        				else
        				{
        					//console.log(data);
        					document.getElementById('uname_check').style.display="block";
        					document.getElementById('uname_check').style.color="red";
        					document.getElementById('username').style.borderColor = "red";
        					$("#uname_check").html("Username Already Exists. Try something else");
        				}
   					 },
   					 error: function(xhr, status, error) {
				      console.log("error");
				   }
   					});
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