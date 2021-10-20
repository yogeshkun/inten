<!DOCTYPE html>
<html>
<head>
	<title>Project</title>
</head>
<body>
	<form method="POST">
		<div class="">
			<img src="img11.jpg" style="height: 50px">
		</div>
		<div>	
			<button name="submit">Play</button>
		</div>
	</form>
</body>
</html>
<?php
  
if (isset($_POST['submit'])) {
    $set = array("Rock", "Paper", "Scissor");	
    $p1 = array_rand($set);
	$p2 = array_rand($set);
	$p3 = array_rand($set);
	$p4 = array_rand($set);  
// Display the random array element

 
echo "Player 1 is $p1 <br> ";
echo "Player 2 is $p2 <br>";
echo "Player 3 is $p3 <br>";
echo "Player 4 is $p4 <br>";

$arr= array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$counter = 0;
for($i=0;$i<2;$i++){
	for($j=0;$j<2;$j++){
		for($k=0;$k<2;$k++){
			for($l=0;$l<2;$l++){
				# Its for i - player 1 
				if($i=="0"){
					#i= 0 and using j
					if($i=="0"&&$j=="0"){
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 0;
						
					}elseif ($i=="0"&&$j=="1") {
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 1;
						
					}else{
						$arr[1] = $arr[1] + 1;
						$arr[4] = $arr[4] + 0;
						
					}

					if($i=="0"&&$k=="0"){
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 0;
						
					}elseif ($i=="0"&&$k=="1") {
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 1;
					}else{
						$arr[2] = $arr[2] + 1;
						$arr[8] = $arr[8] + 0;
					}

					if($i=="0"&&$l=="0"){
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 0;
					}elseif ($i=="0"&&$l=="1") {
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 1;
					}else{
						$arr[3] = $arr[3] + 1;
						$arr[12] = $arr[12] + 0;
					}







				}elseif ($i=="1") {
					if($i=="1"&&$j=="0"){
						$arr[1] = $arr[1] + 1;
						$arr[4] = $arr[4] + 0;
					}elseif ($i=="1"&&$j=="1") {
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 0;
					}else{
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 1;
					}

					if($i=="1"&&$k=="0"){
						$arr[2] = $arr[2] + 1;
						$arr[8] = $arr[8] + 0;
					}elseif ($i=="1"&&$k=="1") {
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 0;
					}else{
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 1;
					}

					if($i=="1"&&$l=="0"){
						$arr[3] = $arr[3] + 1;
						$arr[12] = $arr[12] + 0;
					}elseif ($i=="1"&&$l=="1") {
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 0;
					}else{
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 1;
					}




				}else{
					if($i=="2"&&$j=="0"){
						$arr[1] = $arr[1] + 1;
						$arr[4] = $arr[4] + 0;
					}elseif ($i=="2"&&$j=="1") {
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 0;
					}else{
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 1;
					}
					if($i=="2"&&$k=="0"){
						$arr[2] = $arr[2] + 1;
						$arr[8] = $arr[8] + 0;
					}elseif ($i=="2"&&$k=="1") {
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 0;
					}else{
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 1;
					}
					if($i=="2"&&$l=="0"){
						$arr[3] = $arr[3] + 1;
						$arr[12] = $arr[12] + 0;
					}elseif ($i=="2"&&$l=="1") {
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 0;
					}else{
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 1;
					}

				}
				#Its for j
				if($j=="0"){
					#i= 0 and using j
					if($j=="0"&&$k=="0"){
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 0;
					}elseif ($j=="0"&&$k=="1") {
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 1;
					}else{
						$arr[6] = $arr[6] + 1;
						$arr[9] = $arr[9] + 0;
					}

					if($j=="0"&&$l=="0"){
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 0;
					}elseif ($j=="0"&&$l=="1") {	
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 1;
					}else{
						$arr[7] = $arr[7] + 1;
						$arr[13] = $arr[13] + 0;
					}

					






				}elseif ($j=="1") {
					if($j=="1"&&$k=="0"){
						$arr[6] = $arr[6] + 1;
						$arr[9] = $arr[9] + 0;
					}elseif ($j=="1"&&$k=="1") {
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 0;
					}else{
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 1;
					}

					if($j=="1"&&$l=="0"){
						$arr[7] = $arr[7] + 1;
						$arr[13] = $arr[13] + 0;
					}elseif ($j=="1"&&$l=="1") {	
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 0;
					}else{
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 1;
					}

					




				}else{
					if($j=="2"&&$k=="0"){
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 1;
					}elseif ($j=="2"&&$k=="1") {
						$arr[6] = $arr[6] + 1;
						$arr[9] = $arr[9] + 0;
					}else{
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 0;
					}
					if($j=="2"&&$l=="0"){
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 1;
					}elseif ($j=="2"&&$l=="1") {
						$arr[7] = $arr[7] + 1;
						$arr[13] = $arr[13] + 0;
					}else{
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 0;
					
					}
				}
				# its for k 
				if($k=="0"){
					#i= 0 and using j
					if($k=="0"&&$l=="0"){
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 0;
						
					}elseif ($k=="0"&&$l=="1") {
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 1;
						
					}else{
						$arr[11] = $arr[11] + 1;
						$arr[14] = $arr[14] + 0;
					}

					

				}elseif ($k=="1") {
					if($k=="1"&&$l="0"){
						$arr[11] = $arr[11] + 1;
						$arr[14] = $arr[14] + 0;
					}elseif ($k=="1"&&$l=="1") {
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 0;
					}else{
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 1;
						
					}

					




				}else{
					if($k=="2"&&$l=="0"){
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 1;

					}elseif ($k=="2"&&$l=="1") {
						$arr[11] = $arr[11] + 1;
						$arr[14] = $arr[14] + 0;

					}else{
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 0;

					}
					
				}
				#Its for l
				$counter = $counter + 1;
echo "<br><br><br>";
$token = array('Player 1-', 'Player 2-', 'Player 3-', 'Player 4-',);


$counttoken = count($token);
echo "<table>";
foreach($token as $key=>$value)
{
    echo "<tr><td>$value</td>";
    for($i=0; $i<$counttoken;$i++)
    {
        echo "<td>" .$arr[$i + ($key * $counttoken)]. "</td>";
    }
    echo "</tr>";
}
echo "</table>";
			}
		}
	}		
				
}			
echo "$counter";
}
?>