<?php

$authors = array();

$hostname='database';
$user = 'root';
$password = '1234';
$database = 'lecturinis';
$port = 3306;
$connection = new mysqli($hostname, $user, $password, $database, $port);

if ($connection->connect_error) {
    die("Ceva nu a functionat cum trebuie...te rugam incerca mai tarziu");
}

$sql_query = "";

if(isset($_GET["autor"])) {
    $numeAutor = $_GET["autor"];
    $sql_query = "SELECT * FROM autori WHERE nume=\"$numeAutor\"";
}
else {
    $sql_query = "SELECT * FROM autori";
}

$query_result = $connection->query($sql_query);
if($query_result->num_rows > 0) {
    while($row = $query_result->fetch_assoc()) {
        $authors[count($authors)] = $row;
    }
}
$connection->close();
?>

<html>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lecturinis</title>
        <link rel="stylesheet" href="res/static/fontawesome/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="res/static/css/autori.css" />
        <link rel="stylesheet" href="res/static/css/header.css" />
        <link rel="stylesheet" href="res/static/css/footer.css" />
        <link rel="stylesheet" href="res/static/css/main.css">
        <script src="res/static/js/index.js"></script>

    </head>

    <body>
    <?php include ('header.php') ?>

    <?php

        if(count($authors) == 0) {

        ?>
            <div> Nu a fost gasit niciun autor</div>
        <?php

        }
        else if(count($authors) == 1) {

            $author = $authors[0];

            ?>
            <div class="author_container">

                <img class="author_page_image" src="<?php echo "res/img/autori/".$author["url_imagine"]?>" alt=""/>
                <p class="author_quote"><?php if($author["citat"]) echo "\"".$author["citat"]."\""?></p>

            </div>

            <div class="author_content_container">
                <p>
                <?php echo $author["continut"] ?>
                </p>
            </div>
            <?php
                if($author["anul_nasterii"] != NULL &&  $author["anul_mortii"] != NULL) {
                    ?>
                    <div class="author_years">
                        <p style="font-family: 'Dancing Script', cursive; text-align: center;"><?php echo $author["nume"] ?></p>
                        <p style="font-family: 'Dancing Script', cursive; text-align: center;"><?php echo $author["anul_nasterii"]." - ".$author["anul_mortii"] ?></p>
                    </div>
                    <?php
                }
            ?>
            <?php
        }
        else {

            ?><div id="authors_container"><?php

            foreach($authors as $author) {
                ?>
                    <a
                     href="<?php echo "autori.php?autor=".$author["nume"]?>"
                     class="author_card">
                        <img src="<?php echo "res/img/autori/".$author["url_imagine"]?>" alt=""/>
                        <div class="image_overlay">
                            <p class="author_name"><?php echo $author["nume"] ?></p>
                        </div>
                    </a>

                <?php
            }
            ?></div><?php
        }
    ?>
    <?php include ('footer.php') ?>
    </body>
</html>
