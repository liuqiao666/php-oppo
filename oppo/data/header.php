<?php
error_reporting(0);
session_start();
 header('Content-Type:text/html;charset=UTF-8');?>
<!--页面顶部! -->

<header id="header">
    <ul class="header_top">
        <li><marquee behavior="scroll" scrollamount="6" direction="right">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
欢迎<?php echo $_SESSION['username'];?>来到oppo手机销售网站！</marquee></li>
        <li id=register><a href="register.php">注册</a></li>
        <li id="welcome"><a href="login.php">登录</a></li>
    </ul>
    <ul class="header_bottom">
         <p><img src="images/logo.png" alt=""></p>
         <li><a href="http://www.oppo.cn/ " target="_blank">社区</a></li>
         <li><a href="oppo_lyb.php" target="_blank">留言板</a></li>
         <li><a href="oppo_server.php">服务</a></li>
         <li><a href="oppo_experience.php">体验店</a></li>
         <li><a href="oppo_productlist.php">商城</a></li>
         <li><a href="oppo_product.php">产品</a></li>
         <li><a href="index.php">首页</a></li>
     </ul>
</header>
