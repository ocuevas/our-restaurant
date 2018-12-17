
<?php 
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if($posst['submit']) {
	$this-query('INSERT INTO reservation (dateReservation, timeReservation, fullname, people) VALUES (:dateR, :timeR, :people, :name)');
}


?>