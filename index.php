<?php
$page = 'index';
include 'header.php';
?>

		<div id="main">
		
			<a name="TemplateInfo"></a>
			<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({
					controlNav: false,
				});
			});
			</script>
			
			<div class="slider-wrapper theme-default" style="height:227px; width:557px; padding-left: 15px">
				<div id="slider" class="nivoSlider">
					<img src="images/mars_from_space.jpg" alt="" title="#mars_from_space" />
					<img src="images/rover.jpg" alt="" title="#rover" />
					<img src="images/mars_from_space-2.jpg" alt="" title="#mars_from_space-2" />
					<img src="images/rover-curiosity-1.jpg" alt="" title="#rover-curiosity-1" />
				</div>
				<div id="mars_from_space" class="nivo-html-caption">
					Source: <a href="http://www.space.com/47-mars-the-red-planet-fourth-planet-from-the-sun.html" alt="">space.com</a>
				</div>
				
				<div id="rover" class="nivo-html-caption">
					Source: <a href="http://en.wikipedia.org/wiki/Mars_Exploration_Rover" alt="">Wikipedia</a>
				</div>
				
				<div id="mars_from_space-2" class="nivo-html-caption">
					Source: <a href="http://www.guardian.co.uk/science/across-the-universe/2012/aug/05/curiosity-rover-nasa-life-mars" alt="">the guardian</a>
				</div>
				
				<div id="rover-curiosity-1" class="nivo-html-caption">
					Source: <a href="http://en.wikipedia.org/wiki/File:PIA15279_3rovers-stand_D2011_1215_D521-crop2-CuriosityRover.jpg" alt="">wikimedia commons</a>
				</div>
			</div>
			
			<h1>About Us</h1>
			<p>31 Seconds to Mars is a research website that provides support services to the community in helping enrich the minds of today. Also we conduct planetary science research under the leaderships of our many staff and scientists, our Mars visiting researchers on finding new data specifically in our, our Mars visiting researchers on finding new data specifically in our 5th planet in the orbit.</p>
			
			<p style="text-align: center">
				<img src="images/mars_1.jpg" />
				<img src="images/rover_1.jpg" />
				<img src="images/mars_2.jpg" />
			</p>
			
			<p>31 Seconds to Mars was described by the University Space Research Association "a center of research and learning where the any adult, young adult and child can benefit from all the variety of knowledge of the planet and the universe itself". The research website serves in three main purposes:</p>
			<p><strong>Research Science:</strong> The Website is the center for all the science studies of Mars, conducting research studies on the formation and evolution of the planet, along with a whole through analysis of data and samples obtained by NASA's long history of missions and exploration.</p>
			<p><strong>Service to the Whole Community:</strong> The website coordinates a lot of activities such as meetings on lunar and planetary events to learn about all kinds of interesting facts about Mars. Including an abstract database of more than 1,000 presentations and picture media provided by us thanks to the NASA space center.</p>
			<p><strong>Education and Child Outreach:</strong> The website develops education and outreach to all children to engage in various programs and fun activities that involve having fun while learning about the incredible planet Mars.</p>
			
		</div>

<?php
include 'footer.php';
?>