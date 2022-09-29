<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us | Teyake</title>
    <link rel="stylesheet" href="css/style-reset.css" />
    <link rel="stylesheet" href="css/about-us.css" />
</head>

<body id="top">
    <!-- Container for the whole document, replacement for the body tag to avoid styling the tag directly -->
    <div class="container text-white">
        <?php include "../shared/includes/mobile-header.php" ?>
        <?php include "../shared/includes/desktop-header.php" ?>
        <?php include "../shared/includes/sidebar.php" ?>

        <!-- Main container -->
        <main>
            <div class="main-container flex items-center justify-center">
                <!-- <img src="media/images/about_us.jpg" alt="People taking exams">-->
                <h1 class="accented">About Us</h1>
            </div>
            <div class="about_us_text flex align-center justify-center flex-row">
                <div class="text-content">
                    <p class="text-primary">

                        Teyake.com was built by visionary team who wanted to change the problems that arise around exam
                        giving techniques. As we know, the current education system is challenged with several issues
                        like inadequate platforms that fulfills the needs of teachers
                        and students. The team behind Teyake.com seek to solve this problem by providing a secure and
                        trusted platform for teachers that allows them to create exams which they can easily manage
                        easily and track records and scores of their
                        students without further ado.
                    </p>
                </div>

                <div class="img-content">
                    <img src="media/images/about/about_us2.jpg" alt="Team Work">
                </div>
            </div>


            <div class="about_us_text flex align-center justify-center flex-row">
                <div class="img-content">
                    <img src="media/images/about/about_us3.jpg" alt="Team Work">
                </div>

                <div class="text-content">
                    <p class="text-primary">

                        The team consists of six members from Addis Ababa Science and Technology University. The team
                        believed that digital exams offered advantages such as auto-marking and integrated tools and
                        could eliminate problems like illegible handwriting and excessive
                        paper waste. At the time, few digital exam platforms existed, and the ones that did felt
                        over-complicated and out of touch with a teacher’s real needs in the classroom. Determined to
                        find a solution that worked in the real world
                        for teachers
                    </p>
                </div>
            </div>
            <div class="btn-container flex justify-center gap-4">
                <a href="signin.php"> <button class="btn try-it-btn pointer transition">Try It Now</button></a>
                <a href="support.php"><button class="btn-light how-btn pointer transition">How It
                        Works</button></a>
            </div>
            <div class="team-container flex flex-col gap-4">
                <h2 class="text-center text-primary ">Our Team</h2>
                <div class="our_team flex justify-center gap-4">
                    <div class="team-member flex flex-col">
                        <div class="img-team-mb"></div>
                        <div class="card-txt-container">
                            <h3 class="text-secondary">Yohannes Teshome</h3>
                            <p class="text-primary">Graphics Designer</p>
                        </div>
                    </div>
                    <div class="team-member flex flex-col">
                        <div class="img-team-mb"></div>
                        <div class="card-txt-container">
                            <h3 class="text-secondary">Yohannes Assefa</h3>
                            <p class="text-primary">Front-end Developer</p>
                        </div>
                    </div>
                    <div class="team-member flex flex-col">
                        <div class="img-team-mb"></div>
                        <div class="card-txt-container">
                            <h3 class="text-secondary">Yohannes Mesganaw</h3>
                            <p class="text-primary">Front-end Developer</p>
                        </div>
                    </div>
                    <div class="team-member flex flex-col">
                        <div class="img-team-mb"></div>
                        <div class="card-txt-container">
                            <h3 class="text-secondary">Yohannes Fantahun</h3>
                            <p class="text-primary">Front-end Developer</p>
                        </div>
                    </div>
                    <div class="team-member flex flex-col">
                        <div class="img-team-mb"></div>
                        <div class="card-txt-container">
                            <h3 class="text-secondary">Tsion Moges</h3>
                            <p class="text-primary">Front-end Developer</p>
                        </div>
                    </div>
                    <div class="team-member flex flex-col">
                        <div class="img-team-mb"></div>
                        <div class="card-txt-container">
                            <h3 class="text-secondary">Yohannes Abebe</h3>
                            <p class="text-primary">Front-end Developer</p>
                        </div>
                    </div>


                </div>
            </div>

        </main>
        <!-- End of main container -->
        <!-- Page Footer -->
        <footer>
            <nav class="footer-nav">
                <div>
                    <a href="../index.php" class="footer-logo"><img src="media/teyake_white_fill.png"
                            class="logo" /></a>
                    <ul class="p-0">
                        <li><a href="../signin.php">Teacher Sign In</a></li>
                        <li><a href="#exam-key">Student Exam Key</a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h3>Menu</h3>
                    <ul class="p-0">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./support/support.php">How it works</a></li>
                        <li><a href="signup.php">Free Trial</a></li>
                        <li><a href="about_us.php">About</a></li>

                        <li><a href="../index.php#testimonals">Testimonials</a></li>
                    </ul>
                </div>
            </nav>
            <div class="foot-section">
                <div>Copyright &copy; <span id="current-year"></span> - Teyake.com</div>
                <a href="#top" class="up-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                </a>
                </button>
            </div>
        </footer>
        <!-- End of footer -->
    </div>
    <script src="js/about-us.js"></script>
</body>

</html>