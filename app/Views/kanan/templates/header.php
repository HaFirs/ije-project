<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($title); ?></title>
  <link href="assets/kanan/css/jquery.bxslider.css" rel="stylesheet" />
  <link href="assets/kanan/css/style.css" rel="stylesheet">
  <link href="assets/kanan/css/nav.css" rel="stylesheet">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery.com/jquery-3.1.1.js"></script>
  <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="assets/kanan/css/lightbox.min.css">
  <link rel="shortcut icon" type="image/png" href="assets/kanan/image/favicon.png" />

</head>

<body>

  <!--Navigation-->
  <script src="assets/kanan/javascript/jquery-1.11.2.min.js"></script>
  <script src="assets/kanan/javascript/main.js"></script>



  <div class="nav-outer">
    <div class="nav-wrap">

      <nav class="navigation">
        <div class="logo">
          <a href="<?= base_url('kanan'); ?>"><img src="assets/kanan/image/logoheader1.png"></a>
        </div>
        <div class="nav" nav-menu-style="yoga">
          <ul class="nav-menu">
            <li class="nav-item <?php if($uri->getSegment(1)=='kanan#home'){ echo 'active';} ?>"><a href="<?= base_url('kanan'); ?> #home">Home</a></li>
            <li class="nav-item <?php if($uri->getSegment(1)=='kanan#product'){ echo 'active';} ?>"><a href="<?= base_url('kanan'); ?> #product">Product</a></li>
            <li class="nav-item <?php if($uri->getSegment(1)=='kanan#design'){ echo 'active';} ?>"><a href="<?= base_url('kanan'); ?> #design">Design</a></li>
            <li class="nav-item <?php if($uri->getSegment(1)=='kanan#aboutus'){ echo 'active';} ?>"><a href="<?= base_url('kanan'); ?> #aboutus">About Us</a></li>
            <li class="nav-item <?php if($uri->getSegment(1)=='kanan#contact'){ echo 'active';} ?>"><a href="<?= base_url('kanan'); ?> #contact">Contact</a></li>
          </ul>

        </div>

      </nav>

    </div>
  </div>

  <div class="nav-clear"></div>
  <!--Navigation-->