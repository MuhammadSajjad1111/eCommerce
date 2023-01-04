<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total=ProductController::cartItem();
}


?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Brand</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Orders</a>
        </li>
        

        
        <li class="nav-item">
        <form class="d-flex"  role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Submit</button>
      </form>
        </li>
      </ul>


    

    </div>

    <div>
      
    <div class="nav-item navbar-right">
          <a class="nav-link" href="#">cart({{$total}})</a>
          
</div> 

       
    </div>
  </div>
</nav>
