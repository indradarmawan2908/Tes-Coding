<!doctype html>

<html lang="en">
<button onclick="goBack()"><</button>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=2, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                    <center><h1>My Account</h1></center>
                <center><img src="{{ ('img/perm_identity_24px_outlined.svg ') }}"></center>
                    <center><h2>{{ Auth::user()->first_name }}</h2></center>
                    <center><td>{{ Auth::user()->email }}</td></center>
                    
        </div>
    </div>
</div>
<body>

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
