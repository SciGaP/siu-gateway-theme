<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta charset="utf-8" />
    <meta content="Science Gateway" name="description" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />

    <meta content="http://siu.edu/_assets/images/SIUlogo_square.png" property="og:image" />
    <meta content="Science Gateway | SIU" property="og:title" />
    <meta content="SIU" property="og:site_name" />
    <meta content="Science Gateway" property="og:description" />

    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/css/base.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/css/map.css" rel="stylesheet" />
    <!--Make this site work in IE, do not remove this script-->
    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <title>Science Gateway | SIU</title>
</head>
<body>
    <header class="bannerinside map" role="banner">
        <div class="logo" itemscope itemtype="http://schema.org/CollegeOrUniversity">
            <a href="/" itemprop="url">
                <img itemprop="logo" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/images/siu-logo.png" alt="SIU Logo" class="vert" /><span class="hide">Southern Illinois University Carbondale</span>
            </a>
            <a href="/" itemprop="url">
                <img itemprop="logo" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/images/siu-logo-horizontal.png" alt="SIU Logo" class="hor" /><span class="hide">Southern Illinois University Carbondale</span>
            </a>
        </div>
        <nav id="nav-collapse" role="navigation">
            <h2 class="hide">Navigation</h2>
            <div id="tac-nav-wrapper">
            </div>
            <div id="nav-wrapper">
                <h3 class="hide">Main Navigation</h3> 
                <ul id="main">
                    <li><a href="/create">Create Account</a>
                    </li>
                    <li><a href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" id="maininside">
            <h1>Science Gateway | SIU</h1>
            <!--The Title-->
                                <h2 class="bigger">SIU Science Gateway</h2>
            <div class="section group">
                <div class="col span_12_of_12 none">
                    <div>
                        <div class="col span_6_of_12 none"><img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/images/big-dawg.jpg" /></div>
                        <div class="col span_6_of_12 white"><p class="bigger">The SIU Science Gateway provides access to SIU's BigDog high performance computing cluster and is part of a network of science gateways used to access numerous state of the art supercomputers at premier universities and research centers. You must have authorization in order to log in to the SIU Science Gateway. For more information, email research-computing@siu.edu or see one of these web sites:</p>
<ul class="navlist-gray-dot">
<li><a href="http://sciencegateways.org/">http://sciencegateways.org/</a></li>
<li><a href="http://oit.siu.edu/rcc/bigdog/">http://oit.siu.edu/rcc/bigdog/</a></li>
<li><a href="https://www.xsede.org/gateways-overview">https://www.xsede.org/gateways-overview</a></li>
    </ul>
                    </div>
                </div>
            </div>
        </main>
        <footer class="dark-gray-bg" role="contentinfo">

                <div class="footer-wrapper">
                    <section class="contact" itemscope itemtype="http://schema.org/CollegeOrUniversity">

                            <a href="mailto:research-computing@siu.eduu" itemprop="email">Webmaster: research-computing@siu.edu</a>
                        </p>
                    </section>
                    <section class="footer-links">
                        <h2 class="hide">Footer Links</h2>
                        <ul>
                            <li><a href="/jobs/">Careers</a>
                            </li>
                            <li><a href="/eoe/">Equal Opportunity Employer</a>
                            </li>
                            <li><a href="http://diversity.siu.edu/title9.html" target="_blank" >Title IX</a>
                            </li>
                            <li><a href="/emergency/index.php">Emergency Procedures</a>
                            </li>
                            <li><a href="http://policies.siu.edu/policies/webprivacy.html" >Web Privacy Policy</a>
                            </li>
                        </ul>
                        <p>©2017 SIU Board of Trustees</p>
                        </p>
                    </section>
                </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript">
        </script>
        <script src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/scripts/responsive-nav.js" type="text/javascript">
        </script>
        <script src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/scripts/modernizr.js" type="text/javascript">
    </script>
        <script src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/scripts/gestures.js" type="text/javascript">
        </script>
        <script src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/scripts/respond.min.js" type="text/javascript">
        </script>
        <!--respond.min allows responsive css3 in explorer 8 and below-->
        <script type="text/javascript">
            var navigation = responsiveNav("#nav-collapse");
        </script>
        <!-- Resource jQuery -->
</body>
</html>
