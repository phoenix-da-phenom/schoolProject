$(document).ready(function(){
  //Fadein wallet address
  $(".btc-holder").click(function () {
    $("#wallet_add").fadeIn(3000);
  });
  
  $("#next_payment_page").click(function(){
      
      
      window.location="validate_price.php"
  });
  
  
});