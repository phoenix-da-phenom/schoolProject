<?php
require ('session.php')

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  

    <link rel="stylesheet" href="style/mystyle.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <title>
      Free classified sites | New back page alternative| back page replacement
      2backpagepro
    </title>
  </head>

  <body>
    <div class="container mt-3">
      <div class="row mobile-view">
        <div class="col-md-6 col-sm-12 companylogo">
          <img src="images/logo.png" alt="logo" />
        </div>

        <div class="col-md-6 col-sm-12 payment-section">
          <div class="credit-area">
            <div class="post-card" >2backpagepro</div>
            <div class="fund-text">
              <p><strong>Credit transfer funds $<span id="funds"></span></strong></span></p>
              <p>Credit Transition to the 2backpagepro</p>
            </div>
          </div>
<div class="row">
            <div class="col-md-12">
          <div class="payment-method mt-3 d-flex">
              <div class="payment-text">
                    <p style="font-weight: 700;">Send payment</p>
                    <p><small>To make a payment by using the QR code or buttons below</small></p>
              </div>
           <div class="rounded-progress-bar">
               
                    
                 <div > <span id="counter">60:00 </span>       
                   <div class="spinner-border text-success" role="status">
                  <span class="sr-only"></span>
                        </div>

          </div> </div>
 </div>         




        </div>

       <div class="display>">
          <div class="col-md-12">
            <div class="bar-code" id="barcode">

              <img src="images/sampleQR.png" class="img-fluid" alt="Barcode">
              <small> only pay with BTC to this address</small>
            </div>

          </div>
          </div>


          <div class="mobile-holder mt-3">
                <div class="awesome-btn">
                    <div class="awesome-white">
                      <div class="inner-circle"></div>

                    </div>

                  

                </div>

          </div>
            <div class="row">

    <div class="wallet-btn btn-holder mt-3 "
    >            <div >
                <button class="btn btn-primary" style="width:100%" id="btn_toggle_wallet">Open in wallet</button>
                  </div>
              

          </div>


        </div>


            </div>
      

<div id="wallet_info">
<div class="row">
     
<div class="col-md-12 mt-3">

  <div class="address-holder">
    <small style="margin-left:15px;">Bitcoin
</small>      

<div class="btc-address">
          
          
          <p id="address">3EuPeoo5hgnPkdsynpHK5Tgg9WR8v7byr6</p>
         
          <input style="display:none" type ="text" id="btc_address" value="3EuPeoo5hgnPkdsynpHK5Tgg9WR8v7byr6"/>

          <a  id="showConfirmation">Copy</a> 


        

</div>








</div>
       </div>
       </div>

<div class="row mt-4 mb-4">
  <div class="col-md-12">

<div class="upload-payment">
    <div class="confirmation-holder">
      <div><p>Confirm payment by upload screenshot</p></div>
      <form >

        <input type =file name="paymentConfirmation"/>
        <input type="submit" name="file_submit" value="Next" class="btn btn-success"/>

      </form>


    </div>
</div>




  </div>


</div>



       
       <div class="row">
          <div class="col-md-12 mt-3" style="border:1px solid #dbdbdb;border-radius:5px;">
            <div>
              <small>Total amount</small>
            </div>

            <div class="bitcoin-price">
              <p>0.00078493 BTC</p>
              <a href="#">Copy</a>

            </div>


          </div>



          
 

       </div>

       </div>
       
       <div class="row mt-3">
         <div class="col-md-12 payment-button" >
                <button class="btn btn-outline-info" id="backPage">Back</button>


          </div>



         </div>

         <div class="row mt-3">
            <div class="col-md-12" >
              <div style="float:right;">

                <button class="btn btn-outline-danger" >Cancel Payment</button>

              </div>
            </div>



         </div>




       </div>










        </div>
        

 


        </div> 

       
       
           


        </div>



      </div>
    </div>
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
