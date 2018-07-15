<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta name="viewport" content="width=device-width" />
	<title>Alcatron - contact page</title> 

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/fgx-foundation.css" />
	<!-- Font Awesome - Retina Icons -->
	<link rel="stylesheet" href="plugins/fontawesome/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style.css" />
	
	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/zepto.js"></script>
	<script src="js/vendor/custom.modernizr.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/foundation/foundation.js"></script>
	<script src="js/foundation/foundation.topbar.js"></script>

	<!-- Contact form validation -->
	<script type="text/javascript"  src="js/jquery.validate.min.js"></script>
	
	<!-- Twitter -->
	<script type="text/javascript" src="plugins/twitter/jquery.jtweetsanywhere-1.3.1.min.js"></script>

	<!-- Scripts Initialize -->
	<script src="js/app-head-calls.js"></script>
	
	<script>
		$(document).foundation();
	</script>
	<!-- for Google Map-->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTSJ4nigiCUcS_KdUEvTfegUWC2EPbP_Q&amp;sensor=false"></script>
	<script type="text/javascript">
	function initialize() {
	var mapOptions = {
	  center: new google.maps.LatLng(40.18493 , 44.52029),
	  zoom: 15,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map_canvas"),
		mapOptions);
	var myLatlng = new google.maps.LatLng(40.18493 , 44.52029);
	var marker = new google.maps.Marker({
		position: myLatlng,
		title:"Address"
	});

	// To add the marker to the map, call setMap();
	marker.setMap(map);
	}
	</script>      
</head>
<body onload="initialize()">

<!-- Begin Main Wrapper -->
<div class="top-header">
	<div class="main-wrapper">
		<div class="row">
			<div class="large-8 columns">
				<ul class="inline-list">
					<li><a href="pricing-tables.html">Our prices</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>            
				</ul>
			</div>
			<div class="small-4 columns  text-right">
				<span>(00) 1234 56780009</span><a href="#" class="button login"><i class="icon-lock"></i>Login</a>
			</div> 
		</div>
	</div>
