<?php
error_reporting(0);
session_start(); 
if(isset($_POST['submit']))
{  
	if($_POST['email']!="")
	{
		$_SESSION['email']=$_POST['email'];
		$email=$_POST['email'];
		//1.连接数据库
		include("../Connections/myconn.php");
		//2.选择数据库
		mysql_select_db("oppo",$myconn);
		$sql="select *from oppo_user where email='".$email."'";
		$result=mysql_query($sql);
		
		if(mysql_num_rows($result)>0)
		{
			
			include "email.php";
			echo "<script>alert('邮件发送成功，请前往并及时重置密码！');location.href='../forgot-password.php'</script>";
		}
		else
		{
			echo "<script>alert('您输入的邮箱有误，请您重新输入！');location.href='../forgot-password.php'</script>";
		}
	}
	else
	{
		echo "<script>alert('请输入你曾在本网站注册过的邮箱！');location.href='../forgot-password.php'</script>";
	}
		
}
?>