<!DOCTYPE html>
<html style="font-size: 14px; font-family: ;" lang="ar"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="إنضم الينا الان في أكاديمية أسباير سيتي للرياضة ">
    <meta name="description" content="">
    <title>أكاديمية أسباير سيتى للرياضة</title>
    <link rel="stylesheet" href="{{asset('front/css/nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('front/css/Home.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('front/js/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('front/js/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900|Cairo:200,300,400,500,600,700,800,900">
    
    
    
    
    
    
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
    {{-- "logo": "{{asset('front/images/IMG-20221026-WA0000-removebg-preview1.png')}}" --}}
}</script>
    <meta name="theme-color" content="#95ccc3">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-container-align-right u-header u-palette-2-base u-header" id="sec-cdb9"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{route('welcome')}}" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="{{asset('front/images/IMG-20221026-WA0000-removebg-preview1.png')}}" 
          class="u-logo-image u-logo-image-1">
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

            @guest
              @if (Route::has('login'))
              <li class="u-nav-item">
                <a class="u-active-black u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-white" href="{{route('login')}}" style="padding: 10px 20px;">تسجيل الدخول</a>
              </li>
            @endif  
            @endguest           



<li class="u-nav-item"><a class="u-active-black u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-white" href="Home.html#sec-8a78" style="padding: 10px 20px;">تواصل معنا</a>
</li><li class="u-nav-item"><a class="u-active-black u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-white" 
  href="{{route('blog')}}" style="padding: 10px 20px;">أخر الأخبار</a>
</li><li class="u-nav-item"><a class="u-active-black u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-white" href="Home.html#carousel_9b37" style="padding: 10px 20px;">المناشط</a>
</li><li class="u-nav-item"><a class="u-active-black u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-white" href="Home.html#carousel_af92" style="padding: 10px 20px;">عنا</a>
</li><li class="u-nav-item"><a class="u-active-black u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-white" 
  href="{{route('welcome')}}"  style="padding: 10px 20px;">الرئيسية</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-text-active-palette-2-base u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.html">تسجيل الدخول</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html#sec-8a78">تواصل معنا</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Blog.html">أخر الأخبار</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html#carousel_9b37">المناشط</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html#carousel_af92">عنا</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" >الرئيسية</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="skrollable skrollable-between u-align-center u-clearfix u-image u-shading u-section-1" src="" id="carousel_e7d3" data-image-width="1280" data-image-height="710">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-contain u-image-default u-image-1" src="
        {{asset('front/images/IMG-20221026-WA0000-removebg-preview1.png')}}" 
        alt="" data-image-width="500" data-image-height="500" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="250">
        <h1 class="u-custom-font u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1250">أكاديمية أسباير سيتى للرياضة</h1>
        <p class="u-custom-font u-large-text u-text u-text-variant u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">من الأكاديمية الى العالمية</p>
        <div class="u-align-center u-clearfix u-layout-custom-sm u-layout-custom-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-right u-container-align-center u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <a href="" class="u-active-white u-align-center u-border-2 u-border-active-white u-border-hover-white u-border-palette-2-base u-btn u-button-style u-custom-font u-hover-white u-none u-text-active-black u-text-body-alt-color u-text-hover-black u-btn-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">إقرا المزيد</a>
                </div>
              </div>
            </div>
          </div>
        </div><span class="u-file-icon u-icon u-text-white u-icon-1" data-href="Home.html#carousel_9b37" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750"><img 
          src="{{asset('front/images/814031-0cdb445a.png')}}" alt=""></span>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-2" id="carousel_78eb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-custom-border u-list-item u-palette-2-base u-repeater-item u-shape-rectangle u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-border-7 u-border-palette-2-base u-file-icon u-icon u-icon-rectangle u-text-black u-white u-icon-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="750"><img src="images/mission-234a7906.png" alt=""></span>
                <h5 class="u-custom-font u-text u-text-1">شعارنا</h5>
                <p class="u-custom-font u-custom-item u-text u-text-2">من الأكاديمية إلى العالمية</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-border u-list-item u-palette-2-base u-repeater-item u-shape-rectangle u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-border-7 u-border-palette-2-base u-file-icon u-icon u-icon-rectangle u-text-black u-white u-icon-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="750"><img 
                src="{{asset('front/images/view-0fac552e.png')}}" alt=""></span>
                <h5 class="u-custom-font u-text u-text-3">رؤيتنا</h5>
                <p class="u-custom-font u-custom-item u-text u-text-4">تسعي أسباير سيتي أن تكون أبرز الأكاديميات الرياضية المتخصصة لصناعة جيل المستقبل في كرة القدم وكرة السلة والكراتيه وغيرها من الأنشطة الرياضية الأخرى</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-border u-list-item u-palette-2-base u-repeater-item u-shape-rectangle u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-border-7 u-border-palette-2-base u-icon u-icon-rectangle u-text-black u-white u-icon-3" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="750"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3db9"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-3db9" style="enable-background:new 0 0 60 60;"><g><path d="M38.914,0H6.5v60h47V14.586L38.914,0z M39.5,3.414L50.086,14H39.5V3.414z M8.5,58V2h29v14h14v42H8.5z"></path><path d="M42.5,21h-16c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1S43.052,21,42.5,21z"></path><path d="M22.875,18.219l-4.301,3.441l-1.367-1.367c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2,2
		C17.987,23.901,18.243,24,18.5,24c0.22,0,0.441-0.072,0.624-0.219l5-4c0.432-0.346,0.501-0.975,0.156-1.406
		C23.936,17.943,23.306,17.874,22.875,18.219z"></path><path d="M42.5,32h-16c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1S43.052,32,42.5,32z"></path><path d="M22.875,29.219l-4.301,3.441l-1.367-1.367c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2,2
		C17.987,34.901,18.243,35,18.5,35c0.22,0,0.441-0.072,0.624-0.219l5-4c0.432-0.346,0.501-0.975,0.156-1.406
		C23.936,28.943,23.306,28.874,22.875,29.219z"></path><path d="M42.5,43h-16c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1S43.052,43,42.5,43z"></path><path d="M22.875,40.219l-4.301,3.441l-1.367-1.367c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2,2
		C17.987,45.901,18.243,46,18.5,46c0.22,0,0.441-0.072,0.624-0.219l5-4c0.432-0.346,0.501-0.975,0.156-1.406
		C23.936,39.943,23.306,39.874,22.875,40.219z"></path>
