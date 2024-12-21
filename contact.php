<?php

include 'include/connect.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}


if (isset($_POST['send'])) {
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $number = isset($_POST['number']) ? htmlspecialchars(trim($_POST['number'])) : '';
    $msg = isset($_POST['msg']) ? htmlspecialchars(trim($_POST['msg'])) : '';

    $query = "SELECT * FROM `messages` WHERE name='$name' and email='$email' and number='$number' and messages='$msg'";
    $result = mysqli_query($conn, $query);

    if ($result && $result->num_rows > 0) {
        echo "Message already sent";
    } else {
        $query = "INSERT INTO `messages` (user_id, name, email, number, messages) VALUES ('$user_id','$name', '$email', '$number','$msg')";

        if (mysqli_query($conn, $query)) {
            echo "<script type='text/javascript'>
                  alert('Message Sent.');
                  
                  </script>";
        } else {
            echo "<script type='text/javascript'>
                  alert('Not Sent.');
                  
                  </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>


            <form class="d-flex" action="search_page.php" method="post">
                <input class="form-control me-2 search-input" type="search" name="search_box" placeholder="Search" aria-label="Search" maxlength="100" required>
                <button class="btn btn-outline-success btn-search" type="submit" name="search_btn">Search</button>
            </form>
            <div class="icon">
                <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="wishlist.php"><i class="fa-solid fa-heart"></i></a>
                <a href="user_login.php"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </nav>

    <form action="contact.php" method="POST">
        <div class="contact-us">
            <div class="contact">
                <p class="in-touch">Keep in touch with us</p>

                <div class="full-input">
                    <div class="input">
                        <input type="text" name="name" placeholder="Your Full Name" required>

                        <input type="email" name="email" placeholder="Your Email Address" required>

                        <input type="tel" id="mobile" name="number" placeholder="Your Mobile Number" min="0" max="9999999999" title="Please enter a valid 10 digit mobile number" required onkeypress="if(this.value.length==10) return false;" class="box">

                        <!-- Checkbox with a label -->
                        <label for="terms">
                            <input type="checkbox" id="terms" required>
                            <span> I accept the terms & conditions and I understand that my data will be held securely in accordance with the privacy policy.</span>
                        </label>
                    </div>

                    <textarea name="msg" placeholder="Your Message here..." required></textarea>
                </div>

                <!-- Changed button to type 'submit' -->
                <input type="submit" value="Submit" name="send">
            </div>
        </div>
    </form>

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