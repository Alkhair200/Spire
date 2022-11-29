<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Sample Product">
    <meta name="description" content="">
    <title>news detail</title>
    <link rel="stylesheet" href="{{asset('front/css/nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('front/css/blog-detail.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('front/js/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('front/js/nicepage.js')}}" defer=""></script>

    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900">
    

<style type="text/css">
            body,
            p,
            label,
            button,
            a,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                /* font-family: 'Cairo', sans-serif !important; */
                 font-family: 'Droid Arabic Kufi'!important; 
            }      
</style>      
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/IMG-20221026-WA0000-removebg-preview1.png"
}</script>
    <meta name="theme-color" content="#95ccc3">
    <meta property="og:title" content="blog detail">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-container-align-right u-header u-palette-2-base u-header" id="sec-cdb9"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{route('welcome')}}" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="{{asset('front/images/IMG-20221026-WA0000-removebg-preview1.png')}}" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-align-right u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse u-custom-font" style="font-size: 1.5rem; letter-spacing: 0px; font-family: Tajawal; text-transform: uppercase; font-weight: 500;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-nav u-spacing-2 u-unstyled u-nav-1">


<li class="u-nav-item"><a class="u-active-black u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-white" href="{{route('blog')}}" style="padding: 10px 20px;">أخر الأخبار</a>
</li>

<li class="u-nav-item"><a class="u-active-black u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-white" href="{{route('welcome')}}"  style="padding: 10px 20px;">الرئيسية</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-text-active-palette-2-base u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.html">تسجيل الدخول</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html#sec-8a78">تواصل معنا</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('blog')}}">أخر الأخبار</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html#carousel_9b37">المناشط</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html#carousel_af92">عنا</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('welcome')}}">الرئيسية</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-black u-clearfix u-section-1" id="carousel_af8a">
      <div class="u-clearfix u-sheet u-sheet-1"><!--product--><!--product_options_json--><!--{"source":""}--><!--/product_options_json--><!--product_item-->
        <div class="u-container-style u-expanded-width u-product u-product-1">
          <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-top-sm u-valign-top-xs u-container-layout-1"><!--product_image-->
            <img alt="" class="u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-product-control u-image-1" src="{{$blog->image_path}}" data-animation-name="customAnimationIn" data-animation-duration="1000"><!--/product_image-->
            <div class="u-align-left u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-align-right u-border-3 u-border-palette-2-base u-line u-line-horizontal u-line-1" data-animation-name="customAnimationIn" data-animation-duration="1000"></div><!--product_title-->
            
                <div class="u-align-right u-custom-font u-product-control u-product-desc u-text u-text-default u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000"><!--product_content_content-->
                  <p>{{$blog->description}}</p><!--/product_content_content-->
                </div><!--/product_content-->
              </div>
            </div>
          </div>
        </div><!--/product_item--><!--/product-->
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-44c2"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-small-text u-text u-text-variant u-text-1">جميع الحقوق محفوظة لأكاديمية أسباير سيتى 2022 </p>
      </div></footer>
   
  
</body></html>