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
            <button type="post" name="subscribe" class="subscribe" href="https://ww.sandbox.paypal.com/cgi-bin/webscr">SUBSCRIBE</button>
        </div>
      </div>
    </div>
  
  <?php
    require('footer.php');
    ?>
