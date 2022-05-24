
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Resume | @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('css/aos.css?ver=1.1.0')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css?ver=1.1.0')}}" rel="stylesheet">
    <link href="{{asset('css/main.css?ver=1.1.0')}}" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    @include('layout.nav')
    @yield('content')


    <div>
    <div class="footer">
      
      <div class="h4 title text-center">Muhamad Rizki Aditya</div><br>
      <p class="text-center"><strong>Copyright &copy;  2022.</strong> All rights
reserved.</p>
      
    </div>
  </div>
    <script src="{{asset('js/core/jquery.3.2.1.min.js?ver=1.1.0')}}"></script>
    <script src="{{asset('js/core/popper.min.js?ver=1.1.0')}}"></script>
    <script src="{{asset('js/core/bootstrap.min.js?ver=1.1.0')}}"></script>
    <script src="{{asset('js/now-ui-kit.js?ver=1.1.0')}}"></script>
    <script src="{{asset('js/aos.js?ver=1.1.0')}}"></script>
    <script src="{{asset('scripts/main.js?ver=1.1.0')}}"></script>
  </body>
</html>
