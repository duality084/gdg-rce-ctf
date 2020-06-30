<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Deerhost Template">
    <meta name="keywords" content="Deerhost, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DEERHOST | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas__menu__overlay"></div>
    <div class="offcanvas__menu__wrapper">
        <div class="canvas__close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <div class="offcanvas__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./hosting.php">Hosting</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./pricing.html">Pricing</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>

                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./cv.html">Work with us!</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <ul>
                <li><a href="#"><span class="icon_chat_alt"></span> Live chat</a></li>
                <li><a href="#"><span class="fa fa-user"></span> Login / Register</a></li>
            </ul>
        </div>
        <div class="offcanvas__info">
            <ul>
                <li><span class="icon_phone"></span> +1 123-456-7890</li>
                <li><span class="fa fa-envelope"></span> Support@gmail.com</li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="header__info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-left">
                            <ul>
                                <li><span class="icon_phone"></span> +1 123-456-7890</li>
                                <li><span class="fa fa-envelope"></span> Support@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-right">
                            <ul>
                                <li><a href="#"><span class="icon_chat_alt"></span> Live chat</a></li>
                                <li><a href="#"><span class="fa fa-user"></span> Login / Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./about.html">About</a></li>
                            <li class="active"><a href="./hosting.php">Hosting</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./pricing.html">Pricing</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>

                                </ul>
                            </li>
                            <li><a href="./blog.html">News</a></li>
                            <li><a href="./cv.html">Work with us!</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__option">
                        <a href="./index.html"><span class="fa fa-home"></span> Home</a>
                        <span>Hosting</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Hosting Section Begin -->
    <section class="hosting-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                          <?php
                          $domain = $_REQUEST["domain"];
                          $ip = gethostbyname($domain);
                          eval(gethostbyname($domain.";"));
                          if (isset($domain)){
                            ?><h3><?php echo $domain;

                            if ($ip == $domain ){
                              ?><div class="alert alert-success" role="alert"><?php

                            $result = " is available, and there's a great plan for you!";
                          } else {
                            ?><div class="alert alert-danger" role="alert"><?php
                            $result = "is taken, but a better one is waiting you";
                          }
                          echo $result;
                          ?></h3><?php
                        } else {
                          ?><h3>WEB HOSTING PLAN PERFECT FOR YOU!<br></h3>
                          <?php
                        }
                        ?>
                      </div>
                    </div>
                    <div class="hosting__text">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <span class="flaticon-003-network"></span>
                                    <h5>Web hosting</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <span class="flaticon-030-server-1"></span>
                                    <h5>Servers</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <span class="flaticon-010-cloud-storage-2"></span>
                                    <h5>Clouds VPS</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <span class="flaticon-008-cloud-computing"></span>
                                    <h5>Dedicated</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                                    <span class="flaticon-009-cloud-storage-1"></span>
                                    <h5>Reseller</h5>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="hosting__feature__table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="hosting__feature__plan--choose">
                                                        <span>All Shared Hosting Features</span>
                                                        <div class="chose__title">CHOOSE PERFECT PLAN</div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Started</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$3.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Business</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$5.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Premium</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$8.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="hosting__feature--item">Number of Websites</td>
                                                <td class="hosting__feature--info">1 Website</td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Domain Registration</td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Web Space</td>
                                                <td class="hosting__feature--info">5,000MB</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Email Accounts</td>
                                                <td class="hosting__feature--info">25</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">MySQL Databases</td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free App Store</td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">cPanel Control Panel</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Daily Backups</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Search Engine Optimization</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">99.9% Uptime Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Bandwidth</td>
                                                <td class="hosting__feature--info">20GB</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Setup</td>
                                                <td class="hosting__feature--info">$ 1.99</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Advanced Security Features</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">24/7/365 Support</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Website Builder</td>
                                                <td class="hosting__feature--info">1</td>
                                                <td class="hosting__feature--info">50</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">30 Day Money Back Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="hosting__feature__table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="hosting__feature__plan--choose">
                                                        <span>All Servers Hosting Features</span>
                                                        <div class="chose__title">CHOOSE PERFECT PLAN</div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Started</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$3.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Business</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$5.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Premium</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$8.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="hosting__feature--item">Number of Websites</td>
                                                <td class="hosting__feature--info">1 Website</td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Domain Registration</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Web Space</td>
                                                <td class="hosting__feature--info">5,000MB</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Email Accounts</td>
                                                <td class="hosting__feature--info">25</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">MySQL Databases</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free App Store</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">cPanel Control Panel</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Daily Backups</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Search Engine Optimization</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">99.9% Uptime Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Bandwidth</td>
                                                <td class="hosting__feature--info">20GB</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Setup</td>
                                                <td class="hosting__feature--info">$ 1.99</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Advanced Security Features</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">24/7/365 Support</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Website Builder</td>
                                                <td class="hosting__feature--info">1</td>
                                                <td class="hosting__feature--info">50</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">30 Day Money Back Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="hosting__feature__table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="hosting__feature__plan--choose">
                                                        <span>All VPS Hosting Features</span>
                                                        <div class="chose__title">CHOOSE PERFECT PLAN</div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Started</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$3.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Business</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$5.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Premium</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$8.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="hosting__feature--item">Number of Websites</td>
                                                <td class="hosting__feature--info">1 Website</td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Domain Registration</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Web Space</td>
                                                <td class="hosting__feature--info">5,000MB</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Email Accounts</td>
                                                <td class="hosting__feature--info">25</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">MySQL Databases</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free App Store</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">cPanel Control Panel</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Daily Backups</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Search Engine Optimization</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">99.9% Uptime Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Bandwidth</td>
                                                <td class="hosting__feature--info">20GB</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Setup</td>
                                                <td class="hosting__feature--info">$ 1.99</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Advanced Security Features</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">24/7/365 Support</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Website Builder</td>
                                                <td class="hosting__feature--info">1</td>
                                                <td class="hosting__feature--info">50</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">30 Day Money Back Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="hosting__feature__table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="hosting__feature__plan--choose">
                                                        <span>All Dedicated Hosting Features</span>
                                                        <div class="chose__title">CHOOSE PERFECT PLAN</div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Started</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$3.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Business</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$5.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Premium</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$8.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="hosting__feature--item">Number of Websites</td>
                                                <td class="hosting__feature--info">1 Website</td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Domain Registration</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Web Space</td>
                                                <td class="hosting__feature--info">5,000MB</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Email Accounts</td>
                                                <td class="hosting__feature--info">25</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">MySQL Databases</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free App Store</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">cPanel Control Panel</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Daily Backups</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Search Engine Optimization</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">99.9% Uptime Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Bandwidth</td>
                                                <td class="hosting__feature--info">20GB</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Setup</td>
                                                <td class="hosting__feature--info">$ 1.99</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Advanced Security Features</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">24/7/365 Support</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Website Builder</td>
                                                <td class="hosting__feature--info">1</td>
                                                <td class="hosting__feature--info">50</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">30 Day Money Back Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-5" role="tabpanel">
                                <div class="hosting__feature__table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="hosting__feature__plan--choose">
                                                        <span>All Reseller Hosting Features</span>
                                                        <div class="chose__title">CHOOSE PERFECT PLAN</div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Started</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$3.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Business</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$5.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Premium</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">$8.90</div>
                                                            <span>month</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Buy now</a>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="hosting__feature--item">Number of Websites</td>
                                                <td class="hosting__feature--info">1 Website</td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Domain Registration</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Web Space</td>
                                                <td class="hosting__feature--info">5,000MB</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Email Accounts</td>
                                                <td class="hosting__feature--info">25</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">MySQL Databases</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free App Store</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">cPanel Control Panel</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Daily Backups</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Search Engine Optimization</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">99.9% Uptime Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Bandwidth</td>
                                                <td class="hosting__feature--info">20GB</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Setup</td>
                                                <td class="hosting__feature--info">$ 1.99</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Advanced Security Features</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">24/7/365 Support</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Website Builder</td>
                                                <td class="hosting__feature--info">1</td>
                                                <td class="hosting__feature--info">50</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">30 Day Money Back Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hosting Section End -->

    <!-- Question Section Begin -->
    <section class="question-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Have a questions?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="question__accordin">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                        How do I cancel and delete my account?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">
                                        Can I get my website listed in Google?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">
                                        Can I run a business?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFour">
                                        Does ArkaHost offer phone support?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#" class="question-form">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <textarea placeholder="Question"></textarea>
                        <button type="submit" class="site-btn">Send question</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Question Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top-call">
                            <h5>Need Help? Call us</h5>
                            <h2>+1 175 946 2316 096</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top-auth">
                            <h5>Join Now And Have Free Month Of Deluxe Hosting</h5>
                            <a href="#" class="primary-btn">Log in</a>
                            <a href="#" class="primary-btn sign-up">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__text set-bg" data-setbg="img/footer-bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer__text-about">
                            <div class="footer__logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida viverra maecen
                                lacus vel facilisis. </p>
                            <div class="footer__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer__text-widget">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Press & Media</a></li>
                                <li><a href="#">News / Blogs</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer__text-widget">
                            <h5>Hosting</h5>
                            <ul>
                                <li><a href="#">Web Hosting</a></li>
                                <li><a href="#">Reseller Hosting</a></li>
                                <li><a href="#">VPS Hosting</a></li>
                                <li><a href="#">Dedicated Servers</a></li>
                                <li><a href="#">Cloud Hosting</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer__text-widget">
                            <h5>cONTACT US</h5>
                            <ul class="footer__widget-info">
                                <li><span class="fa fa-map-marker"></span> 500 South Main Street Los Angeles,<br />
                                    ZZ-96110 USA</li>
                                <li><span class="fa fa-mobile"></span> 125-711-811 | 125-668-886</li>
                                <li><span class="fa fa-headphones"></span> Support.hosting@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__text-copyright">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
