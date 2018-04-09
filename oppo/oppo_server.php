<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/oppo_server.css">
    <link rel="stylesheet" href="css/common.css">
    <title>OPPO 服务</title>
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
    <p><a href="index.php">首页</a>&nbsp;/<a href="#">&nbsp;服务</a></p>
    <img src="images/server/ad_1.jpg" alt="" style="width:100%;height:400px;"/>
</div>
<div id="main">
    <div class="box">
        <h2 class="lf">自助服务</h2>
        <a href="oppo_message.php" class="rt"> <i class="lf">?</i>建议反馈 > </a>
    </div>
    <div class="self">
        <ul>
            <li><img src="images/server/01.jpg" alt=""/></li>
            <li><img src="images/server/02.jpg" alt=""/></li>
            <li><img src="images/server/03.jpg" alt=""/></li>
            <li><img src="images/server/04.jpg" alt=""/></li>
            <li><img src="images/server/05.jpg" alt=""/></li>
            <li><img src="images/server/06.jpg" alt=""/></li>
            <li><img src="images/server/07.jpg" alt=""/></li>
            <li><img src="images/server/08.jpg" alt=""/></li>
        </ul>
    </div>
    <div class="box">
        <h2 class="lf">产品专区</h2>
    </div>
    <div class="self1">
        <ul class="lf">
            <li class="accordion1">
                <img src="images/server/15.jpg" alt=""/>
            </li>
            <li class="accordion1">
                <img src="images/server/16.jpg" alt="" />
            </li>
            <li class="accordion1">
                <img src="images/server/17.jpg" alt="" />
            </li>
            <li class="accordion1">
                <img src="images/server/19.jpg" alt="" />
            </li>
            <li class="accordion1">
                <img src="images/server/20.jpg" alt="" />
            </li>
            <li class="accordion1">
                <img src="images/server/18.jpg" alt="" />
            </li>
        </ul>
    </div>
    <div class="wen">
        <div class="lf">
            <div class="tittle">
                <h2 class="lf">热点问题</h2>
                <a href="" class="rt">查看更多</a>
            </div>
            <ul>
                <li class="accordion">
                        <a href="">回复出厂后，为何本地的备份文件丢失？</a>
                        <b class="title" data-toggle="title"></b>
                        <div class="content">
                            <p> 恢复出厂有两种方式：</p>
                            <p> 1.完全清理：不会删除保存的照片 音频 文档等数据文件。</p>
                            <p> 2.不完全清理：会删除手机中的所有数据文件。</p>
                            <p>如果不想清除掉备份文件，则使用“不完全清理”方式恢复出厂：</p>
                            <p>ColorOS 3.0系统：进入【设置】——【其他设置】——【还原】，点击【抹除全部应用数据与可卸载程序】进行恢复出厂。</p>
                            <p>ColorOS 3.0以下系统：进入【设置】——【更多】——【恢复出厂设置】，关闭或取消勾选【完全清理】，再进行恢复出厂。</p>
                        </div>
                    <a href="">微信等软件无法拍摄视频或录制语音，或提示音设置权限，怎么办?</a>
                    <b class="title" data-toggle="title"></b>
                    <div class="content">
                        <p>进入【手机管家】或【安全中心】找到【权限隐私】——【应用权限管理】，找到相应的软件，开启摄像头或录音权限。</p>
                    </div>
                    <a href="">如何关闭语音播报?</a>
                    <b class="title" data-toggle="title"></b>
                    <div class="content">
                        <p>ColorOS 3.0系统：进入【设置】——【语音助手】，关闭【语音播报】。</p>
                        <p>ColorOS 3.0以下系统：长按手机左下角的功能按键，启动【语音助手】，点击设置按键，进入关闭【语音播报】。</p>
                    </div>
                    <a href="">呼吸灯不闪烁，怎么办？</a>
                    <b class="title" data-toggle="title"></b>
                    <div class="content">
                        <p> 1.对于软件通知，进入【设置】——【通知与状态栏】——【通知管理】，找到对应软件，进入开启【呼吸灯闪烁】。</p>
                        <p> 2.对于充电，只有关机充电才会有呼吸灯闪烁。</p>
                    </div>
                    <a href="">如何设置指纹支付？</a>
                    <b class="title" data-toggle="title"></b>
                    <div class="content">
                        <p>微信指纹支付，进入【微信】的【钱包】，点击右上角三个小点，再点击【支付管理】，开启【指纹支付】。</p>
                        <p> 支付宝指纹支付，进入【支付宝】的【设置】——【账户与安全】——【安全中心】——【安全保护工具】——【指纹】，设置指纹支付。</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="rt">
            <div class="tittle">
                <h2 class="lf">使用小技巧</h2>
                <a  class="rt" href="">查看更多</a>
            </div>

            <ul >
                <li class="accordion">
                  <a href="">关闭语音播报的操作方法</a>
                    <b class="title" data-toggle="title"></b>
                    <div class="content">
                        <p>个别用户咨询，来短信时，会出现语音播报，如何关闭？</p>
                        <p> ColorOS 3.0系统：进入【设置】——【语音助手】，关闭【语音播报】</p>
                        <p> ColorOS 3.0以下系统：长按手机左下角的功能按键，启动【语音助手】，点击设置按键，进入关闭【语音播报】。</p>
                    </div>
                    <a href="">支付宝开启指纹支付的方法</a>
                    <b class="title" data-toggle="title"></b>
                    <div class="content">
                        <p> 打开支付宝--点击设置--安全中心--安全保护工具--指纹--开启指纹支付</p>
                    </div>
                    <a href="">R9s新功能添加照片到锁屏杂志的操作方法</a>
                    <b class="title" data-toggle="title"></b>
                    <div class="content">
                        <p> 进入【设置】——【锁屏杂志与壁纸】，可以看到【添加照片到锁屏杂志】，点击进入可以添加图片（最多添加3张）。</p>
                        <p>此外，在锁屏杂志还新增了左右滑动查看图片功能（当前如果第一张图片，则只能向右滑动）。</p>
                    </div>
                    <a href="">R9s新功能恢复最近删除的图片操作方法</a>
                    <b class="title" data-toggle="title"></b>
                    <div class="content">
                        <p>进入【相册】，可以看到【最近删除】的文件夹，顾名思义，最近删除的图片和视频（使用相机拍摄的视频）会保存在这里，如果想要恢复，可以进入【最近删除】的文件夹选择照片点击恢复。</p>
                        <p> 需要注意的是，保存最近删除的图片是有期限的——30天，30天后将自动永久删除站片，无法恢复。</p>
                    </div>
                    <a href="">R9s新功能还原手机的操作方法</a>
                    <b class="title" data-toggle="title"></b>
                    <div class="content">
                        <p>进入【设置】——【其他设置】——【还原手机】，该功能相当于【恢复出厂功能】，此外，新增了【抹掉手机联系人和通话记录】和【抹掉手机短信和彩信】。从而可以更方便更快捷的，选择删除手机内容。</p>
                        <p> PS:</p>
                        <p>如果设置了锁频密码，那么【还原手机】的密码就是锁屏密码：如果同时登录了【云服务】账号，则还需输入云服务密码哦，安全指纹UP、UP、UP！</p>

                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>
<div id="toTop">
    <a href="#">回到顶部</a>
</div>
<div id="footer"> </div>
</body>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/oppo.js"></script>
<script>
    $(".accordion").on( "click","[data-toggle='title']",function(){
                $(this).next().toggleClass("open")
                        .siblings(".open")
                        .removeClass("open");
            }
    );
    $(".accordion1").on( "click","[data-toggle='title1']",function(){
                $(this).next().toggleClass("open")
                        .siblings(".open")
                        .removeClass("open");
            }
    );

    window.onscroll=function(){
        var scrollTop=document.body.scrollTop;
        document.getElementById("toTop").style.display=scrollTop>300?"block":"none";
    }
</script>
</html>