<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | Residential and Commercial Cleaning Services for the OKC Metro</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/" />

    <?php partial("head"); ?>
    
    <!-- Google Search Console verification tag -->
    <meta name="google-site-verification" content="lRWKPde5q21-f3p52OuchcwczN0SxXuRdWqYb35DyRU" />
    
    <?php partial("meta", array(
        "page" => "Home",
        "uri" => "/",
        "description" => "We offer commercial and residential green cleaning services. We will tailor a cleaning service for any type of home, need, or budget. Call us today to get a free estimate.",
        "image" => "/images/kings-green-cleaning-icon.gif"
    )); ?>
</head>

<body id="home">
    <?php partial("analytics"); ?>
    <?php partial("browser-upgrade"); ?>
    
    <div id="wrap">
        <div id="page">

            <?php partial("header", array("page" => "Home")); ?>

            <div class="jumbotron">
                <a class="btn btn-primary btn-lg" href="#mc-embedded-subscribe-form">Get your estimate!</a>
                <div id="image-slider">
                    <div id="image-1"></div>
                    <div id="image-2"></div>
                    <div id="image-3"></div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>
                            Professional home cleaning services for OKC and surrounding areas
                        </h1>
                        <p>
                            Give your home the royal treatment with our tailored, eco-friendly, residential and commercial cleaning services that are safe for you, your loved ones, and the environment.
                        </p>
                        <p>
                            We&rsquo;re a locally owned and operated green cleaning company, providing the best quality cleaning products and services. We&rsquo;re also bonded, insured, and carry worker’s compensation so you can rest assured your house is in the right hands.
                        </p>
                        <h5>
                            Servicing the Oklahoma City metro and surrounding areas including:
                        </h5>
                        <div class="row service-areas">
                            <ul class="col-xs-6 col-sm-3">
                                <li>
                                    Edmond
                                </li>
                                <li>
                                    Choctaw
                                </li>
                                <li>
                                    Midwest City
                                </li>
                            </ul>
                            <ul class="col-xs-6 col-sm-3">
                                <li>
                                    Del City
                                </li>
                                <li>
                                    Yukon
                                </li>
                                <li>
                                    Mustang
                                </li>
                            </ul>
                            <ul class="col-xs-6 col-sm-3">
                                <li>
                                    Piedmont
                                </li>
                                <li>
                                    Surrey Hills
                                </li>
                                <li>
                                    Moore
                                </li>
                            </ul>
                            <ul class="col-xs-6 col-sm-3">
                                <li>
                                    Nichols Hills
                                </li>
                                <li>
                                    Deer Creek
                                </li>
                                <li>
                                    Arcadia
                                </li>
                            </ul>
                        </div>
                        <h5>
                            <strong>
                                Call <a class="text-nowrap" href="tel:4055496862">(405) 549-6862</a> to get your free cleaning estimate.
                            </strong>
                        </h5>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <?php partial("form-mailchimp"); ?>
                    </div>
                </div>
            </div>

            <div class="container">
                <figure class="quote text-center" itemprop="mentions" itemscope itemtype="http://schema.org/Article">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <blockquote>
                                &ldquo;After using King&rsquo;s, I don&rsquo;t know if I could ever go without their home cleaning service. The team at King&rsquo;s Green Cleaning is top notch, professional, and friendly — <span class="text-primary">&#9733;&#9733;&#9733;&#9733;&#9733;</span>!&rdquo;
                            </blockquote>
                            <figcaption>
                                    <span itemprop="author">Chris Carnes</span>, 
                                    <cite itemprop="name">
                                        <a itemprop="url" href="https://www.google.com/maps/contrib/114968947813690152024/reviews/@35.4884814,-97.5416006,11z/data=!3m1!4b1!4m3!8m2!3m1!1e1" target="_blank">Google review</a>
                                    </cite>
                            </figcaption>
                        </div>
                    </div>
                </figure>
            </div>

            <div class="logos text-center">
                <div class="container">
                    <h4>
                        <span>
                            Proudly cleaning your Oklahoma City area home
                        </span>
                    </h4>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                            <img alt="Association of Residential Cleaning Services International" class="badge-arcsi" src="/images/arcsi.gif">
                        </div>
                        <div class="col-md-2">
                            <img alt="Angie's List Super Service Award 2016" class="badge-alssa" src="/images/angies-list-super-service-award-2016.jpg">
                        </div>
                        <div class="col-md-2">
                            <img alt="Keep It Local OK" class="badge-kilo" src="/images/keep-it-local-ok-logo.png">
                        </div>
                        <div class="col-md-2">
                            <img alt="Cleaning for a Reason Proud Partner" class="badge-cfar" src="/images/cleaning-for-a-reason-proud-partner.jpg">
                        </div>
                        <div class="col-md-2">
                            <img alt="Angie's List Certified" src="/images/angies-list-certified.gif">
                        </div>
                    </div>
                </div>
            </div>

            <?php partial("footer"); ?>

        </div>
    </div>
</body>
</html>