@extends('master.master')

@section('content')
<section class="u-align-center u-clearfix u-grey-10 u-section-3" id="carousel_987a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-palette-2-base u-shape u-shape-circle u-shape-1 animated fadeOutRight" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-direction="Right" data-animation-delay="0" style="will-change: transform, opacity; animation-duration: 1000ms;"></div>
        <img class="u-image u-image-1 animated fadeOutDown" src="{{url('assets/images/fgfg.jpg')}}" data-image-width="974" data-image-height="650" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-direction="Up" data-animation-delay="250" style="will-change: transform, opacity; animation-duration: 1000ms;">
        <div class="u-align-left u-container-style u-group u-white u-group-1 animated fadeOutLeft" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-direction="Left" data-animation-delay="250" style="will-change: transform, opacity; animation-duration: 1000ms;">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-text u-text-default u-text-1"> breakfast</h2>
            <p class="u-text u-text-2">Ut enim ad minim veniam, quis 
nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="{{route('home')}}" class="u-active-grey-90 u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-hover-grey-90 u-palette-2-base u-radius-50 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1">Learn more</a>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-image u-valign-middle u-section-8" id="carousel_0e7a">
      <div id="carousel-5989" data-interval="5000" data-u-ride="carousel" class="u-carousel u-slider u-slider-1">
        <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
          <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="0" style="height: 10px; width: 10px;"></li>
          <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle u-active" data-u-slide-to="1" style="height: 10px; width: 10px;"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">
          <div class="u-carousel-item u-container-style u-slide u-white u-carousel-item-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1"><span class="u-icon u-icon-circle u-text-palette-2-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.001 512.001" style=""><use xlink:href="#svg-7d67"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.001 512.001" x="0px" y="0px" id="svg-7d67" style="enable-background:new 0 0 512.001 512.001;"><g><g><path d="M509.026,2.885c-2.732-2.696-6.771-3.596-10.384-2.302L83.289,148.68c-14.43-8.824-32.733-10.89-49.52-3.939    C5.904,156.284-7.377,188.345,4.165,216.212c27.219,65.708,66.518,124.525,116.809,174.816s109.107,89.591,174.816,116.809    c6.824,2.826,13.897,4.164,20.861,4.164c21.475-0.001,41.894-12.726,50.609-33.769c5.864-14.158,5.31-29.396-0.299-42.48    L511.462,13.238C512.704,9.606,511.758,5.582,509.026,2.885z M146.179,147.489l44.02-15.694    c5.168,5.506,7.687,13.086,6.678,20.752c-0.89,6.75-4.354,12.751-9.755,16.896c-5.401,4.145-12.089,5.936-18.844,5.049    c-6.749-0.889-12.749-4.352-16.894-9.754C147.565,159.761,145.748,153.689,146.179,147.489z M348.782,470.577    c-7.322,17.678-27.664,26.103-45.338,18.779c-128.04-53.035-227.763-152.759-280.8-280.799c-3.547-8.563-3.547-17.994,0-26.558    c3.547-8.563,10.216-15.232,18.779-18.779s17.995-3.547,26.558,0s15.232,10.216,18.779,18.779    c22.701,54.807,55.481,103.865,97.429,145.813c41.948,41.948,91.006,74.727,145.813,97.429    C347.68,432.562,356.105,452.901,348.782,470.577z M437.625,167.329c-0.905-0.022-1.811-0.074-2.715-0.192    c-6.749-0.889-12.749-4.353-16.893-9.754c-4.145-5.401-5.938-12.094-5.05-18.843c1.835-13.934,14.66-23.776,28.599-21.944    c4.3,0.566,8.337,2.234,11.78,4.771L437.625,167.329z M459.993,101.923c-4.872-2.653-10.225-4.42-15.817-5.156    c-24.871-3.283-47.764,14.294-51.038,39.163c-1.586,12.046,1.614,23.989,9.011,33.629c7.125,9.285,17.325,15.351,28.831,17.201    l-19.876,58.119l-22.858-17.54c-4.381-3.36-10.66-2.536-14.021,1.846c-3.362,4.382-2.535,10.659,1.846,14.021l28.205,21.642    l-51.694,151.155c-4.336-3.77-9.329-6.924-14.922-9.241C231.68,362.863,149.14,280.323,105.243,174.345    c-1.526-3.686-3.422-7.108-5.609-10.26l26.779-9.548c0.935,8.068,4.032,15.764,9.105,22.375    c7.396,9.64,18.105,15.822,30.151,17.407c2.018,0.266,4.03,0.398,6.032,0.398c9.948,0,19.572-3.25,27.597-9.407    c9.641-7.398,15.822-18.105,17.409-30.153c1.423-10.815-1.101-21.527-6.768-30.401l124.307-44.322l4.711,11.374    c1.596,3.851,5.319,6.176,9.243,6.176c1.275,0,2.571-0.246,3.823-0.764c5.102-2.113,7.525-7.964,5.412-13.066l-4.326-10.445    l132.719-47.322L459.993,101.923z"></path>
