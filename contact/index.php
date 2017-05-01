<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | Contact Us</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/contact/" />

    <?php partial("head"); ?>

    <?php partial("meta", array(
        "page" => "Contact",
        "uri" => "/contact/",
        "description" => "Contact King's Green Cleaning for all your home cleaning needs.",
        "image" => "/images/kings-green-cleaning-icon.gif"
    )); ?>
</head>

<body id="contact">
    <?php partial("analytics"); ?>
    <?php partial("browser-upgrade"); ?>
    
    <div id="wrap">
        <div id="page">

            <?php partial("header", array("page" => "Contact")); ?>

            <div class="hero-secondary">
                <div class="container">
                    <h1>
                        Contact King&rsquo;s Green Cleaning
                    </h1>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3>
                            Our central Oklahoma City location:
                        </h3>
                        <p>
                            1802 North Shartel Avenue<br />
                            Oklahoma City, OK 73013<br />
                            (405) 549-6862
                        </p>
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.694354212936!2d-97.52765894873939!3d35.48710538014312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b210b4d836d545%3A0x460fe37ac96d7b61!2sKing&#39;s+Green+Cleaning!5e0!3m2!1sen!2sus!4v1490932771717" width="100%" height="450" frameborder="0" allowfullscreen></iframe>
                        <h5 class="map-footnote">
                            <em>
                                Proudly serving the Oklahoma City metro and surrounding areas.
                            </em>
                        </h5>
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
