<?php include('perch/runtime.php'); ?>


<?php

function tighten ($s) {
	return strtolower(str_replace(" ", "-", $s));
}

$sections = array(
	array(
		"name" => "Home",
/* 		"tagline" => "information is more available" */
	),
	array(
		"name" => "Taste",
/* 		"tagline" => "our air is getting better" */
	),
	array(
		"name" => "Ingredients",
/* 		"tagline" => "innovation is on the rise" */
	),
	array(
		"name" => "Find",
/* 		"tagline" => "society advances" */
	) 
);
?>


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

<body>

	<div id="landscape">
		<!-- landscape image is set as background of this element -->
	</div>

	<div id="container">
		
<?php
	function callback ($buffer) {
		preg_match_all("/<section[^>]*>.*?<\/section>/s", $buffer, $matches);
		$sections = $matches[0];
		$count = count($sections);
		preg_match_all("/<article[^>]*>.*?<\/article>/s", $buffer, $article_matches);
		$article_count = count( $article_matches[0]);
		foreach ($sections as $section) {
			$s = $section;
			preg_match_all("/<article[^>]*>.*?<\/article>/s", $section, $submatches);
			$articles = $submatches[0];
			$subcount = count($articles);
			$s = str_replace("25%", round(100 / $subcount, 5) . "%", $s);
			$s = str_replace("20%", round(100 * $subcount / $article_count, 5) . "%", $s);
			$buffer = str_replace($section, $s, $buffer);
		}
		$buffer = str_replace("500%", $article_count * 100 . "%", $buffer);
		return $buffer;
	}
	ob_start("callback");
?>

		<div id="main" role="main" style="width:500%">
			
			<div id="nav" class="nav">
				<ul id="nav-links">
					<li class="left"><a href="#home">celtic honey</a></li>
					<li class="left"><a href="#taste" id="taste-link">celtic taste</a></li>
					<li class="right"><a href="#find" id="buy-link">where to find</a></li>
					<li class="right"><a href="#ingredients" id="ingredients-link">ingredients</a></li>	
				</ul>
			</div>
			
<?php
	foreach ($sections as $section) {
		echo "\t\t\t" . '<section class="section" id="' . tighten($section["name"]) . '" style="width:20%">' . "\n";
		@include_once(tighten($section["name"]) . ".php");
		echo "\t\t\t" . '</section>' . "\n";
	}
?>
			<footer>
				<ul id="footer">
					<li class="highlight">Enjoy Celtic Honey Responsibly</li>
					<li>&copy; Castle Brands, Inc. New York, NY</li>
					<li><a href="../privacy.html" target="_blank">Privacy Policy</a></li>
					<li>an <a href="https://www.objectivesubject.com" target="_blank">Objective Subject</a> website</li>	
				</ul>
	    	</footer>

    	</div>
    	
    	
<?php
	ob_end_flush();
?>

    	
	</div> <!--! end of #container -->



  <!-- jQuery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/libs/jquery.livefilter.min.js"></script>
  <script defer src="js/script.js"></script>
  
  
  <!-- Age verification -->
  <script src="js/libs/jquery.cookie.js"></script>
  <script type="text/javascript">
	 $(document).ready(function(){
	 
	if ($.cookie('is_legal') == "yes") {
	 //legal!
	} else {
	 document.location = "https://www.celtichoney.com/verify.php?redirect=https://<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>";
	}
	 
	 });
  </script>
    
  
  <script>
	$(document.body).addClass('go');
  </script>
  
  <!-- Custom Scroll Bars -->
  <script type="text/javascript" src="js/libs/jquery.jscrollpane.min.js"></script>
  <script type="text/javascript" src="js/libs/jquery.mousewheel.js"></script>
  <script type="text/javascript"> 
		$(function()
		{
			$('.scroll-pane').jScrollPane(
				{
					showArrows: true,
					verticalGutter: 30
				}
			);			
		});
  </script>
  
  
  <!-- Cocktail Slideshow -->
  <script type="text/javascript" src="js/libs/jquery.cycle.all.js"></script>
  <script type="text/javascript">
  		$(function()
  		{	
  			$('.slideshow')
  			.before('<div id="cocktail-nav">')
  			.cycle({
  				fx:		'scrollHorz',
  				timeout: 0,
  				pager: 	'#cocktail-nav',
  				prev:   '#nav-arrow-left', 
			    next:   '#nav-arrow-right'
  			});	
  		});
  
  </script>
  <!-- end scripts-->

  <script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
