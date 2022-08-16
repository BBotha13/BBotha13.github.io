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
        <section class="register-container">
            <div class="register-form">
                <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>
          
                    <form action="customer_register.php" method="post">
                      <h3 class="title">Register</h3>
                      <div class="input-container">
                        
                        <input type="text" name="c_name" class="input" placeholder="Name" required>
                      </div>
                      <div class="input-container">
                        <input type="email" name="c_email" class="input" placeholder="e-mail" required>
                      </div>
                      <div class="input-container">
                        <input type="tel" name="c_phone" class="input" placeholder="Telephone" required>
                      </div>
                      <div class="input-container">
                        <input type="number" name="c_idNo" class="input" placeholder="ID Number" required>
                      </div>
                      <div class="input-container">
                        <input type="text" name="c_address" class="input" placeholder="Address" required>
                      </div>
                      <div class="input-container">
                        <input type="text" name="c_city" class="input" placeholder="City" required>
                      </div>
                      <div class="input-container">
                        <input type="text" name="c_suburb" class="input" placeholder="Suburb" required>
                      </div>
                      <div class="input-container">
                        <input type="text" name="c_postalCode" class="input" placeholder="Postal Code" required>
                      </div>
                      <div class="input-container">
                        <label for="c_idCopy">Copy of ID</label>
                        <input type="file" name="c_idCopy" class="input" required>
                      </div>
                      <input type="submit" name="register" value="Register" class="btn">
                    </form>
                  </div>

            </div>
        </section>
<?php
  include("includes/footer.php")
?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="styles.js"></script>
  </body>
</html>
