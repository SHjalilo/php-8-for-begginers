<!DOCTYPE html>
<html lang="en">
<head>
  <title>php get example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Table of cars</h2>
  <p>You can use any of the contextual classes to only add a color to the table header:</p>

  <table class="table">
    <thead class="table-success">
      <tr>
        <th>Car Name</th>
        <th>Color</th>
        <th>ID</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Benz</td>
        <td>White</td>
        <td><a href="actionGet.php?id=01&name=Benz">01</a></td>
      </tr>
      <tr>
        <td>Bmw</td>
        <td>Blue</td>
        <td><a href="actionGet.php?id=02&name=Bmw">02</a></td>
      </tr>
      <tr>
        <td>Audi</td>
        <td>Black</td>
        <td><a href="actionGet.php?id=03&name=Audi">03</a></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

