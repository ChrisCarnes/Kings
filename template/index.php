<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>King's Green Cleaning | Residential and Commercial Cleaning Services for the OKC Metro</title>
        <link rel="canonical" href="http://kingsgreencleaning.com/" />

        <?php partial("head"); ?>

        <!-- Social media -->
        <?php partial("meta", [
            "page" => "Home",
            "url" => "http://www.kingsgreencleaning.com",
            "description" => "We offer commercial and residential green cleaning services. We will tailor a cleaning service for any type of home, need, or budget. Call us today to get a free estimate.",
            "image" => "/resources/images/kings-green-cleaning-icon.gif"
        ]); ?>

    </head>

    <body>
    
        <?php partial("analytics"); ?>
        <?php partial("browser-upgrade"); ?>

        <div id="wrap">
            <div id="page">

                <?php partial("header-clean"); ?>

                <div class="slideshow">
                    <div id="background-image-1">Image 01</div>
                    <div id="background-image-2">Image 02</div>
                    <div id="background-image-3">Image 03</div>
                </div>
                
                <main role="main" class="container">
                    <div class="row">
                        <div style="float: left; width: 500px;">
                            <h1>
                                Far far away, behind the word mountains
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p>
                                &nbsp;
                            </p>
                        </div>
                        <div style="float: left; width: 300px;">
                            <?php partial("form-alt"); ?>
                        </div>
                    </div>
                </main>

            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="/resources/js/mobile-nav.js"></script>

    </body>
</html>