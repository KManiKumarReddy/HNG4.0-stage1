<!DOCTYPE html>
<html>
<head>
	<title>HNG Internship - Stage 1 | Mani Kumar Reddy Kancharla</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Alfa+Slab+One');
		@import url('https://fonts.googleapis.com/css?family=Open+Sans');
		.background {
			/* MacBook */

			position: relative;
			width: 1152px;
			height: 700px;

			background: #FFFFFF;
		}
		.rectangle {
			/* Rectangle */

			position: absolute;
			width: 373px;
			height: 700px;
			left: 0px;
			top: 0px;

			background: #C4C4C4;
		}
		.ellipse {
			/* Ellipse */

			position: absolute;
			width: 285px;
			height: 285px;
			left: 44px;
			top: 55px;

			background: url(https://pbs.twimg.com/profile_images/983335508297375745/tT8BgRrT_400x400.jpg) center/285px 285px, #C4C4C4;
			border-radius: 100%;
		}
		.hi {
			/* Hi, Welcome to my project. */

			position: absolute;
			width: 686px;
			height: 66px;
			left: 414px;
			top: 55px;

			font-family: Alfa Slab One;
			font-style: normal;
			font-weight: normal;
			line-height: normal;
			font-size: 48px;

			color: #01AFFF;
		}
		.paratext {
			/* Here’s what you came for, or when precisely: */

			position: absolute;
			width: 501px;
			height: 33px;
			left: 414px;
			top: 164px;

			font-family: Open Sans;
			font-style: normal;
			font-weight: normal;
			line-height: normal;
			font-size: 24px;

			color: #38728C;
		}
		.time {
			/* Tuesday April 10, 2018 12:00 PM. */

			position: absolute;
			width: 553px;
			height: 50px;
			left: 414px;
			top: 240px;

			font-family: Open Sans;
			font-style: normal;
			font-weight: normal;
			line-height: normal;
			font-size: 36px;

			color: #38728C;
		}
		.name {
			/* HNG Internship 4.0 Stage - I */

			position: absolute;
			width: 251px;
			height: 66px;
			left: 44px;
			top: 371px;

			font-family: Alfa Slab One;
			font-style: normal;
			font-weight: normal;
			line-height: normal;
			font-size: 24px;

			color: #38728C;
		}
		.credits {
			/* Developed by Mani Kumar Reddy Kancharla */

			position: absolute;
			width: 246px;
			height: 17px;
			left: 414px;
			top: 672px;

			font-family: Open Sans;
			font-style: normal;
			font-weight: normal;
			line-height: normal;
			font-size: 12px;

			color: #000000;
		}
	</style>
</head>
<body>
	<div class="background">	
		<div class="rectangle">
			<div class="ellipse">
				<h3 class="name">HNG Internship 4.0<br/>Stage - I</h3>
			</div>
		</div>
		<h1 class="hi">Hi, Welcome to my project.</h1>
		<p class="paratext">Here&#39;s what you came for, or when precisely:</p>
		<p class="time"><?php echo date("l jS \of F Y h:i:s A");?>.</p>
		<p class="credits">Developed by <a href="http://www.kmanikumarreddy.com/">Mani Kumar Reddy Kancharla</a></p>
	</div>
</body>
</html>