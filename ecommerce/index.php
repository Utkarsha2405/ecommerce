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
<html>
<head>
<title>Category-subcategory-gallery-with-search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<script src="./vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="h2 font-weight-bold mt-3">Product Category</div>
		<form name="cards" id="cards" action="" method="get">
			<div class='form-row mt-5 mt-4'>
				<div class='col-md-6 form-inline'>
					<label class="px-3">Name </label><input type='text'
						class='form-control' name='category' id='category' value=<?php echo $keyword; ?>>
					<input class="btn btn-secondary ml-2" type="submit" value="Search"
						name="search">
				</div>
			</div>
			<div>
			<?php
if (! empty($categoryResult)) {
    $categoryArray = array_chunk($categoryResult, 4);
    $i = 1;
    foreach ($categoryArray as $column) {
        ?><div class="form-row mb-3" id="category-row-<?php echo $i;?>">
        <?php
        foreach ($column as $k => $v) {
            ?>
					<div class="col-md-3 mt-3 rounded"
						id="cat-id-<?php echo $column[$k]["id"];?>"
						onclick="showSubcategory('<?php echo $column[$k]["id"];?>','<?php echo $i;?>','<?php echo $column[$k]["category_name"];?>')">
						<div class="text-center">
							<img src="data/image-bird.jpg" class="img-thumbnail mt-4">
							<div class="text-center font-weight-bold mt-3 mb-3"><?php echo $column[$k]["category_name"];?></div>
						</div>
					</div>
					<?php
        }
        ?>
						<div class="form-row bg-light mt-3 w-100 subcategory-row d-none"></div>
				</div>
        <?php
        $i ++;
    }
}
?>
</div>
		</form>
	</div>
	<script src="./assets/js/category.js"></script>
</body>
</html>