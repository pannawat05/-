<!DOCTYPE html>
<html>
<head>
	<?php include('conn.php'); ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	$id =$_GET["id"];
	if ($_GET['type'] == 'สินค้าทั่วไป') {
		$data = "SELECT * FROM `product` WHERE type = 'สินค้าทั่วไป'";
  $query = mysqli_query($con,$data);
	}else if ($_GET['type'] == 'อาหารและเครื่องดื่ม') {
		$data = "SELECT * FROM `product` WHERE type = 'อาหารและเครื่องดื่ม'";
  $query = mysqli_query($con,$data);
	}else if ($_GET['type'] == 'เครื่องใช้ไฟฟ้า') {
		$data = "SELECT * FROM `product` WHERE type = 'เครื่องใช้ไฟฟ้า'";
  $query = mysqli_query($con,$data);
	}else if ($_GET['type'] == 'เครื่องมือสื่อสาร') {
		$data = "SELECT * FROM `product` WHERE type = 'เครื่องมือสื่อสาร'";
  $query = mysqli_query($con,$data);
	}else if($id != 0) {
		$data = "SELECT * FROM `product` WHERE id = '$id' ";
  $query = mysqli_query($con,$data);
	}else{
  $data = "SELECT * FROM `product`";
  $query = mysqli_query($con,$data);
}

	?>
</head>
<style type="text/css">
	a{
text-decoration: none;
color: #000;
text-align: center;
	}
.product{
display:grid;
grid-template-columns: 1fr 1fr 1fr;
grid-template-areas: pro pro pro;
border-radius: 8px;
box-shadow: 3px 5px 4px 6px rgba(0, 0, 0, 0.2);
left: 50px;
width: 200px;
height: 80%;
margin-bottom: 5%;
margin-left: 5%;
text-align: center;
grid-area: pro;
}
.background{
width: 100%;
height: 100vh;
background: rgba(0, 0, 0, 1.0);
opacity: 70%;
z-index:1;
position: absolute;
display: none;

}
.modal{
width: 80%;
height: 500px;
opacity: 1;
border-radius: 5px;
box-shadow: 4px 5px 3px 2px rgba(0, 0, 0,0.2);
background: #fff;
position: relative;
margin-top: 80px;
display: none;
z-index: 1;

}
.modal span{
display: flex;
float: right;
margin-right: 10px;
font-size: 17px;
cursor: pointer;
top: 5px;
}
.modal-content{
text-align: left;
}
</style>
<body>
<?php while($row = mysqli_fetch_assoc($query)): ?>
	<div class="background">
		</div>
		<center>
<div class="modal">
	<span  onclick="close()">&times;</span>
	<div class="modal-content">
<h4>ชื่อสินค้า:</h4><?php echo $row['name']; ?>
<img src="./img/product/<?php echo $row['img']; ?>" width="150" height="90" style="padding-bottom:5px">
<h4>ราคา:</h4><?php echo $row['price']; ?>
<h4>ประเภท:</h4><?php echo $row['type']; ?>
<h4>รายละเอียด:</h4><?php echo $row['detail']; ?>
	</div>
</div>
</center>
<div class="product">
 <a href='?id= <?php echo $row['id']; ?>'><img src="./img/product/<?php echo $row['img']; ?>" width="120" height="120" style="padding-bottom:5px">
 <div style="margin-top:20px ;">
 <h5> <?php echo $row['name']; ?><br></h5>
 <?php echo $row['price']; ?> บาท
</div>

</div>

<?php endwhile; ?>
<script type="text/javascript">
var id = <?= $id ?>;
if (id != 0) {
document.querySelector('.background').style.display='block';
document.querySelector('.modal').style.display='block';
}


function close(){
   document.querySelector('.background').style.display='none';
   document.querySelector('.modal').style.display='none';


}
</script>
</body>
</html>