<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard</title>


    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/swiper.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/select2.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/css/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/colors/default.css') }}" id="colorSkinCSS">
</head>

<body class="crm_body_bg">



    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="img/logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">

                    <img src="img/menu-icon/1.svg" alt="">
                    <span>Dashboard</span>
                </a>
                <ul>
                    <li><a href="{{ route('user.index') }}">User Management</a></li>

                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/2.svg" alt="">
                    <span>Pages</span>
                </a>
                <ul>

                </ul>
            </li>




        </ul>
    </nav>


    <section class="main_content dashboard_part">

        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <i class="fas fa-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="https://avatars.dicebear.com/api/adventurer/{{ Auth::user()->name }}.svg"
                                    alt="" style="width:80px;">
                                <div class="profile_info_iner">
                                    <p>Welcome Admin!</p>
                                    <h5>{{ Auth::user()->name }}</h5>
                                    <div class="profile_info_details">

                                        <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}<i class="ti-shift-left"></i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        @yield('content')


        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a
                                    href="#"> Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="{{ asset('backend/js/jquery-3.4.1.min.js') }}"></script>

    <script src="{{ asset('backend/js/popper.min.js') }}"></script>

    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('backend/js/metisMenu.js') }}"></script>

    <script src="{{ asset('backend/js/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('backend/js/Chart.min.js') }}"></script>

    <script src="{{ asset('backend/js/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('backend/js/swiper.min.js') }}"></script>

    <script src="{{ asset('backend/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('backend/js/gijgo.min.js') }}"></script>

    <script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/js/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/js/chart.min.js') }}"></script>

    <script src="{{ asset('backend/js/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('backend/js/tagsinput.js') }}"></script>

    <script src="{{ asset('backend/js/summernote-bs4.js') }}"></script>
    <script src="{{ asset('backend/js/apexcharts.js') }}"></script>

    <script src="{{ asset('backend/js/custom.js') }}"></script>

    <script src="{{ asset('backend/js/active_chart.js') }}"></script>
    <script src="{{ asset('backend/js/radial_active.js') }}"></script>
    <script src="{{ asset('backend/js/stackbar.js') }}"></script>
    <script src="{{ asset('backend/js/area_chart.js') }}"></script>

    <script src="{{ asset('backend/js/bar_active_1.js') }}"></script>
    <script src="{{ asset('backend/js/chartjs_active.js') }}"></script>

</body>

</html>
