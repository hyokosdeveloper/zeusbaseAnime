<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>zeusbaseCSS</title>
<style type="text/css">
body {
	background: #161616 url(img/pattern_40.gif) top left repeat;
	margin: 0;
	padding: 0;
	font: 12px normal Verdana, Arial, Helvetica, sans-serif;
	height: 100%;
}

* {margin: 0; padding: 0; outline: none;}

img {border: none;}

a { 
	text-decoration:none; 
	color:#00c6ff;
}

h1 {
	font: 4em normal Arial, Helvetica, sans-serif;
	padding: 20px;	margin: 0;
	text-align:center;
	color:#bbb;
}

h1 small{
	font: 0.2em normal  Arial, Helvetica, sans-serif;
	text-transform:uppercase; letter-spacing: 0.2em; line-height: 5em;
	display: block;
}

.container {width: 960px; margin: 0 auto; overflow: hidden;}

/* PROGRESS BAR */

ul#progress {
	list-style:none;
	width:125px;
	margin:0 auto;
	padding-top:50px;
	padding-bottom:50px;
}
ul#progress li {
	float:left;
	position:relative;
	width:15px;
	height:15px;
	border:1px solid #fff;
	border-radius:50px;
	margin-left:10px;
	border-left:1px solid #111; border-top:1px solid #111; border-right:1px solid #333; border-bottom:1px solid #333; 
	background:#000;
}

ul#progress li:first-child { margin-left:0; }

/**
.running .ball {
	background-color:#2187e7; 
	background-image: -moz-linear-gradient(90deg, #2187e7 25%, #a0eaff); 
	background-image: -webkit-linear-gradient(90deg, #2187e7 25%, #a0eaff); 

	width:15px;
	height:15px;
	border-radius:50px;
	-moz-transform:scale(0);
	-webkit-transform:scale(0);
	
	-moz-animation:loading 1s linear forwards;
	-webkit-animation:loading 1s linear forwards;
}

.running .pulse {
	width:15px;
	height:15px;
	border-radius:30px;
	border: 1px solid #00c6ff;
	box-shadow: 0 0 5px #00c6ff;
	position:absolute;
	top:-1px;
	left:-1px;
	-moz-transform:scale(0);
	-webkit-transform:scale(0);
	
	-webkit-animation:pulse 1s ease-out;
	-moz-animation:pulse 1s ease-out;
}

*/
.running .ball {
	background-color:#12fa7a; 
	background-image: -moz-linear-gradient(90deg, #21e871 11.09%, #338362 50.66%, #8ee7a4 100%); 
	background-image: -webkit-linear-gradient(90deg, #21e871 11.09%, #338362 50.66%, #8ee7a4 100%); 

	width:15px;
	height:15px;
	border-radius:50px;
	-moz-transform:scale(0);
	-webkit-transform:scale(0);
	
	-moz-animation:loading 1s linear forwards;
	-webkit-animation:loading 1s linear forwards;
}

.running .pulse {
	width:15px;
	height:15px;
	border-radius:30px;
	border: 1px solid #00ff89;
	box-shadow: 0 0 5px #00ff12;
	position:absolute;
	top:-1px;
	left:-1px;
	-moz-transform:scale(0);
	-webkit-transform:scale(0);
	
	-webkit-animation:pulse 1s ease-out;
	-moz-animation:pulse 1s ease-out;
}


#layer1 { -moz-animation-delay:0.5s; -webkit-animation-delay:0.5s; }
#layer2 { -moz-animation-delay:1s; -webkit-animation-delay:1s; }
#layer3 { -moz-animation-delay:1.5s; -webkit-animation-delay:1.5s; }
#layer4 { -moz-animation-delay:2s; -webkit-animation-delay:2s; }
#layer5 { -moz-animation-delay:2.5s; -webkit-animation-delay:2.5s; }

#layer7 { -moz-animation-delay:1.5s; -webkit-animation-delay:1.5s; }
#layer8 { -moz-animation-delay:2s; -webkit-animation-delay:2s; }
#layer9 { -moz-animation-delay:2.5s; -webkit-animation-delay:2.5s; }
#layer10 { -moz-animation-delay:3s; -webkit-animation-delay:3s; }
#layer11 { -moz-animation-delay:3.5s; -webkit-animation-delay:3.5s; }

@-moz-keyframes loading {
	0%{-moz-transform:scale(0,0);}
	100%{-moz-transform:scale(1,1);}	
}

@-webkit-keyframes loading {
	0%{-webkit-transform:scale(0,0);}
	100%{-webkit-transform:scale(1,1);}	
}


@-moz-keyframes pulse {
	0%   {-moz-transform: scale(0);opacity: 0;}
    10%  {-moz-transform: scale(1);opacity: 0.5;}
	50%  {-moz-transform: scale(1.75);opacity: 0;}
    100% {-moz-transform: scale(0);opacity: 0;}  
}

@-webkit-keyframes pulse {
	0%   {-webkit-transform: scale(0);opacity: 0;}
	10%  {-webkit-transform: scale(1);opacity: 0.5;}
    50%  {-webkit-transform: scale(1.75);opacity: 0;}
    100% {-webkit-transform: scale(0);opacity: 0;}    
}


/* Full Width Progress Bar */

#content { 
	width:100%; 
	height:5px; 
	margin:50px auto; 
	background:#000;
}

.fullwidth-red .expand { 
	width:100%; 
	height:1px; 
	margin:2px 0; 
	background:#e82146; 
	position:absolute;
	box-shadow:0px 0px 10px 1px rgba(255, 0, 5, 0.44);
    -moz-animation:fullexpand 10s ease-out;
	-webkit-animation:fullexpand 10s ease-out;
}

.fullwidth .expand { 
	width:100%; 
	height:1px; 
	margin:2px 0; 
	background:#2187e7; 
	position:absolute;
	box-shadow:0px 0px 10px 1px rgba(0,198,255,0.7);
    -moz-animation:fullexpand 10s ease-out;
	-webkit-animation:fullexpand 10s ease-out;
}


@-moz-keyframes fullexpand {
	0%  { width:0px;}
	100%{ width:100%;}	
}
@-webkit-keyframes fullexpand {
	0%  { width:0px;}
	100%{ width:100%;}	
}

/* Loader Bar */

ul#loadbar {
	list-style:none;
	width:200px;
	margin:0 auto;
	padding-top:50px;
	padding-bottom:75px;
}
ul#loadbar li {
	float:left;
	position:relative;
	width:11px;
	height:26px;
	margin-left:1px;
	border-left:1px solid #111; border-top:1px solid #111; border-right:1px solid #333; border-bottom:1px solid #333; 
	background:#000;
}

