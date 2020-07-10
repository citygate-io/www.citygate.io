<?php

if (file_exists('../vendor/autoload.php')) {
	require('../vendor/autoload.php');
} elseif (file_exists('../../vendor/autoload.php')) {
	require('../../vendor/autoload.php');
}

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function alert($type, $msg) {
	echo("<div class='panel-".$type." mvm'><p>".$msg."</p></div>");
	echo("<br>");
}

$navbar_links = array(
    // array("<name>", "<URL>"),
    array("Home", "/"),
    array("The Team", "/team"),
    array("Our Projects", "/projects"),
    array("Contact Us", "/contact"),
    // array("Service Status", "/status"),
    array("Service Status", "https://status.citygate.io"),
);
?>

<!DOCTYPE html>
<html class="notie no-js" lang="en">
<head>
    <title> <?php echo($page_title . " - CityGate"); ?> </title>

    <meta http-equiv="x-ua-compatible" content="IE=Edge" />
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />

    <!--- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- BCU Common Design Language -->
    <link href="https://bcucdn.azureedge.net/cdl/v1.5/css/cdl.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://bcucdn.azureedge.net/cdl/v1.5/scripts/cdl.plugins.head.min.js"></script>

    <link rel="shortcut icon" type="image/png" href="/assets/img/favicon.png" />

</head>

<body>
    <header class="header-main bg-primary">
        <div class="page m-page">
            <div class="bcu-header clear-fix">
                <div class="left-col">
                    <a id="aTop"></a>
                    <a tabindex="1" href="/" class="block bcu-logo-new"></a>
                    <div class="off-screen"><h1>Birmingham City University</h1></div>
                    <p id="skip-links" class="off-screen">
                        <a href="#aMainContent" tabindex="2"><span class="bold">Skip to :</span>main content</a> |
                        <a href="#aMainNav" tabindex="3"><span class="bold">Skip to :</span>main menu</a> |
                        <a href="#aSectionNav" tabindex="4"><span class="bold">Skip to :</span>section menu</a>
                    </p>
                </div>
                <div class="right-col">
                      <a id="aTop"></a>
                      <object tabindex="1" title="CityGate" type="image/svg+xml" data="/assets/img/logo.svg" height="62px">
                      <div class="primary-font-medium"><h1 style="color: #ffffff; padding-top: 5%;">CityGate</h1></div>
                      </object>
                  </div>
            </div>
        </div>
    </header>

    <a id="aMainNav"></a>
    <nav id="main-navigation" class="main-navigation">
        <div class="hide-on-desktop header-mobile-buttons">
            <ul class="base-tabs" role="menubar">
                <li class="size1of3 bc7 bw1 br-line" role="menuitem">
                    <a href="javascript:void(0)" class="no-dec header-mobile-buttons_links pvm" id="ToggleNav" title="Open main menu" aria-controls="nav" aria-owns="nav" aria-hidden="false">
                        <span class="icon-menu delta js-toggle-icon"></span><span class="off-screen">Open menu</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bg-white header-search--mobile hide-on-desktop hidden pal cf" id="navMobileSearch">
            <form action="/Home/Search" method="POST" class="site-search">
                <label class="header-search_label off-screen" for="site-search-term">Enter a search term...</label>
                <div class="size4of5 left overflow-hidden">
                    <input class="block size1of1 left pam" id="site-search-term" name="term" type="text" maxlength="100" placeholder="Search the BCU website">
                </div>
                <div class="size1of5 left">
                    <button class="right bcu-button bcu-button-green block size1of1" type="submit">Search</button>
                </div>
            </form>
        </div>

        <ul id="nav" class="cf nav-collapse nav-collapse nav-collapse-0 closed" role="menu" aria-hidden="true" style="transition: max-height 400ms; position: absolute;">
            <?php foreach ($navbar_links as $link) { ?>
            <li class="hover-reveal" role="menuitem"><a class="main-nav_link j-top-link-touch primary-font" href="<?php echo($link[1]); ?>"><?php echo($link[0]); ?></a></li>
            <?php } ?>
        </ul>
    </nav>

    <div class="clear"></div>
    <div id="main" class="col-row page m-page center mvl">
        <a id="aMainContent"></a>
        <ul id="breadcrumb" class="base-tabs breadcrumb mbl">
            <li class="bread-crumb-color">
                <a class="home" title="Birmingham City University Home Page" href="/">
                    <span class="icon-home bread-home" aria-hidden="true"></span>
                    <span class="off-screen">Birmingham City University Home Page</span>
                    <span class="icon-right-open-mini inline-block chevron"></span>
                </a>
            </li>

            <li class="bread-crumb-current">
                <span class="block current-content"><?php echo($page_title); ?></span>
            </li>
        </ul>

        <div class="panel-warning mvm">
          <!-- <h5>COVID-19</h5> -->
          <p>Birmingham City University is currently asking all staff and students to work from home where possible. We would like to reassure you that the CityGate team are able to work remotely and the platform is still online.</p>
        </div><br>
