<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | Home Cleaning Specials</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/specials/" />

    <?php partial("head"); ?>

    <!-- Social media -->
    <?php partial("meta", [
        "page" => "Specials",
        "url" => "http://www.kingsgreencleaning.com/specials/",
        "description" => "Keep an eye out for our special deals and incentives. We love to get referrals and reviews. We also will have specials for holidays and special occasions.",
        "image" => "/resources/images/kings-green-cleaning-icon.gif"
    ]); ?>

</head>

<body id="page_specials" class="">
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
                                REQUEST A QUOTE<div class="quote_open"></div>
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
                                Home Cleaning Specials
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
    
    <?php partial("footer"); ?>

</body>
</html>