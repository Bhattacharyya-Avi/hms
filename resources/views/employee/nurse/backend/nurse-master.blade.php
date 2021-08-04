<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://www.smarteyeapps.com/assets/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://www.smarteyeapps.com/assets/css/font-awesome.min.css" rel="stylesheet">


	<link rel="canonical" href="https://demo.adminkit.io/" />

	<title>LifeSupport</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="{{url('/css/master-light.css')}}" rel="stylesheet">
	
	<style>
		body {
			opacity: 0;
		}
	</style>
	 
	<script src="https://www.smarteyeapps.com/assets/js/jquery-3.2.1.min.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-10"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-120946860-10', { 'anonymize_ip': true });
	</script>
</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<div class="wrapper">
		@include('employee.nurse.backend.fixed_part.nurse-sidebar')	
		<div class="main">
			@include('employee.nurse.backend.fixed_part.nurse-hader')
			<main class="content">
				
			@yield('content')
			
			</main>
			@include('employee.nurse.backend.fixed_part.nurse-footer')
		</div>
	</div>

	<script src="{{url('/js/master-app.js')}}"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				
				//defaultDate: date
			});
		});
	</script>
	

<!-- <script>
  document.addEventListener("DOMContentLoaded", function(event) { 
    setTimeout(function(){
      if(localStorage.getItem('popState') !== 'shown'){
        window.notyf.open({
          type: "success",
          message: "Get access to all 500+ components and 45+ pages with AdminKit PRO. <u><a class=\"text-white\" href=\"https://adminkit.io/pricing\" target=\"_blank\">More info</a></u> 🚀",
          duration: 10000,
          ripple: true,
          dismissible: false,
          position: {
            x: "left",
            y: "bottom"
          }
        });

        localStorage.setItem('popState','shown');
      }
    }, 15000);
  });
</script> -->
</body>
</html>