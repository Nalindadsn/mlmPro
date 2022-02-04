
<?php 


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




echo "<div class='tree'>
<ul>
<li><i class='fa fa-user'></i> ".$_SESSION['name']." <span class='badge'><i class='fa fa-circle' aria-hidden='true'></i>YOU</span>
<ul>
";
foreach ($result1 as $key1) {
$num1=$num1+1;
?>
<?php echo "<li><i class='fa fa-user'></i> ".$key1['id']." - ".$key1['username'].""; ?>

	<?php 

	$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key1['username']."' ORDER BY leftORright");
	$sth->execute();
	$result2 = $sth->fetchAll(\PDO::FETCH_ASSOC);
	echo "<ul>";
	foreach ($result2 as $key2) {
	$num2=$num2+1;
	?>
	<?php echo "<li><i class='fa fa-user'></i> ".$key2['id']." - ".$key2['username']; 
		if ($key2['leftORright']=="l") {
			echo " left ";
		}
		if ($key2['leftORright']=="r") {
			echo " right ";
		}
?>
			<?php 

// start level3------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key2['username']."' ORDER BY leftORright");
			$sth->execute();
			$result3 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			echo "<ul>";
			foreach ($result3 as $key3) {
			$num3=$num3+1;
			?>
				<?php echo "<li><i class='fa fa-user'></i> ".$key3['id']."--".$key3['id']." - ".$key3['username']; 
					if ($key3['leftORright']=="l") {
						echo " left ";
					}
					if ($key3['leftORright']=="r") {
						echo " right ";
					}
			?>


			<?php 

// start level4------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key3['username']."' ORDER BY leftORright");
			$sth->execute();
			$result4 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			echo "<ul>";
			foreach ($result4 as $key4) {
			$num4=$num4+1;
			?>
				<?php echo "<li><i class='fa fa-user'></i> ".$key4['id']." ".$key4['id']." - ".$key4['username']; 
					if ($key4['leftORright']=="l") {
						echo " left ";
					}
					if ($key4['leftORright']=="r") {
						echo " right ";
					}
// content here------------------------
// content end


			?>


			<?php 

// start level5------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key4['username']."' ORDER BY leftORright");
			$sth->execute();
			$result5 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			echo "<ul>";
			foreach ($result5 as $key5) {
			$num5=$num5+1;
			?>
				<?php echo "<li><i class='fa fa-user'></i> ".$key5['id']." ".$key5['id']." - ".$key5['username']; 
					if ($key5['leftORright']=="l") {
						echo " left ";
					}
					if ($key5['leftORright']=="r") {
						echo " right ";
					}
// content here------------------------
// content end


			?>



			<?php 

// start level6------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key5['username']."' ORDER BY leftORright");
			$sth->execute();
			$result6 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			echo "<ul>";
			foreach ($result6 as $key6) {
			$num6=$num6+1;
			?>
				<?php echo "<li><i class='fa fa-user'></i> ".$key6['id']." ".$key6['id']." - ".$key6['username']; 
					if ($key6['leftORright']=="l") {
						echo " left ";
					}
					if ($key6['leftORright']=="r") {
						echo " right ";
					}
// content here------------------------
// content end


			?>


			<?php 

// start level7------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key6['username']."' ORDER BY leftORright");
			$sth->execute();
			$result7 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			echo "<ul>";
			foreach ($result7 as $key7) {
			$num7=$num7+1;
			?>
				<?php echo "<li><i class='fa fa-user'></i> ".$key7['id']." ".$key7['id']." - ".$key7['username']; 
					if ($key7['leftORright']=="l") {
						echo " left ";
					}
					if ($key7['leftORright']=="r") {
						echo " right ";
					}
// content here------------------------
// content end


			?>
<!-- -- -->

			<?php 

// start level8------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key7['username']."' ORDER BY leftORright");
			$sth->execute();
			$result8 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			echo "<ul>";
			foreach ($result8 as $key8) {
			$num8=$num8+1;
			?>
				<?php echo "<li><i class='fa fa-user'></i> ".$key8['id']." ".$key8['id']." - ".$key8['username']; 
					if ($key8['leftORright']=="l") {
						echo " left ";
					}
					if ($key8['leftORright']=="r") {
						echo " right ";
					}
// content here------------------------
// content end


			?>


			<?php 

// start level9------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key8['username']."' ORDER BY leftORright");
			$sth->execute();
			$result9 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			echo "<ul>";
			foreach ($result9 as $key9) {
			$num9=$num9+1;
			?>
				<?php echo "<li><i class='fa fa-user'></i> ".$key9['id']." ".$key9['id']." - ".$key9['username']; 
					if ($key9['leftORright']=="l") {
						echo " left ";
					}
					if ($key9['leftORright']=="r") {
						echo " right ";
					}
// content here------------------------
// content end


			?>


			<?php 

// start level10------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key9['username']."' ORDER BY leftORright");
			$sth->execute();
			$result10 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			echo "<ul>";
			foreach ($result10 as $key10) {
			$num10=$num10+1;
			?>
				<?php echo "<li><i class='fa fa-user'></i> ".$key10['id']." ".$key10['id']." - ".$key10['username']; 
					if ($key10['leftORright']=="l") {
						echo " left ";
					}
					if ($key10['leftORright']=="r") {
						echo " right ";
					}
// content here------------------------
// content end


			?>


			<?php 

// start level11------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key10['username']."' ORDER BY leftORright");
			$sth->execute();
			$result11 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			echo "<ul>";
			foreach ($result11 as $key11) {
			$num11=$num11+1;
			?>
				<?php echo "<li><i class='fa fa-user'></i> ".$key11['id']." ".$key11['id']." - ".$key11['username']; 
					if ($key11['leftORright']=="l") {
						echo " left ";
					}
					if ($key11['leftORright']=="r") {
						echo " right ";
					}
// content here------------------------
// content end


			?>


			<?php 

// start level11------------------------------------

			$sth = $pdo->prepare("SELECT * FROM accounts WHERE user_id='".$key11['username']."' ORDER BY leftORright");
			$sth->execute();
			$result12 = $sth->fetchAll(\PDO::FETCH_ASSOC);
			echo "<ul>";
			foreach ($result12 as $key12) {
			$num12=$num12+1;
			?>
				<?php echo "<li><i class='fa fa-user'></i> ".$key12['id']." ".$key12['id']." - ".$key12['username']; 
					if ($key12['leftORright']=="l") {
						echo " left ";
					}
					if ($key12['leftORright']=="r") {
						echo " right ";
					}
// content here------------------------
// content end


			?>


			
			<?php
			}
			echo "</li></ul>";

// end level11------------------------------------

			?>
			
			<?php
			}
			echo "</li></ul>";

// end level11------------------------------------

			?>
			
			<?php
			}
			echo "</li></ul>";

// end level10------------------------------------

			?>
			
			<?php
			}
			echo "</li></ul>";

// end level9------------------------------------

			?>
			
			<?php
			}
			echo "</li></ul>";

// end level8------------------------------------

			?>
			
			<?php
			}
			echo "</li></ul>";

// end level7------------------------------------

			?>

			<?php
			}
			echo "</li></ul>";

// end level6------------------------------------

			?>

			<?php
			}
			echo "</li></ul>";

// end level5------------------------------------

			?>

			<?php
			}
			echo "</li></ul>";

// end level4------------------------------------

			?>



			<?php
			}
			echo "</li></ul>";

// end level3------------------------------------

			?>



<?php

		echo "</li>";
	?>

	<?php 
	}

	echo "</ul>";
	?>

