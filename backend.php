<?php
// Turn on error reporting
error_reporting(E_ALL);

// Display errors to the browser

ini_set('display_errors', 1);

include("Connection.php");
if(isset($_POST['add_student'])){
    $names=$_POST['names'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];

    if($names == '' || empty(($names))){
        header('location:index.php?message= Plz make sure that all data is filled');
    }else{
        $query="INSERT INTO `student` ( `names`, `email`, `phone`, `dob`, `address`) VALUES('$names','$email','$phone','$dob','$address')";
        $result= mysqli_query($connection,$query);

        if($result){
            header("location:index.php?message2=Student Added!!");
        }else{
            die("Failed To insert Student".mysqli_error($connection));
        }
    }
}

if(isset($_POST['update_Student'])){
    $names=$_POST['names'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $id=$_POST['id'];

    if($names == '' || empty(($names))){
        header('location:index.php?message= Plz make sure that all data is filled');
    }else{
        $query="UPDATE   `student` SET`names`='$names', `email`='$email', `phone`='$phone', `dob`='$dob', `address`='$address' WHERE Id =$id";
        $result= mysqli_query($connection,$query);

        if($result){
            header("location:index.php?message3=Student Updated!!");
        }else{
            die("Failed To insert Student".mysqli_error($connection));
        }
    }
}

if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $query="DELETE FROM `student` WHERE `Id` =$id";
    $result= mysqli_query($connection,$query);

    if($result){
        header("location:index.php?message4=Student Deleted!!");
    }else{
        die("Failed To insert Student".mysqli_error($connection));
    }
}



?>
