<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/assets/CSS/app.css">
    <link rel="stylesheet" type="text/css" href="/node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>




<?php


$title = new stdClass();
$title->name = "VOTE APP";
?>

<header>

    <nav class="navbar navbar-dark bg-dark" style="color: blanchedalmond">
        <!-- Navbar content -->
        <h1>
            <?= $title->name ?>
        </h1>
    <p>
        <a href="/votes/create" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">
            Create
        </a>
        <a href="/votes" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">
            Vote List
        </a>
        </button>
    </p>
    </nav>
</header>

