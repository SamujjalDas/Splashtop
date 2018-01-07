<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php include("db.php");?>
<html>
<head>
<title>Splashtop</title>
<link rel="icon" href="logo.jpg">
<style>

ul{list-style-type:none;margin:0;padding:0;position:fixed;top:5px;}
li{float:left;}
li a{display:block;background-color:#111;color:white;padding:14px 16px;width:286px;font-family:lucida handwriting;
text-decoration:none;}
li a:hover{background-color:#333;color:#FFFFE0;}
.active{background-color:#FF0000;color:#FFFFE0;}
.d1{color:#F5F5F5;text-align:center;padding:20px 0px 10px 0px;font-weight:bold;background-image:url("bg3.jpg")}
.logo{height:90px;width:90px;}
.box{border-radius:6px;}
.d2{border:6px solid #FF0000;border-radius:15px;width:800px;margin:0 auto;}
.up{background-color:#FF0000;color:#FFFFE0;height:30px;width:100px;border-radius:6px;font-family:lucida handwriting;}
.are{font-family:lucida handwriting;color:#111;text-align:center;size:5;}
.t{background-color:#F5F5F5;}
.footer{background-color:#DCDCDC;color:#111;text-align:center;border-radius:8px;font-family:courier new;opacity:0.6;}
</style>
</head>
<body class="t">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a class="active"href="upload.php">Upload</a></li>

<li><a href="contact.php">Contact</a></li>
</ul>
<div class="d1"><font face="papyrus" size="10"><p><img src="logo.jpg" class="logo">Splashtop.online</p></font></div>



<div >
<h3 class="are">Are u ready to upload ur first click?</h3>
<div class="d2"align="center"  >
<font face="lucida console">
<form name="register" method="post" action="upload.php" enctype="multipart/form-data">
<table border="0" width="50%"><tr>
<td width="40%" align="right"  >Name:</td>
<td><input type="text" placeholder="John Smith"name="name"class="box"required></input>
</td>
</tr>
<tr>
<td align="right" >Password:</td>
<td><input type="password"name="password" placeholder="******" class="box"required></input>
</td>
</tr>
<tr>
<td align="right" >Email:</td>
<td><input type="email" placeholder="johnsmith@gmail.com"name="email"class="box"required></input>
</td>
</tr>
<tr><td align="right" >Description</td>
<td><textarea name="description"col="20" rows="4" class="box"placeholder="description..."required></textarea></td>
</tr>
<tr>
<td align="right">Gender:</td>
<td><input type="radio" name="gender" value="male" checked > Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
</td>
</tr>
<tr>
<td align="right">Upload photograph:</td>
<td><input type="file" name="photograph"class="box"required></input></td>
</tr>

<tr>
<td colspan="2" align="center">I agree to all terms and conditions:
<input type="checkbox" class="box"required></input>
</tr>
<tr>
<td colspan="2" align="center"><p><input type="submit" class="up"value="Upload" name="upload"></input></p>
 <input type="reset"class="up"></input>
</td>
</tr></table>
</div><br><hr>
<div class="footer"> This site is hosted and maintained by Splashtop.online<br>
All copyrights reserved.</div>

</div>

</body>
</html>

<?php
if(isset($_POST[upload]))
{
	$uploaded_img_size_limit=778240999999;
	$photograph_name_only=$_FILES['photograph']['name'];
		
		$photograph_name=time().'_'.$_FILES['photograph']['name'];
		
		$photograph_tmp_name=$_FILES['photograph']['tmp_name'];

		$photograph_size=$_FILES['photograph']['size'];
		
		$photograph_type=$_FILES['photograph']['type'];

	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$description=$_POST['description'];
	if($product_img1_size>$uploaded_img_size_limit)
			{
				echo "<script>alert('Image 1 Size Must be Equal or Less than 756KB ')</script>";
				exit();
			}

			
else
	{
		$uploaded_images_dir="uploaded_images/";
		move_uploaded_file($photograph_tmp_name,$uploaded_images_dir.$photograph_name);
		
$insert_value="INSERT INTO 'upload'(name,password,email,description,photograph) VALUES ('$name','$password','$email','$description','$photograph')";

global $con;							
$run_form=mysqli_query($con,$insert_value);
$run_student=mysqli_query($con,$run_form);	
if($run_student>0)
				{
					echo "<script>alert('Photograph posted successfully')</script>";
				}
			else
				{
					echo "<script>alert('Photograph posted successfully')</script>";
				}	
}}
?>