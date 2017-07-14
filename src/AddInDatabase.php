<?php

/**
 * Created by PhpStorm.
 * User: j
 * Date: 14/07/17
 * Time: 11:53
 */
class AddInDatabase
{
    public function addInDatabase()
    {
        if (isset($_GET['validate-paragraph'])) {
            $req = SPDO::getInstance()->prepare('INSERT INTO `jokeripsum_counter`(`characters`, `paragraphs`) VALUES (?, ?)');
            $req->execute(array($_GET['carac'], $_GET['nb_p']));
        }
    }
}