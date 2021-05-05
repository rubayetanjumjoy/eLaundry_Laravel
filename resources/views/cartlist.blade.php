<?php

use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();

?>
 
@include('bootstrap')
@include('header')


<ul class="list-group list-group-flush" style="margin:auto;width:20%;margin-top:70px">
<h1>Cartlist</h1>
@foreach($products as $item)
  <li class="list-group-item" style="font-weight: bold">{{$item->name}} <a href="/removecart/{{$item->cart_id}} " ><button style="float:right" class="btn btn-danger btn-rounded btn-sm" > Delete</button></a></li>
  @endforeach
  <a href="/ordernow" style="margin-top: 35px;" ><button style="float:right" class="btn btn-primary"> Order Now</button></a>
</ul>



 




