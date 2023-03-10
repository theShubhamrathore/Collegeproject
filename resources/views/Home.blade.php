<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="templatemo">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Shubham Rathore </title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/templatemo-style.css">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->

<div class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</div>


<!-- Navigation Section -->

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
     <div class="container">

          <!-- navbar header -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="#" class="navbar-brand">Shubham</a>
          </div>

          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
               <li><a href="http://127.0.0.1:8000/" class="smoothScroll">Home</a></li>
                    <li><a href="http://127.0.0.1:8000/college" class="smoothScroll">College</a></li>
                    <li><a href="http://127.0.0.1:8000/city" class="smoothScroll">City</a></li>
                    <li><a href="http://127.0.0.1:8000/friend" class="smoothScroll">Friend</a></li>
                    <!-- <li><a href="#contact" class="smoothScroll">Talk To Me</a></li> -->

                    <li>
                    @if (Route::has('login'))
                <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                    @auth

                    

                       <li>  <a href="http://127.0.0.1:8000/" class="text-sm text-gray-700 dark:text-gray-500 underline">User</a></li> 
                    @else
                    <li>   <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                <!-- </div> -->
            @endif
                    </li>
                    
               </ul>
          </div>

     </div>
</div>


<!-- Home Section -->

<section id="home" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="home-img"></div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="home-thumb">
                         <div class="section-title">
                              <h4 class="wow fadeInUp" data-wow-delay="0.3s">welcome to my website</h4>
                              <h1 class="wow fadeInUp" data-wow-delay="0.6s"><strong>Hi ????, I'm Shubham Rathore</strong> <br> Software Developer.</h1>
                              <p class="wow fadeInUp" data-wow-delay="0.9s"></p>
                              
                              <a href="https://drive.google.com/file/d/1mBfIjvcuZ9R9TcEAZmML0nx4JRzL1Lyt/view?usp=sharing" class="wow fadeInUp smoothScroll section-btn btn btn-success" data-wow-delay="1.4s">Get Resume</a>
                              
                         </div>
                    </div>
               </div>


          </div>
     </div>
</section>


<!-- About Section -->

<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="about-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.4s">
                              <h1>About Me</h1>
                              <!-- <p class="color-yellow"></p> -->
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p>
                              <strong>I am   software engineer from Kota, Rajasthan with extensive experience in developing and implementing innovative software solutions. Proficient in various programming languages such as C++,HTML ,CSS, Javascript, I have a strong understanding of software development lifecycle and ability to work in a fast-paced environment. My passion for technology and problem-solving skills have enabled me to deliver high-quality projects on time and on budget. I am always eager to learn new technologies and keep up with the latest industry developments.</strong>
                              </p>
                         </div>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="background-image about-img"></div>
               </div>

               <div class="bg-yellow col-md-3 col-sm-6">
                    <div class="skill-thumb">
                         <div class="wow fadeInUp section-title color-white" data-wow-delay="1.2s">
                              <h1>My Skills</h1>
                              <p class="color-white">C++ , OOPS , DSA , DBMS ,SQL, HTML, CSS, JS , Web Design.</p>
                         </div>

                         <div class=" wow fadeInUp skills-thumb" data-wow-delay="1.6s">
                         <strong>Software development</strong>
                              <span class="color-white pull-right">90%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                   </div>

                         <strong>Web design</strong>
                              <span class="color-white pull-right">70%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                   </div>

                         <strong>Android development</strong>
                              <span class="color-white pull-right">60%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                   </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Service Section -->

