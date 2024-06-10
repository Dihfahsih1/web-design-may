<html>
    <head>
        <?php include("meta.html");?>
        <?php include("css.html");?>
        <title>My first Page</title>
    </head>
    <body>
        
      <div class="container">
        <div class="row">
          <?php include 'nav.php' ?>
        </div>
        <div class="row">
            <div class="col-lg-8">
              <div id="carouselExample" class="carousel slide">
                <center>
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <img src="images/index-images/image1.PNG" width="100%" class="d-block w-50" alt="">
                  </div>
                  <div class="carousel-item active">
                    <img src="images/image2.jpg" alt="GFG" width="100%" class="d-block w-50" alt="...">
                  </div>

                  <div class="carousel-item">
                    <img src="images/image3.jpg" alt="GFG" width="1000px" class="img-fluid d-block w-50" alt="...">
                  </div>

                  <div class="carousel-item">
                    <img src="images/image4.jpg" alt="GFG" width="600" height="300" class="d-block w-50" alt="...">
                  </div>
                </div>
              </center>
            
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>

              </div>
            </div>

            <div class="col-lg-4" style="border:2px solid green">
                <p>Second Column</p>
            </div>

            

            
        </div>
        
      </div>
      <?php include("js.html")?> 
    </body>
</html>