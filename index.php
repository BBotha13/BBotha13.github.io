<?php
  include("includes/db.php");
  include("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Bennie&rsquo;s Pandwinkel</title>

    <link rel="stylesheet" type="text/css" href="normalize.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>

  <body>
    <header>
      <nav>
        <div class="logo">
          <img class="logo-image" src="images/Slice%208.png" alt="" />
        </div>
        <form>
          <div class="input-group">
            <input type="email" name="email_query" class="form-control" placeholder="Email" required>
            <div class="input-group-btn">
              <button class="btn btn-primary" type="submit" name="subscribe">
                <i class="glyphicon glyphicon-search"></i>Subscribe
              </button>
            </div>
          </div>
        </form>
          <!-- <form class="input-group" action="results.php" method="get">
            <input class="form-control" type="email" name="email_query" id="email" placeholder="Enter E-Mail" required>
            <button type="submit" name="subscribe" class="btn btn-primary form-control">Subscribe</button>
          </form> -->
      
        <a class="whatsapp-link" href="https://wa.me/+27722298325" target="_blank">
          <img  class="whatsapp-icon"  src="images/whatsapp.ico" alt="">
        </a>
        <div class="nav-Menu">
          <ul class="menu">
            <li class="active"><a class="menuItem" href="index.php">Home</a></li>
            <li><a class="menuItem" href="about.php">About us</a></li>
            <li><a class="menuItem" href="shop.php">Shop</a></li>
            <li><a class="menuItem" href="contact.php">Contact us</a></li>
            <li><a class="menuItem" href="register.php">Register</a></li>
            <li><a class="menuItem" href="customer/my_account.php">My Account</a></li>
          </ul>
        </div>
        <div class="hamburger">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </nav>
    </header>
    <section>
                <!-- xxxxxxxxxxxxxxxx slide show start xxxxxxxxxxxxxxx -->
<div class='slideshow'>               
      <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <?php

            $get_slides = "SELECT * FROM slider LIMIT 0,1 ";
            $run_slides = mysqli_query($con,$get_slides);

                while ($row_slides = mysqli_fetch_array($run_slides)) {
                    $slide_caption1 = $row_slides['caption_1'];
                    $slide_caption2 = $row_slides['caption_2'];
                    $slide_image = $row_slides['slide_image'];
                  
                  echo"
                    <div class='carousel-item active'>
                      <img src='admin_area/slide_images/$slide_image' alt='vintage shop'>
                      <div class='carousel-caption d-none d-md-block'>
                        <h1> $slide_caption1</h1>
                        <p>$slide_caption2</p>
                      </div>
                    </div>
                  ";
                
                }
        ?>  
        <?php

            $get_slides = "SELECT * FROM slider LIMIT 1,3 ";
            $run_slides = mysqli_query($con,$get_slides);

                while ($row_slides = mysqli_fetch_array($run_slides)) {
                  $slide_caption1 = $row_slides['caption_1'];
                  $slide_caption2 = $row_slides['caption_2'];
                  $slide_image = $row_slides['slide_image'];
                  
                  echo"
                    <div class='carousel-item'>
                      <img src='admin_area/slide_images/$slide_image' alt='vintage shop'>
                      <div class='carousel-caption d-none d-md-block'>
                        <h1>$slide_caption1</h1>
                        <p>$slide_caption2</p>
                      </div>
                    </div>
                  ";
                
                }
        ?>         
        </div>
      </div>
</div>
             <!-- xxxxxxxxxxxxxxxxx slide show end xxxxxxxxxxxxxxxxxxxxxx -->

            <div class="latest-products-heading">
              <h1>LATEST PRODUCT</h1>
            </div>
            <div class="latest-images">
              <?php echo getPro();?>
            </div>

            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    </section>

<?php
  include("includes/footer.php")
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="styles.js"></script>
  </body>
</html>
