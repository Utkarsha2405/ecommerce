<?php
namespace Phppot;

class Category
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . './../lib/DataSource.php';
        $this->ds = new DataSource();
    }

    function getAllSubcategory($categoryId)
    {
        $query = "SELECT * FROM tbl_sub_category WHERE category_id = ?";
        $paramType = 'i';
        $paramArray = array(
            $categoryId
        );
        $result = $this->ds->select($query, $paramType, $paramArray);
        return $result;
    }

    function getAllCategory()
    {
        $query = "SELECT * FROM tbl_category";
        $result = $this->ds->select($query);
        return $result;
    }

    function getCategoryByName($search)
    {
        $query = "SELECT * FROM tbl_category WHERE category_name LIKE  '%" . $search . "%'";
        $result = $this->ds->select($query);
        return $result;
    }
}
