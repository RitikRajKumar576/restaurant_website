<html>

<head>
    <title>RESERVATION</title>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="about.php">About</a>
            <a href="#home">Contact Us</a>
        </nav>
    </header>



    <!-- our reservation section start -->

    <!-- <section> -->
    <div style="margin-top:100px;">
        <div class="reservation" id="reservation">
            <div class="image">

            </div>

            <div class="form">
                <h1 class="heading">Book a table</h1>
                <center>
                    <h3 class="sub-heading">~ check out our place ~</h3>
                </center>
                <center>
                    <h3 class="sub-heading">~ Per person booking charge is Rs 100 ~</h3>
                </center>

                <form method="POST" action="admin/actionreservation.php">
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
                        <label for="price">
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
                        <input type="number" value="100" id="price_per_people" placeholder="price" readonly>
                        <label for="price">
                            <h1>Total Price:</h1>
                        </label>
                        <input type="number" id="totalprice" name="totalbookingprice" placeholder="Total Price"><br>
                        <!-- <input type="number" name="charge" value="100" id="phone" placeholder="Phone" readonly> -->
                        </div>
                </div>
                    <center><button type="submit" name="order_table" value="order_table" class="btn btn-primary">Book
                            Now</button></center>
                </form>
            </div>
        </div>
    </div>
    <!-- </section> -->

    <!-- our reservation section end -->

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
                        </p>
                    </div>
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
    $(document).ready(function() {
        $('#no_of_people').change(function() {
            var people = $(this).val();
            // alert(people);
            var price = $('#price_per_people').val();
            // alert(price);
            var totalprice = people * price;
            $('#totalprice').val(totalprice);
        });
    });


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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>
