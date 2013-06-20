<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset(); ?>
        <title><?= $title_for_layout; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- @todo: fill with your company info or remove -->
        <meta name="description" content="Evento criado em Cake">
        <meta name="author" content="Fabrício Souza">

        <!-- Bootstrap CSS -->
        <?= $this->Html->css('bootstrap') ?>
        <?= $this->Html->css('responsive') ?>

        <!-- Flexslider -->
        <?= $this->Html->css('flexslider') ?>

        <!-- Theme style -->
        <?= $this->Html->css('theme-style') ?>

        <!--Your custom colour override-->
        <link href="#" id="colour-scheme" rel="stylesheet">

        <!-- Your custom override -->
        <?= $this->Html->css('colour-blue') ?>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <?= $this->Html->script('html5') ?>
        <![endif]-->

        <!-- Le fav and touch icons - @todo: fill with your icons or remove -->
        <?= $this->Html->meta('icon'); ?>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css'>
    </head>
    <body class="page page-index">
        <div id="navigation" class="wrapper">
            <div class="navbar  navbar-static-top"> 

                <!--Hidden Header Region-->
                <div class="header-hidden">
                    <div class="header-hidden-inner container">
                        <div class="row-fluid">
                            <div class="span4">
                                <h3>About Us</h3>
                                <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
                                <a href="" class="btn btn-mini btn-primary">Find out more</a> </div>
                            <div class="span4"> 
                                <!--@todo: replace with company contact details-->
                                <h3>Contact Us</h3>
                                <address>
                                    <p><abbr title="Phone"><i class="icon-phone"></i></abbr> 019223 8092344</p>
                                    <p><abbr title="Email"><i class="icon-envelope"></i></abbr> info@themelize.me</p>
                                    <p><abbr title="Address"><i class="icon-home"></i></abbr> Sunshine House, Sunville. SUN12 8LU.</p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Header & Branding region-->
                <div class="header">
                    <div class="header-inner container">
                        <div class="row-fluid">
                            <div class="span8"> 
                                <!--branding/logo--> 
                                <a class="brand" href="<?= $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>" title="Página Inicial">
                                    <h1><span>App</span>Strap<span>.</span></h1>
                                </a>
                                <div class="slogan">Responsive HTML Theme</div>
                            </div>

                            <!--header rightside-->
                            <div class="span4">
                                <div id="header-hidden-link"> <a href="#" class="show-hide" title="Click me you'll get a surprise" data-target=".header-hidden"><i></i>Open</a> </div>

                                <!--social media icons-->
                                <div class="social-media pull-right"> 
                                    <!--@todo: replace with company social media details--> 
                                    <a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-facebook"></i></a> <a href="#"><i class="icon-linkedin"></i></a> <a href="#"><i class="icon-google-plus"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="navbar-inner"> 

                        <!--mobile collapse menu button--> 
                        <a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> 

                        <!--everything within this div is collapsed on mobile-->
                        <div class="nav-collapse collapse"> 

                            <!--main navigation-->
                            <ul class="nav" id="main-menu">
                                <li class="home-link"><a href="<?= $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>"><i class="icon-home hidden-phone"></i><span class="visible-phone">Home</span></a></li>
                                <li><a href="<?= $this->Html->url('sobre-evento') ?>" class="menu-item">Sobre o Evento</a></li>
                                <li><a href="<?= $this->Html->url('como-chegar') ?>" class="menu-item">Como Chegar</a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse --> 
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <?= $this->fetch('content'); ?>
        </div>
        
        <!-- FOOTER -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="span3 col">
                        <div class="block contact-block"> 
                            <!--@todo: replace with company contact details-->
                            <h3>Contact Us</h3>
                            <address>
                                <p><abbr title="Phone"><i class="icon-phone"></i></abbr> 019223 8092344</p>
                                <p><abbr title="Email"><i class="icon-envelope"></i></abbr> info@appstrap.me</p>
                                <p><abbr title="Address"><i class="icon-home"></i></abbr> Sunshine House, Sunville. SUN12 8LU.</p>
                            </address>
                        </div>
                    </div>
                    <div class="span5 col">
                        <div class="block">
                            <h3>About Us</h3>
                            <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
                        </div>
                    </div>
                    <div class="span4 col">
                        <div class="block newsletter">
                            <h3>Newsletter</h3>
                            <p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
                            <!--@todo: replace with mailchimp code-->
                            <form class="form-inline">
                                <div class="input-append">
                                    <input class="input-medium" type="text" placeholder="Email" />
                                    <button class="btn btn-primary" type="button">Go!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div id="toplink"><a href="#top" class="top-link" title="Back to top">Back To Top <i class="icon-chevron-up"></i></a></div>
                    <!--@todo: replace with company copyright details-->
                    <div class="subfooter">
                        <div class="span6">
                            <p>Site template by <a href="#">AppStrap</a> | Copyright 2012 &copy; AppStrap</p>
                        </div>
                        <div class="span6">
                            <ul class="inline pull-right">
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--Scripts --> 
        <?= $this->Html->script('jquery'); ?>

        <!-- @todo: remove unused Javascript for better performance --> 
        <?= $this->Html->script('bootstrap-transition'); ?>
        <?= $this->Html->script('bootstrap-alert'); ?>
        <?= $this->Html->script('bootstrap-affix'); ?>
        <?= $this->Html->script('bootstrap-modal'); ?>
        <?= $this->Html->script('bootstrap-dropdown'); ?>
        <?= $this->Html->script('bootstrap-scrollspy'); ?>
        <?= $this->Html->script('bootstrap-tab'); ?>
        <?= $this->Html->script('bootstrap-tooltip'); ?>
        <?= $this->Html->script('bootstrap-popover'); ?>
        <?= $this->Html->script('bootstrap-button'); ?>
        <?= $this->Html->script('bootstrap-collapse'); ?>
        <?= $this->Html->script('bootstrap-carousel'); ?>
        <?= $this->Html->script('bootstrap-typeahead'); ?>

        <!--Non-Bootstrap JS--> 
        <?= $this->Html->script('jquery.quicksand'); ?>
        <?= $this->Html->script('jquery.flexslider-min'); ?>

        <!--Custom scripts mainly used to trigger libraries --> 
        <?= $this->Html->script('script'); ?>
    </body>
</html>