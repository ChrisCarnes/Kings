<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | Contact Us</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/contact/" />

    <?php partial("head"); ?>

    <!-- Social media -->
    <?php partial("meta", [
        "page" => "Contact",
        "url" => "http://www.kingsgreencleaning.com/contact/",
        "description" => "Contact King's Green Cleaning for all your home cleaning needs.",
        "image" => "/resources/images/kings-green-cleaning-icon.gif"
    ]); ?>

</head>

<body id="page_contact" class="">
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
                                Contact King&rsquo;s Green Cleaning
                            </h1>
                            <div class="description overview_description">
                                <p>
                                    1802 North Shartel Avenue<br />
                                    Oklahoma City, OK 73013<br />
                                    (405) 549-6862
                                </p>
                                <p>
                                    <a href="https://www.google.com/maps/dir//King's+Green+Cleaning,+1802+N+Shartel+Ave,+Oklahoma+City,+OK+73103/@35.4871054,-97.5276536,17z/data=!4m15!1m6!3m5!1s0x87b210b4d836d545:0x460fe37ac96d7b61!2sKing's+Green+Cleaning!8m2!3d35.4871054!4d-97.5254649!4m7!1m0!1m5!1m1!1s0x87b210b4d836d545:0x460fe37ac96d7b61!2m2!1d-97.5254649!2d35.4871054">Directions</a> | <a href="https://www.google.com/maps/place/King's+Green+Cleaning/@35.4871054,-97.5276589,17z/data=!3m1!4b1!4m5!3m4!1s0x87b210b4d836d545:0x460fe37ac96d7b61!8m2!3d35.4871054!4d-97.5254649">Google Map Link</a>
                                </p>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.694354212936!2d-97.52765894873939!3d35.48710538014312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b210b4d836d545%3A0x460fe37ac96d7b61!2sKing&#39;s+Green+Cleaning!5e0!3m2!1sen!2sus!4v1490932771717" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <?php partial("footer"); ?>

</body>
</html>
