<div id="register_form">
		<h1>Create Account</h1>
		<?php echo validation_errors('<p class="text-danger">'); ?>
	<?php
	$attributes = array('class' => 'form', 'id' => 'myform');

		echo form_open('login/create_member', $attributes);
		echo '<div class="form-group">';
		echo form_input('first_name', set_value('first_name',''), 'placeholder="First Name" class="form-control"'); 
		echo '</div> <div class="form-group">';
		echo form_input('last_name', set_value('last_name',''), 'placeholder="Last Name" class="form-control"'); 
		echo '</div> <div class="form-group">';
		echo form_input('email', set_value('email',''), 'placeholder="Email Address" class="form-control"'); 
		echo '</div> <div class="form-group">';
		echo form_input('username', set_value('username',''), 'placeholder="Username" class="form-control"');
		echo '</div> <div class="form-group">';
		echo form_password('password', '', 'placeholder="Password" class="form-control password"');
		echo '</div> <div class="form-group">';
		echo form_password('password_confirm', '', 'placeholder="Confirm Password" class="form-control password"');
		echo '</div> ';
		echo form_submit('submit', 'Create Account', 'class="btn btn-primary"');
		echo anchor('login','Back', 'class="btn btn-default"');
		echo form_close();
	?>
	
</div>