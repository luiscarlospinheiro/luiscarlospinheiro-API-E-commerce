<?php
// mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

// url
$home_url=""https://venanciov98.myvtex.com";

// página fornecida no parâmetro de URL, a página padrão é um
$page = isset($_GET['page']) ? $_GET['page'] : 1;


$records_per_page = 5;


$from_record_num = ($records_per_page * $page) - $records_per_page;
?>
