<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Added Form</title>
</head>
<body>
    <div class="container ">
    <?php
    require_once "db.php";
        if (isset($_POST["add"])) {
            
                $id = htmlspecialchars($_POST["id"]);
                $firstName = htmlspecialchars($_POST["firstname"]);
                $lastName = htmlspecialchars($_POST["lastname"]);
                $age = htmlspecialchars($_POST["age"]);
                if (!empty($id) && !empty($firstName) && !empty($lastName) && !empty($age)) {
                    try {
                    // if id autoincrement write (null) not (?) in values
                        $sql = $pdo->prepare("INSERT INTO Person VALUES (?,?,?,?)");
                        $sql->execute(array($id,$firstName, $lastName, $age));
                        ?>
                        <div class="alert alert-success" role="alert">
                            Added Successfully !
                        </div>
                        <?php
                        header( "refresh:5;url=index.php" );
                    }catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                }else{
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Required Feilds !
                    </div>
                    <?php
                }
        }
    ?>
    <form action="" method="post" class=" p-4" >
    <div class="col-md-4">
        <label class="form-label"> Person ID :</label>
        <input type="text" class="form-control" name="id">
    </div>
    <div class="col-md-4">
        <label class="form-label"> FirstName :</label>
        <input type="text" class="form-control" name="firstname">
    </div>
    <div class="col-md-4">
        <label class="form-label"> LastName :</label>
        <input type="text" class="form-control" name="lastname">
    </div>
    <div class="col-md-4">
        <label class="form-label"> Age :</label>
        <input type="text" class="form-control" name="age">
    </div>
    <button type="submit" class="btn btn-primary m-2 " name="add">Submit</button>
    </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>