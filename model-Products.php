<?php  
include_once 'business-logic-Products.php';
include_once 'business-logic-Categories.php';

    class ProductsModel  
    {
        private $id;        
        private $name_Products;     
        private $name_category;  
        private $price;        
        private $Quantity;        
        private $Image;  
        private $date_in; 
        private $CategoryModel;

        
        function __construct($arr) {

                if(!empty($arr['id'])){
                    $this->id = $arr['id'];
                } 
                
                $this->name_Products = $arr['name_Products'];

                $this->name_category = $arr['name_category'];

                $this->price = $arr['price']; 

                $this->Quantity = $arr['Quantity']; 
                if(!empty($arr['date_in'])){
                    $this->date_in = $arr['date_in']; 
                }
                if(!empty($arr['Image'])){
                    $this->Image = $arr['Image']; 
                }

        }

        function getId() {
            return $this->id;
        }

        function getNameProducts() {
            return $this->name_Products;
        }

//this us int
        function getNameCategoryId() {
            return $this->name_category;
        }

        function getPrice() {
            return $this->price;
        }

        function getQuantity() {
            return $this->Quantity;
        }

        function getImage() {
            return $this->Image;
        }
        
        function getDateIn() {
   
            return $this->date_in;
        }
        
        function getCategoryModel() {
            if (empty($this->CategoryModel)) {

                $pbl = new BusinessLogicCateggories();
                $this->CategoryModel = $pbl->getOne($this->name_category);    
                
            }
            return $this->CategoryModel;
        }

        function setId($id) {
             $this->id =$id;
        }

        function setNameProducts($nameProducts) {
             $this->name_Products =$nameProducts;
        }

//this us int
        function setNameCategory($nameCategory) {
             $this->name_category =$nameCategory;
        }

        function setPrice($price) {
             $this->price =$price;
        }

        function setQuantity($Quantity) {
             $this->Quantity =$Quantity;
        }

        function setImage($Image) {
             $this->Image =$Image;
        }
        
        function setDateIn($dateIn) {
   
             $this->date_in =$dateIn;
        }
    }
?>