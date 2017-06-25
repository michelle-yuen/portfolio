<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <title>Michelle Yuen | Portfolio Project</title>
    <?php include 'include/header.php' ?>
  </head>
<body onload="document.body.style.opacity='1'">
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

<header class="portfolio-header">
  <div class="hero-filter">
    <?php include 'include/nav.php' ?>
  </div>
</header>

<section id="content" class="container text-center">

  <div class="row">  
  	<div class="col-md-8">
  	<h1>The Scope</h1>
  	<p class="text-left">My portfolio website is meant to showcase the work that I did during the Technical Web Designer program at BCIT. We were graded on the quality of the site such as clean code, creative design, use of web standards, accessibility of the website, and support for modern versions of major web browsers.</p>

  	<h1>The Process</h1>
  	<p class="text-left">For this portfolio, I had planned to do mobile first from the start. I wasn't sure how to begin, but then I came across Bootstrap, which is a popular HTML/CSS/JS framework for developing mobile first projects for the web. I read the documentation and then I built my portfolio around the Bootstrap framework. I wanted to showcase 4 projects and thought that a grid layout which starts out stacked on mobile to horizontal on desktop would look the most clean and professional.</p>

    <p class="text-left">I opted for a simple design with the use of white space and a simple colour palette. I wanted to have just a pop of colour throughout my site so I chose a coral pink. I also experimented with Sketch for the product mockups on each case study and found it to be quite intuitive to use.</p>

    <p class="text-left">For my mobile navigation, I kept in mind the high interaction area on mobile devices, and decided to have a fixed navigation bar at the bottom of the screen. While reading an article on how to build a fixed navigation bar, I discovered that there was a way to use JavaScript to hide the navbar when the user scrolls down, and show the navbar when the user scrolls up again. I thought that this was a clever technique to save screen space.</p>

    <h1>The Result</h1>
    <p class="text-left">I believe that I was able to create a portfolio which matched my expectations to have a clean and minimalistic design showcasing my work.</p><br>

    <figure>
      <img class="sketch-2" src="img/portfolio/iPad.png" alt="Tablet View of Portfolio"><br><br>
      <figcaption>Tablet view of portfolio</figcaption>
    </figure>
    <br><br><br>
		<figure>
      <img class="sketch-2" src="img/portfolio/iphone.png" alt="Mobile Views of Portfolio"><br><Br>
      <figcaption>Mobile view of portfolio</figcaption>
    </figure>
		<br>
    
    <a href="https://michelleyuen.tech" title="View live site of portfolio" role="button" class="btn btn-primary">View Live Site</a>
		</div>

  	<div class="col-md-4">
  		<h1><i class="fa fa-calendar-o" aria-hidden="true"></i> Project Timeline</h1>
        <ul class="list-unstyled"> 
  		    <li>May 3 - June 12, 2017</li>
        </ul>
  		<h1><i class="fa fa-suitcase" aria-hidden="true"></i> Tools</h1>
  		  <ul class="list-unstyled">
  			   <li>HTML5</li>
  			   <li>CSS3</li>
  			   <li>JavaScript/jQuery</li>
  			   <li>Responsive Design</li>
  			   <li>Sketch</li>
           <li>PHP</li>
  		  </ul>
      <h1><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Concepts</h1>
        <ul class="list-unstyled">
          <li>User Experience Design</li>
          <li>Web Accessibility</li>
      </ul>
  		<h1><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Improvements</h1>
  		  <ul class="list-unstyled">
  		    <li>Would have been more efficient to code in PHP from the start</li>
  		  </ul>
  		
  	</div>
	</div>
</section>

<?php include 'include/footer.php' ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>