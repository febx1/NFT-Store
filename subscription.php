<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Subscription</title>
  </head>
  <link rel="stylesheet" href="subscription.css">

    <?php
    require('top.php');
    ?>
    <div class="pagetop">
      <div class="container">
        <div class="card">
          <h1>Subscription</h1>
          <div class="details">
            <ul>
              <li><span>&#10004;</span><i class="promo-check">NFT Promotion</i></li>
              <li><span>&#10004;</span><i class="promo-check">Life-time Access</i></li>
              <li><span>&#10004;</span><i class="promo-check">Unlimited NFT Upload</i></li>
            </ul>
          </div>
            <p>₹ <span>200</span></p>
             <button type="submit" name="subscribe" class="subscribe"onclick="window.location.href='https://www.paypal.com/sdk/js?client-id=AfO2iugXQ_Q_bLrwFsnIMNecbN9UQsfF25-xr-YP0357GLaZMRLGUoTDc95psYCq7I8wLQjHDq5boQB2&disable-funding=credit,card'">SUBSCRIBE</button>
             <div id="paypal-payment-button">

                        </div>
    <script src="https://www.paypal.com/sdk/js?client-id=AfO2iugXQ_Q_bLrwFsnIMNecbN9UQsfF25-xr-YP0357GLaZMRLGUoTDc95psYCq7I8wLQjHDq5boQB2&disable-funding=credit,card"></script>
    <script src="index.js"></script>
        </div>
      </div>
    </div>
    <div class="pagebot"><div class="container"></div></div>

  <?php
    require('footer.php');
    ?>
