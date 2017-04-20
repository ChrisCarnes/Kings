<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | Contact Us</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/contact/" />

    <?php partial("meta", [
        "page" => "Contact",
        "uri" => "/contact/",
        "description" => "Contact King's Green Cleaning for all your home cleaning needs.",
        "image" => "/resources/images/kings-green-cleaning-icon.gif"
    ]); ?>

    <?php partial("head"); ?>

</head>

<body id="contact">
    <?php partial("analytics"); ?>
    <?php partial("browser-upgrade"); ?>
    
    <div id="wrap">
        <div id="page">

            <?php partial("header"); ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="title overview_title">
                            Contact King&rsquo;s Green Cleaning
                        </h1>
                        <p>
                            1802 North Shartel Avenue<br />
                            Oklahoma City, OK 73013<br />
                            (405) 549-6862
                        </p>
                        <!--
                        <p>
                            <a href="https://www.google.com/maps/dir//King's+Green+Cleaning,+1802+N+Shartel+Ave,+Oklahoma+City,+OK+73103/@35.4871054,-97.5276536,17z/data=!4m15!1m6!3m5!1s0x87b210b4d836d545:0x460fe37ac96d7b61!2sKing's+Green+Cleaning!8m2!3d35.4871054!4d-97.5254649!4m7!1m0!1m5!1m1!1s0x87b210b4d836d545:0x460fe37ac96d7b61!2m2!1d-97.5254649!2d35.4871054">Directions</a> | <a href="https://www.google.com/maps/place/King's+Green+Cleaning/@35.4871054,-97.5276589,17z/data=!3m1!4b1!4m5!3m4!1s0x87b210b4d836d545:0x460fe37ac96d7b61!8m2!3d35.4871054!4d-97.5254649">Google Map</a>
                        </p>
                        -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.694354212936!2d-97.52765894873939!3d35.48710538014312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b210b4d836d545%3A0x460fe37ac96d7b61!2sKing&#39;s+Green+Cleaning!5e0!3m2!1sen!2sus!4v1490932771717" width="100%" height="450" frameborder="0" style="border:1px solid #d3d3d3;" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <?php partial("form"); ?>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <?php partial("footer"); ?>

</body>
</html>
