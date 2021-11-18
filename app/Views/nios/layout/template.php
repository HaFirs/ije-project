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

    <?= $this->include('nios/layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>

    <footer id="footer" role="contentinfo">
        <section class="section swatch-black-yellow has-top">
            <div class="decor-top">
                <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0 L50 100 L100 0 L100 100 L0 100" stroke-width="0"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="swatch_social-2" class="sidebar-widget  widget_swatch_social">
                            <ul class="unstyled inline small-screen-center social-icons social-background social-big">
                                <li>
                                    <a href="<?= base_url("ije"); ?>">
                                        <i><img src="assets/nios/assets/images/ije-dark.png" alt="ije-group.png" style="height: 50px; margin-bottom: 15px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.oxygenna.com">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.oxygenna.com">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.oxygenna.com">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="text-4" class="sidebar-widget widget_text">
                            <div class="textwidget">
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Night Owl Studio by <a href="<?= base_url('ije'); ?>" target="_blank">IJE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    </div>
    <a class="go-top hex-alt" href="javascript:void(0)">
        <i class="fa fa-angle-up"></i>
    </a>
    <script src="assets/nios/assets/js/packages.min.js"></script>
    <script src="assets/nios/assets/js/theme.min.js"></script>
</body>

</html>