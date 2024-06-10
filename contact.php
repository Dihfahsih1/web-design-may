<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <?php include("meta.html");?>
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
                <form action="processContact.php" method="POST">
                    <h3>Contact us through this form</h3>
                    <div class="mb-3">
                        <label class="form-label" for="fname"> First Name</label>
                        <input type="text" name="fname" class="form-control" id="fname">
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label" for="lname"> Last Name</label>
                       
                        <input type="text" name="lname" class="form-control" id="lname">
                    </div>
        
                    <div class="form-group">
                        <input type="text" name="email" placeholder="enter your email">
                    </div>
        
                    <input type="password" name="pass" placeholder="Enter Your password"> <br>
                    <input type="file" name="photo"><br>
                    <input type="radio" placeholder="date" name="date"><br>
                    <input type="submit" class="btn btn-primary">
            
                </form>
            </div>
        </div>
        
    </div>
    
    <?php include("js.html")?>
</body>
</html>