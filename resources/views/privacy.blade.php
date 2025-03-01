<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="refresh" content="32000">
        <link rel="icon" href="{{ asset('images/ckayy.jpg') }}" type="image/png">
        <title>Ckary Beauty</title>
        <link rel="stylesheet" href="{{ asset('css/privacy.css') }}">
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




<div class="privacy-policy">
    <h1>CKary Privacy Policy</h1>
    <p>At CKary, your privacy is our top priority. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services. Please read this policy carefully. If you do not agree with any of these terms, please do not access our site.</p>

    <h2>Information We Collect</h2>
    <p>We may collect personal information from you when you interact with our website. The types of information we collect include:</p>
    <ul>
      <li>Your name, email address, and contact details when you sign up for our newsletter or create an account.</li>
      <li>Information about your browsing behavior on our website through cookies and similar technologies.</li>
      <li>Any other information that you voluntarily provide to us.</li>
    </ul>

    <h2>How We Use Your Information</h2>
    <p>Your information is used in the following ways:</p>
    <ul>
      <li>To personalize your experience on our website.</li>
      <li>To improve our website, products, and services.</li>
      <li>To process your transactions and send you order updates.</li>
      <li>To send periodic emails about new products, special offers, or other information.</li>
    </ul>

    <h2>How We Protect Your Information</h2>
    <p>We implement a variety of security measures to maintain the safety of your personal information. Access to your personal data is restricted to those employees, agents, and third parties who need to know that information to perform their duties.</p>

    <h2>Third-Party Disclosure</h2>
    <p>We do not sell, trade, or otherwise transfer your personally identifiable information to outside parties except as required by law or as necessary to provide our services. Aggregated, non-personally identifiable information may be provided to our business partners.</p>

    <h2>Changes to This Privacy Policy</h2>
    <p>CKary reserves the right to update this Privacy Policy at any time. We encourage you to check this page periodically for any changes. Your continued use of the site after any changes indicates your acceptance of the revised policy.</p>

    <h2>Contact Us</h2>
    <p>If you have any questions or concerns about our Privacy Policy, please feel free to <a href="mailto:privacy@ckary.com">contact us</a>.</p>
  </div>


  <script src="{{ asset('js/privacy.js') }}"></script>


</body>
</html>

