<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= esc($title); ?></title>
        <link rel="icon" type="image/x-icon" href="assets/nios/assets/images/favicons/favicon.ico" />
        <link rel="icon" type="image/png" href="assets/nios/assets/images/favicons/favicon.png" />
        <!-- For iPhone 4 Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/nios/assets/images/favicons/apple-touch-icon-114x114-precomposed.png">
        <!-- For iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/nios/assets/images/favicons/apple-touch-icon-72x72-precomposed.png">
        <!-- For iPhone: -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/favicons/apple-touch-icon-60x60-precomposed.png">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/nios/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/theme.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/color-defaults.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-beige-black.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-black-beige.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-black-white.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-black-yellow.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-blue-white.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-green-white.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-red-white.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-white-black.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-white-blue.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-white-green.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-white-red.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/swatch-yellow-black.min.css">
        <link rel="stylesheet" href="assets/nios/assets/css/fonts.min.css" media="screen">
    </head>
    <body>
        <header id="masthead" class="navbar navbar-sticky swatch-yellow-black" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#home" class="navbar-brand">
                        <img src="assets/nios/assets/images/nios-logo.png" style="height: 30px; margin-bottom: 8px;" alt="One of the best themes ever"> Night Owl Studio
                    </a>
                </div>
                <nav class="collapse navbar-collapse main-navbar" role="navigation">
                    <div class="sidebar-widget widget_search pull-right">
                        <form>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search here....">
                                <span class="input-group-btn">
                            <button class="btn" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item <?php if($uri->getSegment(1)=='nios'){ echo 'active';} ?>">
                            <a href="<?= base_url('nios'); ?>">Home</a>
                        </li>
                        <li class="nav-item <?php if($uri->getSegment(1)=='nios_news'){ echo 'active';} ?>">
                            <a href="<?= base_url('nios_news'); ?>">News</a>
                        </li>
                        <li class="nav-item <?php if($uri->getSegment(1)=='nios_project'){ echo 'active';} ?>">
                            <a href="<?= base_url('nios_project'); ?>">Project</a>
                        </li>
                        <li class="nav-item <?php if($uri->getSegment(1)=='nios_contact'){ echo 'active';} ?>">
                            <a href="<?= base_url('nios_contact'); ?>">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>