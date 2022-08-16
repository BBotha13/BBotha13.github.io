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
            <li class="active"><a class="menuItem" href="contact.php">Contact us</a></li>
          </ul>
        </div>
        <div class="hamburger">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </nav>
    </header>
        <section class="contact-container">
            <!-- <span class="big-circle"></span> -->
            <!-- <img src="/images/whatsapp.ico" class="square" alt=""> -->
            <div class="form">
                <div class="contact-info">
                    <h3 class="title">Contact - Info</h3>
                    <div class="info-details">
                        <h3>Business Hours</h3>
                        <div class="business-hours">
                            
                            <div class="hours">
                                
                                <div class="busDay">
                                    <p>Monday - Friday</p>
                                    <p>Saterday</p>
                                </div>
                                <div class="busHours">
                                    <p>8:00 - 17:00</p>
                                    <p>8:00 - 13:00</p>
                                </div>
                            </div>
                            <div class="busContact">
                                <p>(011) 753 - 2280/90</p>

                                <p>0724942859</p>
                            </div>
                            
                        </div>
                       <p class="email" ><a href="mailto: benniespand@absamail.co.za">benniespand@absamail.co.za</a></p> 
                    </div>
                    <div class="business-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.3425605151538!2d27.65531271489953!3d-26.315404883388386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95bbcef770c023%3A0xeb2191f2d33473a5!2s127%20Edwards%20Ave%2C%20Westonaria%2C%201780!5e0!3m2!1sen!2sza!4v1659616204822!5m2!1sen!2sza" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                 
                </div>
                <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>
          
                    <form action="contact.php" method="post">
                      <h3 class="title">Contact us</h3>
                      <div class="input-container">
                        
                        <input type="text" name="name" class="input" placeholder="Name" required>
                      </div>
                      <div class="input-container">
                        <input type="email" name="email" class="input" placeholder="e-mail" required>
                      </div>
                      <div class="input-container">
                        <input type="tel" name="phone" class="input" placeholder="Telephone" required>
                      </div>
                      <div class="input-container textarea">
                        <textarea name="message" class="input" placeholder="Message" required></textarea>
                      </div>
                      <input type="submit" value="Send" class="btn">
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