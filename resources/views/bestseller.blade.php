<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="refresh" content="32000">
        <link rel="icon" href="{{ asset('images/ckayy.jpg') }}" type="image/png">
        <title>Ckary Beauty</title>
        <link rel="stylesheet" href="{{ asset('css/bestseller.css') }}">
    </head>
    
</head>
<body>

<div class="sign-in-block" id="signInBlock">
<button class="close-btnp" id="closeBtns">&times;</button>
        <h2>Welcome</h2>
    <div class="form-container">
        <h1>Sign in or sign up to unlock free standard shipping on all U.S. orders.</h1>
    <form  id="signInForm">
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
        <a href="{{ url('/terms-of-use') }}">Terms of Use</a> and <a href="{{ url('/privacy') }}">Privacy Policy</a>. If you sign up for 
        our email list, you also consent to receive a varying number of marketing messages via email. Consent is not a condition of any purchase.
      </small>
    </form>
  </div>
</div>



<header class="navbar">
        <div class="center-section">
            <img src="{{ asset('images/ckayy.jpg') }}">
            <h1>CKARY BEAUTY</h1>
        </div>
        <div class="left-section">
            <img src="{{ asset('images/kenya.jpg') }}" alt="US Flag" class="flag-icon">
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
        <img src="{{ asset('images/ckayy.jpg') }}">
        <h1>CKARY BEAUTY</h1>
    </div>
    <div class="left-section2">
        <img src="{{ asset('images/kenya.jpg') }}" alt="US Flag" class="flag-icon">
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
<p class="close-btn">X</p>
    <div class="containerp">
        <div class="sidebar">
            <h2>New + Bestsellers</h2>
            <a href="{{ url('/new') }}" class="sidebar-link"><p>New Arrivals </p></a>
            <a href="{{ url('/bestseller') }}" class="sidebar-link"><p>Bestsellers  </p></a>
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
                <img src="{{ asset('images/blue.jpg') }}" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="product">
                <img src="{{ asset('images/blue1.jpg') }}" alt="Product 2">
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
<p class="close-btn">X</p>
    <div class="containerp">
        <div class="sidebar">
            <h2>Makeup</h2>
            <a href="{{ url('/lipG') }}" class="sidebar-link"><p>Lip Gloss  </p></a>
            <a href="{{ url('/lipL') }}" class="sidebar-link"><p>Lip Liner </p></a>
            <a href="{{ url('/lipS') }}" class="sidebar-link"><p>Lipstick </p></a>
            <a href="{{ url('/foundation') }}" class="sidebar-link"><p>Foundation </p></a>
            <a href="{{ url('/concealer') }}" class="sidebar-link"><p>Concealer </p></a>
            <a href="{{ url('/blush') }}" class="sidebar-link"><p>Blush + Highlighter   </p></a>
            <a href="{{ url('/eye') }}" class="sidebar-link"><p>Eye Makeup   </p></a>
            <a href="{{ url('/all') }}" class="sidebar-link button-link"><p>Shop All Makeup</p></a>
        </div>
        
        <div class="contentr">
            <div class="offers">
                <div class="offer-boxsd">
                    <h2>Ckary Beauty</h2>
                </div>
            </div>

            <div class="products">
                <img src="{{ asset('images/lipss.jpg') }}" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="{{ asset('images/pi.jpg') }}" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="{{ asset('images/t9.jpg') }}" alt="Product 2">
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
<p class="close-btn">X</p>
    <div class="containerp">
        <div class="sidebar">
            <h2>SkinCare</h2>
            <a href="{{ url('/body') }}" class="sidebar-link"><p>Body   </p></a>
            <a href="{{ url('/LipT') }}" class="sidebar-link"><p>Lip Care </p></a>
            <a href="{{ url('/Mask') }}" class="sidebar-link"><p>Masks  </p></a>
            <a href="{{ url('/EyeCare') }}" class="sidebar-link"><p>Eye Care  </p></a>
            <a href="{{ url('/all') }}" class="button-link"><p>Shop All Skincare</p></a>
        </div>
        
        <div class="contentr">
            <div class="offersr">
                <div class="offer-boxsd">
                    <h2>Ckary Skin</h2>
                </div>
            </div>

            <div class="products">
                <img src="{{ asset('images/BRONZER - Chai.jpg') }}" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="{{ asset('images/florence by mills.jpg') }}" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="{{ asset('images/io.jpg') }}" alt="Product 2">
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
<p class="close-btn">X</p>
    <div class="containerp">
        <div class="sidebar">
            <h2>Hair</h2>
            <a href="{{ url('/shampoo') }}" class="sidebar-link"><p>Shampoo </p></a>
            <a href="{{ url('/condition') }}" class="sidebar-link"><p>Condition</p></a>
        </div>
        
        <div class="contentr">
            <div class="offersp">
                <div class="offer-boxsd">
                    <h2>CkaryHair</h2>
                </div>
            </div>

            <div class="products">
                <img src="{{ asset('images/h1.jpg') }}" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="{{ asset('images/h2.jpg') }}" alt="Product 1">
                <h3>Ckary Skin Travel-Size Start'r Set with Mineral SPF</h3>
                <div class="rating">
                    ★★★★☆
                    <span>(4.5)</span>
                </div>
                <p><span class="old-price">$49</span> <span class="price">$24.50</span></p>
            </div>
            <div class="products">
                <img src="{{ asset('images/t9.jpg') }}" alt="Product 2">
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
    <hr>

    <div class="menu-items">
      <div class="sa">  
        <img src="{{ asset('images/sp2.jpg') }}" alt="Image 2" class="menu-icon">
        <span>New + Bestsellers</span>
        <p class="plus-sign">+</p>
      </div>  
        <div class="extend">
            <a href="{{ url('/new') }}" class="sidebar-linkk"><p>New Arrivals </p></a>
            <a href="{{ url('/bestseller') }}" class="sidebar-linkk"><p>Bestsellers  </p></a>
        </div>
    </div>
    <div class="menu-items">
      <div class="sa">  
        <img src="{{ asset('images/mod3.jpg') }}" alt="Image 3" class="menu-icon">
        <span>Makeup</span>
        <p class="plus-sign">+</p>
      </div>
      <div class="extend">
      <a href="{{ url('/lipG') }}" class="sidebar-linkk"><p>Lip Gloss  </p></a>
            <a href="{{ url('/lipL') }}" class="sidebar-linkk"><p>Lip Liner </p></a>
            <a href="{{ url('/lipS') }}" class="sidebar-linkk"><p>Lipstick </p></a>
            <a href="{{ url('/foundation') }}" class="sidebar-linkk"><p>Foundation </p></a>
            <a href="{{ url('/concealer') }}" class="sidebar-linkk"><p>Concealer </p></a>
            <a href="{{ url('/blush') }}" class="sidebar-linkk"><p>Blush + Highlighter   </p></a>
            <a href="{{ url('/eye') }}" class="sidebar-linkk"><p>Eye Makeup   </p></a>
            <a href="{{ url('/all') }}" class="sidebar-linkk"><p>Shop All Makeup</p></a>
        </div>
    </div>
    <div class="menu-items">
      <div class="sa">
        <img src="{{ asset('images/cre.jpg') }}" alt="Image 4" class="menu-icon">
        <span>Skincare</span>
        <p class="plus-sign">+</p>
      </div>  
        <div class="extend">
            <a href="{{ url('/body') }}" class="sidebar-linkk"><p>Body   </p></a>
            <a href="{{ url('/LipT') }}" class="sidebar-linkk"><p>Lip Care </p></a>
            <a href="{{ url('/Mask') }}" class="sidebar-linkk"><p>Masks  </p></a>
            <a href="{{ url('/EyeCare') }}" class="sidebar-linkk"><p>Eye Care  </p></a>
            <a href="{{ url('/all') }}" class="sidebar-linkk"><p>Shop All Skincare</p></a>
        </div>
    </div>
    <div class="menu-items">
      <div class="sa">
        <img src="{{ asset('images/h3.jpg') }}" alt="Image 5" class="menu-icon">
        <span>Hair</span>
        <p class="plus-sign">+</p>
      </div>
      <div class="extend">
         <a href="{{ url('/shampoo') }}" class="sidebar-linkk"><p>Shampoo </p></a>
         <a href="{{ url('/condition') }}" class="sidebar-linkk"><p>Condition</p></a>
      </div>
    </div>
