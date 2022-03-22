<?php
require_once ('./data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

.card-product:hover{

    box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    transition: all .20s ease-in-out;
    
  
}
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">

       <?php foreach($products as $product){?>
            <div class="col-md-3 my-5">
                <div class="card card-product">
                    <img style="height: 225px;" src="<?php echo $product['picture']?>" alt="" class="card-image">
                    <div class="card-body">
                        <h4><?php echo $product['name']?></h4><hr>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <span>( <?php echo $product['review']?> review)</span>
                        <h6>$ <?php echo $product['price']?> </h6>
                    </div>
                </div>
            </div>

        <?php } ?>
        </div>
    </div>
</body>
</html>