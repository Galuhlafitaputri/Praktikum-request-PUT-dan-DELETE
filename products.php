<?php
include("api.php");
$limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 0;
$keyword = isset($_GET['name']) ? $_GET['name'] : '';
$products = new api();
echo $products->get($keyword,$limit);
?>