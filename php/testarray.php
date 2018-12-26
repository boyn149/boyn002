 
<?php
// $a=array(array('room'=>'201','unit'=>'1952'));
// print_r($a); echo"<br>";
// array_push($a,array('room'=>'202','unit'=>'1234')); 
// print_r($a); echo "<br><br>";

// for($i=0;$i<=count($a)-1;$i++){
	// echo $a[$i]['room']."<br>";
	// echo "Room: ".$a[$i]['room']." Unit: ".$a[$i]['unit']."<br>";
// }


// for($i=0;$i<=10;$i++){
	// ${"a$i"} = $i+7;
	// echo ${"a$i"}."<br>";
	
// }
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unetwork_tb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $sql = "SELECT table1.val1,table2.val2 FROM table1, table2";
// $result = mysqli_query($conn, $sql);

// echo var_dump(mysqli_fetch_assoc($result));echo "<br>";
// echo var_dump(mysqli_fetch_assoc($result));echo "<br>";
// echo var_dump(mysqli_fetch_assoc($result));echo "<br>";
// echo var_dump(mysqli_fetch_assoc($result));echo "<br>";
// echo var_dump(mysqli_fetch_assoc($result));echo "<br>";


// for($i=6;$i<=10;$i++){
	// $table="e$i"."11";
	// $sql = "SELECT room,unit FROM $table";	
	// $result = mysqli_query($conn, $sql);
	
	// ${"e$i"."11"} = array();
	// while($row=mysqli_fetch_assoc($result)){
	// array_push($arr,$row);
// }
// }



////////////////////////////////////////////////// เอาค่าในตาราง e611 - e1011  มาเป็นตัวแปร array ชื่อ e611-e1011 ใน php
for($i=6;$i<=10;$i++){
	
	$table="e$i"."11";
	$sql = "SELECT room,unit FROM $table";
	$result = mysqli_query($conn, $sql);
	${"e$i"."11"}=array();
	
		while($row=mysqli_fetch_assoc($result)){
		array_push(${"e$i"."11"},$row); 
		}
} 
///////////////////////////////// เอาค่าใน array จากทุก array มาพิมพ์

	for($j=6;$j<=10;$j++){
		echo "table e$j"."11"."<br>";
			for($i=0;$i<=109;$i++){
			echo "Room: ". ${"e$j"."11"}[$i]['room']." Unit: ".${"e$j"."11"}[$i]['unit']."<br>";
			}
		echo "<br><br>";
	}
////////////////////////////////////////// 

	
	
var_dump($e1011);	
// echo var_dump(${arr$i})."<br>";
// for($i=0;$i<=count(${arr$i})-1;$i++){
// echo ${arr$i}[$i]['room']."  ".${arr$i}[$i]['unit']."<br>";
// }
///////////////////////////////////////////////////

// if (mysqli_num_rows($result) > 0) {
    
    // while($row = mysqli_fetch_assoc($result)) {
        // echo  $row["val1"] . $row["val2"]. "<br>";
    // }
// } else {
    // echo "0 results";
// }

mysqli_close($conn);
?>


