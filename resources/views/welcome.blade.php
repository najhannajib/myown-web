<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>Najhan Najib</title>
<meta name="description" content="Simone is responsive bootstrap 5 one page personal portfolio html template.">
<meta name="author" content="harnishdesign.net">

<link rel="apple-touch-icon" sizes="180x180" href="images/logo.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/logo.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
<link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

<!-- Web Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheet
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<!-- Owl Carousel -->
<link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css" />
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />

<script src="https://kit.fontawesome.com/{{ env('FA_KEY') }}.js" crossorigin="anonymous"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#header-nav" data-bs-offset="0">

<!-- Preloader -->
<div class="preloader preloader-dark">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
=============================== -->
<div id="main-wrapper"> 
  <!-- Header
  ============================ -->
  <header id="header" class="sticky-top-slide"> 
    <!-- Navbar -->
    <nav class="primary-menu navbar navbar-expand-lg navbar-dark bg-transparent border-bottom-0">
      <div class="container-fluid position-relative g-lg-4">
        <div class="col-auto col-lg-2"> 
          <!-- Logo --> 
          <a class="logo p-2" href="index.html" title="najhanlogo"> <img src="images/logo.png" alt="Najhan" style="max-width: 80px"/> </a> 
          <!-- Logo End --> 
        </div>
        <div class="col col-lg-8 navbar-accordion">
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"><span></span><span></span><span></span></button>
          <div id="header-nav" class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link smooth-scroll active" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" 	href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">What I Do</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#resume">Resume</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#review">Review</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-auto col-lg-2 d-flex justify-content-end">
          <ul class="social-icons social-icons-light">
          <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="http://www.twitter.com/najhannanjib" target="_blank" title="" data-bs-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
          <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.instagram.com/najhannajib" target="_blank" title="" data-bs-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
          <li class="social-icons-github"><a data-bs-toggle="tooltip" href="http://www.github.com/najhannajib" target="_blank" title="" data-bs-original-title="GitHub"><i class="fab fa-github"></i></a></li>
          {{-- <li class="social-icons-dribbble"><a data-bs-toggle="tooltip" href="http://www.dribbble.com/" target="_blank" title="" data-bs-original-title="Dribbble"><i class="fab fa-dribbble"></i></a></li> --}}
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End --> 
  </header>
  <!-- Header End --> 
		
  <!-- Content
  ============================================= -->
  <div id="content" role="main"> 
    
    <!-- Intro
    ============================================= -->
    <section id="home">
      <div class="hero-wrap">
        <div class="hero-mask opacity-8 bg-dark"></div>
        <div class="hero-bg parallax" style="background-image:url('images/intro-bg.jpg');"></div>
        <div class="hero-content section d-flex min-vh-100">
          <div class="container my-auto">
            <div class="row">
              <div class="col-12 text-center">
                <div class="typed-strings">
                  <p>I'm Najhan Najib</p>
                  <p>I'm a Programmer.</p>
                  <p>I'm a Laravel Developer.</p>
                  <p>I'm a Web System Developer.</p>
                </div>
                <p class="text-7 fw-500 text-white mb-2 mb-md-3">Welcome</p>
                <h2 class="text-16 fw-600 text-white mb-2 mb-md-3"><span class="typed"></span></h2>
                <p class="text-5 text-light mb-4">based in Kuala Lumpur, Malaysia.</p>
				<a href="#contact" class="btn btn-outline-primary rounded-pill shadow-none smooth-scroll mt-2">Hire Me</a>
              </div>
            </div>
          </div>
          <a href="#about" class="scroll-down-arrow text-white smooth-scroll"><span class="animated"><i class="fa fa-chevron-down"></i></span></a> </div>
      </div>
    </section>
    <!-- Intro end --> 
    
    <!-- About
    ============================================= -->
    <section id="about" class="section bg-dark-1">
      <div class="container px-lg-5"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-muted opacity-1 text-uppercase fw-600 w-100 mb-0">About Me</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Get to Know Me<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        
        <div class="row gy-5">
          <!-- Profile Image --> 
          <div class="row mx-0 text-center">
            <div class="col">
              <img class="img-fluid rounded-pill" src="images/profile.jpg" title="NajhanNajib" alt="" style="max-width: 250px">
            </div>
          </div>
          <!-- Profile Image End -->
          <div class="col-lg-7 col-xl-8 text-center text-lg-start">
            <h2 class="text-7 text-white fw-600 mb-3">I'm <span class="text-primary">Najhan Najib,</span> a Developer</h2>
            <p class="text-white-50">I Engaged in all phases of the software development lifecycle which include: gathering and analyzing user/business system requirements, responding to outages and creating application system models. I also participate in design meetings and consult with clients to refine, test and debug programs to meet business needs and interact and sometimes direct third party partners in the achievement of business and technology initiatives.</p>
            <p class="text-white-50">Delivering work in smooth and perfect is my moto, and helping others developers in need is my vision.</p>
          </div>
          <div class="col-lg-5 col-xl-4">
            <div class="ps-lg-4">
              <ul class="list-style-2 list-style-light text-light">
                <li><span class="fw-600 me-2">Name:</span>Najhan Najib</li>
                <li><span class="fw-600 me-2">Email:</span><a href="mailto:najhan.mnajib@gmail.com">najhan.mnajib@gmail.com</a></li>
                <li><span class="fw-600 me-2">Age:</span>24</li>
                <li class="border-0"><span class="fw-600 me-2">From:</span>Selangor, Malaysia</li>
              </ul>
              <a href="pdf/najhan_resume.pdf" class="btn btn-primary rounded-pill text-dark" download>Download Resume</a> </div>
          </div>
        </div>
        <div class="brands-grid separator-border separator-border-light mt-5">
          <div class="row">
            <div class="col-6 col-md-3">
              <div class="featured-box text-center">
                <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0" data-to="1">1</span>+</h4>
                <p class="text-light mb-0">Years Experiance</p>
              </div>
            </div>
            {{-- <div class="col-6 col-md-3">
              <div class="featured-box text-center">
                <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0" data-to="250">250</span>+</h4>
                <p class="text-light mb-0">Happy Clients</p>
              </div>
            </div> --}}
            <div class="col-6 col-md-3">
              <div class="featured-box text-center">
                <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0" data-to="4">4</span>+</h4>
                <p class="text-light mb-0">Projects Done</p>
              </div>
            </div>
            {{-- <div class="col-6 col-md-3">
              <div class="featured-box text-center">
                <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0" data-to="38">20</span></h4>
                <p class="text-light mb-0">Get Awards</p>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- About end --> 
    
    <!-- Services
    ============================================= -->
    <section id="services" class="section bg-dark-2">
      <div class="container px-lg-5"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Services</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">What I Do?<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        
        <div class="row">
          <div class="col-lg-11 mx-auto">
            <div class="row">
              
              <div class="col-md-6">
                <div class="featured-box style-3 mb-5">
                  <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"> <i class="fas fa-desktop"></i></div>
                  <h3 class="text-white">Front-end development</h3>
                  <p class="text-white-50 mb-0">Usually I use the basic from Laravel which is blade file, including HTML, CSS, and jQuery. I also has experience on Angular framework</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="featured-box style-3 mb-5">
                  <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"> <i class="fa-solid fa-code"></i> </div>
                  <h3 class="text-white">Back-end development</h3>
                  <p class="text-white-50 mb-0">Most of my project, I use php language in Laravel framework. I would like to try new language but at the same time, I want to enhance my Laravel skill too!</p>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="featured-box style-3 mb-5">
                  <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"> <i class="fa-solid fa-mobile-screen-button"></i> </div>
                  {{-- <h3 class="text-white">App Design &amp; Develop</h3> --}}
                  <h3 class="text-white">API for mobile apps</h3>
                  <p class="text-white-50 mb-0">I create RESTful API for mobile apps development, and using the Laravel to create the API.</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="featured-box style-3 mb-5">
                  <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"> <i class="fa-solid fa-database"></i> </div>
                  {{-- <h3 class="text-white">App Design &amp; Develop</h3> --}}
                  <h3 class="text-white">Configure and manage database</h3>
                  <p class="text-white-50 mb-0">Currently I only use MySQL database, but I have experience on Postgres database too.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services end --> 
    
    <!-- Resume
    ============================================= -->
    <section id="resume" class="section bg-dark-1">
      <div class="container px-lg-5"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-muted opacity-1 text-uppercase fw-600 w-100 mb-0">Summary</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Resume<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        
        <div class="row gx-5"> 
          <!-- My Education -->
          <div class="col-md-6">
            <h2 class="text-6 text-white fw-600 mb-4">My Education</h2>
            
            <div class="bg-dark rounded p-4 mb-4">
              <p class="badge bg-danger text-2 fw-400">2016 - 2017</p>
              <h3 class="text-5 text-white">Matriculation Programme</h3>
              <p class="text-primary">Johor Matriculation Collegue</p>
              <p class="text-white-50 mb-0">Science Module II (Biology, Chemistry, and Computer Science).</p>
            </div>
            <div class="bg-dark rounded p-4 mb-4">
              <p class="badge bg-danger text-2 fw-400">2017 - 2021</p>
              <h3 class="text-5 text-white">Bachelor of Computer Science with Honor</h3>
              <p class="text-primary">Islamic Science University of Malaysia</p>
              <p class="text-white-50 mb-0">Major in Information Security and Assurance.</p>
            </div>
          </div>
          
          <!-- My Experience -->
          <div class="col-md-6">
            <h2 class="text-6 text-white fw-600 mb-4">My Experience</h2>
            <div class="bg-dark rounded p-4 mb-4">
              <p class="badge bg-danger text-2 fw-400">March 2021 - June 2021</p>
              <h3 class="text-5 text-white">Internship Programme</h3>
              <p class="text-primary">Pipeline Network</p>
              <p class="text-white-50 mb-0">Create prototype mostly using Angular framework.</p>
            </div>
            <div class="bg-dark rounded p-4 mb-4">
              <p class="badge bg-danger text-2 fw-400">July 2021  - December 2022</p>
              <h3 class="text-5 text-white">Software Developer</h3>
              <p class="text-primary">Pipeline Network</p>
              <p class="text-white-50 mb-0">Full stack developer using Laravel and Ionic Vue.</p>
            </div>
            {{-- <div class="bg-dark rounded p-4 mb-4">
              <p class="badge bg-danger text-2 fw-400">2023 - now</p>
              <h3 class="text-5 text-white">Software Developer</h3>
              <p class="text-primary">DRB-HICOM</p>
              <p class="text-white-50 mb-0">In-House developer for web system using Laravel.</p>
            </div> --}}
          </div>
        </div>
        <!-- My Skills -->
		<h2 class="text-6 text-white fw-600 mt-4 mb-4">My Skills</h2>
        <div class="row gx-5">
          <div class="col-md-6">
            {{-- <p class="text-light fw-500 text-start mb-2">Web Design <span class="float-end">65%</span></p>
            <div class="progress progress-sm bg-dark mb-4">
              <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
            </div> --}}
            <p class="text-light fw-500 text-start mb-2">HTML/CSS <span class="float-end">95%</span></p>
            <div class="progress progress-sm bg-dark mb-4">
              <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="text-light fw-500 text-start mb-2">JavaScript <span class="float-end">80%</span></p>
            <div class="progress progress-sm bg-dark mb-4">
              <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="text-light fw-500 text-start mb-2">Angular <span class="float-end">45%</span></p>
            <div class="progress progress-sm bg-dark mb-4">
              <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col-md-6">
            <p class="text-light fw-500 text-start mb-2">Laravel <span class="float-end">87%</span></p>
            <div class="progress progress-sm bg-dark mb-4">
              <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="text-light fw-500 text-start mb-2">Bootstrap <span class="float-end">90%</span></p>
            <div class="progress progress-sm bg-dark mb-4">
              <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="text-light fw-500 text-start mb-2">MySQL <span class="float-end">67%</span></p>
            <div class="progress progress-sm bg-dark mb-4">
              <div class="progress-bar" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        {{-- <div class="text-center mt-5"><a href="#" class="btn btn-outline-secondary rounded-pill shadow-none">Download CV <span class="ms-1"><i class="fas fa-download"></i></span></a></div> --}}
      </div>
    </section>
    <!-- Resume end --> 
    
    <!-- Portfolio
    ============================================= -->
    <section id="portfolio" class="section bg-dark-2">
      <div class="container px-lg-5"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Portfolio</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">My Work<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end--> 
        
        <!-- Filter Menu -->
        <ul class="portfolio-menu nav nav-tabs nav-light justify-content-center border-bottom-0 mb-5">
          <li class="nav-item"> <a data-filter="*" class="nav-link active" href="">All</a></li>
          <li class="nav-item"> <a data-filter=".web" href="" class="nav-link">Web System</a></li>
          <li class="nav-item"> <a data-filter=".mobile" href="" class="nav-link">Mobile Apps</a></li>
        </ul>
        <!-- Filter Menu end -->
        <div class="portfolio popup-ajax-gallery">
          <div class="row mx-5 portfolio-filter g-4">

            <div class="col-sm-6 col-lg-6 web">
              <div class="portfolio-box rounded">
                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="images/projects/project-1.jpg" alt="">
                  <div class="portfolio-overlay"> <a class="popup-ajax stretched-link" href="projek/intan-isac.html"></a>
                    <div class="portfolio-overlay-details">
                      <h5 class="text-white fw-400">INTAN | ISAC</h5>
                      <span class="text-light">e-learning & certification</span> </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-sm-6 col-lg-6 mobile">
              <div class="portfolio-box rounded">
                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="images/projects/project-2.jpg" alt="">
                  <div class="portfolio-overlay"> <a class="popup-ajax stretched-link" href="projek/jpj-myjpj.html"></a>
                    <div class="portfolio-overlay-details">
                      <h5 class="text-white fw-400">JPJ | MyJPJ</h5>
                      <span class="text-light">Information & complaint</span> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-6 web">
              <div class="portfolio-box rounded">
                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="images/projects/project-3.jpg" alt="">
                  <div class="portfolio-overlay"> <a class="popup-ajax stretched-link" href="projek/risda-elatihan.html"></a>
                    <div class="portfolio-overlay-details">
                      <h5 class="text-white fw-400">RISDA | e-Latihan</h5>
                      <span class="text-light">e-learning</span> </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="col-sm-6 col-lg-4 artwork brand photos">
              <div class="portfolio-box rounded">
                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="images/projects/project-4.jpg" alt="">
                  <div class="portfolio-overlay"> <a class="popup-ajax stretched-link" href="ajax/portfolio-ajax-project-dark-4.html"></a>
                    <div class="portfolio-overlay-details">
                      <h5 class="text-white fw-400">KPDNHEP | WhatsApp chatbot</h5>
                      <span class="text-light">Service & complaint</span> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 web">
              <div class="portfolio-box rounded">
                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="images/projects/project-5.jpg" alt="">
                  <div class="portfolio-overlay"> <a class="popup-ajax stretched-link" href="ajax/portfolio-ajax-project-dark-5.html"></a>
                    <div class="portfolio-overlay-details">
                      <h5 class="text-white fw-400">JKR | ePHJKR</h5>
                      <span class="text-light">Data management</span> </div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio end --> 
    
    <!-- Review
    ============================================= -->
    <section id="review" class="section bg-dark-1">
      <div class="container px-lg-5"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-muted opacity-1 text-uppercase fw-600 w-100 mb-0">Review</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Collegue Speak<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        
        <div class="owl-carousel owl-light owl-theme" data-loop="true" data-nav="false" data-autoplay="false" data-margin="25" data-stagepadding="0" data-slideby="1" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="2">
          <div class="item">
            <div class="bg-dark rounded p-5">
              <div class="d-flex align-items-center mt-auto mb-4"> <img class="img-fluid rounded-circle d-inline-block w-auto" src="images/testimonial/yeh.jpg" alt="" style="max-width: 65px">
                <p class="ms-3 mb-0"><strong class="d-block text-white fw-600">Haris</strong> <span class="text-white-50 fw-500">Junior Developer, PNSB</span></p>
              </div>
              <p class="text-light mb-4">“This guy really work hard on what he want to deliver and score, even in a game too !.”</p>
              <span class="text-2 text-primary"> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </span> </div>
          </div>
          <div class="item">
            <div class="bg-dark rounded p-5">
              <div class="d-flex align-items-center mt-auto mb-4"> <img class="img-fluid rounded-circle d-inline-block w-auto" src="images/testimonial/client-sm-1.jpg" alt="">
                <p class="ms-3 mb-0"><strong class="d-block text-white fw-600">Jay Shah</strong> <span class="text-white-50 fw-500">Founder at Icomatic Pvt Ltd</span></p>
              </div>
              <p class="text-light mb-4">"Easy to use, reasonably priced simply dummy text of the printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam possim iriure.”</p>
              <span class="text-2 text-primary"> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </span> </div>
          </div>
          <div class="item">
            <div class="bg-dark rounded p-5">
              <div class="d-flex align-items-center mt-auto mb-4"> <img class="img-fluid rounded-circle d-inline-block w-auto" src="images/testimonial/client-sm-2.jpg" alt="">
                <p class="ms-3 mb-0"><strong class="d-block text-white fw-600">Patrick Cary</strong> <span class="text-white-50 fw-500">Freelancer from USA</span></p>
              </div>
              <p class="text-light mb-4">“I am happy Working with printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam persequeris essent possim iriure.”</p>
              <span class="text-2 text-primary"> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </span> </div>
          </div>
          <div class="item">
            <div class="bg-dark rounded p-5">
              <div class="d-flex align-items-center mt-auto mb-4"> <img class="img-fluid rounded-circle d-inline-block w-auto" src="images/testimonial/client-sm-4.jpg" alt="">
                <p class="ms-3 mb-0"><strong class="d-block text-white fw-600">Chris Tom</strong> <span class="text-white-50 fw-500">User from UK</span></p>
              </div>
              <p class="text-light mb-4">“I have used them twice now. Good rates, very efficient service and priced simply dummy text of the printing and typesetting industry quidam interesset his et. Excellent.”</p>
              <span class="text-2 text-primary"> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </span> </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial end --> 
    
    <!-- Contact Me
    ============================================= -->
    <section id="contact" class="section bg-dark-2">
      <div class="container px-lg-5">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Contact</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Get in Touch<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        <div class="row gy-5">
          <div class="col-md-4 col-xl-3 order-1 order-md-0 text-center text-md-start">
            <h2 class="mb-3 text-5 text-white text-uppercase">Address</h2>
            <p class="text-3 text-light mb-4">15, Jalan Bayu 6,<br>
              Desa Sri Bayu,<br>
              48000 Rawang, Selangor,<br>
              Malaysia </p>
            <p class="text-3 text-light mb-1"><span class="text-primary text-4 me-2"><i class="fas fa-phone"></i></span>(+60) 122 263 479</p>
            {{-- <p class="text-3 text-light mb-1"><span class="text-primary text-4 me-2"><i class="fas fa-fax"></i></span>(060) 555 545 555</p> --}}
            <p class="text-3 text-light mb-4"><span class="text-primary text-4 me-2"><i class="fas fa-envelope"></i></span>najhan.mnajib@gmail.com</p>
            <h2 class="mb-3 text-5 text-white text-uppercase">Follow Me</h2>
            <ul class="social-icons social-icons-muted justify-content-center justify-content-md-start">
              {{-- <li class="social-icons-dribbble"><a data-bs-toggle="tooltip" href="http://www.dribbble.com/harnishdesign/" target="_blank" title="Dribbble"><i class="fab fa-dribbble"></i></a></li> --}}
              <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="https://twitter.com/najhannajib/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
              <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/najhannajib/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li class="social-icons-google"><a data-bs-toggle="tooltip" href="http://www.instagram.com/najhannajib" target="_blank" title="Google"><i class="fab fa-instagram"></i></a></li>
              <li class="social-icons-github"><a data-bs-toggle="tooltip" href="http://www.github.com/najhannajib" target="_blank" title="GitHub"><i class="fab fa-github"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8 col-xl-9 order-0 order-md-1">
            <h2 class="mb-3 text-5 text-white text-uppercase text-center text-md-start">Send us a note</h2>
            <form class="form-dark" action="/get_in_touch" method="post">
              @csrf
              <div class="row g-4">
                <div class="col-xl-6">
                    <input name="name" type="text" class="form-control" required placeholder="Name">
                </div>
                <div class="col-xl-6">
                    <input name="email" type="email" class="form-control" required placeholder="Email">
                </div>
                <div class="col">
                  <textarea name="notes" class="form-control" rows="5" required placeholder="Tell us more about your needs........"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col text-center mt-4 mb-0">
                  <button id="submit-btn" class="btn btn-primary rounded-pill d-inline-flex" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Me end --> 
    
  </div>
  <!-- Content end --> 
  
  <!-- Footer
  ============================================= -->
  <footer id="footer" class="section footer-dark bg-dark-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center text-lg-start">
          <p class="mb-3 mb-lg-0">Copyright © 2022 <a href="#" class="fw-500">Najhan</a>. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-separator nav-separator-light justify-content-center justify-content-lg-end">
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#terms-policy" href="#">Terms & Policy</a></li>
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#disclaimer" href="#">Disclaimer</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" class="rounded-circle" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Terms & Policy Modal
================================== -->
<div id="terms-policy" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-2 text-light">
      <div class="modal-header border-secondary">
        <h5 class="modal-title text-white">Terms & Policy</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <h3 class="text-white mb-3 mt-4 mt-4">Terms of Use</h3>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Simply dummy text of the printing and typesetting industry.</p>
        <h5 class="text-white text-4 mt-4">Part I – Information Simone collects and controls</h5>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <h5 class="text-white text-4 mt-4">Part II – Information that Simone processes on your behalf</h5>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <h5 class="text-white text-4 mt-4">Part III – General</h5>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <h3 class="text-white mb-3 mt-4">Privacy Policy</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
        <ol class="lh-lg">
          <li>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>In quot quidam persequeris vim, ad mea essent possim iriure. Quidam lisque persius interesset his et.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et.</li>
          <li>Interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quot quidam persequeris vim Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Terms & Policy Modal End --> 

<!-- Disclaimer Modal
================================== -->
<div id="disclaimer" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-2 text-light">
      <div class="modal-header border-secondary">
        <h5 class="modal-title text-white">Copyright & Disclaimer</h5>
		<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
        <ul class="lh-lg">
          <li>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>In quot quidam persequeris vim, ad mea essent possim iriure. Quidam lisque persius interesset his et.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et.</li>
          <li>Interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quot quidam persequeris vim Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Disclaimer Modal End --> 

<!-- JavaScript --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Easing --> 
<script src="vendor/jquery.easing/jquery.easing.min.js"></script> 
<!-- Appear --> 
<script src="vendor/jquery.appear/jquery.appear.min.js"></script> 
<!-- Images Loaded --> 
<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script> 
<!-- Counter --> 
<script src="vendor/jquery.countTo/jquery.countTo.min.js"></script> 
<!-- Parallax Bg --> 
<script src="vendor/parallaxie/parallaxie.min.js"></script> 
<!-- Typed --> 
<script src="vendor/typed/typed.min.js"></script> 
<!-- Owl Carousel --> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<!-- isotope Portfolio Filter --> 
<script src="vendor/isotope/isotope.pkgd.min.js"></script> 
<!-- Magnific Popup --> 
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script> 
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script> 
<!-- Custom Script --> 
<script src="js/theme.js"></script>
</body>
</html>