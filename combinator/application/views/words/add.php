<h1><?php echo $title; ?></h1>

<?php 

if (validation_errors()) { 
    echo validation_errors('<div class="alert fade in alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>','</div>'); 
} 

if ($alertSuccess) {
    echo '<div class="alert fade in alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>"'.$newWordAdded.'"</strong> added!</div>';
}
// if ($alertDuplicate == TRUE) {
//     echo '<div class="alert fade in alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sorry. <strong>"'.$newWordAdded.'"</strong> already exists.</div>';
// }

$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
echo form_open('words/add', $attributes); 
?>

    <div class="form-group form-group-lg">
    	<!-- label class="col-sm-3 control-label" for="newWord">Your Word</label -->
    	<div class="col-sm-10">
            <input class="form-control" type="input" name="newWord" placeholder="Singular Noun, Proper Name, Verb or Adjective" autofocus>
        </div>
        <div class="col-sm-2">
            <input class="btn btn-lg btn-block btn-success" type="submit" name="submit" value="Add" />
        </div>
    </div><!-- /form-group -->

</form>