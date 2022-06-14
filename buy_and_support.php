<?php
require ('session.php')

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="google-signin-client_id"
      content="YOUR_CLIENT_ID.apps.googleusercontent.com"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  

    <script src="jquery.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />

    <link rel="stylesheet" href="style/mystyle.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap"
      rel="stylesheet"
    />

    <title>
      Free classified sites | New back page alternative| back page replacement
      2backpagepro
    </title>
  </head>
  <body>
    <div class="white-space"></div>
    <div class="wrapper wrap-together">
      <a href="#" class="list" style="color: white">Buy Credit</a>
      <a href="#" class="list" style="color: white">Support</a>
    </div>

    <div class="container">
      <div class="row">
        <div class="content-hloder">
          <p>
            Deposit your account credit for future ads (deposit credit add in
            instant)
          </p>
        </div>
      </div>
      <div class="row box-container">
        <div class="box">
          <div class="head-part">
            <h6>Instant Bitcoin Add</h6>
          </div>
            <!-- <p class="mt-3" style="font-weight: 900">Current Amount :$  <span id ="funds" ></span></p> -->
            <form method="post" action="addFund.php" onsubmit="checkerPage()">
            <div class="mt-5">
              <label for="exampleInputEmail1" class="form-label">Amount</label>

              <input
                type="text"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Please input USD amount"
                name="amount"
              />
            </div>

            <button type="submit" class="btn btn-primary mt-3" id="btn_pay" onclick="checkValue();" name="btn_submit">
              <span class="bi bi-currency-bitcoin"></span>
              Add Bitcoin
            </button>
          </form>
        </div>
      </div>
    </div>
<script src="buy_and_support.js"></script>
    <script src="script.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
       <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/629513d6b0d10b6f3e74cc3e/1g4b5b0d7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  </body>
</html>
