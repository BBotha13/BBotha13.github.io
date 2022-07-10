<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Bennie&rsquo;s Pandwinkel</title>

	<link rel="stylesheet" type="text/css" href="styles/normalize.css">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
    <link rel="stylesheet" type="text/css" href="styles/styles.css">

	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/> -->
	<!-- <link rel="stylesheet" type="text/css" href="styles/bootstrap.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="font-awesome/css/all.css"> -->
	
		<!-- xxxxxxxxxxxxxxxxxxxx -->
<!--	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">-->
<!--  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>-->
<!--  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>-->
<!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>-->
	
	<!-- xxxxxxxxxxxxxxxxxxxx -->
	
</head>
<body>

<header class="header">
    
    <div class="container-fluid">
      <div class="row">
        <div id="logo" class="top col-lg-4 col-md-4 col-sm-4 col-xs-12 bg-default">
            <img src="images/BenniesPandLogo.png" alt="Company Logo">
        </div>
        
        <div id="product_search" class="top col-lg-4 col-md-4 col-sm-4 col-xs-6 bg-default">
            <form>
              <div class="input-group">
                <input type="text" class="search_box form-control" placeholder="Search for Products">
                <div class="input-group-btn">
                  <button class="search_box btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </div>
              </div>
            </form>
        </div>
        
        <div id="signup" class="top col-lg-4 col-md-4 col-sm-4 col-xs-6 bg-default">
            <button class="get-quote btn btn-success">
                <a href="#">Get Quote</a>
            </button>
            <h5 class="top_signup">Sign up for free</h5>
        </div>
      </div>
    </div>
    
</header>
 
<!-- menu nav-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Shop By Category <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Power tools</a></li>
            <li><a href="#">Fridges</a></li>
            <li><a href="#">TVs</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="#">Contact</a></li>

      </ul>
    </div>
  </div>
</nav>
  
<!-- carousel start-->
 
<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://placehold.jp/200x100.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://placehold.jp/200x100.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://placehold.jp/200x100.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 
<!-- carousel end -->



<!-- 	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js "></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 </body>
</html>