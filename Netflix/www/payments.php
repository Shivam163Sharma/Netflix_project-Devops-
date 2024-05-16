<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="tailwindcss-colors.css">
    <link rel="stylesheet" href="payments.css">
    <title>Netflix | Payments Page</title>
    <style>
        /* Add CSS for background image */
        body {
            background-image: url('img/bg.jpg'); /* Replace 'background.jpg' with your image file */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    
    <!-- start: Payment -->
    <section class="payment-section">
        <div class="container">
            <h1 class="form-title">Payments</h1>
            <form method="post" action="plans.php">
                <div class="payment-wrapper">
                    <div class="payment-left">
                        <div class="payment-header">
                            <span><img width="100" src="img/logo.svg" alt=""></span>
                            <div class="payment-header-title">Subscription Plans</div>
                            <p class="payment-header-description">Netflix - Watch TV Shows Online, Watch Movies Online</p>
                        </div>
                        <div class="payment-content">
                            <div class="payment-body">
                                <div class="payment-plan">
                                    <div class="payment-plan-type">Pro</div>
                                    <div class="payment-plan-info">
                                        <div class="payment-plan-info-name">Standard Plan</div>
                                        <div class="payment-plan-info-price">₹199 per month</div>
                                    </div>
                                    <a href="#" class="payment-plan-change">Change</a>
                                </div>
                                <div class="payment-summary">
                                    <div class="payment-summary-item">
                                        <div class="payment-summary-name">Additional fee</div>
                                        <div class="payment-summary-price">₹10</div>
                                    </div>
                                    <div class="payment-summary-item">
                                        <div class="payment-summary-name">Discount 20%</div>
                                        <div class="payment-summary-price">-₹10</div>
                                    </div>
                                    <div class="payment-summary-divider"></div>
                                    <div class="payment-summary-item payment-summary-total">
                                        <div class="payment-summary-name">Total</div>
                                        <div class="payment-summary-price">-₹10</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-right">
                        <div class="payment-form">
                            <h1 class="payment-title">Payment Details</h1>
                            <div class="payment-method">
                                <input type="radio" name="payment-method" id="method-1" checked>
                                <label for="method-1" class="payment-method-item">
                                    <img src="img/visa.png" alt="">
                                </label>
                                <input type="radio" name="payment-method" id="method-2">
                                <label for="method-2" class="payment-method-item">
                                    <img src="img/mastercard.png" alt="">
                                </label>
                                <input type="radio" name="payment-method" id="method-3">
                                <label for="method-3" class="payment-method-item">
                                    <img src="img/paypal.png" alt="">
                                </label>
                                <input type="radio" name="payment-method" id="method-4">
                                <label for="method-4" class="payment-method-item">
                                    <img src="img/stripe.png" alt="">
                                </label>
                            </div>
                            <div class="payment-form-group">
                                <input type="email" placeholder=" " class="payment-form-control" id="email" name="email" required>
                                <label for="email" class="payment-form-label payment-form-label-required">Email Address</label>
                            </div>
                            <div class="payment-form-group">
                                <input type="text" placeholder=" " class="payment-form-control" id="card-number" name="card-number" required>
                                <label for="card-number" class="payment-form-label payment-form-label-required">Card Number</label>
                            </div>
                            <div class="payment-form-group-flex">
                                <div class="payment-form-group">
                                    <input type="date" placeholder=" " class="payment-form-control" id="expiry-date" name="expiry-date" required>
                                    <label for="expiry-date" class="payment-form-label payment-form-label-required">Expiry Date</label>
                                </div>
                                <div class="payment-form-group">
                                    <input type="text" placeholder=" " class="payment-form-control" id="cvv" name="cvv" required>
                                    <label for="cvv" class="payment-form-label payment-form-label-required">CVV</label>
                                </div>
                            </div>
                            <button type="submit" class="payment-form-submit-button"><i class="ri-wallet-line"></i> Pay</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- end: Payment -->

</body>
</html>
