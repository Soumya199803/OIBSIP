<!DOCTYPE html>
<html>
<head>
<title>HealthyMe</title>
<link rel="apple-touch-icon" sizes="180x180" href="/final year prjt/favicon_io.png">
<link rel="icon" type="image/png" sizes="32x32" href="/final year prjt/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/final year prjt/favicon_io/favicon-16x16.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- banner ccode-->
<script language="JavaScript" type="text/JavaScript">
var arr = new Array("images/healthy food.jpg","images/healthy food1.jpg","images/healthy food2.jpg","healthy1.jpg")
var count=0
function CreateBanner()
{
	if(document.images)
	{
		count++
		if(count==arr.length)
		{
			count=0
		}
		document.bnr.src=arr[count]
		setTimeout("CreateBanner()",1500)
	}
}
</script>
</head>
<!--background img code-->
<style>



.row .column img {
  border: 5px solid #000000;
  height:300px;
  width:350px;
  
  
      
	  
	 

}



img:hover {
  box-shadow: 0 0 100px ;
}


body {
  background-image: url("background7.jpg");
}






<!-- zoom in images-->
.zoom {
  transition: transform .2s;  
}
.zoom:hover {
    transform: scale(1.1); 
}




<!-- for navigation bar code-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- It completes here navigation bar code-->

<!-- for side by side image-->

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 29%;
  padding: 50px;
  margin-right:30px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

body, html {
  height: 100%;
  margin: 0;
}
<!--NavBarCode Ends here-->


<!-- code for text shadow i.e on homepage-->
<!--h1 {
  text-shadow: 2px 2px;
}-->



<!-- It completes here shadow text code-->

<!-- for blue colour button code i.e more info-->

.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}
.info {background-color: #000000;} /* Blue */
.info:hover {background: #0b7dda;}

<!-- It completes here blue button  code-->

<!-- code for next n previous buttons-->

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}


<!--h1 {
  text-shadow: 0 0 3px #060203, 0 0 5px #060203;
}-->



</style>
<!-- completes here code of netx n prev button-->
<body onload="CreateBanner()">
<!--
<div class="navbar">
  <a href="home1.php">Home</a>
  <a href="aboutus.php">About us</a>
  <a href="FeaturesWebpage.php">Features</a> 
  <a href="recipes.php">Recipes</a> 
  <a href="contact.php">Contact Us</a> 
  
</div>-->


<!--Navigation Bar Code-->
<div class="topnav">
  <a href="home1.php">Home</a>
  <a href="aboutus.php">About us</a>
  <a href="FeaturesWebpage.php">Features</a>
  <a href="recipes.php">Recipes</a>
  <a href="contactus.php">Contact</a>
</div>
<!--End of Navigation Bar Code-->

<img src="background4.jpg" height="500" width="1300" name="bnr"><br>
<!-- img for homepage image-->
    <br><center><h1>HOW TO MAKE DIFFERNCE DURING YOUR BAD <h1>
	<B><h1>HEALTH CONDITIONS. STAY TUNED!</h1><B></center>
	
    <B><u><h1 align="center">AVAILABLE AT YOUR INDOORS!</h1></u></B>
<!--side by side image code-->
<div class="row">
  <div class="column">
    <img src="images/food.jpg" class="zoom">&nbsp;&nbsp;&nbsp;
	<B><I><h2>HEALTHY FOOD</h2></I></B>
    <p>A healthy diet is essential for good health.
It protects you against many chronic non-communicable diseases.
</p>
  <button class="btn info"><a href="healthyfood.php">More Info</a></button>
</div>

<div class="column">
  <img src="images/skin1.jpg" class="zoom">&nbsp;&nbsp;&nbsp;
	<B><I><h2>HEALTHY SKIN</h2></I></B>
	<p>Your skin health says a lot about you. Your skin is the largest organ of your body and protector of everything that makes you.</p>
  <button class="btn info"><a href="healthyskin.php">More Info</a></button>
	
  </div>
  
<div class="column">
   <img src="images/Diabetes1.jpg" class="zoom">&nbsp;&nbsp;&nbsp;
	<B><I><h2>DIABETES </h2></I></B>
	<p>A person with diabetes is four times as likely to develop heart disease than someone who does not have either of the conditions.</p>
   <button class="btn info"><a href="Diabetes.php">More Info</a></button>
</div>
</div>
  
 <div class="row">
<div class="column">
   <img src="images/bp.jpg" class="zoom">&nbsp;&nbsp;&nbsp;
	<B><I><h2>BLOOD PRESSURE</h2></I></B>
	<p>It's important to get an accurate blood pressure reading so that you have a clearer picture of your risk for heart disease and stroke. </p>
   <button class="btn info"><a href="healthybp.php">More Info</a></button>
</div>
  
<div class="column">
   <img src="images/hair.jpg" class="zoom">&nbsp;&nbsp;&nbsp;
	<B><I><h2>HAIR CARE</h2></I></B>
	<p>Hair care is important for not only our appearance. Having healthy hair allows us to look our best and ensure our hair and scalp is healthy.</p>
   <button class="btn info"><a href="haircare.php">More Info</a></button>
</div> 
  
<div class="column">
   <img src="images/loose weight.jpg" class="zoom">&nbsp;&nbsp;&nbsp;
	<B><I><h2>LOOSE WEIGHT</h2></I></B>
	<p>Hair care is important for not only our appearance. Having healthy hair allows us to look our best and ensure our hair and scalp is healthy. </p>
   <button class="btn info"><a href="LoseWeight.php">More Info</a></button>
</div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html> 
