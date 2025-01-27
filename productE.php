<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch image_path from the home_content table
$sql = "SELECT image_path FROM promo_contents WHERE id = 1"; // Fetching the first record as an example
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the row
    $row = $result->fetch_assoc();
    $image_path = htmlspecialchars($row['image_path']);
} else {
    $image_path = 'uploads/default.jpg'; // Default image path if no record found
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="refresh" content="32000">
        <link rel="icon" href="ckayy.jpg" type="image/png">
        <title>Ckary Beauty</title>
        <link rel="stylesheet" href="productE.css">
    </head>
    
</head>
<body>

<div class="sign-in-block" id="signInBlock">
<button class="close-btnp" id="closeBtns">&times;</button>
        <h2>Welcome</h2>
    <div class="form-container">
        <h1>Sign in or sign up to unlock free standard shipping on all U.S. orders.</h1>
    <form>
      <input type="email" placeholder="Email" required>
      <div class="sig">
      <label>
        <input type="checkbox">
        Email me with updates and offers
      </label>
      </div>
      <button type="submit">Sign In</button>
      <small>
        By signing up for an account with or subscribing to Fenty Beauty, you agree to our 
        <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>. If you sign up for 
        our email list, you also consent to receive a varying number of marketing messages via email. Consent is not a condition of any purchase. California residents: Please also see our 
        <a href="#">Financial Incentive Terms</a>.
      </small>
    </form>
  </div>
</div>


<header class="navbar">
        <div class="center-section">
            <img src="ckayy.jpg">
            <h1>CKARY BEAUTY</h1>
        </div>
        <div class="left-section">
            <img src="kenya.jpg" alt="US Flag" class="flag-icon">
            <span>Kenya </span>
        </div>
        <div class="right-section">
            <a href="#" class="nav-link" id="signInLink">Sign In</a>
            <a href="#" class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                    <path d="M10 2a8 8 0 0 1 8 8 8 8 0 0 1-1.69 4.91l4.09 4.09a1 1 0 0 1-1.41 1.41l-4.09-4.09A8 8 0 1 1 10 2zm0 2a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/>
                </svg>
            </a>            
            <a href="#" class="nav-icons">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </a>
            <div class="nav-icon" id="icon1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                    <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm0-2h10v-2H7v2zm10 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM6.16 6.26l1.22 5.02h7.56l1.16-4.65H6.16zM20 4H5.21L4.27 2H1v2h2.18l3.54 14h12.53v-2H7.86l-.25-1h9.69c.68 0 1.27-.35 1.58-.91l3.58-7.16c.15-.3.2-.64.2-.97 0-.83-.67-1.5-1.5-1.5H20z"/>
                </svg>
            </div>
        </div>
</header>


<header class="navbar2">
    <div class="center-section2">
        <img src="ckayy.jpg">
        <h1>CKARY BEAUTY</h1>
    </div>
    <div class="left-section2">
        <img src="kenya.jpg" alt="US Flag" class="flag-icon">
    </div>
    <div class="right-section2">
        <a href="#" class="nav-icon2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                <path d="M10 2a8 8 0 0 1 8 8 8 8 0 0 1-1.69 4.91l4.09 4.09a1 1 0 0 1-1.41 1.41l-4.09-4.09A8 8 0 1 1 10 2zm0 2a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/>
            </svg>
        </a>            
        <div class="nav-icon3" id="icon2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm0-2h10v-2H7v2zm10 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM6.16 6.26l1.22 5.02h7.56l1.16-4.65H6.16zM20 4H5.21L4.27 2H1v2h2.18l3.54 14h12.53v-2H7.86l-.25-1h9.69c.68 0 1.27-.35 1.58-.91l3.58-7.16c.15-.3.2-.64.2-.97 0-.83-.67-1.5-1.5-1.5H20z"/>
            </svg>
        </div>
    </div>
</header>



<nav class="menu">
    <div class="menu-item" data-target="block2">
        <span>New + Bestsellers</span>
    </div>
    <div class="menu-item" data-target="block3">
        <span>Makeup</span>
    </div>
    <div class="menu-item" data-target="block4">
        <span>Skincare</span>
    </div>
    <div class="menu-item" data-target="block5">
        <span>Hair</span>
    </div>
</nav>


<!-- Blocks to display -->
<div id="block2" class="content-block">
    <div class="containerp">
        <div class="sidebar">
            <h2>New + Bestsellers</h2>
            <a href="#" class="sidebar-link"><p>New Arrivals </p></a>
            <a href="#" class="sidebar-link"><p>Bestsellers  </p></a>
        </div>
        
        <div class="contentr">
            <div class="offer2">
                <div class="offer-boxs">
                    <h2>Special Offer</h2>
                    <p>Get up to 50% off on select items!</p>
                    <button>Shop Now</button>
                </div>
            </div>

            <div class="product">
                <img src="blue.jpg" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="product">
                <img src="blue1.jpg" alt="Product 2">
                <h3>Ckary Icon Velvet Liquid Lipstick</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.0)</span>
                </div>
                <p><span class="old-price">$29</span> <span class="price">$20.30</span></p>
            </div>
        </div>
    </div>
