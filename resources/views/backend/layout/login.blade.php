<!DOCTYPE html>
<html>

<head>
    <title> Login Form</title>
    <link rel="stylesheet" type="text/css" href="{{url('/css/login-style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- dropdown menu -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

    </style>
    <!-- dropdown end -->
</head>

<body>
    <img class="wave" src="">
    <div class="container">
        <div class="img">
            <img src="{{url('/images/Hello.svg')}}">
        </div>

        <div class="login-content">

            <form action="{{route('user.login.post')}}" method="post">
                @csrf
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
{{--                @if(session()->has('success'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        {{ session()->get('success') }}--}}
{{--                    </div>--}}
{{--                @endif--}}
                <img src="{{url('/images/avatar.svg')}}">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>User's email</h5>
                        <input name="email" type="email" class="input">
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input name="password" type="password" class="input">
                    </div>
                </div>



                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" value="Login">
                <a href="{{route('user.signup')}}">New here? Create an account.</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{url('/js/login-main.js')}}"></script>
</body>

</html>
