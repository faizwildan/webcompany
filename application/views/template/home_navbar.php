<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <h5>Annyaman</h5>
            <!-- <img src="<?= base_url('front-end/'); ?>assets/img/logo.png" alt="Logo"> -->
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="<?= base_url('home/index'); ?>">
                    <h3>Annyaman</h3>
                    <!-- <img src="<?= base_url('front-end/'); ?>assets/img/logo.png" alt="Logo"> -->
                </a>

                <div class="main-nav">
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Home
                                </a>

                            <li class="nav-item">
                                <a href="<?= base_url('home/about'); ?>" class="nav-link">About</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Portfolio
                                            <i class='bx bx-chevron-right'></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="<?= base_url('home/portofolio'); ?>" class="nav-link">Portfolio Columns Two</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="<?= base_url('home/team'); ?>" class="nav-link">Team</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            User
                                            <i class='bx bx-chevron-right'></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">My Account</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Log In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Sign In</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="<?= base_url('home/blog'); ?>" class="nav-link">Blog Grid</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('home/contact'); ?>" class="nav-link">Contact</a>
                            </li>
                        </ul>


                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->