</div>




<div class="breadcrumb">
    <a href="{{ route('Home') }}">Home</a> <span>/</span> <span>Best Sellers</span>
</div>



<div class="banner">
    <div class="contentp">
        <h2>1 GOAL—JUICY LIPS</h2>
        <h1>THE GLOSS BOMB GANG GOT A NEW MEMBER</h1>
        <p>Stop by for high-shine, thirst-trappin’ formulas in universal shades.</p>
        <p class="btnd">SHOP GLOSS BOMB</p>
    </div>
</div>


<div class="prod-block">
    <button class="close-btnr">X</button>

    <div class="product-container">
        <img id="product-image" src="{{ asset('images/b22.jpg') }}" alt="Product Image">
        <div class="product-info">
            <h2 id="product-title">Glycolic Acid Solution</h2>
            <p id="product-price">KSh 1500.00</p>
            <div class="quantity-selector">
                <button onclick="decreaseQuantity()">-</button>
                <span id="quantity">1</span>
                <button onclick="increaseQuantity()">+</button>
            </div>
            <div class="cart-buttons">
                <button class="buy-now" onclick="buyNow()">Buy it now</button>
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
            <img id="carouselItem1" src="{{ asset('images/purp.jpg') }}" alt="Item 1">
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
            <img id="carouselItem2" src="{{ asset('images/t4.jpg') }}" alt="Item 1">
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
            <img id="carouselItem3" src="{{ asset('images/t10.jpg') }}" alt="Item 1">
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
            <img id="carouselItem4" src="{{ asset('images/t1w.jpg') }}" alt="Item 1">
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
            <img id="carouselItem5" src="{{ asset('images/drop.jpg') }}" alt="Item 1">
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
            <img id="carouselItem6" src="{{ asset('images/lip.jpg') }}" alt="Item 1">
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
            <img id="carouselItem7" src="{{ asset('images/bm3.jpg') }}" alt="Item 1">
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
            <img id="carouselItem8" src="{{ asset('images/g.jpg') }}" alt="Item 1">
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