</div>

<div id="block3" class="content-block">
    <div class="containerp">
        <div class="sidebar">
            <h2>Makeup</h2>
            <a href="#" class="sidebar-link"><p>Lip Gloss  </p></a>
            <a href="#" class="sidebar-link"><p>Lip Liner </p></a>
            <a href="#" class="sidebar-link"><p>Lipstick </p></a>
            <a href="#" class="sidebar-link"><p>Foundation </p></a>
            <a href="#" class="sidebar-link"><p>Concealer </p></a>
            <a href="#" class="sidebar-link"><p>Blush + Highlighter   </p></a>
            <a href="#" class="sidebar-link"><p>Eye Makeup   </p></a>
            <a href="#" class="sidebar-link button-link"><p>Shop All Makeup</p></a>
        </div>
        
        <div class="contentr">
            <div class="offers">
                <div class="offer-boxsd">
                    <h2>Ckary Beauty</h2>
                </div>
            </div>

            <div class="products">
                <img src="lipss.jpg" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="pi.jpg" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="t9.jpg" alt="Product 2">
                <h3>Ckary Icon Velvet Liquid Lipstick</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.0)</span>
                </div>
                <p><span class="old-price">$29</span> <span class="price">$20.30</span></p>
            </div>
        </div>
    </div>
</div>

<div id="block4" class="content-block">
    <div class="containerp">
        <div class="sidebar">
            <h2>SkinCare</h2>
            <a href="#" class="sidebar-link"><p>Body   </p></a>
            <a href="#" class="sidebar-link"><p>Lip Care </p></a>
            <a href="#" class="sidebar-link"><p>Masks  </p></a>
            <a href="#" class="sidebar-link"><p>Eye Care  </p></a>
            <a href="#" class="button-link"><p>Shop All Skincare</p></a>
        </div>
        
        <div class="contentr">
            <div class="offersr">
                <div class="offer-boxsd">
                    <h2>Ckary Skin</h2>
                </div>
            </div>

            <div class="products">
                <img src="BRONZER - Chai.jpg" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="florence by mills.jpg" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="io.jpg" alt="Product 2">
                <h3>Ckary Icon Velvet Liquid Lipstick</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.0)</span>
                </div>
                <p><span class="old-price">$29</span> <span class="price">$20.30</span></p>
            </div>
        </div>
    </div>
</div>

<div id="block5" class="content-block">
    <div class="containerp">
        <div class="sidebar">
            <h2>Hair</h2>
            <a href="#" class="sidebar-link"><p>Shampoo </p></a>
            <a href="#" class="sidebar-link"><p>Condition</p></a>
        </div>
        
        <div class="contentr">
            <div class="offersp">
                <div class="offer-boxsd">
                    <h2>CkaryHair</h2>
                </div>
            </div>

            <div class="products">
                <img src="h1.jpg" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="h2.jpg" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="t9.jpg" alt="Product 2">
                <h3>Ckary Icon Velvet Liquid Lipstick</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.0)</span>
                </div>
                <p><span class="old-price">$29</span> <span class="price">$20.30</span></p>
            </div>
        </div>
    </div>
