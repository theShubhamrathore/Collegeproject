<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="templatemo">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Shubham Rathore College</title>

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
                      <li>  <a href="http://127.0.0.1:8000/" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
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
                    <div class="home-rtuimg"></div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="home-thumb">
                         <div class="section-title">
                              <h4 class="wow fadeInUp" data-wow-delay="0.3s"></h4>
                              <h1 class="wow fadeInUp" data-wow-delay="0.6s"><strong>🏫 Rajasthan Technical University , Kota</strong></h1>
                              <!-- <p class="wow fadeInUp" data-wow-delay="0.9s">Donec auctor arcu at efficitur lacinia. Praesent bibendum efficitur ipsum, et mattis tellus interdum in. Ut a dictum purus. Vestibulum non pellentesque felis, sed dignissim urna. Vestibulum id accumsan quam.</p> -->
                              
                              <a href="#about" class="wow fadeInUp smoothScroll section-btn btn btn-success" data-wow-delay="1.4s">About College</a>
                              
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
                    <div class="home-">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.4s">
                              <h1><strong>About RTU</strong></h1>
                              <!-- <p class="color-yellow">Sed vulputate vitae diam quis bibendum</p> -->
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                             <p>Rajasthan Technical University (RTU) is an affiliating university in Kota in the state of Rajasthan, India. It was established in 2006 by the Government of Rajasthan to enhance technical education in the state. It has many affiliated colleges under its umbrella.

RTU is on the campus of the University Engineering College, Kota, previously Engineering College of Kota and now University Teaching Department which is now an autonomous institute.

The university affiliates about 130 engineering colleges, 4 B.Arch colleges, 41 MCA colleges, 95 MBA colleges, 44 M.Tech colleges and 03 hotel management and catering institutes. More than 2.5 lakh students study in the institutes affiliated to the university.</p>
                         </div>
                    </div>
               </div>

               <!-- <div class="col-md-3 col-sm-6">
                    <div class="background-image about-img"></div>
               </div> -->

               <!-- <div class="bg-yellow col-md-3 col-sm-6">
                    <div class="skill-thumb">
                         <div class="wow fadeInUp section-title color-white" data-wow-delay="1.2s">
                              <h1>My Skills</h1>
                              <p class="color-white">Photoshop . HTML CSS JS . Web Design</p>
                         </div>

                         <div class=" wow fadeInUp skills-thumb" data-wow-delay="1.6s">
                         <strong>Frontend Design</strong>
                              <span class="color-white pull-right">90%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                   </div>

                         <strong>Backend processing</strong>
                              <span class="color-white pull-right">70%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                   </div>

                         <strong>HTML5 & CSS3</strong>
                              <span class="color-white pull-right">80%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                   </div>
                         </div> -->

                    </div>
               </div>

          </div>
     </div>
</section> 


<!-- Service Section -->

<!-- <section id="service" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="bg-yellow col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="0.8s">
                         <i class="fa fa-desktop"></i>
                              <h3>Interface Design</h3>
                              <p class="color-white">Phasellus vulputate tellus nec tortor varius elementum. Curabitur at pulvinar ante.</p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.2s">
                         <i class="fa fa-paper-plane"></i>
                              <h3>Media Strategy</h3>
                              <p class="color-white">Curabitur at pulvinar ante. Duis dui urna, faucibus eget felis eu, iaculis congue sem.</p>
                    </div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.6s">
                         <i class="fa fa-table"></i>
                              <h3>Mobile App</h3>
                              <p class="color-white">Mauris convallis eros massa, vitae euismod arcu tempus ut. Quisque viverra iaculis.</p>
                    </div>
               </div>

               <div class="bg-white col-md-3 col-sm-6">
                    <div class="wow fadeInUp service-thumb" data-wow-delay="1.8s">
                         <i class="fa fa-html5"></i>
                              <h3>Coding</h3>
                              <p>Mauris convallis eros massa, vitae euismod arcu tempus ut. Quisque viverra iaculis.</p>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Experience Section -->
<!-- 
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
                                   <h3 class="media-heading">Graphic Designer <small>2014 Jul - 2015 Sep</small></h3>
                                   <p class="color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                              </div>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Web Designer <small>2015 Oct - 2017 Jan</small></h3>
                                   <p class="color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                              </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section> --> -->


<!-- Education Section -->

<!-- <section id="education" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="color-white education-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                              <h1>My Education</h1>
                              <p class="color-white">In cursus orci non ipsum gravida dignissim</p>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Master in Design <small>2012 Jan - 2014 May</small></h3>
                                   <p class="color-white">Etiam iaculis elit in mauris ullamcorper auctor. Proin a sapien id orci ullamcorper dignissim eu in neque. </p>
                              </div>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Bachelor of Arts <small>2008 May - 2011 Dec</small></h3>
                                   <p class="color-white">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                              </div>
                         </div>

                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="background-image education-img"></div>
               </div>

          </div>
     </div>
</section> -->


<!-- Quotes Section -->

<!-- <section id="quotes" class="parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <i class="wow fadeInUp fa fa-star" data-wow-delay="0.6s"></i>
                    <h2 class="wow fadeInUp" data-wow-delay="0.8s">Proin lobortis eu diam et facilisis. Fusce nisi nibh, molestie in vestibulum quis, auctor et orci.</h2>
                    <p class="wow fadeInUp" data-wow-delay="1s">Curabitur at pulvinar ante. Duis dui urna, faucibus eget felis eu, iaculis congue sem.</p>
               </div>

          </div>
     </div>
</section>
 -->

<!-- Contact Section -->
<!-- 
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="contact-form">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                              <h1 class="color-white">Say hello..</h1>
                              <p class="color-white">Integer ut consectetur est. In cursus orci non ipsum gravida dignissim.</p>
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
                         <div class="wow fadeInUp contact-info" data-wow-delay="0.6s">
                              <h3 class="color-white">Visit my office</h3>
                              <p>456 New Street 22000, New York City, USA</p>
                         </div>

                         <div class="wow fadeInUp contact-info" data-wow-delay="0.8s">
                              <h3 class="color-white">Contact.</h3>
                              <p><i class="fa fa-phone"></i> 01-0110-0220</p>
                              <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@company.co">hello@company.co</a></p>
                              <p><i class="fa fa-globe"></i> <a href="#">company.co</a></p>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>
 -->

<!-- Footer Section -->
<!-- 
<footer>
	<div class="container">
		<div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s">
                         <p>Copyright &copy; 2016 Your Company
                    
                    | Design: <a href="http://www.google.com/+templatemo" target="_parent">templatemo</a></p>
                    </div>
				<ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-google-plus"></a></li>
                         <li><a href="#" class="fa fa-dribbble"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
			
		</div>
	</div>
</footer> -->



<!-- SCRIPTS -->


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>