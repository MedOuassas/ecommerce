<div class="home_box">
    <!--================Menu Area =================-->
    <header class="shop_header_area carousel_menu_area">
        <div class="carousel_top_header black_top_header row m0">
            <div class="container">
                <div class="carousel_top_h_inner">
                    <div class="float-md-left">
                        <div class="top_header_left">
                            <div class="selector">
                                <div class="dropdown" style="padding-right: 20px">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="filter-option value">{{ trans('admin.'.lang()) }} </span><b class="caret"></b></a>
                                    <ul class="dropdown-menu inner">
                                        <li><a href="{{ url('lang/ar') }}"><i class="fa fa-globe fa-fw"></i> {{ trans('admin.arab')}}</a></li>
                                        <li><a href="{{ url('lang/en') }}"><i class="fa fa-globe fa-fw"></i> {{ trans('admin.english')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <select class="selectpicker usd_select">
                                <option>USD</option>
                                <option>MAD</option>
                                <option>EUR</option>
                            </select>
                        </div>
                    </div>
                    <div class="float-md-right">
                        <ul class="account_list">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Wish List (0)</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel_menu_inner">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{ Storage::url(setting()->logo) }}" alt="{{ setting()->sitename_.lang() }}"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown submenu active">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="index.html">Home Simple</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-carousel.html">Home Carousel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-fullwidth.html">Home Full Width</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-parallax.html">Home Parallax</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-sidebar.html">Home Boxed</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-fixed-menu.html">Home Fixed</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="compare.html">Compare</a></li>
                                    <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout Method</a></li>
                                    <li class="nav-item"><a class="nav-link" href="register.html">Checkout Register</a></li>
                                    <li class="nav-item"><a class="nav-link" href="track.html">Track</a></li>
                                    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Shop <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-2column.html">Prodcut No Sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-3column.html">Prodcut Two Column</a></li>
                                    <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-4column.html">Product Grid</a></li>
                                    <li class="nav-item"><a class="nav-link" href="categories-left-sidebar.html">Categories Left Sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="categories-right-sidebar.html">Categories Right Sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="categories-grid-left-sidebar.html">Categories Grid Sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="product-details.html">Prodcut Details 01</a></li>
                                    <li class="nav-item"><a class="nav-link" href="product-details2.html">Prodcut Details 02</a></li>
                                    <li class="nav-item"><a class="nav-link" href="product-details3.html">Prodcut Details 03</a></li>
                                    <li class="nav-item"><a class="nav-link" href="shopping-cart.html">Shopping Cart 01</a></li>
                                    <li class="nav-item"><a class="nav-link" href="shopping-cart2.html">Shopping Cart 02</a></li>
                                    <li class="nav-item"><a class="nav-link" href="empty-cart.html">Empty Cart</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">lookbook</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <ul class="navbar-nav justify-content-end">
                            <li class="search_icon"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                            <li class="user_icon"><a href="#"><i class="icon-user icons"></i></a></li>
                            <li class="cart_cart"><a href="#"><i class="icon-handbag icons"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================End Menu Area =================-->
