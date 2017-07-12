<?php require 'src/GenerateParagraph.php'; ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>The Joker Ipsum</title>

    </head>
    <body>
        <header>
            <h1>The Joker Ipsum</h1>
        </header>

        <section>
            <form action="" method="get">
                <label for="carac">Number of characters</label>
                <input type="number" name="carac" id="carac" min="50" max="10000" value="<?php if(isset($_GET['carac'])){echo $_GET['carac'];}else{echo "250";}; ?>">
                <label for="carac">Number of paragraphs</label>
                <input type="number" name="nb_p" id="nb_p" min="1" max="20" value="<?php if(isset($_GET['nb_p'])){echo $_GET['nb_p'];}else{echo "1";}; ?>">
                <input type="submit" name="validate-paragraph" value="generate">
            </form>
        </section>

        <section><?php $p = (isset($_GET['validate-paragraph'])) ? new generateParagraph($_GET['carac'], $_GET['nb_p']) : ""; ?></section>

        <script src="js/clipboard.min.js"></script>
        <script src="js/copy.js"></script>

        <footer>
            <p>Create by Julien Malle, 2017.</p>
        </footer>
    </body>
</html>

