<?php

/**
 * Created by PhpStorm.
 * User: j
 * Date: 14/07/17
 * Time: 10:44
 */
class CountedPara
{

    public function countedPara()
    {
        try
        {
            $req = SPDO::getInstance()->prepare("SELECT SUM(paragraphs) as total FROM  jokeripsum_counter");
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