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
                        <label class="form-label" for="sname"> Last Name</label>
                       
                        <input type="text" name="sname" class="form-control" id="sname">
                    </div>
        
                    <div class="form-group">
                    <label class="form-label" for="email"> Email</label>
                        <input type="text" name="email" class="form-control" placeholder="enter your email">
                    </div>

                    <div class="form-group">
                    <label class="form-label" for="telephone"> Mobile Number</label>
                        <input type="text" name="telephone" class="form-control" placeholder="enter your Telephone">
                    </div>
        
                    <input type="submit" class="btn btn-primary">
            
                </form>
            </div>
        </div>
        
    </div>
    
    <?php include("js.html")?>
</body>
</html>