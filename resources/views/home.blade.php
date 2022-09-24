<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/template/favicon.ico') }}  ">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
		<!-- Template CSS -->
            <link rel="stylesheet" href="{{ asset('assets/css/template/bootstrap.min.css') }} ">
            <link rel="stylesheet" href="{{ asset('assets/css/template/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/template/slicknav.css')  }}">
            <link rel="stylesheet" href="{{ asset('assets/css/template/flaticon.css')  }}">
            <link rel="stylesheet" href="{{ asset('assets/css/template/animate.min.css')  }}">
            <link rel="stylesheet" href="{{ asset('assets/css/template/magnific-popup.css')  }}">
            <link rel="stylesheet" href="{{ asset('assets/css/template/fontawesome-all.min.css')  }}">
            <link rel="stylesheet" href="{{ asset('assets/css/template/themify-icons.css')  }}">
            <link rel="stylesheet" href="{{ asset('assets/css/template/slick.css')  }}">
            <link rel="stylesheet" href="{{ asset('assets/css/template/nice-select.css')  }}">
            <link rel="stylesheet" href="{{ asset('assets/css/template/style.css')  }}">
    </head>
    <body class="antialiased">
        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src=" {{ asset('assets/img/template/logo/logo.png') }} " alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
        <header>
            <!-- Header Start -->
            <div class="header-area header-transparent">
                    <div class="main-header  header-sticky">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-2 col-lg-2 col-md-1">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{ asset('assets/img/template/logo/logo.png') }} " alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10">
                                <div class="menu-main d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="active"><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="blog.html">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog_details.html">Blog Details</a></li>
                                                        <li><a href="elements.html">Element</a></li>
                                                        <li><a href="apply.html">Apply Now</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-right-btn f-right d-none d-lg-block">
                                        <a href="#" class="btn header-btn">+880.762.009.00 </a>
                                    </div>
                                </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Header End -->
        </header>
        <main>

            <!-- slider Area Start-->
            <div class="slider-area slider-height" data-background="{{ asset('assets/img/template/hero/h1_hero.jpg') }}">
                <div class="slider-active">
                    <!-- Single Slider -->
                    <div class="single-slider">
                        <div class="slider-cap-wrapper">
                            <div class="hero__caption">
                                <p data-animation="fadeInLeft" data-delay=".2s">Achieve your financial goal</p>
                                <h1 data-animation="fadeInLeft" data-delay=".5s">Small Business Loans For Daily Expenses.</h1>
                                <!-- Hero Btn -->
                                <a href="apply.html" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Apply for Loan</a>
                            </div>
                            <div class="hero__img">
                                <img src="{{ asset('assets/img/template/hero/hero_img.jpg') }} " alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Single Slider -->
                    <div class="single-slider">
                        <div class="slider-cap-wrapper">
                            <div class="hero__caption">
                                <p data-animation="fadeInLeft" data-delay=".2s">Achieve your financial goal</p>
                                <h1 data-animation="fadeInLeft" data-delay=".5s">Small Business Loans For Daily Expenses.</h1>
                                <!-- Hero Btn -->
                                <a href="apply.html" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Apply for Loan</a>
                            </div>
                            <div class="hero__img">
                                <img src="{{ asset('assets/img/template/hero/hero_img2.jpg') }}  " alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider-footer Start -->
                <div class="slider-footer section-bg d-none d-sm-block">
                    <div class="footer-wrapper">
                        <!-- single -->
                        <div class="single-caption">
                            <div class="single-img">
                                <img src=" {{ asset('assets/img/template/hero/hero_footer.png') }} " alt="">
                            </div>
                        </div>
                        <!-- single -->
                        <div class="single-caption">
                            <div class="caption-icon">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="caption">
                                <p>Quick & Easy Loan</p>
                                <p>Approvals</p>
                            </div>
                        </div>
                        <!-- single -->
                        <div class="single-caption">
                            <div class="caption-icon">
                                <span class="flaticon-like"></span>
                            </div>
                            <div class="caption">
                                <p>Quick & Easy Loan</p>
                                <p>Approvals</p>
                            </div>
                        </div>
                        <!-- single -->
                        <div class="single-caption">
                            <div class="caption-icon">
                                <span class="flaticon-money"></span>
                            </div>
                            <div class="caption">
                                <p>Quick & Easy Loan</p>
                                <p>Approvals</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- slider-footer End -->

            </div>
            <!-- slider Area End-->
            <!-- About Law Start-->
            <div class="about-low-area section-padding2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="about-caption mb-50">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-35">
                                    <span>About Our Company</span>
                                    <h2>Building a Brighter financial Future & Good Support.</h2>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, oeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eniminixm, quis nostrud exercitation ullamco laboris nisi ut aliquip exeaoauat. Duis aute irure dolor in reprehe.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, oeiusmod tempor incididunt ut labore et dolore magna aliq.</p>
                                <a href="apply.html" class="btn">Apply for Loan</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <!-- about-img -->
                            <div class="about-img ">
                                <div class="about-font-img d-none d-lg-block">
                                    <img src=" {{ asset('assets/img/template/gallery/about2.png') }} " alt="">
                                </div>
                                <div class="about-back-img ">
                                    <img src=" {{ asset('assets/img/template/gallery/about1.png') }} " alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Law End-->
            <!-- Services Area Start -->
            <div class="services-area pt-150 pb-150" data-background=" {{ asset('assets/img/template/gallery/section_bg02.jpg') }} ">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-80">
                                <span>Services that we are providing</span>
                                <h2>High Performance Services For All Industries.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-cat text-center mb-50">
                                <div class="cat-icon">
                                    <span class="flaticon-work"></span>
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Business Loan</a></h5>
                                    <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-cat text-center mb-50">
                                <div class="cat-icon">
                                    <span class="flaticon-loan"></span>
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Commercial Loans</a></h5>
                                    <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-cat text-center mb-50">
                                <div class="cat-icon">
                                    <span class="flaticon-loan-1"></span>
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Construction Loans</a></h5>
                                    <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-cat text-center mb-50">
                                <div class="cat-icon">
                                    <span class="flaticon-like"></span>
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Business Loan</a></h5>
                                    <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Services Area End -->
            <!-- Support Company Start-->
            <div class="support-company-area section-padding3 fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="support-location-img mb-50">
                                <img src=" {{ asset('assets/img/template/gallery/single2.jpg') }} " alt="">
                                <div class="support-img-cap">
                                    <span>Since 1992</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="right-caption">
                                <!-- Section Tittle -->
                                <div class="section-tittle">
                                    <span>Why Choose Our Company</span>
                                    <h2>We Promise Sustainable  Future For You.</h2>
                                </div>
                                <div class="support-caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                    <div class="select-suport-items">
                                        <label class="single-items">Aorem ipsum dgolor sitnfd amet dfgbn fbsdg
                                            <input type="checkbox" checked="checked active">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="single-items">Consectetur adipisicing bfnelit, sedb dvbnfo
                                            <input type="checkbox" checked="checked active">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="single-items">Eiusmod tempor incididunt vmgldupout labore
                                            <input type="checkbox" checked="checked active">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="single-items">Admkde mibvnim veniam, quivds cnostrud.
                                            <input type="checkbox" checked="checked active">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Support Company End-->
            <!-- Application Area Start -->
            <div class="application-area pt-150 pb-140" data-background="{{ asset('assets/img/gallery/section_bg03.jpg') }}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 text-center mb-45">
                                <span>Apply in Three Easy Steps</span>
                                <h2>Easy Application Process For Any Types of Loan</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-xl-8">
                            <!--Hero form -->
                            <form action="#" class="search-box">
                                <div class="select-form">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option value="">Select Amount</option>
                                            <option value="">$120</option>
                                            <option value="">$700</option>
                                            <option value="">$750</option>
                                            <option value="">$250</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="select-form">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option value="">Duration Month</option>
                                            <option value="">7 Days</option>
                                            <option value="">10 Days</option>
                                            <option value="">14 Days Days</option>
                                            <option value="">20 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-form">
                                    <input type="text" placeholder="Return Amount">
                                </div>
                                <div class="search-form">
                                    <a href="apply.html">Apply for Loan</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Application Area End -->
            <!--Team Ara Start -->
            <div class="team-area section-padding30">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="cl-xl-7 col-lg-8 col-md-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-70">
                                <span>Our Loan Section Team Mambers</span>
                                <h2>Take a look to our professional team members.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    <img src=" {{ asset('assets/img/template/gallery/single2.jpgssets/img/gallery/home_blog1.png') }} " alt="">
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    </div>
                                </div>
                                <div class="team-caption">
                                    <h3><a href="#">Bruce Roberts</a></h3>
                                    <p>Volunteer leader</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    <img src=" {{ asset('assets/img/template/gallery/home_blog2.png') }} " alt="">
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    </div>
                                </div>
                                <div class="team-caption">
                                    <h3><a href="#">Bruce Roberts</a></h3>
                                    <p>Volunteer leader</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    <img src=" {{ asset('assets/img/template/gallery/home_blog3.png') }} " alt="">
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    </div>
                                </div>
                                <div class="team-caption">
                                    <h3><a href="#">Bruce Roberts</a></h3>
                                    <p>Volunteer leader</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    <img src=" {{ asset('assets/img/template/gallery/home_blog4.png') }} " alt="">
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    </div>
                                </div>
                                <div class="team-caption">
                                    <h3><a href="#">Bruce Roberts</a></h3>
                                    <p>Volunteer leader</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Ara End -->
            <!-- Testimonial Start -->
            <div class="testimonial-area t-bg testimonial-padding">
                <div class="container ">
                <div class="row d-flex justify-content-center">
                        <div class="col-xl-11 col-lg-11 col-md-9">
                            <div class="h1-testimonial-active">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-caption ">
                                        <div class="testimonial-top-cap">
                                            <img src=" {{ asset('assets/img/template/gallery/testimonial.png') }} " alt="">
                                            <p>Logisti Group is a representative logistics operator providing full range of ser
                                                of customs clearance and transportation worl.</p>
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-img">
                                                <img src=" {{ asset('assets/img/template/testmonial/Homepage_testi.png') }} " alt="">
                                            </div>
                                        <div class="founder-text">
                                                <span>Jessya Inn</span>
                                                <p>Co Founder</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-caption ">
                                        <div class="testimonial-top-cap">
                                            <img src=" {{ asset('assets/img/template/gallery/testimonial.png') }} " alt="">
                                            <p>Logisti Group is a representative logistics operator providing full range of ser
                                                of customs clearance and transportation worl.</p>
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-img">
                                                <img src=" {{ asset('assets/img/template/testmonial/Homepage_testi.png') }} " alt="">
                                            </div>
                                        <div class="founder-text">
                                                <span>Jessya Inn</span>
                                                <p>Co Founder</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>
            <!-- Testimonial End -->
            <!-- Blog Ara Start -->
            <div class="home-blog-area section-padding30">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-70">
                                <span>News form our latest blog</span>
                                <h2>News from around the world selected by us.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <!-- single-david -->
                            <div class="single-blogs mb-30">
                                <div class="blog-images">
                                    <img src=" {{ asset('assets/img/template/gallery/blog1.png') }} " alt="">
                                </div>
                                <div class="blog-captions">
                                    <span>January 28, 2020</span>
                                    <h2><a href="blog_details.html">The advent of pesticides brought
                                        in its benefits and pitfalls.</a></h2>
                                    <p>October 6, a2020by Steve</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <!-- single-david -->
                            <div class="single-blogs mb-30">
                                <div class="blog-images">
                                    <img src=" {{ asset('assets/img/template/gallery/blog2.png') }} " alt="">
                                </div>
                                <div class="blog-captions">
                                    <span>January 28, 2020</span>
                                    <h2><a href="blog_details.html">The advent of pesticides brought
                                        in its benefits and pitfalls.</a></h2>
                                    <p>October 6, a2020by Steve</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Ara End -->

        </main>
        <footer>
            <!-- Footer Start-->
            <div class="footer-area">
                <div class="container">
                <div class="footer-top footer-padding">
                        <div class="row justify-content-between">
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="single-footer-caption mb-30">
                                        <!-- logo -->
                                        <div class="footer-logo">
                                            <a href="index.html"><img src=" {{ asset('assets/img/template/logo/logo2_footer.png') }} " alt=""></a>
                                        </div>
                                        <div class="footer-pera">
                                            <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Quick Link</h4>
                                        <ul>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Offers & Discounts</a></li>
                                            <li><a href="#">Get Coupon</a></li>
                                            <li><a href="#"> Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>New Products</h4>
                                        <ul>
                                            <li><a href="#">Woman Cloth</a></li>
                                            <li><a href="#">Fashion Accessories</a></li>
                                            <li><a href="#">Man Accessories</a></li>
                                            <li><a href="#">Rubber made Toys</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Support</h4>
                                        <ul>
                                            <li><a href="#">Frequently Asked Questions</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#"> Privacy Policy</a></li>
                                            <li><a href="#">Report a Payment Issue</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                    <div class="footer-bottom">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-xl-9 col-lg-8">
                                <div class="footer-copy-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <!-- Footer Social -->
                                <div class="footer-social f-right">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>
        <!-- Scroll Up -->
        <div id="back-top" >
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>


        <!-- JS here -->
            <!-- All JS Custom Plugins Link Here here -->
            <script src=" {{ asset('assets/js/template/vendor/modernizr-3.5.0.min.js') }}  "></script>
            <!-- Jquery, Popper, Bootstrap -->
            <script src=" {{ asset('assets/js/template/vendor/jquery-1.12.4.min.js') }}  "></script>
            <script src=" {{ asset('assets/js/template/popper.min.js') }}  "></script>
            <script src=" {{ asset('assets/js/template/bootstrap.min.js') }}  "></script>
            <!-- Jquery Mobile Menu -->
            <script src=" {{ asset('assets/js/template/jquery.slicknav.min.js') }} "></script>

            <!-- Jquery Slick , Owl-Carousel Plugins -->
            <script src=" {{ asset('assets/js/template/owl.carousel.min.js') }}  "></script>
            <script src=" {{ asset('assets/js/template/slick.min.js') }}  "></script>
            <!-- One Page, Animated-HeadLin -->
            <script src=" {{ asset('assets/js/template/wow.min.js') }}  "></script>
            <script src=" {{ asset('assets/js/template/animated.headline.js') }}  "></script>
            <script src=" {{ asset('assets/js/template/jquery.magnific-popup.js') }}  "></script>

            <!-- Nice-select, sticky -->
            <script src=" {{ asset('assets/js/template/jquery.nice-select.min.js') }}  "></script>
            <script src=" {{ asset('assets/js/template/jquery.sticky.js') }}  "></script>

            <!-- contact js -->
            <script src=" {{ asset('assets/js/template/contact.js') }} "></script>
            <script src=" {{ asset('assets/js/template/jquery.form.js') }}  "></script>
            <script src=" {{ asset('assets/js/template/jquery.validate.min.js') }}  "></script>
            <script src=" {{ asset('assets/js/template/mail-script.js') }}  "></script>
            <script src=" {{ asset('assets/js/template/jquery.ajaxchimp.min.js') }}  "></script>

            <!-- Jquery Plugins, main Jquery -->
            <script src=" {{ asset('assets/js/template/plugins.js') }}  "></script>
            <script src=" {{ asset('assets/js/template/main.js') }}  "></script>

    </body>
</html>
