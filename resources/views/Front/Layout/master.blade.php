<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.0-beta.10/tailwind.min.css" integrity="sha512-1Syxn6SauehFJWEP+FayZmh0iQhCyf0Hmkf1goyhnVRGBTubtBJj8oLroZ/3/Q1uYKYFgWgBBgA1mtFbFl/Ucg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="Front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="Front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="Front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="Front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="Front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="Front/css/style.css" type="text/css">
</head>

<body>
<!-- Start coding here -->
<div id ="preloder">
    <div class="loader"></div>
</div>

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>ngtin590@gmail.com
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i>0911408131
                </div>
            </div>
            <div class="ht-right">
                <a href="./login.html" class="login-panel"> <i class="fa fa-user"></i>login</a>
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value="yt" data-image="./Front/img/flag-1.jpg" data-imagecss="flag yt" data-title="English">English</option>
                        <option value="yu" data-image="./Front/img/flag-2.jpg" data-imagecss="flag yu" data-title="Bangladesh">German</option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="https://www.facebook.com/patrizk1"><i class="ti-facebook"></i></a>
                    <a href="https://github.com/ngtinn59"><i class="ti-github"></i></a>
                    <a href=""><i class="ti-google"></i></a>
                    <a href="https://www.linkedin.com/in/th%C3%A0nh-nguy%E1%BB%85n-b807a7247/"><i class="ti-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="./Front/img/logo.png" height="25" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <form action="shop">
                        <div class="advanced-search">
                            <button type = "button" class = "category-btn">All Categories</button>
                            <div class="input-group">
                                <input  name="search" value="{{request('search')}}" type="text" placeholder="What do you need?">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 text-right">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                        <td class="si-pic"><img src="./Front/img/select-product-1.jpg" alt=""></td>
                                        <td class="si-text">
                                            <div class="product-selected">
                                                <p>$100.00 x 1</p>
                                                <h6>Kabino Bedside Table</h6>
                                            </div>
                                        </td>
                                        <td class = "si-close">
                                            <i class ="ti-close"></i>
                                        </td>
                                        </tbody>
                                    </table>
                                    <table>
                                        <tbody>
                                        <td class="si-pic"><img src="./Front/img/select-product-2.jpg" alt=""></td>
                                        <td class="si-text">
                                            <div class="product-selected">
                                                <p>$100.00 x 1</p>
                                                <h6>Kabino Bedside Table</h6>
                                            </div>
                                        </td>
                                        <td class = "si-close">
                                            <i class ="ti-close"></i>
                                        </td>
                                        </tbody>
                                    </table>
                                    <table>
                                        <tbody>
                                        <td class="si-pic"><img src="./Front/img/select-product-2.jpg" alt=""></td>
                                        <td class="si-text">
                                            <div class="product-selected">
                                                <p>$100.00 x 1</p>
                                                <h6>Kabino Bedside Table</h6>
                                            </div>
                                        </td>
                                        <td class = "si-close">
                                            <i class ="ti-close"></i>
                                        </td>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>$300.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="./shopping-cart.html" class="primary-btn view-card">View Card</a>
                                    <a href="./check-out.html" class="primary-btn checkout-btn">Check Out</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">$300.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>Departments</span>
                    <ul class="depart-hover">
                        <li class="active"><a href="#">Women's Clothing</a></li>
                        <li><a href="">Underwear</a></li>
                        <li><a href="">Gucci</a></li>
                        <li><a href="">Gori</a></li>
                        <li><a href="">Levents</a></li>
                        <li><a href="">Bad Habits</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class=""><a href="about-project.html">About</a></li>
                    <li class="{{(request()->segment(1) == '')? 'active' : '' }}"><a href="./">Home</a></li>
                    <li class="{{(request()->segment(1) == 'shop')? 'active' : ''}}"><a href="./shop">Shop</a></li>
                    <li><a href="">Collection</a>
                        <ul class="dropdown">
                            <li><a href="">Men's</a></li>
                            <li><a href="">Women's</a></li>
                            <li><a href="">Kid's</a></li>
                        </ul>
                    </li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Pages</a>
                        <ul class="dropdown">
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="check-out.html">Check out</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <nav class="" id="mobile-menu-wrap"></nav>

        </div>
    </div>
</header>

@yield('body')

<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="./Front/img/logo-carousel/logo-1.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="./Front/img/logo-carousel/logo-2.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="./Front/img/logo-carousel/logo-3.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="./Front/img/logo-carousel/logo-4.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="./Front/img/logo-carousel/logo-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="./index.html">
                            <img src="./Front/img/_footer-logo.png" heigh="25" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>Ninh Kieu - Can Tho</li>
                        <li>Phone: 0911408131</li>
                        <li>Email: ngtin590@gmail.com  </li>
                    </ul>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/patrizk1"><i class="ti-facebook"></i></a>
                        <a href="https://github.com/ngtinn59"><i class="ti-github"></i></a>
                        <a href=""><i class="ti-google"></i></a>
                        <a href="https://www.linkedin.com/in/th%C3%A0nh-nguy%E1%BB%85n-b807a7247/"><i class="ti-linkedin"></i></a>
                        <a href=""><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Check out</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Serivius</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Shopping Cart</a></li>
                        <li><a href="">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Join Our Newsletter Now</h5>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter your mail">
                        <button type="button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        Copyright © <script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart-o" aria-hidden="true"></i>By<a href=""></a>
                    </div>
                    <div class="payment-pic">
                        <img src="./Front/img/p" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Js Plugins -->
<script src="Front/js/jquery-3.3.1.min.js"></script>
<script src="Front/js/bootstrap.min.js"></script>
<script src="Front/js/jquery-ui.min.js"></script>
<script src="Front/js/jquery.countdown.min.js"></script>
<script src="Front/js/jquery.nice-select.min.js"></script>
<script src="Front/js/jquery.zoom.min.js"></script>
<script src="Front/js/jquery.dd.min.js"></script>
<script src="Front/js/jquery.slicknav.js"></script>
<script src="Front/js/owl.carousel.min.js"></script>
<script src="Front/js/owlcarousel2-filter.min.js"></script>
<script src="Front/js/main.js"></script>
</body>

</html>
