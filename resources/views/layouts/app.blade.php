<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!!  Html::style("website/css/bootstrap.min.css") !!}
    {!!  Html::style("website/css/flexslider.css") !!}
    {!!  Html::style("website/css/style.css") !!}
    {!!  Html::style("website/css/font-awesome.min.css") !!}

    {!!  Html::script("website/js/jquery.min.js") !!}

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

    <title>
        سكريبت موقع عقارات
        |

        @yield('title')

    </title>

    @yield('header')

</head>
<body style="direction:rtl">


        <div class="header">
            <div class="container"> <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-paper-plane"></i> ONE</a>
               <div class="menu pull-left"> <a class="toggleMenu" href="#"><img src="website/images/nav_icon.png" alt="" /> </a>
                 <ul class="nav" id="nav">
                   <li><a href="{{ url('/home') }}">الرئيسية</a></li>
                   <li><a href="{{ url('/allitems') }}">كل العقارات</a></li>
                  
                   @if( Auth::user() )
                   <li><a href="{{ url('/user/showItem') }}">عقاراتى</a></li>
                   @endif
                   <li><a href="{{  url('/contact') }}">اتصل بنا</a></li>
                   @guest
                       <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                       <li><a href="{{ route('register') }}">عضوية جديدة</a></li>
                   @else
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                               {{ Auth::user()->name }} <span class="caret"></span>
                           </a>

                           <ul class="dropdown-menu">
                               <li>
                                   <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                       تسجيل الخروج
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       {{ csrf_field() }}
                                   </form>
                               </li>
                           </ul>
                       </li>
                   @endguest
                   <div class="clear"></div>
                 </ul>

               </div>
            </div>
         </div>


        @yield('content')

        <div class="footer">
          <div class="footer_bottom">
            <div class="follow-us">
                <a class="fa fa-facebook social-icon" href="https://www.facebook.com/annos.salama" target="_blank"></a>
                <a class="fa fa-github social-icon" href="https://github.com/anasfathysalama" target="_blank"></a>
                <a class="fa fa-linkedin social-icon" href="https://www.linkedin.com/in/anas-salama-234472187/" target="_blank"></a>

            </div>
          <div class="copy">
            <p>Copyright &copy; 2019 Anas Fathy Salama</p>
          </div>
         </div>
        </div>


     {!!  Html::script("website/js/responsive-nav.js") !!}
     {!!  Html::script("website/js/bootstrap.min.js") !!}
     {!!  Html::script("website/js/jquery.flexslider.js") !!}



      @yield('footer')

</body>
</html>
