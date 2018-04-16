<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{asset('assets1/images/nh-wrench-850x850.jpg')}}" type="image/x-icon">  
  <link rel="stylesheet" href="{{asset('assets1/web/assets/mobirise-icons/mobirise-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/soundcloud-plugin/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/bootstrap/css/bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/bootstrap/css/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/socicon/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/dropdown/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/theme/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/mobirise/css/mbr-additional.css')}}" type="text/css">
  
  <title>Trang Chủ</title>
  
</head>
<body>
	<section class="menu cid-qKWpJYyJsw" once="menu" id="menu1-2">   

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                         <img src="{{asset('assets1/images/nh-wrench-850x850.jpg')}}" alt="Mobirise" title="back to home page" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://mobirise.com">WRENCH</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item dropdown">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">Nhận báo giá<br></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link text-white display-4" href="page1.html">Dịch vụ</a>
                </li>
                      <li class="nav-item"><a class="nav-link link text-white display-4" href="{{ url('trogiup')}}">Trợ giúp</a>
                      </li>
                      <li class="nav-item"><a class="nav-link link text-white display-4" href="https://mobirise.com">Tuyển thợ</a></li>
                       @guest
                            <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="{{ url('login')}}">Đăng nhập</a>
                          </li>
                      @else
                           <li class="nav-item">
                          <a class="nav-link link text-white display-4" href="">Quản lý nhân viên</a>
                        </li>

                          <li class="nav-item">
                          <a class="nav-link link text-white display-4" href="{{ url('login')}}">{{Auth::user()->name}}</a>
                        </li>

                          <li class="nav-item">                           
                          <a class="nav-link link text-white display-4" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Đăng xuất
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                          
                      @endguest

                      </ul>
            
        </div>
    </nav>
</section>
	@yield('content');
  <div class="store-badges text-center margin-bottom-small"> <span class="heading-8" style="color:#333; vertical-align:middle">Download Our App</span> <a href="https://play.google.com/store/apps/details?id=com.wrench.user&amp;utm_source=global_co&amp;utm_medium=prtnr&amp;utm_content=Mar2515&amp;utm_campaign=PartBadge&amp;pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"> <img alt="Get it on Google Play" src="/images/googleplay.png"> </a> <a href="https://itunes.apple.com/us/app/wrench-inc./id1138373180?mt=8"> <img alt="Download on the App Store" src="/images/appstore.png"> </a> </div>

<section class="cid-qMgYE65iPa" id="footer1-10">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.com/">
                        <img src="{{asset('assets1/images/nh-wrench-850x850.jpg')}}" alt="Mobirise title="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">Địa chỉ</h5>
                <p class="mbr-text">Số 13 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội<br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Liên hệ</h5>
                <p class="mbr-text">
                    Email: gtl1@gmail.com &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>Phone: +1 (0) 1678847294 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text">FAQ<br>About
                    <br>Contact<br>Press<br><br></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © getwrench</p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <script src="{{asset('assets1/web/assets/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets1/popper/popper.min.js')}}"></script>
  <script src="{{asset('assets1/tether/tether.min.js')}}"></script>
  <script src="{{asset('assets1/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets1/smoothscroll/smooth-scroll.js')}}"></script>
  <script src="{{asset('assets1/dropdown/js/script.min.js')}}"></script>
  <script src="{{asset('assets1/touchswipe/jquery.touch-swipe.min.js')}}"></script>
  <script src="{{asset('assets1/bootstrapcarouselswipe/bootstrap-carousel-swipe.js')}}"></script>
  <script src="{{asset('assets1/mbr-clients-slider/mbr-clients-slider.js')}}"></script>
  <script src="{{asset('assets1/parallax/jarallax.min.js')}}"></script>
  <script src="{{asset('assets1/parallax/jarallax.min.js')}}"></script>
  <script src="https://uhchat.net/code.php?f=c123fe"></script>
</body>
</html>