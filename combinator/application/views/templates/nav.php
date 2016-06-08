		<nav class="navbar navbar-fixed-top navbar-inverse">

		<div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo base_url();?>">The Combinatorrr</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 			<ul class="nav navbar-nav">
 				<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/about">About</a></li>
 				<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/words">View Words</a></li>
 				<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/words/add">Add Words</a></li>
			</ul>

			<div class="navbar-right">
				
			<?php /* 
			    $query = $this->session->all_userdata();
			    if ($this->session->has_userdata('is_logged_in')) {
			        echo '<p class="navbar-text">Welcome back, '. $session_id = $this->session->userdata('username').' ';
			        echo '</p>';
			        echo anchor('login/user_logout','Log Out', 'class="btn btn-default navbar-btn"');
			    }
			    else {
			        echo anchor('login','Log In', 'class="btn btn-default navbar-btn"'); 
			    }
			*/ ?>
			</div><!-- end navbar-right -->

		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav><!-- end nav -->
		