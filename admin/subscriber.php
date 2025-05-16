<?php

include 'connection.php';
$sql = "SELECT * FROM subscriber Where status=1";
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
    <title>Subscriber</title>
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

    <center><h1>Subscribers</h1></center>
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
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; foreach ($result as $vl) { $i++; ?>
                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $vl['subscriber'] ?></td>
                                        <td><button class="btn btn-sm btn-success editbutton"
                                                data-toggle="modal"
                                                data-target="#myfirstmodal"
                                                data-sub="<?php echo $vl['id'] ?>"
                                                data-subscriber="<?php echo $vl['subscriber'] ?>">
                                                edit</button>

                                            <a href="action.php?delid='<?php echo $vl['id']?>'&delsubscriber=delsubscriber"
                                                onclick="return confirm('Are you Sure You Want to Delete')">
                                                <button class="btn btn-sm btn-danger">delete</button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

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
                    <h5 class="modal-title" id="exampleModalLabel">Update Customer Subscriber Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="action.php" enctype="multipart/form-data">
                        <!-- enctype is used for media files like photo, video, etc -->
                        <input type="hidden" class="form-control" name="sub_id" id="update_idd"
                            aria-describedby="emailHelp" required>



                        <div class="form-group">
                            <label for="exampleInputPassword1">email</label>
                            <input type="subscriber" class="form-control" id="subscriber" name="subscriber">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your details with
                                anyone else.</small>
                        </div>




                        <button type="submit" name="update_subscriber" value="update_subscriber" class="btn btn-primary"><span
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
            var sub = $(this).attr('data-sub');
            var subscriber = $(this).attr('data-subscriber');
            // alert(sub);

            $('#update_idd').val(sub);
            $('#subscriber').val(subscriber);

        });
    });



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
