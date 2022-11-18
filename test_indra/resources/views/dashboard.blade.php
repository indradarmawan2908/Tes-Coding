<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <center><img src="{{ ('img/Logo Apps.png ') }}"></center>
    
</head>
<head>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <h3>Menu</h3>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('dashboard.list') }}" class="list-group-item" >User List</a>
                  <a class="dropdown-item" href="{{ route('blog.index') }}" class="list-group-item" >Data Kendaraan</a>
                  <a class="dropdown-item" href="{{ route('dashboard.logout') }}" class="list-group-item" >Logout</a>
                </div>
              </li>
          </ul>
          </div>
      </div>
    </nav>
</head>
<body>
<center><form action="index.php" method="get">
	<label>Search :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form></center>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<center>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/1.jpg" alt="Komputer 1" style="width:18%;">
      </div>

      <div class="item">
        <img src="img/2.jpg" alt="Komputer 2" style="width:18%;">
      </div>
    
      <div class="item">
        <img src="img/3.jpg" alt="Komputer 3" style="width:18%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</center>
</body>
</html>
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<head>

<style>
div.gallery {
    border: 1px solid #ccc;
}
div.gallery:hover {
    border: 1px solid #777;
}
div.gallery img {
    width: 22%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
    
}
div.desc {
    padding: 1px;
    text-align: center;
}

// box-sizing: border-box; 지정안하면 padding, border값의 영향을 받아 box 길이값이 틀어지기 때문에 꼭 추가필요.

* {
    box-sizing: border-box; // 박스의 가로 세로 모두 padding, border 값을 포함한 길이이다 라고 정의하는 거죵.

    -webkit-box-sizing: border-box;

    -moz-box-sizing: border-box;
}

.responsive {
    padding: 0 0px;
    float: left;
    width: 33%;  // 기본값으로 4개씩으로 설정
}

// 사용자 해상도가 700px 이하 일때는 2개씩 나열하자

@media only screen and (max-width: 1000px) {
    .responsive {
        width: 5%; // 2개씩
        margin: 5px 0;
    }
}


@media only screen and (max-width: 10px) {
    .responsive {
        width: 15%; 
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/card_giftcard_24pxsad.svg">
      <img src="img/card_giftcard_24pxsad.svg" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">Material</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/build_24px_outlined.svg">
      <img src="img/build_24px_outlined.svg" alt="build_24px_outlined" width="300" height="200">
    </a>
    <div class="desc">Tools</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/perm_data_setting_24px_outlined.svg">
      <img src="img/perm_data_setting_24px_outlined.svg" alt="perm_data_setting_24px_outlined" width="300" height="200">
    </a>
    <div class="desc">Fitting</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/Infinity-0.8s-224px.svg">
      <img src="img/Infinity-0.8s-224px.svg" alt="Infinity-0.8s-224px" width="300" height="200">
    </a>
    <div class="desc">Ceramics</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/layers_24px_outlined.svg">
      <img src="img/layers_24px_outlined.svg" alt="layers_24px_outlined" width="300" height="200">
    </a>
    <div class="desc">Arylic</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/category_24px_outlined.svg">
      <img src="img/category_24px_outlined.svg" alt="category_24px_outlined" width="300" height="200">
    </a>
    <div class="desc">Others</div>
  </div>
</div>
<div class="clearfix"></div>

<div style="padding:10px;">


</body>
</html> 
<!-- Bottom Navbar -->
<link rel="stylesheet" href="style.css">
<div>
    <nav class="navbar navbar-dark bg-light navbar-expand fixed-bottom">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
            <img src="{{ ('img/home_24px_outlined.svg ') }}">
            <a href="{{ route('dashboard.index') }}"  class="nav-link">
            <button class="btn btn-home btn-light">Home</button>        
                </a>
            </li>
            <li class="nav-item">
            <img src="{{ ('img/add_shopping_cart_24px_outlined.svg ') }}">
                <a href="#" class="nav-link">
                <button class="btn btn-home btn-light">Cart</button>  
                </a>
            </li>
            <li class="nav-item">
            <img src="{{ ('img/perm_identity_24px_outlined.svg ') }}">
            <a href="{{ route('dashboard.account') }}" class="nav-link">
            <button class="btn btn-home btn-light">Account</button> 
                </a>
            </li>
        </ul>
    </nav>
</div>
</body>
</html>
