<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/Fun-and-Food-Village-Old-Delhi-Gurugram-Road.jpg"width="100%" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">Fun and Food Village</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/Religious-Places-to-visit-in-India.jpg" width="100%" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">For Religious Peoples</a></h2>
							<lable></lable>
							<h1><a href="#">The Golden Temple</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/red-fort-759-getty-images.jpg"width="100%"  alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Red Fort</a></h2>
							<lable></lable>
							<h1><a href="#">The Pride of INDIA</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/pratap-gad.jpg"width="100%" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="#">The Destination</a></h1>
							<lable></lable>
							<h2><a href="#">Pratap Gadh</a></h2>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/Ramtek_ciqaz4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Feel Protected</a></h2>
							<lable></lable>
							<h1><a href="#">During your Vacation</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	
</body>
</html>