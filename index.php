<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ravi Shankar Pal Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">



<style>

/*======================================
//--//-->   ABOUT
======================================*/

.about-mf .box-shadow-full {
  padding-top: 4rem;
  padding-bottom: 4rem;
}

.about-mf .about-img {
  margin-bottom: 2rem;
}

.about-mf .about-img img {
  margin-left: 10px;
}


.skill-mf .progress {
  /* background-color: #cde1f8; */
  margin: .5rem 0 1.2rem 0;
  border-radius: 0;
  height: .7rem;
}

.skill-mf .progress .progress-bar {
  height: .7rem;
  background-color: #ffbd39;
}


/* Animation styles */
#typing-animation {
  position: relative;
  font-size: 30px;
  font-weight: bold;
  color: rgb(255, 255, 255);
  overflow: hidden;
  white-space: nowrap;
  animation: typing 3s steps(20, end) infinite;
}

#typing-animation:before {
  content: "";
  /* position: absolute; */
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background-color: #ccc;
  animation: typing-cursor 0.5s ease-in-out infinite;
}

@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}

@keyframes typing-cursor {
  from {
    width: 5px;
  }
  to {
    width: 0;
  }
}


/* project image zoom effect */

.zoom-effect {
  overflow: hidden;
  transition: transform 0.3s ease-out;
}

.zoom-effect:hover {
  transform: scale(1.1);
}





