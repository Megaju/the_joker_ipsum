<?php

/*
 * CREATION DE PARAGRAPH
 *
 * On veut un tableaux contenant les répliques du Joker de Ledger.
 *
 * On veut une variable qui représente le nombre de caractères max souhaité.
 * Et une autre pour les compter.
 *
 * On peut dépasser, car au final nous couperons et finirons par un '.' !
 */

$replicas = array("Why so serious ?", "It's simple. We kill the Batman.", "Everything. Burns.", "This is my town now.", "The only sensible way to live in this world is without rules.");

$count_carac = 0;
$limit_carac = 1200;

$nb_p = 0;
$paragraph = array();

for ($x = 0; $x < $nb_p+1; $x++) {
    while ($count_carac < $limit_carac) {
        $rand = rand(0, count($replicas)-1);
        array_push($paragraph, $replicas[$rand]);
        $length = strlen(implode(",", $paragraph));
        $count_carac = $length;
    }
}

echo 'COUNT_CARAC = '.$count_carac.' | LIMIT_CARAC = '.$limit_carac;

$paragraph = implode(",", $paragraph);
$paragraph = str_replace(",", " ", $paragraph);
$diff = ($limit_carac - strlen($paragraph) -1);
$paragraph = substr($paragraph, 0, $limit_carac);
$paragraph = rtrim($paragraph, ".? ");
echo '<p>'.$paragraph.'.</p>';

echo strlen($paragraph);




