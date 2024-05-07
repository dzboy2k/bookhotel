 <!-- HEADER -->
 <header class="header-sky">
     <div class="container">
         <!--HEADER-TOP-->
         <div class="header-top">
             <div class="header-top-left">
                 <span><i class="ion-android-cloud-outline"></i>18 °C</span>
                 <span><i class="ion-ios-location-outline"></i> Đan Phượng-Hà Nội</span>
                 <span><i class="fa fa-phone" aria-hidden="true"></i> 0988207698</span>
             </div>
             <div class="header-top-right">
                 <ul>
                     @if (session()->has('ten'))
                         <li class="dropdown"><a href="{{ route('formdangnhapuser') }}" title="LOGIN"
                                 class="dropdown-toggle">{{ session('ten') }}</a></li>
                         <ul>
                             <li class="dropdown"><a href="{{ route('qltk') }}" title="REGISTER"
                                     class="dropdown-toggle">quản lý tài khoản</a></li>
                             <li class="dropdown"><a href="{{ route('dangxuatuser') }}" title="REGISTER"
                                     class="dropdown-toggle">Đăng xuất</a></li>
                         </ul>
                     @else
                         <li class="dropdown"><a href="{{ route('formdangnhapuser') }}" title="LOGIN"
                                 class="dropdown-toggle">Đăng Nhập</a></li>
                         <li class="dropdown"><a href="{{ route('formdangky') }}" title="REGISTER"
                                 class="dropdown-toggle">Đăng Kí</a></li>
                     @endif


                 </ul>
             </div>
         </div>
         <!-- END/HEADER-TOP -->
     </div>
     <!-- MENU-HEADER -->
     <div class="menu-header">
         <nav class="navbar navbar-fixed-top">
             <div class="container">
                 <div class="navbar-header ">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar "></span>
                         <span class="icon-bar "></span>
                         <span class="icon-bar "></span>
                     </button>
                     <a class="navbar-brand" href="{{ route('trangchu') }}" title="Skyline"><img
                             src="landing/html/skyline/demo/images/Home-1/sky-logo-header.png" alt="#"></a>
                 </div>
                 <div class="collapse navbar-collapse">
                     <ul class="nav navbar-nav navbar-right">
                         <li class="dropdown ">
                             <a href="{{ route('trangchu') }}">Trang Chủ</a>

                         </li>
                         <li class="dropdown ">
                             <a href="#" title="Room & Rate" class="dropdown-toggle" data-toggle="dropdown">Phòng
                                 Và Giá<b class="caret"></b></a>
                             <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                {{-- <li><a href="restaurant_1.html">Restaurant 1</a></li> --}}
                                 {{-- @foreach ($listloaiphong as $item)
                                
                                <li><a href="{{ route('room', ['id'=>$item->id]) }}" title="">{{$item->ten}}</a></li>
                                    
                                @endforeach --}}

                             </ul>
                         </li>
                         <li class="dropdown ">
                             <a href="#" title="  Page" class="dropdown-toggle" data-toggle="dropdown">Page<b
                                     class="caret"></b></a>
                             <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                 <li><a href="guestbook.html" title="">Guest Book</a></li>
                                 <li class="submenu-hover1">
                                     <a href="event_page_1.html" class="dropdown-toggle" data-toggle="dropdown">Events
                                         <b class="caret"></b></a>
                                     <ul class="dropdown-menu dropdown-margin">
                                         <li><a href="event_page_1.html">Events </a></li>
                                         <li><a href="event_page_2.html">Events Fullwidth</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="attractions.html" title="">Attractions</a></li>
                                 <li class="submenu-hover1">
                                     <a href="blog.html" class="dropdown-toggle" data-toggle="dropdown">Blog <b
                                             class="caret"></b></a>
                                     <ul class="dropdown-menu dropdown-margin">
                                         <li><a href="blog.html">Blog </a></li>
                                         <li><a href="blog_detail.html">Blog Detail</a></li>
                                     </ul>
                                 </li>
                                 <li class="submenu-hover1">
                                     <a href="restaurant_1.html" class="dropdown-toggle"
                                         data-toggle="dropdown">Restaurant <b class="caret"></b></a>
                                     <ul class="dropdown-menu dropdown-margin">
                                         <li><a href="restaurant_1.html">Restaurant 1</a></li>
                                         <li><a href="restaurant_2.html">Restaurant 2</a></li>
                                         <li><a href="restaurant_3.html">Restaurant 3</a></li>
                                         <li><a href="restaurant_4.html">Restaurant 4</a></li>
                                     </ul>
                                 </li>
                                 <li class="submenu-hover1">
                                     <a href="tems_condition_1.html" class="dropdown-toggle" data-toggle="dropdown">Tems
                                         Condition <b class="caret"></b></a>
                                     <ul class="dropdown-menu dropdown-margin">
                                         <li><a href="tems_condition_1.html">Tems Condition 1</a></li>
                                         <li><a href="tems_condition_2.html">Tems Condition 2</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="404_page.html" title="">404 Page</a></li>
                                 <li><a href="comming_soon.html" title="">Comming Soon</a></li>
                                 <li><a href="check_out.html" title="">Check Out</a></li>
                             </ul>
                         </li>
                         <li class="dropdown ">
                             <a href="reservation_1.html" title="Reservation" class="dropdown-toggle"
                                 data-toggle="dropdown">RESERVATION<b class="caret"></b></a>
                             <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                 <li><a href="reservation_1.html" title="">Reservation 1</a></li>
                                 <li><a href="reservation_2.html" title="">Reservation 2</a></li>
                                 <li><a href="reservation_3.html" title="">Reservation 3</a></li>
                                 <li><a href="reservation_4.html" title="">Reservation 4</a></li>
                                 <li><a href="reservation_5.html" title="">Reservation 5</a></li>
                             </ul>
                         </li>
                         <li class="dropdown ">
                             <a href="gallery_1.html" title="Gallery" class="dropdown-toggle"
                                 data-toggle="dropdown">Gallery <b class="caret"></b></a>
                             <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                 <li><a href="gallery_1.html" title="">Gallery 1</a></li>
                                 <li><a href="gallery_2.html" title="">Gallery 2</a></li>
                                 <li><a href="gallery_3.html" title="">Gallery 3</a></li>
                             </ul>
                         </li>
                         <li><a href="about.html" title="About">About</a></li>
                         <li><a href="contact.html" title="Contact">Contact</a></li>
                     </ul>
                 </div>
             </div>
         </nav>
     </div>
     <!-- END / MENU-HEADER -->
 </header>
 <!-- END-HEADER -->
