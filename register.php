<?php require_once 'session.php'; ?>
<?php require_once "model.php"; ?>
<?php comfirm_is_log_in(); ?>
<?php

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if (isset($post['submit'])) {
	//starting file prosesessing
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileerror = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg', 'jpeg', 'png', 'pdf');


	if (in_array($fileActualExt, $allowed)) {
		if ($fileerror == 0) {
			if ($fileSize < 1000000) {
				$fileNameNew = uniqid('', true) . "," . $fileActualExt;
				$fileDestination = 'uploads/' . $fileNameNew;
				//starting the checking
				if (is_uploaded_file($_FILES['file']['tmp_name'])) {
					$fileDestination = 'uploads/' . $fileNameNew;
					$fileName = $_FILES['file']['name'];
					$full_path = $fileDestination . $fileName;
					$filedes = 'uploads/' . $fileName;
					if (move_uploaded_file($_FILES['file']['tmp_name'], $filedes)) {
						//echo "succesful upload, we have an image!";
						$file = $full_path;


						$name = $post['name'];
						$file = $full_path;
						//$email = $post['email'];
						$price = $post['price'];



						$sql = 'INSERT INTO carlist(name, file, price)VALUES(:name, :file, :price)';
						$stmt = $pdo->prepare($sql);
						$stmt->execute(array(':name' => $name, ':price' => $price, ':file' =>  $fileName));
					}
					header('location:index.php');
				}
			}
		}
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
					<h3>Register the car you want to lease</h3>

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
									<span>Eneka Road,NO 30</span></p>
							</div>
							<div class="contact-grid">
								<div class="contact-fig2">
									<span class="glyphicon glyphicon-envelope2" aria-hidden="true"></span>
								</div>
								<p><a href="mailto:ariariatrade2@mail.com">ariariatrade2@mail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>

						<form action="register.php" method="post" enctype='multipart/form-data'>
							<input type="file" name="file"><br />
							<input type="text" name="price" placeholder="Price" required>
							<input type="text" name="name" placeholder="City name" required>
							<input type="submit" name="submit" value="REGISTER">
						</form>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12386182.960956775!2d-74.08302114251626!3d40.71866701702417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1436524193425" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="design-top">
					<h4>Our Professional Design</h4>
					<div class="design-left">
						<h3>Web Programming</h3>
						<p>Our broad tool-set enables us to partner with you to create and integrate custom solutions that streamline efficiency partner with you to create and integrate custom.</p>

					</div>
					<div class="design-left">
						<h3>Logo And Corporate Identity</h3>
						<p>Our digital marketing services will help you increase revenue, deepen relationships, enhance referrals, and elevate partner with you to create and integrate custom.</p>

					</div>
					<div class="design-left">
						<h3>Web Design & Development</h3>
						<p>Our proven approach will help you develop targeted growth strategies to multiply and measure the impact of your partner with you to create and integrate custom.</p>

					</div>
					<div class="clearfix"></div>
				</div>

			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right-1">
			<div class="blo-top">
				<div class="tech-btm">
					<img src="images/agu.jpg" class="img-responsive" alt="">
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
			<div class="blo-top1">
				<div class="tech-btm">
					<h4>Top stories of the week </h4>

					<div class="blog-grids">
						<div class="blog-grid-left">
							<a href="#"><img src="images/c9.jpg" height="70px" width="120" class="img-responsive" alt="" /></a>
						</div>
						<div class="blog-grid-right">

							<h5><a href="here"></a> </h5>
						</div>
						<div class="clearfix"> </div>
					</div>

				</div>
				<div class="pagination-blog">
					<nav aria-label="Page navigation example">

						<ul class="pagination justify-content-center">



					</nav>
				</div>
			</div>

		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- technology -->
<?php include('includes/footer.php'); ?>