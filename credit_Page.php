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
                    <p>Payment Method</p>
              </div>
           
               
                     <div><span id="counter"></span>     
                   <div class="spinner-border text-success" role="status">
                  <span class="sr-only"></span>
                        </div>


                    </div>    
                
                
          </div>
 </div>
 </div>         

 

 
        <div class = "row">
            <div class="col-md-12">
            <div class="top-corner mt-5 d-flex justify-content-between">
                <h6 style="font-weight: 700;">Total</h6>
                <h6 style="font-weight: 700;">$<span id="total_cost"></span></h6>
            </div>
            

            </div>
          
        </div>
        <div class = "row">
            <div class="col-md-12" style="margin-top:25px">
                <P class="express-checkout-text">Express checkout</P>
                <div class="btn-coinbase">
                  <button class="btn btn-primary bg-block"  style="width:300px; border-radius:25px 25px;">Pay with coinbase</button>
  <!-- <button class="btn btn-primary bg-block" id="btn-pay_bitcoin" style="width:300px; border-radius:25px 25px;">Pay with coinbase</button> -->
                </div>
              
            </div>    
        </div>   
        <div class="row mt-3" >
            <div class="col-md-12">
                <div class="alt-msg">
                    <p>or select a cryptocurrency to pay with another wallet</p>

                </div>

            </div>


        </div> 
        <div class="row">
            <div class="col-md-12">
            <div class="holder">
                <div class="btc-holder" >
                    <div ><img src="images/btc-icon.png" style="width:30px"/> Bitcoin </div>

                 <div>BTC</div> 
                 
                 

            </div>

            </div>    
           
                
            </div>
            </div>
            
            <div class="container my-3" id="wallet_add" style="display: none" >
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        
                         <div class="btc-address">
          
          
                <p id="address">3EuPeoo5hgnPkdsynpHK5Tgg9WR8v7byr6</p>
         
          <input style="display:none" type ="text" id="btc_address" value="3EuPeoo5hgnPkdsynpHK5Tgg9WR8v7byr6"/>

          <a  class="btn btn-primary" id="showConfirmation">Copy</a> 


        

            </div>
                        
                        
                        
                    </div>
                    
                    
                    
                </div>
                
  <div class="row m-4">
  <div class="col-md-12">

<div class="upload-payment">
    <div class="confirmation-holder">
      <div><p>Confirm payment by upload screen shot</p></div>
      
          <div class="confirm-payment-form">
        <input type =file name="paymentConfirmation"/>
       
        
        <button class="btn btn-success mt-3" id="next_payment_page" >Next</button>

     


    </div>
</div>
                
                
  </div>
  </div>
            
           
            
            
                <br>

            <div class="row mt-5">
                <div class="col-md-12 mt-5" style="text-align: right; margin-top: 60px;">

                    <a href="#" class="btn btn-outline-danger" id="cancelPayment">Cancel Payment</a>
                </div>

            </div>


        </div>



      </div>
    </div>
    
    <script src="credit_page_script.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
        <script src="script.js"></script>
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
