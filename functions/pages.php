<?php

function load() {
//  print_r($_GET);

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING );

$page = (!$page) ? 'pages/home.php' : 'pages/{$page}.php' ; 

if(!file_exists($page)) {
    throw new \Exception("Opa, deu merddd...");
}

return $page;

}

?>