<?php include "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King's Green Cleaning | The Royal Family</title>
    <link rel="canonical" href="http://kingsgreencleaning.com/about/" />

    <?php partial("meta", [
        "page" => "About",
        "uri" => "/about/",
        "description" => "A family owned and operated company with a passion for green cleaning. We use environmentally safe cleaning products to help keep your family, pets, and community clean and healthy.",
        "image" => "/resources/images/kings-green-cleaning-icon.gif"
    ]); ?>

    <?php partial("head"); ?>

</head>

<body id="about">
    <?php partial("analytics"); ?>
    <?php partial("browser-upgrade"); ?>

    <div id="wrap">
        <div id="page">

            <?php partial("header", ["page" => "About"]); ?>

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
                            <a class="btn btn-primary btn-lg" href="mailto:&#x69;&#x6E;&#x66;&#x6F;&#x40;&#x6B;&#x69;&#x6E;&#x67;&#x73;&#x67;&#x72;&#x65;&#x65;&#x6E;&#x63;&#x6C;&#x65;&#x61;&#x6E;&#x69;&#x6E;&#x67;&#x2E;&#x63;&#x6F;&#x6D;?subject=Job%20application%20-%20King%27s%20Green%20Cleaning&body=Please%20provide%20the%20following%20information%20and%20we%27ll%20be%20in%20contact%20with%20you%20soon:%0D%0A%0D%0AName%3A%20%0D%0AEmail%3A%20%0D%0APhone%3A%20%0D%0A%0D%0APlease%20be%20sure%20to%20attach%20your%20resum%C3%A9.">Apply today!</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <?php partial("form"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php partial("footer"); ?>

</body>
</html>
