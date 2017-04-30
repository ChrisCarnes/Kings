<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | Home Cleaning Specials</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/specials/" />

    <?php partial("meta", array(
        "page" => "Specials",
        "uri" => "/specials/",
        "description" => "Keep an eye out for our special deals and incentives. We love to get referrals and reviews. We also will have specials for holidays and special occasions.",
        "image" => "/images/kings-green-cleaning-icon.gif"
    )); ?>

    <?php partial("head"); ?>

</head>

<body id="specials">
    <?php partial("analytics"); ?>
    <?php partial("browser-upgrade"); ?>

    <div id="wrap">
        <div id="page">

            <?php partial("header", array("page" => "Specials")); ?>

            <div class="hero-secondary">
                <div class="container">
                    <h1>
                        Home cleaning specials
                    </h1>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3>
                            Refer a new client and save $50
                        </h3>
                        <p>
                            If you already use King&rsquo;s Green Cleaning and you refer a new client who then books a recurring cleaning you will receive $50 dollars off a cleaning service.
                        </p>
                        <h3>
                            New clients can save $30
                        </h3>
                        <p>
                            Are April showers causing muddy footprints to spring up all through your house? We can clean that up! First time clients that book an initial cleaning between April 1st - June 20th receive $30 off.
                        </p>
                        <h3>
                            Mother&rsquo;s appreciation
                        </h3>
                        <p>
                            Get 10% off gift certificates for Mom in the month of May.
                        </p>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <?php partial("form-mailchimp"); ?>
                    </div>
                </div>
            </div>

        </main>
    </div>
    
    <?php partial("footer"); ?>

</body>
</html>