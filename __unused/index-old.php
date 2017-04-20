<?php include "functions.php"; ?>
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

<body id="page_home">
    <?php partial("analytics"); ?>
    <?php partial("browser-upgrade"); ?>

    <div class="main_wrapper">
        <main class="content_wrapper" itemprop="mainContentOfPage">
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
                    <div class="sidebar">
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
                        <div>
                            <h1>
                                Home cleaning services fit for a king
                            </h1>
                            <h3>
                                Servicing the Oklahoma City Metro, Moore, Edmond, Yukon, and Mustang
                            </h3>
                            <p>
                                Give your home the royal treatment with our tailored, eco-friendly residential and commercial cleaning services that are safe for you, your family, and the environment.
                            </p>
                            <p>
                                We're a locally owned and operated green cleaning company providing the best quality cleaning products and services. We're bonded, insured, and carry worker&rsquo;s compensation.
                            </p>
                            <p>
                                <strong>
                                    Please call us today&nbsp;to schedule your&nbsp;free estimate!!
                                </strong>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>

    <?php partial("footer"); ?>

</body>
</html>