<?php 
include_once 'business-logic-Products.php';
include_once 'business-logic-Categories.php';
$pbl = new BusinessLogicCateggories;
$arrayOfCategories = $pbl->get();

$bl = new BusinessLogicProducts;
$arrayOfProducts = $bl->get();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
    <main class="container">
        <h1 class="text-center">Inventory of a coffee shop</h1>
        <div style="border:1px solid black; padding:3%;">
        <form action="control.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name_Products"></label>Name
                <input class="form-control" name="name_Products" type="text">
            </div> 

            <div class="form-group">Category         
                <select class="form-control" name="Categories" id="">
                    <?php foreach($arrayOfCategories as $Category) { ?>
                        <option value="<?php echo $Category->getId();?>"><?php echo $Category->getNaneCategory();?></option>
                       <?php } ?>    
                </select>
            </div>

            <div class="form-name_category">   
                <label for="price"></label>Prics
                <input class="form-control" name="price" type="number">
            </div> 

            <div class="form-name_category">   
                <label for="Quantity"></label>Quantity
                <input class="form-control" name="Quantity" type="number">
            </div>
             
            <div class="form-group">
                <label for="filePicture"></label> Picture
                <input style="border:none" class="form-control" type="file" name="filePicture">
            </div>

            <div class="form-group">
                <button class="btn btn-secondary btn-lg btn-block" type="submit" name="addProdact">Add Products</button>
            </div>

        </form>
</div>
        <h2 class="text-center">products</h2>
        <div style="border:1px solid black; padding:3%;">
    <table class="table">
        <tr> 
            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Picture</th>
            <th>Date</th>

        </tr>
        <form action="control.php" method="post">

        <?php foreach($arrayOfProducts as $Products) { ?>
            <tr>
              
            <input name="idOfProdectDelete" style="display:none" type="number" value="<?php echo $Products->getId()?>">
            <input name="name_Products" style="display:none" type="number" value="<?php echo $Products->getId()?>">
            <input name="Categories" style="display:none" type="number" value="<?php echo $Products->getId()?>">
            <input name="price" style="display:none" type="number" value="<?php echo $Products->getId()?>">
            <input name="Quantity" style="display:none" type="number" value="<?php echo $Products->getId()?>">
            <td><?php echo $Products->getId()?></td>
            <td><?php echo $Products->getNameProducts()?></td>
            <td><?php echo $Products->getCategoryModel()->getNaneCategory()?></td>
            <td><?php echo $Products->getPrice().'$'?></td>
            <td><?php echo $Products->getQuantity()?></td>
            <td><img src="<?php echo 'ProdecrPictures/'.$Products->getImage()?>" class="img" alt="Responsive image"></td>
            <td><?php echo $Products->getDateIn()?></td>
            <input name="idOfFlightDelete" style="display:none" type="number" value="<?php echo $Products->getId()?>">
            <td><button name="deleteProducts"  type="submit" class="btn btn-danger btn-sm">Delete</button></td>
            <?php }?>
        </form>

        </tr>
       
    </table>
    </div>
<h2 class="text-center">Reports</h2>
<div style="border:1px solid black; padding:3%;">
    <table class="table" >
        <tr> 
            <th>Name</th>
            <th>Quantity</th>
        </tr>
         
            <?php foreach($arrayOfProducts as $Products) { ?>
                <tr>
                <td><?php echo $Products->getCategoryModel()->getNaneCategory()?></td>
                <td><?php echo $Products->getQuantity()?></td>
                </tr>
            <?php }?>
       
    </table>
    </div>
    </main>

</body>
</html>