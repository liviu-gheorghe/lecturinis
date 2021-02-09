<!DOCTYPE html>
<html lang="ro">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lecturinis</title>
        <link rel="stylesheet" href="res/static/fontawesome/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="res/static/css/index.css" />
        <link rel="stylesheet" href="res/static/css/header.css" />
        <link rel="stylesheet" href="res/static/css/footer.css" />
        <link rel="stylesheet" href="res/static/css/main.css">
        <script src="res/static/js/index.js"></script>

    </head>

<body>

    <?php include ('header.php') ?>
    <div id="carousel_image">
        <img src="res/img/book-read-reading-reader-shop-color-822866-pxhere.com.jpg" alt="" />
        <div id="image_overlay">


            <div>Lecturinis - Invata la romana intr-un mod distractiv</div>

            <button class="arrow_down_button" onclick="scrollToMainContent()">
                <i class="fas fa-arrow-circle-down"></i>
            </button>

     </div>
     <div id="parallax_container">

         <p id="parallax_title">Lecturinis - Invata la romana intr-un mod distractiv</p>
         <button class="arrow_down_button" onclick="scrollToMainContent()">
             <i class="fas fa-arrow-circle-down"></i>
         </button>
     </div>
    </div>


    <p class="section_title" id="arrow_down_anchor">
        Ce poti gasi pe Lecturinis
    </p>

    <p style="text-align: center; margin: 10px 0">
        <i style="font-size: 50px" class="fa fa-book"> </i>
    </p>

    <div id="homepage_carousels">

        <div id="homepage_carousel_01" class="carousel">
            <div class="carousel_title">
                Analiza bine pusa la punct a fiecarei opere literare
            </div>
            <span class="stats_value">15+</span>
            <span class="stats_description">Opere literare</span>
        </div>
        <div id="homepage_carousel_02" class="carousel">
            <div class="carousel_title">
                Quiz-uri structurate in functie de opera, curent literar sau autor
            </div>
            <span class="stats_value">30+</span>
            <span class="stats_description">Quiz-uri cu diverse intrebari</span>
        </div>

    </div>
    <?php include ('footer.php') ?>
</body>

</html>