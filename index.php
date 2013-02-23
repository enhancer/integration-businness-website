<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="skin.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
  	<script src="ResponsiveSlides.js-master/responsiveslides.js"></script>
  	<script src="jsor-jcarousel-0.2.8-0-g7bb2e0a/lib/jquery.jcarousel.js"></script>
  	<script>
	    // You can also use "$(window).load(function() {"
	    $(function () {

	      // Slideshow 1
	    	$(".rslides").responsiveSlides({
			  auto: true,             // Boolean: Animate automatically, true or false
			  speed: 500,            // Integer: Speed of the transition, in milliseconds
			  timeout: 2000,          // Integer: Time between slide transitions, in milliseconds
			  pager: true,           // Boolean: Show pager, true or false
			  nav: false,             // Boolean: Show navigation, true or false
			  random: false,          // Boolean: Randomize the order of the slides, true or false
			  pause: true,           // Boolean: Pause on hover, true or false
			  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
			  prevText: "Previous",   // String: Text for the "previous" button
			  nextText: "Next",       // String: Text for the "next" button
			  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
			  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
			  manualControls: "",     // Selector: Declare custom pager navigation
			  namespace: "rslides",   // String: Change the default namespace used
			  before: function(){},   // Function: Before callback
			  after: function(){}     // Function: After callback
			});
			
			function mycarousel_initCallback(carousel)
{
			    // Disable autoscrolling if the user clicks the prev or next button.
			    carousel.buttonNext.bind('click', function() {
			        carousel.startAuto(0);
			    });

			    carousel.buttonPrev.bind('click', function() {
			        carousel.startAuto(0);
			    });

			    // Pause autoscrolling if the user moves with the cursor over the clip.
			    carousel.clip.hover(function() {
			        carousel.stopAuto();
			    }, function() {
			        carousel.startAuto();
			    });
			};

			jQuery(document).ready(function() {
			    jQuery('#mycarousel').jcarousel({
			        auto: 2,
			        wrap: 'last',
			        initCallback: mycarousel_initCallback
			    });
			});

			//Coulissement de légende (Une partie caché à visible)
		    $('.boxgrid.caption').hover(function() {
		        $(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
		    	}, function() {
		        	$(".cover", this).stop().animate({top:'220px'},{queue:false,duration:160});
		    });
	    });
  	</script>
</head>
<body>
	<div id="header">
	 	<div id="logo"></div>
	  	<div id="menu">
			<ul>
				<li class="level1"><a href="">Home</a></li>
				<li class="level1"><a href="">About</a></li>
				<li class="level1"><a href="">Services</a>
					<ul>
						<li class="level2"><a href="">A</a></li>
						<li class="level2"><a href="">B</a></li>
						<li class="level2"><a href="">C</a></li>
					</ul>
				</li>
				<li class="level1"><a href="">Portfolio</a>
					<ul>
						<li class="level2"><a href="">A</a></li>
						<li class="level2"><a href="">B</a></li>
						<li class="level2"><a href="">C</a></li>	 
					</ul>
				</li>
				<li class="level1"><a href="">Blog</a></li>
				<li class="level1"><a href="">Contact Us</a></li>
			</ul>
		</div> 
	</div>

	<div id="diaporama">
		<div id="fond_diaporama">
			<ul class="rslides" id="slider1">
		      <li><img src="images/slider1.png" alt=""></li>
		      <li><img src="images/slider2.png" alt=""></li>
			</ul>
		</div>
	</div>

	<div id="basdiapo">
		<ul>
			<li id="crayon"><p class="gras titre_basdiapo">Clean theme</p>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			</li>
			<li id="responsive"><p class="gras titre_basdiapo">responsive design</p>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			</li>
			<li id="psd"><p class="gras titre_basdiapo">Psd</p>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			</li>
			<li id="coding">
				<p class="gras titre_basdiapo">reading for coding</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</li>
		</ul>
	</div>
	<div id="latest_work">
		<h3>Latest Works</h3>
		<div class="hr"></div>
		<div id="carroussel">
			<ul id="mycarousel" class="jcarousel-skin-tango">
				<li><img src="images/latest-work1.jpg" width="220" height="160" alt="" />
				</li>
				<span class="boxcaption"></span>
    			<li><img src="images/latest-work2.jpg" width="220" height="160" alt="" />
    				<span class="boxcaption"></span>
    			</li>
    			<li><img src="images/latest-work3.jpg" width="220" height="160" alt="" />
    				<span class="boxcaption"></span>
    			</li>
    			<li><img src="images/latest-work4.jpg" width="220" height="160" alt="" />
    				<span class="boxcaption"></span>
    			</li>
    			<li><img src="images/latest-work1.jpg" width="220" height="160" alt="" />
					<span class="boxcaption"></span>
				</li>
    			<li><img src="images/latest-work2.jpg" width="220" height="160" alt="" />
    				<span class="boxcaption"></span>
    			</li>
    			<li><img src="images/latest-work3.jpg" width="220" height="160" alt="" />
    				<span class="boxcaption"></span>
    			</li>
    			<li><img src="images/latest-work4.jpg" width="220" height="160" alt="" />
    				<span class="boxcaption"></span>
    			</li>
    			
			</ul>
		</div>
		<div class="boxgrid captionfull"> 
    <img src="images/latest-work1.jpg" alt=""/> 
    <div class="cover boxcaption"> 
        <h3>Jarek Kubicki</h3> 
        <p> 
            Artiste 
            <br/> 
            <a href="http://www.nonsensesociety.com/2009/03/art-by-jarekkubicki/" target="_blank">Voir plus</a> 
        </p> 
    </div> 
</div> 
		<div class="hr"></div>
	</div>
	<div id="temoignage">
		<h3>Testimonials</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div id="client">
		<h3>Our clients</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div id="download">
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in </p>
		<div id="btn_download_conteneur">
			<a href="#" id="btn_download">DOWNLOAD PSD</a>
		</div>
	</div>
	<div id="footer">
		<ul>
			<li class="gras level1">About Us
				<ul>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</li>
				</ul>
			</li>
			<li class="gras level1">Explore
				<ul>
					<li class="level2">Home</li>
					<li class="level2">About Us</li>
					<li class="level2">Services</li>
					<li class="level2">Portfolio</li>
					<li class="level2">Blog</li>
				</ul>
			</li>
			<li class="gras level1">Browse
				<ul>
					<li class="level2">Careers</li>
					<li class="level2">Press & Media</li>
					<li class="level2">Contact Us</li>
					<li class="level2">Terms of service</li>
					<li class="level2">Privacy police</li>
				</ul>
			</li>
			<li class="gras level1">Contact Us
				<p>
					BisLite Inc
					Always Street 265
					OX - 125 - Canada
					Phone: 4584545
					Fax: 4544965
				</p>
				
			</li>
			<li class="gras level1">Connect with Us
				<table>
					<tr>
						<td><a href=""><img src="images/facebook.png"></img></a></td>
						<td><a href=""><img src="images/dribble.png"></img></a></td>
						<td><a href=""><img src="images/pinterest.png"></img></a></td>
					</tr>
					<tr>
						<td><a href=""><img src="images/linkedin.png"></img></a></td>
						<td><a href=""><img src="images/skype.png"></img></a></td>
						<td><a href=""><img src="images/share.png"></img></a></td>
					</tr>
				</table>
			</li>
		</ul>
	</div>
	<div id="dropmenu">
	
	</div>
</body>
</html>
