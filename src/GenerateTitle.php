<?php

/**
 * Created by PhpStorm.
 * User: j
 * Date: 12/07/17
 * Time: 17:28
 */
class GenerateTitle
{
    public function generateTitle()
    {
        include 'replicas.php';


            $title = array();

            $rand = rand(0, count($replicas)-1);
            array_push($title, $replicas[$rand]);

            echo '<h2>'.$title[0].'</h2>';

    }
}