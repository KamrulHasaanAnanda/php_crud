
<?php
	include('header.php');
	require_once('../model/userService.php');
	
?>




<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
	<link href="../assets/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/css/home.css">
        <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<h1>Welcome home, </h1>
	<a href="home.php">Home</a> |
	<a href="create.php">Create New User</a> |
	<a href="userlist.php">User List</a> |
	<a href="../php/logout.php">logout</a>

<hr>
	<form action="" method="POST">
		<table>
			<tr>
				<td>
					<input type="text" name='search_box'>
				</td>
				<td>
					<input type="submit" name='submit' value='Search'>
				</td>
			</tr>
		</table>
	</form>
	<?php

if(isset($_POST['submit']))
{
	if(!empty($_POST['search_box']))
	{
		$userlist = searchUser($_POST['search_box']);
		//print_r($userlist);
	}
	else
	{
		echo 'Search with a valid name....';
	}
}

?>
	<hr>

	<table border='1px'>
		<tr>
			<th>
				Employee Name
			</th>
			<th>
				Email
			</th>
			<th>
				Address
			</th>
			<th>
				Gender
			</th>
		</tr>
		<tr>
			
			<td><?php if(isset($_POST['submit'])) {echo $userlist['username'];}?></td>
			<td><?php if(isset($_POST['submit'])) {echo $userlist['email'];}?></td>
			<td><?php if(isset($_POST['submit'])) {echo $userlist['address'];}?></td>
			<td><?php if(isset($_POST['submit'])) {echo $userlist['gender'];}?></td>
			
		</tr>
	</table>


</body>
</html>