</div>
<!-- Begin Main Wrapper -->
<div class="main-wrapper">
	<!-- Main Navigation -->  
	<header class="row main-navigation">
		<div class="large-3 columns">	
			<a href="index.html" id="logo"><img src="images/logo.png" alt="Alcatron Logo" /></a>
		</div>
		<div class="large-9 columns">			
			<nav class="top-bar">
				<ul class="title-area">
				  <!-- Title Area -->
				  <li class="name"></li>
				  <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				  <li class="toggle-topbar menu-icon"><a href="#"><span>Main Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<!-- Left Nav Section -->
					  <ul class="right">
						<li><a class="active" href="index.html">Home</a></li>
						<li class="has-dropdown"><a href="#">Features</a>
						  <ul class="dropdown">
							<li><a href="grid.html">Grid</a></li>
							<li><a href="navigation.html">Navigation</a></li>
							<li><a href="buttons.html">Buttons</a></li>
							<li><a href="forms.html">Forms</a></li>
							<li><a href="typography.html">Typography</a></li>
							<li><a href="orbit.html">Orbit - Foundation Slider</a></li>
							<li><a href="clearing.html">Clearing -  Responsive Lightboxes</a></li>
							<li><a href="dropdown.html">Dropdown</a></li>
							<li><a href="joyride.html">Joyride</a></li>
							<li><a href="magellan.html">Magellan</a></li>
							<li><a href="reveal.html">Reveal - Modal dialogs / pop-up windows</a></li>
							<li><a href="section.html">Section - Accordion, Tabs &amp; Vertical Nav</a></li>
							<li><a href="tooltips.html">Info tooltips</a></li>
						  </ul>
						</li>
						
						<li class="has-dropdown"><a href="#">Shortcodes</a>
						  <ul class="dropdown">
							<li><a href="alert-boxes.html">Alert Boxes</a></li>
							<li><a href="panels.html">Panels</a></li>
							<li><a href="pricing-tables.html">Pricing Tables</a></li>
							<li><a href="bars.html">Progress Bars</a></li>
							<li><a href="tables.html">Tables</a></li>
							<li><a href="thumbnails.html">Thumbnails</a></li>
							<li><a href="flex-video.html">Flex Video</a></li>
							
						  </ul>
						</li>                    
						<li class="has-dropdown"><a href="#">Add-ons</a>
						  <ul class="dropdown">
							<li><a href="icons.html">Retina Icons - Font Awesome</a></li>
							
							
						  </ul>
						</li>
						<li class="has-dropdown"><a href="#">Portfolio</a>                                       
						  <ul class="dropdown">                        
								<li><a href="portfolio.html">3 Columns</a></li>
								<li><a href="portfolio2.html">4 Columns</a></li>
								<li><a href="portfolio-single.html">Single item</a></li>
							</ul>
						</li>
						<li class="has-dropdown"><a href="#">Blog</a>                    
						  <ul class="dropdown">
							<li><a href="blog.html">1 Column, Default</a></li>
							<li><a href="blog-1column-var2.html">1 Column, Alternative</a></li>
							<li><a href="blog-2column.html">2 Columns</a></li>
							<li><a href="blog-3column-no-sidebar.html">3 Columns, No sidebar</a></li>
							<li><a href="blog-4column-no-sidebar.html">4 Columns, No sidebar</a></li>
							<li><a href="blog-single.html">Blog Inner</a></li>
						  </ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					  </ul>
					  <!-- End Left Nav Section -->					 
				</section>
			</nav>
		</div>
	</header>
      <!-- Main Content Top -->  
	<div class="row">
		<div class="large-12 columns main-content-top">
			<div class="row">
				<div class="large-6 columns">			
					<h2>Contact us</h2>			
				</div>        			
				<div class="large-6 columns">
					<ul class="breadcrumbs right">
						<li><a href="index.html">Home</a></li>				
						<li class="current"><a href="#">Contact</a></li>
					</ul>		   
				</div>
			</div>
		</div>
	</div>        
           
	<div class="content_wrapper">
		<div class="row">
			<div class="large-12 columns">
				<div id="map_canvas"></div>
			</div>
			<div class="large-6 columns">
				<h3 class="contact_title">Get in touch with us</h3>
				<p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Nulla gravida, ligula sed sagittis pretium, 
				tortor est mollis enim, et aliquam arcu lectus eget turpis. Phasellus fringilla tristique placerat ut, elementum vel lectus.
				Phasellus eleifend convallis urna, quis pulvinar urna rutrum in.</p>
				<h3 class="contact_title">Contact info</h3>
				<p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Nulla gravida, ligula sed sagittis pretium, 
				tortor est mollis enim, et aliquam arcu lectus eget turpis. Phasellus fringilla tristique placerat ut, elementum vel lectus.
				Phasellus eleifend convallis urna, quis pulvinar urna rutrum in.</p>
				<div class="contact_info">
					<ul class="about-info">
						<li><i class="icon-home"></i><span>Berea Street, 456</span></li>
						<li><i class="icon-phone"></i><span>+1 (818) 321 9548</span></li>
						<li><i class="icon-envelope"></i><a href="mailto:info@alcatron.com">info@alcatron.com</a></li>
					</ul>
				</div>
			</div>
			<div class="large-5 columns">
				<h3 class="contact_title">Send us a message</h3>
				<p><strong>Donec quis</strong> quam sed nisl  dignissim id faucibus erat pretium. Ut hendrerit lacus at nisl dignissim laoreet. 
				Phasellus egestas magna et magna commodo in euismod diam suscipit. Aliquam a dolor in quam lacinia malesuada at eu metus. 
				Morbi vestibulum consectetur nunc, vitae suscipit lacus mollis quis.</p>
				<form method="POST" action="contact/process-form.php" class="contactForm">
					<div id="status"></div>
					<div class="contact_form">
						<div class="row">
							<div class="small-4 columns">
								<input type="text" placeholder="Name" name="name" id="contactname" />
								<?php if(isset($nameError) && $nameError != ''): ?><span class="errorarr"><?php echo $nameError;?></span><?php endif;?>
							</div>
							<div class="small-4 columns">
								<input type="text" placeholder="E-mail" name="email" id="contactemail" />
								 <?php if(isset($emailError) && $emailError != ''): ?><span class="errorarr"><?php echo $emailError;?></span><?php endif;?>
							</div>
							<div class="small-4 columns">
								<input type="text" placeholder="Website" name="website" id="contactwebsite" />
							</div>
							<div class="small-12 columns">
								<textarea cols="10" rows="15" name="message" id="contactmessage"></textarea>
								<?php if(isset($messageError) && $messageError != ''): ?><span class="errorarr"><?php echo $messageError;?></span><?php endif;?>
							</div>
							<div class="small-4 columns">
								<input type="submit" class="button right" value="Send message" name="send" id="send" />
							</div> 
						</div>
					</div>
				</form>
					
				</div>
			</div>
		   
		</div>
  <!-- Begin Top Footer -->
