<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>31 Seconds to Mars</title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="author" content="Erwin Aligam - styleshout.com" />
<meta name="description" content="Site Description Here" />
<meta name="keywords" content="keywords, here" />
<meta name="robots" content="index, follow, noarchive" />
<meta name="googlebot" content="noarchive" />

<link rel="stylesheet" type="text/css" media="screen" href="images/Ablaze.css" />
<link rel="stylesheet" type="text/css" media="screen" href="images/nivo-slider.css" />
<link rel="stylesheet" type="text/css" media="screen" href="themes/default/default.css" />

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36375138-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

	<!-- header starts here -->
	<div id="header"><div id="header-content">
		<a href="index.php"><img src="images/logo.png" style="background-color: transparent; border: 0px; padding: 0px;" alt="logo" /></a>
		<h1 id="logo">31 Seconds to Mars</h1>
		<h2 id="slogan">who said the sky was the limit?</h2>
		
		<!-- Menu Tabs -->
		<?php
			$navigation = array(
				'index' => array('index.php', 'Home'),
				'events' => array('events.php', 'Events'),
				'information' => array('information.php', 'Information'),
				'activities' => array('activities.php', 'Activities'),
				'contact' => array('contact.php', 'Contact'),
			);
		?>
		<ul>
		<?php foreach($navigation as $key => $value): ?>
			<li><a href="<?php echo $value[0]; ?>"<?php if($page == $key): ?>id="current"<?php endif;?>><?php echo $value[1]; ?></a></li>
		<?php endforeach; ?>
		</ul>
	
	</div></div>
					
	<!-- content-wrap starts here -->
	<div id="content-wrap"><div id="content">