ul#loadbar li:first-child { margin-left:0; }

.ins .bar {
	background-color:#2187e7;  
	background-image: -moz-linear-gradient(45deg, #2187e7 25%, #a0eaff); 
	background-image: -webkit-linear-gradient(45deg, #2187e7 25%, #a0eaff);
	width:16px;
	height:26px;
	opacity:0;
	-webkit-animation:fill .5s linear forwards;
	-moz-animation:fill .5s linear forwards;
}

#layerFill1 { -moz-animation-delay:0.5s; -webkit-animation-delay:0.5s; }
#layerFill2 { -moz-animation-delay:1s; -webkit-animation-delay:1s; }
#layerFill3 { -moz-animation-delay:1.5s; -webkit-animation-delay:1.5s; }
#layerFill4 { -moz-animation-delay:2s; -webkit-animation-delay:2s; }
#layerFill5 { -moz-animation-delay:2.5s; -webkit-animation-delay:2.5s; }
#layerFill6 { -moz-animation-delay:3s; -webkit-animation-delay:3s; }
#layerFill7 { -moz-animation-delay:3.5s; -webkit-animation-delay:3.5s; }
#layerFill8 { -moz-animation-delay:4s; -webkit-animation-delay:4s; }
#layerFill9 { -moz-animation-delay:4.5s; -webkit-animation-delay:4.5s; }
#layerFill10 { -moz-animation-delay:5s; -webkit-animation-delay:5s; }
#layerFill11 { -moz-animation-delay:5.5s; -webkit-animation-delay:5.5s; }
#layerFill12 { -moz-animation-delay:6s; -webkit-animation-delay:6s; }
#layerFill13 { -moz-animation-delay:6.5s; -webkit-animation-delay:6.5s; }


@-moz-keyframes fill {
	0%{ opacity:0; }
	100%{ opacity:1; }	
}

@-webkit-keyframes fill {
	0%{ opacity:0; }
	100%{ opacity:1; }	
}

/* Trigger button for javascript */

.trigger, .triggerFull, .triggerBar, .redTriggerFull {
	background: #000000;
	background: -moz-linear-gradient(top, #161616 0%, #000000 100%);
	background: -webkit-linear-gradient(top, #161616 0%,#000000 100%);
	border-left:1px solid #111; border-top:1px solid #111; border-right:1px solid #333; border-bottom:1px solid #333; 
	font-family: Verdana, Geneva, sans-serif;
	font-size: 0.8em;
	text-decoration: none;
	text-transform: lowercase;
	text-align: center;
	color: #fff;
	padding: 10px;
	border-radius: 3px;
	display: block;
	margin: 0 auto;
	width: 140px;
}
		
.trigger:hover, .triggerFull:hover, .triggerBar:hover {
	background: -moz-linear-gradient(top, #202020 0%, #161616 100%);
	background: -webkit-linear-gradient(top, #202020 0%, #161616 100%);
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js" type="text/javascript"></script>
<script>		
$(document).ready(function() {
	$('#progress').removeClass('running');	    
		$('.trigger').click(function() {
			
			$('#progress').removeClass('running').delay(10).queue(function(next){
				$(this).addClass('running');
		        next();
		    });
		    return false;
		    
		});
});

$(document).ready(function() {
	$('#content').removeClass('fullwidth');	    
	$('#content2').removeClass('fullwidth-red');
	
	$('.triggerFull').click(function() {
		
		$('#content').removeClass('fullwidth').delay(10).queue(function(next){
			$(this).addClass('fullwidth');
	        next();
	    });
	    return false;
	
	});
	$('.redTriggerFull').click(function() {
					
		$('#content2').removeClass('fullwidth-red').delay(10).queue(function(next){
			$(this).addClass('fullwidth-red');
	        next();
	    });
	    return false;
	
	});		
		
});

$(document).ready(function() {
	$('#loadbar').removeClass('ins');	    
	$('.triggerBar').click(function() {
			
			$('#loadbar').removeClass('ins').delay(10).queue(function(next){
				$(this).addClass('ins');
		        next();
		    });
		    return false;
		    
		});
});
</script>
</head>
<body>
<h1>zeusbase CSS<small> Progress Loaders </small></h1>


<!-- PROGRESS BALL LOADER -->
<div class="container">
	<ul id="progress">
    <li><div id="layer1" class="ball"></div><div id="layer7" class="pulse"></div></li>
    <li><div id="layer2" class="ball"></div><div id="layer8" class="pulse"></div></li>
    <li><div id="layer3" class="ball"></div><div id="layer9" class="pulse"></div></li>
    <li><div id="layer4" class="ball"></div><div id="layer10" class="pulse"></div></li>
    <li><div id="layer5" class="ball"></div><div id="layer11" class="pulse"></div></li>
    </ul>
	<a class="trigger" href="#">Start/Restart Animation</a>
</div>
<!-- END PROGRESS BALL LOADER -->

<!-- FULL WIDTH -->
<div id="content">
	<span class="expand"></span>
</div>
<div id="content2">
	<span class="expand"></span>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<a class="triggerFull" href="#">Start/Restart Animation</a>
<a class="redTriggerFull" href="#">Start/Restart Animation</a>
<!-- END FULL WIDTH -->

<!-- LOADER BAR -->
<div class="container">
	<ul id="loadbar">
    <li><div id="layerFill1" class="bar"></div></li>
    <li><div id="layerFill2" class="bar"></div></li>
    <li><div id="layerFill3" class="bar"></div></li>
    <li><div id="layerFill4" class="bar"></div></li>
    <li><div id="layerFill5" class="bar"></div></li>
    <li><div id="layerFill6" class="bar"></div></li>
    <li><div id="layerFill7" class="bar"></div></li>
    <li><div id="layerFill8" class="bar"></div></li>
    <li><div id="layerFill9" class="bar"></div></li>
    <li><div id="layerFill10" class="bar"></div></li>
    <li><div id="layerFill11" class="bar"></div></li>
    <li><div id="layerFill12" class="bar"></div></li>
    <li><div id="layerFill13" class="bar"></div></li>    
    </ul>
<a class="triggerBar" href="#">Start/Restart Animation</a>
</div>
<!-- END LOADER BAR -->
</body>
</html>
