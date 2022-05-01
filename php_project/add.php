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

    <!--start of form-->
    <div class="container" style="border-radius: 40px; margin-bottom: 6%;  padding: 5%;margin-top: 8%;background-color:#FFEBEF;">
<form  method="post" >
<div class="form-group" id="form">
        <label for="productN">Product Name:</label>
        <input type="text" class="form-control" name="productN">
</div>
<div class="form-group">
        <label for="price">Price:</label>
        <input type="number" class="form-control" name="price" >
</div> 

<div class="form-group">
       <label for="image">Product image</label>
       <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
</div> 
<div class="form-group">
       <label for=" description">Description:</label>
       <textarea name="description" rows="3" cols="50" class="form-control"></textarea>
</div>
      <input type="submit" name="submit" value="add product" class="btn btn-info" style="background-color:white;color:black">
      <?php echo "<button class=\"btn btn-info\" style=\"background-color:white;color:black\" ><a href='view.php'>View Products</a></button>";?>
</form>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
   <!--end of form-->  

   <!--start of php-->
   <?php

//session
if(isset($_POST['submit']))
{
  $productN=$_POST['productN'];
  $price=$_POST['price'];
  $image=$_POST['image'];
  $description=$_POST['description'];


session_start();
$_SESSION['productN'].=$_POST['productN']."<br>";
$_SESSION['price'].=$_POST['price']."<br>";
$_SESSION['image'].=$_POST['image']."<br>";
$_SESSION['description'].=$_POST['description']."<br>";

//session_unset();

//print user input as table
echo '<div class="table-responsive" id="table-div"> <table class="table table-bordered">  <thead> <tr>
<th>product name</th>
<th>price</th>
<th>image</th>
<th>description</th>
</tr>
</thead>';


echo "<tr><td>".$_SESSION['productN']
."</td><td>".$_SESSION['price']."</td><td>".
 $_SESSION['image']."</td><td>".$_SESSION['description']."</td><tr>";

echo "</table>";
echo  "</div>";
}
?>

<!--end of php-->

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
            <a>Bottoms</a>
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
            <a >Shipping</a>
          </li>
          <li>
            <a >Suitable cost</a>
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
  <div class="footer-copyright text-center py-3" style="color:pink;">© 2020 Copyright:
    <a> Shopify</a>
  </div>

  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>



