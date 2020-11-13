<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DELETE A ROW</title>
<style>
  /*CSS Styling- again*/
  body{
    background-color: rgba(204,255,229);
  }
.delForm{
  margin: 0 auto;
   display: flex;
  justify-content: center;
  margin-top: 100px;
  padding: 50px;
}

.title{
  margin-top: 80px;
      margin-left: 500px;
      color: white;
    }

.delButton{
  background: #222;
    height: 50px;
    min-width: 150px;
    border: none;
    border-radius: 10px;
    color: #eee;
    font-size: 10px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    padding-top: 5px;
    margin-top: 20px;
    margin-left: 85px;
}

.b3{
      margin-left: 655px;
      width: 400px;
    height: 40px;
    font-size: 70px;
    padding: 50px;
    padding: 20px;
    }

    .delButton:hover{
      background-color:white;
      color:black;
    }

</style>

<!-- Since I could afford to style some elements the same way, the buttons for example, I linked the .php files to style.css-->
<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
  
<?php 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "test"; 
// Creating a connection connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
//Checking for a connection
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
   
  }  
//To delete an entry based on the 'ID' value entered
    $id = $_GET['Id'] ;
    $sql ="DELETE FROM `register` WHERE `Id` = '$id'";
    $result = $conn->query($sql); 

    ?>

<h1 class="title">Enter a valid id whose row you want to delete</h1>
<form class="delForm" action="#" method="get">
 
 <input type="text" name="Id"><br>  
         <input class="delButton" type="submit" value="delete">
</form>


<a href="index.html">  <button class="b3" type="button">Home</button></a>
</body>
</html>

