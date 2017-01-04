<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="device-width, initial-scale=1">

	<title>A Tribute to Nathaniel Kleitman</title>

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style type="text/css">
		
		/*Style the div element displaying Kleitman's name. Manipulate the z-index such that it will be overlaid on another with his picture. This will resemble an opaque banner by manipulating the alpha transparency for the div's black background. */
		#bio_title{
			font-family: 'Lobster', 'cursive';
			background: rgba(0,0,0,0.7);
			z-index: 10;
			position: relative;
			top: 450px;
			width: 800px;
			padding-top: 5px;
			padding-bottom: 5px;
			
		}

		/*Create the wrapper div using relative positioning with automatic margins for centering within the body element*/
		#wrapper{
			width: 800px;
			height: 1600px;
			background: #e3e3e3;
			position: relative;
			margin: auto;
		}

		/*Position the header element within the wrapper, with a small standoff from the top of the page.
		Using relative positioning allows us to access top, bottom, right and left attributes*/
		#header{
			position: relative;
			top: 20px;
		}

		/*
		#title_background{
			z-index: 2;
			width: 100%;
			position: absolute;
		}*/

		/*Position the information element within the wrapper, with a small standoff from the header element*/
		#information{
			
			position: relative;
			top: 40px;

		}

		/*Set up parallax scrolling class (adapted from W3Schools) by setting a background image with a specific size. Also set a height
		for the view area and subsequently center and fix the background in place so as to create the parallax effect.

		NOTE: This is very simplistic, since ideally the background image should not be completely unaffected by scrolling. It should instead move at a slower rate relative to the foreground. Additionally, not all mobile devices respond well to parallax scrolling so there needs to be a way of overriding this. Definitely need to learn more.*/
		.parallax{

			background-image: url("pics/kleitman_image.png");
			background-size: 800px 574px;			
			height: 574px;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;			
		}

		/*Set the foreground text to be overlaid within the bio_title div to white*/
		h1,h3{

			color: white;
		}

		
		p,ul{
			font-family: 'cursive';
			text-align: justify;
		}

		
		footer > p{
			font-family: 'cursive';
			text-align: center;
			color: white;

		}

		footer{
			position: relative;
			top: 130px;
			background-color: black;
		}

		

	</style>


<body>

<div id="wrapper">
	
	<!--The below div is the basically the introductory image and banner for the page, set up to give a parallax scrolling effect via CSS.-->
	<div id="header" class="parallax">

		

		<div id="bio_title" class="text-center">
		<h1>Dr Nathaniel Kleitman (Apr 26 1895 - Aug 13 1999)</h1>

		<h3>The Father of Modern Sleep Research</h3>
		</div>
	</div>
	
	<!--The below div will be responsible for displaying all information surrounding Kleitman. Bootstrap is used to assist with positioning the child elements.-->
	<div id="information" class="container-fluid">
		
		<div class="section col-md-6"><h4 class="text-primary text-center"><em>INTRODUCTION</em></h4>
			<p>Nathaniel Kleitman isn't called the <em>'Father of Modern Sleep Research'</em> for nothing. From a young age, he was always fascinated by matters of consciousness, which he believed could be further elucidated by the study of sleep. Through his persistence, determination and consistency, we now have access to a large body of information regarding that most mysterious state we all need to enter daily. Kleitman's command of languages ranged from French, German, Italian and English, and this enabled him to integrate greater than 4000 references from other researchers and pioneers. The result was a compendium of critically interwoven and correlated studies of sleep, inclusive of sleep disorders and circadian rhythm purpose/function.
			</p>


		</div>

		<div class="section col-md-6"><h4 class="text-primary text-center"><em>HISTORY</em></h4>
			<p>Dr Kleitman's past is fascinating, and proves that adversity can sometimes be the furnace which leads to success. His birthhplace was Kishinev, now known as Chișinău, the capital and largest city of the Republic of Moldova. Being of Jewish descent, he, along with other members of the Jewish community, soon became targets of anti-Semitic sentiment, which led to violent riots. These riots forced Kleitman from his home, with the looming presence of World War I eventually pushing him to American soil in the 1920s. Even though he was initially penniless, he made his way through college and eventually earned a PhD (summa cum laude) from the University of Chicago, for which he later served as a Professor in Physiology. 
			</p>
		</div>

		<div class="section col-md-12"><h4 class="text-primary text-center"><em>MAJOR ACHIEVEMENTS</em></h4>
			<ul>
				<li>1923 - "The Effects of Prolonged Sleeplessness on Man" -- Kleitman's first study that was also published in volume 66 of the American Journal of Physiology (1923)</li>
				<li>1923 - "Studies on the Physiology of Sleep" -- Kleitman's doctoral dissertation which was essentially a broader treatment of his master's thesis</li>
				<li>1925 - Opened the world's first sleep laboratory at the University of Chicago</li>
				<li>1938 - So as to ensure stable conditions for sleep testing, Kleitman and his assistant spent more than a month 150 feet underground in Mammoth Cave, Kentucky</li>
				<li>1939 - "Sleep and Wakefulness as Alternating Phases in the Cycle of Existence" -- a study distilled from the critical examination of over 1,400 scientific pieces of literature on sleep from several countries</li>
				<li>1948 - Kleitman spent 2 weeks onboard the submarine <em>Dogfish</em> so as to verify the effect of a lack of sunlight on the body's sleep-wake routines (this led to a theory on the basic rest-activity cycle, which has now been expanded into our current understanding of sleep architecture)</li>
				<li>1953 - "Regularly Occurring Periods of Eye Motility, and Concomitant Phenomena, During Sleep" - a paper jointly written with Kleitman's student regarding the discovery of REM (Rapid-Eye-Movement) during sleep</li>
				<li>1960 - Retired as a full professor from UCLA and achieved the distinguished title of Professor Emeritus</li>
				<li>1963 - Revised, expanded and republished the first volume of "Sleep and Wakefulness as Alternating Phases in the Cycle of Existence"</li>
				<li>2001 - Participated in an 8-year study on sleep in the elderly, with the results being published in the study "Sleep in a Nonagenarian: N. Kleitman" (D. L. Bliwise)</li>
			</ul>
			
		</div>

		<div class="section col-md-12"><h4 class="text-primary text-center"><em>MORE INFORMATION</em></h4>
			<p>For more information, feel free to check out the below resources:				
			</p>
			<ul>
				<li><a href="https://en.wikipedia.org/wiki/Nathaniel_Kleitman"><em>"Nathaniel Kleitman."</em> Wikipedia.</a></li>
				<li><a href="https://web.archive.org/web/20080208152529/http://www.npi.ucla.edu/sleepresearch/Kleitman/Kleitman.htm">Siegel, J.M. <em>"A Tribute to Nathaniel Kleitman."</em> The Wayback Machine.</a></li>
				<li><a href="http://anb.org/articles/12/12-01800.html">Wepman, D. <em>"Nathaniel Kleitman."</em> American National Biography Online.</a></li>
			</ul>
		</div>


	<footer>
			<p>Posted by: Joshua E. Thomas | Find me on <a href="https://www.twitter.com/fujishima">Twitter</a> <em>#100DaysofCode</em>
			</p>
	</footer>

 	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>