<section id="service" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="bg-yellow col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="0.8s">
                         <i class="fa fa-desktop"></i>
                              <h3>Software development</h3>
                              <!-- <p class="color-white">Phasellus vulputate tellus nec tortor varius elementum. Curabitur at pulvinar ante.</p> -->
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.2s">
                         <i class="fa fa-paper-plane"></i>
                              <h3>Android development </h3>
                              <!-- <p class="color-white">Curabitur at pulvinar ante. Duis dui urna, faucibus eget felis eu, iaculis congue sem.</p> -->
                    </div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.6s">
                         <i class="fa fa-table"></i>
                              <h3>Web development</h3>
                              <!-- <p class="color-white">Mauris convallis eros massa, vitae euismod arcu tempus ut. Quisque viverra iaculis.</p> -->
                    </div>
               </div>

               <div class="bg-white col-md-3 col-sm-6">
                    <div class="wow fadeInUp service-thumb" data-wow-delay="1.8s">
                         <i class="fa fa-html5"></i>
                              <h3>Coding</h3>
                              <!-- <p>Mauris convallis eros massa, vitae euismod arcu tempus ut. Quisque viverra iaculis.</p> -->
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Experience Section -->

<section id="experience" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="background-image experience-img"></div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="color-white experience-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                              <h1>My Experiences</h1>
                              <p class="color-white">Previous companies and my tasks</p>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Frontend Developer Intern <small>2022 may - 2022 july</small></h3>
                                   <p class="color-white">Anktech Software Pvt. Ltd.</p>
                              </div>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Software developer intern <small>2022 jan - 2022 march</small></h3>
                                   <p class="color-white">Okayhealth </p>
                              </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Education Section -->

<section id="education" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="color-white education-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                              <h1>My Education</h1>
                              <!-- <p class="color-white">In cursus orci non ipsum gravida dignissim</p> -->
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">B.Tech In CSE <small>2019 Sep - 2023 July</small></h3>
                                   <p class="color-white"> <strong>Rajasthan Technical University , Kota   </strong></p>
                              </div>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                              <!-- <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div> -->
                              <!-- <div class="media-body">
                                   <h3 class="media-heading">Bachelor of Arts <small>2008 May - 2011 Dec</small></h3>
                                   <p class="color-white">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                              </div> -->
                         </div>

                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="background-image education-img"></div>
               </div>

          </div>
     </div>
</section>


<!-- Quotes Section -->

<section id="quotes" class="parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <i class="wow fadeInUp fa fa-star" data-wow-delay="0.6s"></i>
                    <h3 class="wow fadeInUp" data-wow-delay="0.8s">About my community</h3>
                    <p class="wow fadeInUp" data-wow-delay="1s"> <b> Member in Coding Club<br>Member in NSS<br>Member in IIC </b></p>
               </div>

          </div>
     </div>
</section>


<!-- Contact Section -->

<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="contact-form">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                              <h1 class="color-white">Say hello ????..</h1>
                              <!-- <p class="color-white">Integer ut co</p> -->
                         </div>

                         <div id="contact-form">
                              <form action="#template-mo" method="post">
                                   <div class="wow fadeInUp" data-wow-delay="1s">
                                        <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name">
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.2s">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.4s">
                                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..."></textarea>
                                   </div>
                                   <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.6s">
                                        <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                                   </div>
                              </form>
                         </div>

                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="background-image contact-img"></div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="contact-thumb">
                         <!-- <div class="wow fadeInUp contact-info" data-wow-delay="0.6s">
                              <h3 class="color-white">Visit my office</h3>
                              <p>456 New Street 22000, New York City, USA</p>
                         </div> -->

                         <div class="wow fadeInUp contact-info" data-wow-delay="0.8s">
                              <h3 class="color-white">Contact.</h3>
                              <p><i class="fa fa-phone"></i> 6377609751</p>
                              <p><i class="fa fa-envelope-o"></i> <a href="mailto:sr7808202@gmail.com">sr7808202@gmail.com</a></p>
                              <p><i class="fa fa-globe"></i> <a href="#">shubhamrathore.com</a></p>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Footer Section -->

<footer>
	<div class="container">
		<div class="row">

               <div class="col-md-12 col-sm-12">
                    <!-- <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s">
                         <p>Copyright &copy; 
                    
                    | Design: <a href="http://www.google.com/+templatemo" target="_parent">templatemo</a></p>
                    </div> -->
				<ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                         <h2>
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-google-plus"></a></li>
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                         </h2>
                    </ul>
               </div>
			
		</div>
	</div>
</footer>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>