<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700|Istok+Web:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('assets/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('assets/css/ion.rangeslider.css')}}" type="text/css" />

	<!-- Landing Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/landing.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/fonts.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}" type="text/css" />
	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Hosting Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/colors.php?color=44aaac')}}" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="{{ asset('assets/css/hosting/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/hosting/hosting.css')}}" type="text/css" />
	<!-- / -->


    <title>Hosting</title>

</head>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

        @section('header')
        @include('layouts.header')
            @show

            @yield('content')

        @section('footer')
            @include('layouts.footer')
        @show
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>

    <script src="{{ asset('assets/js/jquery.js')}}"></script>
	<script src="{{ asset('assets/js/plugins.min.js')}}"></script>

	<script src="{{ asset('assets/js/jquery.hotspot.js')}}"></script>
	<script src="{{ asset('assets/js/rangeslider.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('assets/js/functions.js')}}"></script>

	<script>
		jQuery(document).ready( function() {
			var pricingCPU = 1,
				pricingRAM = 1,
				pricingStorage = 10,
				elementCPU = $(".range-slider-cpu"),
				elementRAM = $(".range-slider-ram"),
				elementStorage = $(".range-slider-storage");

			elementCPU.ionRangeSlider({
				grid: false,
				values: [1,2,4,6,8],
				postfix: ' Core',
				onStart: function(data){
					pricingCPU = data.from_value;
				}
			});

			elementCPU.on( 'change', function(){
				pricingCPU = $(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			elementRAM.ionRangeSlider({
				grid: false,
				step: 1,
				min: 1,
				from:1,
				max: 32,
				postfix: ' GB',
				onStart: function(data){
					pricingRAM = data.from;
					console.log(data);
				}
			});

			elementRAM.on( 'onStart change', function(){
				pricingRAM = $(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			elementStorage.ionRangeSlider({
				grid: false,
				step: 10,
				min: 10,
				max: 100,
				postfix: ' GB',
				onStart: function(data){
					pricingStorage = data.from;
				}
			});

			elementStorage.on( 'change', function(){
				pricingStorage = $(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			calculatePrice( pricingCPU, pricingRAM, pricingStorage );

			function calculatePrice( cpu, ram, storage ) {
				var pricingValue = ( Number(cpu) * 10 ) + ( Number(ram) * 8 ) + ( Number(storage) * 0.5 );
				jQuery('.cpu-value').html(pricingCPU);
				jQuery('.ram-value').html(pricingRAM);
				jQuery('.storage-value').html(pricingStorage);
				jQuery('.cpu-price').html('$'+pricingCPU * 10);
				jQuery('.ram-price').html('$'+pricingRAM * 8);
				jQuery('.storage-price').html('$'+pricingStorage * 0.5);
				jQuery('.pricing-price').html( '$'+pricingValue );
			}
		});

		jQuery(window).on( 'load', function(){
			$('#hotspot-img').hotSpot();
		});
	</script>
</body>
</html>
