<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    window.onload=function(){
      getProduct(0);
      getCartCount()
    }
  </script>
  <style>
    .body{
     
    }
  .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }
  .item{
    height:300px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .product{
    padding: 20px;
    border: 2px solid rgba(14, 12, 12, 0.2);
    border-radius:20px;
    margin-left:30px;
    margin-top:30px;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?php include('login.php')?></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">    
  <h3>Cart Table</h3><br>
  <div class="row">
  
  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Description</th>

                          <th>Image</th>
                          <th>Qty</th>
                          <th>Subtotal</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=1;
                        foreach($cartdata as $key){
                            ?>
                                <tr>
                                    <td><?php echo $key->pname;?></td>
                                    <td><?php echo $key->price;?></td>
                                    <td><?php echo $key->description;?></td>
                                    
                                    <td><img src="<?php echo $GLOBALS['baseurl']."Uploads/products".$key->pimage?>" alt="" width="80px" height="80px"></td>
                                    <td><input type="number" name="" id="" value="<?php echo $key->qty?>"></td>
                                    <td><?php echo $key->qty * $key->price?></td>
                                  
                                </tr>
                            <?php
                            $i++;
                        }
                        ?>
                      </tbody>
                    </table>
    
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
