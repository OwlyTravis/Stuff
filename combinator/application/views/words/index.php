<h1>There are <?php echo count($words); ?> Words!</h1>
<?php echo '<h6>Showing '.$perPage.' records per page</h6>'; ?>


<div class="responsive-table">

<?php 

$template = array(
	'table_open' => '<table class="table table-striped">',

	'heading_row_start'   => '<tr>',
	'heading_row_end'     => '</tr>',
	'heading_cell_start'  => '<th>',
	'heading_cell_end'    => '</th>',

	'row_start'           => '<tr>',
	'row_end'             => '</tr>',
	'cell_start'          => '<td>',
	'cell_end'            => '</td>',

	'row_alt_start'       => '<tr>',
	'row_alt_end'             => '</tr>',
	'cell_alt_start'      => '<td>',
	'cell_alt_end'        => '</td>',

	'table_close'         => '</table>'

);

	$query = $this->session->all_userdata();
		if ($this->session->has_userdata('is_logged_in')) {
			
			$this->table->set_template($template);
			// create the table headings
		    $tableheadings = array (
		        'ID','Word','Added','Displayed','&nbsp;'
		    );

		    // set the table headings
		    $this->table->set_heading($tableheadings);

			foreach($records->result() as $row)
		    {
		        $tablerow[] = $this->table->add_row(
		            $row->P_id,
		            $row->Word,
		            $row->Added,
		            $row->ShowCount,
		            '<a href="'.base_url().'index.php/words/edit?P_id='.$row->P_id.'" class="btn btn-sm btn-default">Edit</a> <a href="'.base_url().'index.php/words/remove?P_id='.$row->P_id.'" class="btn btn-sm btn-danger">Delete</a>'
		        );
		    }
		    echo $this->table->generate(); 
		}
		else {
			
			$this->table->set_template($template);
			// create the table headings
		    $tableheadings = array (
		        'ID','Word','Added','Displayed'
		    );

		    // set the table headings
		    $this->table->set_heading($tableheadings);

			foreach($records->result() as $row)
		    {
		        $tablerow[] = $this->table->add_row(
		            $row->P_id,
		            $row->Word,
		            $row->Added,
		            $row->ShowCount
		        );
		    }
		    echo $this->table->generate(); 
		}


    		
				


?>

<?php /* <table class="table table-condensed table-striped">
	<thead>
		<tr>
		<th>ID</th>
		<th>Word</th>
		<th>Added</th>
		<th>ShowCount</th>
		<?php if ($this->session->has_userdata('is_logged_in')) { ?><th></th> <?php } ?>
	</tr>
	</thead>
	<tbody>
<?php foreach($words as $word_row) { ?>
		<tr>
			<td><?php echo $word_row['P_id'] ;?></td>
			<td><?php echo $word_row['Word'] ;?></td>
			<td><?php echo $word_row['Added'] ;?></td>
			<td><?php echo $word_row['ShowCount'] ;?></td>
			<?php if ($this->session->has_userdata('is_logged_in')) { ?>
				<td class="text-right"><a href="<?php echo base_url(); ?>words/edit?P_id=<?php echo $word_row['P_id'];?>" class="btn btn-sm btn-default">Edit</a> <a href="<?php echo base_url(); ?>words/remove?P_id=<?php echo $word_row['P_id'];?>" class="btn btn-sm btn-danger">Remove</a></td>
			<?php } ?>
		</tr>
	<?php }?>
	</tbody>
</table> */?>
</div>


<? echo $links; ?>





