

<?php
include_once 'business-logic-Products.php';
include_once 'business-logic-Categories.php';

if(isset($_POST['addProdact'])){
$prodact = new ProductsModel([
    'name_Products'=> $_POST['name_Products'],
    'name_category'=> $_POST['Categories'],
    'price'=> $_POST['price'],
    'Quantity'=> $_POST['Quantity'],
    'date_in' => date("Y-m-d"),
    'Image' => $_FILES['filePicture']['name']
]);
    $path= "ProdecrPictures/";
    $filename = basename($_FILES['filePicture']['name']);
    move_uploaded_file($_FILES['filePicture']['tmp_name'], $path.$filename);
$blp= new BusinessLogicProducts;
$blp->set($prodact);
include_once 'view-store.php';

}
if(isset($_POST['updateProducts'])){
    $valid = true;
    include_once 'view-store.php';
}

if(isset($_POST['SaveUpdateProducts'])){
    $valid = false;
    $idprodact = $_POST['idOfFlightDelete'];
    $prodact = new ProductsModel([
        'name_Products'=> $_POST['name_Products'],
        'name_category'=> $_POST['Categories'],
        'price'=> $_POST['price'],
        'Quantity'=> $_POST['Quantity']
    ]);
    $blp= new BusinessLogicProducts;
    $blp->update($prodact);
    include_once 'view-store.php';
}

if(isset($_POST['deleteProducts'])){
    $idprodact = $_POST['idOfFlightDelete'];
    $blp= new BusinessLogicProducts;
    $blp->delete($idprodact);
include_once 'view-store.php';
    
}











?>