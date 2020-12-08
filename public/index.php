<?php

$url = filter_input(INPUT_SERVER, "REQUEST_URI");

if ("/votes" === $url) {
    include './../src/controller/vote-controller.php';
    showAll();
}elseif ("/votes/create" === $url){
    include './../src/controller/vote-controller.php';
    create();
}elseif ("/votes?id=" . filter_input(INPUT_GET, "id") === $url) {
    include './../src/controller/vote-controller.php';
    show(filter_input(INPUT_GET, "id"));
}else {
    include './../src/controller/error-controller.php';
   error(404);
}





/*
var_dump ($_SERVER);

$method = filter_input ( INPUT_SERVER , "REQUEST_METHOD" );
*/


/*
var_dump($_GET);
$bonjour = filter_input ( INPUT_GET , "bonjour" );
*/