<div class="prod">
    <div class="boxx">
        <h1>FREE 2 PIECE GIFT</h1>
        <p>Who doesnt love a brighter skin</p>

        <button class="bt">Shop Now</button>
    </div>
    <div class="k">
        <div class="ser">
            <img src="{{ asset('images/ski.jpeg') }}">
        </div>
    </div>
</div>




<div class="prod-blockk">
    <button class="close-btnrk">X</button>

    <div class="product-containerk">
        <img id="product-imagek" src="{{ asset('images/b22.jpg') }}" alt="Product Image">
        <div class="product-infok">
            <h2 id="product-titlek">Ezra Masterpiece</h2>
            <p id="product-pricek">KSh 1500.00</p>
            <div class="quantity-selectork">
                <button onclick="decreaseQuantityk()">-</button>
                <span id="quantityk">1</span>
                <button onclick="increaseQuantityk()">+</button>
            </div>
            <div class="cart-buttonsk">
                <button class="buy-nowk" onclick="buyNowk()">Buy it now</button>
            </div>
        </div>
    </div>

</div>


<button class="nav-arrow left" id="leftBtn" aria-label="Scroll Left">⇐ </button>
<button class="nav-arrow right" id="rightBtn" aria-label="Scroll Right">⇒ </button>



<div class="classic-container">
    <div class="classic-scroll" id="classicScroll">

        <div class="classic-item">
            <img id="item1" src="{{ asset('images/b7.jpg') }}" alt="Item 1" data-hover="ap.jpg">
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
            <img id="item2" src="{{ asset('images/drop.jpg') }}" alt="Item 2" data-hover="b11.jpg">
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
            <img id="item3" src="{{ asset('images/lip.jpg') }}" alt="Item 3" data-hover="lip2.jpg">
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
            <img id="item4" src="{{ asset('images/bm3.jpg') }}" alt="Item 4" data-hover="ap2.jpg">
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
            <img id="item5" src="{{ asset('images/g.jpg') }}" alt="Item 5" data-hover="ap3.jpg">
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
            <img id="item6" src="{{ asset('images/b20.jpg') }}" alt="Item 6" data-hover="ap1.jpg">
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
            <img id="item7" src="{{ asset('images/bm1.jpg') }}" alt="Item 7" data-hover="lips.jpg">
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
            <img id="item8" src="{{ asset('images/skinca.jpg') }}" alt="Item 8" data-hover="ap3.jpg">
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





