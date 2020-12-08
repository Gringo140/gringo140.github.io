<?php

function newVote ($title,$voters, $active, $id, $expiration, $options)
{

    $vote = new stdClass();
    $vote->title = $title;
    $vote->voters = $voters;
    $vote->active = $active;
    $vote->id = $id;
    $vote->expiration = $expiration;
    $vote->options = $options;
    return $vote;


}

