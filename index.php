<!DOCTYPE html>
<html>
<head>
  <title>SocioHub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">SocioHub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>

            <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img_002.jpg" alt="img_2" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img_003.jpg" alt="img_3" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img_001.jpg" alt="img_1" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
        <div class="carousel-item">
      <img src="images/img_004.png" alt="img_4" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p>Boost Your Social Media with Pulkit</p>
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
    <div class="col-lg-6 col-md-6"> 
      <img src="images/img_short_1.png" class="image-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6"> 
      <h2 class="display-4">"Motive of 'Pulkit' towards 'SocioHub' "</h2>
      <p class="py-3"> I am Pulkit Dikshit and I am here with all your solutions to boost your social media on any platforms whether it's Facebooko, Instagram, Google Business you name it! Our team is working on to give the best experience possible by us so that you can breathe easily and watch your  social media grow. We provide solutions what you need. This all is possible by My Faculty Mr. Upendera Singh who gave me this opportunity to buid this website as a assignment. </p>
      <a href="about.php" class="btn btn-outline-success"> Wanna know me? </a>
    </div>
  </div>
  </div>
</section>

<section class="my-5">
  <div>
    <h2 class="text-center">Our Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
    <img class="card-img-top" src="images/card_1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Boost Facebook</h4>
              <p class="card-text">Can Boost your Facebook account to tremendous height</p>
              <a href="#" class="btn btn-primary">Know more</a>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
    <img class="card-img-top" src="images/card_2.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Boost Instagram</h4>
              <p class="card-text">Can Boost your Facebook account to tremendous height.</p>
              <a href="#" class="btn btn-primary">Know more</a>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
    <img class="card-img-top" src="images/card_3.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Boosting Business through Google</h4>
              <p class="card-text">You cannot even imagine what your business is worth outside your reach! ;) </p>
              <a href="#" class="btn btn-primary">Know more</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments"></textarea>
      </div>
      <button  type="submit" class="btn btn-success">Submit</button>
    </form>
    
  </div>

<footer>
	<h3 class="p-3 bg-dark text-white text-center"> @SocioHub Services</h3>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>