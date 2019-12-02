<?php require_once 'session.php'; ?>
<?php require_once "model.php"; ?>
<?php comfirm_is_log_in(); ?>
<?php 
		if (isset($_GET['view'])) {
 		$id = $_GET['view']; 
  		$sql = 'SELECT * FROM carlist WHERE id = :id';
            $stmt = $pdo->prepare($sql);
           $result = $stmt->execute(array(':id' => $id));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      } else {
        $id = NULL;
      }

?>
<?php include('includes/header.php'); ?>

<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">

			<div class="business">
				<?php foreach($result as $r) : ?>
				<div class="rev-1">
					<div class="rev-img">
<a href="newp.php?order=<?php echo $r['id']; ?>"><img src="uploads/<?php echo $r['file']; ?>" class="img-responsive" alt=""/></a>	
					</div>
					<div class="rev-info">
						<h2>Ordered</a></h2>
						<a href="#">Price: <?php echo $r['price']; ?> </a><br />
						
					</div>
					<div class="clearfix"></div>
				</div>
		<?php endforeach; ?>
			</div>

<div class="pagination-blog">
       <nav aria-label="Page navigation example">
                     	
           <ul class="pagination justify-content-center">

					
      </nav>
 </div>



		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right-1">
				<div class="blo-top">
					<div class="tech-btm">
					<a href="#"><img src="images/me.jpg" class="img-responsive" alt=""/></a>	
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
								<input type="hidden" name="id" value="">
								<input type="submit" name = "submit" value="Subscribe">
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
								
								<h5><a href="#">Cars</a> </h5>
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
<?php include('includes/footer.php'); ?>