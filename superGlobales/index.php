<!DOCTYPE html>
<html lang="en">
<head>
  <title>form php example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-4">
  <h2>Stacked form</h2>
  <form method="POST" action="actionPage.php">
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

<div class="form-check">
  <input type="radio" class="form-check-input" id="radio1" name="gender" value="Femal" checked>FEMAL
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="radio2" name="gender" value="Male">MALE
</div>
</br>

    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit"  name="submit" value="Submit" class="btn btn-primary" > Submit</button>
  </form>
</div>
</body>
</html>


