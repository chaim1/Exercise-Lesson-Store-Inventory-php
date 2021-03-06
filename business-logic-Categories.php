<?php
include_once 'bl.php' ; 
include_once 'model-Categgories.php' ; 

 class BusinessLogicCateggories extends BusinessLogic {

    public function get()
    {
        $q = 'SELECT * FROM `Categories`';
        
        $results = $this->getDal()->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push($resultsArray, new CategoriesModel($row));
        }

        return $resultsArray;
        
    }

    

    public function set($param)
    {
        $query = "INSERT INTO `Categories` (`name_category`) VALUES (:nc)";
            $params = array(
                "nc" => $param->getNaneCategory()
            );
            
            $this->getDal()->insert($query,$params);
            
    }

    public function getOne($id)
    {
        $q = 'SELECT * FROM `Categories` WHERE `id`= :cid';
        
        $results = $this->getDal()->selectOne($q, [
            'cid' => $id
        ]);
        $row = $results->fetch();

        return new CategoriesModel($row);
    }

    public function delete($id)
    {
        $query = "DELETE FROM `Categories` WHERE `id`=$id";
        $this->getDal()->delete($query);
    }

    public function update($id)
    {
        $query = "UPDATE `Categories` SET `name_category`=:nc WHERE `id`=:id";
        $params = array(
             
            "id" => $id->getId(),
            "nc" => $id->getNameProducts()
            
        );
        $this->getDal()->update($query,$params);
    }

    
}

 
?>
