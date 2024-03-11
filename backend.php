<?php
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


?>
