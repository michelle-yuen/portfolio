<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <title>Michelle Yuen | Responsive Blog Project</title>
    <?php include 'include/header.php' ?>
  </head>
<body onload="document.body.style.opacity='1'">
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

<header class="food-header">
  <div class="hero-filter">
    <?php include 'include/nav.php' ?>
  </div>
</header>

<section id="content" class="container text-center">

  <div class="row">  
  	<div class="col-md-8">
  	<h1>The Scope</h1>
  	<p class="text-left">Working in groups of 2, the goal of this project was to analyse a pre-designed mock-up from a previous student and convert it to a fully responsive one-page blog as well as utilize Git and GitHub to version control production code. We were also required to use SASS (a CSS preprocessor) in order to organize our stylesheet.</p>

  	<h1>The Process</h1>
  	<p class="text-left">My team member and I started off with coding the HTML together. We then moved onto figuring out the colours used for the site by opening up the mock-up image file in Photoshop to get the colours with the eye dropper tool. With the help of SASS, we were able to use variables for the colours to help make things easier. We also tried nesting and mixins which proved to make the styling process more efficient.</p>

  	<p class="text-left">Because we were still new to Responsive Design at the time, we didn't understand or know much about the importance of mobile first. I used GitHub Desktop to push the changes up to the master branch. We also tried our best to keep the HTML5 code clean and semantic by using more descriptive tags like aside, section, article, etc.</p>

  	<p class="text-left">One challenge to the project was the use of sprites and making them animate on hover. We had to play around with the positioning for a while to figure out how to get it to align properly. Another major challenge to the project was the JavaScript/jQuery part for the toggle menu in mobile view. In the end, we realized that it didn't actually require much JavaScript and we were able to figure out how to make the menu toggle.</p>

    <h1>The Result</h1>
    <p class="text-left">Coding this project from scratch in a short period of time provided us with hands-on experience to situations in real life where we would be asked to code as part of a technical test, for example. We were able to replicate the original web site perfectly and nicely organize our SASS file. Below are some mockups of the responsive blog and you can also view the site live by clicking the button below.</p><br>
    <figure>
      <img src="img/food-explorer/mac.png" alt="Macbook View of Food Explorer Responsive Blog">&nbsp;
      <figcaption>Desktop view of responsive blog</figcaption>
    </figure>
		<br><br>
		<figure>
      <img class="sketch-2" src="img/food-explorer/iPad.png" alt="Tablet View of Food Explorer Responsive Blog"><br><Br>
      <figcaption>Tablet view of responsive blog</figcaption>
    </figure>
		<br><br>
    <figure>
      <img class="sketch-2" src="img/food-explorer/iphone.png" alt="iPhone View of Food Explorer Responsive Blog"><br><br>
      <figcaption>Mobile view of responsive blog</figcaption>
    </figure><br>
    <a href="projects/responsive-blog/index.html" title="View live site of responsive blog" role="button" class="btn btn-primary">View Live Site</a>
		</div>

  	<div class="col-md-4">
  		<h1><i class="fa fa-calendar-o" aria-hidden="true"></i> Project Timeline</h1>
        <ul class="list-unstyled"> 
  		    <li>March 8 - 14, 2017</li>
        </ul>
  		<h1><i class="fa fa-suitcase" aria-hidden="true"></i> Tools</h1>
  		  <ul class="list-unstyled">
  			   <li>HTML5</li>
  			   <li>CSS3/SASS</li>
  			   <li>JavaScript/jQuery</li>
  			   <li>Responsive Design</li>
  			   <li>GitHub</li>
  			   <li>Photoshop</li>
  		  </ul>
  		<h1><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Improvements</h1>
  		  <ul class="list-unstyled">
  		    <li>Would have been easier to do mobile first instead of from desktop to mobile</li>
  		  </ul>
  		
  	</div>
	</div>
</section>

<?php include 'include/footer.php' ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>