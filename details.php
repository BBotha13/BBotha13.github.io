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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>

  <body>
    <header>
      <nav class="lastPagesNav">
        <div class="logo">
          <img class="logo-image" src="images/Slice 8.png" alt="" />
        </div>
        <a class="whatsapp-link" href="https://wa.me/+27722298325" target="_blank">
          <img class="whatsapp-icon" src="images/whatsapp.ico" alt="">
        </a>
        <div class="nav-Menu">
          <ul class="menu">
            <li><a class="menuItem" href="index.php">Home</a></li>
            <li><a class="menuItem" href="about.php">About us</a></li>
            <li><a class="menuItem" href="shop.php">Shop</a></li>
            <li><a class="menuItem" href="contact.php">Contact us</a></li>
          </ul>
        </div>
        <div class="hamburger">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </nav>
    </header>
    <div class="details-container">
      <div class="detail-img">
        <div class="main-img">
          <img src="images/S000002.jpg" id="mainImage" alt="">
        </div>
        <div class="small-group">
          <div class="small-img-col">
            <img src="images/S000004.jpg" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="images/S000002.jpg" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="images/S000012.jpg" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="images/S000004.jpg" class="small-img" alt="">
          </div>
        </div>
      </div>
      <div class="detail-info">
        <h5>shop/details</h5>
        <div class="detail-info-content">
          <h4>Product Details</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus laborum animi inventore in, natus praesentium eum molestias cum voluptatibus ex culpa obcaecati deleniti. Sunt eveniet id consectetur, modi architecto odit.</p>
        </div>
  
        <div class="detail-info-footer">
          <h3>R269-00</h3>
          <input type="number" value="1">
          <button>Add to Cart</button>
        </div>
        
      </div>
    </div>
    <?php
  include("includes/footer.php")
?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="styles.js"></script>
    
  </body>
</html>