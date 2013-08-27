<?php $cakeDescription = __d('cake_dev', 'Dsprog CRM'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?> : <?php echo $cakeDescription ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('bootstrap.min', 'style.admin')); #bootstrap.min, bootstrap-responsive.min
		echo '<script src="http://code.jquery.com/jquery.js"></script>';
		echo $this->Html->script('bootstrap.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo $this->Html->script(array('html5shiv','respond.min')); ?>
    <![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container-fluid">
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>