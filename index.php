<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce website</title>
    <!-- all css file plugins -->
    <link rel="stylesheet" href="fa/svg-with-js/css/fa-svg-with-js.css">
    <link rel="stylesheet" href="css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>
    <div class="wrapper">
        <div class="navigation-bar">
            <div class="container">
                <!-- insert a logo -->
                <div class="logo">
                    <img src="images/logo.png" alt="logo">
                </div>

                <!-- search box -->
                <div class="search-area">
                    <form action="" method="post">
                        <input type="text" name="search_box" class="search_box" placeholder="Search all items...">
                        <button class="search_btn btn btn-success"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <!-- user menu -->
                <div class="user-menu">
                    <ul>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-hoshpopup="true" aria-expanded="false"><i class="fas fa-user"></i> My Account</a>


                            <!-- dropdown box -->
                            <div class="dropdown-menu dropdown-menu-right bg-dark" style="width:250px;">
                                <a href="#"><button type="button" class="dropdown-item"><i class="fas fa-user"></i>&nbsp;Your Account</button></a>
                                <a href="#"><button type="button" class="dropdown-item"><i class="fas fa-cube"></i>&nbsp;Your Order</button></a>
                                <a href="#"><button type="button" class="dropdown-item"><i class="fas fa-heart"></i>&nbsp;Wishlist</button></a>

                                <div class="dropdown-divider"></div>
                                <p class="text-center text-white" style="height:15px; line-height:20px;"><small>if you are a new user</small></p>
                                <a href="#"><button type="button" class="dropdown-item text-center"><i class="fas fa-user"></i>&nbsp;Register</button></a>
                                <a href="#"><button type="button" class="dropdown-item text-center bg-danger"><i class="fas fa-user"></i>&nbsp;LOGIN</button></a>
                            </div>

                        </li>
                        <li><a href="#"><i class="fas fa-shopping-cart"></i> cart</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="slider-area">
            <div class="slider">
                <div>
                    <a href="#">
                        <img src="images/slider/slider-1.jpg" alt="">
                    </a>
                    <!-- slider content -->
                    <div class="slider-content">
                        <h3 class="text-white text-capitalize">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, dolor.</h3>
                        <a href="#"><button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Buy Now</button></a>
                        <a href="#"><button class="btn btn-outline-danger ml-5">Read More</button></a>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <img src="images/slider/slider-2.jpg" alt="">
                    </a>
                    <!-- slider content -->
                    <div class="slider-content">
                        <h3 class="text-white text-capitalize">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, dolor.</h3>
                        <a href="#"><button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Buy Now</button></a>
                        <a href="#"><button class="btn btn-outline-danger ml-5">Read More</button></a>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <img src="images/slider/slider-3.jpg" alt="">
                    </a>
                    <!-- slider content -->
                    <div class="slider-content">
                        <h3 class="text-white text-capitalize">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, dolor.</h3>
                        <a href="#"><button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Buy Now</button></a>
                        <a href="#"><button class="btn btn-outline-danger ml-5">Read More</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- this is for work area -->
        <div class="container-fluid">
            <!-- product section -->
            <section class="product-section">
                <div class="section-heading">
                    <h3 class="heading">latest Products</h3>
                </div>


                <div class="section-product-cards">

                    <div class="owl-carousel">

                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product-images/l4.jpg" alt="product name">
                            </div>

                            <!-- product hovered contents -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-warning cart-btn">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>

                            <div class="product-details">
                                <!-- product name -->
                                <h5 class="product-name">
                                    Men's T-shirt with Sport Mark
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>Rs. 400</s></small>
                                    <span class="text-success">Rs. 250</span>
                                </p>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product-images/alan.JPG" alt="product name">
                            </div>

                            <!-- product hovered contents -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-warning cart-btn">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>

                            <div class="product-details">
                                <!-- product name -->
                                <h5 class="product-name">
                                    Men's T-shirt with Sport Mark
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>Rs. 400</s></small>
                                    <span class="text-success">Rs. 250</span>
                                </p>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product-images/beast.JPG" alt="product name">
                            </div>

                            <!-- product hovered contents -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-warning cart-btn">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>

                            <div class="product-details">
                                <!-- product name -->
                                <h5 class="product-name">
                                    Men's T-shirt with Sport Mark
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>Rs. 400</s></small>
                                    <span class="text-success">Rs. 250</span>
                                </p>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product-images/bholenaath.JPG" alt="product name">
                            </div>

                            <!-- product hovered contents -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-warning cart-btn">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>

                            <div class="product-details">
                                <!-- product name -->
                                <h5 class="product-name">
                                    Men's T-shirt with Sport Mark
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>Rs. 400</s></small>
                                    <span class="text-success">Rs. 250</span>
                                </p>
                            </div>
                        </div>


                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product-images/hope-pin.JPG" alt="product name">
                            </div>

                            <!-- product hovered contents -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-warning cart-btn">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>

                            <div class="product-details">
                                <!-- product name -->
                                <h5 class="product-name">
                                    Men's T-shirt with Sport Mark
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>Rs. 400</s></small>
                                    <span class="text-success">Rs. 250</span>
                                </p>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product-images/play-t-shirt.JPG" alt="product name">
                            </div>

                            <!-- product hovered contents -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-warning cart-btn">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>

                            <div class="product-details">
                                <!-- product name -->
                                <h5 class="product-name">
                                    Men's T-shirt with Sport Mark
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>Rs. 400</s></small>
                                    <span class="text-success">Rs. 250</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



    <!-- js file plugins -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="fa/svg-with-js/js/fontawesome-all.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
