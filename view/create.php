<!DOCTYPE html>
<html>
<head>
    <title> Home Page</title>
    <link href="../assets/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>

<center>
    <h1>Give Your Data Below</h1>
<br>
<br>
<br>
<form method="POST" action="">
    <fieldset style="width:30%">
        <legend> Edit Your Data</legend>
    
        <table>
            <tr>
                <td>
                    Employee Name :
                </td>
                <td>
                    <input type="text" name="e_name" id="">
                </td>
            </tr>           
            
            
            <tr>
                <td>
                     Email :
                </td>
                <td>
                    <input type="email" name="email" id="">
                </td>
            </tr>


            <tr>
                <td>
                    Contact No :
                </td>
                <td>
                    <input type="text" name="con_no" id="">
                </td>
            </tr>

            <tr>
                <td>
                    Gender :
                </td>
                <td>
                     <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label><br>
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label><br>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label>
                </td>
            </tr>


            <tr>
                <td>
                    Hobbies :
                </td>
                <td>
                    <input type="checkbox"  name="hobby[]" value="pg">
                    <label for="vehicle1"> Playing Games</label><br>
                    <input type="checkbox" id="ci" name="hobby[]" value="ci">
                    <label for="vehicle2"> Collecting items</label><br>
                    <input type="checkbox"  name="hobby[]" value="others">
                    <label for="vehicle3"> Others</label>
                </td>
            </tr>

             <tr>
                <td>
                    City :
                </td>
                <td>
                  <select name="city" id="City">
                  <option value="Dhaka">Dhaka</option>
                  <option value="Chittagong">Chittagong</option>
                  <option value="Rajshahi">Rajshahi</option>
                 <option value="Barishal">Barishal</option>
                </select>
                </td>
            </tr>

             <tr>
                <td>
                    Address :
                </td>
                <td>
                   <textarea id="w3review" name="address" rows="3" cols="30"></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="text" name="pass" id="">
                </td>
            </tr>


            <tr>
                <td>
                <input type="submit" name='submit' value="Add Employee">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
            
        
        </table>
    </fieldset>
    
</form>

</center>
</body>
</html>


<?php
require_once('../model/userService.php');

if(isset($_POST['submit'])){
    $hobbies=implode($_POST['hobby']);
    $user = ['username'=>  $_POST['e_name'],'password'=>$_POST['pass'],'email'=>  $_POST['email'], 'hobbies'=>$hobbies ,'gender'=>$_POST['gender'], 'address'=>$_POST['address'], 'city'=> $_POST['city'],'mobile'=> $_POST['con_no']];
    $status = insertUser($user);

    if($status)
    {
        header('location: home.php');
    }
    else
    {  var_dump($user);
        //echo 'Wrong data';
    }
}

else{

}
?>