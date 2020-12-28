<?php

    require_once('db.php');

    function validateUser($user){

		$conn = getConnection();
		$sql = "select * from user where username='{$user['username']}' and password='{$user['password']}'";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if($row > 0){
			return true; 
		}else{
			return false;
		}
	}
    
    function getAllUser(){

		$conn = getConnection();
		$sql = "select * from user";

		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
    }

    
    function updateUser($user){

        $username=$user['username'];
        $password=$user['password'];
        $email=$user['email'];
        $hobbies=$user['hobbies'];
        $gender=$user['gender'];
        $address=$user['address'];
        $city=$user['city'];
        $mobile=$user['mobile'];

        echo "username:".$username.",password:".$password.",email:".$email.",hobbies:".$hobbies.",Gender:".$gender;
        $sql="UPDATE user SET password='$password',email='$email',hobbies='$hobbies', gender='$gender',address='$address',city='$city',mobile='$mobile' WHERE username='$username'";
        // $user = ['e_name'=>  $_POST['e_name'], 'com_name'=>$_POST['con_no'],
        // 'con_no'=> $_POST['con_no'], 
        // 'username'=> $un, 'password'=>$_POST['pass'] ];
    	//print_r($user);
		$conn = getConnection();

        // $sql = "UPDATE user SET password='{$user['password']}', 
        // email='{$user['email']}', hobbies='{$user['hobbies']}', 
        // gender='{$user['gender']},address='{$user['address']},city='{$user['city']}',
        // mobile='{$user['mobile']}'  WHERE username = '{$user['username']}' ";

		//$sql="UPDATE user SET email='c@gmail.com' WHERE username='Ayon'";
		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}
	function insertUser($user)
	{
		$conn = getConnection();
		$sql = "INSERT INTO user (username,password,email,hobbies,gender,address,city,mobile)
		VALUES ('{$user['username']}', '{$user['password']}' , '{$user['email']}','{$user['hobbies']}','{$user['gender']}','{$user['address']}','{$user['city']}' ,'{$user['mobile']}')";

		$status = mysqli_query($conn,$sql);

		if($status)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	function deleteUser($user)
	{
		//$value = $_GET['msg'];
		$conn = getConnection();
		$sql = "DELETE FROM user WHERE username='$user'";
		$status=mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}

	}

	function pagination(){
		$conn = getConnection();
		$sql1 = "SELECT * from user";
		$status=mysqli_query($conn, $sql1);
		while ($row=mysql_fetch_assoc($status)) {
			# code...
			echo $row["username"];
			echo $row["password"];
			echo "<br>";

		}


	}

	function searchUser($user)
	{
		$users = [];
		$conn = getConnection();
		$sql = "SELECT * from user where username = '$user' ";
		
		$result = mysqli_query($conn,$sql);

		if($result)
		{
			$row = mysqli_fetch_assoc($result);

			if(count($row)>0)
			{
				return $row;
			}
			else{
				return false;
			}
		}
		else
		{
			return false;
		}
	}


?>