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
                    <a onclick="window.location='{{route('trangchu')}}'">
                         <img src="{{asset('assets/images/nh-wrench-850x850.jpg')}}" alt="Mobirise" title="back to home page" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" onclick="window.location='{{route('trangchu')}}'">WRENCH</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-white display-4" onclick="window.location='{{route('NhanVien')}}'">Nhân Viên</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" onclick="window.location='{{route('DichVu')}}'">Dịch Vụ</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" onclick="window.location='{{route('getFormTuyenTho')}}'">Tuyển Thợ</a></li>                
                <li class="nav-item"><a class="nav-link link text-white display-4" onclick="window.location='{{route('ChinhSachBaoMat')}}'">Bảo Mật</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" onclick="window.location='{{route('DieuKhoanDichVu')}}'">Điều Khoản</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" onclick="window.location='{{route('TroGiup')}}'">Trợ Giúp</a></li>
                 @guest
                            <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="{{ url('login')}}">Đăng nhập</a>
                          </li>
                      @else                        
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


