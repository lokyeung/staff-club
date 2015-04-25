<?php include 'db/config.php'; ?>
<?php include 'db/connectdb.php'; ?>
<?php include 'db/connectclose.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PolyU Staff Club</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/jumbotron-narrow.css" rel="stylesheet">

  </head>

  <body>

    <div class="container-fluid">
      <div class="header clearfix">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">PolyU Staff Club</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Membership <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#" class="ajax_anchor" id="member_link">Membership Types</a></li>
                    <li><a href="#" class="ajax_anchor" id="register_link">Register</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#" class="ajax_anchor" id="sport_link1">Sport Activities</a></li>
                    <li><a href="#" class="ajax_anchor" id="sport_link2">Sport Courses</a></li>
                    <li><a href="#" class="ajax_anchor" id="sport_link2">Competitions</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="ajax_anchor" id="courses_link">Other Courses</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="ajax_anchor" id="tours_link">City Tours</a></li>
                  </ul>
                </li>
                <li class=""><a href="#" class="ajax_anchor" id="gallery_link">Gallery</a></li>
              </ul>
              <form class="navbar-form navbar-right" role="submit">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username" id="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" id="password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
              </form>
              
            </div><!-- /.navbar-collapse -->
        </nav>
      </div>
      <div id="body">