<?php echo "</li>"; ?>
<?php
}
echo "</li>
</ul>

</li>
</ul>

</div>
";


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



?>
<br><br>
    <div class="progress-row">
        <h4>Level's Progress</h4>
            	<div><?php 

echo "LEVEL 2  (".$numVal1.") - ";
 if ($numVal1=$num1) {
 	$balance=100;
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num1;
echo "";

            	 ?></div>
            <div class="progress progress-md">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num1/$numVal1*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num1/$numVal1*100); ?>%</span></div>
    <hr>
	</div>

	
    <div class="progress-row">
            	<div><?php 


echo "LEVEL 3  (".$numVal2.") - ";
 if ($numVal2==$num2) {
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num2."";
            	 ?></div>
            <div class="progress progress-md">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num2/$numVal2*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num2/$numVal2*100); ?>%</span></div>
    <hr>
	</div>
	
    <div class="progress-row">
            	<div><?php 


echo "LEVEL 4  (".$numVal3.") - ";
 if ($numVal3==$num3) {
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num3."";
            	 ?></div>
            <div class="progress progress-md ">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num3/$numVal3*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num3/$numVal3*100); ?>%</span></div>
    <hr>
	</div>



<!-- 
	================================ -->

    <div class="progress-row">
            	<div><?php 


echo "LEVEL 5  (".$numVal4.") - ";
 if ($numVal4==$num4) {
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num4."";
            	 ?></div>
            <div class="progress progress-md ">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num4/$numVal4*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num4/$numVal4*100); ?>%</span></div>
    <hr>
	</div>

<!-- 
	================================ -->

    <div class="progress-row">
            	<div><?php 


