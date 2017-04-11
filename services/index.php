<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | Home Cleaning Services</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/services/" />

    <?php partial("head"); ?>

    <!-- Social media -->
    <?php partial("meta", [
        "page" => "Services",
        "url" => "http://www.kingsgreencleaning.com/services/",
        "description" => "Provides eco-friendly home and office cleaning services on a weekly, bi-weekly or monthly schedule! We have deep cleaning services, move in/out, construction, and vacation rental cleanings as well.",
        "image" => "/resources/images/kings-green-cleaning-icon.gif"
    ]); ?>

</head>

<body id="page_services" class="">
    <?php partial("analytics"); ?>
    <?php partial("browser-upgrade"); ?>

    <div class="main_wrapper">
        <main class="content_wrapper clearfix" itemprop="mainContentOfPage">
            
            <ul class="bxslider">
                <li>
                    <div class="banner_wrapper" style="background-image: url(/resources/images/slideshow_1.jpg);">
                        <div class="banner">
                            &nbsp;
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner_wrapper" style="background-image: url(/resources/images/slideshow_2.jpg);">
                        <div class="banner">
                            &nbsp;
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner_wrapper" style="background-image: url(/resources/images/slideshow_3.jpg);">
                        <div class="banner">
                            &nbsp;
                        </div>
                    </div>
                </li>
            </ul>

            <?php partial("header"); ?>

            <div class="section_wrapper home_wrapper">
                <div class="section">
                    <div class="sidebar clearfix">
                        <div class="quotebar">
                            <div class="quote_toggle">
                                REQUEST A QUOTE
                                <div class="quote_open"></div>
                            </div>

                            <?php partial("form"); ?>

                        </div>
                        <a href="https://member.angieslist.com/member/store/10517798" target="_blank">
                            <img src="/resources/images/sb_angie_certified.png" alt="Angie's List Certified" class="sb_badge" />
                        </a>
                        <a href="https://member.angieslist.com/member/store/10517798" target="_blank">
                            <img src="/resources/images/sb_angie_ssa2016.png" alt="Angie's List Superior Service Award 2017" class="sb_badge" />
                        </a>
                        <a href="https://www.facebook.com/KingsGreenCleaning/" target="_blank">
                            <img src="/resources/images/sb_facebook.png" alt="Find Us on Facebook" class="sb_badge" />
                        </a>
                    </div>
                    <div class="main">
                        <div class="overview clearfix">
                            <h1 class="title overview_title">
                                Home Cleaning Services
                            </h1>
                        </div>
                        <div class="browse clearfix">
                            <div class="browse_record clearfix">
                                <h3 class="browse_title">
                                The Royal Treatment
                                </h3>
                                <h5 class="browse_subtitle">
                                (Deep/Initial Cleaning)
                                </h5>
                                <div class="description browse_description">
                                    <p>
                                        A Royal Treatment cleaning will need to occur before we can start regular service. This allows us to get the home in a condition to perform regular maintenance cleanings. This is a top to bottom cleaning. It includes all the tasks in the regular cleaning, but has a focus on the often-neglected areas including hand wiping of upper fixtures, vent covers, switch plates, baseboards, faucets and cabinets in the kitchen and bathroom. You can also have a deep clean preformed at any time or on a recurring schedule. Call or email the office for an itemized list of services provided.
                                    </p>
                                </div>
                            </div>
                            <div class="browse_record clearfix">
                                <h3 class="browse_title">
                                Palace Pamperer
                                </h3>
                                <h5 class="browse_subtitle">
                                (Regular Maintenance Cleaning)
                                </h5>
                                <div class="description browse_description">
                                    <p>
                                        Our Palace Pamperer cleanings are scheduled on a weekly, bi-weekly or monthly basis. After an initial clean has been performed, you can be set up on the frequency of your desire for a regular maintenance clean. The Palace Pamperer cleaning includes dusting of the whole house, kitchen, bathrooms, vacuuming of floors, mopping of hard floor surfaces. We take out the trash and will change your bed sheets upon request.&nbsp; For a complete list of services included in this clean, email or call the office.
                                    </p>
                                </div>
                            </div>
                            <!-- CLOSE BROWSE_RECORD -->
                            <div class="browse_record clearfix">
                                <h3 class="browse_title">
                                The Castle Hopper
                                </h3>
                                <h5 class="browse_subtitle">
                                (Move In/ Move Out)
                                </h5>
                                <div class="description browse_description">
                                    <p>
                                        Moving in or out of your home? Need to put your home on the market? Our Castle Hopper service is a deep clean in addition to cleaning inside cabinets, drawers, refrigerator and the oven. A clean home is going to show better and sell faster. When you are moving, you have enough to worry about, leave the cleaning to us. We also offer post construction cleaning for any remodeling you have done. Call or email the office to schedule an estimate.
                                    </p>
                                </div>
                            </div>
                            <!-- CLOSE BROWSE_RECORD -->
                            <div class="browse_record last clearfix">
                                <h3 class="browse_title">
                                King's Court Cleaning
                                </h3>
                                <h5 class="browse_subtitle">
                                (Commercial Cleaning Service)
                                </h5>
                                <div class="description browse_description">
                                    <p>
                                        We provide office cleaning during business hours Monday &ndash; Friday.&nbsp; This cleaning includes kitchen and bathroom cleaning, light dusting and trash removal. For a complete list of services provided in this clean or to discuss a personalized service call or email the office.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <?php partial("footer"); ?>

</body>
</html>
