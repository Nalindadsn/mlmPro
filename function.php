
<?php 
function treeFunction(){
global $pdo;
	$num1=0;
	$num2=0;
	$num3=0;
	$num4=0;
	$num5=0;
	$num6=0;
	$num7=0;
	$num8=0;
	$num9=0;
	$num10=0;
	$num11=0;
	$num12=0;

echo "";
$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$_SESSION['name']."' ORDER BY leftORright");
$sth->execute();
$result1 = $sth->fetchAll(\PDO::FETCH_ASSOC);




foreach ($result1 as $key1) {
$num1=$num1+1;
?>
	<?php 

	$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key1['username']."' ORDER BY leftORright");
	$sth->execute();
	$result2 = $sth->fetchAll(\PDO::FETCH_ASSOC);
	
	foreach ($result2 as $key2) {
	$num2=$num2+1;
	?>

			<?php 

// start level3------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key2['username']."' ORDER BY leftORright");
			$sth->execute();
			$result3 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			foreach ($result3 as $key3) {
			$num3=$num3+1;
			?>



			<?php 

// start level4------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key3['username']."' ORDER BY leftORright");
			$sth->execute();
			$result4 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			foreach ($result4 as $key4) {
			$num4=$num4+1;
			?>



			<?php 

// start level5------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key4['username']."' ORDER BY leftORright");
			$sth->execute();
			$result5 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result5 as $key5) {
			$num5=$num5+1;
			?>

			<?php 

// start level6------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key5['username']."' ORDER BY leftORright");
			$sth->execute();
			$result6 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result6 as $key6) {
			$num6=$num6+1;
			?>

			<?php 

// start level7------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key6['username']."' ORDER BY leftORright");
			$sth->execute();
			$result7 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result7 as $key7) {
			$num7=$num7+1;
			?>

			<?php 

// start level8------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key7['username']."' ORDER BY leftORright");
			$sth->execute();
			$result8 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result8 as $key8) {
			$num8=$num8+1;
			?>

			<?php 

// start level9------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key8['username']."' ORDER BY leftORright");
			$sth->execute();
			$result9 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result9 as $key9) {
			$num9=$num9+1;
			?>

			<?php 

// start level10------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key9['username']."' ORDER BY leftORright");
			$sth->execute();
			$result10 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result10 as $key10) {
			$num10=$num10+1;
			?>

			<?php 

// start level11------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key10['username']."' ORDER BY leftORright");
			$sth->execute();
			$result11 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result11 as $key11) {
			$num11=$num11+1;
			?>

			<?php 

// start level11------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key11['username']."' ORDER BY leftORright");
			$sth->execute();
			$result12 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result12 as $key12) {
			$num12=$num12+1;
			?>

			<?php
			}
			

// end level11------------------------------------

			?>
			
			<?php
			}
			

// end level11------------------------------------

			?>
			
			<?php
			}
			

// end level10------------------------------------

			?>
			
			<?php
			}
			

// end level9------------------------------------

			?>
			
			<?php
			}
			

// end level8------------------------------------

			?>
			
			<?php
			}
			

// end level7------------------------------------

			?>

			<?php
			}
			

// end level6------------------------------------

			?>

			<?php
			}
			

// end level5------------------------------------

			?>

			<?php
			}
			

// end level4------------------------------------

			?>



			<?php
			}
			

// end level3------------------------------------

			?>



<?php

	?>

	<?php 
	}

	?>

<?php  ?>
<?php
}



$numVal1=2;
$numVal2=4;
$numVal3=8;
$numVal4=16;
$numVal5=32;
$numVal6=64;
$numVal7=128;
$numVal8=256;
$numVal9=256;
$numVal10=512;
$numVal11=1024;
$numVal12=2048;


 include 'progress.php'; 
}

function treeFunctionbal(){
global $pdo;
	$num1=0;
	$num2=0;
	$num3=0;
	$num4=0;
	$num5=0;
	$num6=0;
	$num7=0;
	$num8=0;
	$num9=0;
	$num10=0;
	$num11=0;
	$num12=0;

echo "";
$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$_SESSION['name']."' ORDER BY leftORright");
$sth->execute();
$result1 = $sth->fetchAll(\PDO::FETCH_ASSOC);




