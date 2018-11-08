<?php  
include_once 'business-logic-Categories.php';


    class CategoriesModel 
    {
        private $id;        
        private $name_category;     
    
        function __construct($arr) {

                if(!empty($arr['id'])){
                    $this->id = $arr['id'];
                } 

                $this->name_category = $arr['name_category']; 

        }

        function getId() {
            return $this->id;
        }

        function getNaneCategory() {
            return $this->name_category;
        }

        function setId($id){
            $this->id = $id;
        }

        function setNameCategoy($nameCategory){
            $this->name_category = $nameCategory;
        }

        
    }
?>