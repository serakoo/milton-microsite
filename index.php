<?php require_once("includes/functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <title>dispatch - Documentation Microsite</title>

    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jasny-bootstrap.css" rel="stylesheet">
    <link href="css/dispatch.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
 
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
      <p class="navmenu-brand">
        <a href="index.php"><img src="img/microsite-logo.png" alt="logo" class="img-responsive" /></a>
      </p>
      <hr/>
      <!-- Generate Menu Content -->
      <?php generateMenu(); ?>  
    </div>

    <!-- Generate Menu Off-Canvas Structure -->    
    <?php offCanvasMenu(); ?>

    <!-- Load Page Content -->
    <?php loadPageContent();?>

    <!-- Page Footer -->
    <footer>
        <div class="top"><a class="scrollTop"><img src="img/ico/top.png" alt="scroll to top"/></a></div>
        <div class="reference"><img src="img/microsite-logo-footer.png" alt="logo" class="img-responsive" /></div>
        <span class="disclaimer">Last update: <?php lastUpdate(); ?><br/>
    </footer>

    <!-- Scripts -->
    <?php require_once("includes/modal.html"); ?>
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jasny-bootstrap.min.js" type="text/javascript"></script>
    <script src="js/dispatch.js" type="text/javascript"></script>
    <!--
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'YOUR TRACKING CODE', 'auto');
      ga('send', 'pageview');
    </script>
    -->

  </body>
</html>
