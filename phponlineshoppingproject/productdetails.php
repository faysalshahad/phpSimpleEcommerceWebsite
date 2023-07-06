<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Details</title>
    
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

<!-- Accessing a particular product ID and desplaying details relevant that particular product and ID-->
<?php
# capturing the product id and storing inside the variable
$clickedproductID = $_GET['detailsID'];
# echo "$clickedproductID";

 # fethicng the data from mysql database and the table name is boystshirt
 $sqldatabasecontent = "Select * from boystshirt where clothID = $clickedproductID"; 
 $result=mysqli_query($con,$sqldatabasecontent);
 $row=mysqli_fetch_assoc($result);

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

            #echo ("$displayclothname");

?>
<!-- 
<div class="container" style="margin-top: 2rem;">
  
  <div class="card-body">
    <h1 class="card-title text-center text-primary" ><?php echo $displayclothname ?></h1>
    <p class="card-text" style="margin-top: 1rem;"><?php echo $displayclothdescription?></p>
   
  </div>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <img src=<?php echo $displayclothimage?> class="img-fluid" alt="Clothe Image">
            
        </div>
        <div class="col-lg-6 col-sm-12">
                <h2 class="text-center text-success"> <?php echo $displayclothname ?></h2>
                <p class="card-text" style="margin-top: 1rem;"><?php echo $displayclothdescription?></p>
                <p class="card-text" style="margin-top: 1rem;">Price: <?php echo $displayclothprice?>/- Bangladeshi Taka</p>
                <a href="index.php" class="btn btn-outline-success btn-lg" style="margin-top: .5rem;">Add Product to the Cart</a>
                <a href="index.php" class="btn btn-outline-danger btn-lg" style="margin-top: .5rem;">Select Another Product</a>
            </div>
    </div>
</div>
    
</body>
</html>