<?php
    include "connection.php";

    //  print_r($_POST);die;






    // order table
    if(isset($_POST['order_table'])){
        $people=$_POST['people'];
        $time=$_POST['time'];
        $phone=$_POST['phone'];
        $date=date('Y-m-d');
        $name=$_POST['name'];
        $email=$_POST['email'];
        $totalbookingprice=$_POST['totalbookingprice'];


    $sql="INSERT INTO booking (people,time,phone,date,name,email,totalbookingprice)
    values('$people','$time','$phone','$date','$name','$email','$totalbookingprice')";
    $response = mysqli_query($conn,$sql);

    if($response == true){
        echo '<script LANGUAGE="javascript">
        window.alert("Saved Successfully!");
        window.location.href="../index.php";
        </script>';
    }else{
        echo '<script LANGUAGE ="javascript">
        window.alert("Not Saved!");
        window.location.href="../index.php";
        </script>';
    }
}

if(isset($_POST['update_booking'])){
    // print_r($_POST);die;
    $people = $_POST['people'];
    $time = $_POST['time'];
    $phone = $_POST['phone'];
    $date = date('Y-m-d');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $totalbookingprice=$_POST['totalbookingprice'];
    $update = $_POST['booking_id'];

    $sql = "UPDATE booking SET people = '$people',
    time = '$time',
    phone = '$phone',
    date = '$date',
    name = '$name',
    email = '$email',
    totalbookingprice = '$totalbookingprice'  WHERE id = $update";
// print_r($sql);die;
    $query = mysqli_query($conn, $sql);

    if($query==true){
        echo '<script LANGUAGE="javascript">
        window.alert("Saved Successfully!");
        window.location.href="tables.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Not Saved!");
        window.location.href="tables.php";
        </script>';
    }
}

if(isset($_GET['delcust'])){
    $delete_id = $_GET['delid'];
    $sql = "UPDATE booking SET status=0 WHERE id=$delete_id";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo '<script LANGUAGE="javascript">
        window.alert("Delete Successful!");
        window.location.href="tables.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Deletion Failed!");
        window.location.href="tables.php";
        </script>';
    }
}
// order table end









// birthday booking
if(isset($_POST['birthday_booking'])){
    $people=$_POST['people'];
    $time=$_POST['time'];
    $phone=$_POST['phone'];
    // $date=date('Y-m-d');
    $date=$_POST['date'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $totalbookingprice=$_POST['totalbookingprice'];
    // print_r($name);die;

$sql="INSERT INTO birthday (people,time,phone,date,name,email,totalbookingprice)
values('$people','$time','$phone','$date','$name','$email','$totalbookingprice')";
$response = mysqli_query($conn,$sql);

if($response == true){
    echo '<script LANGUAGE="javascript">
    window.alert("Booked Successfully!");
    window.location.href="../index.php";
    </script>';
}else{
    echo '<script LANGUAGE ="javascript">
    window.alert("Not Saved!");
    window.location.href="../index.php";
    </script>';
}
}


if(isset($_POST['update_birthday'])){
    // print_r($_POST);die;
    $people = $_POST['people'];
    $time = $_POST['time'];
    $phone = $_POST['phone'];
    // $date = date('Y-m-d');
    $date=$_POST['date'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $totalbookingprice=$_POST['totalbookingprice'];
    $update = $_POST['booking_id'];

    $sql = "UPDATE birthday SET people = '$people', time = '$time', phone = '$phone', date = '$date', name = '$name', email = '$email', totalbookingprice = '$totalbookingprice'  WHERE id = $update";
// print_r($sql);die;
    $query = mysqli_query($conn, $sql);

    if($query==true){
        echo '<script LANGUAGE="javascript">
        window.alert("Saved Successfully!");
        window.location.href="birthday.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Not Saved!");
        window.location.href="birthday.php";
        </script>';
    }
}


if(isset($_GET['delbirth'])){
    $delete_id = $_GET['delid'];
    $sql = "UPDATE birthday SET status=0 WHERE id=$delete_id";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo '<script LANGUAGE="javascript">
        window.alert("Delete Successful!");
        window.location.href="birthday.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Deletion Failed!");
        window.location.href="birthday.php";
        </script>';
    }
}












