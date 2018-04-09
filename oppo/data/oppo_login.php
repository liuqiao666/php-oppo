<?php
session_start();
if(isset($_POST['dl']))
{
	$_SESSION['username']=$_POST['username'];
	//include "email.php";
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username!=""&&$password!=""){
		//1.建立数据库连接
		include "../Connections/myconn.php";	 
		//2.选择数据库
		mysql_select_db("oppo",$myconn);
		//3.写sql语句
		$sql="select *from oppo_user where username='".$username."' and password='".$password."'";
		//4.执行sql
		$result=mysql_query($sql);
		//5.读出结果$result做相应的操作
		//通过获取$result的行数来判定用户名和密码是否正确
		$hang=mysql_num_rows($result);
		
		
		$sql="select *from oppo_user where username='".$username."' and password='".$password."' and status='1'";
		$result=mysql_query($sql);
		if($hang==0)
		  echo "<script>alert('用户名或密码错误');location.href='../login.php'</script>;";
		else
			{
				if(mysql_num_rows($result)==0){
					echo "<script>alert('用户未激活！');location.href='../login.php'</script>";
				}
				else{
				  echo "<script> location.href='../index.php'</script>"; 
				  }
			}
        }
}
?>