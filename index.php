<?php

	$ip = $_SERVER["REMOTE_ADDR"];
	$ua=$_SERVER['HTTP_USER_AGENT'];

?>
<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ja">  <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8" lang="ja">         <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9" lang="ja">                <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="ja">                       <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>2014.03.08</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta property="og:title" content="" />
<meta property="og:type" content="website" />
<meta property="og:description" content="" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:site_name" content="" />
<meta property="fb:admins" content="1047363919" />
<!--<meta property="fb:app_id" content="" />-->

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="./assets/images/favicon.ico">

<link rel="stylesheet" href="./_assets/css/reset.css" />
<link rel="stylesheet" href="./_assets/css/style.css" />
<script type="text/javascript" src="./_assets/js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">window.jQuery || document.write('<script src="./_assets/js/jquery-1.10.2.min.js"><\/script>')</script>
<!--[if lt IE 9]>
<script type="text/javascript" src="./_assets/js/IE9.js"></script>
<![endif]-->
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60473528-1', 'auto');
  ga('send', 'pageview');

</script>

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<?php if((strpos($ua,'iPhone')===false) && (strpos($ua,'iPod')===false) && (strpos($ua,'iPad')===false) && (strpos($ua,'Android')===false)): ?>

	<audio preload="auto" id="audio">
		<source src="./_assets/audio/joutouku.mp3" type="audio/mp3">
		<source src="./_assets/audio/joutouku.ogg" type="audio/ogg">
	</audio>

	<p id="initial" style="width: 600px; position: fixed; top: 50%; left: 50%; margin: -32px 0 0 -300px; text-align: center; color: #999; font-size: 11px; letter-spacing: 0.1em;">
		<img id="playButton" style="margin-bottom: 40px; cursor: pointer;" src="./_assets/images/playButton.png" height="64" width="64" alt="" onclick="ga('send', 'event', '20140308', 'Play', '<?= $ip; ?>');" /><br />
		<span class="notes">音量を上げてから再生してください。</span>
	</p>
	<ul>
		<li id="title" style="position: fixed; top: 50%; left: 50%; margin: -300px 0 0 -300px; opacity: 0; visibility: hidden;"><img src="./_assets/images/storyOfYouAndMe.png" alt="" /></li>
		<li id="gif1" style="position: fixed; top: 50%; left: 50%; margin: -300px 0 0 -300px; opacity: 0; visibility: hidden;"><img src="./_assets/images/1.gif" alt="" /></li>
		<li id="gif2" style="position: fixed; top: 50%; left: 50%; margin: -300px 0 0 -300px; opacity: 0; visibility: hidden;"><img src="./_assets/images/2.gif" alt="" /></li>
		<li id="gif3" style="position: fixed; top: 50%; left: 50%; margin: -300px 0 0 -300px; opacity: 0; visibility: hidden;"><img src="./_assets/images/3.gif" alt="" /></li>
		<li id="gif4" style="position: fixed; top: 50%; left: 50%; margin: -300px 0 0 -300px; opacity: 0; visibility: hidden;"><img src="./_assets/images/4.gif" alt="" /></li>
		<li id="gif5" style="position: fixed; top: 50%; left: 50%; margin: -300px 0 0 -300px; opacity: 0; visibility: hidden;"><img src="./_assets/images/5.gif" alt="" /></li>
		<li id="gif6" style="position: fixed; top: 50%; left: 50%; margin: -300px 0 0 -300px; opacity: 0; visibility: hidden;"><img src="./_assets/images/6.gif" alt="" /></li>
		<li id="gif7" style="position: fixed; top: 50%; left: 50%; margin: -300px 0 0 -300px; opacity: 0; visibility: hidden;"><img src="./_assets/images/7.gif" alt="" /></li>
		<li id="iLoveYou" style="position: fixed; top: 50%; left: 50%; margin: -300px 0 0 -300px; opacity: 0; visibility: hidden;"><img src="./_assets/images/iLoveYou.png" alt="" /></li>
		<li id="happyBirthday" style="position: fixed; top: 50%; left: 50%; margin: -300px 0 0 -300px; opacity: 0; visibility: hidden;"><img src="./_assets/images/happyBirthday.png" alt="" /></li>
	</ul>

	<script type="text/javascript" src="./_assets/js/script.js"></script>

<?php else: ?>

	<p id="initial" style="width: 600px; position: fixed; top: 50%; left: 50%; margin: -12px 0 0 -300px; text-align: center; font-size: 11px;">
		<span class="notes">Sorry, this page is available only for PC.&nbsp;</span>
	</p>

<?php endif; ?>
</body>
</html>