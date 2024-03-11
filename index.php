<?php
include('header.php');
include('Connection.php');
?>

<form>

</form>
<div class="box1">
    <h2>ALL STUDENTS</h2>
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">New
        Student</button>
</div>

<?php 
if(isset($_GET['message'])){
    echo"<h6>".$_GET['message']." </h6>";
}

if(isset($_GET['message2'])){
    echo"<h5>".$_GET['message2']." </h5>";
}
?>




<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAMES</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>ADDRESS</th>
            <th>DATE OF BIRTH</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM student";
        $resultSet = mysqli_query($connection, $query);

        if (!$resultSet) {
            die("Failed to get Student Data from database" . mysqli_error($connection));
        } else {
            // print_r($resultSet) ;
        
            while ($row = mysqli_fetch_assoc($resultSet)) {
                ?>

                <tr>
                    <td>
                        <?php echo $row['id'] ?>
                    </td>
                    <td>
                        <?php echo $row['names'] ?>
                    </td>
                    <td>
                        <?php echo $row['email'] ?>
                    </td>
                    <td>
                        <?php echo $row['phone'] ?>
                    </td>
                    <td>
                        <?php echo $row['address'] ?>
                    </td>
                    <td>
                        <?php echo $row['dob'] ?>
                    </td>

                    <td><a href="" class="btn btn-success">Update</a></td>
                    <td><a href="" class="btn btn-danger">Update</a></td>

                </tr>


                <?php
            }
        }

        ?>

    </tbody>
</table>


<!-- Modal -->
<form method="post" action="backend.php">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Students</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label> NAMES</label>
                        <input type="text" class="form-control" placeholder=" Full Names" name="names" >

                    </div>
                    <div class="form-group">
                        <label> Email</label>
                        <input type="email" class="form-control" placeholder=" Email" name="email" >

                    </div>
                    <div class="form-group">
                        <label> Phone</label>
                        <input type="tel" class="form-control" placeholder=" Phone " name="phone" >

                    </div>
                    <div class="form-group">
                        <label> Address</label>
                        <input type="text" class="form-control" placeholder=" Address" name="address" >

                    </div>
                    <div class="form-group">
                        <label> Date Of birth</label>
                        <input type="date" class="form-control" placeholder=" Address" name="dob" >

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="add_student" value=" Add Student"></input>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include('footer.php'); ?>