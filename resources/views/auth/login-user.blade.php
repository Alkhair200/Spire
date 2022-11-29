<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="{{asset('front/css/nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('front/css/Login.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('front/js/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('front/js/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900">
    

<style type="text/css">

.u-body{
  font-size: 16px !important;
}
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
		"logo": {{asset('front/images/IMG-20221026-WA0000-removebg-preview1.png')}}
}</script>
    <meta name="theme-color" content="#95ccc3">
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-container-align-right u-header u-palette-2-base u-header" id="sec-cdb9"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
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
                <ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-text-active-palette-2-base u-unstyled u-nav-2">


<li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('blog')}}>أخر الأخبار</a>
</li>

<li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('welcome')}}" >الرئيسية</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-e356" data-image-width="1527" data-image-height="1080" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-1" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">
          <div class="u-container-layout u-container-layout-1"><span class="u-align-center u-black u-icon u-icon-circle u-text-palette-2-base u-icon-1" data-animation-name="customAnimationIn" data-animation-duration="1000"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-14ee"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-14ee" style="enable-background:new 0 0 60 60;"><path d="M48.014,42.889l-9.553-4.776C37.56,37.662,37,36.756,37,35.748v-3.381c0.229-0.28,0.47-0.599,0.719-0.951
	c1.239-1.75,2.232-3.698,2.954-5.799C42.084,24.97,43,23.575,43,22v-4c0-0.963-0.36-1.896-1-2.625v-5.319
	c0.056-0.55,0.276-3.824-2.092-6.525C37.854,1.188,34.521,0,30,0s-7.854,1.188-9.908,3.53C17.724,6.231,17.944,9.506,18,10.056
	v5.319c-0.64,0.729-1,1.662-1,2.625v4c0,1.217,0.553,2.352,1.497,3.109c0.916,3.627,2.833,6.36,3.503,7.237v3.309
	c0,0.968-0.528,1.856-1.377,2.32l-8.921,4.866C8.801,44.424,7,47.458,7,50.762V54c0,4.746,15.045,6,23,6s23-1.254,23-6v-3.043
	C53,47.519,51.089,44.427,48.014,42.889z M51,54c0,1.357-7.412,4-21,4S9,55.357,9,54v-3.238c0-2.571,1.402-4.934,3.659-6.164
	l8.921-4.866C23.073,38.917,24,37.354,24,35.655v-4.019l-0.233-0.278c-0.024-0.029-2.475-2.994-3.41-7.065l-0.091-0.396l-0.341-0.22
	C19.346,23.303,19,22.676,19,22v-4c0-0.561,0.238-1.084,0.67-1.475L20,16.228V10l-0.009-0.131c-0.003-0.027-0.343-2.799,1.605-5.021
	C23.253,2.958,26.081,2,30,2c3.905,0,6.727,0.951,8.386,2.828c1.947,2.201,1.625,5.017,1.623,5.041L40,16.228l0.33,0.298
	C40.762,16.916,41,17.439,41,18v4c0,0.873-0.572,1.637-1.422,1.899l-0.498,0.153l-0.16,0.495c-0.669,2.081-1.622,4.003-2.834,5.713
	c-0.297,0.421-0.586,0.794-0.837,1.079L35,31.623v4.125c0,1.77,0.983,3.361,2.566,4.153l9.553,4.776
	C49.513,45.874,51,48.28,51,50.957V54z"></path></svg></span>
            <h3 class="u-align-center u-custom-font u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">مرحبا بعودتك</h3>
            <div class="u-form u-login-control u-white u-form-1">
              
              <form method="POST" action="{{ route('login') }}" class="u-clearfix u-form-custom-backend u-form-spacing-20 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 30px;" dir="rtl">
              @csrf


                <div class="u-form-group u-form-name u-label-top">
                  <label for="username-a30d" class="u-custom-font u-label u-label-1">البريد الإلكتروني</label>

                  <input type="text" id="username-a30d" name="email"
                  value="{{ old('email') }}"
                   class="u-custom-font u-grey-5 u-input u-input-rectangle u-input-1 form-control @error('email') is-invalid @enderror"  
                   required="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#f03">{{ $message }}</strong>
                                    </span>
                                @enderror                   
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-custom-font u-label u-label-2">كلمة المرور</label>
                  <input type="password" id="password" id="password-a30d" name="password" class="u-custom-font u-grey-5 u-input u-input-rectangle u-input-2 form-control @error('password') is-invalid @enderror" required="">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#f03">{{ $message }}</strong>
                                    </span>
                                @enderror                  
                </div>
                <div class="u-form-checkbox u-form-group u-label-top">
                  <input type="checkbox" id="checkbox-a30d" name="remember" value="On">
                  <label for="checkbox-a30d" class="u-custom-font u-label u-label-3">تذكرني</label>
                </div>
                <div class="u-align-right u-form-group u-form-submit u-label-top">
                  <a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-custom-font u-text-palette-2-base u-btn-1">تسجيل الدخول</a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-44c2"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-small-text u-text u-text-variant u-text-1">جميع الحقوق محفوظة لأكاديمية أسباير سيتى 2022 </p>
      </div></footer>
    
  
</body></html>