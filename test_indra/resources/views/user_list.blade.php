<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Dashboard</title>
</head>
<body>
<button onclick="goBack()"><</button>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<center><h1>User List</center></h1>
</body>
<center>
<p></p>
<div class="card mb-3" style="max-width: 450px;">

  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/perm_identity_24px_outlined.svg" class="card-img" alt="gambar" height="80%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-text"> {{ Auth::user()->first_name }}
        {{ Auth::user()->last_name }}
        </h2>
        <p class="card-text"> {{ Auth::user()->email }}</p>
      </div>
    </div>
  </div>
</div>
</center>
<p></p>
<center>
<div class="card mb-3" style="max-width: 450px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/perm_identity_24px_outlined.svg" class="card-img" alt="gambar" height="80%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-text"> {{ Auth::user()->last_name }}
        {{ Auth::user()->first_name }}
        </h2>
        <p class="card-text"> {{ Auth::user()->email }}</p>
      </div>
    </div>
  </div>
</div>
</center>
<body>

<h1 align="right">&plus;</h1>


</body>
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