</div>




<!-- Mobile Dashboard -->
<div id="mobile-dashboard">
    <button id="dashboard-toggle" aria-label="Toggle Navigation">☰</button>
</div>

<!-- Sliding Navigation Menu -->
<div id="mobile-menu">
    <p class="back-btn">Back</p>
    <p class="close-btn">X</p>

    <div class="menu-items" data-target="block2">
        <img src="sp2.jpg" alt="Image 2" class="menu-icon">
        <span>New + Bestsellers</span>
        <p class="plus-sign">+</p>
    </div>
    <div class="menu-items" data-target="block3">
        <img src="mod3.jpg" alt="Image 3" class="menu-icon">
        <span>Makeup</span>
        <p class="plus-sign">+</p>
    </div>
    <div class="menu-items" data-target="block4">
        <img src="cre.jpg" alt="Image 4" class="menu-icon">
        <span>Skincare</span>
        <p class="plus-sign">+</p>
    </div>
    <div class="menu-items" data-target="block5">
        <img src="h3.jpg" alt="Image 5" class="menu-icon">
        <span>Hair</span>
        <p class="plus-sign">+</p>
    </div>
</div>





<div class="scroll-display">
<div class="small-scroll">
    <div class="left-class">
        <div class="scroll-containers">
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "website_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch images from the database
        $sql = "SELECT * FROM scroll_items4";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Loop through the results and display each image
            while ($row = $result->fetch_assoc()) {
                echo '<div class="scroll-items" data-image="' . htmlspecialchars($row['image_path']) . '">';
                echo '<img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['image_name']) . '">';
                echo '</div>';
            }
        } else {
            echo "<p>No images found in the database.</p>";
        }

        $conn->close();
        ?>
        </div>
    </div>
    <div class="right-class">
    <!-- Display the image -->
    <img id="main-image" src="<?php echo $image_path; ?>" alt="Home Content Image">
</div>
</div>

<div class="inform">
    <div class="product-page">
    <nav class="breadcrumb">
      <a href="Home.php">Home</a> / <a href="productA.php">Cherry Dub Pore Purify'r Gel Cleanser with Niacinamide + Aloe Juice</a>
    </nav>

    <div class="product-info">
      <span class="badge">NEW</span>
      <h1>LipBalm</h1>
      <p class="price">Ksh 3,500.00 </p>
      
      <div class="reviews">
        <span class="stars">★★★★★</span>
        <a href="#">14 Reviews</a>
      </div>

      <p class="description">
        Keep surface oil under control + brighten up with a Triple Cherry Complex, Niacinamide, and Aloe cleanser.
      </p>

      <div class="features">
        <div class="feature">
          <img src="p1.jpeg" alt="Cruelty-free">
          <span>Cruelty-free</span>
        </div>
        <div class="feature">
          <img src="p2.jpeg" alt="Non-comedogenic">
          <span>Non-comedogenic</span>
        </div>
        <div class="feature">
          <img src="p3.jpeg" alt="Brightening">
          <span>Brightening</span>
        </div>
        <div class="feature">
          <img src="p4.jpeg" alt="Vegan">
          <span>Vegan</span>
        </div>
        <div class="feature">
          <img src="p5.jpeg" alt="Recyclable">
          <span>Recyclable</span>
        </div>
      </div>
    </div>
  </div>

  
  <hr>

  <div class="purchase-section">

    <div class="add-to-cart">
      <button class="add-to-cart-btn">ADD TO CART</button>
    </div>

    <p class="payment-info">or 4 payments of $8.50 with <a href="#">afterpay</a></p>

    <div class="account-info">
      <p>Account holders unlock free standard shipping on all Kenya orders. <a href="#">Sign in</a> or <a href="#">sign up</a>.</p>
    </div>
  </div>

  <div class="details-section">
    <h2>DETAILS</h2>
    <h3>LATHER. BRIGHTEN. DE-SLICK—QUICK.</h3>
    <h4>STRAIGHT UP:</h4>
    <p>
      Lather up for fresh, glowing skin with our foaming gel cleanser that instantly improves surface oil and brightens as you wash away dirt, oil, and impurities. This Triple Cherry Complex gel cleanser is straight outta Barbados, where the cherries hit different.
    </p>
  </div>

  <div class="ingredients-section">
    <h2>INGREDIENTS</h2>
    <div class="ingredient-cards">
      <div class="ingredient-card">
        <img src="ingr.jpeg" alt="Triple Cherry Complex">
        <h3>Triple Cherry Complex</h3>
        <p>Three forms of Vitamin C-rich Barbados Cherry (enzyme, ferment + fruit water); brighten, clarify + renew skin</p>
      </div>
      <div class="ingredient-card">
        <img src="ingr1.jpeg" alt="Niacinamide (Vitamin B3)">
        <h3>Niacinamide (Vitamin B3)</h3>
        <p>Refines pores + skin's texture</p>
      </div>
      <div class="ingredient-card">
        <img src="ingr1.jpeg" alt="Aloe Juice">
        <h3>Aloe Juice</h3>
        <p>Soothes + conditions</p>
      </div>
    </div>
  </div>