foreach ($result1 as $key1) {
$num1=$num1+1;
?>
	<?php 

	$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key1['username']."' ORDER BY leftORright");
	$sth->execute();
	$result2 = $sth->fetchAll(\PDO::FETCH_ASSOC);
	
	foreach ($result2 as $key2) {
	$num2=$num2+1;
	?>

			<?php 

// start level3------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key2['username']."' ORDER BY leftORright");
			$sth->execute();
			$result3 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			foreach ($result3 as $key3) {
			$num3=$num3+1;
			?>



			<?php 

// start level4------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key3['username']."' ORDER BY leftORright");
			$sth->execute();
			$result4 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			foreach ($result4 as $key4) {
			$num4=$num4+1;
			?>



			<?php 

// start level5------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key4['username']."' ORDER BY leftORright");
			$sth->execute();
			$result5 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result5 as $key5) {
			$num5=$num5+1;
			?>

			<?php 

// start level6------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key5['username']."' ORDER BY leftORright");
			$sth->execute();
			$result6 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result6 as $key6) {
			$num6=$num6+1;
			?>

			<?php 

// start level7------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key6['username']."' ORDER BY leftORright");
			$sth->execute();
			$result7 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result7 as $key7) {
			$num7=$num7+1;
			?>

			<?php 

// start level8------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key7['username']."' ORDER BY leftORright");
			$sth->execute();
			$result8 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result8 as $key8) {
			$num8=$num8+1;
			?>

			<?php 

// start level9------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key8['username']."' ORDER BY leftORright");
			$sth->execute();
			$result9 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result9 as $key9) {
			$num9=$num9+1;
			?>

			<?php 

// start level10------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key9['username']."' ORDER BY leftORright");
			$sth->execute();
			$result10 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result10 as $key10) {
			$num10=$num10+1;
			?>

			<?php 

// start level11------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key10['username']."' ORDER BY leftORright");
			$sth->execute();
			$result11 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result11 as $key11) {
			$num11=$num11+1;
			?>

			<?php 

// start level11------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key11['username']."' ORDER BY leftORright");
			$sth->execute();
			$result12 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			
			foreach ($result12 as $key12) {
			$num12=$num12+1;
			?>

			<?php
			}
			

// end level11------------------------------------

			?>
			
			<?php
			}
			

// end level11------------------------------------

			?>
			
			<?php
			}
			

// end level10------------------------------------

			?>
			
			<?php
			}
			

// end level9------------------------------------

			?>
			
			<?php
			}
			

// end level8------------------------------------

			?>
			
			<?php
			}
			

// end level7------------------------------------

			?>

			<?php
			}
			

// end level6------------------------------------

			?>

			<?php
			}
			

// end level5------------------------------------

			?>

			<?php
			}
			

// end level4------------------------------------

			?>



			<?php
			}
			

// end level3------------------------------------

			?>



<?php

	?>

	<?php 
	}

	?>

<?php  ?>
<?php
}



$numVal1=2;
$numVal2=4;
$numVal3=8;
$numVal4=16;
$numVal5=32;
$numVal6=64;
$numVal7=128;
$numVal8=256;
$numVal9=512;
$numVal10=1024;
$numVal11=2048;
$numVal12=4096;




//-----------------------------------------------
?>
 
<?php 
$step1=200;
$step2=400;
$step3=800;
$step4=1600;
$step5=3200;
$step6=6400;
$step7=12800;
$step8=25600;
$step9=51200;
$step10=102400;
$step11=204800;
$step12=409600;

 if ($numVal1=$num1) {
 	$balance=$step1;
 }


 if ($numVal2==$num2) {
 	$balance+=$step2;
 	
 }
  if ($numVal3==$num3) {
 	$balance+=$step3;
 	
 }
  if ($numVal4==$num4) {
 	$balance+=$step4;
 	
 }
 if ($numVal5==$num5) {
 	$balance+=$step5;
 	
 }
  if ($numVal6==$num6) {
 	$balance+=$step6;
 	
 }
  if ($numVal7==$num7) {
 	$balance+=$step7;
 	
 }
 if ($numVal8==$num8) {
 	$balance+=$step8;
 	
 }
  if ($numVal9==$num9) {
 	$balance+=$step9;
 	
 }
  if ($numVal10==$num10) {
 	$balance+=$step10;
 	
 }
  if ($numVal11==$num11) {
 	$balance+=$step11;
 	
 }
  if ($numVal12==$num12) {
 	$balance+=$step12;
 	
 }



echo $balance;
 ?>

<?php
}




treeFunction();
?>
