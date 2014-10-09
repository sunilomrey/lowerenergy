<?php 
$infoTitle = $_POST['Title'];
$infoFirstName = $_POST['FirstName'];
$infoMiddleName = $_POST['MiddleName'];
$infoLastName = $_POST['LastName'];
$infoPhone = $_POST['Phone'];
$infoEmail = $_POST['Email'];
$infoCallPermission = $_POST['CallPermission'];
$infoAddress = $_POST['Address'];

$infoCity = $_POST['City'];
$infozipcodeVal = $_POST['zipcodeVal'];
$infostateVal = $_POST['stateVal'];

 $infoArray = array();
 $infoArray['title'] = $infoTitle; 
 $infoArray['firstName'] = $infoFirstName; 
 $infoArray['middleNale'] = $infoMiddleName; 
 $infoArray['lastName'] = $infoLastName; 
 $infoArray['phone'] = $infoPhone; 
 $infoArray['email'] = $infoEmail; 
 $infoArray['callPermission'] = $infoCallPermission; 
 $infoArray['streetAddress'] = $infoAddress; 
 $infoArray['city'] = $infoCity; 
 $infoArray['zipcode'] = $infozipcodeVal; 
 $infoArray['state'] = $infostateVal;
session_start();
$_SESSION['step1Info'] = $infoArray;
$getThis =  $_SESSION['step1Info'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LowerOurEnergy.Com</title>
<link rel="shortcut icon" href="images/favicon.png" />
<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
<link rel="stylesheet" href="css/fontsheet.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script src="js/header.min.js" type="text/javascript"></script>
</head>

<body class="topbdr">
<!-- Page Div Start Here -->
<div class="page">
	<!-- Header Div Start Here -->
    <div class="container">
    	<header>
    	<div class="col-lt-12 clearfix">
           
            <div class="col-lt-4">
          	  <a href="index.html"><img class="logo" src="images/logo.png"></a>
            </div>
            
            <div class="col-rt-8">
            	<ul class="steps">
					<li>
						<span class="step-number">1</span>
						<span class="step-title">Customer Information</span>
					</li>
					<li class="is-active">
						<span class="step-number">2</span>
						<span class="step-title">Enrollment</span>
					</li>
					<li style="display:none;" id="step_deposit">
						<span class="step-number">3</span>
						<span class="step-title">Deposit</span>
					</li>
					<li id="step_confirmation">
						<span class="step-number">3</span>
						<span class="step-title">Order Confirmation</span>
					</li>
				</ul>
            </div>
            
        </div>
    </header>
    </div>
    <!-- Header Div Close Here -->
	
    <!-- Form Area Div Start Here -->
    <div class="col-lt-12 gry_bg">
    	<div class="main">
        <form>
        	<div class="d-box-11">
            <div class="module">
            <div class="head">
            <h1 class="title">Enrollment</h1>
            </div><!-- /.head -->
            <div class="body">
            	<div class="col-lt-12">
                <h4 class="product-name">Personal Information</h4>
                <small>Ut wisi enim ad minim veniam, quis nostrud exerci tation suscipit lobortis commodo consequat.</small>
                <hr class="divider">
                
                <div id="product">
                	<ul class="product-details meta-list">
                    <li class="rate-type">Name: Basic version<span class="meta2">Email:youemail@live.com</span></li>
                    <li class="term">Phone: 713-123-1234</li>
                    <li class="term">Service Address: 12300 Dundee Court, Suite 213,<br>Cypress, TX 77429</li>
					</ul>
                </div>
                  
                <div class="col-lt-12">
                <h3>Connection Information</h3>
                <label>Ut wisi enim ad minim veniam, quis nostrud exerci tation suscipit lobortis. <span class="astx">*</span></label>
                </div>
                <div class="col-lt-6">
                <input type="radio" name="CallPermission"> 
                <label style="float:right; font-weight:normal; width:91%;">I give permission for LowerOurEnergy.com to call me at the phone number I've provided if there is an issue with this transaction.</label>
                </div>
                
                <div class="col-rt-6">
                <input type="radio" name="CallPermission"> 
                <label style="float:right; font-weight:normal; width:91%;">I give permission for LowerOurEnergy.com to call me at the phone number I've provided if there is an issue with this transaction.</label>
                </div>
                
                <div class="col-lt-7">
                <label>Ut wisi enim ad minim</label>
                <select>
                    <option>Select One</option>
                    <option>Online Search</option>
                    <option>Houston Business Journal Ad</option>
                    <option>Friend or Family</option>
                    <option>Greensheet Ad</option>
                    <option>Other</option>
                </select>
                </div>
                
                <div class="col-lt-12">
                <h3>Confirm Eliglbility</h3>
                <small style="margin-bottom:20px; float:left;">Ut wisi enim ad minim veniam, quis nostrud exerci tation suscipit lobortis.</small>
                </div>
                
                <div class="col-rt-6">
                    <div class="col-lt-9">
                    <label>Social Security Number <a class="tooltip">[?]</a> <span class="astx">*</span></label>
                    </div>
                    <div class="col-lt-2">
                    <input type="text"name="FirstName">
                    </div>
    
                    <div class="col-lt-2">
                    <input type="text" name="MiddleName">
                    </div>
    
                    <div class="col-lt-2">
                    <input type="text" name="LastName" >
                    </div>
                </div>
                
                <div class="col-lt-6">
                    <div class="col-lt-9">
                  	  <label>Date of Birth <span class="astx">*</span></label>
                    </div>
                    
                    <div class="col_lt_3">
                        <select>
                            <option>Month</option>
                        </select>
                    </div>
                    
                    <div class="col_lt_3">
                        <select>
                            <option>Day</option>
                        </select>
                    </div>
                    
                    <div class="col_lt_3">
                        <select>
                            <option>Year</option>
                        </select>
                    </div>
                    
                </div>
                
                <div class="col-lt-12">
                <h3>Current Address
                <small style="margin-top:10px;">Ut wisi enim ad minim veniam, quis nostrud exerci tation suscipit lobortis.</small>
                </h3>
                </div>
                
                <div class="col-lt-12">
                <input type="checkbox" name="CallPermission"> 
                <label style="float:right;">Ut wisi enim ad minim veniam, quis nostrud exerci tation suscipit lobortis.</label>
                </div>
                
                <div class="col-lt-5">
                    <label>Address:<span class="astx">*</span></label>
                    <input type="text" name="Email">
                    </div>
    
                <div class="col-lt-5">
                    <label>Apartment or Unit Number:<span class="astx">*</span></label>
                    <input type="text" name="EmailConfirm">
                    </div>
                    
                <div class="col-lt-5">
                    <label>City:<span class="astx">*</span></label>
                    <input type="text" name="EmailConfirm">
                    </div>
                    
                <div class="col_lt_3">
                    <label>State:<span class="astx">*</span></label>
                    <input type="text" name="EmailConfirm">
                    </div>
                    
                <div class="col_lt_3">
                    <label>Zip Code:<span class="astx">*</span></label>
                    <input type="text" name="EmailConfirm">
                    </div>
                 
                <div class="col-lt-12">
                <h3>Mailing Address
                <small style="margin-top:10px;">Ut wisi enim ad minim veniam, quis nostrud exerci tation suscipit lobortis.</small>
                </h3>
                </div>
                
                <div class="col-lt-12">
                <input type="checkbox" name="CallPermission"> 
                <label style="float:right;">Ut wisi enim ad minim veniam, quis nostrud exerci tation suscipit lobortis.</label>
                </div>
                
                <div class="col-lt-5">
                    <label>Address:<span class="astx">*</span></label>
                    <input type="text" name="Email">
                    </div>
    
                <div class="col-lt-5">
                    <label>Apartment or Unit Number:<span class="astx">*</span></label>
                    <input type="text" name="EmailConfirm">
                    </div>
                    
                <div class="col-lt-5">
                    <label>City:<span class="astx">*</span></label>
                    <input type="text" name="EmailConfirm">
                    </div>
                    
                <div class="col_lt_3">
                    <label>State:<span class="astx">*</span></label>
                    <input type="text" name="EmailConfirm">
                    </div>
                    
                <div class="col_lt_3">
                    <label>Zip Code:<span class="astx">*</span></label>
                    <input type="text" name="EmailConfirm">
                    </div>
                
                <div class="col-lt-12">
                <h3>Bill Type</h3>
                </div>
                
                <div class="col-lt-6">
                <input type="radio" name="CallPermission"> 
                <label style="float:right; font-weight:normal; width:91%;">Electronic Bill through Email</label>
                </div>
                
                <div class="col-rt-6">
                <input type="radio" name="CallPermission"> 
                <label style="float:right; font-weight:normal; width:91%;">Paper Bill in the Mail</label>
                </div>
                
                <div class="col-lt-6">
                <label>Email Address:<span class="astx">*</span></label>
                <input type="text" name="Email">
                </div>
                
                <div class="col-lt-12">
                <h3>Terms and Conditions</h3>
                </div>
                
                <div class="blueBox">
                	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                </div>
                
                <div class="col-lt-12">
                <input type="checkbox" name="CallPermission"> 
                <label style="float:right; font-weight:normal;">Check All</label>
                </div>
                
                <div class="col-lt-12">
                <input type="checkbox" name="CallPermission"> 
                <label style="float:right; font-weight:normal;">Ut wisi enim ad minim veniam, quis nostrud exerci tation suscipit lobortis.</label>
                </div>
                
                <div class="col-lt-12">
                <input type="checkbox" name="CallPermission"> 
                <label style="float:right; font-weight:normal;">Ut wisi enim ad minim veniam, quis nostrud exerci tation suscipit lobortis.</label>
                </div>
                
                <div class="col-lt-12">
                <input type="checkbox" name="CallPermission"> 
                <label style="float:right; font-weight:normal;">Ut wisi enim ad minim veniam, quis nostrud exerci tation suscipit lobortis.</label>
                </div>
                
                <div class="action-controls">
            <button>Order Confirmation</button>
            </div>
            
                </div>
            </div>
            </div>
            </div>
            </form>
            <div class="d-box-5">
	       <div class="summary">
		
		<div class="module" >
			<div class="head">
				<h2 class="title">Selected Product</h2>
			</div><!-- /.head -->

			<div class="body">
				<div id="product">
					<div class="row">
						<div class="d-box-7">
							<img class="provider-logo-image" src="images/directenergytx.png">
						</div>
                        <div class="d-box-9">
							<h4 class="product-name">Price Advantage 12</h4>
						</div>
						
					</div>
					<hr class="divider">

					<ul class="product-details meta-list">
                    <li class="price">Average Price:<span class="meta">10.6<sup>¢</sup>/kWh<a class="tooltip">[?]</a></span></li>
                    <li class="rate-type">RateType:<span class="meta">fixed </span></li>
                    <li class="term">Term:<span class="meta">12 Month(s)</span></li>
					</ul>
                    
                    <hr class="divider">

                    <h3 style="color:#222; margin-top: 7px;">Legal Information</h3>

					<div class="links"><a href="#">Terms of Service</a><br>
                    <a href="#">Electricity Facts Label</a><br></div>
						<hr class="divider">
				</div>
                <div id="total" class="action-controls">
					<span class="total"><strong>$0.00</strong>Total due today:</span>
				</div>

			</div><!-- /.body -->
		</div><!-- /.module -->
	</div><!-- /.summary -->
</div>
        </div>
    </div>
    <!-- Form Area Div Close Here -->
    
    	<!-- Footer Div Start Here -->
        <footer>
        	<div class="container">
            	<div class="col-lt-12">
                <div class="col-lt-5 padL">
                    <a href="#"><img src="images/footer_logo.png" class="footer_logo"></a>
                    <div class="copyright">© Copyright 2013 LowerOurEnergy.com
    LowerOurEnergy.com, the LowerOurEnergy.com logo, and "May the best rate win" are registered trademarks and/or service marks of LowerOurEnergy, LLC.</div>
                </div>
                <div class="col-rt-5 padR">
                    <div class="newsletter">
                    	<h3>Get insider updates on rate changes and exclusive offers!</h3>
                            <form>
                                <input type="text" placeholder="Enter your email address">
                                <input type="submit" value="Sign Up">
                            </form>
                    </div>
                    
                    <div class="col-rt-9">
                        <div class="iconz">
                            <a class="flaticon-facebook" href="#"></a>
                            <a class="flaticon-twitter" href="#"></a>
                            <a class="flaticon-google" href="#"></a>
                            <a class="flaticon-youtube" href="#"></a>
                            <a class="flaticon-rss" href="#"></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>    
        </footer>
        <!-- Footer Div Close Here -->
    
</div>
<!-- Page Div Close Here -->

<!--  Div Start Here -->
<!--  Div Close Here -->
<script type="text/javascript">
	$(document).ready(function(){
	  $('.brand-carousel').mouseover(function(){
  	  $('.brand-arrow').css('opacity','.5');
	  });
	  $('.brand-carousel').mouseleave(function(){
  	  $('.brand-arrow').css('opacity','0');
	  });

    $(".brand-logo-container").carouFredSel({
      direction			: "left",
      items : 9,
      auto: false,
      circular: true,
      scroll : {
        items			: 1,
        duration		: 300,
        pauseOnHover	: true
      },
      prev : {
        button : ".brand-arrow.arrow-left"
      },
      next : {
        button : ".brand-arrow.arrow-right"
      }
    }, {debug: false});

    //click
    $(".brand-logo").click(function(){

      //get the name
      var name = $(this).data("name");

	  if (typeof _gaq !== 'undefined') {
	  	_gaq.push(['_trackEvent', 'Brand Ribbon', 'Click', name]);
		}

      //redirect
      location.href = "/" + name + "/";


    });
	});
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('.single-item').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $(".menu").setActiveMenu(), $(".content-spot, .lc-featured, .js-lc-categories").on("mouseenter", function(a) {
        a.preventDefault(), $(this).find(".popover").removeClass("is-hidden").stop().animate({
            opacity: .95
        });
    }), $(".content-spot, .lc-featured, .js-lc-categories").on("mouseleave", function(a) {
        a.preventDefault(), $(this).find(".popover").stop().animate({
            opacity: 0
        });
    }), $(".faqs-wrapper .faq-question a").on("click", function(a) {});
})
</script>
</body>
</html>
