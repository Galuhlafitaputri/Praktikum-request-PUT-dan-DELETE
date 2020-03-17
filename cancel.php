<?php
include("api.php");
$products=new api();
$data = ['OrderID' => $_GET["OrderID"], 
		'ProductID'=> $_GET["ProductID"] ];
echo $products->post("http://localhost/northwind/api/savecancel.php", $data);
?>