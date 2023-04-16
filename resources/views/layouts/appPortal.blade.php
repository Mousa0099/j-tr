<!DOCTYPE html>
<html lang="ar">

<head>
    <title>مركز جهات للتدريب - الرئيسية</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="{{ asset('public/css/open-iconic-bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet"  href="{{ asset('public/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('public/css/aos.css')}}">

    <link rel="stylesheet"  href="{{ asset('public/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet"  href="{{ asset('public/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet"  href="{{ asset('public/css/flaticon.css')}}">
    <link rel="stylesheet"  href="{{ asset('public/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css')}}">
  </head>
  <body dir="rtl">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><i class="flaticon-university"></i> مركز جهات  <br><small>للتدريب </small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> قائمة
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">الرئيسية </a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">من نحن</a></li>
          <li class="nav-item"><a href="course.html" class="nav-link">الدورات </a></li>
          <li class="nav-item"><a href="teacher.html" class="nav-link">المدربين</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">الأخبار</a></li>
          <li class="nav-item"><a href="event.html" class="nav-link">الفعاليات</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">تواصل معنا</a></li>
          <li class="nav-item cta"><a href="login/login-5.html" class="nav-link"><span> سجل الآن</span></a></li>
        </ul>
      </div>
    </div>
  </nav>



  @yield('content')



  <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_2.jpg); background-attachment:fixed;">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2><a class="navbar-brand" href="index.html"><i class="flaticon-university"></i> مركز جهات <br><small>للتدريب </small></a></h2>
              <p>تواصل معنا من خلال وسائل التواصل الاجتماعي المتوفرة ادناه </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"> احدث المدونات</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">التكنولوجيا صناعة ضخمة في حد ذاتها، عالم التقنيه</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> يناير 12, 2023</a></div>
                    <div><a href="#"><span class="icon-person"></span> المسؤول</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 22</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#"> فهم أساليب تحسين محركات البحث وتطوير موقعك الإلكتروني ، اكادمية الزيرو</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> يونيو 12, 2022</a></div>
                    <div><a href="#"><span class="icon-person"></span> المسؤول</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">روابط الموقع </h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">الرئيسية</a></li>
                <li><a href="#" class="py-2 d-block">من نحن </a></li>
                <li><a href="#" class="py-2 d-block">الدورات</a></li>
                <li><a href="#" class="py-2 d-block">الطلاب</a></li>
                <li><a href="#" class="py-2 d-block">فيديو </a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">لديك استفسار؟</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">شارع الملك فهد ، عاصمة الرياض ، المملكه العربية السعودية</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+966553777769</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@jehat.sa</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  حقوق النشر &copy;<script>document.write(new Date().getFullYear());</script> جميع الحقوق محفوظة | هذا القالب مصنوع  <i class="icon-heart" aria-hidden="true"></i> بواسطة <a href="https://colorlib.com" target="_blank">كلورليب</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  <script src="{{ asset('public/js/jquery.min.js')}}"></script>
  <script src="{{ asset('public/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('public/js/popper.min.js')}}"></script>
  <script src="{{ asset('public/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('public/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('public/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('public/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('public/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('public/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('public/js/aos.js')}}"></script>
  <script src="{{ asset('public/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('public/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('public/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset('public/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('public/js/google-map.js')}}"></script>
  <script src="{{ asset('public/js/main.js')}}"></script>


  </body>
</html>