<div class="exceptional-container">
    <div class="exceptional" id="exceptional">
      <div class="exceptional-item">
        <video src="{{ asset('images/vid1.mp4') }}" autoplay muted loop  disablePictureInPicture></video>
      </div>
      <div class="exceptional-item">
        <video src="{{ asset('images/vid2.mp4') }}" autoplay muted loop  disablePictureInPicture></video>
      </div>
      <div class="exceptional-item">
        <video src="{{ asset('images/vid4.mp4') }}" autoplay muted loop  disablePictureInPicture></video>
      </div>
      <div class="exceptional-item">
        <video src="{{ asset('images/vid5.mp4') }}" autoplay muted loop  disablePictureInPicture></video>
      </div>
      <div class="exceptional-item">
        <video src="{{ asset('images/vid6.mp4') }}" autoplay muted loop  disablePictureInPicture></video>
      </div>
      <div class="exceptional-item">
        <video src="{{ asset('images/vid1.mp4') }}" autoplay muted loop  disablePictureInPicture></video>
      </div>
      <div class="exceptional-item">
        <video src="{{ asset('images/vid2.mp4') }}" autoplay muted loop  disablePictureInPicture></video>
      </div>
      <div class="exceptional-item">
        <video src="{{ asset('images/vid3.mp4') }}" autoplay muted loop  disablePictureInPicture></video>
      </div>
    </div>
    <div class="arrows">
      <button class="arrow" id="leftArrow">&#8592;</button>
      <button class="arrow" id="rightArrow">&#8594;</button>
    </div>
  </div>




  <div class="mobile-exceptional-container">
    <div class="mobile-exceptional" id="mobileExceptional">
        <div class="mobile-exceptional-item">
            <video src="{{ asset('images/vid1.mp4') }}" loop disablePictureInPicture></video>
        </div>
        <div class="mobile-exceptional-item">
            <video src="{{ asset('images/vid2.mp4') }}" loop disablePictureInPicture></video>
        </div>
        <div class="mobile-exceptional-item">
            <video src="{{ asset('images/vid4.mp4') }}" loop disablePictureInPicture></video>
        </div>
        <div class="mobile-exceptional-item">
            <video src="{{ asset('images/vid5.mp4') }}" loop disablePictureInPicture></video>
        </div>
        <div class="mobile-exceptional-item">
            <video src="{{ asset('images/vid6.mp4') }}" loop disablePictureInPicture></video>
        </div>
    </div>
</div>



<div class="containery">
    <p class="quote">"DARE TO DO SOMETHING NEW OR DIFFERENT." – RIHANNA</p>
    <p class="subtext">Explore makeup that's meant to be played with.</p>
    <div class="grid">
        <div class="grid-item">
            <img src="{{ asset('images/beauty.jpg') }}" alt="Lip Products">
            <a href="{{ url('/lipL') }}" class="shop-text">SHOP ALL LIP LINER</a>
        </div>
        <div class="grid-item">
            <img src="{{ asset('images/b14.jpg') }}" alt="Makeup Products">
            <a href="{{ url('/foundation') }}" class="shop-text">SHOP ALL FOUNDATION</a>
        </div>
        <div class="grid-item">
            <img src="{{ asset('images/mod.jpg') }}" alt="Face Products">
            <a href="{{ url('/condition') }}" class="shop-text">SHOP ALL CONDITION</a>
        </div>
        <div class="grid-item">
            <img src="{{ asset('images/mod3.jpg') }}" alt="Eye Products">
            <a href="{{ url('/eye') }}" class="shop-text">SHOP ALL EYE</a>
        </div>
        
    </div>
</div>






