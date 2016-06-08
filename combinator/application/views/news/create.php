<h1><?php echo $title; ?></h1>

<?php if (validation_errors()) { 
    echo validation_errors('<div class="alert alert-danger">','</div>'); 
} ?>


<?php 
	$attributes = array('class' => 'form', 'id' => 'myform');
	echo form_open('news/create', $attributes); ?>

    <div class="form-group">
    	<label class="control-label" for="title">Title</label>
    	<input class="form-control" type="input" name="title" />
    </div><!-- /form-group -->

    <div class="form-group">
    	<label class="control-label" for="text">Text</label>
    	<textarea name="text" class="form-control" rows="5"></textarea>
    </div><!-- /form-group -->
    
    <div class="row">
   		<div class="col-sm-12 text-right btn-actions">
   			<a class="btn btn-default" href="<?php echo base_url();?>index.php/news">Cancel</a>
    		<input class="btn btn-lg btn-success" type="submit" name="submit" value="Create news item" />
    	</div><!-- / col -->
    </div><!-- / row -->

</form>