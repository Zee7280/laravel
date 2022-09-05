        <header class="page-header">
            <!--<div class="page-header-top">-->
            <!--    <div class="page-header-top__left">-->
            <!--        <div class="update"><i class="far fa-hand-point-right"></i><span><a href="#!">Latest Updates</a> Get Upto 45% Off The Best Construction Equipment Deals At Antek</span></div>-->
            <!--    </div>-->
            <!--    <div class="page-header-top__right">-->
            <!--        <div class="time-work icon"><i class="far fa-clock"></i><span>Mon - Sat 9.00 - 18.00</span></div>-->
            <!--        <div class="login-link"> <i class="fas fa-sign-in-alt"></i><a href="#!">Login or Register</a></div>-->
            <!--        <div class="social">-->
            <!--            <ul class="social-list">-->
            <!--                <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-twitter"></i></a></li>-->
            <!--                <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-facebook-f"></i></a></li>-->
            <!--                <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-google-plus-g"></i></a></li>-->
            <!--                <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-youtube"></i></a></li>-->
            <!--                <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-pinterest-p"></i></a></li>-->
            <!--            </ul>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="page-header-bottom" data-uk-sticky>
                <div class="page-header-bottom__left">
                    <div class="logo"><a class="logo__link" href="index.html"><img class="logo__img" src="{{ asset('public/assets/Picto.png') }}" width="150px" alt=""></a></div>
                    <div class="support"> <a class="support__link" href="mailto:contact@pictosafe.com">
                            <div class="support__icon"><i aria-hidden="true" class="far fa-share-square"></i></div>
                            <div class="support__desc">
                                <div class="support__label">Make it Safe</div>
                                <div class="support__phone">@yoursafetyguys</div>
                            </div>
                        </a></div>
                </div>
                <div class="page-header-bottom__right">
                    <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                        <div class="nav-overlay uk-visible@l">
                            <ul class="uk-navbar-nav">
                                <li class="uk-active"><a href="/">Home</a></li>
                                <li><a href=#">PPE<i class="fas fa-angle-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="/personal-protection">Personal-protection </a></li>
                                            <li><a href="/lockout">Lockout Tagout</a></li>
                                            <li><a href="/mining">Mining</a></li>
                                            <li><a href="/remote-solution">Remote Solutions</a></li>

                                        </ul>
                                    </div>
                                </li>
                                <!--<li><a href="#">Rental Deals<i class="fas fa-angle-down"></i></a>-->
                                <!--    <div class="uk-navbar-dropdown">-->
                                <!--        <ul class="uk-nav uk-navbar-dropdown-nav">-->
                                <!--            <li><a href="page-rental.html">Listing Page</a></li>-->
                                <!--            <li><a href="equipment-detail.html">Detail Page</a></li>-->
                                <!--        </ul>-->
                                <!--    </div>-->
                                <!--</li>-->
                                <li><a href="/about-us">About</a></li>
                                <!--<li><a href="page-blog-grid.html">News<i class="fas fa-angle-down"></i></a>-->
                                <!--    <div class="uk-navbar-dropdown">-->
                                <!--        <ul class="uk-nav uk-navbar-dropdown-nav">-->
                                <!--            <li><a href="page-blog-grid.html">Page blog grid</a></li>-->
                                <!--            <li><a href="page-blog-list.html">Page blog list</a></li>-->
                                <!--            <li><a href="page-blog-article.html">Page blog article</a></li>-->
                                <!--        </ul>-->
                                <!--    </div>-->
                                <!--</li>-->
                                  
                                 <li><a href="/submit-request">Submit Ticket</a></li>
                                  <li><a href="/safety-forms">Safety Forms</a></li>
                                <li><a href="/contact-us">Contact</a></li>
                                 @if (Route::has('login'))
                               
                                    @auth
                                     
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                               
                                        <!--<li> <a href="{{ url('/home') }}">Home</a></li>-->
                                    @else
                                        <li> <a href="{{ route('login') }}">Login</a></li>
                
                                        @if (Route::has('register'))
                                            <li> <a href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth
                              
                            @endif
                            </ul>
                        </div>
                        <div class="nav-overlay search-btn"><a class="uk-navbar-toggle" data-uk-search-icon data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a></div>
                        <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
                            <div class="uk-navbar-item uk-width-expand">
                                <form class="uk-search uk-search-navbar uk-width-1-1" action="#!"><input class="uk-search-input" type="search" placeholder="Search..." autofocus></form>
                            </div><a class="uk-navbar-toggle" data-uk-close data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
                        </div>
                    </nav>
                    <!--<a class="uk-navbar-toggle uk-hidden@l" href="#offcanvas" data-uk-toggle><span data-uk-icon="menu"></span></a><a class="uk-navbar-toggle cart-btn" href="#">-->
                    <!--    <div class="cart-btn__icon" data-uk-icon="cart"><span class="cart-btn__count">2</span></div>-->
                    <!--</a>-->
                </div>
            </div>
        </header>