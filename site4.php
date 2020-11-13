<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPDATION</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
<style>

/*Styling*/
body{
  background-color: rgba(255,204,255);
}


.upForm{
  margin-left: 500px;
  width: 200px;
height: 400px;
  padding-left: 250px;
  padding-right: 250px;
  margin-top: 100px;
  border: 2px black;
  border-style: double;
  background-color: peachpuff;
}

.upTitle{
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    position: absolute;
    width: 677px;
    height: 250px;
    left: 43px;
    top: 300px;
    
    font-family: Roboto;
    font-style: normal;
    font-weight: bold;
    font-size: 144px;
    line-height: 169px;
    color: white;
}

.subButton{
  background: #222;
    height: 50px;
    min-width: 150px;
    border: none;
    border-radius: 10px;
    color: #eee;
    font-size: 10px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    position: relative;
    transition: 1s;
    -webkit-tap-highlight-color: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    padding-top: 5px;
    margin-top: 50px;
    margin-left:20px;
    border-radius: 10px;
}

.b1{
margin-left: 770px;
min-width: 150px;
margin-top: 50px;
border-radius: 10px;
}

</style>
</head>
<body>

<h1 class="upTitle">Update Details</h1>

<?php 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "test"; 
//Creating a connection
$conn = new mysqli($servername, $username, $password, $dbname); 

//Checking for connection
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
   
  }  
//Accessing the values of 'ID' of the entry and the new e-mail value that has to be entered
    $id=$_POST['Id'];
    $email = $_POST['Email'];
//Expressing the query to be executed
    $sql ="UPDATE `register` SET `Email`='$email' WHERE `Id` = '$id'";
    $result = $conn->query($sql); 
    ?>

<form class="upForm" action="#" method="post">
<h1> Enter ID: </h1>    
<input type="text" name="Id"><br>  
<h1> Enter new e-mail:</h1>
 <input type="text" name="Email"><br>  
         <input class="subButton" type="submit" value="Submit">
</form>


<a href="index.html">  <button class="b1" type="button">Home</button></a>

</body>
</html>
