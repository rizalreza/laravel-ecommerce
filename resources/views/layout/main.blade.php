<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title','Ecommerce')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

        <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/style.css')}}"/>

        <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    </head>
    <body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('home')}}"><strong>Portfolio</strong> Webs</a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('items')}}">Products</a></li>
        <li><a href="">Contact</a></li>
         <li><a href="{{route('cart.index')}}" class="fa fa-cart-plus" style="font-size:20px;"> &nbsp; {{Cart::count()}}

            </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.index')}}">Login</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
<!-- Akhir  navbar -->
@yield('content')
    </body>

    <footer class="footer">
      <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
          <i class="fi-laptop"></i>
          <p>Coded with love by Webdevmatics for educational purpose only</p>
        </div>
        <div class="small-12 medium-4 large-4 columns">
          <i class="fi-html5"></i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
        </div>
        
        <div class="small-6 medium-4 large-4 columns">
          <h4>Follow Us</h4>
          <ul class="footer-links">
            <li><a href="https://github.com/rizalreza/">GitHub</a></li>
            <li><a href="https://www.facebook.com/rizalrezamaulana">Facebook</a></li>
            <li><a href="https://twitter.com/rizalrezaa">Twitter</a></li>
          <ul>
        </div>
      </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('dist/js/app.js')}}"></script>

    </footer>
</html>
  