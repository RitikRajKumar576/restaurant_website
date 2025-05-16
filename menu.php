<?php
include 'admin/connection.php';
$sql="SELECT * FROM banner where status=1";
$query=mysqli_query($conn,$sql);

while($data=mysqli_fetch_assoc($query)){
  $result[]=$data;
}



?>

<html>

<head>
    <title>FOOD MENU</title>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="pics/logo.jpg" rel="icon" height="100" width="180">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <a href="index.php" class="logo"><img src="images/logo.jpg" height="102" width="160"></a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="reservation.php">Reservation</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact Us</a>
        </nav>
    </header>


    <!-- our menu section start -->

    <section class="our-menu" id="menu">
        <section>
        <h1 class="heading">our food menu</h1>
        <center>
            <h3 class="sub-heading"> ~ see what we offer ~ </h3>
        </center>

        <div class="menu-container">


            <!-- Main Course Menu -->
            <div class="item">
                <div class="item-name">
                    <h2>Main Course:</h2>
                    <img src="images/drinks.png">
                </div>

                <div class="item-body">
                    <div class="item-menu">
                    <img src="pics/paneer-masala.jpg" height="100" width="100">
                        <h3>Panner Masala</h3>
                        <span class="dots"></span>
                        <h3>₹240</h3>
                    </div>

                    <div class="item-body">
                    <div class="item-menu">
                    <img src="pics/Paneer-butter-masala.jpg" height="100" width="100">
                        <h3>Panner butter Masala</h3>
                        <span class="dots"></span>
                        <h3>₹280</h3>
                    </div>

                    <div class="item-body">
                    <div class="item-menu">
                    <img src="pics/mix-veg-.jpg" height="100" width="100">
                        <h3>Mix Veg</h3>
                        <span class="dots"></span>
                        <h3>₹160</h3>
                    </div>

                    <div class="item-body">
                    <div class="item-menu">
                    <img src="pics/Matar-Paneer.webp" height="100" width="100">
                        <h3>Matar Paneer</h3>
                        <span class="dots"></span>
                        <h3>₹198</h3>
                    </div>

                    <div class="item-body">
                    <div class="item-menu">
                    <img src="pics/Dal-Makhani.jpg" height="100" width="100">
                        <h3>Dal Makhni</h3>
                        <span class="dots"></span>
                        <h3>₹240</h3>
                    </div>

                    <div class="item-body">
                    <div class="item-menu">
                    <img src="pics/Paneer Chatpatta.webp" height="100" width="100">
                        <h3>Paneer Chatpatta</h3>
                        <span class="dots"></span>
                        <h3>₹220</h3>
                    </div>


                    <div class="item-body">
                    <div class="item-menu">
                    <img src="pics/Chicken Tikka.jpg" height="100" width="100">
                        <h3>Chicken Tikka Masala</h3>
                        <span class="dots"></span>
                        <h3>₹199</h3>
                    </div>

                    <div class="item-body">
                    <div class="item-menu">
                    <img src="pics/Chicken Butter Masala.jpg" height="100" width="100">
                        <h3>Chicken Butter Masala</h3>
                        <span class="dots"></span>
                        <h3>₹280</h3>
                    </div>


                    <div class="item-body">
                    <div class="item-menu">
                    <img src="pics/Chicken Curry.jpg" height="100" width="100">
                        <h3>Chicken Curry</h3>
                        <span class="dots"></span>
                        <h3>₹210</h3>
                    </div>


                    <div class="item-body"></div>
                    <div class="item-menu">
                    <img src="pics/Chicken Do Pyaza.webp" height="100" width="100">
                        <h3>Chicken Do Pyaza</h3>
                        <span class="dots"></span>
                        <h3>₹220</h3>
                    </div>
                </div>
            </div>


            <!-- Soups & Salads Menu -->
            <div class="item">
                <div class="item-name">
                    <h2>Soups & Salads:</h2>
                    <img src="images/drinks.png">
                </div>

                <div class="item-body">
                    <div class="item-menu">
                    <img src="pics/Veg Mushroom Soup.jpg" height="100" width="100">
                        <h3>Veg Mushroom Soup</h3>
                        <span class="dots"></span>
                        <h3>₹139</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Veg Manchow Soup.jpg" height="100" width="100">
                        <h3>Veg Manchow Soup</h3>
                        <span class="dots"></span>
                        <h3>₹160</h3>
                    </div>


                    <div class="item-menu">
                    <img src="pics/Chicken Soup.webp" height="100" width="100">
                        <h3>Chicken Soup</h3>
                        <span class="dots"></span>
                        <h3>₹187</h3>
                    </div>


                    <div class="item-menu">
                    <img src="pics/Chicken Manchow Soup.webp" height="100" width="100">
                        <h3>Chicken Manchow Soup</h3>
                        <span class="dots"></span>
                        <h3>₹189</h3>
                    </div>


                    <div class="item-menu">
                    <img src="pics/Tamatto Soup.jpg" height="100" width="100">
                        <h3>Tamatto Soup</h3>
                        <span class="dots"></span>
                        <h3>₹140</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Chinese Hot and Sour Soup.jpg" height="100" width="100">
                        <h3>Chinese Hot and Sour Soup</h3>
                        <span class="dots"></span>
                        <h3>₹159</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Fries & Shawarma Salad Bowl.avif" height="100" width="100">
                        <h3>Fries & Shawarma Salad Bowl</h3>
                        <span class="dots"></span>
                        <h3>₹459</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Mediterranean Salad Bowl.avif" height="100" width="100">
                        <h3>Mediterranean Salad Bowl</h3>
                        <span class="dots"></span>
                        <h3>₹456</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/French Fries Salad Bowl.avif" height="100" width="100">
                        <h3>French Fries Salad Bowl</h3>
                        <span class="dots"></span>
                        <h3>₹440</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Boiled Chicken [150 grams] and Veggie Salad.avif" height="100" width="100">
                        <h3>Boiled Chicken [150 grams] and Veggie Salad</h3>
                        <span class="dots"></span>
                        <h3>₹195</h3>
                    </div>
                </div>
            </div>


            <!-- Drinks Menu -->
            <div class="item">
                <div class="item-name">
                    <h2>Drinks:</h2>
                    <img src="images/drinks.png">
                </div>
                <div class="item-body">


                    <div class="item-menu">
                    <img src="pics/Oreo Milk Shake.webp" height="100" width="100">
                        <h3>Oreo Milk Shake</h3>
                        <span class="dots"></span>
                        <h3>₹100</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Mango Shake.jpg" height="100" width="100">
                        <h3>Mango Shake</h3>
                        <span class="dots"></span>
                        <h3>₹130</h3>
                    </div>


                    <div class="item-menu">
                    <img src="pics/Mango Lassi.jpg" height="100" width="100">
                        <h3>Mango Lassi</h3>
                        <span class="dots"></span>
                        <h3>₹110</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Mango Mojito.jpg" height="100" width="100">
                        <h3>Mango Mojito</h3>
                        <span class="dots"></span>
                        <h3>₹140</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Coco-Cola Cold Drink.jpg" height="100" width="100">
                        <h3>Coco-Cola Cold Drink</h3>
                        <span class="dots"></span>
                        <h3>₹129</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Sprite Cold drink.webp" height="100" width="100">
                        <h3>Sprite Cold drink</h3>
                        <span class="dots"></span>
                        <h3>₹116</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Mojito Star.jpg" height="100" width="100">
                        <h3>Mojito Star</h3>
                        <span class="dots"></span>
                        <h3>₹270</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Mocha Cold Coffee.jpg" height="100" width="100">
                        <h3>Mocha Cold Coffee</h3>
                        <span class="dots"></span>
                        <h3>₹180</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Salt Lime Soda.jpg" height="100" width="100">
                        <h3>Salt Lime Soda</h3>
                        <span class="dots"></span>
                        <h3>₹145</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Vanilla Shake.jpg" height="100" width="100">
                        <h3>Vanilla Shake</h3>
                        <span class="dots"></span>
                        <h3>₹110</h3>
                    </div>
                </div>
            </div>



            <!-- Desserts Menu -->
            <div class="item">
                <div class="item-name">
                    <h2>Desserts:</h2>
                    <img src="images/drinks.png">
                </div>
                <div class="item-body">



                    <div class="item-menu">
                    <img src="pics/Chololate Ice-Cream.jpg" height="100" width="100">
                        <h3> Chololate Ice-Cream</h3>
                        <span class="dots"></span>
                        <h3>₹80</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Butter Scotch Ice-Cream.jpg" height="100" width="100">
                        <h3>Butter Scotch Ice-Cream</h3>
                        <span class="dots"></span>
                        <h3>₹90</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Mishti Doi.jpg" height="100" width="100">
                        <h3>Mishti Doi</h3>
                        <span class="dots"></span>
                        <h3>₹60</h3>
                    </div>

                    <div class="item-menu">
                    <img src="pics/Rosogolla.webp" height="100" width="100">
                        <h3>Rosogolla</h3>
                        <span class="dots"></span>
                        <h3>₹76</h3>
                    </div>
                    <div class="item-menu">
                    <img src="pics/Blueberry Cheese Cake Pastry.avif" height="100" width="100">
                        <h3>Blueberry Cheese Cake Pastry</h3>
                        <span class="dots"></span>
                        <h3>₹56</h3>
                    </div>
                    <div class="item-menu">
                    <img src="pics/Six Wonder Pastry.avif" height="100" width="100">
                        <h3>Six Wonder Pastry</h3>
                        <span class="dots"></span>
                        <h3>₹62</h3>
                    </div>
                    <div class="item-menu">
                    <img src="pics/Choco Truffle Pastry.avif" height="100" width="100">
                        <h3>Choco Truffle Pastry</h3>
                        <span class="dots"></span>
                        <h3>₹76</h3>
                    </div>
                    <div class="item-menu">
                    <img src="pics/Red velvet pastry.avif" height="100" width="100">
                        <h3>Red velvet pastry</h3>
                        <span class="dots"></span>
                        <h3>₹79</h3>
                    </div>
                    <div class="item-menu">
                    <img src="pics/Choco Chip Pastry.avif" height="100" width="100">
                        <h3>Choco Chip Pastry</h3>
                        <span class="dots"></span>
                        <h3>₹91</h3>
                    </div>
                    <div class="item-menu">
                    <img src="pics/Kitkat Pastry.avif" height="100" width="100">
                        <h3>Kitkat Pastry</h3>
                        <span class="dots"></span>
                        <h3>₹89</h3>
                    </div>
                </div>


            </div>
        </div>
        <br>
        <br>
        <br>
        <a href="index.php" class="btn" style="color:red !important">Go Back</a>
        </section>
    </section>

    <!-- our menu section ends -->

    <!-- footer section start -->


    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/profile.php?id=100094006544292" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>



                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>


            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <!-- <section class=""> -->
            <form method="POST" action="admin/action.php">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                        <h3><strong>Sign up for our newsletter</strong></h3>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input type="email" name="subscriber" id="subscriber" placeholder="write email here"
                                class="form-control" />
                            <label class="form-label" for="subscriber">
                                <h3>Email address</h3>
                            </label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" name="subscribe" value="subscribe" class="btn btn-primary">
                            <h3>Subscribe</h3>
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->

            <!-- <div class="container" style="margin-top:50px;">
                <div class="row">
                    <div class="col-md-5" style="margin-top:12px;">
                        <img src="pics/out.png"
                            style="height:200px;width:200px;border-radius:10px;border:2px solid rgb(64, 64, 164);">

                    </div>
                    <div class="col-md-7" style="margin-bottom:1px;"> -->
                        <!-- <center>
                            <h2><u>About Us: </u></h2>
                        </center>
                        <p>
                        <h2> Welcome To The Hungry Heaven Restaurant! We Take Pride In Offering An Exceptional Dining
                            Experience
                            That Satisfies Both Your Taste Buds And Your Soul. Situated In A Vibrant Location, Our
                            Restaurant
                            Combines A Warm And Inviting Ambiance With A Diverse Menu That Caters To Every Palate. </h2>
                        </p> -->
                    <!-- </div>
                </div>
            </div> -->


            <!-- Section: Text -->



        </div>
        <!--Grid row-->
        </section>
        <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <section>
            <div>
                <h3> <u>THE HUNGRY HEAVEN</u>
                    <br>
                    <span>CONTACT US: </span>
                    <span>+ (91) 7762844471</span>
                </h3>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright: Reserved by The Hungry Heaven
                <a class="text-white" href="https://hungryheaven.com/">The Hungry Heaven</a>
            </div>
            <!-- Copyright -->
        </section>
    </footer>



    <!-- footer section end -->






    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".home-slider", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true,
    });
    </script>



    <script type="text/javascript">
    let menu = document.querySelector('#menu');
    let navbar = document.querySelector('.navbar');
    menu.onclick = () => {
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    }
    </script>
</body>
</html>
