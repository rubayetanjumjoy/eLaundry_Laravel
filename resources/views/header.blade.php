<nav class="navbar navbar-expand-lg navbar-info bg-info " style="height:100px">
  <div class="container-fluid">
  <h1 style="color:white;margin-left:20px; "><a href="/product" style="color:white">eLaundry</a></h1>
    <ul class="navbar-nav d-flex flex-row" style="margin-right:150px">
      <!-- Icons -->
      
      <li class="nav-item" >
        <a class="nav-link" href="/cartlist" style="color:white">
          <span class="badge badge-pill bg-danger">{{$total}}</span>
          <span><i class="fas fa-shopping-cart"></i></span>
        </a>
      </li>
      
      <!-- Icon dropdown -->
      <li class="nav-item me-3 me-lg-0 dropdown "  >
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="navbarDropdown"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
          style="color:white;"
        >
          <i class="fas fa-user"></i>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/myorders">My Order</a></li>
          <li><a class="dropdown-item" href="/logout">Logout</a></li>
      
          
        </ul>
      </li>
    </ul>
  </div>
</nav>