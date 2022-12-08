<?php
include('conn.php');
if (isset($_POST['submit'])) {
	$p_name = $_POST['name'];
    $p_price = $_POST['price'];
    $p_type = $_POST['type'];
    $p_detail = $_POST['detail'];
    $p_img = $_FILES['img']['name'];

    $files = $_FILES["img"]["tmp_name"];
    $path ='img/product/';

	// upload files
	move_uploaded_file($files,$path.$p_img);
	$sql = "INSERT INTO product (name,price,type,detail,img)VALUES('$p_name','$p_price','$p_type','$p_detail','$p_img') ";
	$query = mysqli_query($con,$sql);
	if ($query) {
		echo"<script>alert('add success');
		</script>";
	}else{
		echo"<script>alert('add failed');
		</script>";

	}
}else{
empty($_POST);
}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>addproduct</title>
	<link rel="stylesheet" href="style2.css">
	    <link rel="preconnect" href="https://fonts.googleapis.com">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>เพิ่มสินค้า</h1>
<form name="form1" method="post" action="addpro.php" enctype="multipart/form-data">
<label for="name">ชื่อสินค้า:</label>
<input type="text" placeholder="ชื่อสินค้า" name="name"><br>
<label for="price">ราคา:</label>
			<input type="number" placeholder="ราคา" name="price"><br>
			<label for="type">ประเภท:</label>
			<input type="ttextarea" placeholder="ประเภท" name="type"><br>
			<label for="detail">รายละเอียด:</label>
			<textarea  placeholder="รายละเอียด" name="detail" rows="5"></textarea><br>
			<label for="img">รูปภาพ:</label>
			<input type="file" placeholder="รูปภาพ" name="img"><br>
			<center><input type="submit" name="submit" value="เพิ่มสินค้า"></center>
			</form>

</body>
</html>