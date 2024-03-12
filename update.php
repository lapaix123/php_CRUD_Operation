<?php
include ("header.php");
include ("Connection.php");
?>

<?php 
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query = "SELECT * FROM student where Id=$id";
        $resultSet = mysqli_query($connection, $query);

        if (!$resultSet) {
            die("Failed to get Student Data from database" . mysqli_error($connection));
        } else {
            // print_r($resultSet) ;
        
            
            $row=mysqli_fetch_assoc($resultSet);
            // print_r($row);


    }}
?>
<div class="container">
    <form method="post" action="backend.php">
        <div class="form-group">
            <label> NAMES</label>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="text" class="form-control" placeholder=" Full Names" name="names" value="<?php echo $row['names'] ?>">

        </div>
        <div class="form-group">
            <label> Email</label>
            <input type="email" class="form-control" placeholder=" Email" name="email" value="<?php echo $row['email'] ?>">

        </div>
        <div class="form-group">
            <label> Phone</label>
            <input type="tel" class="form-control" placeholder=" Phone " name="phone" value="<?php echo $row['phone'] ?>">

        </div>
        <div class="form-group">
            <label> Address</label>
            <input type="text" class="form-control" placeholder=" Address" name="address" value="<?php echo $row['address'] ?>">

        </div>
        <div class="form-group">
            <label> Date Of birth</label>
            <input type="date" class="form-control" placeholder=" Address" name="dob" value="<?php echo $row['dob'] ?>">

        </div>
       
            
            <input type="submit" class="btn btn-success" name="update_Student" value=" Update Student"></input>

    </form>
</div>

<?php
include("footer.php") ;
?>