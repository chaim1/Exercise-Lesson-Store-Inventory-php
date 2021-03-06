<?php
include_once 'bl.php' ; 
include_once 'model-Products.php' ; 

 class BusinessLogicProducts extends BusinessLogic{

    public function get()
    {
        $q = 'SELECT * FROM `Products`';
        
        $results = $this->getDal()->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push($resultsArray, new ProductsModel($row));
        }

        return $resultsArray;
        
    }

    

    public function set($param)
    {
        $query = "INSERT INTO `Products` ( `name_Products`, `name_category`, `price`, `Quantity`, `Image`, `date_in`) VALUES (:no, :nc, :pr, :qu, :im, :pi )";
            $params = array(

                "no" => $param->getNameProducts(),
                "nc" => $param->getNameCategoryId(),
                "pr" => $param->getPrice(),
                "qu" => $param->getQuantity(),
                "im" => $param->getImage(),
                "pi" => $param->getDateIn()

            );
            
            $this->getDal()->insert($query,$params);
            
    }

    public function delete($id)
    {
        $query = "DELETE FROM `Products` WHERE `id`=$id";
        $this->getDal()->delete($query);
    }

    public function update($id)
    {
        $query = "UPDATE `Products` SET `name_Products`=:np, `name_category`=:nc, `price`=:pr, `Quantity`=:qu, `Image`=:im, `date_in`=:di   WHERE `id`=:id";
        $params = array(

            "id" => $id->getId(),
            "np" => $id->getNameProducts(),
            "nc" => $id->getNameCategory(),
            "pr" => $id->getPrice(),
            "qu" => $id->getQuantity(),
            "im" => $id->getImage(),
            "di" => $id->getDateIn()

        );
        $this->getDal()->update($query,$params);
    }

}

 
?>
