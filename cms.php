<?php session_start(); ?>
<?php require_once "model.php";

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$password = sha1($post['password']);

if ($post['submit']) {
	$name = $post['name'];
	$email = $post['email'];
	$sql = 'INSERT INTO user(name, email, password)VALUES(:name,:email,:password)';
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array(':name' => $name, ':email' => $email, ':password' => $password));
	if ($stmt) {
		header('location:index.php');
	} else {
		echo 'not successful';
	}
}
?>
<?php include('includes/header.php'); ?>

<!-- technology -->
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="business">
				<div id="contact" class="contact">
					<h3>Master Made</h3>
					<div class="contact-grids">
						<div class="contact-icons">
							<div class="contact-grid">
								<div class="contact-fig">
									<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
								</div>
								<p>08108533365</p>
							</div>
							<div class="contact-grid">
								<div class="contact-fig1">
									<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								</div>
								<p>Portharcourt
									<span>Eneka Road,TX 30</span></p>
							</div>
							<div class="contact-grid">
								<div class="contact-fig2">
									<span class="glyphicon glyphicon-envelope2" aria-hidden="true"></span>
								</div>
								<p><a href="mailto:ariariatrade2@mail.com">ariariatrade2@mail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<form method="post" action="cms.php">

							<input type="text" name="name" placeholder="Name" required>
							<input type="text" name="email" placeholder="Email" required>
							<input type="text" name="password" placeholder="password" required>
							<input type="submit" name="submit" value="SEND">
						</form>
					</div>

				</div>
			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right-1">
			<div class="blo-top">
				<div class="tech-btm">
					<img src="images/me.jpg" class="img-responsive" alt="">
				</div>
			</div>
			<div class="blo-top">
				<div class="tech-btm">
					<h4>Sign up to our newsletter</h4>
					<p>Chat with live person, We are raedy to here from you.</p>
					<div class="name">
						<form>
							<input type="text" placeholder="Email" required="">
						</form>
					</div>
					<div class="button">
						<form method="post" action="mailto:ariariatrade2@gmail.com">
							<input type="submit" value="Subscribe">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>


		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- technology -->
<?php include('includes/footer.php'); ?>