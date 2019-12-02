<?php session_start(); ?>
<?php require_once "model.php"; ?>
<?php
 		if (isset($_GET['del'])) {
            	$id = $_GET['del'];
            	$sql = 'DELETE FROM lease WHERE id = :id';
            	$stmt = $pdo->prepare($sql);
				if ($stmt->execute(array(':id' => $id))) {
                    # code...
                    ?>
                 <script type="text/javascript">
                alert('Lease successfully deleted.');
                </script>
                <?php
                header('location:register.php');
                }
            else
            {
            ?>
            <script type="text/javascript">
            alert('Added fail. Please try again.');
            </script>
            <?php
            }

            	
            
    }