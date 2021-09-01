<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{url('/css/login-style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	 <img class="wave" src="">
	<div class="container">
		<div class="img">
			<img src="{{url('/images/hospital.svg')}}">
		</div>
		<div class="login-content">
			<form action="#">
				<img src="{{url('/images/employee.svg')}}">
				<h3 class="title">Welcome Employee</h3>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
				
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>

				<!-- <div class="input-div pass">
           		   <div class="i"> 
           		     <i class="fas fa-question"></i> 
           		   </div>
					
					<div class="div">
						<select class="form-select" aria-label="Default select example">
							<option >Select a type</option>
							<option value="admin">Admin</option>
							<option value="doctor">Doctor</option>
							<option value="nurse">Nurse</option>
							<option value="accountant">Accountant</option>
						</select>
					</div>
            	</div> -->

            	<a style="color:red;">Forgot Password? contct with admin.</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{url('/js/login-main.js')}}"></script>
</body>
</html>
