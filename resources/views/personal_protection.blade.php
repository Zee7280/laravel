<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Categories Layout-1</title>
  <meta content="Templines" name="author">
  <meta content="Antek" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <meta name="format-detection" content="telephone=no">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/template/img/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/template/img/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/template/img/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('public/template/img/favicon/site.webmanifest') }}">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#222222">
  <link rel="stylesheet" href="{{ asset('public/template/css/libs.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/template/css/main.css') }}">
</head>

<body class="page-categories">
    
       <!-- Loader-->
      <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
      <!-- Loader end-->
    
  <div class="page-wrapper">
   @include('header')

    <main class="page-main">
      <div class="page-head">
        <div class="page-head__bg" style="background-image: url({{ asset('public/template/img/bg/bg_categories.jpg') }}">
          <div class="page-head__content" data-uk-parallax="y: 0, 100">
            <div class="uk-container">
              <div class="header-icons"><span></span><span></span><span></span></div>
              <div class="page-head__title"> Protective Equipment</div>
              <div class="page-head__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li><span>Protective Equipment</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
            <div>
              <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="https://www.mcrsafety.com/en/ppe/eye-and-face-protection" tabindex="0">
                  <div class="category-item__media"><img src="{{ asset('public/template/img/category-1.jpg') }}" alt="Excavators" />
                    <div class="uk-transition-fade">
                      <div class="uk-overlay-primary uk-position-cover"></div>
                      <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                    </div>
                  </div>
                  <div class="category-item__title"> <span>Eyes</span><br>
                   <!--<p style="font-size:16px;font-weight:200" >CSA, Fog Resistant, UV Index, Ballistic, Disposable, or Lifestyle. Protect your eyes.</p>-->
                  </div>
                 
                </a></div>
            </div>
            <div>
              <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="https://www.moldex.com/product-category/hearing-protection/" tabindex="0">
                  <div class="category-item__media"><img src="{{ asset('public/template/img/category-2.jpg') }}" alt="Scissor Lift" />
                    <div class="uk-transition-fade">
                      <div class="uk-overlay-primary uk-position-cover"></div>
                      <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                    </div>
                  </div>
                  <div class="category-item__title"> <span>Ears</span></div>
                </a></div>
            </div>
            <div>
              <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="https://www.mcrsafety.com/ppe/foot-protection" tabindex="0">
                  <div class="category-item__media"><img src="{{ asset('public/template/img/category-3.jpg') }}" alt="Chemical / Fire Suits" />
                    <div class="uk-transition-fade">
                      <div class="uk-overlay-primary uk-position-cover"></div>
                      <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                    </div>
                  </div>
                  <div class="category-item__title"> <span>Chemical / Fire Suits</span></div>
                </a></div>
            </div>
            <div>
              <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="#" tabindex="0">
                  <div class="category-item__media"><img src="{{ asset('public/template/img/category-4.jpg') }}" alt="Head" />
                    <div class="uk-transition-fade">
                      <div class="uk-overlay-primary uk-position-cover"></div>
                      <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                    </div>
                  </div>
                  <div class="category-item__title"> <span>Head</span></div>
                </a></div>
            </div>
            <div>
              <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="https://www.mcrsafety.com/ppe/chemical-protection/chemical-suits" tabindex="0">
                  <div class="category-item__media"><img src="{{ asset('public/template/img/category-5.jpg') }}" alt="Compaction Roller" />
                    <div class="uk-transition-fade">
                      <div class="uk-overlay-primary uk-position-cover"></div>
                      <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                    </div>
                  </div>
                  <div class="category-item__title"> <span>Compaction Roller</span></div>
                </a></div>
            </div>
            <!--<div>-->
            <!--  <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-rental.html" tabindex="0">-->
            <!--      <div class="category-item__media"><img src="{{ asset('public/template/img/category-6.jpg') }}" alt="All types containers" />-->
            <!--        <div class="uk-transition-fade">-->
            <!--          <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--          <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="category-item__title"> <span>All types containers</span></div>-->
            <!--    </a></div>-->
            <!--</div>-->
            <!--<div>-->
            <!--  <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-rental.html" tabindex="0">-->
            <!--      <div class="category-item__media"><img src="{{ asset('public/template/img/category-7.jpg') }}" alt="Generators" />-->
            <!--        <div class="uk-transition-fade">-->
            <!--          <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--          <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="category-item__title"> <span>Generators</span></div>-->
            <!--    </a></div>-->
            <!--</div>-->
            <!--<div>-->
            <!--  <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-rental.html" tabindex="0">-->
            <!--      <div class="category-item__media"><img src="{{ asset('public/template/img/category-8.jpg') }}" alt="Aerial work platform" />-->
            <!--        <div class="uk-transition-fade">-->
            <!--          <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--          <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="category-item__title"> <span>Aerial work platform</span></div>-->
            <!--    </a></div>-->
            <!--</div>-->
            <!--<div>-->
            <!--  <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-rental.html" tabindex="0">-->
            <!--      <div class="category-item__media"><img src="{{ asset('public/template/img/category-9.jpg') }}" alt="Air compressors" />-->
            <!--        <div class="uk-transition-fade">-->
            <!--          <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--          <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="category-item__title"> <span>Air compressors</span></div>-->
            <!--    </a></div>-->
            <!--</div>-->
            <!--<div>-->
            <!--  <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-rental.html" tabindex="0">-->
            <!--      <div class="category-item__media"><img src="{{ asset('public/template/img/category-10.jpg') }}" alt="Wheel loaders" />-->
            <!--        <div class="uk-transition-fade">-->
            <!--          <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--          <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="category-item__title"> <span>Wheel loaders</span></div>-->
            <!--    </a></div>-->
            <!--</div>-->
            <!--<div>-->
            <!--  <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-rental.html" tabindex="0">-->
            <!--      <div class="category-item__media"><img src="{{ asset('public/template/img/category-11.jpg') }}" alt="All type cranes" />-->
            <!--        <div class="uk-transition-fade">-->
            <!--          <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--          <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="category-item__title"> <span>All type cranes</span></div>-->
            <!--    </a></div>-->
            <!--</div>-->
            <!--<div>-->
            <!--  <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-rental.html" tabindex="0">-->
            <!--      <div class="category-item__media"><img src="{{ asset('public/template/img/category-12.jpg') }}" alt="All type cranes" />-->
            <!--        <div class="uk-transition-fade">-->
            <!--          <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--          <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="category-item__title"> <span>All type cranes</span></div>-->
            <!--    </a></div>-->
            <!--</div>-->
          </div>
        </div>
      </div>
      <!--<div class="section-cta">-->
      <!--  <div class="uk-container-expand">-->
      <!--    <div class="section-cta__box">-->
      <!--      <div class="section-cta__img"><img src="{{ asset('public/template/img/img-cta.png') }}" alt=""></div>-->
      <!--      <div class="section-cta__title"> <span>We Help Industry To Utilize The<br> Heavy Equipment Work Better</span></div>-->
      <!--      <div class="section-cta__support">-->
      <!--        <div class="support"> <a class="support__link" href="mailto:contact@pictosafe.com">-->
      <!--            <div class="support__icon"><i class="fas fa-headset"></i></div>-->
      <!--            <div class="support__desc">-->
      <!--              <div class="support__label">Get Quick Support</div>-->
      <!--              <div class="support__phone">@yoursafetyguys</div>-->
      <!--            </div>-->
      <!--          </a></div>-->
      <!--      </div>-->
      <!--      <div class="section-cta__btn"><a class="uk-button uk-button-danger uk-button-large"><span>Get started</span><img src="{{ asset('public/template/img/icons/arrow.svg') }}" alt="arrow" data-uk-svg></a></div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
    </main>
        @include('footer')

  </div>
  <script src="{{ asset('public/template/js/libs.js') }}"></script>
  <script src="{{ asset('public/template/js/main.js') }}"></script>
</body>

</html>