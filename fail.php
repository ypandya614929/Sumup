<div class="container">
	<div class="text-center">
		<div class="admin-success-msg">
		<?php
		if(!isset($successMsg))
				$successMsg=NULL;
		?>

		<div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
    <strong><i></i>&nbsp;Fail!</strong>&nbsp;<?php echo $successMsg; ?>
  </div>
		</div>
	</div>
</div>
