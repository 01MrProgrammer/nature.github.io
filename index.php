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

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>

	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/cc4.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">Experience Natural beauty.</h2>
			<p class="py-3">Natural beauty.</p>
			<a href="about.php" class="btn btn-success">check More</a>
		</div>
	</div>
	</div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our services</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/cc5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature :)</h4>
    <p class="card-text">Some Pic's</p>
    <a href="#" class="btn btn-primary">Check...</a>
  </div>
</div>
      
      </div>

       <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/cc5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature :)</h4>
    <p class="card-text">Some Pic's</p>
    <a href="#" class="btn btn-primary">Check...</a>
  </div>
</div>
      
      </div>


       <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/cc5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature :)</h4>
    <p class="card-text">Some Pic's</p>
    <a href="#" class="btn btn-primary">Check...</a>
  </div>
</div>
      
      </div>


    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cc6.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cc6.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cc6.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cc6.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cc6.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cc6.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cc6.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cc6.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cc6.jpg" class="img-fluid pb-4">
      </div>
    </div>
  </div>

</section>

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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>