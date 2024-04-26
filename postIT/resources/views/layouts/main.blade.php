<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>PostIT</title>
</head>
<body style="margin: 10px; margin-top: 0px">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid text-center" style="justify-content: space-around; background-color:#007BFF; color:white ;padding: 10px; padding-top:18px;">
<a class="nav-link" href="{{route('posts.index')}}" style="width:100px;"><h2>POSTS</h2></a>
<a class="nav-link" href="{{route('posts.create')}}" style="width:100px;"><h2>CREATE</h2></a>
<a class="nav-link" href="{{route('home')}}" style="width:100px;"><h2>HOME</h2></a>

</div>
</nav>
@yield('content')
</body>
</html>