<!DOCTYPE html>
<html lang="en">
    <head>
      <?php include("meta.html");?>
      <?php include("css.html");?>
        <title>Tables</title>
    </head>
    <body>
        <div class="container">
          <div class="row">
             <?php include 'nav.php' ?>
          </div>
            <h3>Student Table</h3>
            <table class="table table-striped">
                <thead>
                    <tr class="table-danger">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr class="table-success">
                        <td>John</td>
                        <td>j@mail.com</td>
                        <td>Kampala</td>
                    </tr>
        
                    <tr class="table-warning">
                        <td>Mary</td>
                        <td>m@mail.com</td>
                        <td>Mukono</td>
                    </tr>
                    <tr class="table-primary">
                        <td>Smith</td>
                        <td>s@mail.com</td>
                        <td>Kawempe</td>
                    </tr>
                    <tr class="table-default">
                        <td>Martin</td>
                        <td>n@mail.com</td>
                        <td>Kampala</td>
                    </tr>
                </tbody>
                
            </table>
        </div>
       
        <?php include("js.html")?>
    </body>
</html>