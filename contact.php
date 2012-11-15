<?php
$page = 'contact';
include 'header.php';
?>

		<div id="main">
		
			<a name="TemplateInfo"></a>
			<h1>Contact</h1>
			
			<p>If there are any questions, feel free to contact us via the following form. We will do our best to get back to you!</p>
			
			<form action="#">
				<p>
				<label>Name</label>
				<input name="dname" value="Your Name" type="text" size="30" />
				<label>Email</label>
				<input name="demail" value="Your Email" type="text" size="30" />
				<label>Your Comments</label>
				<textarea rows="5" cols="5"></textarea>
				<br />
				<input class="button" type="submit" />
				</p>
			</form>
			
		</div>

<?php
include 'footer.php';
?>