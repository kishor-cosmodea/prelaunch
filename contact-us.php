<!doctype html>

<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Prelaunch | Contact Us</title>

    <!-- 120 word description for SEO purposes goes here. Note: Usage of lang tag. -->
    <meta name="description" lang="en" content="">

    <!-- Keywords to help with SEO go here. Note: Usage of lang tag.  -->
    <meta name="keywords" lang="en" content="">

    <!-- View-port Basics: http://mzl.la/VYREaP -->
    <!-- This meta tag is used for mobile device to display the page without any zooming,
         so how much the device is able to fit on the screen is what's shown initially.
         Remove comments from this tag, when you want to apply media queries to the website. -->
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <!-- To adhear no-cache for Chrome 
    <meta http-equiv="cache-control" content="no-store, no-cache, must-revalidate" />
    <meta http-equiv="Pragma" content="no-store, no-cache" />
    <meta http-equiv="Expires" content="0" /> -->
    <meta name="robots" content="index, follow" />

    <!-- Place favicon.ico in the root directory: mathiasbynens.be/notes/touch-icons -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />

    <!-- Default style-sheet is for 'media' type screen (color computer display).  -->
    <link rel="stylesheet" media="screen" href="assets/css/style.css" >

    <!--Google Open Sans font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!--jQuery -->
    <script src="assets/vendor/jquery-2.2.0.min.js"></script>
    <!-- <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->

    <!-- For IE9 browsers. -->
    <!--[if IE 9 ]><html class="ie9"> <![endif]-->

    <!-- html5shiv aka html5 shim. Supporting HTML5 and CSS for IE browsers less than IE9. -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">

        <!-- Header starts here -->
        <header>
            <div class="wrapper cf">
                <div class="main">
                    <h1>
                        <a href="index.php" title="Prelaunch">Prelaunch</a>
                    </h1>
                </div>
                <a href="#" title="Home" id="menu">Home</a>
                <nav>
                    <ul>
                        <li><a href="/fortune-forever/index.php" title="Fortune-Forever">Fortune-Forever</a></li>
                        <li><a href="/luxury/thepark/" title="The Park">The Park</a></li>
                        <li><a href="contact-us.php" title="Contact Us">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Header ends here -->

        <!-- content starts here -->
        <div class="content">
            <div class="wrapper">
                <div class="cont-content">
                    <h2>CONTACT US</h2>
                    <div class="get-user">
                        <form method="post" action="success.php">
                            Name*<input type="text" name="name" id="name">
                            E-mail*<input type="text" name="email" id="email">
                            Mobile*<input type="text" name="mobile" id="mobile">
                            City<input type="text" name="city" id="city">
                            <button id="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content ends here -->

        <!-- footer starts here -->
        <footer>
            <div class="wrapper">
                <p>Copyright © 2016 <a href="index.php" title="PreLaunchHouse">PreLaunchHouse</a></p>
                <p><a href="privacy-policy.php" title="Privacy Policy">Privacy Policy</a></p>
            </div>
        </footer>
        <!-- footer ends here -->

    </div>


    <script src="assets/js/script.js"></script>
</body>
</html>
