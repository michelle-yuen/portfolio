<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
  <title>Michelle Yuen | Front-End Web Developer & Designer | Home</title>
    <?php include 'include/header.php' ?>
  </head>
  
<body onload="document.body.style.opacity='1'">
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

<header class="jumbotron">
  <?php include 'include/nav.php' ?>

  <div class="header-container">
    <h1 class="special text-center text-uppercase">Michelle <span class="highlight">Yuen</span></h1>
    <h2 class="text-center">FRONT-END WEB DEVELOPER AND DESIGNER</h2>
    <h3 class="text-center"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Based in Vancouver, BC</h3>
  </div>
</header>

<section id="content" class="container text-center">
  <p class="text">Welcome to my portfolio of design stories where I build connections between people and the web.</p>
  <hr>
  <h1>featured work</h1>

  <div class="row">
    <div class="col-md-6">
      <h4>client project</h4>
        <img class="project-filter" src="img/dreadquarters/banner.png" alt="Client Project Mockup Image">
        <a  href="client-project.php" title="Read case study on client project" class="btn btn-primary" role="button">Read Case Study</a>
        <a href="http://dreadquarters.htpwebdesign.ca" title="View live site of client project, the dreadquarters" class="btn btn-default" role="button">View Live Site</a>
    </div>
    <div class="col-md-6">
      <h4>portfolio project</h4>
        <img class="project-filter" src="img/portfolio/banner.png" alt="Portfolio Project Mockup Image">
          <a href="portfolio.php" title="Read case study on my portfolio project" role="button" class="btn btn-primary">Read Case Study</a>
          <a href="index.php" title="View live site of my portfolio" role="button" class="btn btn-default">View Live Site</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6"> 
      <h4>compass prototype</h4>
        <img class="project-filter" src="img/compass/banner.png" alt="Compass Card Proposal Mockup Image">
        <a href="compass-prototype.php" title="Read case study on compass redesign proposal" role="button" class="btn btn-primary">Read Case Study</a>
        <a href="projects/compass-prototype/index.html" title="View live site of functioning compass prototype" role="button" class="btn btn-default">View Live Site</a>
    </div>

    <div class="col-md-6">
      <h4>responsive blog</h4>
        <img class="project-filter" src="img/food-explorer/banner.png" alt="Food Explorer Responsive Blog Mockup Image">
          <a href="food-explorer.php" title="Read case study on food explorer responsive blog" role="button" class="btn btn-primary">Read Case Study</a>
          <a href="projects/responsive-blog/index.html" title="View live site of food explorer responsive blog" role="button" class="btn btn-default">View Live Site</a>
    </div>
  </div>
</section>

<?php include 'include/footer.php' ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>