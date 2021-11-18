<?= $this->extend('nios/layout/template_contact'); ?>
<?= $this->section('content'); ?>


<div id="content" role="main">
    <section class="section swatch-yellow-black">
        <div class="container">
            <header class="section-header underline">
                <h1 class="headline hyper hairline">Want to talk?</h1>
                <p class="big">Address: Jln.Pantung No.11, Palangka Raya, Central Kalimantan, Indonesia
                </p>
                <p class="big">Contact details: Phone: 089662276109.</p>
            </header>
            <div class="row">
                <div class="col-md-6">
                    <form id="contactForm" class="contact-form">
                        <div class="form-group form-icon-group">
                            <input class="form-control" id="name" name="name" placeholder="Your name *" type="text" required />
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group form-icon-group">
                            <input class="form-control" id="email" name="email" placeholder="Your email *" type="email" required>
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="form-group form-icon-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Your message" rows="10" required></textarea>
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-icon btn-icon-right" type="submit">
                                Send email
                                <div class="hex-alt">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </button>
                        </div>
                    </form>
                    <div id="messages"></div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.830273904701!2d113.93057761524992!3d-2.21759303797772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb39ffcc47f27%3A0xf9a4363b60e91743!2sIJE%20Group%20Head%20Office!5e0!3m2!1sen!2sid!4v1635946368303!5m2!1sen!2sid" width="100%" height="355" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="section swatch-black-yellow has-top">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100 L50 0 L100 100" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">
            <header class="section-header underline">
                <h1 class="headline super hairline">Got an idea?</h1>
                <p class="">He&#x27;s the exact opposite of the hero. And most times they&#x27;re friends, like you and me! I should&#x27;ve known way back when... You know why, David? Because of the kids. They called me Mr Glass.</p>
            </header>
            <div class="text-center">
                <a class="btn btn-primary btn-lg btn-icon-right pull-center" href="#">
                    Lets make it happen
                    <div class="hex-alt hex-alt-big">
                        <i class="fa fa-rocket" data-animation="tada"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <?= $this->endSection(); ?>