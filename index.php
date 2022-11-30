<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Basic PHP</title>
</head>
<body>
<div class="container">
    <nav>
      <!-- toggle icon-->
      <div class="nav-mobile" onclick="toggle()">
     <div id="line1"></div>
     <div id="line2"></div>
     <div id="line3"></div>
     </div>

    <div class="navcontent">
        <!-- logo-->
<a id="logo" href="#!">My Catalog!</a>
<!--menu-->
    <a href="#" id="link">Home</a>
    <a href="#" id="link">About</a>
    <a href="#" id="link">Product</a>
    <a href="#" id="link">Contact</a>
    <div class="dropdown" id="link">
        <a class="dropbtn">
        <i class="fa-solid fa-square-caret-down"></i>Dropdown
        </a>
  <div class="dropdown-content" id="content">
  <a href="#">link1</a>
  <a href="#">link2</a>
  <a href="#">link3</a>
    </div>
</div>
    </div>
    </nav>
    <div class="sidebar">sidebar</div>
    <div class="catalog">catalog</div>
    <footer>Created by...</footer>
</div>
<script src="script.js"></script>
</body>
</html>