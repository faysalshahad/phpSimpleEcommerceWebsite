<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boys Mart</title>
    <!--Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Including connect.php file to connect to the database -->
<?php
include "./partials/connect.php"
?>
<!--Including header.php file to get the NAVBAR elements from bootstrap -->
  <?php
include "./partials/header.php"
?>  

<h1 class="text-center text-danger my-3">Welcome to Boys Mart Bangladesh</h1>
<h3 class="text-center text-success my-3">Purchase Clothes from Different Categories</h3>

<div class="container"> <!--Container Div start -->
    <div class="row"> <!--Row Div start -->

    <?php
    # fethicng the data from mysql database and the table name is boystshirt
    $sql = "Select * from boystshirt"; 
    # $con is the variable which has been created inside the coonect.php file
    # this mysqli_query takes two arguments. first one is $con to connect to the database
    #second one is the $sql query variable to fetch the data from the database. 
    $result = mysqli_query($con,$sql);
    if ($result) {
        # code...
        while ($row = mysqli_fetch_assoc($result)){
            # here displayclothID is the variable which will display the row data from mysql
            # database from the colum name clothID
            $displayclothID = $row['clothID'];
            # here displayclothname is the variable which will display the row data from mysql
            # database from the colum name clothname
            $displayclothname = $row['clothname'];
            # here displayclothdescription is the variable which will display the row data from mysql
            # database from the colum name clothdescription
            $displayclothdescription = $row['clothdescription'];
            # here displayclothprice is the variable which will display the row data from mysql
            # database from the colum name clothprice
            $displayclothprice = $row['clothprice'];
            # here displayclothimage is the variable which will display the row data from mysql
            # database from the colum name clothimage
            $displayclothimage = $row['clothimage'];

            echo ('<div class="col-md-4 col-sm-6 col-xm-12 mb-5"> 
            <div class="card" style="width: 18rem;"> 
      <img src='.$displayclothimage.' class="card-img-top" alt="Office Shirt Image" style="height:19rem; object-fit:contain">
      <div class="card-body">
        <h5 class="card-title">'.$displayclothname.'</h5>
        <p class="card-text">'.substr($displayclothdescription, 0,50).'..........</p>
        <h6>Price: '.$displayclothprice.'/- Bangladeshi Taka</h6>
        <p>Product ID: '.$displayclothID.'</p>
        <a href="productdetails.php?detailsID='.$displayclothID.'" class="btn btn-primary">Find out More</a>
      </div>
    </div>
            </div>');

        };
    }
    ?>
        



</div> <!--Row Div End -->
</div> <!--Container Div End -->
</body>
</html>

