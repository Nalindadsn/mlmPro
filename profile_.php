<?php
include 'main.php';
check_loggedin($pdo);
// output message (errors, etc)
$msg = '';
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $pdo->prepare('SELECT * FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->execute([ $_SESSION['id'] ]);
$account = $stmt->fetch(PDO::FETCH_ASSOC);
// Handle edit profile post data
if (isset($_POST['username'], $_POST['password'], $_POST['cpassword'], $_POST['email'])) {
    // Make sure the submitted registration values are not empty.
    if (empty($_POST['username']) || empty($_POST['email'])) {
        $msg = 'The input fields must not be empty!';
    } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $msg = 'Please provide a valid email address!';
    } else if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['username'])) {
        $msg = 'Username must contain only letters and numbers!';
    } else if (!empty($_POST['password']) && (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5)) {
        $msg = 'Password must be between 5 and 20 characters long!';
    } else if ($_POST['cpassword'] != $_POST['password']) {
        $msg = 'Passwords do not match!';
    }
    if (empty($msg)) {
        // Check if new username or email already exists in database
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM accounts WHERE (username = ? OR email = ?) AND username != ? AND email != ?');
        $stmt->execute([ $_POST['username'], $_POST['email'], $_SESSION['name'], $account['email'] ]);
        if ($result = $stmt->fetchColumn()) {
            $msg = 'Account already exists with that username and/or email!';
        } else {
            // no errors occured, update the account...
            $uniqid = account_activation && $account['email'] != $_POST['email'] ? uniqid() : $account['activation_code'];
            $stmt = $pdo->prepare('UPDATE accounts SET username = ?, password = ?, email = ?, activation_code = ? WHERE id = ?');
            // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
            $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $account['password'];
            $stmt->execute([ $_POST['username'], $password, $_POST['email'], $uniqid, $_SESSION['id'] ]);
            // Update the session variables
            $_SESSION['name'] = $_POST['username'];
            if (account_activation && $account['email'] != $_POST['email']) {
                // Account activation required, send the user the activation email with the "send_activation_email" function from the "main.php" file
                send_activation_email($_POST['email'], $uniqid);
                // Log the user out
                unset($_SESSION['loggedin']);
                $msg = 'You have changed your email address, you need to re-activate your account!';
            } else {
                // profile updated redirect the user back to the profile page and not the edit profile page
                header('Location: profile_.php');
                exit;
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>gem mind - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
<style type="text/css">
        
}

.tree{
    position: relative;
    background: white;
    margin-top: 20px;
    padding: 30px;
    font-family: 'Roboto Mono', monospace;
    font-size: .85rem;
    font-weight: 400;
    line-height: 1.5;
    color:#212529;
}

.tree span{
    font-size:13px;
    font-style: italic;
    letter-spacing: .4px;
    color: #a8a8a8;
}

.tree .fa-user, .tree .fa-folder{
    color:#007bff;
}


.ree .fa-html5{
    color:#f21f10;
}

.tree ul{
    padding-left: 5px;
    list-style: none;
}

.tree ul li{
    position: relative;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 15px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing:border-box;
    box-sizing: border-box;
}


.tree ul li:before{
    position: absolute;
    top:15px;
    left:0;
    width: 10px;
    height:1px;
    margin:auto;
    content:'';
    background-color: #666;
}


.tree ul li:after{
    position: absolute;
    top:0;
    bottom: 0;
    left:0;
    width:1px;
    height:100%;
    content:'';
    background-color: #666;
}

.tree ul li:last-child:after{
    height:15px;
}

.tree ul a{
    cursor: pointer;
}

.tree ul a:hover{
    text-decoration: none;
}

.badge{

    border-radius: 20px;
    padding: 2px 10px;
}
.fa-circle{
    color: green;
}
.profile{
    margin-top: 50px;
}
</style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">gem mind</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                Account Balance : Rs. 200.00
                            </div>
                        </li>
                        

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
<?=$_SESSION['name']?></h5>
                                    <span class="status"></span><span class="ml-2">verified</span>
                                </div>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light" style="padding: 0;">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="home.php" >
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="treePage.php" >
                                <img src="assets/images/network2.png" style="width: 15px;">
                                Network</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="logout.php" >
                                <i class="fas fa-cog mr-2"></i>
                                LOGOUT</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Your Netork</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="home.php" class="breadcrumb-link">Profile</a></li>
                                        <li class="breadcrumb-item"><a href="_profile.php" class="breadcrumb-link">Edit Profile</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card">



    <div class="loggedin">




        <?php if (!isset($_GET['action'])): ?>
        <div class="content profile">
            <div class="block">


<div class="container">
    <div class="row" style="margin: 50px ;padding: 20px;border:1px solid #ccc;">
        <div class="col-md-12">
    <?php include "tree.php" ?>
            
        </div>
        
    </div>
</div>


                <p>Your account details are below:</p>
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><?=$_SESSION['name']?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?=$account['email']?></td>
                    </tr>
                    <tr>
                        <td>Role:</td>
                        <td><?=$account['role']?></td>
                    </tr>
                </table>
                <a class="profile-btn" href="profile_.php?action=edit">Edit Details</a>
            </div>
        </div>
        <?php elseif ($_GET['action'] == 'edit'): ?>
        <div class="container profile">
            <h2><a href="home.php" class="btn"><i class="fas fa-arrow-left"></i> PROFILE</a> Edit Profile Page</h2>
            <div class="block">
                <form action="profile_.php?action=edit" method="post">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" value="<?=$_SESSION['name']?>" name="username" id="username" placeholder="Username">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                    <label for="cpassword">Confirm Password</label>
                    <input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" value="<?=$account['email']?>" name="email" id="email" placeholder="Email">
                    <br>
                    <input class="profile-btn btn btn-primary" type="submit" value="Save">
                    <p><?=$msg?></p>
                </form>
            </div>
        </div>
        <?php endif; ?>
</div>
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 gem mind. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
</body>
 
</html>