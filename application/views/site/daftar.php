<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('incsite/head'); ?>
</head><!--/head-->

<body>
	<?php $this->load->view('incsite/head2'); ?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					</div>
				
				<?php $this->load->view('incsite/daftarkan'); ?>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016.</p>
					<p class="pull-right">Designed by <span>Themeum and Developed by Go-Kost</span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	<?php $this->load->view('incsite/footer2'); ?>
</body>
</html>