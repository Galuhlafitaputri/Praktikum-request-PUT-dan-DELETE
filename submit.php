<?php
include("api.php");
$products = new api();
$data = json_decode(file_get_contents('php://input'), true);
try { 
	$sql1 = "INSERT INTO orders
			(OrderID,CustomerID,EmployeeID,OrderDate,RequiredDate)
			VALUES('".$data["OrderID"]."',
			'".$data["CustomerID"]."',
			'".$data["EmployeeID"]."',
			'".$data["OrderDate"]."',
			'".$data["RequiredDate"]."')";
		$products->conn->query($sql1);
	
	$sql2 = "INSERT INTO orders_details
			(OrderID,ProductID,Quantity)
			VALUES('".$data["OrderID"]."',
			'".$data["products"]["ProductID"]."',
			'".$data["products"]["Quantity"]."')";
		$products->conn->query($sql2);
	echo "Successfully";
}catch(PDOException $e){
	echo "Failed Saving to database : ".$e->getMessage();
}
?>