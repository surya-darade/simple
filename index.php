<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Online pizza order</title>

<meta name="keywords" content="free website templates, CSS layout, Pizza Company Website, HTML CSS" />

<meta name="description" content="Pizza Company Website - free CSS website template, Free HTML CSS Layout" />

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />


<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body>
<div id="templatemo_container">
  <div ><img src="images/templatemo_header.jpg"> </div>
  <div id="templatemo_menu_bg">
    <div id="templatemo_menu">
      <ul>
        <li><a href="index.html"  class="current">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
		<li><a href="contact.php">Contact Us</a></li>
        <li><a href="product.php">Product</a></li>
        <li><a href="loginindex.php">Order Now! </a></li>
        <li><a href="admin_index.php">Admin</a></li>
      </ul>
    </div>
  </div>
  <div id="templatemo_header_pizza"> </div>
  <div id="templatemo_content">
    <div id="templatemo_content_left"><img src="images/main11.jpg" width="729" height="312" style="margin-left:-10px;" /></div>
    <div id="templatemo_card"></div>
  </div>
  <div id="templatemo_container_end"> </div>
</div>
<div id="templatemo_footer">
    	<div class="top"></div>
        <div class="middle">
        Copyright © Online pizza ordering System</div>
        <div class="button"></div>
</div>
<div>
</div>
</body>
<!-- 
<div class="text" style="color:#000000">
	    <iframe width="685" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.ph/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Bacolod+City,+Western+Visayas&amp;aq=0&amp;oq=bacolod+city&amp;sll=12.867031,121.766552&amp;sspn=22.691867,43.286133&amp;ie=UTF8&amp;hq=&amp;hnear=Bacolod+City,+Negros+Occidental,+Western+Visayas&amp;t=m&amp;ll=10.671368,122.951506&amp;spn=0.001845,0.003219&amp;z=18&amp;iwloc=lyrftr:m,15792293577711675161,10.670856,122.951109&amp;output=embed"></iframe><br /> -->
</html>