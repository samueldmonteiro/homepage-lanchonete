
<!DOCTYPE html>
<html style="font-size: 16px;" class="u-responsive-xl"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! $head ?? "" !!}
    
    <script class="u-script" type="text/javascript" src="{{mix('assets/js/vendor.js')}}" defer="defer"></script>
    <meta name="generator" content="Nicepage 4.2.12, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="{{mix('assets/css/vendor.css')}}">
    <link id="u-page-google-font" rel="stylesheet" href="{{mix('assets/css/style.css')}}">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "https://website67979.nicepage.io/Burgers.html",
		"logo": "//capp.nicepage.com/46cad34de674d1582720bead9197c3f30678a42c/images/default-logo.png"
}</script>
    <meta name="theme-color" content="#18922c">
    <meta property="og:title" content="Burgers">
    <meta property="og:type" content="website">
    <link rel="canonical" href="https://website67979.nicepage.io/Burgers.html">
  
</head>
  <body class="u-body">
<header class="u-clearfix u-header u-header" id="sec-92d8"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    
        <a href="{{route('home')}}" class="u-image u-logo u-image-1">
          <img src="{{url('assets/images/default-logo.png')}}" class="u-logo-image u-logo-image-1">
        </a>
        
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1 u-enable-responsive" data-responsive-from="XL">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;" wfd-invisible="true">
            <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              
              <svg viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
              <li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90 active" href="{{route('home')}}" data-page-id="91384" style="padding: 10px 20px;">Home</a></li>

              <li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90 active" href="{{route('menu')}}" data-page-id="91384" style="padding: 10px 20px;">Menu</a></li>

              <li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90 active" href="{{route('about')}}" data-page-id="91384" style="padding: 10px 20px;">Sobre</a></li>

              <li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90 active" href="{{route('delivery')}}" data-page-id="91384" style="padding: 10px 20px;">Entrega</a></li>
            </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse" wfd-invisible="true">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link active" href="{{route('home')}}" data-page-id="91384" style="padding: 10px 20px;">Home</a></li>

              <li class="u-nav-item"><a class="u-button-style u-nav-link active" href="{{route('menu')}}" data-page-id="91384" style="padding: 10px 20px;">Menu</a></li>

              <li class="u-nav-item"><a class="u-button-style u-nav-link active" href="{{route('about')}}" data-page-id="91384" style="padding: 10px 20px;">Sobre</a></li>

              <li class="u-nav-item"><a class="u-button-style u-nav-link active" href="{{route('delivery')}}" data-page-id="91384" style="padding: 10px 20px;">Entrega</a></li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70" wfd-invisible="true"></div>
          </div>
        <style class="offcanvas-style">            .u-offcanvas .u-sidenav { flex-basis: 250px !important; }            .u-offcanvas:not(.u-menu-open-right) .u-sidenav { margin-left: -250px; }            .u-offcanvas.u-menu-open-right .u-sidenav { margin-right: -250px; }            @keyframes menu-shift-left    { from { left: 0;        } to { left: 250px;  } }            @keyframes menu-unshift-left  { from { left: 250px;  } to { left: 0;        } }            @keyframes menu-shift-right   { from { right: 0;       } to { right: 250px; } }            @keyframes menu-unshift-right { from { right: 250px; } to { right: 0;       } }            </style></nav>
      </div></header>
    
    
    @yield('content')

    <section class="u-clearfix u-expanded-width-xl u-grey-90 u-section-10" id="carousel_3243">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <div class="u-expanded-height-lg u-expanded-height-xl u-palette-2-base u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-clearfix u-expanded-width u-gutter-22 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-25-sm u-size-25-xl u-size-25-xs u-size-26-lg u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-image u-layout-cell u-size-60 u-image-1" data-image-width="968" data-image-height="700">
                    <div class="u-container-layout u-container-layout-1"></div>
                  </div>
                </div>
              </div>
              <div class="u-size-34-lg u-size-35-sm u-size-35-xl u-size-35-xs u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-size-40">
                    <div class="u-layout-row">
                      <div class="u-align-center u-container-style u-layout-cell u-size-60 u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                          <h2 class="u-text u-text-default u-text-1">Subscribe</h2>
                          <h6 class="u-text u-text-2"> to the newsletters and content update</h6>
                          <div class="u-expanded-width u-form u-form-1">
                            <form action="https://nicepage.com/editor/Forms/Process" method="POST" class="u-clearfix u-form-horizontal u-form-spacing-24 u-inner-form" style="padding: 24px;" source="email" name="form">
                              <input type="hidden" id="siteId" name="siteId" value="67979">
                              <input type="hidden" id="pageId" name="pageId" value="91384">
                              <div class="u-form-email u-form-group">
                                <label for="email-3b9a" class="u-form-control-hidden u-label">Email</label>
                                <input type="email" placeholder="Enter a valid email address" id="email-3b9a" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-light-3 u-input u-input-rectangle u-input-1" required="">
                              </div>
                              <div class="u-align-left u-form-group u-form-submit">
                                <a href="#" class="u-active-white u-border-none u-btn u-btn-submit u-button-style u-hover-white u-palette-2-base u-text-active-black u-text-hover-black u-btn-1">Submit</a>
                                <input type="submit" value="submit" class="u-form-control-hidden">
                              </div>
                              <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                              <input type="hidden" value="" name="recaptchaResponse">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-size-20">
                    <div class="u-layout-row">
                      <div class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-container-style u-layout-cell u-size-30 u-layout-cell-3">
                        <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-valign-middle-xl u-container-layout-3">
                          <h2 class="u-text u-text-3">location</h2>
                          <p class="u-text u-text-4">28 Jackson Blvd Ste 1020 Chicago <br>IL 60604-2340 
                          </p>
                        </div>
                      </div>
                      <div class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-container-style u-layout-cell u-size-30 u-layout-cell-4">
                        <div class="u-container-layout u-valign-middle u-container-layout-4">
                          <h2 class="u-text u-text-5">follow us</h2>
                          <div class="u-social-icons u-spacing-20 u-social-icons-1">
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style=""><use xlink:href="#svg-bae3"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-bae3" style="enable-background:new 0 0 112.2 112.2;"><path d="M56.1,0C25.1,0,0,25.1,0,56.1c0,31,25.1,56.1,56.1,56.1c31,0,56.1-25.1,56.1-56.1C112.2,25.1,87.1,0,56.1,0z M71.6,34.3h-8.2c-1.3,0-3.2,0.7-3.2,3.5v7.6h11.3l-1.3,12.9h-10V95H45V58.3h-7.2V45.4H45v-8.3c0-6,2.8-15.3,15.3-15.3l11.2,0V34.3z "></path></svg>
                        
                        
                      </span>
                            </a>
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style=""><use xlink:href="#svg-7dc9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-7dc9" style="enable-background:new 0 0 112.2 112.2;"><path d="M56.1,0C25.1,0,0,25.1,0,56.1s25.1,56.1,56.1,56.1s56.1-25.1,56.1-56.1S87.1,0,56.1,0z M83.8,47.3 c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2c-7.6,0-14.6-2.2-20.6-6c1,0.1,2.1,0.2,3.2,0.2c6.3,0,12.1-2.1,16.7-5.7 c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1c0-0.1,0-0.1,0-0.2 c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14c-0.2-1-0.3-2-0.3-3.1 c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4c2.7-0.3,5.3-1,7.7-2.1 C88.7,43,86.4,45.4,83.8,47.3z"></path></svg>
                        
                        
                      </span>
                            </a>
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style=""><use xlink:href="#svg-a531"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-a531" style="enable-background:new 0 0 112.2 112.2;"><path d="M56.1,0C25.1,0,0,25.1,0,56.1c0,31,25.1,56.1,56.1,56.1c31,0,56.1-25.1,56.1-56.1C112.2,25.1,87.1,0,56.1,0z M90.6,73.4c0,9.6-7.8,17.5-17.5,17.5H38.6c-9.6,0-17.5-7.9-17.5-17.6V38.8c0-9.6,7.8-17.5,17.5-17.5h34.5c9.6,0,17.5,7.8,17.5,17.5 V73.4z"></path><path d="M73.1,28.9H38.6c-5.4,0-9.9,4.4-9.9,9.9v34.5c0,5.4,4.4,9.9,9.9,9.9h34.5c5.4,0,9.9-4.4,9.9-9.9V38.8 C83,33.4,78.6,28.9,73.1,28.9z M55.9,74C46,74,38,66,38,56.1c0-9.9,8-17.9,17.9-17.9c9.9,0,17.9,8,17.9,17.9 C73.8,66,65.8,74,55.9,74z M74.3,41.9c-2.3,0-4.2-1.9-4.2-4.2s1.9-4.2,4.2-4.2c2.3,0,4.2,1.9,4.2,4.2S76.6,41.9,74.3,41.9z"></path><path d="M55.9,45.8c-5.7,0-10.4,4.6-10.3,10.3c0,5.7,4.6,10.3,10.3,10.3s10.3-4.6,10.3-10.3 C66.2,50.4,61.6,45.8,55.9,45.8z"></path></svg>
                        
                        
                      </span>
                            </a>
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-google u-social-icon u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style=""><use xlink:href="#svg-aeb5"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-aeb5" style="enable-background:new 0 0 112.2 112.2;"><path d="M56.1,0C25.1,0,0,25.1,0,56.1s25.1,56.1,56.1,56.1c31,0,56.1-25.1,56.1-56.1S87.1,0,56.1,0z M60.1,73.8 c-5.7,7.4-16.3,9.5-24.9,6.6c-9.1-3-15.8-12.2-15.6-21.9c-0.5-11.9,10-22.9,21.9-23.1c6.1-0.5,12,1.8,16.6,5.7 c-1.9,2.1-3.8,4.1-5.9,6.1c-4.1-2.5-8.9-4.3-13.7-2.7c-7.6,2.2-12.3,11.2-9.4,18.7c2.3,7.8,11.8,12.1,19.3,8.8 c3.9-1.4,6.4-4.9,7.5-8.8c-4.4-0.1-8.8,0-13.3-0.2c0-2.6,0-5.2,0-7.9c7.4,0,14.7,0,22.1,0C65.2,61.8,64.2,68.7,60.1,73.8z M92.3,61.9c-2.2,0-4.4,0-6.6,0c0,2.2,0,4.4,0,6.6c-2.2,0-4.4,0-6.6,0c0-2.2,0-4.4,0-6.6c-2.2,0-4.4,0-6.6,0c0-2.2,0-4.4,0-6.6 c2.2,0,4.4,0,6.6,0c0-2.2,0-4.4,0.1-6.6c2.2,0,4.4,0,6.6,0c0,2.2,0,4.4,0,6.6c2.2,0,4.4,0,6.6,0C92.3,57.5,92.3,59.7,92.3,61.9z"></path></svg>
                        
                        
                      </span>
                            </a>
                          </div>
                          <p class="u-text u-text-6">Image from <a href="https://www.freepik.com/photos/woman" class="u-active-none u-border-2 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-white u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2">Freepik</a>
                          </p>
                          <p class="u-text u-text-7">©2020 Privacy policy</p>
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
 