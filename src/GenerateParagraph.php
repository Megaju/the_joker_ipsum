<?php

/**
 * Created by PhpStorm.
 * User: j
 * Date: 12/07/17
 * Time: 13:54
 */
class GenerateParagraph
{
    public function generateParagraph($limit_carac, $nb_p)
    {
        include 'replicas.php';
        $subsections = array();

        for ($x = 0; $x < $nb_p; $x++) {
            $paragraph = array();
            $count_carac = 0;

            while ($count_carac < $limit_carac) {
                $rand = rand(0, count($replicas)-1);
                array_push($paragraph, $replicas[$rand]);
                $length = strlen(implode(",", $paragraph));
                $count_carac = $length;
            }

            $paragraph = implode(",", $paragraph);
            $paragraph = str_replace(",", " ", $paragraph);
            $diff = ($limit_carac - strlen($paragraph) -1);
            $paragraph = substr($paragraph, 0, $limit_carac);
            $paragraph = rtrim($paragraph, ".? ");

            array_push($subsections, $paragraph);
            echo '<p>'.$subsections[$x].'.</p>';
        }
    }
}