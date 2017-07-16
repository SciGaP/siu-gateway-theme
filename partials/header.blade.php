
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/css/style.css"/>

<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta charset="utf-8" />
<meta content="Science Gateway" name="description" />
<meta content="width=device-width,initial-scale=1" name="viewport" />

<meta content="http://siu.edu/_assets/images/SIUlogo_square.png" property="og:image" />
<meta content="Science Gateway | SIU" property="og:title" />
<meta content="SIU" property="og:site_name" />
<meta content="Science Gateway" property="og:description" />

<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300" rel="stylesheet" type="text/css" /
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/css/map.css"/>

<!--Make this site work in IE, do not remove this script-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<title>Science Gateway | SIU</title>

<header class="bannerinside map" role="banner">
    <div class="logo" itemscope itemtype="http://schema.org/CollegeOrUniversity">
        <a href="/" itemprop="url">
            <img itemprop="logo" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/images/siu-logo.png" alt="SIU Logo" class="vert" /><span class="hide">Southern Illinois University Carbondale</span>
        </a>
        <a href="/" itemprop="url">
            <img itemprop="logo" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/images/siu-logo-horizontal.png" alt="SIU Logo" class="hor" /><span class="hide">Southern Illinois University Carbondale</span>
        </a>
    </div>
</header>