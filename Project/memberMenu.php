<?php
    include "header.php";
    include "menu.php"; //Navigation menu
?>

    <body>
    <!-- Header -->
    <header id="header">
        <nav class="left">
            <a href="#menu"><span>Menu</span></a>
        </nav>
        <a href="index.php" class="logo">Movie Rental System</a>
    </header>

    <!-- Main -->
    <section id="main" class="wrapper">
        <h1 align = "center">Member Menu</h1>
        <div align="center" class="container wrapper" id = "main">
            <div class="row wrapper">
                <div class="col-sm-4">
                    <a href="searchMovie.php" class="button big">
                        <i class="fas fa-search"></i>
                    </a><br />
                    <b>Search Movie</b>
                </div>
                <div class="col-sm-4">
                    <a href="rentMovie.php" class="button big">
                        <i class="fas fa-shopping-basket"></i>    
                    </a><br />
                    <b>Rent Movie</b>
                </div>
                <div class="col-sm-4">
                    <a href="returnMovie.php" class="button big">
                        <i class="fas fa-exchange-alt"></i>
                    </a><br />
                    <b>Return Movie</b>
                </div>
            </div><!--close row wrapper--->
        </div><!--close container wrapper--->
    </section><!--close section--->

    <!--Scripts-->
    <?php
        include "script.php";
    ?>
    </body>
</html>