@include('bootstrap')
<nav class="navbar navbar-expand-lg navbar-info bg-info " style="height:100px">
  <div class="container-fluid">
    <ul class="navbar-nav d-flex flex-row">
     <h1 style="color:white;margin-left:20px;">eLaundry</h1>
      
    
    </ul>
  </div>
</nav>

<div class="card" style="height:400px;width:400px; margin: auto; margin-top:150px;
 
   padding: 20px;">
  <div class="card-body">
    <h1 class="card-title" style="color:#9900cc">SignUp</h1>
    <p class="card-text">
    <form action="/master" method="POST">
      
   
      
@csrf
<br>
<input type="text" name="name" class="form-control" placeholder="Name">
<br>

<input type="text" name="email" class="form-control" placeholder="Email"> 
<br>
<input type="text"name="password" class="form-control" placeholder="Password">
<br>
 
 <div  style=" float:right;margin-right: 0px;" >
 <button type="submit" id="signup" class="btn btn-secondary">Submit</button>
 </div>

 
</form>
     
   
  </div>
</div>



 


 

 