<?php 
session_start();

?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
	
	</head>
<body class="background">
<?php 
include 'style.css' ; 
//var_dump($_SESSION);
?>

   <div id="aa" style="white-space:nowrap">
   	  <div id="image" style="display:inline;">
        <img src="icon.png"/>
    </div>
      <div id="texts" style="display:inline; white-space:nowrap;">SMARTPHONE FINDER</div>
      <div id="texts" style="display:inline;position:relative;top:-20;left:450; font-size:18px">
      
      </div>
      <a id="texts" style="display:inline;position:relative;top:-15;left:300;font-size:18px" href="wishlist.php?option=1">WISHLIST</a>
      <div id="texts" style="display:inline;position:relative;top:-15;left:400; font-size:18px">USER : <?php echo $_SESSION['user_name'];?></div>
      <a id="texts" style="display:inline;position:relative;top:-15;left:450;font-size:18px" href="first.php">LOGOUT</a>
      
      </div>
      
      
      <ul>    
    <li><a href="#">PRICE RANGE</a>
    <ul>
        <li><a href="ten.php?option=1">Rs.10,000</a></li>
  		<li><a href="ten.php?option=2">Rs.10,000-Rs.20,000</a></li>
  		<li><a href="ten.php?option=3">Rs.20,000-Rs.30,000</a></li>
  		<li><a href="ten.php?option=4">Rs.30,000-Rs.40,000</a></li>
  		<li><a href="ten.php?option=5">Rs.40,000-Rs.50,000</a></li>
  		<li><a href="ten.php?option=6">Rs.50,000-Rs.60,000</a></li>
  		<li><a href="ten.php?option=7">Rs.60,000-Rs.70,000</a></li>
  		<li><a href="ten.php?option=8">Rs.70,000-Rs.80,000</a></li>
  		<li><a href="ten.php?option=9">Rs.80,000-Rs.90,000</a></li>
    </ul>
    </li>
    
    
</ul>
     <!--<ul>    
    <li><a href="#">BRAND NAME</a>
    <ul>
        <li><a href="brand.php?option1=1">APPLE</a></li>
  		<li><a href="brand.php?option1=2">SAMSUNG</a></li>
  		<li><a href="brand.php?option1=3">RAZER</a></li>
  		<li><a href="brand.php?option1=4">GOOGLE</a></li>
  		<li><a href="brand.php?option1=5">BLACKBERRY</a></li>
  		<li><a href="brand.php?option1=6">XIAOMI</a></li>
  		<li><a href="brand.php?option1=7">LG</a></li>
  		<li><a href="brand.php?option1=8">VIVO</a></li>
  		<li><a href="brand.php?option1=9">LENOVO</a></li>
    </ul>
    </li>
    
    
</ul>-->

<div id="slideshow" >
  <div class="slide-wrapper" >
    <div class="slide"><img src="topslider.jpg" alt="slideshow" width="720px" height="450px"></div>
    <div class="slide"><img src="s8slide.jpg" alt="slideshow" width="720px" height="450px"></div>
    <div class="slide"><img src="pxl2slide.jpg" alt="slideshow" width="720px" height="450px"></div>
    <div class="slide"><img src="op5slide.jpg" alt="slideshow" width="720px" height="450px"></div>
    <div class="slide"><img src="ipxslide.jpg" alt="slideshow" width="720px" height="450px"></div>
    <div class="slide"><img src="n8slide.jpg" alt="slideshow" width="720px" height="450px"></div>
    <div class="slide"><img src="g6slide.jpg" alt="slideshow" width="720px" height="450px"></div>
    <div class="slide"><img src="xzslide.png" alt="slideshow" width="720px" height="450px"></div>
    <div class="slide"><img src="razerslider.jpg" alt="slideshow" width="720px" height="450px"></div>
  </div>
</div>
 </body>
 	
</html> 