</div>   
<div class="footer_wrapper">
	<footer class="row footer-part">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-3 columns">
					<h4 class="footer-title">Get our newsletter</h4>
					<div class="footer_part_content">
						<p>Velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
						<div class="row collapse">
							<form method="post">
								<div class="small-9 columns">
									<input type="text" placeholder="enter your e-mail address">
								</div>
								<div class="small-3 columns">
									<input type="submit" class="button postfix" value="Sign up!" />
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="large-3 columns">
					<h4 class="footer-title">About Us</h4>
					<div class="footer_part_content">
						<p><b>Alcatron</b> Bibendum austas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
						<ul class="about-info">
							<li><i class="icon-home"></i><span>Berea Street, 456</span></li>
							<li><i class="icon-phone"></i><span>+1 (818) 321 9548</span></li>
							<li><i class="icon-envelope"></i><a href="mailto:info@alcatron.com">info@alcatron.com</a></li>
						</ul>
					</div>
				</div>

				<div class="large-3 columns">
					<h4 class="footer-title">Twitter</h4>
					<div id="tweetFeed"> </div> 
				</div>
					
				<div class="large-3 columns"> 
					<h4 class="footer-title">Contact us</h4>
					<form method="POST" action="#" id="footer-contact-form">
						<div class="footer_part_content">
							<div class="row">
								<div class="small-6 columns">
									<input type="text" placeholder="Name"  name="name" />
								</div>
								<div class="small-6 columns">
									<input type="text" placeholder="E-mail" name="email" />
								</div>
								<div class="small-12 columns">
									<textarea cols="10" rows="15"  name="message" placeholder="Message"></textarea>
								</div>
								<div class="small-4 columns">
								<input type="submit" class="button right" value="Send" name="send" id="send" />
								</div>
								
							</div>
						</div>
					</form>
				</div> 
			</div>
		</div>
	</footer>

	<div class="privacy footer-part">
		 <a href="#" class="scrollup">Scroll</a>
		<div class="row footer_bottom">
			<div class="large-6 columns">
				<p>&copy; 2013 Alcatron Theme All Rights Reserved</p>
			</div>
			<div class="large-2 columns right">
				<div class="row collapse">
					<ul class="social-icons">
						<li><a href="#"><i class="icon-pinterest"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
 <script type="text/javascript">
<!-- Contact form validation
jQuery(document).ready(function(){

  jQuery(".contactForm").validate({
	submitHandler: function() {
	
		var postvalues =  jQuery(".contactForm").serialize();
		
		jQuery.ajax
		 ({
		   type: "POST",
		   url: "contact/process-form.php",
		   data: postvalues,
		   success: function(response)
		   {
		 	 jQuery("#status").html(response).show('normal');
		     jQuery('#contactmessage, #contactemail, #contactname').val("");
		   }
		 });
		return false;
		
    },
	focusInvalid: true,
	focusCleanup: false,
	//errorLabelContainer: jQuery("#registerErrors"),
  	rules: 
	{
		name: {required: true},
		email: {required: true, minlength: 6,maxlength: 50, email:true},
		message: {required: true, minlength: 6}
	},
	
	messages: 
	{
		contactName: {required: "This field is required"},
		email: {required: "This field is required", email: "Please provide a valid e-mail"},
		message: {required: "This field is required"}
	},
	
	errorPlacement: function(error, element) 
	{
		error.insertBefore(element);
		jQuery('<span class="errorarr"></span>').insertBefore(element);
	},
	invalidHandler: function()
	{
		//jQuery("body").animate({ scrollTop: 0 }, "slow");
	}
	
});
});
-->
</script>
</body>
</html>
