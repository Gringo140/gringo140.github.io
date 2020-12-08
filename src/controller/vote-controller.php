<?php

include './../src/entity/vote.php';
include './../src/services/database.php';

function showAll()
{
    header("HTTP/1.1 200 OK");
    header('Content-Type: text/html');
    $dbh = getConnection();
    $sth = $dbh->prepare("SELECT * FROM vote ORDER BY id desc LIMIT 10;"
    );
    $sth->execute();

    $voteliste = $sth->fetchAll(PDO::FETCH_OBJ);


    include './../templates/vote-list.html.php';

}

function show($id)
{
    header("HTTP/1.1 200 OK");
    header('Content-Type: text/html');
    $dbh = getConnection();
    $sth = $dbh->prepare("SELECT `vote`.question, `vote`.expiration, `option`.id, `option`.label, `option`.voters FROM `vote`"
        . "JOIN `option` ON `option`.`vote` = `vote`.`id`"
        . "WHERE `vote`.`id` = :id"
    );
    $sth->execute([":id" =>$id]);
    $options = $sth->fetchAll(PDO::FETCH_OBJ);
    var_dump($options);
    include './../src/controller/error-controller.php';
    error(404);

}

function create()
{
    header("HTTP/1.1 200 OK");
    header('Content-Type: text/html');

    $vote = newVote("", 0, true, 0, date("Y/m/d", time() + 86400), ["", ""]);
    $errors = [];


    if (null !== filter_input(INPUT_POST, "submit")) {
        $vote->title = filter_input(INPUT_POST, "title");
        $vote->expiration = filter_input(INPUT_POST, "expiration");
        $vote->options = filter_input_array(INPUT_POST)["options"];
        if ($vote->title == "") {
            $errors["title"] = "En garde ma biquette ! Il faut remplir le titre !";
        }
        if ($vote->expiration == "") {
            $errors["expiration"] = "Faut voir grand dans la vie, quitte à voyager à travers le temps au volant d’une voiture, autant en choisir une qui ait d’la gueule !";
        } else {
            $time = (strtotime($vote->expiration));
            if (time() > $time) {
                $errors["expiration"] = "Faut voir grand dans la vie, quitte à voyager à travers le temps au volant d’une voiture, autant en choisir une qui ait d’la gueule !";
            }
        }
        $optionChoice = false;
        foreach ($vote->options as $value) {
            if ("" === $value) {
                $optionChoice = true;
                $errors["options"] = "En garde moussaillon, toutes les options sont requises !";
            } else {
                $optionChoice = false;
            }
        }
        getConnection();
        if (0 === count($errors)) {
            $dbh = getConnection();
            $dbh->prepare(
                "INSERT INTO `vote` (`question`,`expiration`) VALUES (:question,:expiration)"
            )->execute([
                ":question" => $vote->title,
                ":expiration" => (strtotime($vote->expiration)),
            ]);
            $vote->id = $dbh->lastInsertId();

            foreach ($vote->options as $option) {
                $dbh->prepare(
                    "INSERT INTO `option` (`label`,`voters`,`vote`) VALUES (:label, :voters,:vote)"
                )->execute([
                    ":label" => $option,
                    ":voters" => 1,
                    ":vote" => $vote->id,
                ]);
            }
            header("location: /votes");
            exit();
        }
    }


    include './../templates/new-vote.html.php';

}

