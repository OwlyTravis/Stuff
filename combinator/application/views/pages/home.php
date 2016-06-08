<section>
	<div class="jumbotron text-center">
		<h1><?php 

foreach($twoWords as $words_rand) {
	$unixtime = mysql_to_unix($words_rand['Added']);
	$humantime = unix_to_human($unixtime);
	$datestring = "%F %d %Y - %h:%i%a";
	$formtime = mdate($datestring, $unixtime);
	
	$newCount = $words_rand['ShowCount'] + 1;
	
	$this->db->set('ShowCount', $newCount, FALSE);
	$this->db->where('P_id', $words_rand['P_id']);
	$this->db->update('WordList');

	echo '<span class="word '.$words_rand['P_id'].'" data-toggle="tooltip" data-placement="top" title="Added: '.$formtime.' Displayed: '.$newCount.' Times">' . $words_rand['Word'] . '</span> ';
} 

?></h1>
<div class="text-center">
<button class="btn btn-lg btn-primary" id="reloadButton" type="button" data-loading-text="<i class='glyphicon glyphicon-repeat spinner'></i>" autocomplete="off" onClick="window.location.reload();"><i class='glyphicon glyphicon-random'></i></button>
</div>

</div>



<blockquote class="text-center">
	<h4>"Take two things that normally don't go together and combine them.</h4><h4>It can produce otherwise seemingly impossible solutions that are original."</h4> 
	<h6><em>- Dan Mall (Circles Conference 2012)</em></h6>
</blockquote>
</section>