.project-gallery {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.block-20 {
    width: 35%; 
    background-size: cover;
    background-position: center;
    border-radius: 5px;
    height: 200px; 
    margin: 5px -70px;
    transition: transform 0.3s ease;
	right: -100px;
}

.block-20:hover {
    transform: scale(1.05);
}

.prtext{
	color: black;
}






</style>


  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Ravi Shankar Pal</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="#project-section" class="nav-link"><span>Projects</span></a></li>
	          <!-- <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li> -->
	          <li class="nav-item"><a href="contact.html" class="nav-link"><span>Contact</span></a></li>


	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="home-section" class="hero">
		  <div class="home-slider  owl-carousel">
	       <div class="slider-item ">
	      	<div class="overlay"></div>
	         <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/ravi44.png);">
	          	 <div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm <span>Ravi Shankar Pal</span></h1>

					
						<span id="typing-animation"></span>

						<script>

						// Initialize the typing animation
						const typingAnimationElement = document.getElementById('typing-animation');

						// Create an array of typing text
						const typingTexts = [
						'Software Developer'
						];

						// Create a function to display the typing animation for a given text
						function playTypingAnimation(text) {
						// Loop through each character and add it to the element
						for (let i = 0; i < text.length; i++) {
							setTimeout(() => {
							typingAnimationElement.textContent += text[i];
							}, i * 200); // Increase the delay to slow down the typing animation
						}

						// Once the animation is complete, reset the text and start over
						setTimeout(() => {
							typingAnimationElement.textContent = '';
							playTypingAnimation(typingTexts[(typingTexts.indexOf(text) + 1) % typingTexts.length]);
						}, text.length * 200);
						}

						// Start the typing animation loop
						playTypingAnimation(typingTexts[0]);

						</script>

						<br>
						<br>
			    
			            <p>
						<a href="https://github.com/ravishankarpal" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
		</div>
    </section>



    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    	<div class="container">
			<div class="row">
				<div class="row d-flex align-items-stretch">
				<!-- <div class="row d-flex"> -->
					<div class="col-md-6 col-lg-5 d-flex">
						<div class="img-about img d-flex align-items-stretch">
							<div class="overlay">
								<div class="row">
									<div class="col-sm-6 col-md-5">
									  <div class="about-img">
										<img src="images/ravi_about2.png" class="img-fluid rounded b-shadow-a" alt="">
									  </div>
									</div>
									<!-- Details next to profile imag2 -->
									<div class="col-sm-6 col-md-7">
									  <div class="about-info">
										<p><span class="title-s">Name: </span> <span>Ravi Shankar Pal</span></p>
										<p><span class="title-s">Job Role: </span> <span>Software Engineer</span></p>
										<p><span class="title-s">Experience: </span> <span>2 Years 2 Months</span></p>
										<p><span class="title-s">Address: </span> <span>Gurugram, India</span></p>
									  </div>
									</div>
								  </div>

								<div class="skill-mf">
									<p class="title-s">Skills</p>
									<span>SQL</span> <span class="pull-right">95%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
									
									<span>PYTHON</span> <span class="pull-right">85%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
									
									<span>Data Visualization</span> <span class="pull-right">90%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
									
									<span>Statistical Analysis</span> <span class="pull-right">85%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
									
									<span>Machine Learning</span> <span class="pull-right">80%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								
								
								<h2 class="mb-4">About me</h2>
								
								<p>With over 2 years of hands-on experience in Java development,
									I am a dedicated Software Developer specializing in backend engineering,
									passionate about crafting robust, scalable, and efficient server-side solutions.
									My expertise lies in designing and implementing complex backend systems that power
									 modern web applications and services.</p>
								<ul class="about-info mt-4 px-md-0 px-2">
									<li class="d-flex"><span>Profile:</span> <span>Software Developer</span></li>
									<li class="d-flex"><span>Domain:</span> <span>Backend</span></li>
									<li class="d-flex"><span>Education:</span> <span>Master of Computer Application &amp; Bachelor of Science(Mathematics)</span></li>
									<li class="d-flex"><span>Language:</span> <span>English, Hindi</span></li>
									<li class="d-flex"><span>Programming Language:</span> <span>Java &amp; Python</span></li>
									<li class="d-flex"><span>Framework:</span> <span>Spring Boot &amp; Rest</span></li>
									<li class="d-flex"><span>Technical Skilss:</span> <span>Data Structure & Algorithms,
										Problem Solving, Redis &amp; Kafka</span></li>

									<li class="d-flex"><span>Database:</span> <span>MySQL &amp; Snowflake</span></li>
									<li class="d-flex"><span>Tools:</span> <span>Git &amp; Jenkins</span></li>

									<li class="d-flex"><span>Interest:</span> <span>Traveling, Travel Photography, Teaching</span></li>
									
								</ul>
							</div>
						</div>


						<div class="counter-wrap ftco-animate d-flex mt-md-3">
							<div class="text">
								<!-- <p class="mb-4">
									<span class="number" data-number="30">0</span> <span>+</span>
									<span>&nbsp; Projects completed</span>
								</p> -->
								<p><a href="https://www.linkedin.com/in/ravi-shankar-pal-078333192/" class="btn btn-primary py-3 px-3">LinkedIn</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>



	
    <section class="ftco-section ftco-no-pb" id="resume-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	
            <h2 class="mb-4">Resume</h2>
            <p>Dedicated Software Developer with 2+ years of experience specializing in backend development.
				Proficient in designing and implementing robust server-side applications and RESTful APIs. 
				Skilled in Java, database management, and software architecture. Committed to writing efficient,
				scalable code and continuously improving development practices to drive high-performance backend
				solutions.</p>
          </div>
        </div>

		<div class="row">
			<h1 class="big-4">Experience</h1>
			<div class="underline"></div>
		</div>
		<br>
		
		<div class="row">
				<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
						<span class="date">Jan 2022 - June 2022</span>
						<h2>Software Developer Intern</h2>
						<span class="position">Vinculum Solutions</span>
						<p class="mt-4">Vinculum Solutions, a global leader in omnichannel retail technology, providing SaaS solutions for e-commerce and supply
							 chain management to empower businesses worldwides.
							<ul>
								<li>Developed and maintained inventory features under the guidance of the team lead and senior developers.</li>
								<li>Participated in the software development life cycle, including coding, testing, and deployment on dev environments.</li>
								<li>Contributed by 10% decrease in bug reports by participating in the software development.</li>
							</ul>
						</p>
					</div>

				</div>

				<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
						<span class="date">July 2022 - Present</span>
						<h2>Software Backend Engineer</h2>
						<span class="position">Birdeye</span>
						<p class="mt-4">Birdeye, a leading customer experience and reputation management platform with a global presence.
							It's an innovative SaaS company serving businesses across various industries.
							<ul>
								<li>Optimized daily sync jobs and ensured seamless integration with Salesforce data updates, resulting by 30%
									improvement in overall job completion time.</li>
								<li>Developed a real-time alert system to keep top management updated on client software purchases, boosting
									communication and responsiveness.</li>
								<li>Resolved data discrepancies for over 150,000 partners across company dashboards and Salesforce, ensuring
									data integrity, resulting increased reliability by 40%.</li>
								<li>Optimized database queries and implemented caching strategies, achieved by 40% reduction in application response
									time.</li>	
								<li>Developing and maintaining backend systems for a large enterprise platform.</li>	
								<li>Conducted thorough testing and debugging of production issues, reducing bug reports by 40% and ensuring smooth
									operation of backend systems.</li>
							</ul>
						</p>
					</div>

				</div>
			</div>

		<br>
		<br>

		<div class="row">
			<h1 class="big-4">Education</h1>
			<div class="underline"></div>
		</div>
		<br>
		
			<div class="row">
    			<div class="col-md-6">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2019-2022</span>
    					<h2>Master of Computer Applications</h2>
    					<span class="position">Banaras Hindu University, Varanasi</span>
    					<!-- <p class="mt-4">Grade: First class.</p> -->
    				</div>
    			</div>

    			<div class="col-md-6">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2014-2017</span>
    					<h2>Bachelor of Science(Mathematics)</h2>
    					<span class="position">Dr. Ram Manohar Lohia Awadh University, Ayodhya</span>
    					<!-- <p class="mt-4">Grade: Second class.</p> -->
    				</div>
				</div>
    		</div>

    		<div class="row justify-content-center mt-5">
    			<div class="col-md-6 text-center ftco-animate">
    				<p><a href="https://drive.google.com/uc?export=download&id=1atfDX4pfFXqRFAdKz9HsmhwL5VcIu5_A" class="btn btn-primary py-4 px-5">Download Resume</a></p>
    			</div>
    		</div>
    	</div>
    </section>

   
	<section class="ftco-section" id="project-section">
		<div class="container">
		  <div class="row justify-content-center mb-5 pb-5">
			<div class="col-md-7 heading-section text-center ftco-animate">
			  <h2 class="mb-4">Projects</h2>
			  <p>Below are the sample data from a responsive food ordering website built with HTML,
				 CSS, PHP & MySQL.</p>
			</div>
		  </div>
		  <div class="row d-flex">
			<div class="col-md-12 d-flex ftco-animate">
			  <div class="blog-entry justify-content-end">
				<div class="project-gallery d-flex justify-content-between">
				  <div class="block-20 zoom-effect" style="background-image: url('images/project1.png');"></div>
				  <div class="block-20 zoom-effect" style="background-image: url('images/project3.png');"></div>
				  <div class="block-20 zoom-effect" style="background-image: url('images/project9.png');"></div>
				</div>
				<div class="text mt-3 float-right d-block">
				  <p class="prtext">Analyzed music store data using advanced SQL queries to identify gaps and increase the business growth.</p>
				  <div class="project-gallery d-flex justify-content-between">
				 
				  <div class="block-20 zoom-effect" style="background-image: url('images/project5.png');"></div>
				  <div class="block-20 zoom-effect" style="background-image: url('images/project4.png');"></div>
				  <div" class="block-20 zoom-effect" style="background-image: url('images/project7.png');"></div>
				   </div>
				</div>

		
				
			  </div>
			</div>
		  </div>
	  		</div>
	  </section>
	  



	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
		<div class="container">
		  <div class="row d-md-flex align-items-center">
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
			  <div class="block-18">
				<div class="row">
					<h1 class="big-4">Achievements</h1>
					<div class="underline"></div>
				</div>
				  <ul style="display: flex; list-style: none; padding: 0;">
					<li style="margin-right: 20px;">Secured AIR 63 in the MCA Entrance Exam at Babasaheb Bhimrao Ambedkar University, Lucknow.</li>
					<li style="margin-right: 20px;">Secured AIR 252 in the MCA Entrance Exam at Abdul Kalam Technical University, Lucknow.</li>
					<li>Secured AIR 292 in the MCA Entrance Exam at Banaras Hindu University, Varanasi.</li>
				  </ul>
			  </div>
			</div>
		  </div>
		</div>
	  </section>


	  <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
		<div class="container">
		  <div class="row d-md-flex align-items-center">
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
			  <div class="block-18">
				<div class="text">
				  <div class="row">
					<h1 class="big-4">Achievements</h1>
					<div class="underline" style="width: 100%; height: 2px; background-color: #000; margin: 10px 0;"></div>

				  </div>
				  <ul style="display: flex; flex-wrap: wrap; list-style: none; padding: 0; margin: 0;">
					<li style="margin-right: 20px; margin-bottom: 10px;">Secured AIR 63 in the MCA Entrance Exam at Babasaheb Bhimrao Ambedkar University, Lucknow.</li>
					<li style="margin-right: 20px; margin-bottom: 10px;">Secured AIR 252 in the MCA Entrance Exam at Abdul Kalam Technical University, Lucknow.</li>
					<li style="margin-bottom: 10px;">Secured AIR 292 in the MCA Entrance Exam at Banaras Hindu University, Varanasi.</li>
				  </ul>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	  
	  



    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p>Below are the details to reach out to me!</p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Gurugram, India</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://+918953275457">+918953275457</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:ravishankarpl3@gmail.com">ravishankarpl3@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Download Resume</h3>
	            <p><a href="https://drive.google.com/uc?export=download&id=1atfDX4pfFXqRFAdKz9HsmhwL5VcIu5_A">resumelink</a></p>
	          </div>
          </div>

		  <div class="container">
			<br>
			<br>
			<div class="row justify-content-center">
				<div class="col-md-7 ftco-animate text-center">
					<h2>Have a<span> Question?  </span>
						 <a href="contact.html" class="btn btn-primary py-3 px-5">Click Here</a>
						</h2>
				</div>
			</div>
				
		   </div>
   </div>
 </section>


 
	
    <footer class="ftco-footer ftco-section">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 text-center">
  
			  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		  </div>
		</div>
	  </footer>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>