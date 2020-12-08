<?php
function error ($statuscode)
{
    $statustext = [
        404 => "not found",
        500 => "Internal Server Error",
    ];
    header("HTTP/1.1 $statuscode $statustext[$statuscode]");
    header('Content-Type: text/html');

    include './../templates/error/error.html.php';
}
