<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
    <link rel="stylesheet" type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">
    <link rel="stylesheet" href="assets/css/global.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type="text/javascript " src="assets/js/mobile-nav.js"></script>
</head>

<body>
    <!-- Header -->
    <header id="clearHeader" class="header">
        <!-- Header Main -->
        <div class="header_main">
            <div class="container-fluid">
                <div class="row container-fluid">
                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-5 order-1">
                        <div class="logo_container">
                            <div class="logo"><a href="#"><img src="assets/images/logo.png" alt=""></a></div>
                        </div>
                    </div> <!-- Search -->
                    <div class="col-lg-1 col-12 order-lg-2 order-3 text-lg-left text-right d-none d-lg-block">
                    </div> <!-- Wishlist -->
                    <div class="col-lg-9 col-7 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="header_search wishlist w-50">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix d-none d-lg-block"> <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                            <div class="custom_dropdown" style="display: none;">
                                                <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">All Categories</a></li>
                                                        <li><a class="clc" href="#">Computers</a></li>
                                                        <li><a class="clc" href="#">Laptops</a></li>
                                                        <li><a class="clc" href="#">Cameras</a></li>
                                                        <li><a class="clc" href="#">Hardware</a></li>
                                                        <li><a class="clc" href="#">Smartphones</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300" value="Submit"><span class="fa fa-search text-danger"></span></button>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- Serch -->
                            <div class="wishlist d-md-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_content">
                                    <div class="wishlist_text d-block d-md-none"><a href="#"><i class="fa fa-user"></i></a></div>
                                    <!-- <ul class="standard_dropdown main_nav_dropdown d-none d-md-block">
                                        <li class="wishlist_text hassubs "> <a href="login.php">Login</a>
                                            <ul>
                                                <li><a href="signup.php">Sign up</a></li>
                                                <li><a href="#">My Account</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </div>
                            </div> <!-- Login -->
                            <div class="wishlist d-none d-md-block d-md-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon"><img style="width: 30px;" src="assets/images/user.png" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="#">Login</a></div>
                                    <div class="wishlist_count"><a class="text-muted" href="#">Signup</a></div>
                                </div>
                            </div> <!-- Login Join Free -->
                            <div class="wishlist d-none d-md-block d-md-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon"><img src="assets/images/heart.png" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="#">Compare</a></div>
                                    <div class="wishlist_count">5</div>
                                </div>
                            </div> <!-- Compare -->
                            <div class="wishlist d-none d-md-block d-md-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon"><img src="assets/images/heart.png" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="#">Wishlist</a></div>
                                    <div class="wishlist_count">10</div>
                                </div>
                            </div> <!-- Wishlist -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon"> <img src="assets/images/cart.png" alt="">
                                        <div class="cart_count"><span>3</span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="cart.php">Cart</a></div>
                                        <div class="cart_price">$185</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Main Navigation -->
        <nav class="main_nav">
            <div class="container-fluid responsive-menubar">
                <div class="row mx-0 container-fluid">
                    <div class="w-100">
                        <div class="main_nav_content d-flex flex-row">
                            <!-- Categories Menu -->
                            <!-- Main Nav Menu -->
                            <div class="zbuzz-menulink main_nav_menu mx-0">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="single-page.php">Page Layout</a></li>
                                    <li><a href="shop.php">Shop Layout</a> </li>
                                    <li><a href="product-category.php">Product category</a> </li>
                                    <li class="hassubs"><a href="">Account<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="signup.php">Signup</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                            <li><a href="cart.php">Cart</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single-product.php">Products Page</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Blogs</a></li>
                                </ul>
                            </div> <!-- Menu Trigger -->
                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">menu</div>
                                        <div class="cat_burger menu_burger_inner">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav> <!-- Menu -->
        <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="w-100">
                        <div class="page_menu_content d-block d-md-none">
                            <div class="page_menu_search">
                                <form action="#"> <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products..."> </form>
                            </div>
                            <ul class="page_menu_nav">
                                <li class="page_menu_item"><a href="index.php">Home</a></li>
                                <li class="page_menu_item"><a href="single-page.php">Page Layout</a></li>
                                <li class="page_menu_item"><a href="shop.php">Shop Layout</a> </li>
                                <li class="page_menu_item"><a href="product-category.php">Product category</a> </li>
                                <li class="page_menu_item has-children"><a href="">Account<i class="fas fa-chevron-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="signup.php">Sign Up</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="cart.php">Cart</a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item"><a href="single-product.php">Products Page</a></li>
                                <li class="page_menu_item"><a href="#">Blogs</a></li>
                            </ul>
                            <div class="menu_contact">
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570
                                </div>
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Mobile Menu -->
        </div>
    </header>