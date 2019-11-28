<!-- style guide rules 

1. use tabs instead of spaces! 
tab size: 2 

2. css classes order eg.
  <elm class="snt-custom-class bootstrap-class"></elm>

3. write short comment explanations for elements and events,
explain the code and keep it simple

4. !!WARNING!! html, header, body and similar tags are omttied for a reason, not by accident!
Checkout the following google style guide https://google.github.io/styleguide/htmlcssguide.xml

style guide rules end -->

<!doctype html>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<title>Equinox</title>

<!-- Latest compiled and minified Boostrap 4 CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

<link href="<?php echo get_stylesheet_directory_uri().'/css/main.css'; ?>" rel="stylesheet">

<!-- here we use body tag to add custom classes to it, no need to close it, or account it in tags hierarchy  -->
<body class="snt-body-bg">

<!-- content -->
<div class="snt-container container-fluid">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri().'/imgs/equinox_horizontal_logo_menu.png'; ?>" alt="" height="45"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link" href="#">HOME</a>
      <a class="nav-item nav-link" href="#">FOR 3D ARTISTS</a>
      <a class="nav-item nav-link" href="#">FOR MARKETERS</a>
      <a class="nav-item nav-link" href="#">ABOUT</a>
    </div>
  </div>
</nav>