</div>
</div>



<div class="sale-banner">
    <h1>UP TO 60% OFF SELECT ITEMS</h1>
    <p>Now’s your chance to save big during the Holiday Hangover Sale.</p>
</div>



<button class="scroll-arrow left-arrow" id="scrollLeftBtn" aria-label="Scroll Left">⇐</button>
<button class="scroll-arrow right-arrow" id="scrollRightBtn" aria-label="Scroll Right">⇒</button>

<div class="carousel-container">
    <div class="carousel-track" id="carouselTrack">
        <div class="carousel-item">
            <img id="carouselItem1" src="purp.jpg" alt="Item 1">
            <h3>Diamond Bomb</h3>
            <div class="rating-stars">
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="product-price">KSH 4,800.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>

        <div class="carousel-item">
            <img id="carouselItem2" src="t4.jpg" alt="Item 1">
            <h3>Diamond Bomb</h3>
            <div class="rating-stars">
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="product-price">KSH 4,800.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>


        <div class="carousel-item">
            <img id="carouselItem3" src="t10.jpg" alt="Item 1">
            <h3>Diamond Bomb</h3>
            <div class="rating-stars">
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="product-price">KSH 4,800.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>


        <div class="carousel-item">
            <img id="carouselItem4" src="t1w.jpg" alt="Item 1">
            <h3>Diamond Bomb</h3>
            <div class="rating-stars">
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="product-price">KSH 4,800.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>


        <div class="carousel-item">
            <img id="carouselItem5" src="drop.jpg" alt="Item 1">
            <h3>Diamond Bomb</h3>
            <div class="rating-stars">
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="product-price">KSH 4,800.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>


        <div class="carousel-item">
            <img id="carouselItem6" src="lip.jpg" alt="Item 1">
            <h3>Diamond Bomb</h3>
            <div class="rating-stars">
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="product-price">KSH 4,800.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>

        <div class="carousel-item">
            <img id="carouselItem7" src="bm3.jpg" alt="Item 1">
            <h3>Diamond Bomb</h3>
            <div class="rating-stars">
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="product-price">KSH 4,800.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>
        
        <div class="carousel-item">
            <img id="carouselItem8" src="g.jpg" alt="Item 1">
            <h3>Diamond Bomb</h3>
            <div class="rating-stars">
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star filled"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="product-price">KSH 4,800.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>

    </div>
</div>





<button class="nav-arrow left" id="leftBtn" aria-label="Scroll Left">⇐ </button>
<button class="nav-arrow right" id="rightBtn" aria-label="Scroll Right">⇒ </button>



