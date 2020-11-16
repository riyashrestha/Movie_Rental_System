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
        <a href="#" class="logo">Movie Rental System</a>
    </header>

    <!-- Main -->
    <section id="main" class="wrapper">
        <h1 align = "center">Main Menu</h1>
        <div align="center" class="container wrapper" id = "main">
            <div class="row wrapper">
                <div class="col-sm-6">
                    <a href="adminLogin.php" class="button big">
                        <i class="fas fa-user-shield"></i>
                    </a><br />
                    <b>Admin</b>
                </div>
                <div class="col-sm-6">
                    <a href="memberLogin.php" class="button big">
                        <i class="fas fa-user"></i>    
                    </a><br />
                    <b>Member</b>
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