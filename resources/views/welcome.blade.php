<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <!-- Mobile Metas -->
        <meta name="viewport" http-equiv="X-UA-Compatible" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

         <!-- Site Metas -->
        <title>攟麡診所</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Pogo Slider CSS -->
        <link rel="stylesheet" href="{{asset('css/pogo-slider.min.css')}}">
        <!-- Site CSS -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body id="home" class="antialiased" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

        <!-- LOADER -->
         <!-- <div id="preloader">
            <div class="loader">
                <img src="images/preloader.gif" alt="" />
            </div>
        </div>end loader -->
        <!-- END LOADER -->

        <!-- Start top bar -->
        <div class="main-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-top">
                            <a class="new-btn-d br-2" href="#"><span>預約</span></a>
                            <div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Lara@ncut.edu.tw</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wel-nots">
                            <p>歡迎來到攟麡診所！</p>
                        </div>
                        <div class="right-top">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End top bar -->

        <!-- Start header -->
        <header class="top-header">
            <nav class="navbar header-nav navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" alt="image"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                        <ul class="navbar-nav">
                            <li><a class="nav-link active" href="#home">首頁</a></li>
                            <li><a class="nav-link" href="#about">關於我們</a></li>
                            <li><a class="nav-link" href="#services">Services</a></li>
                            <li><a class="nav-link" href="#appointment">預約掛號注意事項</a></li>
                            <li><a class="nav-link" href="#gallery">Gallery</a></li>
                            <li><a class="nav-link" href="#team">醫師介紹</a></li>
                            <li><a class="nav-link" href="#blog">公告</a></li>
                            <li><a class="nav-link" href="#contact">Contact</a></li>
                                @if (Route::has('login'))
                                    @auth
                                        @if (auth()->user()->status=="0")
                                            <li><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                                        @elseif (auth()->user()->status=="1")
                                            <li><a class="nav-link" href="{{ url('/doctors/edit') }}">醫師</a></li>
                                        @elseif (auth()->user()->status=="3")
                                            <li><a class="nav-link" href="{{ url('/admin/index') }}">管理員</a></li>
                                        @endif
                                    @else
                                        <li><a class="nav-link" href="{{ route('login') }}">登入</a></li>
                                        @if (Route::has('register'))
                                        <li><a class="nav-link" href="{{ route('register') }}">註冊</a></li>
                                        @endif
                                    @endauth
                                @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End header -->

        <!-- Start Banner -->
        <div class="ulockd-home-slider">
            <div class="container-fluid">
                <div class="row">
                    <div class="pogoSlider" id="js-main-slider">
                        <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
                            <div class="lbox-caption pogoSlider-slide-element">
                                <div class="lbox-details">
                                    <h1>歡迎來到攟麡診所</h1>
                                    <p>2019年12月以來，湖北省武漢市展開呼吸道疾病及相關疾病監測，發現不明原因病毒性肺炎病例。個案臨床表現主要為發熱，少數病人呼吸困難，胸部X光片呈雙肺浸潤性病灶。</p>
                                    <a href="#" class="btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
                            <div class="lbox-caption pogoSlider-slide-element">
                                <div class="lbox-details">
                                    <h1>我們有專業酒鬼醫師幫您看診</h1>
                                    <p><font size="120">酒當水在喝 By 吳辰恩</font></p>
                                    <a href="#appointment" class="btn">預約掛號</a>
                                </div>
                            </div>
                        </div>
                        <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
                            <div class="lbox-caption pogoSlider-slide-element">
                                <div class="lbox-details">
                                    <h1>歡迎來到沐恩的家</h1>
                                    <p><font size="60">我最喜歡吃火鍋和洋蔥了♡♡♡</font>　　<font size="120">By 沐恩㍿</font></p>
                                    <a href="#" class="btn">Contact Us</a>
                                </div>
                            </div>

                        </div>
                    </div><!-- .pogoSlider -->
                </div>
            </div>
        </div>
        <!-- End Banner -->

        <!-- Start About us -->
        <div id="about" class="about-box">
            <div class="about-a1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-box">
                                <h2>關於我們</h2>
                                <p>腦力激盪，只會腦震盪而已</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row align-items-center about-main-info">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h2>  </h2>
                                    <p>在學校餐廳打工時，同學來點餐，牛肉麵的牛肉給的比麵多</p>
                                    <p>肉羹飯的肉羹給的比飯多</p>
                                    <a href="#" class="new-btn-d br-2">Read More</a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="about-m">
                                        <ul id="banner">
                                            <li>
                                                <img src="{{asset('images/about-img-1.jpg')}}" alt="">
                                            </li>
                                            <li>
                                                <img src="{{asset('images/about-img-2.jpg')}}" alt="">
                                            </li>
                                            <li>
                                                <img src="{{asset('images/about-img-3.jpg')}}" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About us -->

        <!-- Start Services -->
        <div id="services" class="services-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2>Services</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="serviceBox">
                                    <div class="service-icon"><i class="fa fa-h-square" aria-hidden="true"></i></div>
                                    <h3 class="title">Lorem ipsum dolor</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                    </p>
                                    <a href="#" class="new-btn-d br-2">Read More</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="serviceBox">
                                    <div class="service-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                                    <h3 class="title">Lorem ipsum dolor</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                    </p>
                                    <a href="#" class="new-btn-d br-2">Read More</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="serviceBox">
                                    <div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
                                    <h3 class="title">Lorem ipsum dolor</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                    </p>
                                    <a href="#" class="new-btn-d br-2">Read More</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="serviceBox">
                                    <div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
                                    <h3 class="title">Lorem ipsum dolor</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                    </p>
                                    <a href="#" class="new-btn-d br-2">Read More</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="serviceBox">
                                    <div class="service-icon"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
                                    <h3 class="title">Lorem ipsum dolor</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                    </p>
                                    <a href="#" class="new-btn-d br-2">Read More</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="serviceBox">
                                    <div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
                                    <h3 class="title">Lorem ipsum dolor</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                    </p>
                                    <a href="#" class="new-btn-d br-2">Read More</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="serviceBox">
                                    <div class="service-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                                    <h3 class="title">Lorem ipsum dolor</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                    </p>
                                    <a href="#" class="new-btn-d br-2">Read More</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="serviceBox">
                                    <div class="service-icon"><i class="fa fa-user-md" aria-hidden="true"></i></div>
                                    <h3 class="title">Lorem ipsum dolor</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                    </p>
                                    <a href="#" class="new-btn-d br-2">Read More</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="serviceBox">
                                    <div class="service-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
                                    <h3 class="title">Lorem ipsum dolor</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                    </p>
                                    <a href="#" class="new-btn-d br-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services -->

        <!-- Start Appointment -->
        <div id="appointment" class="appointment-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2>Appointment</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="well-block">
                            <div class="well-title">
                                <h2>Book an Appointment</h2>
                            </div>
                            <form>
                                <!-- Form start -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Name</label>
                                            <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="email">Email</label>
                                            <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="date">Preferred Date</label>
                                            <input id="date" name="date" type="text" placeholder="Preferred Date" class="form-control input-md">
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="time">Preferred Time</label>
                                            <select id="time" name="time" class="form-control">
                                                <option value="8:00 to 9:00">8:00 to 9:00</option>
                                                <option value="9:00 to 10:00">9:00 to 10:00</option>
                                                <option value="10:00 to 1:00">10:00 to 1:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="appointmentfor">Department</label>
                                            <select id="appointmentfor" name="appointmentfor" class="form-control">
                                                <option value="Choose Department">Choose Department</option>
                                                <option value="Gynacology">Gynacology</option>
                                                <option value="Dermatologist">Dermatologist</option>
                                                <option value="Orthology">Orthology</option>
                                                <option value="Anesthesiology">Anesthesiology</option>
                                                <option value="Ayurvedic">Ayurvedic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button id="singlebutton" name="singlebutton" class="new-btn-d br-2">Make An Appointment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- form end -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="well-block">
                            <div class="well-title">
                                <h2>Why Appointment with Us</h2>
                            </div>
                            <div class="feature-block">
                                <div class="feature feature-blurb-text">
                                    <h4 class="feature-title">24/7 Hours Available</h4>
                                    <div class="feature-content">
                                        <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                                    </div>
                                </div>
                                <div class="feature feature-blurb-text">
                                    <h4 class="feature-title">Experienced Staff Available</h4>
                                    <div class="feature-content">
                                        <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                                    </div>
                                </div>
                                <div class="feature feature-blurb-text">
                                    <h4 class="feature-title">Low Price & Fees</h4>
                                    <div class="feature-content">
                                        <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Appointment -->

        <!-- Start Gallery -->
        <div id="gallery" class="gallery-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2>Gallery</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>

                <div class="popup-gallery row clearfix">
                    <div class="col-md-3 col-sm-6">
                        <div class="box-gallery">
                            <img src="{{asset('images/gallery-01.jpg')}}" alt="">
                            <div class="box-content">
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <ul class="icon">
                                    <li><a href="{{asset('images/gallery-01.jpg')}}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box-gallery">
                            <img src="{{asset('images/gallery-02.jpg')}}" alt="">
                            <div class="box-content">
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <ul class="icon">
                                    <li><a href="{{asset('images/gallery-02.jpg')}}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box-gallery">
                            <img src="{{asset('images/gallery-03.jpg')}}" alt="">
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="{{asset('images/gallery-03.jpg')}}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box-gallery">
                            <img src="{{asset('images/gallery-04.jpg')}}" alt="">
                            <div class="box-content">
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <ul class="icon">
                                    <li><a href="{{asset('images/gallery-04.jpg')}}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box-gallery">
                            <img src="{{asset('images/gallery-05.jpg')}}" alt="">
                            <div class="box-content">
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <ul class="icon">
                                    <li><a href="{{asset('images/gallery-05.jpg')}}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box-gallery">
                            <img src="{{asset('images/gallery-06.jpg')}}" alt="">
                            <div class="box-content">
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <ul class="icon">
                                    <li><a href="{{asset('images/gallery-06.jpg')}}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box-gallery">
                            <img src="{{asset('images/gallery-07.jpg')}}" alt="">
                            <div class="box-content">
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <ul class="icon">
                                    <li><a href="{{asset('images/gallery-07.jpg')}}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box-gallery">
                            <img src="{{asset('images/gallery-08.jpg')}}" alt="">
                            <div class="box-content">
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <ul class="icon">
                                    <li><a href="{{asset('images/gallery-08.jpg')}}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Gallery -->

        <!-- Start Team -->
        <div id="team" class="team-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2>醫師介紹</h2>
                            <p>我的貓會喝酒，因為是我逼他喝的</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                <img src="{{asset('images/img-01.jpg')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h3 class="title"><font size="8">駿雞同學</font></h3>
                                <span class="post"><font size="5">咕咕咕</font></span>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="our-team">
                            <div class="player">
                                <video id="movie" autoplay preload="auto" controls loop poster="{{asset('images/img-2.jpg')}}" width="320" height="383">
                                    <source src="{{asset('images/img-04.mp4')}}" type="video/mp4" />
                                </video>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><font color="fuchsia" size="7">Wu</font></h3><br>
                                <span class="post"><font color="fuchsia" size="9"><b>喝酒達人</b></font></span>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                <img src="{{asset('images/img-03.jpg')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h3 class="title"><font size="8">沐恩</font></h3>
                                <span class="post"><font size="5">火鍋達人<p>（好想吃洋蔥）</p></font></span>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- End Team -->

        <!-- Start Blog -->
        <div id="blog" class="blog-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2>公告</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-inner">
                            <div class="blog-img">
                                <img class="img-fluid" src="{{asset('images/blog-img-01.jpg')}}" alt="" />
                            </div>
                            <div class="item-meta">
                                <a href="#"><i class="fa fa-comments-o"></i> 5 Comment </a>
                                <a href="#"><i class="fa fa-user-o"></i> Admin</a>
                                <span class="dti">25 July 2018</span>
                            </div>
                            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                            <a class="new-btn-d br-2" href="#">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-inner">
                            <div class="blog-img">
                                <img class="img-fluid" src="{{asset('images/blog-img-02.jpg')}}" alt="" />
                            </div>
                            <div class="item-meta">
                                <a href="#"><i class="fa fa-comments-o"></i> 5 Comment </a>
                                <a href="#"><i class="fa fa-user-o"></i> Admin</a>
                                <span class="dti">25 July 2018</span>
                            </div>
                            <h2>Proin vel sem ut lorem rhoncus lacinia. </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                            <a class="new-btn-d br-2" href="#">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-inner">
                            <div class="blog-img">
                                <img class="img-fluid" src="{{asset('images/blog-img-03.jpg')}}" alt="" />
                            </div>
                            <div class="item-meta">
                                <a href="#"><i class="fa fa-comments-o"></i> 5 Comment </a>
                                <a href="#"><i class="fa fa-user-o"></i> Admin</a>
                                <span class="dti">25 July 2018</span>
                            </div>
                            <h2>Aliquam egestas magna a malesuada rutrum. </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                            <a class="new-btn-d br-2" href="#">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog -->

        <!-- Start Contact -->
        <div id="contact" class="contact-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2>Contact us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12 col-xs-12">
                      <div class="contact-block">
                        <form id="contactForm">
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>


                    <div class="col-lg-12 col-xs-12">
                        <div class="left-contact">
                            <h2>Address</h2>
                            <div class="media cont-line">
                                <div class="media-left icon-b">
                                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                </div>
                                <div class="media-body dit-right">
                                    <h4>Address</h4>
                                    <p>Fleming 196 Woodside Circle Mobile, FL 36602</p>
                                </div>
                            </div>
                            <div class="media cont-line">
                                <div class="media-left icon-b">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="media-body dit-right">
                                    <h4>Email</h4>
                                    <a href="#">demoinfo@gmail.com</a><br>
                                    <a href="#">demoinfo@gmail.com</a>
                                </div>
                            </div>
                            <div class="media cont-line">
                                <div class="media-left icon-b">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <div class="media-body dit-right">
                                    <h4>Phone Number</h4>
                                    <a href="#">12345 67890</a><br>
                                    <a href="#">12345 67890</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- End Contact -->

        <!-- Start Subscribe -->
        <div class="subscribe-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="subscribe-inner text-center clearfix">
                            <h2>Subscribe</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input class="form-control-1" id="email-1" name="email" placeholder="Email Address" required="" type="text">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="new-btn-d br-2">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe -->

        <!-- Start Footer -->
        <footer class="footer-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="footer-company-name">All Rights Reserved. &copy; 2020 Laravel final05 Design By : <a href="https://www.instagram.com/wu19101599/" target="_blank">快樂嗎😊</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

        <!-- ALL JS FILES -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- ALL PLUGINS -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/jquery.pogo-slider.min.js')}}"></script>
        <script src="{{asset('js/slider-index.js')}}"></script>
        <script src="{{asset('js/smoothscroll.js')}}"></script>
        <script src="{{asset('js/TweenMax.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/form-validator.min.js')}}"></script>
        <script src="{{asset('js/contact-form-script.js')}}"></script>
        <script src="{{asset('js/isotope.min.js')}}"></script>
        <script src="{{asset('js/images-loded.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>
