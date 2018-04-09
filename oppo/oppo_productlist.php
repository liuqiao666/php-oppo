<!DOCTYPE html>
<html>
<head>
    <title>OPPO 商城 </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/oppo_productlist.css">
    <link rel="stylesheet" href="css/common.css"/>
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
<div id="header"></div>
<a class="gw"></a>
<div id="banner">
    <img src="images/product/ad.jpg" alt=""/>
</div>
<div id="main">
        <!-- 产品列表 -->
        <section id="plist">
            <ul>
            </ul>

        </section>
    <p class="services">
        <img src="images/phone/services.png" alt=""/>
    </p>
</div>
<div id="toTop">
    <a href="#">回到顶部</a>
</div>
<?php include("data/footer.php");?>
<div id="footer"></div>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/oppo_productlist.js"></script>
<script>
    window.onscroll=function(){
        var scrollTop=document.body.scrollTop;
        document.getElementById("toTop").style.display=scrollTop>300?"block":"none";
    }
</script>

</body>
</html>
