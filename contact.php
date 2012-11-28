<?php
$page = 'contact';
include 'header.php';
?>

		<div id="main">
			<script type="text/javascript" src="js/jquery.validate.min.js"></script>
			<script type="text/javascript">
			$(document).ready(function(){
				$("#contactForm").validate({
					rules: {
						dname: { required: true, },
						demail: { required: true, email: true, },
						dcomments: { required: true, },
					},
					
					submitHandler: function() {
						alert("Your inquiry has been \"sent\"");
					}
				});
			});
			</script>
			
			<h1>Contact</h1>
			
			<p>If there are any questions, feel free to contact us via the following form. We will do our best to get back to you!</p>
			
			<form action="" method="post" id="contactForm">
				<p>
				<strong>All fields are required</strong>
				
				<label>Name</label>
				<input name="dname" type="text" size="30" />
				
				<label>Email</label>
				<input name="demail" type="text" size="30" />
				
				<label>Your Comments</label>
				<textarea rows="5" cols="5" name="dcomments"></textarea>
				<br />
				<input class="button" type="submit" value="Submit" />
				</p>
			</form>
			
		</div>

<?php
include 'footer.php';
?>