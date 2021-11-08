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
                                    <input class="form-control" id="name" name="name" placeholder="Your name *" type="text" required/>
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
                            <div class="google-map" id="map" style="height:354px;"></div>
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
            <footer id="footer" role="contentinfo">
                <section class="section swatch-yellow-black has-top">
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
                                            <a href="<?= base_url("home"); ?>">
                                                <i><img src="assets/nios/assets/images/ije-yellow.png" alt="ije-group.png" style="height: 50px; margin-bottom: 15px;"></i>
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
                                    <div class="textwidget">Night Owl Studio, 2015 ALL RIGHTS RESERVED
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
        <script src="assets/js/packages.min.js"></script>
        <script src="assets/js/theme.min.js"></script>
        <script src="assets/js/contact.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="assets/js/map.js"></script>
    </body>
</html>