<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Reg Forms</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            <a href= "{{ route('form.perform') }}">view all products <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <?php
    /*    $sql = "SELECT id, name, price, descrip, photo 
                FROM products
                ORDER BY id DESC LIMIT 3";
        $result = $conn->query($sql);*/ ?>
        <?php/* if (!empty($result) && $result->num_rows > 0) 
        {
          $count = 0;
          foreach ($result as $row) {
            $count++;*/
        ?>
        @foreach ($forms as $form)
            <div class="col-md-4">
              <form method="post" action="">
                <div class="product-item">
                  <?php// $row['id']; ?>
               <!--   <a href="#"><img src=<?php //echo $row['photo']; ?> alt=""></a>-->
                  <div class="down-content">
                    <a href="#">
                      <h4>{{ $form->lastname }}<?php// echo $row['name']; ?></h4>
                    </a>
                    <h4>{{ $form->firstname }}</h4>
                    <h6>$<?php// echo $row['price']; ?></h6>
                    <p><?php //echo $row['descrip']; ?></p>
                    <ul class="stars">
                      <li><i class=""></i></li>
                      <li><i class="glyphicon glyphicon-thumbs-up" style="color: green;"></i></li>
                      <li><i class=""></i></li>
                      <li><i class=""></i></li>
                      <li><i class=""></i></li>
                      <li><i class=""></i></li>
                      <li><i class="glyphicon glyphicon-thumbs-down"></i></li>
                      <li><i class=""></i></li>
                    </ul>
                    <span>
                      <form id = "tocart">
                        <a href="addtocart.php?id=<?php //echo $row['id']; ?>">
                          <button type="button" name="addToCart" class="btn btn-primary">
                            Add to cart
                          </button>
                        </a>
                      </form>
                    </span>
                  </div>
                </div>
                <form>
            </div>
            @endforeach
        <?php /*}
        } */?>
      </div>
    </body>
    </html>