</g>
</g><g><g><path d="M108,268.276c-0.03-0.047-0.113-0.174-0.145-0.22c-3.062-4.593-9.259-5.826-13.854-2.767    c-4.587,3.054-5.831,9.253-2.795,13.848c1.915,2.942,5.119,4.547,8.392,4.547c1.852,0,3.725-0.514,5.397-1.589    C109.641,279.108,110.986,272.921,108,268.276z"></path>
</g>
</g><g><g><path d="M92.791,243.433c-9.745-17.086-18.505-34.968-26.036-53.147c-2.113-5.104-7.966-7.524-13.065-5.411    c-5.103,2.113-7.525,7.963-5.411,13.065c7.85,18.951,16.982,37.591,27.14,55.401c1.845,3.234,5.221,5.048,8.695,5.048    c1.68,0,3.383-0.424,4.945-1.315C93.856,254.337,95.528,248.23,92.791,243.433z"></path>
</g>
</g><g><g><path d="M312.933,127.987c-1.982-0.262-3.995-0.394-5.983-0.394c-22.717,0-42.087,17.005-45.055,39.555    c-3.274,24.868,14.293,47.764,39.161,51.038c1.982,0.262,3.995,0.394,5.983,0.394c22.716,0,42.086-17.005,45.055-39.557    C355.367,154.156,337.8,131.261,312.933,127.987z M332.266,176.413c-1.664,12.637-12.509,22.166-25.227,22.166    c-1.118,0-2.253-0.074-3.372-0.222c-13.935-1.835-23.777-14.664-21.943-28.599c1.664-12.636,12.508-22.164,25.226-22.164    c1.118,0,2.253,0.074,3.372,0.222C324.256,149.652,334.1,162.48,332.266,176.413z"></path>
</g>
</g><g><g><path d="M310.331,252.374c-1.983-0.262-3.995-0.394-5.983-0.394c-22.717,0-42.087,17.005-45.055,39.556    c-1.587,12.047,1.613,23.989,9.01,33.63c7.396,9.64,18.104,15.822,30.151,17.409c1.981,0.261,3.993,0.392,5.98,0.392    c22.717,0,42.088-17.005,45.057-39.557C352.766,278.544,335.198,255.65,310.331,252.374z M329.664,300.801    c-1.664,12.637-12.51,22.166-25.228,22.166c-1.117,0-2.252-0.075-3.37-0.222c-6.75-0.89-12.75-4.354-16.895-9.755    c-4.145-5.401-5.938-12.093-5.049-18.844c1.664-12.636,12.509-22.165,25.226-22.165c1.118,0,2.253,0.074,3.372,0.222    C321.653,274.038,331.497,286.867,329.664,300.801z"></path>
</g>
</g><g><g><path d="M244.375,210.946l-30.736-4.047c-5.473-0.727-10.499,3.133-11.22,8.608c-0.722,5.476,3.133,10.499,8.608,11.22    l30.736,4.047c0.443,0.059,0.883,0.087,1.318,0.087c4.941,0,9.239-3.663,9.901-8.695    C253.705,216.691,249.851,211.667,244.375,210.946z"></path>
</g>
</g><g><g><path d="M228.79,284.743l-2.714-20.624c-0.721-5.476-5.743-9.332-11.219-8.609c-5.476,0.721-9.33,5.743-8.609,11.219l2.715,20.624    c0.662,5.033,4.959,8.696,9.901,8.696c0.435,0,0.875-0.028,1.317-0.087C225.657,295.241,229.511,290.219,228.79,284.743z"></path>
</g>
</g></svg></span>
              <h4 class="u-align-center u-text u-text-default u-text-1">Pizza &amp; Roll<br>
              </h4>
              <p class="u-align-center u-large-text u-text u-text-variant u-text-2">Lorem
 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
veniam, quis nostrud exercitation ullamco laboris</p>
              <a href="{{route('menu')}}" class="u-border-2 u-border-active-black u-border-hover-palette-2-base u-border-palette-2-base u-btn u-btn-round u-button-style u-none u-radius-50 u-text-body-color u-btn-1">view menu</a>
            </div>
          </div>
          <div class="u-carousel-item u-container-style u-slide u-white u-carousel-item-2 u-active">
            <div class="u-container-layout u-valign-middle u-container-layout-2"><span class="u-file-icon u-icon u-icon-rectangle u-text-palette-2-base u-icon-2"><img src="data:image/png;base64,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" alt=""></span>
              <h4 class="u-align-center u-text u-text-default u-text-3">Burgers<br>
              </h4>
              <p class="u-align-center u-large-text u-text u-text-variant u-text-4">Lorem
 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
veniam, quis nostrud exercitation ullamco laboris</p>
              <a href="{{route('menu')}}" class="u-border-2 u-border-active-black u-border-hover-palette-2-base u-border-palette-2-base u-btn u-btn-round u-button-style u-none u-radius-50 u-text-body-color u-btn-2">view menu</a>
            </div>
          </div>
        </div>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-5 u-hidden-xs u-spacing-13 u-text-grey-40 u-carousel-control-1" href="#carousel-5989" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
        </a>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-5 u-hidden-xs u-spacing-13 u-text-grey-40 u-carousel-control-2" href="#carousel-5989" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
          </span>
        </a>
      </div>
      <p class="u-align-left u-text u-text-body-alt-color u-text-5">Image from <a href="https://www.freepik.com/photos/food" class="u-border-2 u-border-palette-2-base u-btn u-button-style u-none u-text-body-alt-color u-btn-3">Freepik</a>
      </p>
    </section>
@endsection