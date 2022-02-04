<?php require_once('main.php'); ?>

<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM accounts WHERE id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	} else {
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) {
			$status = $row['status'];
		}
	}
}
?>

<?php
if($status == 0) {$final = 1;} else {$final = 0;}
$statement = $pdo->prepare("UPDATE accounts SET status=? WHERE id=?");
$statement->execute(array($final,$_REQUEST['id']));

header('location: user.php');
?>