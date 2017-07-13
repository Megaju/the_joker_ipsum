<?php require 'src/GenerateParagraph.php'; ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>The Joker Ipsum</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <h1>The Joker Ipsum</h1>
            <div class="triangle-topleft"></div>
        </header>
        <div class="fix-height-header"></div>

        <div class="flexbox">
            <section><?php $p = (isset($_GET['validate-paragraph'])) ? new generateParagraph($_GET['carac'], $_GET['nb_p']) : new generateParagraph(666, 3); ?></section>
            <aside class="form">
                <h2>Generate your text</h2>
                <form action="" method="get">
                    <div class="flexbox">
                        <div>
                            <label for="carac">Characters</label>
                            <input type="number" name="carac" id="carac" class="carac" min="50" max="10000" value="<?php if(isset($_GET['carac'])){echo $_GET['carac'];}else{echo "666";}; ?>">
                        </div>
                        <div>
                            <label for="carac">Paragraphs</label>
                            <input type="number" name="nb_p" id="nb_p" class="nb-p" min="1" max="20" value="<?php if(isset($_GET['nb_p'])){echo $_GET['nb_p'];}else{echo "3";}; ?>">
                        </div>
                    </div>
                    <input type="submit" name="validate-paragraph" class="submit" value="generate">
                </form>

                <footer>
                    <p>Made by Julien Malle.</p>
                </footer>
            </aside>
        </div>

        <script src="js/clipboard.min.js"></script>
        <script src="js/copy.js"></script>
    </body>
</html>

