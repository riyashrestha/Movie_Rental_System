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
        <h1 align = "center">Admin Menu</h1>
        <div align="center" class="container wrapper" id = "main">
            <div class="row uniform">
                <div class="col-sm-4">
                    <a href="addMovie.php" class="button big">
                        <i class="fas fa-film"></i>
                    </a><br />
                    <b>Add New Movie</b>
                </div>
                <div class="col-sm-4">
                    <a href="updateMovie.php" class="button big">
                        <i class="fas fa-edit"></i>   
                    </a><br />
                    <b>Search and Update Movie</b>
                </div>
                <div class="col-sm-4">
                    <a href="deleteMovie.php" class="button big">
                        <i class="fas fa-trash-alt"></i>
                    </a><br />
                    <b>Search and Delete Movie</b>
                </div>
            </div><!--close row uniform--->
            <div class="row uniform">
                <div class="col-sm-4">
                    <a href="addMember.php" class="button big">
                        <i class="fas fa-user-plus"></i>    
                    </a><br />
                    <b>Add New Member</b>
                </div>
                <div class="col-sm-4">
                    <a href="updateMember.php" class="button big">
                        <i class="fas fa-user-edit"></i>
                    </a><br />
                    <b>Search and Update Member</b>
                </div>
                <div class="col-sm-4">
                    <a href="deleteMember.php" class="button big">
                        <i class="fas fa-user-minus"></i>
                    </a><br />
                    <b>Search and Delete Member</b>
                </div>
            </div><!--close row uniform--->
        </div><!--close container wrapper--->
    </section><!--close section--->

    <!--Scripts-->
    <?php
        include "script.php";
    ?>
    </body>
</html>