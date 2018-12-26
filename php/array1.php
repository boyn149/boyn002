


<?php



	$a=array('a','b','c');
	var_dump($a); echo "<br>";
	echo $a[2]."<br>";
	for($i=0;$i<=2;$i++){
		echo $a[$i]."<br>";
	}
	echo "<br><br>";
	
	for($i=0;$i<=9;$i++){
	${"a&i"} = $i;
	echo ${"a&i"}."<br>";
	}
	
	$b=array(
			array('00','01'),
			array('10','11')
	);
 
 var_dump($b);echo "<br>";
 print_r($b);
?>
