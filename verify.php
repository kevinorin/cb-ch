<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Celtic Honey</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css" media="screen">
  <link rel="stylesheet" href="css/mobilestyle.css" media="handheld">
  <!-- end CSS-->

  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  
  <!-- Typekit -->
  <script type="text/javascript" src="https://use.typekit.com/rzb0qqm.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  
</head>

<body class="home">

	<div id="landscape">
		<!-- landscape image is set as background of this element -->
	</div>

	<div id="container">
		
		<div class="vignette" id="v-top"></div>
		<div class="vignette" id="v-right"></div>
		<div class="vignette" id="v-bottom"></div>
		<div class="vignette" id="v-left"></div>
		
		<div id="main" role="main" style="width:500%">

		<section><article id="verify-article" style="width:100%;">
			
			<div class="wrapper">
			
				<h1>Celtic Honey</h1>
				<h3>You must be of legal drinking age to view this site.<br> Are you at least 21 years old?</h3>
				<div id="verify-buttons">
					<a href="https://www.celtichoney.com/index.php" title="I am at least 21" id="accept-btn">Yes</a>
					<a href="https://www.celtichoney.com/verify.php" title="I am under 21">No</a>
				</div>
				<p class="caption">*Please enable Cookies in your browser settings</p>
								
			</div>
		</article></section>

    </div>


    	
	</div> <!--! end of #container -->



  <!-- jQuery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/libs/jquery.livefilter.min.js"></script>
  <script defer src="js/script.js"></script>
    
 
  <!--  Age Verification  -->
  <script src="js/libs/jquery.cookie.js"></script> 
  <script type="text/javascript">
	 $(document).ready(function(){
	 
  $('#accept-btn').click(function(){
	  $.cookie('is_legal', 'yes', { expires: 1, path: '/', domain: 'celtichoney.com' });
	 
	  <?php if ( !isset($_REQUEST['redirect']) || $_REQUEST['redirect'] == "" ) { ?>
	  document.location = "https://www.celtichoney.com/verify.php";
	 
	  <?php }else{ ?>
	  document.location = "<?php echo $_REQUEST['redirect']; ?>";
	  <?php } ?>
  }); 
    
    });
  </script>
    
    
    
  <script>
	$(document.body).addClass('go');
  </script>

  
    <!-- end scripts-->

  
</body>
</html>
