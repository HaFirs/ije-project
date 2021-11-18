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
                        <li class="nav-item <?php if ($uri->getSegment(1) == 'nios') {
                                                echo 'active';
                                            } ?>">
                            <a href="<?= base_url('nios'); ?>">Home</a>
                        </li>
                        <li class="nav-item <?php if ($uri->getSegment(1) == 'nios_news') {
                                                echo 'active';
                                            } ?>">
                            <a href="<?= base_url('nios_news'); ?>">News</a>
                        </li>
                        <li class="nav-item <?php if ($uri->getSegment(1) == 'nios_project') {
                                                echo 'active';
                                            } ?>">
                            <a href="<?= base_url('nios_project'); ?>">Project</a>
                        </li>
                        <li class="nav-item <?php if ($uri->getSegment(1) == 'nios_contact') {
                                                echo 'active';
                                            } ?>">
                            <a href="<?= base_url('nios_contact'); ?>">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>