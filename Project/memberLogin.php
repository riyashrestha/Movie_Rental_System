<?php
    session_start();
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
            <h1 align = "center">Member Login</h1>
            <div class="container">
                <div class="inner">
                    <!--PHP Code--->
                    <?php
                        //always initialize variables to be used
                        $msg = "";
                        $cUsername = "";
                        $cPass = "";
                        $username = "member"; // temp username for testing
                        $pass = "123";// temp password for testing 
                        $usernameOk = false;
                        $passOk = false;

                        if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
                        {
                            $cUsername = trim($_POST['username']);
                            $cPass = trim($_POST['password']); 
                            
                            //validating username
                            if($cUsername != $username)
                            {
                                $msg = $msg . '<br/><b>Incorrect Username</b>';
                            }
                            else
                            {
                                $usernameOk = true;
                            }

                            //validating password
                            if(($cPass != $pass))
                            {
                                $msg = $msg . '<br/><b>Incorrect Password</b>';
                            }
                            else
                            {
                                $passOk = true;
                            }

                            if($usernameOk && $passOk)
                            {
                                $_SESSION['mUsername'] = $cUsername;
                                header("Location: memberMenu.php");
                            }
                        }
                    ?>

                    <!-- Form -->
                    <form method="post" action="memberLogin.php">
                        <?php
                            print $msg;
                        ?>
                        <div class="row uniform">
                            <div class="12u$">
                                <div class="col-sm-6">
                                    <label for="username">Username<sup>*</sup></label>
                                    <input type="text" name="username" id="username" maxlength="50" value="<?php print $cUsername; ?>" placeholder="admin" required/>
                                </div>
                            </div>
                            <!-- Break -->
                            <div class="12u$">
                                <div class="col-sm-6">
                                    <label for="password">Password<sup>*</sup></label>
                                    <input type="password" name="password" id="password" maxlength="30" value="<?php print $cPass; ?>" placeholder="Password" required/>
                                </div>
                            </div>
                            <!-- Break -->
                            <!--Submit buttons-->
                            <div class="12u$">
                                <ul class="actions">
                                    <li><input type="submit" name = "submit"  value="Login"/></li>
                                    <li><input type="reset" name ="reset" value="Reset" class="alt" /></li>
                                </ul>
                            </div>
                        </div>
                    </form><!--close form-->
                    <div>
                        <!--switch screen-->
                        <h4>Switch Login Screen</h4>
                        <p>If you are an Admin, click on button below to switch to Admin login screen</p>
                        <a href="adminLogin.php" class = "button">Switch</a>
                    </div>
                </div><!--close inner wrapper-->
            </div><!--close container wrapper-->
        </section><!--close section wrapper-->

        <!--Scripts-->
        <?php
            include "script.php";
        ?>

	</body>
</html>