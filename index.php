<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jan Vidic</title>
		<script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/jquery.visible.js"></script>
        <script src="js/core.js"></script>
		<script type="text/javascript" src="apis/bootstrap-3.3.5/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="apis/bootstrap-3.3.5/js/bootstrap-tooltip.js"></script>
		<script type="text/javascript" src="apis/typed.js/lib/typed.min.js"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
		
		
		<link href="apis/hamburgers/dist/hamburgers.css" rel="stylesheet">
		
		
		
		<link rel="stylesheet" type="text/css" href="apis/IsometricGrids/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="apis/IsometricGrids/css/component.css" />
		<script src="apis/IsometricGrids/js/modernizr.custom.js"></script>
		
		<link rel="stylesheet" href="apis/bootstrap-3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/core.css">
		
		<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=0">
    </head>
    <body>
		<div class="container">
			<div id="DosSection" class="dosSection">
				<div class="col-md-8 col-md-offset-2 dosWrapper">
					<div class="col-md-12 noPaddingAlways dosInner">
						<div class="dosText">
							<span class="typedElement"></span>
							<span class="typedMenu"></span>
						</div>
						<div class="dosCaption">
							ABOUT ME
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="PersonalInfo" class="col-md-12 noPaddingAlways personalInfo">
			<div class="col-md-6 personalInfoPic">
				<div class="col-md-12 innerInfo" style=" text-align: center;">
					<img class="image-circle" src="images/me.jpg">
					<div class="meTitle" style="padding-top: 20px;">
						Jan Vidic <br> Web Developer
					</div>
				</div>
			</div>	
			<div class="col-md-6 personalInfoText">
				<div class="col-md-10 col-md-offset-1 meText" style=" text-align: justify; ">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</div>
			</div>	
		</div>
		
		<div id="Work" class="col-md-12 noPaddingAlways work">
			<div class="col-md-12 workBackground">
				<div class="col-md-12 workTitle" style="padding-top: 30vh;">What I've worked on so far:</div>
				<section class="section section--intro">
				<div class="isolayer isolayer--deco1 isolayer--shadow">
					<ul class="grid">
						<li class="grid__item">
							<a class="grid__link" href="https://dribbble.com/fuviz"><div class="layer"></div><div class="layer"></div><div class="layer"></div><img class="grid__img layer" src="img/Dribbble/2.png" alt="02" /></a>
						</li>
						<li class="grid__item">
							<a class="grid__link" href="https://dribbble.com/fuviz"><div class="layer"></div><div class="layer"></div><div class="layer"></div><img class="grid__img layer" src="img/Dribbble/3.png" alt="03" /></a>
						</li>
						<li class="grid__item">
							<a class="grid__link" href="https://dribbble.com/fuviz"><div class="layer"></div><div class="layer"></div><div class="layer"></div><img class="grid__img layer" src="img/Dribbble/4.png" alt="04" /></a>
						</li>
						<li class="grid__item">
							<a class="grid__link" href="https://dribbble.com/fuviz"><div class="layer"></div><div class="layer"></div><div class="layer"></div><img class="grid__img layer" src="img/Dribbble/5.png" alt="05" /></a>
						</li>
						<li class="grid__item">
							<a class="grid__link" href="https://dribbble.com/fuviz"><div class="layer"></div><div class="layer"></div><div class="layer"></div><img class="grid__img layer" src="img/Dribbble/6.png" alt="06" /></a>
						</li>
						<li class="grid__item">
							<a class="grid__link" href="https://dribbble.com/fuviz"><div class="layer"></div><div class="layer"></div><div class="layer"></div><img class="grid__img layer" src="img/Dribbble/7.png" alt="07" /></a>
						</li>
					</ul>
				</div>
			</section>
			</div>	
		</div>
		
		<div id="Contact" class="col-md-12 noPaddingAlways contact">
			<div class="container">
				<div class="col-md-12 sectionTitle" style="text-align: center; padding-top: 10vh;">Contact me</div>
				<div class="col-md-8 col-md-offset-2" style="padding-top: 3vh;">
					<form class="login__form" method="POST" name="Login" action="#">
						<main class="login__main">
							<div class="login__group">
								<input class="login__input" type="text" name="Name" required>
								<label class="login__label">Firstname and lastname </label>
								<div class="login__bar"></div>
							</div>
							<div class="login__group">
								<input class="login__input" type="text" name="Email" required>
								<label class="login__label">Email </label>
								<div class="login__bar"></div>
							</div>
							<div class="login__group">
								<textarea class="login__input" type="text" name="Message" required></textarea>
								<label class="login__label">Message </label>
								<div class="login__bar"></div>
							</div>
							<div class="col-md-12" align="center">
								<button type="button" onclick="sendEmail();">YES!</button>
							</div>
						</main>
					</form>
				</div>
			</div>	
		</div>
		
		<script>
			var typed = new Typed('.typedElement', {
				strings: ["\
					C:\\ cd /about-me\n\
					<br>\n\
					C:\\ print about.me\n\
					<br><br>######## ABOUT.ME #######<br>\n\
					I am Jan Vidic and I'm a Front + Back end developer.<br>\n\
					My skillset:<br>\n\
					- HTML, CSS, jQuery, Bootstrap<br>\n\
					- PHP, C, C++, Python, Java<br>\n\
					- React, Symfony, Knockout.js<br>\n\
					- MySQL<br>\n\
					- ...<br>\n\
					<br>\n\
					Enough about me... press [M] to open menu!\n\
				"],
				typeSpeed: 20
			});
			
			
			
			
			
			
			$(document).on("keypress", function (e) {
				if(e.which == 109 || e.which == 77){
					
					/*$('html, body').animate({
						scrollTop: $(".typedMenu").offset().top
					}, 100);*/
					
					var typedMenu = new Typed('.typedMenu', {
					strings: ["\
						<br>C:\\ cd /root\n\
						<br>\n\
						C:\\ print menu.info\n\
						<br><br>######## MENU.INFO #######<br>\n\
						Available options:<br>\n\
						- Personal info [P]<br>\n\
						- Work [W]<br>\n\
						- Contact [C]<br>\n\
						Choose an option!\n\
					"],
					typeSpeed: 10,
				});
				} else if(e.which == 112 || e.which == 80){
					$('html, body').animate({
						scrollTop: $("#PersonalInfo").offset().top
					}, 500);
				} else if(e.which == 119 || e.which == 87){
					$('html, body').animate({
						scrollTop: $("#Work").offset().top
					}, 500);
				} else if(e.which == 99 || e.which == 67){
					$('html, body').animate({
						scrollTop: $("#Contact").offset().top
					}, 500);
				}
			});
			</script>
			
			<script src="apis/IsometricGrids/js/imagesloaded.pkgd.min.js"></script>
			<script src="apis/IsometricGrids/js/masonry.pkgd.min.js"></script>
			<script src="apis/IsometricGrids/js/dynamics.min.js"></script>
			<script src="apis/IsometricGrids/js/classie.js"></script>
			<script src="apis/IsometricGrids/js/main.js"></script>
			<script>
			(function() {
				function getRandomInt(min, max) {
					return Math.floor(Math.random() * (max - min + 1)) + min;
				}

				new IsoGrid(document.querySelector('.isolayer--deco1'), {
					transform : 'translateX(20vw) translateY(40px) rotateX(15deg) rotateZ(15deg)',
					stackItemsAnimation : {
						properties : function(pos) {
							return {
								translateZ: (pos+1) * 30,
								rotateZ: getRandomInt(-4, 4)
							};
						},
						options : function(pos, itemstotal) {
							return {
								type: dynamics.bezier,
								duration: 500,
								points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
								delay: (itemstotal-pos-1)*40
							};
						}
					}
				});
			})();
			</script>
    </body>
</html>
