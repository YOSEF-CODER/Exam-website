<?php
  session_start();
  if(isset($_GET["action"]) && $_GET["action"] == "logout"){
    session_unset();
    session_destroy();
  }
  if(isset($_GET["exam"]) && $_GET["exam"] == "none"){
    echo "<script> alert(\"This exam does not exist\"); </script>";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Teyake</title>
    <link rel="stylesheet" href="./public/css/style-reset.css" />
    <link rel="stylesheet" href="./public/css/index.css" />
</head>

<body id="top">
    <!-- Container for the whole document, replacement for the body tag to avoid styling the tag directly -->
    <div class="container text-white">
        <!-- The sidebar/menu component which is only visible on sreen sizes below 1150px -->
        <div class="sidebar transition">
            <form action="./public/examinee-form.php" method="GET" class="enter-exam-sidebar flex flex-col">
                <label for="exam-key" class="enter-exam-label font-semibold">Student</label>
                <div class="enter-exam-input">
                    <input type="text" name="exam-key" class="exam-key" id="exam-key-sidebar"
                        placeholder="Enter Exam Key" />
                    <button type="submit" class="btn enter-exam-btn" id="enter-exam-sidebar-btn">
                        Next
                    </button>
                </div>
            </form>
            <div class="sidebar-sign-in flex flex-col w-full">
                <p>Teacher</p>
                <div class="flex">
                    <a href="./public/signin.php"><button type="button">Sign In</button></a>
                    <a href="./public/signup.php"><button type="button">Sign Up</button></a>
                </div>
            </div>
            <div class="sidebar-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="./public/support.php">How It Works</a></li>
                    <li><a href="./public/about_us.php">About</a></li>


                    <li><a href="#testimonals">Testimonials</a></li>
                </ul>
            </div>
        </div>
        <!-- End of Sidebar Component -->
        <!-- Header for mobile view -->
        <header class="">
            <img src="./public/media/teyake_white_fill.png" class="logo" />
            <span class="menu-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </header>
        <!-- End of Mobile View Header -->
        <!-- Header for Desktop view only above 1150px -->
        <div class="header">
            <div class="header-left">
                <img src="./public/media/teyake_white_fill.png" class="logo" />
                <nav>
                    <ul class="primary-nav flex">
                        <li class="nav-active"><a href="#">Home</a></li>
                        <li><a href="./public/support.php">How it Works</a></li>
                        <li><a href="./public/about_us.php">About Us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-right flex items-center justify-between">
                <div class="sign-in flex flex-col items-center justify-center gap-1">
                    <div class="flex gap-4">
                        <a href="./public/signin.php"><button type="button">Sign In</button></a>
                        <a href="./public/signup.php"><button type="button">Sign Up</button></a>
                    </div>
                    <p class="text-center">Teachers</p>
                </div>
                <!-- Exam Key input Section -->
                <div class="flex flex-col items-center gap-2">
                    <form action="./public/examinee-form.php" method="GET" class="enter-exam-head flex text-center">
                        <div class="enter-exam-input">
                            <input type="text" name="exam-key" id="exam-key-header" class="exam-key"
                                placeholder="Enter Exam Key" />
                            <button type="submit" class="btn enter-exam-btn enter-exam-head-btn"
                                id="enter-exam-head-btn">
                                Next
                            </button>
                        </div>
                    </form>
                    <label for="exam-key" class="enter-exam-label text-center">Students enter your exam key
                        above</label>
                </div>
                <!-- End of exam key input section -->
            </div>
        </div>
        <!-- End of Desktop Header -->
        <!-- Intro content and hero image container -->
        <section class="intro-section">
            <div class="hero"></div>
            <div class="intro-content">
                <!-- Exam Key input section -->
                <form action="./public/examinee-form.php" method="GET"
                    class="enter-exam-intro flex flex-col items-center text-center">
                    <div class="enter-exam-input">
                        <input type="text" name="exam-key" id="exam-key-intro" class="exam-key"
                            placeholder="Enter Exam Key" />
                        <button type="submit" class="btn enter-exam-btn" id="enter-exam-intro-btn">
                            Next
                        </button>
                    </div>
                    <label for="exam-key" class="enter-exam-label text-center">Students enter your exam key
                        above</label>
                </form>
                <!-- End of exam key input -->
                <q>For Teachers</q>
                <h1><span>Do what</span>YOU DO BEST</h1>
                <p>
                    Feel confident conducting your digital exams with testing software
                    made by software engineers who understand the realities of the classroom.
                    Intuitive to use and trusted by teachers like you, Teyake.com
                    equips you with all the power and function you need to create exams
                    for your students, your way.
                </p>
                <a href="./public/signup.php"><button class="intro-btn btn">Sign Up</button></a>
                <a href="./public/support.php"><button class="intro-btn btn">See how it works</button></a>

            </div>
        </section>
        <!-- End of intro Content -->
        <!-- Main container -->
        <main>
            <!-- Card List container -->
            <div class="card-list-container">
                <div class="card-list">
                    <div class="card">
                        <img src="public/media/home/tools.png" alt="Educational tools illustration" class="card-img" />
                        <h2 class="card-title">Everything you need</h2>
                        <p class="card-text">
                            Create comprehensive exams with powerful tools that are easy to
                            use and quick to apply.
                        </p>
                    </div>
                    <div class="card">
                        <img src="./public/media/home/computer.png" alt="Simple computer illustration"
                            class="card-img" />
                        <h2 class="card-title">Make it simple</h2>
                        <p class="card-text">
                            Conduct exams with confidence and control thanks to our intuituve
                            software that simplifies technical complexity
                        </p>
                    </div>
                    <div class="card">
                        <img src="./public/media/home/empower.png" alt="Empowering students illustration"
                            class="card-img" />
                        <h2 class="card-title">Empower Every Student</h2>
                        <p class="card-text">
                            Customize exams to empower each student's individual needs and let
                            their knowledge shine.
                        </p>
                    </div>
                </div>
                <a href="public/support.php"><button class="btn card-list-btn" onclick="">How it works</button></a>

            </div>
            <!-- End of card list -->
            <div class="credits" id="testimonals">
                <img class="quotation-mark" src="./public/media/home/quote.png" alt="quotation mark" />
                <p>
                    The best service in my practice. Everything works very quickly and
                    practically. For me <span class="accented">Teyake.com</span> became
                    a discovery of the last year, at this time makes life easier for
                    both teachers and students.
                </p>
                <p>Easy to view progress of all students</p>
                <p class="accented">Abebe Kebede</p>
                <p>Biology Teacher</p>
            </div>
            <!-- Credits and Testimonials + Features Sections -->
            <section class="subject-info flex flex-col items-center">
                <h3 class="subject-info-head">
                    But i teach
                    <span class="accented" id="subject-name">Physics</span> . . . will
                    <span class="accented">Teyake.com</span> work for me and my students?
                </h3>
                <div class="subject-choice"></div>
                <div class="subject-details-container">
                    <div class="subject-text-section">
                        <h4 id="teacher-name" class="accented"></h4>
                        <span id="school-name"></span>
                        <p id="subject-text"></p>
                    </div>
                    <div class="subject-details">
                        <p class="subject-details-title">
                            These <span class="accented">Teyake.com</span>'s integrated
                            tools are available during your exam
                        </p>
                        <div>
                            <div class="subject-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <path
                                        d="M19.829 10.4454L13.8293 17.1117C13.7013 17.253 13.5226 17.333 13.3333 17.333H9.33352C9.07087 17.333 8.83221 17.1783 8.72422 16.9384C8.61756 16.697 8.66155 16.4157 8.83754 16.2211L14.4359 10.0001L8.83754 3.78041C8.66155 3.58442 8.61622 3.3031 8.72422 3.06311C8.83221 2.82179 9.07087 2.66713 9.33352 2.66713H13.3333C13.5226 2.66713 13.7013 2.74846 13.8293 2.88712L19.829 9.55343C20.0569 9.80675 20.0569 10.1934 19.829 10.4454Z"
                                        fill="#FBB453"></path>
                                    <path
                                        d="M11.1628 10.4454L5.16314 17.1117C5.03514 17.253 4.85649 17.333 4.66716 17.333H0.66738C0.404728 17.333 0.166074 17.1783 0.0580799 16.9384C-0.048581 16.697 -0.00458339 16.4157 0.171407 16.2211L5.76977 10.0001L0.171407 3.78041C-0.00458339 3.58442 -0.0499143 3.3031 0.0580799 3.06311C0.166074 2.82179 0.404728 2.66713 0.66738 2.66713H4.66716C4.85649 2.66713 5.03514 2.74846 5.16314 2.88712L11.1628 9.55343C11.3908 9.80675 11.3908 10.1934 11.1628 10.4454Z"
                                        fill="#DBDBDB"></path>
                                </svg>
                                <p>Calculator</p>
                            </div>
                            <div class="subject-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M19.829 10.4454L13.8293 17.1117C13.7013 17.253 13.5226 17.333 13.3333 17.333H9.33352C9.07087 17.333 8.83221 17.1783 8.72422 16.9384C8.61756 16.697 8.66155 16.4157 8.83754 16.2211L14.4359 10.0001L8.83754 3.78041C8.66155 3.58442 8.61622 3.3031 8.72422 3.06311C8.83221 2.82179 9.07087 2.66713 9.33352 2.66713H13.3333C13.5226 2.66713 13.7013 2.74846 13.8293 2.88712L19.829 9.55343C20.0569 9.80675 20.0569 10.1934 19.829 10.4454Z"
                                        fill="#FBB453"></path>
                                    <path
                                        d="M11.1628 10.4454L5.16314 17.1117C5.03514 17.253 4.85649 17.333 4.66716 17.333H0.66738C0.404728 17.333 0.166074 17.1783 0.0580799 16.9384C-0.048581 16.697 -0.00458339 16.4157 0.171407 16.2211L5.76977 10.0001L0.171407 3.78041C-0.00458339 3.58442 -0.0499143 3.3031 0.0580799 3.06311C0.166074 2.82179 0.404728 2.66713 0.66738 2.66713H4.66716C4.85649 2.66713 5.03514 2.74846 5.16314 2.88712L11.1628 9.55343C11.3908 9.80675 11.3908 10.1934 11.1628 10.4454Z"
                                        fill="#DBDBDB"></path>
                                </svg>
                                <p>
                                    Text editor toolbar includes Greek letters and equation
                                    symbols
                                </p>
                            </div>
                            <div class="subject-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M19.829 10.4454L13.8293 17.1117C13.7013 17.253 13.5226 17.333 13.3333 17.333H9.33352C9.07087 17.333 8.83221 17.1783 8.72422 16.9384C8.61756 16.697 8.66155 16.4157 8.83754 16.2211L14.4359 10.0001L8.83754 3.78041C8.66155 3.58442 8.61622 3.3031 8.72422 3.06311C8.83221 2.82179 9.07087 2.66713 9.33352 2.66713H13.3333C13.5226 2.66713 13.7013 2.74846 13.8293 2.88712L19.829 9.55343C20.0569 9.80675 20.0569 10.1934 19.829 10.4454Z"
                                        fill="#FBB453"></path>
                                    <path
                                        d="M11.1628 10.4454L5.16314 17.1117C5.03514 17.253 4.85649 17.333 4.66716 17.333H0.66738C0.404728 17.333 0.166074 17.1783 0.0580799 16.9384C-0.048581 16.697 -0.00458339 16.4157 0.171407 16.2211L5.76977 10.0001L0.171407 3.78041C-0.00458339 3.58442 -0.0499143 3.3031 0.0580799 3.06311C0.166074 2.82179 0.404728 2.66713 0.66738 2.66713H4.66716C4.85649 2.66713 5.03514 2.74846 5.16314 2.88712L11.1628 9.55343C11.3908 9.80675 11.3908 10.1934 11.1628 10.4454Z"
                                        fill="#DBDBDB"></path>
                                </svg>
                                <p>English thesaurus</p>
                            </div>
                            <div class="subject-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M19.829 10.4454L13.8293 17.1117C13.7013 17.253 13.5226 17.333 13.3333 17.333H9.33352C9.07087 17.333 8.83221 17.1783 8.72422 16.9384C8.61756 16.697 8.66155 16.4157 8.83754 16.2211L14.4359 10.0001L8.83754 3.78041C8.66155 3.58442 8.61622 3.3031 8.72422 3.06311C8.83221 2.82179 9.07087 2.66713 9.33352 2.66713H13.3333C13.5226 2.66713 13.7013 2.74846 13.8293 2.88712L19.829 9.55343C20.0569 9.80675 20.0569 10.1934 19.829 10.4454Z"
                                        fill="#FBB453"></path>
                                    <path
                                        d="M11.1628 10.4454L5.16314 17.1117C5.03514 17.253 4.85649 17.333 4.66716 17.333H0.66738C0.404728 17.333 0.166074 17.1783 0.0580799 16.9384C-0.048581 16.697 -0.00458339 16.4157 0.171407 16.2211L5.76977 10.0001L0.171407 3.78041C-0.00458339 3.58442 -0.0499143 3.3031 0.0580799 3.06311C0.166074 2.82179 0.404728 2.66713 0.66738 2.66713H4.66716C4.85649 2.66713 5.03514 2.74846 5.16314 2.88712L11.1628 9.55343C11.3908 9.80675 11.3908 10.1934 11.1628 10.4454Z"
                                        fill="#DBDBDB"></path>
                                </svg>
                                <p>
                                    Teacher Uploaded Resources or references such as a reading,
                                    poem, or critical source
                                </p>
                            </div>
                            <div class="subject-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M19.829 10.4454L13.8293 17.1117C13.7013 17.253 13.5226 17.333 13.3333 17.333H9.33352C9.07087 17.333 8.83221 17.1783 8.72422 16.9384C8.61756 16.697 8.66155 16.4157 8.83754 16.2211L14.4359 10.0001L8.83754 3.78041C8.66155 3.58442 8.61622 3.3031 8.72422 3.06311C8.83221 2.82179 9.07087 2.66713 9.33352 2.66713H13.3333C13.5226 2.66713 13.7013 2.74846 13.8293 2.88712L19.829 9.55343C20.0569 9.80675 20.0569 10.1934 19.829 10.4454Z"
                                        fill="#FBB453"></path>
                                    <path
                                        d="M11.1628 10.4454L5.16314 17.1117C5.03514 17.253 4.85649 17.333 4.66716 17.333H0.66738C0.404728 17.333 0.166074 17.1783 0.0580799 16.9384C-0.048581 16.697 -0.00458339 16.4157 0.171407 16.2211L5.76977 10.0001L0.171407 3.78041C-0.00458339 3.58442 -0.0499143 3.3031 0.0580799 3.06311C0.166074 2.82179 0.404728 2.66713 0.66738 2.66713H4.66716C4.85649 2.66713 5.03514 2.74846 5.16314 2.88712L11.1628 9.55343C11.3908 9.80675 11.3908 10.1934 11.1628 10.4454Z"
                                        fill="#DBDBDB"></path>
                                </svg>
                                <p>Teacher Uploaded media</p>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="./public/signin.php" class="btn subject-details-btn">
                    Try It Now
                </a>
                <a href="./public/support.php" class="btn-light subject-details-btn-two">
                    How It Works</a>


            </section>
            <!-- End of testimonials section -->
        </main>
        <!-- End of main container -->
        <!-- Page Footer -->
        <footer>
            <nav class="footer-nav">
                <div>
                    <a href="teyake.com" class="footer-logo"><img src="./public/media/teyake_white_fill.png"
                            class="logo" /></a>
                    <ul class="p-0">
                        <li><a href="./public/signin.php">Teacher Sign In</a></li>
                        <li><a href="#exam-key">Student Exam Key</a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h3>Menu</h3>
                    <ul class="p-0">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./public/support.php">How it works</a></li>
                        <li><a href="./public/signup.php">Free Trial</a></li>
                        <li><a href="./public/about_us.php">About</a></li>

                        <li><a href="#testimonals">Testimonials</a></li>

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
    <script src="./public/js/index.js"></script>
</body>

</html>