

<?php
	// Array
	$array = array( 1,2,3,4);
	// Convert to json
	$array_to_json = json_encode( $array );
?>
 
<!-- HTML -->
<script>
var array = <?php echo $array_to_json; ?> ; 
// See it on the console
console.log(array);
</script>