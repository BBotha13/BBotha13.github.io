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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
          <li>Shop</li>
          <?php
            if (!isset($_GET['prod_cat'])) {
              echo "<li>All Products</li>";
            }else{
              $p_cat_id = $_GET['prod_cat'];
              $get_prod_cat = "SELECT * FROM prod_categories WHERE prod_cat_id='$p_cat_id'";
              $run_prod_cat = mysqli_query($db,$get_prod_cat);
              $row_prod_cat = mysqli_fetch_array($run_prod_cat);
              $prod_cat_desc = $row_prod_cat['prod_cat_description'];
              echo "<li>$prod_cat_desc</li>";
            }
          ?>
          
        </ul>
      </div>
      <div class="container">
        <section id="shop-container">
            <div id="category-container">
               <h4>Shop By Category</h4>
              <div class="category-list">
                <ul>
                  <?php
                    getCat();
                  ?>
                </ul> 
              </div>   
            </div>


<!-- shop products img start             -->
            <div id="product-container"> <!--row start -->
              <?php
                if (!isset($_GET['prod_cat'])) {
                  $per_page = 8;
                
                  if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                  }else{
                    $page = 1;  
                  }

                  $start_from = ($page-1) * $per_page;

                  $get_products = "SELECT * FROM products LIMIT $start_from,$per_page";
                  $run_products = mysqli_query($con,$get_products);

                  while ($row_products=mysqli_fetch_array($run_products)) {
                    $pro_id = $row_products['product_id'];
                    $pro_img1 = $row_products['prod_img1'];
                    $pro_desc = $row_products['prod_description'];
                    $pro_price = $row_products['prod_price'];

                    $product = <<<DELIMETER
                        <div class="product-box">
                          <a href="details.php?pro_id=$pro_id"><img src="admin_area/product_images/$pro_img1" alt=""></a>
                            <div class="img-description">
                                <p>$pro_desc</p>
                                <h4>$pro_price</h4>
                                <p class='buttons'>
                                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                                    <i class='fa fa-shopping-cart'></i>Add to cart
                                </a>
                            </p>
                            </div>
                        </div>
                      DELIMETER;
                        echo"$product";
                 }
              ?>
            </div><!--row end -->
            </section> 
<!-- shop products img end             --> 
        
            <div class="row-pagination">
                <ul class="pagination">
              <?php 
                $query = "SELECT * FROM products";
                $result = mysqli_query($con,$query);
                $total_records = mysqli_num_rows($result);
                $tolal_pages = ceil($total_records / $per_page);
                  echo"
                  <li><a href='shop.php?page=1'>".'First Page'."</a></li>
                  ";
                  for ($i=1; $i<=$tolal_pages; $i++) { 
                    echo"
                    <li><a href='shop.php?page=".$i."'>".$i."</a></li>
                    ";
                  }
                    echo"
                    <li><a href='shop.php?page=$tolal_pages'>".'Last Page'."</a></li>
                    ";                  
                }
                //if not set end tag
                
                
              ?>
              <?php getCatProd() ?>
                </ul>
                
            </div> <!--row-pagination end -->
            
            </div><!--container end -->         
            
<?php
  include("includes/footer.php")
?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="styles.js"></script>
  </body>
</html>