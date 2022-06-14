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
    <div class="wrapper">
      <div class="upper-icon">
        <ul class="icons">
          <li>
            <img src="images/burger-menu.png" alt="menu" />
          </li>
          <li>
            <img src="images/post-ad.png" alt="post ad" />
          </li>
        </ul>
      </div>
      <div class="logo">
        <h4 class="logo-text">2backpagepro</h4>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="progress-holder">
          <p style="font-weight: 900" class="my-1">
            <img src="images/btc-icon.png" style="width: 35px" />
            <span>0.0003</span>
          </p>

          <div><p>Please wait while your payment in confirmed...</p></div>
          <div>
            <div class="progress">
              <div
                class="progress-bar progress-bar-striped progress-bar-animated"
                role="progressbar"
                aria-valuenow="75"
                aria-valuemin="0"
                aria-valuemax="100"
                style="width: 0%"
                id="pro-bar"
              ></div>
            </div>

            <div class="counter"><span id="counter_value">0</span>%</div>

            <div id="random_Message" class="mt-5">
              <p>checking wallet</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
