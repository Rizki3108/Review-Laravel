<header class="site-header header-style-one">
    <div class="header__main-wrap stricky">
        <div class="container mxw_1580">
            <div class="header__main ul_li_between">
                <div class="header__left ul_li">
                    <div class="header__logo">
                        <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logo.svg') }}"
                                alt=""></a>
                    </div>
                    <div class="d-none d-lg-block">
                        <a class="header__bar hamburger_menu" href="javascript:void(0);">
                            <div class="header__bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                    <nav class="main-menu collapse navbar-collapse">
                        <ul>
                            <li class="menu-item-has-children active"><a href="index.html">Home</a>
                                <ul class="submenu">
                                    <li class="active"><a href="index.html">Home Chatbot</a></li>
                                    <li><a href="home-2.html">Home CRM</a></li>
                                    <li><a href="home-3.html">Home Copy Writing</a></li>
                                </ul>
                            </li>
                            <li><a class="scrollspy-btn" href="#feature">Feature</a></li>
                            <li><a class="scrollspy-btn" href="#template">Template</a></li>
                            <li><a class="scrollspy-btn" href="#intergation">Intergation</a></li>
                            <li class="menu-item-has-children">
                                <a href="#!">Blog</a>
                                <ul class="submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-single.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Get in touch</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header__right-info ul_li">
                    <div class="d-lg-none">
                        <a class="header__bar hamburger_menu" href="javascript:void(0);">
                            <div class="header__bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <a class="header__search header-search-btn" href="javascript:void(0);">
                        <img src="{{ asset('frontend/assets/img/icon/search.svg') }}" alt="">
                    </a>
                    <div class="header__language header__account">
                        <ul>
                            <li><a href="#!">
                                    <img src="{{ asset('frontend/assets/img/icon/user.svg') }}" alt="">
                                    My Account
                                    <i class="far fa-angle-down"></i>
                                </a>
                                <ul class="lang_sub_list">
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Sign up</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header__button">
                        <a class="thm-btn thm-btn--dark" href="#!">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
