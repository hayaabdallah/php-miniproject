<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="http://kit.fontawesome.com/c26cd2166c.js"></script>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    <!--start of navbar-->
    <nav class="navbar navbar-expand-lg" style="background-color:#FFEBEF;">
        <a class="navbar-brand" href="add.php" style="color:black;font-weight: bold;">Shopify</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="view.php" style="color:black;">Products<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add.php" style="color:black;" >Add Products</a>
            </li>
    
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            
          </form>
          
        </div>
      </nav>
    <!--end of navbar-->
    <!--start of php-->
    <div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <?php
    //session_unset();
    if(!empty($_SESSION['productN']) || !empty($_SESSION['price']) || !empty($_SESSION['description'])){
    
        $arr1=explode("<br>",$_SESSION['productN']);
        $arr2=explode("<br>",$_SESSION['price']);
        $arr3=explode("<br>",$_SESSION['description']);
        $arr4=explode("<br>",$_SESSION['image']);
    for($i=0; $i<count($arr1)-1; $i++){
        echo ('<div class="col-md-4 mt-2">
        <div class="card">
            <div class="card-body">
                <div class="card-img-actions"> <img src="images/'.$arr4[$i].'"  class="card-img img-fluid" width="96" height="350" alt="product image"> </div>
            </div>
            <div class="card-body bg-light">
                <div class="mb-2">
                    <h5 class="font-weight-semibold mb-2" style="color:#80765c;">' . $arr1[$i] . '</h5><p class="text-muted" data-abc="true">' . $arr3[$i] . '</p>
                    </div>
                    <h4 class="mb-0 font-weight-semibold">$' . $arr2[$i] . '</h4>
                    <div> </div>
                    <div class="text-muted mb-3"></div> <button type="button"  class="btn bg-cart btn-secondary"> Add to cart</button>
                </div>
            </div>
        </div>');
    }
}
else{
    echo('<div class="container" id="error"> <h2>There is no products!! </h2></div>');
}
    ?>
    </div>
</div>
<!-- end of php-->


   <!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="background-color:black;color:white">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase" style="color:pink;font-size:35px">Shopify</h5>
        <p>Get In Touch.. </br>
                 We'd love to hear from you</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color:pink;">Our Products</h5>

        <ul class="list-unstyled">
          <li>
            <a >Bottoms</a>
          </li>
          <li>
            <a>Blazer</a>
          </li>
          <li>
            <a>Accessories</a>
          </li>
          <li>
            <a>T-shirt</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color:pink;">Why Us</h5>

        <ul class="list-unstyled">
          <li>
            <a>Shipping</a>
          </li>
          <li>
            <a>Suitable cost</a>
          </li>
          <li>
            <a>Quality</a>
          </li>
          <li>
            <a>speed response</a>
          </li>
        </ul>
        <i class='fab fa-facebook' style='font-size:28px;color:pink'></i>
        <i class='fab fa-instagram' style='font-size:28px;color:pink'></i>
        <i class='fab fa-twitter' style='font-size:28px;color:pink'></i>
        <i class='fab fa-snapchat-ghost' style='font-size:28px;color:pink'></i>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color:pink;">?? 2020 Copyright:
    <a> Shopify</a>
  </div>

  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>







