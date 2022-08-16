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
          <img class="logo-image" src="/images/Slice 8.png" alt="" />
        </div>
        <a class="whatsapp-link" href="https://wa.me/+27722298325" target="_blank">
          <img class="whatsapp-icon" src="/images/whatsapp.ico" alt="">
        </a>
        <div class="nav-Menu">
          <ul class="menu">
            <li><a class="menuItem" href="index.php">Home</a></li>
            <li class="active"><a class="menuItem" href="about.php">About us</a></li>
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
    <div class="fill_top_space"></div>
    <div class="about-container">
        <div class="about-content">
        <h1>About Bennie's Pawn Shop</h1>
        <br>
        <p>Bennie&rsquo;s Pawn Shop trade with experience since 1978. Bennie&rsquo;s in Westonaria where established in 1998 and our new branch in Randfontein was established in 2015. We AT Bennie&rsquo;s Pawn Shop offer short-term credit loans with the lowest interest rates against pledged goods, buy and re-sell goods (in good condition) from you, who would like quick cash on the spot!</p>
        <P>Bennie&rsquo;s Pawn Shop is a licensed and registered credit provider in terms of section 40 of the National Credit Act (NCR)
            34 of 2005. Also licensed with the SAPS services.
            
            We also cooperate with the SAPS to prevent the movement of stolen merchandise. To protect our self's and clients.
            The SAPS will be contacted immediately if there is any suspicion of an item that is stolen.</P>
            <h1>Services</h1>
            <br>
            <p>We Pawn, Buy and sell NEW and SECOND HAND items ranging from furniture, applience, electronics, kitchenware, power tools,hand tools, garden tools, household items and jewelery.</p>
            <p>We also accept lay-buy&rsquo;s for 3 months for a small deposit.</p>
            <p>We deliver large items in Westrand and certain places in Gauteng.</p>
            <br>
            <h1>Visit us for Fast, Friendly and Honest service<br><br> and get free quotes on your unwanted items.</h3>
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