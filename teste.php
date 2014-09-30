<?php
if( count( $_POST ) ){
	$status = array( 'success' => true, 'url' => '');
	$url = $_POST['url'];
	
	$status['url'] = $url;
	
	echo json_encode($status);
}
?>