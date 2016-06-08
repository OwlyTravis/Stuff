<div id="login_form">
	<?php if (isset($account_created)) { ?>
		<h3>Account Created! Now log in.</h3>
	<?php } else { ?>
		<h1>Log In</h1>
	<?php } ?>

	<?php
		if ($loginFail == TRUE) {
    		echo '<div class="alert fade in alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sorry. Login failed.</div>';
		}
	?>

	<?php
	$attributes = array('class' => 'form-inline', 'id' => 'myform');

		echo form_open('login/validate_credentials', $attributes);
		echo form_input('username', '', 'autofocus placeholder="Username" class="form-control"');
		echo form_password('password', '', 'placeholder="Password" class="form-control password"');
		echo form_submit('submit', 'Login', 'class="btn btn-primary"');
		//echo anchor('login/signup','Create Account', 'class="btn btn-default"');
		echo form_close();
	?>
</div>