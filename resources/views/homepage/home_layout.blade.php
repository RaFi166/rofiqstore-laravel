<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('homepage/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <ul class="main-nav">
               <li> <a href="#">About</a> </li>
                <li> <a href="#">Filter Products</a> </li>
                <li> <a href="#"> Delivery</a></li>
                <li><a target="_blank" href="{{route('dashboard')}}">Dashboard</a></li>
            </ul>

        </nav>
    </header>

   @yield('home_content')

    <footer class="footer">
        <p>@2021 | Author: Mezbah Uddin Rafi | </p>
       
      </footer>
  
</body>
</html>