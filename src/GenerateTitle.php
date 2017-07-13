<?php

/**
 * Created by PhpStorm.
 * User: j
 * Date: 12/07/17
 * Time: 17:28
 */
class GenerateTitle
{
    public function generateTitle($id)
    {
        include 'words.php';

        $title = array();

        $rand = rand(0, count($words)-1);
        array_push($title, $words[$rand]);

        echo '<div class="title animated bounceInDown"><h2 id="copy-t-'.$id.'">'.$title[0].'</h2><button class="btn" data-clipboard-target="#copy-t-'.$id.'" data-clipboard-action="copy">Copy this title !</button></div>';
    }
}