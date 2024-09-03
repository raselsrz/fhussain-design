<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>
      <!-- CSS here -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/responsive.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/v4-shims.css"/>
</head>
<body>

<header>
    <div class="container">
        <!-- Top Bar Section -->
        <div class="topbar">
            <div class="logo">
                <a href="/">
                    <img src="/assets/img/icon/logo.png" alt="Skill Up Logo">
                </a>
            </div>


            <!-- Login and Access Portal Buttons -->
            <div class="login">
            <!-- add to card -->
                <a class="cart" href="$">
                    <i class="fas fa-shopping-cart"></i>
                    <span>0</span>
                    Want to pay cash or mobile money?
                </a>

                <button class="access-portal">
                    Click Here
                </button>
            </div>
        </div>
        </div>
        <!-- Main Navigation Menu -->
        <div class="main-menu">
            <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="#"> <i class="fa-solid fa-chevron-right"></i> Checkout</a>
                    </li>
                </ul>
            </nav>
            </div>
        </div>
        
    </header>

    <main>
    <div class="container">
    <div class="checkout-container">
        <div class="checkout-form">
            <div class="checkout-title">
            <h2>Confirm your purchase</h2>
            <p>Already have an account? <a href="#">Log in</a></p>
            </div>
            
            <form>
               <div class="checkout-info">
               <div class="payment-method">
                    <label>
                        <input type="radio" name="payment" checked>
                        Pay with card
                    </label>
                    <div class="payment-icons">
                        <img src="/assets/img/visa.webp" alt="Visa">
                        <img src="/assets/img/mastercard.png" alt="Mastercard">
                    </div>
                </div>
                
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email">
                </div>

                <div class="input-group">
                    <label>Card number</label>
                    <input type="text" placeholder="1234 5678 9012 3456">
                </div>

                <div class="input-group">
                    <label>Expiration date & CVV</label>
                    <div class="expiration-cvv">
                        <select>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <!-- More months -->
                        </select>
                        <select>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <!-- More years -->
                        </select>
                        <input type="text" placeholder="CVV" class="cvv-input">
                    </div>
                </div>

                

                <button class="btn-primary">Complete purchase</button>
               </div>

                <div class="payment-methods">
                    <label>
                        <input type="radio" name="payment">
                        Pay with PayPal
                    </label>
                    <img src="/assets/img/paypal.png" alt="PayPal">
                </div>
                <p class="checkout-footer" >By clicking "Complete purchase" I am confirming I am 16 or older and I accept the <a href="#">Terma
                of use</a>, the <a href="#">Privacy Policy</a>, the <a href="#">Cookies Policy</a>, and agree to receive news and promotions.</p>
            </form>

            
        </div>

        <div class="cart-summary">
            <h3>Cart</h3>
            <div class="cart-item">
                <img src="/assets/img/1.webp" alt="Course Image">
                <div class="cart-item-details">
                   <div class="title-price">
                   <p>Creative Cupcake Decorating Techniques</p>
                    <a href="#">UGX 195,000 <i class="fas fa-trash"></i></a>
                   </div>
                    <p class="discount">70% Discount <span>UGX 650,000</span></p>

                    <div class="lang">
                        <p> <i class="fas fa-volume-up"></i> English: English</p>

                        <p> <i class="fas fa-globe"></i> English , Spanish, French, German, Italian</p>
                    </div>
                </div>
            </div>

            <div class="lines"></div>

            <div class="total">
                <p>Total</p>
                <p>UGX 195,000</p>
            </div>
        </div>
    <!-- </div>
    <div class="secure-payment">
            <p>100% secure payment</p>
                <img src="/assets/img/paycard.png" alt="Secure Payment">
                
            </div> -->

    </div>
    </main>


    <footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="/assets/img/icon/logo.png" alt="Skill Up Logo">
            </div>
            <div class="footer-nav">
                <nav>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-social">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>












<script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
    
</body>
</html>