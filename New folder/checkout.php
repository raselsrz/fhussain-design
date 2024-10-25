

<?php include 'header.php'; ?>


    <main>
    <div class="container checkout-page">
        <div class="row">
            <!-- Payment Form -->
            <div class="col-lg-7 mb-4">
                
            <div class="checkout-title">
            <h2>Confirm your purchase</h2>
            <p>Already have an account? <a href="#">Log in</a></p>
            </div>
                
                <div class="card">
                    <div class="card-body">
                        <form>
                            <!-- Pay with card -->
                            <div class="mb-3">
                                <label class="form-label">Pay with card</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="payCard" checked>
                                    <label class="form-check-label" for="payCard">
                                        <img src="visa.png" alt="Visa" class="img-fluid" style="width: 50px;">
                                        <img src="mastercard.png" alt="Mastercard" class="img-fluid" style="width: 50px;">
                                    </label>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>

                            <!-- Card Number -->
                            <div class="mb-3">
                                <label for="cardNumber" class="form-label">Card number</label>
                                <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456">
                            </div>

                            <!-- Expiration Date & CVV -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="expiryDate" class="form-label">Expiration date</label>
                                    <div class="row gx-2">
                                        <div class="col">
                                            <select class="form-select" id="expiryMonth">
                                                <option value="">Month</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <!-- Add more months -->
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" id="expiryYear">
                                                <option value="">Year</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <!-- Add more years -->
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cvv" placeholder="CVV">
                                </div>
                            </div>

                            <!-- Pay with PayPal -->
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="payPaypal">
                                    <label class="form-check-label" for="payPaypal">
                                        Pay with PayPal
                                        <img src="paypal.png" alt="PayPal" class="img-fluid" style="width: 50px;">
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-danger w-100">Complete purchase</button>

                            <p class="mt-3">
                                By clicking "Complete purchase" I am confirming I am 16 or older and I accept the 
                                <a href="#">Terms of use</a>, the <a href="#">Privacy Policy</a>, and the 
                                <a href="#">Cookies Policy</a>.
                            </p>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="col-lg-5">
                <h2>Cart</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="/path-to-image.jpg" alt="Course Image" class="img-fluid" style="width: 100px;">
                            <div class="ms-3">
                                <h5>Creative Cupcake Decorating Techniques</h5>
                                <p class="text-danger">70% Discount UGX 650,000</p>
                                <p>Languages: English, Spanish, Portuguese, German, French</p>
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-end">Total: UGX 195,000</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>


    

<?php include 'footer.php'; ?>