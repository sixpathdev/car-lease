<?php require_once 'session.php'; ?>
<?php require_once "model.php"; ?>
<?php
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']){
        $casa = $post['casa'];	
        $price = $post['price'];
        $name = $post['name'];
        $location = $post['location'];
      $phone = $post['phone'];
    $sql = 'INSERT INTO lease(price, name, location, phone, lease_id)VALUES(:price, :name,:location,:phone, :lease_id)';
    $stmt = $pdo->prepare($sql);
       $stmt->execute(array(':price' => $price,':name' => $name, ':location' => $location, ':phone' => $phone, ':lease_id' => $casa));
       if ($stmt) {
       	?>
       	<script type="text/javascript">
		alert('Booking successfully.');
		</script>
		<?php

        header('location:index.php');

       } else{
        echo 'not successful';
        ?>
        <script type="text/javascript">
		alert('Appointment booking fail. Please try again.');
		</script>
		<?php
		header('location:lease.php');
       }
      
 }
?>
<?php 
		if (isset($_GET['order'])) {
 		$id = $_GET['order']; 
  		$sql = 'SELECT * FROM carlist WHERE id = :id';
            $stmt = $pdo->prepare($sql);
           $result = $stmt->execute(array(':id' => $id));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      } else {
        $id = NULL;
      }

?>
<?php include('includes/header.php'); ?>
<!-- technology -->
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="business">
				<div id="contact" class="contact">
						<h3>Login To Your Shop</h3>	
								
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
							 <?php foreach($result as $r) : ?>

							 	<?php endforeach; ?>

							 <form action="lease.php" method="post">
							 	<input type="hidden" name="casa" value="<?php echo $r['id']; ?>">
								<input type="text" name="price" value="<?php echo $r['price']; ?>" required>
								<input type="text" name="name" placeholder="Your name" required>
								<input type="text" name="location" placeholder="Location" required>
								<input type="text" name="phone" placeholder="Phone" required>
								<br /><br /><br />
								<input type="submit" name = "submit" value="LEASE">
							 </form>
							 </div>			 
					 <div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12386182.960956775!2d-74.08302114251626!3d40.71866701702417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1436524193425"  style="border:0" allowfullscreen></iframe>
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
						<a href="#"><img src="uploads/<?php echo $r['file']; ?>" class="img-responsive" alt=""/></a>
						<br />
					<img src="images/me.jpg"class="img-responsive" alt="" >
					</div>
				</div>
				<div class="blo-top">
					<div class="tech-btm">
					<h4>Sign up to our newsletter</h4>
					<p>Chat with live person, We are raedy to here from you.</p>
						<div class="name">
							<form >
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
								<a href="#"><img src="images/c9.jpg" height="70px" width="120" class="img-responsive" alt=""/></a>
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