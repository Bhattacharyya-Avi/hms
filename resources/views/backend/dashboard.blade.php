<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Dashboard</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <!-- Bootstrap core CSS     -->
        <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="{{url('/css/animate.min.css')}}" rel="stylesheet"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href="{{url('/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>


        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="{{url('/css/demo.css')}}" rel="stylesheet" />


        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="{{url('/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
        <link herf="{{('/fonts/Pe-icon-7-stroke.ttf')}}">
        <link herf="{{('/fonts/Pe-icon-7-stroke.woff')}}">

    </head>

<body>

<div class="wrapper">
    
    @include('backend.fixed_part.sidebar')

    <div class="main-panel">
        
        @include('backend.fixed_part.hader')
        <div> 
             @for($i=0;$i<50;$i++)
                <p>everything will be here</p>
             @endfor

        
        </div>
        @include('backend.fixed_part.footer')
      
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{url('/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{url('/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{url('/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    
    <script src="{{url('/js/bootstrap-notify.js')}}"></script>-->

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{url('/js/light-bootstrap-dashboard.js')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{url('/js/demo.js')}}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
              
            	//icon: 'pe-7s-gift',
            	//message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
