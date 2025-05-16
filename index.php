<?php
include 'admin/connection.php';
$sql="SELECT * FROM banner where status=1";
$query=mysqli_query($conn,$sql);

while($data=mysqli_fetch_assoc($query)){
  $result[]=$data;
}
// print_r($result);die;
?>

<html>

<head>
    <title>The Hungry Heaven Restaurant</title>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="pics/logo.jpg" rel="icon" height="100" width="180">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <header>
        <a href="index.php" class="logo"><img src="images/logo.jpg" height="102" width="160"></a>
        <nav class="navbar">
            <a href="index.php" class="active">Home</a>
            <a href="menu.php">Menu</a>
            <a href="reservation.php">Reservation</a>
            <a href="about.php">About </a>
            <a href="contact.php">Contact Us</a>
        </nav>
    </header>

    <div class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper wrapper">
                <!-- <div class="swiper-slide slide slide1">
                    <div class="content">
                        <img src="images/crown-symbol.png">

                        <h3>Delicious Hungry Heaven</h3>
                        <h1>gift voucher</h1>
                        <p>
                            give away your beloved customers
                        </p>
                        <a href="#" class="btn">order Now</a>
                    </div>
                </div> -->
                <?php $i=0; foreach($result as $vl){ $i++;
                    ?>

                <!-- <php $img='admin/'.$vl['Banner_img']; ?> -->
                <div class="swiper-slide slide slide<?php echo $i; ?>"
                    style="background: url(<?php echo 'admin/'.$vl['Banner_img'] ?>);width:100% !important;background-size:cover !important;">
                    <div class="content">
                        <img src="images/crown-symbol.png">

                        <h3><?php echo $vl['Banner_name'] ?></h3>
                        <h1><?php echo $vl['Banner_Desc'] ?></h1>
                        <!-- <p>
                            fresh restaurant
                        </p> -->
                        <!-- <a href="#" class="btn">order Now</a> -->
                    </div>
                </div>
                <?php } ?>

                <!-- <div class="swiper-slide slide slide3">
                    <div class="content">
                        <img src="images/crown-symbol.png">

                        <h3>we are open</h3>
                        <h1>fresh fruits</h1>
                        <p>
                            you will love it
                        </p>
                        <a href="#" class="btn">order Now</a>
                    </div>
                </div> -->




                <!-- <div class="swiper-slide slide slide2">
                    <div class="content">
                        <img src="images/crown-symbol.png">

                        <h3>sale of 10% this dish</h3>
                        <h1>the fresh</h1>
                        <p>
                            fresh restaurant
                        </p>
                        <a href="#" class="btn">order Now</a>
                    </div>
                </div>


                <div class="swiper-slide slide slide3">
                    <div class="content">
                        <img src="images/crown-symbol.png">

                        <h3>we are open</h3>
                        <h1>fresh fruits</h1>
                        <p>
                            you will love it
                        </p>
                        <a href="#" class="btn">order Now</a>
                    </div>
                </div> -->

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>


    <section class="welcome" id="about">
        <h1 class="heading" style="color:gold"><strong><u>WELCOME TO THE HUNGRY HEAVEN RESTURANT</u></strong></h1>
        <center>
            <h3 class="sub-heading" style="color:cyan"> ~ Expand your exclusive time with our service ~ </h3>
        </center>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="pics/cake2.jpg">
                </div>

                <div class="content">
                    <h3 style="color:red">BIRTHDAY PARTY CELEBRATION</h3>
                    <p style="color:white">
                        At The Hungry Heaven Restaurant, we are delighted to offer our customers a truly memorable and
                        joyful experience when it comes to celebrating birthdays. Our dedicated team is committed to
                        making each birthday party a special and unforgettable occasion for both children and adults
                        alike.
                    </p>
                    <a href="birthday.php" class="btn">Read More</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_first">
                        Book Now
                    </button>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="pics/anniversary.jpg">
                </div>

                <div class="content">
                    <h3 style="color:green">ANNIVERSARY CELEBRATION</h3>
                    <p style="color:white">
                        At The Hungry Heaven Restaurant, we take great joy in celebrating the special milestone of
                        anniversaries with our valued customers. Whether you're commemorating your wedding anniversary,
                        a milestone in your relationship, or any other significant occasion, we are dedicated to making
                        your anniversary celebration a truly unforgettable experience.
                    </p>
                    <a href="anniversary.php" class="btn">Read More</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_second">
                        Book Now
                    </button>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="pics/BACHELOR.jpg" width="871">
                </div>

                <div class="content">
                    <h3 style="color:blue">BACHELOR'S PARTY CELEBRATION</h3>
                    <p style="color:white">
                        At The Hungry Heaven Restaurant, we understand that a bachelor's party is a once-in-a-lifetime
                        event that deserves an unforgettable celebration. Whether you're bidding farewell to singlehood
                        or celebrating the upcoming wedding, our restaurant is the perfect venue to host an
                        extraordinary bachelor's party that will create memories to last a lifetime.
                    </p>
                    <a href="bachelor.php" class="btn">Read More</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_third">
                        Book Now
                    </button>
                </div>
            </div>

        </div>
    </section>



    <section class="welcome" id="about">

        <center>
            <h3 class="sub-heading" style="color:cyan"> ~ Luxury & Quality ~ </h3>
        </center>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="pics/professionallevel.jpg">
                </div>

                <div class="content">
                    <h3 style="color:darkorange">PROFESSIONAL LEVEL</h3>
                    <p style="color:white">
                        The Hungry Haven restaurant takes professionalism to a whole new level.
                        From the moment you step inside, you can feel the dedication and expertise of the staff.....
                    </p>
                    <a href="professionallevel.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/post-thumb-2.jpg">
                </div>

                <div class="content">
                    <h3 style="color:slateblue">FRESH FOOD GUARANTEED</h3>
                    <p style="color:white">
                        At The Hungry Haven restaurant, we guarantee fresh food every time.
                        We take great pride in serving only the freshest ingredients to our valued customers.....
                    </p>
                    <a href="freshfood.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/post-thumb-7jpg.jpg" width="871">
                </div>

                <div class="content">
                    <h3 style="color:deeppink">THE MENU IS PLENTIFUL</h3>
                    <p style="color:white">
                        At The Hungry Haven restaurant, our menu is abundant with delicious options.
                        We offer a wide variety of dishes to cater to every taste and preference.....
                    </p>
                    <a href="plentiful.php" class="btn">Read More</a>
                </div>
            </div>

        </div>
    </section>



    <!-- our menu section start -->
    <section class="our-menu" id="menu">
        <h1 class="heading">our food menu</h1>
        <center>
            <h3 class="sub-heading"> ~ see what we offer ~ </h3>
        </center>

        <div class="menu-container">


            <!-- Main Course Menu -->
            <div class="item">
                <div class="item-name">
                    <h2>Main Course</h2>
                    <img src="images/drinks.png">
                </div>

                <div class="item-body">
                    <div class="item-menu">
                        <h3>Panner Masala</h3>
                        <span class="dots"></span>
                        <h3>₹240</h3>
                    </div>

                    <div class="item-body">
                        <div class="item-menu">
                            <h3>Chicken Curry</h3>
                            <span class="dots"></span>
                            <h3>₹280</h3>
                        </div>

                        <div class="item-body">
                            <div class="item-menu">
                                <h3>Palak Mushroom</h3>
                                <span class="dots"></span>
                                <h3>₹210</h3>
                            </div>

                            <div class="item-menu">
                                <h3>Veg Kadhai</h3>
                                <span class="dots"></span>
                                <h3>₹220</h3>
                            </div>



                        </div>
                    </div>


                    <!-- Soups & Salads Menu -->
                    <div class="item">
                        <div class="item-name">
                            <h2>Soups & Salads</h2>
                            <img src="images/drinks.png">
                        </div>
                        <div class="item-body">



                            <div class="item-menu">
                                <h3>Veg Mushroom Soup</h3>
                                <span class="dots"></span>
                                <h3>₹260</h3>
                            </div>

                            <div class="item-menu">
                                <h3>Veg Manchow Soup</h3>
                                <span class="dots"></span>
                                <h3>₹230</h3>
                            </div>


                            <div class="item-menu">
                                <h3>Chicken Soup</h3>
                                <span class="dots"></span>
                                <h3>₹250</h3>
                            </div>


                            <div class="item-menu">
                                <h3>Chicken Manchow Soup</h3>
                                <span class="dots"></span>
                                <h3>₹257</h3>
                            </div>
                        </div>
                    </div>


                    <!-- Drinks Menu -->
                    <div class="item">
                        <div class="item-name">
                            <h2>Drinks</h2>
                            <img src="images/drinks.png">
                        </div>
                        <div class="item-body">


                            <div class="item-menu">
                                <h3>Oreo Milk Shake</h3>
                                <span class="dots"></span>
                                <h3>₹100</h3>
                            </div>

                            <div class="item-menu">
                                <h3>Mango Shake</h3>
                                <span class="dots"></span>
                                <h3>₹130</h3>
                            </div>


                            <div class="item-menu">
                                <h3>Mango Lassi</h3>
                                <span class="dots"></span>
                                <h3>₹110</h3>
                            </div>

                            <div class="item-menu">
                                <h3>Mango Mojito</h3>
                                <span class="dots"></span>
                                <h3>₹140</h3>
                            </div>



                        </div>
                    </div>



                    <!-- Desserts Menu -->
                    <div class="item">
                        <div class="item-name">
                            <h2>Desserts</h2>
                            <img src="images/drinks.png">
                        </div>
                        <div class="item-body">



                            <div class="item-menu">
                                <h3>Ice-Cream</h3>
                                <span class="dots"></span>
                                <h3>₹80</h3>
                            </div>

                            <div class="item-menu">
                                <h3>Butter Scotch</h3>
                                <span class="dots"></span>
                                <h3>₹90</h3>
                            </div>

                            <div class="item-menu">
                                <h3>Mishti Doi</h3>
                                <span class="dots"></span>
                                <h3>₹60</h3>
                            </div>

                            <div class="item-menu">
                                <h3>Rosogolla</h3>
                                <span class="dots"></span>
                                <h3>₹76</h3>
                            </div>

                        </div>
                    </div>
                </div>

                <br>
                <div>
                    <a href="menu.php" class="btn">More Menu</a>
                </div>
    </section>
    <!-- our menu section ends -->





    <!-- our team section start  -->
    <section class="our-team" id="team">
        <h1 class="heading">Our Talented Chef</h1>
        <center>
            <h3 class="sub-heading"> ~ Experience & Enthusiasm ~ </h3>
        </center>


        <div class="our-chef">
            <!-- Chef 1 male -->
            <div class="item">
                <div class="image">
                    <img src="pics/chef-1.jpg" height="550px">
                </div>

                <div class="chef-info">
                    <div>
                        <h3>Christopher Mitchell</h3>
                        <span>Chef</span>

                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- chef 2 male -->
            <div class="item">
                <div class="image">
                    <img src="pics/chef-6.jpg" height="550px">
                </div>

                <div class="chef-info">
                    <div>
                        <h3>Benjamin Thompson</h3>
                        <span>Chef</span>

                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- chef 3 female -->
            <div class="item">
                <div class="image">
                    <img src="pics/chef-3.jpg">
                </div>

                <div class="chef-info">
                    <div>
                        <h3>Sophia Roberts</h3>
                        <span>Chef</span>

                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- our team section end  -->



    <!-- our reservation section start -->
    <div class="reservation" id="reservation">
        <div class="image">

        </div>

        <div class="form">
            <h1 class="heading">Book a table</h1>
            <center>
                <h3 class="sub-heading">~ check out our place ~</h3>
            </center>
            <center>
                <h6 class="sub-heading">~ Per person booking charge is ₹1150 ~</h6>
            </center>

            <form method="POST" action="admin/action.php">
                <div class="form-holder">
                    <div>
                        <label>
                            <h1>Enter guest details:</h1>
                        </label>
                        <input type="text" name="name" id="name" placeholder="Name" required>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <input type="number" name="phone" id="phone" placeholder="Phone" required>
                        <input type="text" name="date" id="date" placeholder="Date" required>
                        <input type="text" name="time" id="time" placeholder="Time" required>
                    </div>
                    <div>
                        <label for="people">
                            <h1>Please select your booking details:</h1>
                        </label>
                        <select name="people" id="no_of_people">
                            <option disabled selected value>Select People</option>
                            <option value="1">1 people</option>
                            <option value="2">2 people</option>
                            <option value="3">3 people</option>
                            <option value="4">4 people</option>
                            <option value="5">5 people</option>
                            <option value="6">6 people</option>
                        </select>
                        <label for="price">
                            <h1>Charge per people:</h1>
                        </label>
                        <input type="number" value="1150" id="price_per_people" placeholder="price" readonly>
                        <label for="price">
                            <h1>Total Price:</h1>
                        </label>
                        <input type="number" id="totalprice" name="totalbookingprice" placeholder="Total Price"
                            readonly><br>
                        <!-- <input type="number" name="charge" value="100" id="phone" placeholder="Phone" readonly> -->
                    </div>
                </div>
                <center><button type="submit" name="order_table" value="order_table" class="btn btn-primary">Book
                        Now</button></center>
            </form>
        </div>
    </div>
    <!-- our reservation section end -->


    <!-- footer section start -->


    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1"
                    href="https://www.facebook.com/profile.php?id=100094006544292" role="button"><i
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
        </div>
        </div>
        <!-- </div> -->


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



    <!-- birthday booking Modal -->
    <div class="modal fade" id="modal_first" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="modal-body">
                    <center><h1 class="modal-title fs-5" id="exampleModalLabel">Birthday Celebration Booking</h1></center>

                    <form method="POST" action="admin/action.php">
                        <div class="form-group">
                            <label for="name">
                                <h3>Name</h3>
                            </label>
                            <h4><input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name here..."
                                required></h4>
                        </div>

                        <div class="form-group">
                            <label for="email">
                                <h3>Email</h3>
                            </label>
                            <h4><input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email here..." required></h4>
                        </div>

                        <div class="form-group">
                            <label for="phone">
                                <h3>Phone No.</h3>
                            </label>
                            <h4><input type="number" name="phone" class="form-control" id="phone" placeholder="Enter your phone here..." required></h4>
                        </div>

                        <div class="form-group">
                            <label for="date">
                                <h3>Date</h3>
                            </label>
                            <h4><input type="date" name="date" class="form-control" id="date" placeholder="date"></h4>
                        </div>

                        <div class="form-group">
                            <label for="time">
                                <h3>Time</h3>
                            </label>
                            <h4><input type="time" name="time" class="form-control" id="time" placeholder="Time"></h4>
                        </div>

                        <div>
                            <label for="people">
                                <h3>Please select your booking details:</h3>
                            </label>
                            <br>
                            <select name="people" id="no_of_people_selected_all">

                                <option disabled  value><h4>Select People</h4></option>
                                <option value="1"><h4>1 people</h4></option>
                                <option value="2"><h4>2 people</h4</option>
                                <option value="3"><h4>3 people</h4></option>
                                <option value="4"><h4>4 people</h4></option>
                                <option value="5"><h4>5 people</h4></option>
                                <option value="6"><h4>6 people</h4></option>
                            </select>
                        </div>

                        <div>
                            <label for="price">
                                <h3>Charge per people:</h3>
                            </label>
                        </div>

                        <div>
                            <h4><input type="number" value="500" id="price_per_people_birthday" placeholder="price" readonly></h4>
                        </div>
                        <div>

                            <label for="price">
                                <h3>Total Price:</h3>
                            </label>
                            <br>
                            <h4><input type="number" id="totalpricebook" name="totalbookingprice" placeholder="Total Price"
                                readonly></h4>
                        </div>

                        <small id="emailHelp" class="form-text text-muted"><h4>We'll never share your email with anyone
                                else.</h4></small>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    style="background-color:green !important">Close</button>
                                <button  type="submit" name="birthday_booking" value="birthday_booking" class="btn btn-primary"
                                style="background-color:green !important">Book Now</button>
                                <!-- <button type="submit" class="btn btn-success">save</button> -->
                            </div>
                            </form>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>





    <!-- anniversary booking Modal -->
    <div class="modal fade" id="modal_second" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="modal-body">
                    <center><h1 class="modal-title fs-5" id="exampleModalLabel">Anniversary Booking</h1></center>

                    <form method="POST" action="admin/action.php">
                        <div class="form-group">
                            <label for="name">
                                <h3>Name</h3>
                            </label>
                            <h4><input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name here..."
                                required></h4>
                        </div>

                        <div class="form-group">
                            <label for="email">
                                <h3>Email</h3>
                            </label>
                            <h4><input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email here..." required></h4>
                        </div>

                        <div class="form-group">
                            <label for="phone">
                                <h3>Phone No.</h3>
                            </label>
                            <h4><input type="number" name="phone" class="form-control" id="phone" placeholder="Enter your phone here..." required></h4>
                        </div>

                        <div class="form-group">
                            <label for="date">
                                <h3>Date</h3>
                            </label>
                            <h4><input type="date" name="date" class="form-control" id="date" placeholder="date"></h4>
                        </div>

                        <div class="form-group">
                            <label for="time">
                                <h3>Time</h3>
                            </label>
                            <h4><input type="time" name="time" class="form-control" id="time" placeholder="Time"></h4>
                        </div>

                        <div>
                            <label for="people">
                                <h3>Please select your booking details:</h3>
                            </label>
                            <br>
                            <select name="people" id="no_of_people_selected_second">

                                <option disabled  value><h4>Select People</h4></option>
                                <option value="1"><h4>1 people</h4></option>
                                <option value="2"><h4>2 people</h4</option>
                                <option value="3"><h4>3 people</h4></option>
                                <option value="4"><h4>4 people</h4></option>
                                <option value="5"><h4>5 people</h4></option>
                                <option value="6"><h4>6 people</h4></option>
                            </select>
                        </div>

                        <div>
                            <label for="price">
                                <h3>Charge per people:</h3>
                            </label>
                        </div>

                        <div>
                            <h4><input type="number" value="500" id="price_per_people_anniversary" placeholder="price" readonly></h4>
                        </div>
                        <div>

                            <label for="price">
                                <h3>Total Price:</h3>
                            </label>
                            <br>
                            <h4><input type="number" id="totalpriceanni" name="totalbookingprice" placeholder="Total Price"
                                readonly></h4>
                        </div>

                        <small id="emailHelp" class="form-text text-muted"><h4>We'll never share your email with anyone
                                else.</h4></small>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    style="background-color:green !important">Close</button>
                                <button  type="submit" name="anniversary_booking" value="anniversary_booking" class="btn btn-primary"
                                style="background-color:green !important">Book Now</button>
                                <!-- <button type="submit" class="btn btn-success">save</button> -->
                            </div>
                            </form>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>







        <!-- bachelor booking Modal -->
        <div class="modal fade" id="modal_third" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="modal-body">
                    <center><h1 class="modal-title fs-5" id="exampleModalLabel">Bachelor's Party Booking</h1></center>

                    <form method="POST" action="admin/action.php">
                        <div class="form-group">
                            <label for="name">
                                <h3>Name</h3>
                            </label>
                            <h4><input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name here..."
                                required></h4>
                        </div>

                        <div class="form-group">
                            <label for="email">
                                <h3>Email</h3>
                            </label>
                            <h4><input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email here..." required></h4>
                        </div>

                        <div class="form-group">
                            <label for="phone">
                                <h3>Phone No.</h3>
                            </label>
                            <h4><input type="number" name="phone" class="form-control" id="phone" placeholder="Enter your phone here..." required></h4>
                        </div>

                        <div class="form-group">
                            <label for="date">
                                <h3>Date</h3>
                            </label>
                            <h4><input type="date" name="date" class="form-control" id="date" placeholder="date"></h4>
                        </div>

                        <div class="form-group">
                            <label for="time">
                                <h3>Time</h3>
                            </label>
                            <h4><input type="time" name="time" class="form-control" id="time" placeholder="Time"></h4>
                        </div>

                        <div>
                            <label for="people">
                                <h3>Please select your booking details:</h3>
                            </label>
                            <br>
                            <select name="people" id="no_of_people_selected_third">

                                <option disabled  value><h4>Select People</h4></option>
                                <option value="1"><h4>1 people</h4></option>
                                <option value="2"><h4>2 people</h4</option>
                                <option value="3"><h4>3 people</h4></option>
                                <option value="4"><h4>4 people</h4></option>
                                <option value="5"><h4>5 people</h4></option>
                                <option value="6"><h4>6 people</h4></option>
                            </select>
                        </div>

                        <div>
                            <label for="price">
                                <h3>Charge per people:</h3>
                            </label>
                        </div>

                        <div>
                            <h4><input type="number" value="500" id="price_per_people_bachelor" placeholder="price" readonly></h4>
                        </div>
                        <div>

                            <label for="price">
                                <h3>Total Price:</h3>
                            </label>
                            <br>
                            <h4><input type="number" id="totalpricebach" name="totalbookingprice" placeholder="Total Price"
                                readonly></h4>
                        </div>

                        <small id="emailHelp" class="form-text text-muted"><h4>We'll never share your email with anyone
                                else.</h4></small>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    style="background-color:green !important">Close</button>
                                <button  type="submit" name="bachelor_booking" value="bachelor_booking" class="btn btn-primary"
                                style="background-color:green !important">Book Now</button>
                                <!-- <button type="submit" class="btn btn-success">save</button> -->
                            </div>
                            </form>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>




</body>







<script>
    $(document).ready(function() {
        $('#no_of_people').click(function() {
            var people = $(this).val();
            // alert(people);
            var price = $('#price_per_people').val();
            // alert(price);
            var totalprice = people * price;
            $('#totalprice').val(totalprice);
        });

        $('#no_of_people_selected_all').click(function() {
            var total_people = $(this).val();
            var price = $('#price_per_people_birthday').val();
            // alert(total_people);
            // alert(price);
            var totalprice = total_people * price;
            $('#totalpricebook').val(totalprice);
        });
        $('#no_of_people_selected_second').click(function() {
            var total_people = $(this).val();
            var price = $('#price_per_people_anniversary').val();
            // alert(total_people);
            // alert(price);
            var totalprice = total_people * price;
            $('#totalpriceanni').val(totalprice);
        });
        $('#no_of_people_selected_third').click(function() {
            var total_people = $(this).val();
            var price = $('#price_per_people_bachelor').val();
            // alert(total_people);
            // alert(price);
            var totalprice = total_people * price;
            $('#totalpricebach').val(totalprice);
        });
    });
    </script>


</html>
