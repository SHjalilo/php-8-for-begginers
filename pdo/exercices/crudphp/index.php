<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Table php</title>
</head>
<body>
    <?php
        
        require_once "db.php";
        //SELECT * FROM Person WHERE PersonID= 5
        $sql = $pdo->query("SELECT * FROM Person");
        $emp = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo '<pre>';
        //print_r($emp);
        echo '</pre>';
        
    ?>
    <div class="container">
        <h1 class="text-center p-3">Persons Information </h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Person ID</th>
                <th scope="col">FirstName</th>
                <th scope="col">LastName</th>
                <th scope="col">Age</th>
                <th scope="col" class="text-center">Update - Delete</th>
                <th scope="col">Added</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($emp as $em) {
                ?>
                <tr>
                    <td><?= $em['PersonID']?></td>
                    <td><?= $em['FirstName']?></td>
                    <td><?= $em['LastName']?></td>
                    <td>
                        <?php
                            $color = '';
                            if ($em['Age'] >= 30) {
                                $color = 'bg-danger';
                            } elseif ($em['Age'] >= 20) {
                                $color = 'bg-warning';
                            } elseif ($em[''] < 20) {
                                $color = 'bg-success';
                            }
                            
                        ?>
                        <span class="badge rounded-pill <?= $color ?> "><?= $em['Age']?></span>
                        
                    </td>
                    <td>
                            <form action="post" class=" d-flex align-items-center justify-content-evenly">
                                <input class="btn btn-primary " type="submit" value="Update">
                                <input class="btn btn-danger "  type="submit" value="Delete">
                            </form>
                    </td>
                    <td>
                            <form action="post" class="">
                                <a href="add.php" class="btn btn-success ">Add</a>
                            </form>
                    </td>
                    
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>