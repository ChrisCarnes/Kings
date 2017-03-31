<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | Residential and Commercial Cleaning Services for the OKC Metro</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/" />

    <?php partial("meta", ["page" => "Home"]); ?>
    <?php partial("head"); ?>

</head>

<body id="page_home">
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

                            <div class="quote">
                                <div class="quote_header">
                                    GO GREEN!<div class="quote_close"></div>
                                </div>
                                <div class="quote_intro">
                                    <strong>
                                        Are you ready to Go Green in your home?
                                    </strong>
                                    Request a quote or schedule a cleaning using the form below, and find out how great it feels to Go Green with King's Green Cleaning!
                                </div>
                                <div class="quote_form">
                                    <form method="POST" action="">
                                        <div class="label">
                                            <label for="full_name"><span class="required">Full Name (required):</span></label>
                                        </div>
                                        <div class="input">
                                            <input type="text" name="full_name" id="full_name" value="" class="" />
                                        </div>
                                        <div class="label">
                                            <label for="address">Address:</label>
                                        </div>
                                        <div class="input">
                                            <input type="text" name="address" id="address" value="" class="" />
                                        </div>
                                        <div class="label">
                                            <label for="city">City:</label>
                                        </div>
                                        <div class="input">
                                            <input type="text" name="city" id="city" value="" class="" />
                                        </div>
                                        <div class="label">
                                            <label for="email"><span class="required">Email (required):</span></label>
                                        </div>
                                        <div class="input">
                                            <input type="email" name="email" id="email" value="" class="" />
                                        </div>
                                        <div class="label">
                                            <label for="phone">Phone:</label>
                                        </div>
                                        <div class="input">
                                            <input type="tel" name="phone" id="phone" value="" class="" />
                                        </div>
                                        <div class="label">
                                            <label for="comments">Details/Questions?:</label>
                                        </div>
                                        <textarea type="text" name="comments" id="comments" class="" ></textarea>
                                        <label for="required_field">
                                            <span class="required_field">Disregard This:</span>
                                        </label>
                                        <input type="text" name="required_field" id="required_field" value="" class="required_field" />
                                        <div class="label required">
                                            * Required Fields
                                        </div>
                                        <div class="submit">
                                            <input type="submit" name="submit" id="submit" value="Submit me!" class="" />
                                        </div>
                                    </form>
                                </div>
                            </div>

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
                                Home Cleaning Services For a King
                            </h1>
                            <h3 class="subtitle overview_subtitle">
                                Servicing the Oklahoma City Metro, Moore, Edmond, Yukon and Mustang
                            </h3>
                            <div class="description overview_description">
                                <p>
                                    Give your home the royal treatment with our tailored, eco-friendly residential and commercial cleaning services that are safe for you and the environment.
                                </p>
                                <p>
                                    We are a locally owned and operated green cleaning company, providing the best quality of cleaning products and services. We are bonded, insured, and carry worker&rsquo;s compensation.
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
            </div>
        </main>
    </div>

    <?php partial("footer"); ?>

</body>
</html>