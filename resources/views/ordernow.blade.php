<?php

use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();

?>
@include('bootstrap')
@include('header')


<body style="background-image: url({{URL('/')}}/img/background.jpg)">
<div class="card" style="width:35%;margin:auto;margin-top:20px" >
  
  <div class="card-body" style="width:80%;margin:auto;margin-top:50px">
  <form action="/orderplace" method="POST">
@csrf
<h2>Price</h2>
<p>Net Price : {{$total1}}TK</p>
<p>Delivery Charge: 60TK</p>
<p>Total Price: {{$total1+60}}TK</p>
<br>
<h2>Payment method</h2>
<input type="radio" id="delivery" name="payment" value="Cash On delivery">
<label for="delivery">Cash On delivery</label><br>
<input type="radio" id="online" name="payment" value="Online Payment">
<label for="online">Online Payment</label><br>
<br>
<br>
<h2>Address</h2>
<textarea id="address" name="address" rows="4" cols="50">
 
</textarea>
<br>
<br>


<button class="btn btn-success" style="float:right;margin-right:15px">Place Order</button>
    <br>
    <br>
    <br>
    <br>
  </div>
</div>

</form>
 
  
</body>