<div id="phone-block" class="submission-block">
    <p>You are officially a Member</p>
    <p>Thank you for your phone submission!</p>
  </div>

  <div id="email-block" class="submission-block">
    <p>You are officially a Member</p>
    <p>Thank you for your email submission!</p>
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
                <img src="{{ asset('images/bea.jpg') }}">
            </div>
        </div>
        
        <div class="class-two">
            <div class="social-bar">
                <a href="#" class="social-icon">
                  <img src="{{ asset('images/tik.jpg') }}" alt="TikTok" />
                </a>
                <a href="#" class="social-icon">
                  <img src="{{ asset('images/inst.jpg') }}" alt="Instagram" />
                </a>
                <a href="#" class="social-icon">
                  <img src="{{ asset('images/fac.jpg') }}" alt="Facebook" />
                </a>
                <a href="#" class="social-icon">
                  <img src="{{ asset('images/X (Twitter) app icon.jpg') }}" alt="Twitter" />
                </a>
                <a href="#" class="social-icon">
                  <img src="{{ asset('images/YouTube.jpg') }}" alt="YouTube" />
                </a>
              </div>
        </div>
        
        <div class="class-three">
            <div class="footer-bar">
                <div class="footer-item">
                  <img src="{{ asset('images/kenya.jpg') }}" alt="United States" class="flag-icon" />
                  <span>Kenya</span>
                </div>
                <span class="divider">|</span>
                <div class="footer-item">English</div>
                <span class="divider">|</span>
                <a href="{{ url('/privacy') }}" class="footer-link">Privacy</a>
                <a href="{{ url('/terms-of-use') }}" class="footer-link">Terms of Use</a>
                <a href="{{ url('/policy') }}" class="footer-link">Refund Policy</a>
                <a href="{{ url('/Accessibility') }}" class="footer-link">Accessibility</a>
                <div class="footer-item highlight">
                  <a href="{{ route('Home') }}" class="highlight-link">Privacy Settings</a>
                </div>
              </div>
          </div>
    </div>
    </div>
      
</footer>


<script>
    // Event listener for the Checkout button
document.getElementById('checkoutButton').addEventListener('click', function () {
    // Get all items in the bag from localStorage
    const bagItems = JSON.parse(localStorage.getItem('bagItems')) || [];

    // Prepare the URL for pay.html and pass the item details as query parameters
    const itemDetails = bagItems.map((item, index) => {
        return `item${index + 1}_name=${encodeURIComponent(item.name)}&item${index + 1}_price=${encodeURIComponent(item.price)}&item${index + 1}_imageSrc=${encodeURIComponent(item.imageSrc)}`;
    }).join('&');

    // Redirect to pay.html with the item details
    window.location.href = `{{ url('pay') }}?${itemDetails}`;
});

function increaseQuantity() {
    let quantityElement = document.getElementById("quantity");
    let quantity = parseInt(quantityElement.textContent);
    quantityElement.textContent = quantity + 1;
}
function decreaseQuantity() {
    let quantityElement = document.getElementById("quantity");
    let quantity = parseInt(quantityElement.textContent);
    if (quantity > 1) {
        quantityElement.textContent = quantity - 1;
    }
}

function buyNow() {
    let imageSrc = document.getElementById("product-image").src;
    let title = document.getElementById("product-title").innerText;
    let price = document.getElementById("product-price").innerText.replace("KSh ", "");
    let quantity = parseInt(document.getElementById("quantity").innerText);
    let totalPrice = parseInt(price) * quantity;

    // Create URL with query string parameters
    let url = new URL("{{ url('payy') }}", window.location.href);
    url.searchParams.append("image", encodeURIComponent(imageSrc));
    url.searchParams.append("title", encodeURIComponent(title));
    url.searchParams.append("price", encodeURIComponent("KSh " + totalPrice));
    url.searchParams.append("quantity", encodeURIComponent(quantity));

    // Redirect to pay2.html with parameters in URL
    window.location.href = url;
}



function buyNowk() {
    let imageSrc = document.getElementById("product-imagek").src;
    let title = document.getElementById("product-titlek").innerText;
    let price = document.getElementById("product-pricek").innerText.replace("KSh ", "");
    let quantity = parseInt(document.getElementById("quantityk").innerText);
    let totalPrice = parseInt(price) * quantity;

    // Create URL with query string parameters
    let url = new URL("{{ url('payy') }}", window.location.href);
    url.searchParams.append("image", encodeURIComponent(imageSrc));
    url.searchParams.append("title", encodeURIComponent(title));
    url.searchParams.append("price", encodeURIComponent("KSh " + totalPrice));
    url.searchParams.append("quantity", encodeURIComponent(quantity));

    // Redirect to pay2.html with parameters in URL
    window.location.href = url;
}

function increaseQuantityk() {
    let quantityElement = document.getElementById("quantityk");
    let quantity = parseInt(quantityElement.textContent);
    quantityElement.textContent = quantity + 1;
}
function decreaseQuantityk() {
    let quantityElement = document.getElementById("quantityk");
    let quantity = parseInt(quantityElement.textContent);
    if (quantity > 1) {
        quantityElement.textContent = quantity - 1;
    }
}

</script>

<script src="{{ asset('js/bestseller.js') }}"></script>


</body>
</html>

