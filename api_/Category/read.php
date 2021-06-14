<?php
// Cabeçalho
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// inclui banco de dados e arquivos de objeto
include_once '../config/database.php';
include_once '../objects/category.php';

// instancia banco de dados e objeto de categoria
$database = new Database();
$database->db_name="api_db";
$db = $database->getConnection();

// inicializa objeto
$category = new Category($db);

// categorias de consulta
$stmt = $category->read();
$num = $stmt->rowCount();

// verifique se existe mais de 0 registro encontrado
if($num>0){

    // array de produtos
    $categories_arr=array();
    $categories_arr["records"]=array();

    // recuperar o conteúdo de tabela
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
       
        extract($row);

        $category_item=array(
            "id" => $id,
            "name" => $name,
            "description" => html_entity_decode($description)
        );

        array_push($categories_arr["records"], $category_item);
    }


    http_response_code(200);


    echo json_encode($categories_arr);
}

else{


    http_response_code(404);


    echo json_encode(
        array("message" => "No categories found.")
    );
}
?>
