
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'X-Closses') }}</title>
            <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
         <!-- Scripts -->
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="{{asset('/images/icons/favicon.png')}}"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{asset('/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet"  href="{{ asset('/vendor/slick/slick.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet"  href="{{ asset('/vendor/MagnificPopup/magnific-popup.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet"  href="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!--===============================================================================================-->
        <link  href="{{ asset('/css/util.css') }} " rel="stylesheet" >
        <link  href="{{ asset('/css/main.css') }} " rel="stylesheet" >
        
       
        
        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
     @include('inc.mangernavbar')
          <main class="py-4">
            @yield('content')
        </main>
        @include('inc.footer')
        
<!--===============================================================================================-->	
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="/vendor/bootstrap/js/popper.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="/vendor/select2/select2.min.js"></script>
        <script>
            $(".js-select2").each(function(){
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            })
        </script>
    <!--===============================================================================================-->
        <script src="/vendor/daterangepicker/moment.min.js"></script>
        <script src="/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="/vendor/slick/slick.min.js"></script>
        <script src="/js/slick-custom.js"></script>
    <!--===============================================================================================-->
        <script src="/vendor/parallax100/parallax100.js"></script>
        <script>
            $('.parallax100').parallax100();
        </script>
    <!--===============================================================================================-->
        <script src="/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
        <script>
            $('.gallery-lb').each(function() { // the containers for all your galleries
                $(this).magnificPopup({
                    delegate: 'a', // the selector for gallery item
                    type: 'image',
                    gallery: {
                        enabled:true
                    },
                    mainClass: 'mfp-fade'
                });
            });
        </script>
    <!--===============================================================================================-->
        <script src="/vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
        <script src="/vendor/sweetalert/sweetalert.min.js"></script>
        <script>
            $('.js-addwish-b2').on('click', function(e){
                e.preventDefault();
            });
    
            $('.js-addwish-b2').each(function(){
                var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");
    
                    $(this).addClass('js-addedwish-b2');
                    $(this).off('click');
                });
            });
    
            $('.js-addwish-detail').each(function(){
                var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();
    
                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");
    
                    $(this).addClass('js-addedwish-detail');
                    $(this).off('click');
                });
            });
    
            /*---------------------------------------------*/
    
            $('.js-addcart-detail').each(function(){
                var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to cart !", "success");
                });
            });
        
        </script>
    <!--===============================================================================================-->
        <script src="/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script>
            $('.js-pscroll').each(function(){
                $(this).css('position','relative');
                $(this).css('overflow','hidden');
                var ps = new PerfectScrollbar(this, {
                    wheelSpeed: 1,
                    scrollingThreshold: 1000,
                    wheelPropagation: false,
                });
    
                $(window).on('resize', function(){
                    ps.update();
                })
            });
        </script>
    <!--===============================================================================================-->
        <script src="/js/main.js"></script>
    
    </div>
</body>
</html>