<div class="classic-container">
    <div class="classic-scroll" id="classicScroll">

        <div class="classic-item">
            <img id="item1" src="b7.jpg" alt="Item 1" data-hover="ap.jpg">
            <h3>Diamond Bomb</h3>
            <div class="stars">
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="price">KSH 4,800.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>

        <div class="classic-item">
            <img id="item2" src="drop.jpg" alt="Item 2" data-hover="b11.jpg">
            <h3>Eaze Drop Lit</h3>
            <div class="stars">
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="price">KSH 3,300.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>

        <div class="classic-item">
            <img id="item3" src="lip.jpg" alt="Item 3" data-hover="lip2.jpg">
            <h3>Fenty Icon Lipstick</h3>
            <div class="stars">
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star half"></div>
            </div>
            <p>5 Sizes</p>
            <p class="price">KSH 3,300.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>

        <div class="classic-item">
            <img id="item4" src="bm3.jpg" alt="Item 4" data-hover="ap2.jpg">
            <h3>Travel-Sized Set</h3>
            <div class="stars">
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="price">KSH 4,000.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>

        <div class="classic-item">
            <img id="item5" src="g.jpg" alt="Item 5" data-hover="ap3.jpg">
            <h3>Flash Nap</h3>
            <div class="stars">
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star half"></div>
            </div>
            <p>3 Sizes</p>
            <p class="price">KSH 1,100.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>

        <div class="classic-item">
            <img id="item6" src="b20.jpg" alt="Item 6" data-hover="ap1.jpg">
            <h3>Foundation Pro</h3>
            <div class="stars">
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="price">KSH 5,200.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>

        <div class="classic-item">
            <img id="item7" src="bm1.jpg" alt="Item 7" data-hover="lips.jpg">
            <h3>Fenty Glow</h3>
            <div class="stars">
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star half"></div>
            </div>
            <p>4 Sizes</p>
            <p class="price">KSH 2,500.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>

        <div class="classic-item">
            <img id="item8" src="skinca.jpg" alt="Item 8" data-hover="ap3.jpg">
            <h3>Skin Cream</h3>
            <div class="stars">
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star black"></div>
                <div class="star half"></div>
            </div>
            <p>2 Sizes</p>
            <p class="price">KSH 6,800.00</p>
            <button class="ezra-button">Quick Shop</button>
        </div>

    </div>
</div>






<div class="block-pay" id="blockPay">
    <div class="block-pay-header">
        <button id="closeBlockPay">X</button>
    </div>
    <div class="c">
        <h1>Quick Shop</h1>
    </div>
    <div id="blockContent">
        <img id="blockImage" src="" alt="Product Image">
        <h3 id="blockName"></h3>
        <p id="blockPrice"></p>
        <button id="addToBag">Add to Bag</button>
    </div>
</div>


<div class="block-check" id="blockCheck">
    <div class="block-check-header">
        <button id="closeBlockCheck">X</button>
    </div>
    <div class="c">
            <h1>Your Bag</h1>
        </div>
    <div id="bagItems"></div>

    <button id="checkoutButton">Checkout</button>
</div>



<div class="how-to-use-section">
    <div class="header">
      <h2>HOW TO USE IT</h2>
      <p>STEP 1: Lather. Brighten. De-slick—quick.</p>
    </div>
    <div class="steps">
      <div class="step">
        <img src="st.jpeg" alt="Step 1 - Cleanse">
        <h3>STEP 1</h3>
        <p>Cleanse</p>
      </div>
      <div class="step">
        <img src="st1.jpeg" alt="Step 2 - Tone">
        <h3>STEP 2</h3>
        <p>Tone</p>
      </div>
      <div class="step">
        <img src="st2.jpeg" alt="Step 3 - Protect">
        <h3>STEP 3</h3>
        <p>Protect</p>
      </div>
      <div class="step">
        <img src="st2.jpeg" alt="Step 4 - Invisimatte">
        <h3>STEP 4</h3>
        <p>Invisimatte</p>
      </div>
    </div>
    <div class="instructions">
      <h3>HOW TO APPLY</h3>
      <p>Wet skin, lather, rinse, then pat dry. Avoid eye area.</p>
      <h3>WHEN TO APPLY</h3>
      <p>Use day and night to remove dirt, oil, impurities, sunscreen, and makeup.</p>
    </div>
  </div>



