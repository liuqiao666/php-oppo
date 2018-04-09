<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>OPPO 体验店</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/oppo_experience.css">
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
<div id="header"><?php include("data/header.php");?></div>

<div id="main">
  <div class="location">
      <div id="location-left" align="center"><img style="margin-top: 60px;" src="images/m_p_1.jpg"></div>
      <div class="location-right">
         <ul >
             <li>
                 <h3>标准服务</h3>
             </li>
             <li>
                 <span class="pic"></span> <a  href="">免费充电</a>
             </li>
             <li>
                 <span class="pic1"></span><a href="" class="pic">手机保养+维护</a>
             </li>
             <li>
                 <span class="pic2"></span><a href=""class="pic1">免费WIFI</a>
             </li>
             <li>
                 <span class="pic3"></span><a href=""class="pic2">免费畅饮</a>
             </li>
             <li>
                 <h3>会员服务服务</h3>
             </li>
             <li><span class="pic4"></span><a href=""class="pic3">手机帖膜</a>
             </li>
             <li>
                 <span class="pic5"></span><a href=""class="pic4">积分兑换礼品</a>
             </li>
         </ul>

      </div>
  </div>

    <div class="address">
        <ul id="div1">
        </ul>
    </div>
    <ul class="pager">
        <!--<li><<</li>-->
        <!--<li>1</li>-->
        <!--<li>2</li>-->
        <!--<li>3</li>-->
        <!--<li>>></li>-->
    </ul>
   </div>
<div id="toTop">
    <a href="#">回到顶部</a>
</div>
<div id="footer"><?php include("data/footer.php");?></div>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/oppo_experience.js"></script>
</body>
</html>

