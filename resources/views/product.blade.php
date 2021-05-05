<?php

use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();

?>
@include('bootstrap')
@include('header')
 <body style="background-image: url({{URL('/')}}/img/background.jpg)">
     

<ul class="list-group" style="margin-top:100px;width:50%;padding-left:50px">

 


@foreach($products as $item)

 
<li class="list-group-item" >
 <h2 style=" display: inline-block;">{{$item['name']}}  </h2> <a  href="/details/{{$item['id']}}">
<button  class="btn btn-outline-primary" data-mdb-ripple-color="dark" style="float:right ; ">add to Cart</button> </a>   
<p style=" display: inline;margin-left:5px;font-size: 14px ">    Price:{{$item['price']  }}TK</p>  
</li>

  
 
@endforeach
</ul>



    
</body>
 