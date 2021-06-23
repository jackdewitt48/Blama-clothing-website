<!DOCTYPE html>
<html>
<title>Blama clothing</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Hype", Hype}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Hype", Hype;}
</style>
<body class="w3-content" style="max-width:1200px">

	


<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-yellow w3-xlarge" >
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-yellow w3-xlarge"  >
	 <img class="logo" src="Images/blama_logo%20copy.jpg" width="100">
   Blama clothing
	 
    <p class="w3-right">  <a href="index.php">Home</a>      <a href="shop.html">Shop</a>   About   Contact
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>
	
	
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="Images/black_blue%20hoodie.png" alt=Hoodie style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
      <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
      <h1 class="w3-hide-small">COLLECTION 2021</h1>
      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="blama">
    <p>8 items</p>
  </div>

  <!-- Product grid -->
  <div class="w3-row ">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="Images/Screen%20Shot%202021-03-22%20at%202.43.44%20PM.png" style="width:100%">
        <p>Black Hoodie<br><b>$64.99</b></p>
      </div>
      <div class="w3-container">
        <img src="Images/white:green%20hoodie.png" style="width:100%">
        <p>White hoodie<br><b>$64.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="Images/black:orange%20hoodie.png" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Black Hoodie<br><b>$64.99</b></p>
      </div>
      <div class="w3-container">
        <img src="/w3images/jeans3.jpg" style="width:100%">
        <p>3<br><b>$20.50</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="/w3images/jeans3.jpg" style="width:100%">
        <p>4<br><b>$20.50</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="/w3images/jeans4.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>5<br><b class="w3-text-red">$14.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="/w3images/jeans4.jpg" style="width:100%">
        <p>6<br><b>$14.99</b></p>
      </div>
      <div class="w3-container">
        <img src="/w3images/jeans1.jpg" style="width:100%">
        <p>Hoodie<br><b>$24.99</b></p>
      </div>
    </div>
  </div>
	<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>3d Gallery</title>
	<style type="text/css">
		*{
			margin:0;
			padding:0;
			box-sizing:border-box;
		}
		body{
			display:flex;
			align-items:center;
			justify-content:center;
			background:#0D3249;
			min-height:100%;
		}
		.box1{
			/*--position: absolute;--*/
			margin-left: 370px;
			top:240px;
			width:200px;
			height:200px;
			transform-style:preserve-3d;
			animation:animate 20s linear infinite;
		}

		@keyframes animate{
			0%{
				transform:perspective(1600px)
				rotateY(0deg);
			}
			100%{
				transform:perspective(1600px)
				rotateY(360deg);
			}
		}

		.box1 span{
			position: absolute;
			top:0;
			left:0;
			width:100%;
			transform-origin:center;
			transform-style:preserve-3d;
			transform:rotateY(calc(var(--i) * 45deg)) translateZ(400px);
		}

		.box1 span img{
			position:absolute;
			top:0;
			left: 0;
			object-fit:cover;
			width:100%;
			-webkit-box-reflect:below 2px linear-gradient(transparent,transparent,#0004);
		}

	</style>
</head>
<body>
<div class="box1">
	<span style="--i:1;">
		<img src="Images/white:green%20hoodie.png">
	</span>
	<span style="--i:2;">
		<img src="Images/black_blue%20hoodie.png">
	</span>
	<span style="--i:3;">
		<img src="Images/black:orange%20hoodie.png">
	</span>
	<span style="--i:4;">
		<img src="Images/white:yellow.png">
	</span>
	<span style="--i:5;">
		<img src="Images/white%20oragane%20t%20.png">
	</span>
	<span style="--i:6;">
		<img src="Images/Grey%20hoodie.jpg" imgagespx 636 638>
	</span>
	<span style="--i:7;">
		<img src="img7.jpg">
	</span>
	<span style="--i:8;">
		<img src="img8.jpg">
	</span>
</div>

<script async src="https://drv.tw/inc/wd.js"></script></body>
</html>



  <!-- Subscribe section -->
  <div class="w3-container w3-black w3-padding-32">
    <h1>Subscribe</h1>
    <p>To get special offers and VIP treatment:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button>
  </div>
  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contact</h4>
        <p>Questions? Go ahead.</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div>

      <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="#">About us</a></p>
        <p><a href="#">We're hiring</a></p>
        <p><a href="#">Support</a></p>
        <p><a href="#">Find store</a></p>
        <p><a href="#">Shipment</a></p>
        <p><a href="#">Payment</a></p>
        <p><a href="#">Gift card</a></p>
        <p><a href="#">Return</a></p>
        <p><a href="#">Help</a></p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
		<i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
