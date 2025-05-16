<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <link href="side.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">The Hungry Heaven | Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="tables.php">View Tables Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="subscriber.php">View Subscriber</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            View More Bookings
                        </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="birthday.php">Birthday Bookings</a>
                        <a class="dropdown-item" href="anniversary.php">Anniversary Bookings</a>
                        <a class="dropdown-item" href="bachelor.php">Bachelor's Party Booking</a>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="banner.php">Add Banner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Customer Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>

    </section>
</body>

</html>
