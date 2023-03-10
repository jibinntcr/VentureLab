<!-- Topbar Start -->
<div class="container-fluid bg-dark text-light px-0 py-2">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <span class="fa fa-phone-alt me-2"></span>
                <span>+91 82815 50638</span>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <span class="far fa-envelope me-2"></span>
                <span>info@infinio.co.in</span>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <!-- <span>Follow Us:</span> -->
                <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0">Venture' Lab</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <?php $pageName = basename($_SERVER['PHP_SELF']); ?>
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <?php
            // INDEX ACTIVE CHECKING
            if ($pageName == 'index.php') {
                $indexActive = "active";
            } else {
                $indexActive = "";
            }
            // ABOUT ACTIVE CHECKING
            if ($pageName == 'about.php') {
                $aboutActive = "active";
            } else {
                $aboutActive = "";
            }
            // CONTACT ACTIVE CHECKING
            if ($pageName == 'contact.php') {
                $contactActive = "active";
            } else {
                $contactActive = "";
            }
            // COMMUNITY ACTIVE CHECKING
            if ($pageName == 'community.php') {
                $communityActive = "active";
            } else {
                $communityActive = "";
            }


            ?>
            <a href="index.php" class="nav-item nav-link <?php echo  $indexActive ?>">Home</a>
            <a href="index.php#about" class="nav-item nav-link <?php echo  $aboutActive ?>">About</a>
            <a href="community.php" class="nav-item nav-link <?php echo  $communityActive ?>">Community</a>

            <!-- <a href="service.html" class="nav-item nav-link">Events</a> -->
            <a href="#" class="nav-item nav-link">News &amp; Events</a>
            <a href="index.php#team" class="nav-item nav-link">Team</a>
            <a href="contact.php" class="nav-item nav-link <?php echo  $contactActive ?>">Contact</a>
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="quote.html" class="dropdown-item">Free Quote</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> -->
            <!-- <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Get A Quote<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div> -->
</nav>
<!-- Navbar End -->