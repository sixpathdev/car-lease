<?php require_once 'session.php'; ?>
<?php require_once "model.php"; ?>

<?php
//User input
$self = $_SERVER['PHP_SELF'];
$pag = isset($_GET['pag']) ? (int) $_GET['pag'] : 1;

$perPage1 = 6;
//positioning

$limit1 = " LIMIT " . ($pag - 1) * $perPage1 . ',' . $perPage1;
//query
$sql = 'SELECT * FROM carlist ORDER BY id ASC';
$query2 = $sql . $limit1;
$stmt = $pdo->prepare($query2);
$result = $stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $stmt->close();
?>

<?php
$sql3 = 'SELECT * FROM carlist';
$stmt = $pdo->prepare($sql3);
$stmt->execute();
$row_count = $stmt->rowCount();
$pages1 = ceil($row_count / $perPage1);

?>
<?php include('includes/header.php'); ?>

<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">

			<div class="business">
				<?php foreach ($result as $r) : ?>
					<div class="rev-1">
						<div class="rev-img">
							<a href="lease.php?order=<?php echo $r['id']; ?>"><img src="uploads/<?php echo $r['file']; ?>" class="img-responsive" alt="" /></a>
						</div>
						<div class="rev-info">
							<h2>Location: <a href="#"><?php echo $r['name']; ?></a></h2>
							<p><a href="lease.php?order=<?php echo $r['id']; ?>">Lease</a></p>
							<a href="#">Price: <?php echo $r['price']; ?> </a><br />

						</div>
						<div class="clearfix"></div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="pagination-blog">
				<nav aria-label="Page navigation example">

					<ul class="pagination justify-content-center">

						<?php if ($pag != 1) : ?>
							<?php $previous = $pag - 1; ?>
							<li class="page-item">
								<?php echo "<a class=\"page-link\" href='" . $self . "?pag=" . $previous . "'>Previous</a>"; ?>

							</li>
							<?php for ($a = $pag - 3; $a < $pag; $a++) : ?>
								<?php if ($a > 0) : ?>
									<li class="page-item"><a class="page-link" href="?pag=<?php echo $a; ?>"><?php echo $a; ?></a></li>
								<?php endif; ?>
							<?php endfor; ?>
						<?php endif; ?>

						<?php $pag .= ' ' . $pag . ' &nbsp; '; ?>



						<?php for ($a = $pag + 1; $a <= $pag; $a++) : ?>
							<li class="page-item">
								<?php echo "<a href='" . $self . "?pag=" . $a . "'>" . $a . "</a>&nbsp;&nbsp;"; ?>
							</li>
							<?php if ($a >= $pag + 3) : ?>

								<?php break; ?>
							<?php else : ?>
								<li class="page-item">
									<?php echo "<a href='" . $self . "?pag=" . $a . "'>" . $a . "</a>&nbsp;&nbsp;"; ?>
								</li>
							<?php endif; ?>

						<?php endfor; ?>

						<?php if ($pag != $pages1) : ?>
							<?php $next = $pag + 1; ?>
							<li class="page-item">
								<?php echo "<a class=\"page-link\" href='" . $self . "?pag=" . $next . "'>Next</a>"; ?>
							</li>
						<?php endif; ?>
					</ul>

				</nav>
			</div>



		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right-1">
			<div class="blo-top">
				<div class="tech-btm">
					<a href="#"><img src="images/agu.jpg" class="img-responsive" alt="" /></a>
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
							<input type="submit" name="submit" value="Subscribe">
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