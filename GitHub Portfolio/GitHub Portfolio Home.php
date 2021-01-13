<html>
<head>
<title>dg002</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
body, html {
  margin: 0;
  background-image: url("img.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
#name{
  color: blue;
}
#description{
  color: orange;
}
</style>
<script type="text/javascript">
<?php
if($_POST["message"]) {
    $text = $_POST["message"];
    mail("subhrakanti.dasgupta@gmail.com", "Form to email message", $text, "From: vijayadrit2001@gmail.com");
}
?>
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" id="name">Subhrakanti Dasgupta</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item dropdown">
<span class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Follow Me</span>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="https://www.instagram.com/dasgupta002/?hl=en">Instagram</a>
<a class="dropdown-item" href="https://twitter.com/dasgupta002">Twitter</a>
</div>
</li>
<li class="nav-item dropdown">
<span class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Find Me</span>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="https://www.linkedin.com/in/dasgupta002/">Linkedin</a>
<a class="dropdown-item" href="https://www.facebook.com/subhrakanti.dasgupta.9">Facebook</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" href="https://github.com/dasgupta002">Projects</a>
</li>
<li class="nav-item">
<a class="nav-link" href="resume.pdf">Resume</a>
</li>
<li class="nav-item">
<a class="nav-link" href="https://ashadeofmythoughts.wordpress.com/" tabindex="-1" aria-disabled="true">Blog</a>
</li>
</ul>
<form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>
<div class="container">
<div class="row">
<div class="col-md-8" id="description">
<p class="text-left px-5 py-5">
An aspiring fresh undergradute and an enthuciastic learner. Open for newer opportunities and always eager to be ahead and upfront! Always dreams big, in order to achieve the rightful thing in needed space. Always engergetic to find newer force and solutions. Have a feel around and get going. All that is in need is stacked in an eloquent fashion with soft touch and craft!<br>
Basically a web developer with a good going knowledge of basic machine learning and honed programming skills. Explored a varirty of projects and frameworks though online learning as well as hands on training. Projects are up and running for a glance. Skills are enlisted and all necessary proforma are put up for show. Also had a exstatic journey up here! Couple of internships also made a way out to peek into newer boundarides. Keen to work on this field and explore a whole new era of tech crunch!
</div>
<div class="col-md-4">
<p>
<div class="jumbotron">
<b>Contact Me</b><br>
Email me at<br>
subhrakanti.dasgupta@gmail.com<br>
Text me on<br>
+91 9674030231
</div>
<form method="post" action="<?php $_SELF_PHP ?>">
<div class="jumbotron">
<b>Catch Up With Me</b><br>
<label>Enter Message</label><br>
<textarea cols="35" rows="4" name="message"></textarea><br><br>
<input type="submit" class="btn btn-danger">
</div>
</form>
</div>
</div>
</div>
</body>
</html>
