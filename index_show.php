<!DOCTYPE html>
<html>
<head>
	<?php include('conn.php'); ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
  $data = "SELECT * FROM `product`";
  $query = mysqli_query($con,$data);


	?>
</head>
<style type="text/css">
.product{
display: inline-block;
border-radius: 8px;
box-shadow: 3px 5px 4px 6px rgba(0, 0, 0, 0.2);
margin-right:10% ;
left: 50px;
margin-bottom: 5%;
}
</style>
<body>
<?php do{ ?>
<div class="product">

  <a href='showpro_detail2.php?id= <?php echo $row['id']; ?>'><img src="./img/product/<?php echo $row['img']; ?>" width="200" height="200" style="padding-bottom:5px"></a>
  <br />
  <?php echo $row['name']; ?><br />
·ราคา <?php echo $row['price']; ?> บาท</div>
</div>
<?php } while($row = mysqli_fetch_assoc($query)); ?>
</body>
</html>