<div class="d">
  <table>
        <tr>
            <th>COMPARE OUR CLEANSERS</th>
            <th class="product-cell product-1">
                <img src="lips.jpg" alt="Cherry Dub" class="product-imagep"><p>Cherry Dub Pore Purify'r + Aloe Juice</p><p>KSh5,500.00</p>
            </th>
            <th class="product-cell product-2">
                <img src="lipss.jpg" alt="Total Cleans'r Remove-It-All Cleanser" class="product-imagep"><p>Total Cleans'r Remove-It-All Cleanser with Barbados</p> <p>KSh2,600.00</p>
            </th>
            <th class="product-cell product-3">
                <img src="bl.jpg" alt="Melt Awf Jelly Oil Makeup-Melting Cleanser" class="product-imagep"><p>Melt Awf Jelly Oil Makeup-Melting Cleanser</p><p> Ksh500.00</p>
            </th>
            <th class="product-cell product-4">
                <img src="lipglosses 👄💋.jpg" alt="Cocoa Cleans'r Soothing Bar" class="product-imagep"><p>Cocoa Cleans'r Soothing All-Over Coconut Oil + Shea</p><p>KSh2,500.00</p>
            </th>
        </tr>
        <tr>
            <td class="rating-cell">RATING</td>
            <td class="rating-1">
    <div class="rating-container">
        <div class="starss">
            &#9733; &#9733; &#9733; &#9733; &#9733;
        </div>
        <div class="reviewss">14 Reviews</div>
    </div>
</td>
<td class="rating-2">
    <div class="rating-container">
        <div class="starss">
            &#9733; &#9733; &#9733; &#9733; &#9733;
        </div>
        <div class="reviewss">14 Reviews</div>
    </div>
</td>
<td class="rating-3">
    <div class="rating-container">
        <div class="starss">
            &#9733; &#9733; &#9733; &#9733; &#9733;
        </div>
        <div class="reviewss">14 Reviews</div>
    </div>
</td>
<td class="rating-4">
    <div class="rating-container">
        <div class="starss">
            &#9733; &#9733; &#9733; &#9733; &#9733;
        </div>
        <div class="reviewss">14 Reviews</div>
    </div>
</td>
        </tr>
        <tr>
            <td  class="rating-cell">SKIN TYPE</td>
            <td class="rating-1">
                    <div class="rating-container">
                            <div class="reviewss">Oily, blemish-prone skin</div>
                    </div>
            </td>
            <td class="rating-2">
                    <div class="rating-container">
                            <div class="reviewss">Oily, blemish-prone skin</div>
                    </div>
            </td>
            <td class="rating-3">
                     <div class="rating-container">
                            <div class="reviewss">Oily, blemish-prone skin</div>
                    </div>
            </td>
            <td class="rating-4">
                    <div class="rating-container">
                            <div class="reviewss">Oily, blemish-prone skin</div>
                    </div>
            </td>
        </tr>
        <tr>
            <td  class="rating-cell">FORMULATION</td>
            <td class="rating-1">
                    <div class="rating-container">
                            <div class="reviewsss">Foaming gel lather</div>
                    </div>
            </td>
            <td class="rating-2">
                    <div class="rating-container">
                            <div class="reviewsss">Foaming plush lather</div>
                    </div>
            </td>
            <td class="rating-3">
                     <div class="rating-container">
                            <div class="reviewsss">Unique jelly texture transforms to a lightweight oil</div>
                    </div>
            </td>
            <td class="rating-4">
                    <div class="rating-container">
                            <div class="reviewsss">Bar soap transforms to a decadent plush lather</div>
                    </div>
            </td>
        </tr>
        <tr>
            <td  class="rating-cell">GOALS</td>
            <td class="rating-1">
                    <div class="rating-container">
                            <div class="reviewsss">Keeps surface oil under control, brightens + deeply cleanses</div>
                    </div>
            </td>
            <td class="rating-2">
                    <div class="rating-container">
                            <div class="reviewsss">Deep cleansing, purifying</div>
                    </div>
            </td>
            <td class="rating-3">
                     <div class="rating-container">
                            <div class="reviewsss">Removes longwear + waterproof makeup, non-stripping, hydrating</div>
                    </div>
            </td>
            <td class="rating-4">
                    <div class="rating-container">
                            <div class="reviewsss">Nourishing, purifying</div>
                    </div>
            </td>
        </tr>
        <tr>
            <td  class="rating-cell">USAGE</td>
            <td class="rating-1">
                    <div class="rating-container">
                            <div class="reviewss">Face</div>
                    </div>
            </td>
            <td class="rating-2">
                    <div class="rating-container">
                            <div class="reviewss">Face</div>
                    </div>
            </td>
            <td class="rating-3">
                     <div class="rating-container">
                            <div class="reviewss">Face</div>
                    </div>
            </td>
            <td class="rating-4">
                    <div class="rating-container">
                            <div class="reviewss">Face + Body</div>
                    </div>
            </td>
        </tr>
    </table>
