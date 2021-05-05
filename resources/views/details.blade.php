<?php

use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();

?>
<img  >
@include('bootstrap')
@include('header')
<form action="/add_to_cart" method="POST">
@csrf

<div class="card mb-3" style="max-width: 50%;height:50%; margin:auto;margin-top:100px">
  <div class="row g-0"  >
    <div class="col-md-4" style=" margin-top:100px;">
      <img
      src="{{URL::asset('/img/pic.png')}} " 
        alt="..."
        class="img-fluid"
        style="margin-top"
        
      />
      
    </div>
    <div class="col-md-8"  >
      <div class="card-body" style="padding:100px" >
        <h5 class="card-title">Detail</h5>
        <p class="card-text">
        <p><span style="font-weight: bold">Product Name : </span>{{$product['name']}}</p>
            <p><span style="font-weight: bold">Product Price:</span> {{$product['price']}} TK</p>
                <p><span style="font-weight: bold">Product Catagory:</span> {{$product['catagory']}}</p>
                    <p>{{$product['discription']}}</p>
                    <button type="submit" name="product_id" value ="{{$product['id']}}" class="btn btn-danger btn-rounded">add to cart</button>
        </p>
         
      </div>
    </div>
  </div>
</div>
 




</form>
