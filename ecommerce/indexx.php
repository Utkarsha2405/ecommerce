<?php
use Phppot\Category;

require_once __DIR__ . '/Model/Category.php';
$categoryModel = new Category();
$keyword = "";
if (! empty($_GET["category"])) {
    $keyword = $_GET["category"];
    $categoryResult = $categoryModel->getCategoryByName($keyword);
} else {
    $categoryResult = $categoryModel->getAllCategory();
}
?>