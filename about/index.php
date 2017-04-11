<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | The Royal Family</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/about/" />

    <?php partial("head"); ?>

    <!-- Social media -->
    <?php partial("meta", [
        "page" => "About",
        "url" => "http://www.kingsgreencleaning.com/about/",
        "description" => "A family owned and operated company with a passion for green cleaning. We use environmentally safe cleaning products to help keep your family, pets, and community clean and healthy.",
        "image" => "/resources/images/kings-green-cleaning-icon.gif"
    ]); ?>

</head>

<body id="page_about" class="">
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
                                The Royal Family
                            </h1>
                            <div class="description overview_description">
                                <p>
                                    King&rsquo;s Green Cleaning was established in 2006. It is a family owned and operated business to this day. We started the business because we wanted to offer luxury-cleaning service that was tailored to meet each of our client&rsquo;s individual needs. After realizing the effects of traditional cleaning products on our health we started cleaning green.&nbsp; Protecting our employees and client&rsquo;s health was very important to us so we made the transition to eco-friendly products. At King&rsquo;s Green Cleaning nothing makes us happier than giving our clients back precious time to do the things that they love. We love our employees and clients and we look forward to being the premiere green cleaning service in the Oklahoma City area.
                                </p>
                                <h2>
                                    Join Our Team
                                </h2>
                                <p>
                                    We're a fun and exciting Oklahoma City company always looking to add new members to our family.
                                </p>
                                <ul>
                                    <li>
                                        Must pass a background check.
                                    </li>
                                    <li>
                                        Must be comfortable with technology.
                                    </li>
                                    <li>
                                        Must be able to work in a team environment.
                                    </li>
                                    <li>
                                        Must be detail oriented.
                                    </li>
                                    <li>
                                        Must have good customer service skills.
                                    </li>
                                    <li>
                                        Must have a positive attitude, be efficient, friendly and a good communicator.
                                    </li>
                                    <li>
                                        Must follow company policy as outlined in company handbook and training. <strong>Paid training is provided.</strong>
                                    </li>
                                </ul>
                                <p>
                                    <a class="btn btn-primary" href="mailto:&#x69;&#x6E;&#x66;&#x6F;&#x40;&#x6B;&#x69;&#x6E;&#x67;&#x73;&#x67;&#x72;&#x65;&#x65;&#x6E;&#x63;&#x6C;&#x65;&#x61;&#x6E;&#x69;&#x6E;&#x67;&#x2E;&#x63;&#x6F;&#x6D;?subject=Job%20application%20-%20King%27s%20Green%20Cleaning&body=Please%20provide%20the%20following%20information%20and%20we%27ll%20be%20in%20contact%20with%20you%20soon:%0D%0A%0D%0AName%3A%20%0D%0AEmail%3A%20%0D%0APhone%3A%20%0D%0A%0D%0APlease%20be%20sure%20to%20attach%20your%20resum%C3%A9.">Apply today!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

    <?php partial("footer"); ?>

</body>
</html>
