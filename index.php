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
			</div>
			
			<h1>31 Seconds to Mars</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut quam et lectus accumsan ultrices quis vitae est. Curabitur ipsum neque, consequat eget dapibus in, vulputate ut risus. Sed non nisl eu magna tincidunt eleifend. Fusce tempus lacinia nibh, ut cursus tortor venenatis nec. Aliquam augue ante, malesuada quis molestie scelerisque, venenatis eget nisi. Curabitur vulputate arcu pharetra magna faucibus id iaculis sapien lobortis. Nunc mattis mollis velit, et aliquet dolor dictum id. Etiam et nulla lectus, sit amet consequat purus. Duis vel erat tellus. Aenean non tortor nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis pellentesque semper massa quis dapibus. Fusce consequat porttitor accumsan. Donec augue est, ultricies id laoreet vel, ultricies et libero.</p>
			
		</div>

<?php
include 'footer.php';
?>