</g></svg></span>
                <h5 class="u-custom-font u-text u-text-5">رسالتنا</h5>
                <p class="u-custom-font u-custom-item u-text u-text-6">&nbsp;أن تصبح الأكاديمية الخيار الأول للرياضيين والموهوبين وتنمية مهاراتهم ، والأرتقاء بإسم السودان في جميع المحافل الرياضية المحلية والإقليمية والدولية&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="skrollable skrollable-between u-align-center u-clearfix u-image u-shading u-section-3" src="" id="carousel_af92" data-image-width="450" data-image-height="295">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500">عن الأكاديمية</h2>
        <p class="u-custom-font u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="500">تعتبر أسباير سيتى والتي أسست في 2019م إحدى الأكاديميات الرياضية التي حققت بما تملكه من خبرات واسعه وأصداء إيجابية إرتقت الى مستوى تطلعات العملاء ، نركز في الأكاديمية على إكتساب المتدربين المهارات اللازمة في الأنشطة الرياضية المختلفة وصولا الى الإحتراف والعالمية</p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-2-base u-section-4" id="carousel_9b37">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="0">مناشط الأكاديمية</h2>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h4 class="u-custom-font u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">الكراتيه<br>
                </h4>
                <p class="u-text u-text-3"> وهي من أكثر المناشط المحببة لأولياء الأمور والجمهور للإبداع والمتعة التي ترافق كل عرض يقدمه اللاعبون </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h4 class="u-custom-font u-text u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">(الجمباز (بنين - بنات<br>
                </h4>
                <p class="u-text u-text-5">وهي من أكثر المناشط المحببة لأولياء الأمور والجماهير للإبداع والمتعة التي ترافق كل عرض يقدمه اللاعبون</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h4 class="u-custom-font u-text u-text-6" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">(كرة السلة (بنين - بنات<br>
                </h4>
                <p class="u-text u-text-7">وهي من المناشط التي توليها الأكاديمية إهتماما كبيرا وكان للفتيات فيها أثرا كبيرا قدمن فيه شغفا وتطورا كبيرا في المستوى وإستحقين الإشادة والتقدير من الجميع</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <h4 class="u-custom-font u-text u-text-8" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">كرة القدم<br>
                </h4>
                <p class="u-text u-text-9">وهي تعد المنشط الأساسي والأول للأكادمية بإعتبارها الرياضة الأساسية والمحبوبة في وطننا السودان ، وعمد الأكاديمية الى تقسيم اللاعبين بطريقيتين&nbsp;<br>أ<span style="font-weight: 700;">ولا : تقسيم حسب الفئات العمرية </span>
                  <br>صغار : من عمر 4 - 6 سنوات -&nbsp;<br>أشبال : من عمر 7 - 10 سنوات -<br>براعم : من عمر 11 - 14 سنه&nbsp; -<br>شباب : من عمر 19 - 21 سنه&nbsp; -<br>
                  <span style="font-weight: 700;">ثانيا : تقسيم حسب المستوى</span>
                  <br>حيث يتم تقسيم الفئات العمرية الى 3 مستويات وهي&nbsp;<br>(A , B , C)<br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_1f07">
      <div class="u-expanded-width u-palette-2-base u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-gutter-26 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-size-15 u-size-30-md">
              <div class="u-layout-col">
                <div class="u-container-style u-image u-layout-cell u-size-40 u-image-1" data-image-width="1080" data-image-height="692" data-animation-name="customAnimationIn" data-animation-duration="1500">
                  <div class="u-container-layout u-container-layout-1"></div>
                </div>
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-2">
                  <div class="u-container-layout u-container-layout-2"></div>
                </div>
              </div>
            </div>
            <div class="u-size-15 u-size-30-md">
              <div class="u-layout-col">
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-3">
                  <div class="u-container-layout u-container-layout-3"></div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-size-40 u-image-2" data-image-width="928" data-image-height="928" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                  <div class="u-container-layout u-container-layout-4"></div>
                </div>
              </div>
            </div>
            <div class="u-size-15 u-size-30-md">
              <div class="u-layout-col">
                <div class="u-container-style u-image u-layout-cell u-size-40 u-image-3" data-image-width="864" data-image-height="1080" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                  <div class="u-container-layout u-container-layout-5"></div>
                </div>
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-6">
                  <div class="u-container-layout u-container-layout-6"></div>
                </div>
              </div>
            </div>
            <div class="u-size-15 u-size-30-md">
              <div class="u-layout-col">
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-7">
                  <div class="u-container-layout u-container-layout-7"></div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-size-40 u-image-4" data-image-width="1080" data-image-height="719" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                  <div class="u-container-layout u-container-layout-8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-lightbox u-palette-2-base u-section-6" id="sec-db8d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">أبرز الإنجازات</h2>
        <div id="carousel-5989" data-interval="5000" data-u-ride="carousel" class="u-carousel u-carousel-duration-2000 u-carousel-left u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-5989" class="u-active u-black u-shape-circle" data-u-slide-to="0" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5989" class="u-black u-shape-circle" data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5989" class="u-black u-shape-circle" data-u-slide-to="2" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="3" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img src="{{asset('front/images/cup.png')}}" alt=""></span>
                <h4 class="u-custom-font u-text u-text-default u-text-2">بطولة مجلس الأكاديميات والمدارس السنية </h4>
                <p class="u-custom-font u-large-text u-text u-text-variant u-text-3">&nbsp;​ حصل فريق البراعم ِ (أ) علي&nbsp; البطولة في نسختها الثانية في إنجاز كبير وغير مسبوق بالفوز في جميع المباريات وعدم تلقى اي هدف منذ إنطلاق صافرة البطولة وحتى صافرة الختام </p>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-2"><span class="u-file-icon u-icon u-icon-2"><img src="{{asset('front/images/1152912.png')}}" alt=""></span>
                <h4 class="u-custom-font u-text u-text-default u-text-4"> بطولة مجلس الأكاديميات والمدارس السنية فئة الأشبال<br>
                </h4>
                <p class="u-custom-font u-large-text u-text u-text-variant u-text-5">حقق فريق الأشبال بالأكاديمية البطولة في نسختها الأولى لفئة الأشبال وأحتل المركز الأول بفوزين وتعادل</p>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-3"><span class="u-file-icon u-icon u-icon-3"><img src="{{asset('front/images/medal.png')}}" alt=""></span>
                <h4 class="u-custom-font u-text u-text-default u-text-6"> بطولة مجلس الأكاديميات والمدارس السنية فئة الناشئين<br>
                </h4>
                <p class="u-custom-font u-large-text u-text u-text-variant u-text-7">لم يحالف الحظ مجموعة الناشئين كثيرا ولكن قدمو أداءا مبهرا&nbsp; وأحتلو المركز الثاني في البطولة التنشطية للاعبين ، وتم إختيار اللاعب محمد عمار نجما أبرزا في البطولة</p>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-4"><span class="u-file-icon u-icon u-icon-4"><img src="{{asset('front/images/medal.png')}}" alt=""></span>
                <h4 class="u-align-center u-custom-font u-text u-text-default u-text-8"> بطولة مركز شباب الربيع للأكاديميات ومدارس الجمباز<br>
                </h4>
                <p class="u-align-center u-custom-font u-large-text u-text u-text-variant u-text-9">في أول مشاركة لفراشات الأكاديمية في التنافس في الجمباز حصدن الميدالية الفضية في البطولة وقدمن أداءا مذهلا نال إستحسان الجمهور ودعين للمشاركة في البطولة المقبلة في شهر يناير</p>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-spacing-10 u-carousel-control-1" href="#carousel-5989" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-spacing-10 u-carousel-control-2" href="#carousel-5989" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
      <style data-mode="XXL">@media (max-width: 0px) {

   .u-section-6 {
    background-image: none;
  }
  .u-section-6 .u-sheet-1 {
    min-height: 579px;
  }
  .u-section-6 .u-slider-1 {
    min-height: 480px;
    width: 763px;
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-6 .u-carousel-indicators-1 {
    position: absolute;
    bottom: 10px;
    width: auto;
    height: auto;
  }
  .u-section-6 .u-container-layout-1 {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 80px;
    padding-right: 80px;
  }
  .u-block-8919-18 {
    width: 83px;
    height: 83px;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
    background-position: 50% 50%;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-6 .u-text-3 {
    margin-top: 20px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
    font-size: 1.25rem;
  }
  .u-section-6 .u-text-2 {
    font-weight: 700;
    margin-top: 35px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-8919-17 {
    font-size: 1rem;
    font-weight: 400;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-6 .u-container-layout-2 {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 80px;
    padding-right: 80px;
  }
  .u-block-8919-21 {
    width: 83px;
    height: 83px;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
    background-position: 50% 50%;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-6 .u-text-5 {
    margin-top: 20px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
    font-size: 1.25rem;
  }
  .u-section-6 .u-text-4 {
    font-weight: 700;
    margin-top: 35px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-8919-24 {
    font-size: 1rem;
    font-weight: 400;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-6 .u-carousel-control-1 {
    width: 43px;
    height: 43px;
    background-image: none;
  }
  .u-section-6 .u-carousel-control-2 {
    width: 43px;
    height: 43px;
    background-image: none;
    left: auto;
    position: absolute;
    right: 0;
  }
}</style>
    </section>
    <section class="u-align-center u-black u-clearfix u-section-7" id="carousel_d6ce">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-text u-text-body-alt-color u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">تأملات المستقبل</h2>
        <p class="u-align-center u-custom-font u-large-text u-text u-text-body-alt-color u-text-variant u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">تسعى أكاديمية أسباير سيتى للرياضة أن تكون أبرز الأكاديميات الرياضية المتخصصة لصناعة جيل المستقبل في كافة المناشط الرياضية مثل : كرة القدم وكرة السلة والكراتيه والجمباز وغيرها من الأنشطة الرياضية المتعددة وأن تصبح الأكاديمية الخيار الأول للرياضيين والموهوبين والمساعدة في تطويرهم وتنمية مهاراتهم والإرتقاء بإسم السودان في جميع المحافل الرياضية في جميع المحافل الرياضية والمحلية والأقليمية والدولية</p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-8" id="sec-6a3b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-custom-font u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">معرض الصور</h2>
        <p class="u-custom-font u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000">تمتع بجولة شيقة عبر معرض صورنا&nbsp;</p>
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
          <div class="u-gallery-inner u-gallery-inner-1">
            <div class="u-effect-hover-zoom u-effect-over-left u-gallery-item">
              <div class="u-back-slide" data-image-width="1080" data-image-height="726">
                <img class="u-back-image u-expanded" src="
                {{asset('front/images/21.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-1">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-zoom u-effect-over-left u-gallery-item">
              <div class="u-back-slide" data-image-width="1080" data-image-height="740">
                <img class="u-back-image u-expanded" src="{{asset('front/images/5.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-2">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-zoom u-effect-over-left u-gallery-item">
              <div class="u-back-slide" data-image-width="1080" data-image-height="720">
                <img class="u-back-image u-expanded" src="{{asset('front/images/4.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-zoom u-effect-over-left u-gallery-item">
              <div class="u-back-slide" data-image-width="928" data-image-height="928">
                <img class="u-back-image u-expanded" src="{{asset('front/images/kar.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-4">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-zoom u-effect-over-left u-gallery-item">
              <div class="u-back-slide" data-image-width="1080" data-image-height="617">
                <img class="u-back-image u-expanded" src="{{asset('front/images/1.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-5">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-zoom u-effect-over-left u-gallery-item">
              <div class="u-back-slide" data-image-width="1080" data-image-height="573">
                <img class="u-back-image u-expanded" src="{{asset('front/images/31.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-6">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-zoom u-effect-over-left u-gallery-item u-gallery-item-7" data-image-width="1280" data-image-height="720">
              <div class="u-back-slide" data-image-width="1080" data-image-height="692">
                <img class="u-back-image u-expanded u-back-image-7" src="{{asset('front/images/jumbaz.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-7">
                <h3 class="u-gallery-heading" style="background-image: none;"></h3>
                <p class="u-gallery-text" style="background-image: none;"></p>
              </div>
            </div>
            <div class="u-effect-hover-zoom u-effect-over-left u-gallery-item u-gallery-item-8" data-image-width="1280" data-image-height="777">
              <div class="u-back-slide" data-image-width="1080" data-image-height="688">
                <img class="u-back-image u-expanded u-back-image-8" src="{{asset('front/images/7.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-8">
                <h3 class="u-gallery-heading" style="background-image: none;"></h3>
                <p class="u-gallery-text" style="background-image: none;"></p>
              </div>
            </div>
            <div class="u-effect-hover-zoom u-effect-over-left u-gallery-item u-gallery-item-9" data-image-width="2000" data-image-height="1333">
              <div class="u-back-slide" data-image-width="1080" data-image-height="701">
                <img class="u-back-image u-expanded" src="{{asset('front/images/6.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-9">
                <h3 class="u-gallery-heading" style="background-image: none;"></h3>
                <p class="u-gallery-text" style="background-image: none;"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-2-base u-section-9" id="sec-b2b0" >
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="X">طاقمنا التدريبي</h2>
        <div class="u-carousel u-expanded-width-sm u-expanded-width-xs u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-none u-gallery-1" id="carousel-a178" data-interval="5000" data-u-ride="carousel">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="X">
            <li data-u-target="#carousel-a178" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-a178" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-a178" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-a178" data-u-slide-to="3" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-a178" data-u-slide-to="4" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-a178" data-u-slide-to="5" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner u-gallery-inner u-gallery-inner-1" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1" data-image-width="1080" data-image-height="719">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{asset('front/images/IMG-20221127-WA0009.jpg')}}" alt="">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-1">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-2">
              <div class="u-back-slide" data-image-width="720" data-image-height="1080">
                <img class="u-back-image u-expanded u-back-image-2" src="{{asset('front/images/IMG-20221127-WA0004.jpg')}}" alt="">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-2">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-3">
              <div class="u-back-slide" data-image-width="720" data-image-height="1080">
                <img class="u-back-image u-expanded u-back-image-3" src="{{asset('front/images/IMG-20221127-WA0007.jpg')}}" alt="">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-4">
              <div class="u-back-slide" data-image-width="749" data-image-height="1080">
                <img class="u-back-image u-expanded u-back-image-4" 
                src="{{asset('front/images/IMG-20221127-WA0003.jpg')}}" alt="">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-4">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-5">
              <div class="u-back-slide" data-image-width="720" data-image-height="1080">
                <img class="u-back-image u-expanded u-back-image-5" src="{{asset('front/images/IMG-20221127-WA0006.jpg')}}" alt="">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-5">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-6" data-image-width="1080" data-image-height="720">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded u-back-image-6" 
                src="{{asset('front/images/IMG-20221127-WA0002.jpg')}}" alt="">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-6">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-a178" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-a178" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-image u-shading u-section-10" id="sec-8a78" data-image-width="1620" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-custom-font u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">تواصل معنا</h2>
        <p class="u-align-center u-custom-font u-text u-text-default u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000">نحن نرحب دائماً باستفساراتكم ومشاركتنا كل مقترحاتكم</p>
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-34 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-align-left u-form u-form-1">
                    <form dir="rtl" action="{{route('store-contact')}}" method="POST" class="" 
                    style="padding: 10px">
                        @csrf
                        {{ method_field('POST')}}
                      <div class="u-form-group u-form-name u-label-top">
                        <label for="name-319a" class="u-custom-font u-label u-text-body-alt-color u-label-1">الأسم</label>
                        <input type="text" placeholder="أدخل إسمك ثلاثي" id="name-319a" name="name" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-1" required="">
                      </div>
                      <div class="u-form-email u-form-group u-label-top">
                        <label for="email-319a" class="u-custom-font u-label u-text-body-alt-color u-label-2">البريد الإلكتروني</label>
                        <input type="email" placeholder="أدخل البريد الإلكتروني" id="email-319a" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-2" required="">
                      </div>
                      <div class="u-form-address u-form-group u-label-top u-form-group-3">
                        <label for="address-452f" class="u-custom-font u-label u-text-body-alt-color u-label-3">رقم الهاتف</label>
                        <input type="text" placeholder="أدخل رقم الهاتف" id="address-452f" name="phone" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-3" required="">
                      </div>
                      <div class="u-form-group u-form-message u-label-top">
                        <label for="message-319a" class="u-custom-font u-label u-text-body-alt-color u-label-4">الرسالة</label>
                        <textarea placeholder="أكنب رسالتك هنا .." rows="4" cols="50" id="message-319a" name="subject" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-4" required=""></textarea>
                      </div>
<button type="submit" id="send" class="u-active-white u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-hover-white u-palette-3-base u-radius-50 u-btn-1">إرسال</button>
@include('partials._session')
                      <div class="u-form-send-message u-form-send-success"> تم إرسال الرسالة بنجاح ، شكرا لتواصلك معنا </div>
                      <div class="u-form-send-error u-form-send-message">حدث خطأ ما ، يرجى المحاولة لاحقا </div>
                      <input type="hidden" value="" name="recaptchaResponse">
                      <input type="hidden" name="formServices" value="1779fdcc18e052f622c555f9058c3acb">
                    </form>
                  </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-26 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-align-right u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                      <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                          <h5 class="u-align-right u-custom-font u-custom-item u-text u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="0">إتصل بنا&nbsp;<span class="u-file-icon u-icon u-text-palette-3-base u-icon-1"><img src="{{asset('front/images/1082334-3da3ecc0.png')}}" alt=""></span>
                          </h5>
                          <p class="u-align-right u-custom-font u-custom-item u-text u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1000">0114997987 (فرع الخرطوم)<br>0116990668 (فرع بحري)
                          </p>
                        </div>
                      </div>
                      <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-container-layout-4">
                          <h5 class="u-align-right u-custom-font u-custom-item u-text u-text-5" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">موقعنا&nbsp;<span class="u-file-icon u-icon u-text-palette-3-base u-icon-2"><img 
                            src="{{asset('front/images/205d33fb-71c4-40dc-a07f-7a1273e85973-a71d61bb.png')}}" alt=""></span>
                          </h5>
                          <p class="u-align-right u-custom-font u-custom-item u-text u-text-6" data-animation-name="customAnimationIn" data-animation-duration="1000">&nbsp;الخرطوم - شارع عبيد ختم - معهد تدريب الشرطة<br>بحري - غرب سجن كوبر - ملعب سلاح الإشارة
                          </p>
                        </div>
                      </div>
                      <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-container-layout-5">
                          <h5 class="u-align-right u-custom-font u-custom-item u-text u-text-7" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">البريد الإلكتروني&nbsp;<span class="u-file-icon u-icon u-text-palette-2-base u-icon-3"><img 
                            src="{{asset('front/images/561127-d98ec699.png')}}" alt=""></span>
                          </h5>
                          <p class="u-align-right u-custom-font u-custom-item u-text u-text-8" data-animation-name="customAnimationIn" data-animation-duration="1000">info@aspire-city.com</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-11" data-image-width="1980" data-image-height="806" id="carousel_fb76">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h5 class="u-align-center u-custom-font u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">نسعد بتواصلكم معنا عبر وسائل التواصل الإجتماعي الموجوده أدناه </h5>
        <div class="u-social-icons u-spacing-20 u-social-icons-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
          <a class="u-social-url" title="facebook"  href="https://ar-ar.facebook.com/aspirecitysports/"><span class="u-icon u-social-facebook u-social-icon u-text-white"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 97.75 97.75" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fc9a"></use></svg><svg class="u-svg-content" viewBox="0 0 97.75 97.75" x="0px" y="0px" id="svg-fc9a" style="enable-background:new 0 0 97.75 97.75;"><g><path d="M48.875,0C21.882,0,0,21.882,0,48.875S21.882,97.75,48.875,97.75S97.75,75.868,97.75,48.875S75.868,0,48.875,0z    M67.521,24.89l-6.76,0.003c-5.301,0-6.326,2.519-6.326,6.215v8.15h12.641L67.07,52.023H54.436v32.758H41.251V52.023H30.229V39.258   h11.022v-9.414c0-10.925,6.675-16.875,16.42-16.875l9.851,0.015V24.89L67.521,24.89z"></path>
</g></svg></span>
          </a>
          <a class="u-social-url" title="twitter"  href="{{route('welcome')}}"><span class="u-icon u-social-icon u-social-twitter u-text-white"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fdce"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-fdce"><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm116.886719 199.601562c.113281 2.519532.167969 5.050782.167969 7.59375 0 77.644532-59.101563 167.179688-167.183594 167.183594h.003906-.003906c-33.183594 0-64.0625-9.726562-90.066406-26.394531 4.597656.542969 9.277343.8125 14.015624.8125 27.53125 0 52.867188-9.390625 72.980469-25.152344-25.722656-.476562-47.410156-17.464843-54.894531-40.8125 3.582031.6875 7.265625 1.0625 11.042969 1.0625 5.363281 0 10.558593-.722656 15.496093-2.070312-26.886718-5.382813-47.140624-29.144531-47.140624-57.597657 0-.265624 0-.503906.007812-.75 7.917969 4.402344 16.972656 7.050782 26.613281 7.347657-15.777343-10.527344-26.148437-28.523438-26.148437-48.910157 0-10.765624 2.910156-20.851562 7.957031-29.535156 28.976563 35.554688 72.28125 58.9375 121.117187 61.394532-1.007812-4.304688-1.527343-8.789063-1.527343-13.398438 0-32.4375 26.316406-58.753906 58.765625-58.753906 16.902344 0 32.167968 7.144531 42.890625 18.566406 13.386719-2.640625 25.957031-7.53125 37.3125-14.261719-4.394531 13.714844-13.707031 25.222657-25.839844 32.5 11.886719-1.421875 23.214844-4.574219 33.742187-9.253906-7.863281 11.785156-17.835937 22.136719-29.308593 30.429687zm0 0"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram"  href="https://www.instagram.com/aspirecityacademy/"><span class="u-icon u-social-icon u-social-instagram u-text-white"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4885"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4885"><path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0"></path><path d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0"></path><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0"></path></svg></span>
          </a>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-44c2"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-small-text u-text u-text-variant u-text-1">جميع الحقوق محفوظة لأكاديمية أسباير سيتى 2022 </p>
      </div></footer>
  <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px; padding: 15px;" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  
  <script type="text/javascript">
  use = "strict";

  $(document).on('click', '#send', function(e) {

    e.preventDefault();  

    console.log('Hlello');
  }
</script>

</body>
</html>