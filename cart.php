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
        <div class="shopping_cart">
          <a href="cart.php">Open Shopping Cart</a>
        </div>
          <ul class="menu">
            <li><a class="menuItem" href="index.php">Home</a></li>
            <li><a class="menuItem" href="about.php">About us</a></li>
            <li class="active"><a class="menuItem" href="shop.php">Shop</a></li>
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
      <div class="breadcrumb-container">
      <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li>Cart</li>
        </ul>
      </div>
      <!-- fill space behind fixed menu -->
        <div class="fill_top_space"></div>
        <div class="col-md-9" id="cart">
            <div class="box">
                <form action="cart.php" method="post" enctype="multipart/form-data">
                    <h1>Shopping Cart</h1>
                 <p class="text-muted">You have 3item(s) in your cart</p> 
                 <div class="table-resposive">
                    <table class="table">
                        <thead>
                            <th colspan="2">Product</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th colspan="1">Delete</th>
                            <th colspan="2">Sub Total</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="admin_area\product_images\S000007.jpg" alt="">
                                </td>
                                <td>
                                    <a href="#">Samsung Fridge</a>
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    R2500
                                </td>
                                <td>
                                    <input type="checkbox" name="remove[]" >
                                </td>
                                <td>
                                    R5000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="admin_area\product_images\S000008.jpg" alt="">
                                </td>
                                <td>
                                    <a href="#">Lawnmower Rolux</a>
                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    R1590
                                </td>
                                <td>
                                    <input type="checkbox" name="remove[]" >
                                </td>
                                <td>
                                    R1590
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">Total</th>
                                <th colspan="2">R6590</th>
                            </tr>
                        </tfoot>
                    </table>
                 </div> 
                  <div class="box-footer">
                    <div class="pull-left">
                        <a href="index.php" class="btn btn-default">Continue Shopping</a>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-default" type="submit" name="update" value="">
                            update cart
                        </button>
                        <a href="checkout.php" class="btn btn-primary">
                            Proceed Checkout >>
                        </a>
                    </div>
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box" id="order-summary">
                <div class="box-header">
                    <h3>Order Summary</h3>
                </div>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, natus?
                </p>
                <div class="table-responsive">
                   <table class="table">
                    <tbody>
                        <tr>
                            <td>Order Subtotal</td>
                            <th>R1690</th>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>R0.00</td>
                        </tr>
                        <tr>
                            <td>Vat</td>
                            <th>R0.00</th>
                        </tr>
                        <tr class="total">
                            <td>Total</td>
                            <th>R1690</th>
                        </tr>
                    </tbody>
                   </table> 
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