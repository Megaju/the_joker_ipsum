<?php

/**
 * Created by PhpStorm.
 * User: j
 * Date: 14/07/17
 * Time: 10:44
 */
class CountedChar
{

    public function countedChar()
    {
        try
        {
            $req = SPDO::getInstance()->prepare("SELECT SUM(characters) as total FROM  jokeripsum_counter");
            $req->execute();
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        while ($donnees = $req->fetch())
        {
            echo $donnees['total'];
        }
    }
}