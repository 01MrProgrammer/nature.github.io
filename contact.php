<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
  <title></title>
</head>
<body>

<?php include 'menu.php'; ?>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact us</h2>
  </div>
  <div class="w-50 m-auto">
    <form  action="userinfo.php" method="post">
      <div class="form-group">
        <label>
          Username
        </label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>

       <div class="form-group">
        <label>E-mail Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

       <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label> Comments </label>
        <textarea class="form-control" name="content"></textarea>
      </div>
       <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">@Nature</p>
</footer>

</body>
</html>