// anniversary booking
if(isset($_POST['anniversary_booking'])){
    $people=$_POST['people'];
    $time=$_POST['time'];
    $phone=$_POST['phone'];
    // $date=date('Y-m-d');
    $date=$_POST['date'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $totalbookingprice=$_POST['totalbookingprice'];


$sql="INSERT INTO anniversary (people,time,phone,date,name,email,totalbookingprice)
values('$people','$time','$phone','$date','$name','$email','$totalbookingprice')";
$response = mysqli_query($conn,$sql);

if($response == true){
    echo '<script LANGUAGE="javascript">
    window.alert("Saved Successfully!");
    window.location.href="../index.php";
    </script>';
}else{
    echo '<script LANGUAGE ="javascript">
    window.alert("Not Saved!");
    window.location.href="../index.php";
    </script>';
}
}

if(isset($_POST['update_anniversary'])){
    // print_r($_POST);die;
    $people = $_POST['people'];
    $time = $_POST['time'];
    $phone = $_POST['phone'];
    // $date = date('Y-m-d');
    $date=$_POST['date'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $totalbookingprice=$_POST['totalbookingprice'];
    $update = $_POST['booking_id'];

    $sql = "UPDATE anniversary SET people = '$people', time = '$time', phone = '$phone', date = '$date', name = '$name', email = '$email', totalbookingprice = '$totalbookingprice'  WHERE id = $update";
// print_r($sql);die;
    $query = mysqli_query($conn, $sql);

    if($query==true){
        echo '<script LANGUAGE="javascript">
        window.alert("Saved Successfully!");
        window.location.href="birthday.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Not Saved!");
        window.location.href="birthday.php";
        </script>';
    }
}


if(isset($_GET['delbirth'])){
    $delete_id = $_GET['delid'];
    $sql = "UPDATE birthday SET status=0 WHERE id=$delete_id";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo '<script LANGUAGE="javascript">
        window.alert("Delete Successful!");
        window.location.href="birthday.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Deletion Failed!");
        window.location.href="birthday.php";
        </script>';
    }
}
// anniversary end










// bachelor booking
if(isset($_POST['bachelor_booking'])){
    $people=$_POST['people'];
    $time=$_POST['time'];
    $phone=$_POST['phone'];
    // $date=date('Y-m-d');
    $date=$_POST['date'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $totalbookingprice=$_POST['totalbookingprice'];


$sql="INSERT INTO bachelor (people,time,phone,date,name,email,totalbookingprice)
values('$people','$time','$phone','$date','$name','$email','$totalbookingprice')";
$response = mysqli_query($conn,$sql);

if($response == true){
    echo '<script LANGUAGE="javascript">
    window.alert("Saved Successfully!");
    window.location.href="../index.php";
    </script>';
}else{
    echo '<script LANGUAGE ="javascript">
    window.alert("Not Saved!");
    window.location.href="../index.php";
    </script>';
}
}
if(isset($_POST['update_bachelor'])){
    // print_r($_POST);die;
    $people = $_POST['people'];
    $time = $_POST['time'];
    $phone = $_POST['phone'];
    // $date = date('Y-m-d');
    $date=$_POST['date'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $totalbookingprice=$_POST['totalbookingprice'];
    $update = $_POST['booking_id'];

    $sql = "UPDATE bachelor SET people = '$people', time = '$time', phone = '$phone', date = '$date', name = '$name', email = '$email', totalbookingprice = '$totalbookingprice'  WHERE id = $update";
// print_r($sql);die;
    $query = mysqli_query($conn, $sql);

    if($query==true){
        echo '<script LANGUAGE="javascript">
        window.alert("Saved Successfully!");
        window.location.href="bachelor.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Not Saved!");
        window.location.href="bachelor.php";
        </script>';
    }
}


if(isset($_GET['delbirth'])){
    $delete_id = $_GET['delid'];
    $sql = "UPDATE bachelor SET status=0 WHERE id=$delete_id";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo '<script LANGUAGE="javascript">
        window.alert("Delete Successful!");
        window.location.href="bachelor.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Deletion Failed!");
        window.location.href="bachelor.php";
        </script>';
    }
}
// bachelor end





// subscriber start
if(isset($_POST['subscribe'])){
    $subscriber=$_POST['subscriber'];
    // print_r($subscriber);die;


$sql="INSERT INTO subscriber (subscriber)
values('$subscriber')";
$response = mysqli_query($conn,$sql);

if($response == true){
    echo '<script LANGUAGE="javascript">
    window.alert("Subscribed Successfully!");
    window.location.href="../index.php";
    </script>';
}else{
    echo '<script LANGUAGE ="javascript">
    window.alert("Not Saved!");
    window.location.href="../index.php";
    </script>';
}
}




if(isset($_POST['update_subscriber'])){
    // print_r($_POST); // Uncomment this line for debugging
    $subscriber = $_POST['subscriber'];
    $sub_id = $_POST['sub_id'];
    $sql = "UPDATE subscriber SET subscriber = '$subscriber' WHERE id = $sub_id";
    // print_r($sql); // Uncomment this line for debugging
    $query = mysqli_query($conn, $sql);

    if ($query === true) {
        echo '<script LANGUAGE="javascript">
        window.alert("Subscribe Successfully!");
        window.location.href="subscriber.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Not Saved!");
        window.location.href="subscriber.php";
        </script>';
    }
}



if(isset($_GET['delsubscriber'])){
    $delete_id = $_GET['delid'];
    $sql = "UPDATE subscriber SET status=0 WHERE id=$delete_id";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo '<script LANGUAGE="javascript">
        window.alert("Delete Successful!");
        window.location.href="subscriber.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Deletion Failed!");
        window.location.href="subscriber.php";
        </script>';
    }
}
// subscriber end



