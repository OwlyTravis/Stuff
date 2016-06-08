		<hr>
		<footer>
			<div class="pull-right text-right">&copy; <?=date('Y');?> Travis Gobeil </div>

			<strong>Version 0.2</strong> <em class="text-muted">Codename: "Administration Complication"</em> <br>
			 Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
			
			
		</footer>

</div><!-- end container -->

	<!-- jQuery first, then Bootstrap JS. -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="<?php echo base_url();?>assets/bs3/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/bs3/js/scripts.js"></script>


	</body>
</html>