echo "LEVEL 6  (".$numVal5.") - ";
 if ($numVal5==$num5) {
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num5."";
            	 ?></div>
            <div class="progress progress-md ">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num5/$numVal5*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num5/$numVal5*100); ?>%</span></div>
    <hr>
	</div>
<!-- 
	================================ -->

    <div class="progress-row">
            	<div><?php 


echo "LEVEL 7  (".$numVal6.") - ";
 if ($numVal6==$num6) {
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num6."";
            	 ?></div>
            <div class="progress progress-md ">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num6/$numVal6*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num6/$numVal6*100); ?>%</span></div>
    <hr>
	</div>
<!-- 
	================================ -->

    <div class="progress-row">
            	<div><?php 


echo "LEVEL 8  (".$numVal7.") - ";
 if ($numVal7==$num7) {
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num7."";
            	 ?></div>
            <div class="progress progress-md ">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num7/$numVal7*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num7/$numVal7*100); ?>%</span></div>
    <hr>
	</div>
<!-- 
	================================ -->

    <div class="progress-row">
            	<div><?php 


echo "LEVEL 9  (".$numVal8.") - ";
 if ($numVal8==$num8) {
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num8."";
            	 ?></div>
            <div class="progress progress-md ">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num8/$numVal8*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num8/$numVal8*100); ?>%</span></div>
    <hr>
	</div>
<!-- 
	================================ -->

    <div class="progress-row">
            	<div><?php 


echo "LEVEL 10  (".$numVal9.") - ";
 if ($numVal9==$num9) {
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num9."";
            	 ?></div>
            <div class="progress progress-md ">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num9/$numVal9*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num9/$numVal9*100); ?>%</span></div>
    <hr>
	</div>
<!-- 
	================================ -->

    <div class="progress-row">
            	<div><?php 


echo "LEVEL 11  (".$numVal10.") - ";
 if ($numVal10==$num10) {
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num10."";
            	 ?></div>
            <div class="progress progress-md ">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num10/$numVal10*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num10/$numVal10*100); ?>%</span></div>
    <hr>
	</div>
<!-- 
	================================ -->

    <div class="progress-row">
            	<div><?php 


echo "LEVEL 12  (".$numVal11.") - ";
 if ($numVal11==$num11) {
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num11."";
            	 ?></div>
            <div class="progress progress-md ">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num11/$numVal11*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num11/$numVal11*100); ?>%</span></div>
    <hr>
	</div>
<!-- 
	================================ -->

    <div class="progress-row">
            	<div><?php 


echo "LEVEL 13  (".$numVal12.") - ";
 if ($numVal12==$num12) {
 	echo '<span class="badge badge-pill badge-success">completed</span>';
 }
 echo $num12."";
            	 ?></div>
            <div class="progress progress-md ">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($num12/$numVal12*100); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div><span class="float-right"><?php echo ($num12/$numVal12*100); ?>%</span></div>
    <hr>
	</div>
<?php









// echo "LEVEL 3  (".$numVal3.") - ";
//  if ($numVal3==$num3) {
//  	echo "completed";
//  }
//  echo $num3."<br>";



// echo "LEVEL 4 (".$numVal4.") - ";
//  if ($numVal4==$num4) {
//  	echo "completed";
//  }
//  echo $num4."<br>";


// echo "LEVEL 5 (".$numVal5.") - ";
//  if ($numVal5==$num5) {
//  	echo "completed";
//  }
//  echo $num5."<br>";






// echo "LEVEL 6 (".$numVal6.") - ";
//  if ($numVal6==$num6) {
//  	echo "completed";
//  }
//  echo $num6."<br>";





// echo "LEVEL 7 (".$numVal7.") - ";
//  if ($numVal7==$num7) {
//  	echo "completed";
//  }
//  echo $num7."<br>";



// echo "LEVEL 8 (".$numVal8.") - ";
//  if ($numVal8==$num8) {
//  	echo "completed";
//  }
//  echo $num8."<br>";


// echo "LEVEL 9 (".$numVal9.") - ";
//  if ($numVal9==$num9) {
//  	echo "completed";
//  }
//  echo $num9."<br>";



// echo "LEVEL 10 (".$numVal10.") - ";
//  if ($numVal10==$num10) {
//  	echo "completed";
//  }
//  echo $num9."<br>";



// echo "LEVEL 11 (".$numVal11.") - ";
//  if ($numVal11==$num11) {
//  	echo "completed";
//  }
//  echo $num11."<br>";


// echo "LEVEL 12 (".$numVal12.") - ";
//  if ($numVal12==$num12) {
//  	echo "completed";
//  }
//  echo $num12."<br>";



echo "Account Balance : Rs.".$balance;
 ?>
