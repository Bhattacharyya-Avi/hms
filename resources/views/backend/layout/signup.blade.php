<!DOCTYPE html>
<html>
<head>
	<title>Sign up Form</title>
	<link rel="stylesheet" type="text/css" href="{{url('/css/signup-style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="">
	<div class="container">
	        <div class="img">
			<img src="{{url('/images/signup.svg')}}">
		</div>
		<div class="login-content">

			<form action="{{route('open.account')}}" method="post">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
				<img src="{{url('/images/avatar.svg')}}">
				<h2 class="title">Register</h2>
                    <div class="input-div one">
                        <div class="i">
                                        <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                                        <h5>Full name</h5>
                                        <input required type="text" class="input" name="full_name">
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i">
                                <i class="far fa-address-card"></i>
                        </div>
                        <div class="div">
                                <h5>Address</h5>
                                <input required type="text" class="input" name="address">
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i">
                                <i class="material-icons">&#xe0cd;</i>
                        </div>
                        <div class="div">
                                <h5>Phone number</h5>
                                <input required type="number" class="input" name="phone_no">
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i">
                        <i class="fas fa-transgender"></i>
                        </div>
                        <div class="div">
                                <!-- <h5>Gender</h5> -->
                            <h5>
                                    <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male">
                                            <span class=""></span>
                                    </label>
                                    <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class=""></span>
                                    </label>
                            </h5>
                        </div>
                    </div>

                    <div class="input-div one">
                            <div class="i">
                                    <i class="material-icons">&#xe0be;</i>
                            </div>
                            <div class="div">
                                    <h5>Email</h5>
                                    <input required type="email" class="input" name="email">
                            </div>
                    </div>

                    <div class="input-div pass">
                            <div class="i">
                                    <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                    <h5>Password</h5>
                                    <input required type="password" class="input" name="password">
                            </div>
                    </div>

                    <input type="submit" class="btn" value="Signup" >
                    <a href="{{route('user.login')}}">Already have an account? Login</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{url('/js/login-main.js')}}"></script>
</body>
</html>
