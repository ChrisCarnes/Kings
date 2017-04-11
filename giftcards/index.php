<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | Home Cleaning Gift Cards</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/giftcards/" />

    <?php partial("head"); ?>

    <!-- Social media -->
    <?php partial("meta", [
        "page" => "Gift Cards",
        "url" => "http://www.kingsgreencleaning.com/giftcards/",
        "description" => "Give a loved one the gift of a clean home! Our gift cards make wonderful gifts for anyone who wants to spend less time cleaning and more time relaxing.",
        "image" => "/resources/images/kings-green-cleaning-icon.gif"
    ]); ?>

</head>

<body id="page_giftcards" class="">
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
                                Home Cleaning Gift Cards
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
