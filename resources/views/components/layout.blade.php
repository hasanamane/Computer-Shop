<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="FONTAWESOME_NPM_AUTH_TOKEN=FONT-AWESOME-PACKAGE-TOKEN npm install --save @fortawesome/fontawesome-pro
">

    <title>Computer Shop</title>
</head>
<body style="background-color: white;" id="body">
<nav class="navbar navbar-dark bg-dark" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('allproduct')}}" style="font-size: 13px;" >Computer Shop</a>
        <a class="navbar-brand" style="cursor: pointer; background-color: #cbd5e0; border-radius: 20px ;color:#5a207c;font-size: 11px;padding: 10px; " onclick="ChangeThemes();" >Chenge Themes</a>
        <div class="regster">
            @auth
                <apan style="display: inline-block;color: white;">Welcome ,&nbsp;&nbsp;{{ auth()->user()->Name}} !</apan>
                <form action="/logout">
                    @csrf
                    <button type="submit" style="display: inline-block; color: #5a207c;">Logout</button>
                </form>

            @else
                <a href="/register" style="display: inline-block; color: white;text-decoration: none; float: left;">register &nbsp;&nbsp;&nbsp;&nbsp;</a>
                <a href="/Login1"  style="display: inline-block; color: white;text-decoration: none;float: left;">Login</a>
            @endauth
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="max-width:20px;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('allproduct')}}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('regster_c') }}">Create Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('regster_c') }}">Create Category</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('category',1)}}">Computer Lenovo</a></li>
                        <li><a class="dropdown-item" href="{{route('category',2)}}">Computer Dell</a></li>
                        <li><a class="dropdown-item" href="{{route('category',3)}}">Computer Casper</a></li>
                        <li><a class="dropdown-item" href="{{route('category',4)}}">Computer HP</a></li>
                        <li><a class="dropdown-item" href="{{route('category',5)}}">Computer Asus</a></li>
                        <li><a class="dropdown-item" href="{{route('category',6)}}">Computer Rayson</a></li>




                        <li><hr class="dropdown-divider"></li>

{{--                        <li><a class="dropdown-item" href="#">Computer Asus</a></li>--}}
                    </ul>
                </li>

            </ul>

        </div>
    </div>

</nav>

<div class="continer">
    <div>
        {{$slot}}
    </div>
</div>


















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script>

    function ChangeThemes() {
        // let array = ['#1a8753d4', '#9d00ffc4', '#5ef312', '#2f978dd9', '#2f5997eb'];
        // for (let i = 0; i < array.length; i++) {
        //     document.getElementById('body').style.color = array[i];
        //     document.getElementById('body').style.backgroundColor =array[i+1];
        //     document.getElementsById('navbar').style.backgroundColor = array[i+2];
        //     document.getElementsByTagName('p').style.color=array[i+3];
        //     document.getElementsByTagName('a').style.color=array[i+4];
        //
        // }
        let all=document.querySelector("#body");
        let array = ['#1a8753d4', '#9d00ffc4', '#5ef312', '#2f978dd9', '#2f5997eb','#5600ffe8','#5400ffe1','#3210ffe1'];
        setInterval(()=>{
            let randomNum=Math.floor(Math.random() * array.length);
            all.style.backgroundColor=array[randomNum+1];
            all.style.color=array[randomNum];
        },1500);






    }
</script>
</body>
</html>
