<!DOCTYPE html>
 <html lang="en">
   <head>
      <title>OPPO 官网</title>
      <meta charset="utf-8">
		<link rel="stylesheet" href="css/oppo.css">
		<link rel="stylesheet" href="css/common.css">
	   <style>
		   #toTop{
			   position: fixed;
			   right:1%;
			   bottom:18%;
			   display: none;
		   }
		   #toTop a{
			   padding:12px 15px;
			   background: #47b488;
			   color:#fff;
			   text-align: center;
		   }
	   </style>
   </head>

   <body>
<?php include("data/header.php");?>
	 <div id="banner">
	    <div id="slider">
			 <ul id="imgs">
				<li><img src="images/ad_1.jpg"></li>
				<li><img src="images/ad_2.jpg"></li>
				<li><img src="images/ad_3.jpg"></li>
				<li><img src="images/ad_4.jpg"></li>
			 </ul>
			 <ul id="indexs">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			 </ul>
		 </div>
		 <div class="clear"></div>
	 </div>
	 <section id="main">
	  <div>
	   <ul>
	   	<li><img src="images/main_1.jpg"></li>
	   	<li class="mid"><img src="images/main_2.jpg"></li>
	   	<li><img src="images/main_3.jpg"></li>
	   </ul>
	  </div>
	 </section>
	 <div id="toTop">
		 <a href="#">回到顶部</a>
	 </div> 
	    
<div id="footer"> </div>
	  <script src="js/jquery-1.11.3.js"></script>
	  <script src="js/oppo.js"></script>
	 <script>
		 window.onscroll=function(){
		 var scrollTop=document.body.scrollTop;
		 document.getElementById("toTop").style.display=scrollTop>300?"block":"none";
		 }
	 </script>

   </body>
 </html>