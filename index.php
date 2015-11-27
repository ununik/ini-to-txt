<?php
$ini = parse_ini_file('test-test.ini');

foreach ($ini as $ininew){
	$ininew = str_replace("≈","=",$ininew);
	$ininew = str_replace("[","(",$ininew);
	$ininew = str_replace("]",")",$ininew);
	$ininew = str_replace("¡","!",$ininew);
	$ininew = str_replace("_'_",'"',$ininew);
	$ininew = htmlspecialchars($ininew);
			echo $ininew . '<br>';
}