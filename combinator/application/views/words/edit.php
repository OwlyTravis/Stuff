<h1><?php echo $title; ?></h1>

<?php 

if (validation_errors()) { 
    echo validation_errors('<div class="alert fade in alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>','</div>'); 
} 

if ($alertSuccess) {
    echo '<div class="alert fade in alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>"'.$newWordAdded.'"</strong> updated!</div>';
}
// if ($alertDuplicate == TRUE) {
//     echo '<div class="alert fade in alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sorry. <strong>"'.$newWordAdded.'"</strong> already exists.</div>';
// }

$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
echo form_open('words/edit', $attributes); 
?>

    <div class="form-group form-group-lg">
    	<!-- label class="col-sm-3 control-label" for="newWord">Your Word</label -->
    	<div class="col-sm-10">
            <?php echo form_hidden('editWordID', set_value('editWordID',$editWordID), 'class="form-control"');
            ?>
            <?php echo form_input('editWord', set_value('editWord',$editWord), 'autofocus placeholder="Singular Noun, Proper Name, Verb or Adjective" class="form-control"');
            ?>
            <!-- <input class="form-control" type="input" name="editWord" placeholder="Singular Noun, Proper Name, Verb or Adjective" autofocus> -->
        </div>
        <div class="col-sm-2">
            <input class="btn btn-lg btn-block btn-success" type="submit" name="submit" value="Update" />
        </div>
    </div><!-- /form-group -->

</form>