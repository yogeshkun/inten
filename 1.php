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
for($i=0;$i<3;$i++){
	for($j=0;$j<3;$j++){
		for($k=0;$k<3;$k++){
			for($l=0;$l<3;$l++){
				# Its for i - player 1 
				if($i==0){
					#i= 0 and using j
					if($i==0&&$j==0){
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 0;
						echo "helo";
						
					}
					if($i==0&&$j==1){
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 1;
						echo "helodlkjd";
					}if($i==0&&$j==2){
						$arr[1] = $arr[1] + 1;
						$arr[4] = $arr[4] + 0;
						echo "helkjhko";
					}
					if($i==0&&$k==0){
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 0;
						echo "helo";
					}elseif($i==0&&$k==1){
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 1;
						echo "helo";
					}else{
						$arr[2] = $arr[2] + 1;
						$arr[8] = $arr[8] + 0;
						echo "hejkhllll6lo";
					}

					if($i==0&&$l==0){
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 0;
						echo "helo";
					}elseif ($i==0&&$l==1) {
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 1;
					}else{
						$arr[3] = $arr[3] + 1;
						$arr[12] = $arr[12] + 0;
					}
				}elseif ($i==1) {
					if($i==1&&$j==0){
						$arr[1] = $arr[1] + 1;
						$arr[4] = $arr[4] + 0;
					}elseif ($i==1&&$j==1) {
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 0;
					}else{
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 1;
					}

					if($i==1&&$k==0){
						$arr[2] = $arr[2] + 1;
						$arr[8] = $arr[8] + 0;
					}elseif ($i==1&&$k==1) {
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 0;
					}else{
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 1;
					}

					if($i==1&&$l==0){
						$arr[3] = $arr[3] + 1;
						$arr[12] = $arr[12] + 0;
					}elseif ($i==1&&$l==1) {
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 0;
					}else{
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 1;
					}




				}else{
					if($i==2&&$j==0){
						$arr[1] = $arr[1] + 1;
						$arr[4] = $arr[4] + 0;
					}elseif ($i==2&&$j==1) {
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 0;
					}else{
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 1;
					}
					if($i==2&&$k==0){
						$arr[2] = $arr[2] + 1;
						$arr[8] = $arr[8] + 0;
					}elseif ($i==2&&$k==1) {
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 0;
					}else{
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 1;
					}
					if($i==2&&$l==0){
						$arr[3] = $arr[3] + 1;
						$arr[12] = $arr[12] + 0;
					}elseif ($i==2&&$l==1) {
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 0;
					}else{
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 1;
					}

				}
				
				#Its for l
				$counter = $counter + 1;
				echo $counter;
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

echo $arr[4];
}
?>