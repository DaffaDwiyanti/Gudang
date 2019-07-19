<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>S I I P</title>
 
    <link rel="stylesheet" href="style.css" media="screen" />
   

    <link href='http://fonts.googleapis.com/css?family=Righteous&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>

     <script src="scripts/modernizr.js"></script>

</head>

<body>


    
    <a href="#cd-nav" class="cd-nav-trigger">Menu 
        <span class="cd-nav-icon"></span>

        <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
            <circle fill="transparent" stroke="#90D4C5" stroke-width="2" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
        </svg>
    </a>
        
    <div id="cd-nav" class="cd-nav">
        <div class="cd-navigation-wrapper">
            <div class="cd-half-block">


                <nav>
                    <ul class="cd-primary-nav">
                    @if (Route::has('login'))
                            @auth

                            <li><a href="{{ url('/home') }}" class="selected">Home</a></li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                    @endif
                    </ul>
                </nav>
            </div><!-- .cd-half-block -->
            
            
        </div> <!-- .cd-navigation-wrapper -->
    </div> <!-- .cd-nav -->

    <div class="site-container">

        <header class="site-header cf">
            <div class="site-title"><a href="index.html">S I I P</a></div>

            <div class="cf"></div>

            <div class="site-tagline">
                <p>H A I! Selamat Datang di <strong>Sistem Informasi Inventory dan Penjualan.</strong> <a  target="_blank">Have a Good Day ! </a></p>
            </div>
            
        </header><!-- / .site-header -->

          
        <!--END .site-content-->
        </section>

         <footer class="site-footer cf">
            <p class="footer-text">© Copyright 2019 </p>
            <nav class="languages" role="navigation">
              <ul>
             
              </ul>
            </nav> 
        </footer>
    <!--END .site-container-->
    </div>

    <script src="scripts/jquery-2.1.4.min.js"></script>
    <script src="scripts/jquery.fitvids.js"></script>
    <script src="scripts/jquery.imagesloaded.min.js"></script>
    <script src="scripts/main.js"></script>  
 

</body>
</html>