// contact start
if(isset($_POST['contact'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    // print_r($message);die;


$sql="INSERT INTO contact (name,email,phone,message)
values('$name','$email','$phone','$message')";
$response = mysqli_query($conn,$sql);

if($response == true){
    echo '<script LANGUAGE="javascript">
    window.alert("Saved Successfully!");
    window.location.href="../contact.php";
    </script>';
}else{
    echo '<script LANGUAGE ="javascript">
    window.alert("Not Saved!");
    window.location.href="../contact.php";
    </script>';
}
}

if(isset($_POST['update_contact'])){
    // print_r($_POST);die;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $contactus = $_POST['contactus_id'];

    $sql = "UPDATE contact SET name = '$name', email = '$email', phone = '$phone', message = '$message' WHERE id = $contactus";
// print_r($sql);die;
    $query = mysqli_query($conn, $sql);

    if($query==true){
        echo '<script LANGUAGE="javascript">
        window.alert("Saved Successfully!");
        window.location.href="contactus.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Not Saved!");
        window.location.href="contact.php";
        </script>';
    }
}






if(isset($_GET['delcontact'])){
    $delete_id = $_GET['delid'];
    $sql = "UPDATE contact SET status=0 WHERE id=$delete_id";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo '<script LANGUAGE="javascript">
        window.alert("Delete Successful!");
        window.location.href="contactus.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Deletion Failed!");
        window.location.href="contactus.php";
        </script>';
    }
}








// login start
    if(isset($_POST['login_user'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="SELECT * FROM login WHERE email='$email' AND password='$password'";
        $query= mysqli_query($conn,$sql);
        $result=mysqli_fetch_assoc($query);
        if(!empty($result['email']) && !empty($result['password'])){
            session_start();
            $_SESSION['email']=$result['email'];
            echo '<script LANGUAGE="javascript">
            window.alert("Login Successfully!");
            window.location.href="dashboard.php";
            </script>';
        }
        else{
            echo '<script LANGUAGE ="javascript">
            window.alert("Login Failed!");
            window.location.href="login.php";
            </script>';
        }
    }
// login end





?>


<?php
include 'connection.php';


// The below code is used for adding banner name, description and banner image to the database.
if(isset($_POST["save_banner"])){
    ;

    $banner_name=$_POST["banner_name"];
    $banner_desc=$_POST["banner_desc"];
    $img=$_FILES['img'];
    $imgname=$img['name'];          // Uesd to store image Name i.e Captain1.jpg
    $imgpath=$img['tmp_name'];      // C:\xampp\tmp\phpD1CA.tmp
    $error=$img['error'];           // 0
    if($error==0){
        $final_img='image/'.$imgname;     // where img is folder Name
        move_uploaded_file($imgpath,$final_img);
    }

    $sql="INSERT INTO banner (`banner_name`,`banner_desc`,`banner_img`) values('$banner_name', '$banner_desc', '$final_img')";
    $response= mysqli_query($conn,$sql);

    if($response == true){
        echo '<script LANGUAGE="javascript">
        window.alert("Saved Successfully!");
        window.location.href="banner.php"
        </script>';
    }
    else{
        echo '<script LANGUAGE="javascript">
        window.alert("Data Not Saved!");
        window.location.href="banner.php"
        </script>';
    }
}

if(isset($_POST['update_banner'])){
    // print_r($_POST);die;
    // print_r($_POST);die;
    // booking_id

    $update_id = $_POST['booking_id'];
    $banner_name = $_POST['banner_name'];
    $banner_desc = $_POST['banner_desc'];
    // $img = $_POST['img'];
    $img=$_FILES['img'];
    $imgname=$img['name'];          // Uesd to store image Name i.e Captain1.jpg
    $imgpath=$img['tmp_name'];      // C:\xampp\tmp\phpD1CA.tmp
    $error=$img['error'];           // 0
    if($error==0){
        $final_img='image/'.$imgname;     // where img is folder Name
        move_uploaded_file($imgpath,$final_img);
    }



    $sql = "UPDATE banner SET banner_name = '$banner_name', Banner_desc = '$banner_desc', banner_img = '$final_img' where id=$update_id" ;
// print_r($sql);die;
    $query = mysqli_query($conn, $sql);

    if($query==true){
        echo '<script LANGUAGE="javascript">
        window.alert("Saved Successfully!");
        window.location.href="banner.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Not Saved!");
        window.location.href="banner.php";
        </script>';
    }
}


if(isset($_GET['delbanner'])){
    // print_r($_GET);die;
    $delete_id = $_GET['delid'];
    $sql = "UPDATE banner SET status=0 WHERE id=$delete_id";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo '<script LANGUAGE="javascript">
        window.alert("Delete Successful!");
        window.location.href="banner.php";
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Deletion Failed!");
        window.location.href="banner.php";
        </script>';
    }
}

?>
