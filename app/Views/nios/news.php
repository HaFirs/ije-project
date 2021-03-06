<?= $this->extend('nios/layout/template'); ?>
<?= $this->section('content'); ?>


<div id="content" role="main">
    <section class="section swatch-black-yellow">
        <div class="container">
            <header class="section-header no-underline">
                <h1 class="headline hyper hairline">Page under construction !</h1>
            </header>
            <div class="text-center">
                <img src="assets/nios/assets/images/construction.png" alt="Page not found!">
            </div>
        </div>
    </section>
    <section class="section swatch-yellow-black has-top">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100 L50 0 L100 100" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">
            <header class="section-header underline text-center">
                <h1 class="headline super hairline">What now?</h1>
                <p class="">Sorry, the page you are looking for cannot be found here. Head back to the home page and start from there</p>
            </header>
            <div class="text-center">
                <a class="btn btn-primary btn-lg btn-icon-right pull-center" href="index.html">
                    take me home
                    <div class="hex-alt hex-alt-big">
                        <i class="fa fa-home" data-animation="tada"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <?= $this->endSection(); ?>