</div>






<div class="comment">
    <div class="comment-left">
        <div class="up">
          <div class="ratings-containerp">
             <h2 class="ratings-titlep">RATINGS AND REVIEWS</h2>
          <div class="r1">
          <div class="r">
          <div class="rats">
            <span class="starp">&#9733;</span>
            <span class="starp">&#9733;</span>
            <span class="starp">&#9733;</span>
            <span class="starp">&#9733;</span>
            <span class="starp">&#9733;</span>
          </div>
           <p class="reviews-count">14 Reviews</p>
           </div>
          </div>
          </div>
        </div>

        <div class="down">
        <div class="filter-container">
        <h2 class="filter-title">FILTER REVIEWS</h2>
        <div class="dropdown">
            <select id="ratingp" name="rating">
                <option value="" disabled selected>Rating</option>
                <option value="5">5 Stars</option>
                <option value="4">4 Stars</option>
                <option value="3">3 Stars</option>
                <option value="2">2 Stars</option>
                <option value="1">1 Star</option>
            </select>
        </div>
        <div class="dropdown">
            <select id="age" name="age">
                <option value="" disabled selected>Age</option>
                <option value="under-18">Under 18</option>
                <option value="18-24">18-24</option>
                <option value="25-34">25-34</option>
                <option value="35-44">35-44</option>
                <option value="45-54">45-54</option>
                <option value="55-plus">55+</option>
            </select>
        </div>
       </div>

        </div>
    </div>
    <div class="comment-right">
        <div class="upp">
          <div class="button-containert">
            <button class="review-buttont">WRITE A REVIEW</button>
          </div>
        </div>
        <div class="downn">

        <div class="review-card">
        <div class="review-header">
            <div>SEPHORA-FA...</div>
            <div>01/21/25</div>
         </div>
        <div class="starsr">★★★★★</div>
        <div class="review-titler">Love It!!</div>
        <div class="review-body">
      I love this as I got at my local Sephora store and really love it. I just tried it in the morning. I made my skin feel so nice and awake as well. It was very calming and refreshing on my face. Can't wait to get another one once I am done with this. Love the cherry scent also for February - <a href="#">Read more</a>
        </div>
        <div class="review-details">
        <div class="des">Recommend To A Friend:</div>
  <div class="dez">Yes</div>
  <div class="des">Age:</div>
  <div class="dez">35-44</div>
  <div class="des">Gender:</div>
  <div class="dez">she/her</div>
  <div class="des">Shade Number:</div>
  <div class="dez">Not sure</div>
        </div>
        <div class="see-more">See more</div>
       <div class="dividerr"></div>
  </div>

        </div>
    </div>
</div>



