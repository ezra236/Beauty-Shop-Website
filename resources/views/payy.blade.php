<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="320">
    <link rel="icon" href="{{ asset('images/ckayy.jpg') }}" type="image/png">
        <title>Ckary Beauty</title>
        <link rel="stylesheet" href="{{ asset('css/payy.css') }}">
</head>
<body>


    <div class="logo">
        C K A R Y &nbsp;&nbsp; B E A U T Y
    </div>

    <div class="information">
        <!-- Customer class on the left -->
        <div class="customer">
           <div class="s">
            <div class="contact-container">
                <h2>CONTACT</h2>
                <form action="#" method="post">
                  <div class="form-groupp">
                    <label for="email" class="visually-hidden">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-groupp">
                    <input type="checkbox" id="news-offers" name="news-offers">
                    <label for="news-offers">Email me with news and offers</label>
                  </div>
                  <p class="disclaimer">
                    By subscribing to Fenty Beauty + Fenty Skin, you agree to our 
                    <a href="{{ url('/terms-of-use') }}" target="_blank">Terms of Use</a> and 
                    <a href="{{ url('/privacy') }}" target="_blank">Privacy Policy</a> and consent to receive a varying number of marketing messages via email. Consent is not a condition of any purchase.
                  </p>
                </form>
              </div>
            </div>

          <div class="w">
            <div class="delivery-container">
                <h2>DELIVERY</h2>
                <form action="#" method="post">
                  <div class="form-group">
                    <label for="country" class="visually-hidden">Country/Region</label>
                    <select id="country" name="country" required>
                      <option value="Kenya">Kenya</option>
                      <option value="United States">United States</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="Canada">Canada</option>
                    </select>
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                      <input type="text" id="first-name" name="first-name" placeholder="First name" required>
                    </div>
                    <div class="form-group">
                      <input type="text" id="last-name" name="last-name" placeholder="Last name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" id="company" name="company" placeholder="Company (optional)">
                  </div>
                  <div class="form-group">
                    <input type="text" id="address" name="address" placeholder="Address" required>
                  </div>
                  <div class="form-group">
                    <input type="text" id="apartment" name="apartment" placeholder="Apartment, suite, etc. (optional)">
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                      <input type="text" id="city" name="city" placeholder="Town" required>
                    </div>
                    <div class="form-group">
                      <input type="text" id="postal-code" name="postal-code" placeholder="Postal code (optional)">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                  </div>
                  <div class="form-group checkbox-group">
                    <input type="checkbox" id="text-offers" name="text-offers">
                    <label for="text-offers">Text me with news and offers. (Kenya phone numbers only).</label>
                  </div>
                </form>
              </div>
            </div>

            <div class="checkout-container">
                <h2>SHIPPING METHOD</h2>
                <form action="#" method="post" class="shipping-method">
                  <div class="option">
                    <input type="radio" id="standard" name="shipping" value="standard" checked>
                    <label for="standard">
                      <span class="method-title">Standard Courier</span>
                      <span class="method-details">7 to 10 business days</span>
                      <span class="method-price">KES 1,198.00</span>
                    </label>
                  </div>
                  <div class="option">
                    <input type="radio" id="express" name="shipping" value="express">
                    <label for="express">
                      <span class="method-title">Express Courier (Air)</span>
                      <span class="method-details">5 to 6 business days<br>Prepayment of duties and taxes supported</span>
                      <span class="method-price">KES 2,663.00</span>
                    </label>
                  </div>
                </form>
            
                <h2>PAYMENT</h2>
                <p class="secure-text">All transactions are secure and encrypted.</p>
                <form action="#" method="post" class="payment-method">
                  <div class="optionn">
                    <div class="rad">
                    <input type="radio" id="credit-card" name="payment" value="credit-card" checked>
                    <label for="credit-card">
                      <span class="payment-title">Credit or Debit Card</span>
                      <span class="card-icons">
                        <img src="{{ asset('images/vis.jpeg') }}" alt="Visa">
                        <img src="{{ asset('images/mast.jpeg') }}" alt="MasterCard">
                      </span>
                    </label>
                    </div>
                    <div class="payment-details">
                      <input type="text" name="card-number" placeholder="Card number" required>
                      <div class="form-roww">
                        <input type="text" name="expiry-date" placeholder="Expiration date (MM / YY)" required>
                        <input type="text" name="security-code" placeholder="Security code" required>
                      </div>
                      <input type="text" name="name-on-card" placeholder="Name on card" required>
                      <div class="form-groupw">
                        <input type="checkbox" id="use-shipping" name="use-shipping" checked>
                        <label for="use-shipping">Use shipping address as billing address</label>
                      </div>
                    </div>
                  </div>
                  <div class="option">
                    <input type="radio" id="more-options" name="payment" value="more-options">
                    <label for="more-options">
                      <span class="payment-title">More Payment Options</span>
                      <img src="{{ asset('images/paypal.jpeg') }}" alt="PayPal">
                    </label>
                  </div>
                </form>
              </div>

            <div class="d">
              <div class="checkout-section">
                <button class="pay-button">PAY NOW</button>
                <p class="info-text">
                    Your info will be saved to a Shop account. By continuing, you agree to Shop’s 
                    <a href="{{ url('/terms-of-use') }}" class="link">Terms of Service</a> and acknowledge the 
                    <a href="{{ url('/privacy') }}" class="link">Privacy Policy</a>.
                </p>
                <hr class="divider">
                <div class="policy-links">
                    <a href="{{ url('/policy') }}" class="link">Refund policy</a>
                    <a href="{{ url('/policyy') }}" class="link">Cancellation policy</a>
                </div>
            </div>
          </div>
        </div>

        <!-- Display class on the right -->
        <div class="display">
            <img id="display-image" src="" alt="Product Image">
            <h2 id="display-title"></h2>
            <p id="display-price"></p>
            <p id="display-quantity"></p>
        </div>
    </div>


<script src="{{ asset('js/payy.js') }}"></script>


</body>
</html>