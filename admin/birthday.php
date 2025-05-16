<?php

include 'connection.php';
$sql = "SELECT * FROM birthday Where status=1";
$query = mysqli_query($conn,$sql);

$result=array(); // we are defining blank array
while ($data = mysqli_fetch_assoc($query)) {
  $result[] = $data;
}

// echo '<pre>';
// print_r( $result);die;



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Birthday Bookings</title>
    <link href="side.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>
    <?php include 'sidebar.php' ?>
    <br>
    <br>
    <br>

    <center><h1>Birthday Bookings</h1></center>
    <main style="margin-top: 12px;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- <div class="static-table"> -->
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">People</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Total Booking Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; foreach ($result as $vl) { $i++; ?>
                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $vl['people'] ?></td>
                                        <td><?php echo $vl['time'] ?></td>
                                        <td><?php echo $vl['phone'] ?></td>
                                        <td><?php echo $vl['date'] ?></td>
                                        <td><?php echo $vl['name'] ?></td>
                                        <td><?php echo $vl['email'] ?></td>
                                        <td><?php echo $vl['totalbookingprice'] ?></td>
                                        <td><button class="btn btn-sm btn-success editbutton"
                                                data-toggle="modal"
                                                data-target="#myfirstmodal"
                                                data-bookid="<?php echo $vl['id'] ?>"
                                                data-people="<?php echo $vl['people'] ?>"
                                                data-time="<?php echo $vl['time'] ?>"
                                                data-phone="<?php echo $vl['phone'] ?>"
                                                data-date="<?php echo $vl['date'] ?>"
                                                data-name="<?php echo $vl['name'] ?>"
                                                data-email="<?php echo $vl['email'] ?>"
                                                data-totalbookingprice="<?php echo $vl['totalbookingprice'] ?>">
                                                edit</button>

                                            <a href="action.php?delid='<?php echo $vl['id']?>'&delbirth=delbirth"
                                                onclick="return confirm('Are you Sure You Want to Delete')">
                                                <button class="btn btn-sm btn-danger">delete</button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <center>
    <button onclick="window.print()">Print</button>
</center>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>



    </main>

    <div class="modal fade" id="myfirstmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Customer Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="action.php" enctype="multipart/form-data">
                        <!-- enctype is used for media files like photo, video, etc -->
                        <input type="hidden" class="form-control" name="booking_id" id="update_idd"
                            aria-describedby="emailHelp" required>

                        <div class="form-group">
                            <label for="exampleInputPassword1">name</label>
                            <input type="text" id="name_m" name="name" class="form-control" id="name_m">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">email</label>
                            <input type="email" class="form-control" id="email_m" name="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your details with
                                anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">phone</label>
                            <input type="number" id="phone_m" name="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">date</label>
                            <input type="date" name="date" class="form-control" id="date_m">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">time</label>
                            <input type="time" id="time_m" name="time" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">people</label required>
                            <input type="text" id="people_m" class="form-control" name="people" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>

                        <img id="img_m2">

                        <div class="form-group">
                            <label for="exampleInputPassword1">Booking Price</label>
                            <input type="text" id="totalbookingprice" name="totalbookingprice" class="form-control">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" name="update_birthday" value="update_birthday" class="btn btn-primary"><span
                                class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>




    <script>
    $(document).ready(function() {
        $(".editbutton").click(function() {
            var bookid = $(this).attr('data-bookid');
            var people = $(this).attr('data-people');
            var time = $(this).attr('data-time');
            var phone = $(this).attr('data-phone');
            var date = $(this).attr('data-date');
            var name = $(this).attr('data-name');
            var email = $(this).attr('data-email');
            var totalbookingprice = $(this).attr('data-totalbookingprice');

            $('#update_idd').val(bookid);
            $('#people_m').val(people);
            $('#time_m').val(time);
            $('#phone_m').val(phone);
            $('#date_m').val(date);
            $('#name_m').val(name);
            $('#email_m').val(email);
            $('#totalbookingprice').val(totalbookingprice);
        });
    });

    // window.print();

    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</html>




<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
