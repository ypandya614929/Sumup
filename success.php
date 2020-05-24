<div class="container">
	<div class="text-center">
		<div class="admin-success-msg">
		<?php
		if(!isset($successMsg))
				$successMsg=NULL;
		?>

		<div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><i class="fa fa-smile-o fa-lg"></i>&nbsp;Success!</strong>&nbsp;<?php echo $successMsg; ?>
  </div>
		</div>
	</div>
</div>
