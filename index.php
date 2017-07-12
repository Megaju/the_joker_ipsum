<?php

require 'src/GenerateParagraph.php';

?>

<form action="" method="get">
    <label for="carac">Number of characters</label>
    <input type="number" name="carac" id="carac">
    <label for="carac">Number of paragraphs</label>
    <input type="number" name="nb_p" id="nb_p">
    <input type="submit" name="validate" value="Generate">
</form>

<?php

if (isset($_GET['validate'])) {
    $p = new generateParagraph($_GET['carac'], $_GET['nb_p']);
}

