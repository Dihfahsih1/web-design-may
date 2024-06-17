
<?php require_once("db_connect.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <ttle>Update</ttle>
        <!-- <?php include("imeta.html");?> -->
        <?php include("css.html");?>
    </head>
    <body>
        
    <div class="container">
      <div class="row">
        <div class="row">
          <?php include 'nav.php' ?>
        </div>
      </div>
        <div class="row">
            <div class="col-lg-4">
                <?php
                // Getting the id from the display data page
                $user_id=$_GET['param'];

                // Selecting a specific id which represents the details of a single row
                $query= "SELECT * FROM registration WHERE ID = ?";

                // Make a prepared statemnt for connecting the database with the query
                $stmt=mysqli_prepare($con, $query);

                // Binding the id fectched from the url to the prepared satement
                mysqli_stmt_bind_param($stmt,"i",$user_id);

                // make request to the database
                mysqli_stmt_execute($stmt);
                
                // get a single result from the table
                $result=mysqli_stmt_get_result($stmt);
                
                //organizing a result into a row
                $row=mysqli_fetch_assoc($result);

                ?>
                <form action="process_update.php" method="POST">
                    <h3>Update user Information</h3>
                    <input type="hidden" name="id" value="<?php echo $row['ID']?>">
                    <div class="mb-3">
                        <label class="form-label" for="fname"> First Name</label>
                        <input type="text" name="fname" class="form-control" id="fname" value="<?php echo $row['FirstName']?>">
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label" for="sname"> Last Name</label>
                       
                        <input type="text" name="sname" class="form-control" id="sname" value="<?php echo $row['SecondName']?>">
                    </div>
        
                    <div class="form-group">
                    <label class="form-label" for="email"> Email</label>
                        <input type="text" name="email" class="form-control" placeholder="enter your email" value="<?php echo $row['Email']?>">
                    </div>

                    <div class="form-group">
                    <label class="form-label" for="telephone"> Mobile Number</label>
                        <input type="text" name="telephone" class="form-control" placeholder="enter your Telephone" value="<?php echo $row['Telephone']?>">
                    </div>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
        
    </div>
    
    <?php include("js.html")?>
</body>
</html>