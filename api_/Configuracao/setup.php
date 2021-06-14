<?php



include_once './database.php';


include_once './basic.php';


$database = new Database();
$db = $database->getConnection();


$basic = new Basic($db);
$basic->createDB();


$database->db_name="api_db";
$db = $database->getConnection();
$basic = new Basic($db);


$basic->createCategories();
$basic->insertCategories();


$basic->createProducts();
$basic->insertProducts();

?>
