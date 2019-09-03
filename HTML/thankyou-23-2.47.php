<?php $name = $_REQUEST['name'];?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Sarova</title>
  <meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="refresh" content="7;url=https://sarova.in/" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body class="thnkBg">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<header id="mainheader">
    <div class="container cont1366">
    	<div class="row">
        	<div class="col-6 mainLogo"><a  href="https://www.sdcorp.in/" target="_blank"><img src="img/SDlogo.png" width="" height="" alt="sarova"></a></div>
            <div class="col-6 logoRight">
            	<ul>
                	<li><a href="https://www.shapoorjipallonji.com/" target="_blank"><img src="img/shapoorjilogo.png" width="" height="" alt="sd logo"></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<div class="sliderArea firstSlide thankyou">
<div id="homepageslider" class="slider">
  <div>
  <div class="container cont1366">
  	<div class="row">
    	<div class="col-xl-5 col-lg-5 firstSlideLeft">
        	<h1>
            <span>Dear <?php echo $name ?>,</span>
            THANK YOU VERY MUCH FOR<br>
EXPRESSING YOUR INTEREST. OUR<br>
EXPERTS WILL GET IN TOUCH WITH YOU SHORTLY.</h1>  
            
            <h3>In the meantime, we have sent you an email and SMS with<br>
your unique Paytm code and other relevant details to help<br>
you choose your home better.</h3>   
			   
            	
        </div>
        <div class="col-xl-7 col-lg-7 firstSlideRight">
        	<div class="row">
            	<div class="col-12 topImg">
                <img src="img/girlimg.jpg" class="img-fluid" width="" height="" alt="girl image">
                </div>
                
            </div>
        </div>
        </div>
        
        <div class="row thankLogo">
        	<ul>
            <li class="saleStromdivThank">
            <img src="img/saleStormImgThank.jpg" width="" height="" alt="girl image">
            </li>
            
            <li class="sarovaImgThank">
            <a href="https://sarova.in/" target="_blank"><img src="img/sarovaLogo.jpg" width="" height="" alt="girl image"></a>
            </li>
            </ul>
        </div>
        
    </div>
  
  </div>
  <!--div end-->
</div>
</div>
<!--end slider-->










<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
<!--<script type='text/javascript' src="js/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
<script src="js/bootstrap.min.js"></script> 
<script src="js/slick.min.js"></script> 
<script type='text/javascript' src="js/main.js"></script>


<script>
// Send OTP button click function
var txtmail;
var origin = 'http://localhost/2019/Sarova/SaleStormLP/HTML/';
$(document).on('input', "#txtphone", function () {
    var txtEntered = false;
	txtmobile = jQuery("#enqform #txtphone").val();
	if (txtmobile.length == '10'){
		//jQuery(this).css("display","block");
		//alert(txtmobile);
		$.ajax({
			url: origin+'/otp.php', // url where to submit the request
			type : "POST", // type of action POST || GET
			data : {'mobileno':txtmobile}, // post data || get data
			success : function(result) {
				if(result =='Success'){
					//alert(result);
					jQuery(".inputemail, .titleName, .search_categories, .phoneField").css('display','none');
					//jQuery(".inputemail").css('display','none');
					jQuery(".inputMobile").css('display','inline-block');
					jQuery(".sendOTPbtn").css('display','none');
					jQuery(".otpinput").css('display','inline-block');
					jQuery(".verifyOtpbtn").css("display","none");
					jQuery(".inputblock").css("width","auto");
					jQuery(".nameField").css("position","relative");
					
					if ($(window).width() <= 767) {
						jQuery(".otpinput").css('display','block');
					}
					
				}else{
					console.log('eEror');
					
				}
			},
			error: function(xhr, resp, text) {
				console.log(xhr, resp, text);
			}
		});
	}else{
		console.log('Error');
		//jQuery("#txtmail").addClass("error");
	}
});
// Verify OTP button click function
$(document).on('input', "#enter_OTP", function (){
	var otpNumber = jQuery("#enqform #enter_OTP").val(); 
	if(otpNumber.length === 4 && txtmobile!='' ){
	txtmobile = jQuery("#enqform #txtphone").val();
	alert(txtmail);	
		$.ajax({
			url: origin+'/otpverify.php', // url where to submit the request
			type : "POST", // type of action POST || GET
			data : {'otpnumber':otpNumber,'mobileno':txtmobile}, // post data || get data
			success : function(result) {
				console.log(result);
				if(result =='True'){
					jQuery(".otpinput, #dropenquiry").css('display','none');
					jQuery("#success_message").css("display","block");
					jQuery("#failure_message").css("display","none");
					jQuery("#verifyOTP").css("display","none");
					jQuery("#submitForm").css('display','block');
					jQuery("#termscondition").css('display','block');
					jQuery('#submitBtn').prop('disabled', true);
				}else{
					jQuery(".otpinput").css('display','inline-block');
					jQuery("#success_message").css("display","none");
					jQuery("#failure_message").css("display","block");
					jQuery("#verifyOTP").css("display","block");
					if ($(window).width() <= 767) {
					jQuery(".otpinput").css('display','block');
					}
				}
			},
			error: function(xhr, resp, text) {
				console.log(xhr, resp, text);
			}
		});
	}else{
		console.log('Error');
		jQuery("#enter_OTP").addClass("error");
	}
});
</script>
</body>
</html>
