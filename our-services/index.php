<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | Home Cleaning Services</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/our-services/" />

    <?php partial("head"); ?>

    <?php partial("meta", array(
        "page" => "Services",
        "uri" => "/our-services/",
        "description" => "Provides eco-friendly home and office cleaning services on a weekly, bi-weekly or monthly schedule! We have deep cleaning services, move in/out, construction, and vacation rental cleanings as well.",
        "image" => "/images/kings-green-cleaning-icon.gif"
    )); ?>
</head>

<body id="services">
    <?php partial("analytics"); ?>
    <?php partial("browser-upgrade"); ?>

    <div id="wrap">
        <div id="page">

            <?php partial("header", array("page" => "Services")); ?>

            <div class="hero-secondary">
                <div class="container">
                    <h1>
                        Home Cleaning Services
                    </h1>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3>
                            The Royal Treatment <span class="hidden-xs">&ndash;</span>
                            <small>
                                (Deep/Initial Cleaning)
                            </small>
                        </h3>
                        <p>
                            A Royal Treatment cleaning will need to occur before we can start regular service. This allows us to get the home in a condition to perform regular maintenance cleanings. This is a top to bottom cleaning. It includes all the tasks in the regular cleaning, but has a focus on the often-neglected areas including hand wiping of upper fixtures, vent covers, switch plates, baseboards, faucets and cabinets in the kitchen and bathroom. You can also have a deep clean preformed at any time or on a recurring schedule. Call or email the office for an itemized list of services provided.
                        </p>
                        <h3>
                            Palace Pamperer <span class="hidden-xs">&ndash;</span>
                            <small>
                                (Regular Maintenance Cleaning)
                            </small>
                        </h3>
                        <p>
                            Our Palace Pamperer cleanings are scheduled on a weekly, bi-weekly or monthly basis. After an initial clean has been performed, you can be set up on the frequency of your desire for a regular maintenance clean. The Palace Pamperer cleaning includes dusting of the whole house, kitchen, bathrooms, vacuuming of floors, mopping of hard floor surfaces. We take out the trash and will change your bed sheets upon request. For a complete list of services included in this clean, email or call the office.
                        </p>
                        <h3>
                            The Castle Hopper <span class="hidden-xs">&ndash;</span>
                            <small>
                                (Move In/ Move Out)
                            </small>
                        </h3>
                        <p>
                            Moving in or out of your home? Need to put your home on the market? Our Castle Hopper service is a deep clean in addition to cleaning inside cabinets, drawers, refrigerator and the oven. A clean home is going to show better and sell faster. When you are moving, you have enough to worry about, leave the cleaning to us. We also offer post construction cleaning for any remodeling you have done. Call or email the office to schedule an estimate.
                        </p>
                        <h3>
                            King&rsquo;s Court Cleaning <span class="hidden-xs">&ndash;</span>
                            <small>
                                (Commercial Cleaning Service)
                            </small>
                        </h3>
                        <p>
                            We provide office cleaning during business hours Monday <span class="hidden-xs">&ndash; Friday. This cleaning includes kitchen and bathroom cleaning, light dusting and trash removal. For a complete list of services provided in this clean or to discuss a personalized service call or email the office.</span>
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
