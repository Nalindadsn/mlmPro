<?php 

// include "connection.php";
// if (isset($_REQUEST['login'])) {
// 	$user_id=$_REQUEST['user_id'];
// 	$password=$_REQUEST['password'];

// 	move_to_dashboard($user_id,$password);
// }
// if (isset($_REQUEST['user_regi'])) {
// 	$s_id=$_REQUEST['sponsor_id'];
// 	$pin=$_REQUEST['pin'];
// 	$name=$_REQUEST['name'];
// 	$position=$_REQUEST['position'];
// 	$mobile_no=$_REQUEST['mobile_no'];
// 	$password=$_REQUEST['password'];
// if (check_pin($pin)) {
// 	insert_user($s_id,$name,$position,$mobile_no,$password);
// 	binary_count($s_id,$position);
// }
// 	header('Location:../register.php');
// }

// function binary_count($spons,$position){
// 	global $conn;
// 	if ($position==0) {
// 		$position="left_count";
// 	}else{
// 		$position="right_count";
// 	}
// 	while ($spons!=0) {
// 		mysqli_query($conn,"UPDATE `users` SET `$position`=`$position`+1 WHERE `user_id`='$spons'");
// 		echo $spons=find_sponsor_id($spons);
// 		echo $pos=find_position($spons);
// 	}
// }

// function check_pin($pin){
// 		global $conn;
// 	$query=mysqli_query($conn,"SELECT * FROM `pin` WHERE `pin_value`='$pin' AND `status`='0'");
// 		if (mysqli_num_rows($query)==1) {
// 				mysqli_query($conn,"UPDATE `pin` SET `status`='1' WHERE `pin_value`='$pin'");
// 		return true;
// 	}
// 	return false;
// }

// function insert_user($s_id,$name,$position,$mobile_no,$password){
// 	global $conn;
// 	$user_id=rand(11111111,99999999);
// 	$query=mysqli_query($conn,"INSERT INTO `users` (`user_id`,`name`,`password`,`mobile`,`position`,`sponsor_id`) VALUES ('$user_id','$name','$password','$mobile_no','$position','$s_id')");
// 	level_distribution($s_id);
// }
// function level_distribution($s_id){
// global $conn;
// $a =0;
// $income=[20,10,5,5,5,5];
// while ($a < 6 && $s_id!=0) {
// 	mysqli_query($conn,"UPDATE `users` SET `wallet`=`wallet`+$income[$a] WHERE `user_id`='$s_id'");
// 	$next_id=find_sponsor_id($s_id);
// 	$s_id=$next_id;
// }
// }
// function find_sponsor_id($s_id){
// 		global $conn;
// 		$data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `users` WHERE `user_id`='$s_id'"));
// 		return $data['sponsor_id'];
// }
// function find_position($s_id){

// 	global $conn;
// 	$data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `users` WHERE `user_id`='$s_id'"));

// 	$pos=$data['position'];
// 	if ($pos==0) {
// 		$pos="left_count";
// 	}else{
// 		$pos="right_count";
// 	}
// 	return $pos;

// }
// function move_to_dashboard($user_id,$pass){
// 	global $conn;
// 	$query=mysqli_query($conn,"SELECT * FROM `users` WHERE `user_id`='$user_id' AND `password`='$pass'");
// 	if (mysqli_num_rows($query)==1) {
// 		$_SESSION['session_id']=session_id();
// 		$_SESSION['user_id']=$user_id;
// 		header('Location:../dashboard.php');
// 	}else{
// 		header('Location:../index.php');
// 	}
// }

 ?>