<div class="review-block" id="review-block">
    <button class="close-btnr" id="close-btnr">&times;</button>

    <div class="review-form">
    <form action="#" method="post">
      <label for="review">Write a review *</label>
      <textarea id="review" name="review" placeholder="Tell us what you like or dislike" required></textarea>
      
      <label for="headline">Add a headline *</label>
      <input type="text" id="headline" name="headline" placeholder="Summarize your experience" required>
      
      <div class="form-row">
        <div class="form-group">
          <label for="name">Your name *</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Your email *</label>
          <input type="email" id="email" name="email" required>
        </div>
      </div>
      
      <button type="submit" class="submit-btnt">SEND</button>
      <p class="required-fields">* required fields</p>
    </form>
  </div>
</div>

  


<footer class="footer">
    <div class="footer-left">
        <h2>DOWN FOR MORE? WE GOT YOU.</h2>
        <p>All the latest product drops, limited offers, in-store event info–straight to your inbox.</p>
      
        <form class="phone-form">
          <label for="phone">Phone:</label>
          <div class="input-container">
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
            <button type="submit" class="icon-button">
              <i class="arrow-icon">&#8594;</i>
            </button>
          </div>
        </form>
      
        <form class="email-form">
          <label for="email">Email:</label>
          <div class="input-container">
            <input type="email" id="email" name="email" placeholder="Enter your email">
            <button type="submit" class="icon-button">
              <i class="arrow-icon">&#8594;</i>
            </button>
          </div>
        </form>
    
        <p>By subscribing to Ckary Beauty, you agree to our Terms of Use and Privacy Policy and consent to receive a varying number of marketing messages via email and text. Consent is not a condition of any purchase. Message and data rates may apply. Reply HELP for help or STOP to opt out. </p>

        <h3>CKARY BEAUTY</h3>
    </div>      
      
    <div class="footer-right">
        <div class="class-one">
            <div class="sub-class-one">
                <h3>Customer Service</h3>
                <p>Operating hours are from 9am-9pm EST Monday-Friday and 9am-6pm EST Saturday. Reach out today!</p>
                <p>Email: <a href="mailto:customerservice@ckary.com">customerservice@ckarybeauty.com</a></p>
                <p>Phone: <a href="tel:1-855-440-7474">1-855-440-7474</a></p>
                <ul>
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Shipping Information</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Help & FAQs</a></li>
                        <li><a href="#">My Account</a></li>
                </ul>
            </div>
            <div class="sub-class-two">
                <h3>ABOUT</h3>
                <p>Charity was inspired to create the world of Ckary Beauty brands after years of partnering with the best of the best in the beauty industry—and still seeing a void for products that performed across all skin tones + types and hair textures.</p>
                <p><a>About the Brands</a></p>
                <p><a>Careers</a></p>
            </div>
            <div class="sub-class-three">
                <img src="bea.jpg">
            </div>
        </div>
        
        <div class="class-two">
            <div class="social-bar">
                <a href="#" class="social-icon">
                  <img src="tik.jpg" alt="TikTok" />
                </a>
                <a href="#" class="social-icon">
                  <img src="inst.jpg" alt="Instagram" />
                </a>
                <a href="#" class="social-icon">
                  <img src="fac.jpg" alt="Facebook" />
                </a>
                <a href="#" class="social-icon">
                  <img src="X (Twitter) app icon.jpg" alt="Twitter" />
                </a>
                <a href="#" class="social-icon">
                  <img src="YouTube.jpg" alt="YouTube" />
                </a>
              </div>
        </div>
        
        <div class="class-three">
            <div class="footer-bar">
                <div class="footer-item">
                  <img src="kenya.jpg" alt="United States" class="flag-icon" />
                  <span>Kenya</span>
                </div>
                <span class="divider">|</span>
                <div class="footer-item">English</div>
                <span class="divider">|</span>
                <a href="#" class="footer-link">Privacy</a>
                <a href="#" class="footer-link">Terms of Use</a>
                <a href="#" class="footer-link">Refund Policy</a>
                <a href="#" class="footer-link">Accessibility</a>
                <div class="footer-item highlight">
                  <a href="#" class="highlight-link">Privacy Settings</a>
                </div>
              </div>
          </div>
    </div>
    </div>
      
</footer>

<script src="productE.js"></script>
</body>
</html>

