<?php
    include "connection.php";

    //  print_r($_POST);die;
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
        window.location.href="../reservation.php";
        </script>';
    }else{
        echo '<script LANGUAGE ="javascript">
        window.alert("Not Saved!");
        window.location.href="../reservation.php";
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

    $sql = "UPDATE booking SET people = '$people', time = '$time', phone = '$phone', date = '$date', name = '$name', email = '$email', totalbookingprice = '$totalbookingprice'  WHERE id = $update";
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






?>


<?php
include 'connection.php';


// The below code is used for adding banner name, description and banner image to the database.
if(isset($_POST["save_banner"])){

    // print_r($_POST);die;
    // Array (
        // [banner_name] => Banner3
        // [banner_desc] => desc3
        // [save_banner] => save_banner
        // )

    $banner_name=$_POST["banner_name"];
    $banner_desc=$_POST["banner_desc"];



    // print_r($_FILES['img']);die;
    // Array (
    //     [name] => Hulk3.jpg
    //     [type] => image/jpeg
    //     [tmp_name] => C:\xampp\tmp\phpDCF6.tmp
    //     [error] => 0
    //     [size] => 67820
    //     )

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
