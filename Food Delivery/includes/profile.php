<?php 
session_start();
if(isset($_SESSION['email'])&& isset($_SESSION['password']))
{
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link rel="stylesheet" href="../css/style2.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Sign-in Demo</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['user_name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$_SESSION['password']?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$_SESSION['email']?></td>
					</tr>
                    <tr>
						<td>Id:</td>
						<td><?=$_SESSION['id']?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>

<?php
}
    else{
        header('Locator:../index.php');
    }

?>