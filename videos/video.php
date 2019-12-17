<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<title>Opposition | Hip-Hop Network Helping Artists Grow Their Brand & YouTube</title>
    	<meta property="og:title" content="Opposition | Hip-Hop Network Helping Artists Grow Their Brand & YouTube"/>
    	<meta name="description" content="Opposition Network helps connect true hip hop artists with crowds. Access our exclusive technology to help grow your YouTube channel & get more views." />

    	<link rel="icon" href="/img/icon.gif" />

    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Oswald'>
    	
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        <?php include '../partial/header.php';?>
		
		<div id="videowall" part="snippet" channel-id="UCV4WWNKhVzL_JbggpqCT3FQ" playlist-id="PLMacexwRj2081nVXzq5mf-I6VTO-JijNw" api="AIzaSyBE1pt6yOwbG2F0eWtPNRdB_w9W62E-4vA" v-on="scroll: scroll">
			<div class="iframe-video" v-class="open: opened" data-video-id="{{videoIframe}}" data-video-title="{{videoTitle}}">
				<button class="close material-icons" v-on="click: toggleVideo">close</button>
				<div id="player"></div>
				<div class="progress" onmousemove="setNewVideoDuration()">
					<div class="progress-bar"></div>
				</div>
				<nav class="video-navigation">
					<button onclick="togglePlayVideo(this)">
						<i class="material-icons play">play_arrow</i>
						<i class="material-icons pause">pause</i>
					</button>
					<h2 class="title">{{videoTitle}}</h2>
					<time class="current-time">0:00</time>
					<time class="total-time">0:00</time>
				</nav>
			</div>

			<ul>
				<li-video v-repeat="videos" v-on="click: toggleVideo"></li-video>
			</ul>
		</div>

        <script type="application/ld+json" src="/js/knowledgegraph.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.12/vue.min.js" type="text/javascript"></script>
		<script src="js/custom-videoplayer.js" type="text/javascript"></script>
		<script src="js/videowall.js" type="text/javascript"></script>
		<script type="text/javascript">
			var menuBtn = document.getElementById('menuBtn');
			var header = document.getElementsByClassName('header')[0];

			menuBtn.addEventListener('click', function(e) {
				header.classList.toggle('displayMenu');
			});
		</script>
	</body>

</html>