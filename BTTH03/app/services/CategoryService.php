<?php

require_once APP_ROOT . '/CSE485/BTTH03/app/models/Category.php';
require_once APP_ROOT . '/CSE485/BTTH03/app/libs/DBConnection.php';

class CategoryService
{
    public function getAllCategory()
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConn();

        if($conn != null){
            $sql = "SELECT * FROM TheLoai ORDER BY id DESC";
            $query = $conn->prepare($sql);
            $query->execute();

            $categories = [];
            while ($row = $query->fetch()) {
                $category = new Category($row['id'], $row['tenTheLoai']);
                $categories[] = $category;
            }
            return $categories;
        }
        

}
}