<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | The Royal Family</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/about/" />

    <?php partial("head"); ?>

    <?php partial("meta", array(
        "page" => "About",
        "uri" => "/about/",
        "description" => "A family owned and operated company with a passion for green cleaning. We use environmentally safe cleaning products to help keep your family, pets, and community clean and healthy.",
        "image" => "/images/kings-green-cleaning-icon.gif"
    )); ?>
</head>

<body id="about">
    <?php partial("analytics"); ?>
    <?php partial("browser-upgrade"); ?>

    <div id="wrap">
        <div id="page">

            <?php partial("header", array("page" => "About")); ?>

            <div class="hero-secondary">
                <div class="container">
                    <h1>
                        The Royal Family
                    </h1>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <p>
                            King&rsquo;s Green Cleaning is a family owned and operated business established in 2006. We started the business to offer luxury cleaning service tailored to meet each of our client&rsquo;s individual needs. After realizing the effects of traditional cleaning products on our own health, we made the switch to green, eco-friendly cleaning products.
                        </p>
                        <p>
                            At King&rsquo;s Green Cleaning nothing makes us happier than giving our clients back precious time for the things they enjoy and people they cherish. We love our employees and clients and we look forward to being the premiere green cleaning service in the OKC area.
                        </p>
                        <h2>
                            Join Our Team
                        </h2>
                        <p>
                            We're a fun and exciting Oklahoma City company always looking to add new members to our family. If you:
                        </p>
                        <div class="row skills">
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        can pass a background check
                                    </li>
                                    <li>
                                        are comfortable with technology
                                    </li>
                                    <li>
                                        can work in a team environment
                                    </li>
                                    <li>
                                        are detail oriented, but efficient
                                    </li>
                                </ul>                                
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        have good customer service skills
                                    </li>
                                    <li>
                                        have a positive attitude
                                    </li>
                                    <li>
                                        are a great communicator
                                    </li>
                                    <li>
                                        can follow company policies
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            We'd love to have you as part of our team. <strong>Paid training is provided.</strong>
                        </p>
                        <p>
                            <a class="btn btn-primary btn-lg" href="mailto:&#x69;&#x6E;&#x66;&#x6F;&#x40;&#x6B;&#x69;&#x6E;&#x67;&#x73;&#x67;&#x72;&#x65;&#x65;&#x6E;&#x63;&#x6C;&#x65;&#x61;&#x6E;&#x69;&#x6E;&#x67;&#x2E;&#x63;&#x6F;&#x6D;?subject=Job%20application%20-%20King%27s%20Green%20Cleaning&body=Please%20provide%20the%20following%20information%20and%20we%27ll%20be%20in%20contact%20with%20you%20soon:%0D%0A%0D%0AName%3A%20%0D%0AEmail%3A%20%0D%0APhone%3A%20%0D%0A%0D%0APlease%20be%20sure%20to%20attach%20your%20resum%C3%A9.">Apply today!</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <?php partial("form-mailchimp"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php partial("footer"); ?>

</body>
</html>
