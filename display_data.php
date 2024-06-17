<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Students</title>
    <?php include("css.html");
    require_once("db_connect.php");
    ?>
</head>
<body>
    
    <div class="container">
        <div class="row">
          <?php include 'nav.php' ?>
        </div>
        <div class="row">
            <!-- This is the table for the data -->
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Student No.</th>
                        <th>First Name</th>
                        <th>Second Name</th>
                        <th>Email</th>
                        <th>Telephone </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // The query to fetch data from a registration table in the database
                        $sql="SELECT * FROM registration";
                        $result=mysqli_query($con, $sql);
                        while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['ID'];?></td>
                        <td><?php echo $row['FirstName'];?></td>
                        <td><?php echo $row['SecondName'];?></td>
                        <td><?php echo $row['Telephone'];?></td>
                        <td><?php echo $row['Email'];?></td>
                        <td><a href="update_form.php?param=<?php echo $row['ID'];?>">Update Form</a></td>

                    </tr>
                    <?php }  ?>
                </tbody>

            </table>
        </div>
    </div>


    <?php include("js.html")?>
</body>
</html>