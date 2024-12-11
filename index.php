<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="css/style.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!--Bootstrap Link-->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Eco-Planet</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarNav">
                <ul class="navbar-nav nav ms-">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <input class="form-control me-2 search-input" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success btn-search" type="submit">Search</button>
            </form>
            <div class="icon">
                <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="wishlist.php"><i class="fa-solid fa-heart"></i></a>
                <a href="login.php"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </nav>

    <div class="home-bg">
        <section class="home">
            <div class="home-slider">
                <!-- <div class="swiper-wrapper"> -->
                <div class="slide">
                    <div class="image">
                        <img src="images/banner/banner1.jpg" alt="" style="height: 50rem; object-fit: cover; width: 100%;">
                    </div>
                    <div class="content">
                        <span>Shop the latest Today</span>
                        <h3>Sustainability starts at Home</h3>
                        <a href="shop.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <div class="swiper-pagination"></div>
        </section>
    </div>

    <!-- <div class="swiper-slide slide">

                        <div class="image">
                            <img src="images/banner/banner2.jpg" alt="" style="height: 50rem; object-fit: cover; width: 100%;">
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="images/banner/banner3.jpg" alt="" style="height: 50rem; object-fit: cover; width: 100%;">

                        </div> -->

    <section class="category">
        <h1 class="heading">Shop by category</h1>
        <div class="swiper category-slider">
            <div class="swiper-wrapper">
                <a href="category.php?category=mouse" class="swiper-slide slide">
                    <img src="images/categories/icon-1.png" alt="">
                    <h3>category 1</h3>
                </a>

                <a href="category.php?category=fridge" class="swiper-slide slide">
                    <img src="images/categories/icon-2.png" alt="">
                    <h3>category 2</h3>
                </a>

                <a href="category.php?category=washing" class="swiper-slide slide">
                    <img src="images/categories/icon-1.png" alt="">
                    <h3>category 3</h3>
                </a>

                <a href="category.php?category=smartphone" class="swiper-slide slide">
                    <img src="images/categories/icon-2.png" alt="">
                    <h3>category 4</h3>
                </a>

                <a href="category.php?category=watch" class="swiper-slide slide">
                    <img src="images/categories/icon-1.png" alt="">
                    <h3>category 5</h3>
                </a>

                <a href="category.php?category=watch" class="swiper-slide slide">
                    <img src="images/categories/icon-2.png" alt="">
                    <h3>category 6</h3>
                </a>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <h1 class="heading">Latest products</h1>

    <div class="swiper products-slider">
        <section class="orders">
            <div class="box-container">
                <div class="boxes">
                    <img src="images/products/image.png" alt="" height="170px">
                    <h6>Product 1</h6>
                    <span>Rs.200</span><br>
                    <button type="button">
                        <a href="products.php" class="shop">Shop</a>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>

                <div class="boxes">
                    <img src="images/products/image3.png" alt="" height="170px">
                    <h6>Product 2</h6>
                    <span>Rs.300</span><br>
                    <button type="button">
                        <a href="products.php" class="shop">Shop</a>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>

                <div class="boxes">
                    <img src="images/products/image2.png" alt="" height="170px">
                    <h6>Product 3</h6>
                    <span>Rs.250</span><br>
                    <button type="button">
                        <a href="products.php" class="shop">Shop</a>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>

                <div class="boxes">
                    <img src="images/products/image.png" alt="" height="170px">
                    <h6>Product 4</h6>
                    <span>Rs.209</span><br>
                    <button type="button">
                        <a href="products.php" class="shop">Shop</a>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>

                <div class="boxes">
                    <img src="images/products/image3.png" alt="" height="170px">
                    <h6>Product 5</h6>
                    <span>Rs.200</span><br>
                    <button type="button">
                        <a href="products.php" class="shop">Shop</a>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>

                <div class="boxes">
                    <img src="images/products/image2.png" alt="" height="170px">
                    <h6>Product 6</h6>
                    <span>Rs.200</span><br>
                    <button type="button">
                        <a href="products.php" class="shop">Shop</a>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>

                <div class="boxes">
                    <img src="images/products/image.png" alt="" height="170px">
                    <h6>Product 7</h6>
                    <span>Rs.200</span><br>
                    <button type="button">
                        <a href="products.php" class="shop">Shop</a>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>

                <div class="boxes">
                    <img src="images/products/image3.png" alt="" height="170px">
                    <h6>Product 8</h6>
                    <span>Rs.200</span><br>
                    <button type="button">
                        <a href="products.php" class="shop">Shop</a>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            </div>
        </section>
        <div class="swiper-pagination"></div>
    </div>

    <footer class="bg-secondary text-center text-white">
        
        <div class="container p-4 pb-0">
            
            <section class="mb-4">
                
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

               
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

               
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">eco-planet.com</a>
        </div>

    </footer>


    <script src="js/script.js"></script>

    <script>
        // var swiper = new Swiper(".home-slider", {
        //     loop: true,
        //     spaceBetween: 20,
        //     pagination: {
        //         el: ".swiper-pagination",
        //         clickable: true,
        //     },
        // });

        var swiper = new Swiper(".category-slider", {
            loop: true,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                650: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                1024: {
                    slidesPerView: 5,
                },
            },
        });

        var swiper = new Swiper(".products-slider", {
            loop: true,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                550: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

</body>

</html>