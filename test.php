<?php
	// This test file uses Bootstrap 4
	include('BootstrapCommons.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>BootstrapHelper</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap 4 CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />

	<!-- of course I need font awesome -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />

	<!-- Custom styles for demonstrating the use of custom classes -->
	<style>
		.mybtn{
			background-color: #45be84;
			color: #fff;
		}

		.blockquote{
			font-style: italic;
			border-left: 3px solid #45b384;
			background-color: #ccc;
			padding: 2rem;
		}
	</style>
</head>
<body class="container mt-5 ">
	<?php echo $bsHelper->bsText('h1', "BootstrapHelper", '', ['pb-2', 'h1', 'font-weight-light']);?>
	<div class="row">
		<div class="col-md-6">
			<div>
				<?php echo $bsHelper->bsText('p', "<code>bsAlert</code> without custom classes for styling", 'muted');?>
				<?php echo $bsHelper->bsAlert('success', 'You are successfully registered!'); ?>
			</div>
			<hr />
			<div>
				<?php echo $bsHelper->bsText('p', "<code>bsAlert</code> with custom styling and classes", 'muted');?>
				<?php echo $bsHelper->bsAlert('success', 'You are <b>successfully</b> registered!', ['border-0', 'mt-2', 'ml-auto', 'mr-auto', 'rounded-0']); ?>
			</div>
			<hr />
			<div>
				<?php echo $bsHelper->bsText('p', "<code>bsAlert</code> with Icon", 'muted');?>
				<?php echo $bsHelper->bsAlert('success', 'You are <i class="fa fa-check"></i> successfully registered!', ['border-0', 'mt-2', 'ml-auto', 'mr-auto', 'rounded-0']); ?>
			</div>
			<hr />
			<div>
				<?php echo $bsHelper->bsText('p', "<code>bsProgress</code> with animated stripes", 'muted');?>
				<?php echo $bsHelper->bsProgress('0', '32', '100', ['bg-success', 'progress-bar-striped', 'progress-bar-animated']); ?>
			</div>
			<hr />
			<div>
				<?php echo $bsHelper->bsText('p', "<code>bsCard</code> with HTML", 'muted');?>
				<?php echo $bsHelper->bsCard('This is the body of the card.<br> <a href="#">This is a link</a>', 'Card Header', 'Card Footer') ?>
			</div>
			<hr />
		</div>

		<div class="col-md-6">
			<div>
				<!-- bs button without custom styling -->
				<?php echo $bsHelper->bsText('p', "<code>bsButton</code> without custom styling", 'muted');?>
				<?php echo $bsHelper->bsButton('info', 'Submit', 'Submit This', ['btn-lg','pb-2']); ?>
			</div>
			<hr />
			<div>
				<!-- with custom classes -->
				<?php echo $bsHelper->bsText('p', "<code>bsButton</code> with custom styling, try hovering", 'muted');?>
				<?php echo $bsHelper->bsButton('outline-warning', 'Submit', '<i class="fa fa-check"></i> Submit This', ['btn-lg', 'mybtn', 'rounded-0', 'border-0']); ?>
			</div>
			<hr />
			<div>
				<!-- Text classes with bsText -->
				<?php echo $bsHelper->bsText('p', "<code>bsText</code> with different text classes", 'muted');?>
				<?php echo $bsHelper->bsText('h2', "<code>h2: </code> Text Primary", 'primary');?>
				<?php echo $bsHelper->bsText('h3', "<code>h3: </code> Text Success", 'success');?>
				<?php echo $bsHelper->bsText('blockquote', '<code>blockquote with custom classes for styling: </code> Text secondary', 'secondary', ['blockquote', 'text-right', 'w-75']);?>
			</div>
			<hr />
			<div>
				<?php echo $bsHelper->bsText('p', "<code>bsBadge</code> with <code>.badge-pill</code>", 'muted');?>
				<?php echo $bsHelper->bsBadge('Text Primary', 'primary', ['badge-pill', 'p-3']);?>
				<?php echo $bsHelper->bsBadge('Text Secondary', 'secondary', ['badge-pill', 'p-2']);?>
				<?php echo $bsHelper->bsBadge('Text Success', 'success', ['badge-pill', 'p-1']);?>
			</div>
			<hr />
		</div>
	</div>

	<!-- jQuery, Popper.js, Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>