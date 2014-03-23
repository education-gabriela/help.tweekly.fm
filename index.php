<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Replace the description, keywords and author content with those that suit your product/ service -->
    <meta name="description" content="Bootstrap Product Launch Landing Page ">
    <meta name="keywords" content="multi purpose, bootstrap, launch, coming soon, landing page">
    <meta name="author" content="Joseph Wachira">

    <title>Tweekly.fm &middot; We need your help</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/assets/cust/css/cust.css?<?php echo time(); ?>" rel="stylesheet" media="screen">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
    <!-- Load this instead, on live site
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="home" class="cornflowerblue"> <!-- The "cornflowerblue" class adds a stylish blue color scheme -->
    <div class="container">
      <div class="features">
        <div class="row section-header">
          <div class="col-sm-12" style="color: #747474 !important; text-align: center; margin-bottom: 20px;">
            <h1>Please Select Your Language</h1>
			<?php require "language.php"; ?>
          </div>
        </div>
      </div>
    </div>
	<script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/assets/cust/js/cust.js"></script>

   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46716686-3', 'tweekly.fm');
  ga('send', 'pageview');

</script>
  </body>
</html>