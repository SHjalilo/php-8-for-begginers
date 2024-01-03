<!DOCTYPE html>
<html lang="en">
  <head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello Page</title>
  </head>
  <body>
<h1><?php echo "hello from php and bootstrap";?></h1>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                  <h5 class="card-title"> <?php echo " php Special title treatment";?> </h5>
                  <p class="card-text"> <?php echo "With supporting text below as a natural lead-in to additional content. PHP";?> </p>
                  <a href="#" class="btn btn-primary"> <?php echo "Go somewhere + PHP";?> </a>
                </div>
            </div>        
        </div>
    </div>
    <div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>   
                <th scope="col">Email</th> 
                <th scope="col">Age</th> 
                <th scope="col">Salary</th> 
            </tr>         
            </thead>

            <tbody>
            <tr>
                <th scope="row"> <?php print "ahmed ali";?> </th>   
                <td>  <?php echo "ahmed@ali.com";?> </td> 
                <td> <?php print 30;?> </td> 
                <td>  <?php echo 3600;?> </td> 
            </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

