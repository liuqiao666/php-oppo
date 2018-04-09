<?php
error_reporting(0);
mysql_query("set names 'utf8'");
if(isset($_POST['submit']))
	{
		if($_POST['pw']==$_POST['qmm'])
		{
			
			include "../Connections/myconn.php";
			mysql_select_db("oppo",$myconn);
			$sql="update oppo_user set password ='".$_POST['pw']."' where email='".$_POST['email']."'";
			$result=mysql_query($sql);
			
			if($result){
				echo "$sql";	
			  echo "<script>alert('修改成功！');location.href='../login.php';</script>;";
			}
		}
		
		else
		{
			echo "<script>alert('前后密码不一致，请您重新输入！');location.href='../oppo_reset-password.php';</script>";
		}
}
?>