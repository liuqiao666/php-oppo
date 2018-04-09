<?php
error_reporting(0);
session_start();
mysql_query("set names 'utf8'");
if(isset($_POST['submit']))
{ 

	
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	$email=trim($_POST['email']);
	$password_confirm=trim($_POST['password_confirm']);
	
	$checkpassword = preg_match('/^\d{6,16}$/', $password);
    $checkemail = preg_match('/^\d{6,16}$/', $email);

	$regtime = time(); 
	$token = md5($username.$password.$regtime); //创建用于激活识别码 
	$token_exptime = time()+60*60*24;//过期时间为24小时后 	
	if($username==""||$password==""||$password_confirm=="")
	{
	   echo "<script>alert('密码或账号不能为空');location.href='../register.php'</script>;";
	}
	else
	{   //2.将所有信息写入数据库
	 	include "../Connections/myconn.php";
	 	mysql_select_db("oppo",$myconn);
	 	$sql="select *from oppo_user where username='".$username."'";
		$result=mysql_query($sql);
		if(mysql_num_rows($result)>0){
			echo "<script>alert('账户已存在！');location.href='../register.php'</script>;";
		}
		else
		{
		 	$sql="select *from oppo_user where email='".$email."'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result)>0){
				echo "<script>alert('邮箱已注册！');location.href='../register.php'</script>;";
			}
			else{
					if(strcasecmp($_POST['yzm'],$_SESSION['yzm'])!=0)
					{
						 echo "<script>alert('验证码不正确');location.href='../register.php'</script>;";
					}
				 	else
				 	{//1.上传头像图片
					 	if($_FILES['myfile']['type']=="image/jpeg"||$_FILES['myfile']['type']=="image/png"||$_FILES['myfile']['type']=="image/pjpeg")				//判断文件格式是否为JPEG
						{
					 		if($_FILES['myfile']['error']>0)				//判断上传是否出错
								echo "错误：".$_FILES['myfile']['error'];		//输出错误信息
					 		else
					 		{
								$tmp_filename=$_FILES['myfile']['tmp_name'];		//临时文件名
								$filename=$_FILES['myfile']['name'];			//上传的文件名
								$dir=$_SERVER['DOCUMENT_ROOT']."/oppo/images/";		//上传后文件的位置
								if(is_uploaded_file($tmp_filename))			//判断是否通过HTTP POST上传
								{
									//上传并移动文件
									if(move_uploaded_file($tmp_filename, $dir.$filename))
									{
										if(isset($_POST['ty']))
										{
										 	$sql="insert into oppo_user (username,password,email,headerimg) values('".$_POST['username']."','".$_POST['password']."','".$_POST['email']."','".$filename."');";
										 	$result=mysql_query($sql);
										 	if($result)
										 	{
										 		$_SESSION['username']=$username;
												$_SESSION['email']=$email;
												
										 	    include "email.php"; 
										     	echo "<script>alert('账号已注册，请验证邮箱后登录！');location.href='../login.php'</script>;";
									        }
									     	else
										     	echo "<script>alert('注册失败');location.href='../register.php'</script>;</script>;";	
								    	}
										else
										{
											echo "<script>alert('您未同意协议，不能注册');location.href='../register.php'</script>;</script>;";
										}
									}
									else
										echo "<script>alert('上传失败');location.href='../register.php'</script>;</script>;";
								}
							}
						}
						else
						{
							echo "<script>alert('文件格式非图片');location.href='../register.php'</script>;</script>;";
						}
			  		}
				}
		}
	}
}
?>
