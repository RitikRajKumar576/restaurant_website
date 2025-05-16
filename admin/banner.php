<!-- the below php code is used to display the banner details in the dashboard beside add customer page -->
<?php

include 'connection.php';
$sql="SELECT * FROM banner where status=1";
$query=mysqli_query($conn,$sql);

while($data=mysqli_fetch_assoc($query)){
  $result[]=$data;
}

// print_r($result);die;
// Array (
//   [0] => Array (
//     [id] => 1
//     [banner_name] => Banner1
//     [banner_desc] => desc1
//     [banner_img] =>
//     [status] => 1
//     )
//   )
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Banner</title>
</head>

<!-- css cdn -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<body>
    <!-- including sidebar.php page with addbanner.php -->
    <?php include "sidebar.php"?>

    <!-- The main banner program starts from here  -->
    <main style="margin-top: 60px">
        <div class="container pt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">

                            <form method="POST" action="action.php" enctype="multipart/form-data">
                                <h3>Add Banner</h3>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Banner Name</label>
                                    <input type="text" name="banner_name" value="" class="form-control"
                                        id="InputBannerName" aria-describedby="emailHelp" Required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Banner Description</label>
                                    <input type="varchar" name="banner_desc" value="" class="form-control"
                                        id="InputBannerDesc" aria-describedby="emailHelp" Required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Banner Img</label>
                                    <input type="file" name="img" class="form-control-file" id="BannerImage">
                                </div>

                                <button type="submit" name="save_banner" value="save_banner"
                                    class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">S_No</th>
                                        <th scope="col">Banner_name</th>
                                        <th scope="col">Banner_Desc</th>
                                        <th scope="col">Banner_img</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; foreach ($result as $vl) { $i++; ?>

                                    <tr>

                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $vl['id'] ?></td>
                                        <td><?php echo $vl['Banner_name'] ?></td>
                                        <td><?php echo $vl['Banner_Desc'] ?></td>
                                        <td> <img src="<?php echo $vl['Banner_img'] ?>" style="height:50px"></td>
                                        <td><button class="btn btn-sm btn-success editbutton"
                                                data-toggle="modal"
                                                data-target="#myfirstmodal"
                                                data-banner_id="<?php echo $vl['id'] ?>"
                                                data-banner_name="<?php echo $vl['Banner_name'] ?>"
                                                data-banner_desc="<?php echo $vl['Banner_Desc'] ?>"
                                                data-img="<?php echo $vl['Banner_img'] ?>">
                                                edit</button>
                                            <a href="action.php?delid=<?php echo $vl['id'] ?>&delbanner=delbanner"
                                                onclick="return confirm('Are you Sure You Want to Delete')">
                                            <button class="btn btn-sm btn-danger">delete</button></a>
                                        </td>

                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>



    <div class="modal fade" id="myfirstmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Banner Details</h5>
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
                            <label for="exampleInputPassword1">Banner_name</label>
                            <input type="text" id="banner_name_m" name="banner_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Banner_Desc</label>
                            <input type="varchar" class="form-control" id="banner_desc_m" name="banner_desc">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Banner_img</label>
                            <input type="file" name="img" class="form-control" id="img"required>
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" name="update_banner" value="update_banner" class="btn btn-primary"><span
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
        var banner_id = $(this).attr('data-banner_id');
        // alert(banner_id);
        var banner_name = $(this).attr('data-banner_name');
        // alert(banner_name);
        var banner_desc = $(this).attr('data-banner_desc');
        // alert(banner_desc);
        var img = $(this).attr('data-img');


        $('#update_idd').val(banner_id);
        $('#banner_name_m').val(banner_name);
        $('#banner_desc_m').val(banner_desc);
        $('#img').val(img);
    });
});
</script>

<!-- Js cdn -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>

</html>
