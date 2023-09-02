<?php 
session_start();
if(isset($_SESSION['email'])&& isset($_SESSION['password']))
{
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../css/style2.css">
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
			<h2>Home Page</h2>
			<p>Welcome back mr , <?=$_SESSION['user_name']?>!</p>
		</div>
	</body>
</html>
</body> 
</html>
<?php 

}else {
    header("Location:index.php");
}
?>