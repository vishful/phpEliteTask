<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Table Data</title>
<style>
  /*Styling all the various elements using CSS*/
body {
  background-color: rgb(255, 255, 204);
}

.b1{
  background: #222;
    height: 50px;
    min-width: 80px;
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
    padding-top: 5px;
    margin-top: 5px;

}


.b1:hover{
  background-color:white;
  color:black;
}
</style>
</head>
<body>


<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "test"; 
// Creating a connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
//Checking for a connection
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
 
}  
//Expressing the query
$sql = "SELECT id, userName, email, number, dob, age FROM register"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) { 
//Printing out all the titles of the columns
  echo "ID";
  echo str_repeat("&nbsp;", 60); 
  echo "Name";
  echo str_repeat("&nbsp;", 60); 
  echo "E-Mail";
  echo str_repeat("&nbsp;", 60);
  echo "Number";
  echo str_repeat("&nbsp;", 60);
  echo "DOB";
  echo str_repeat("&nbsp;", 60);
  echo "Age";
  echo str_repeat("&nbsp;<br>",5);


  //Data of every row will be printed using this while loop
  while($column = $result->fetch_assoc()) { 
  echo $column["id"];
  echo str_repeat("&nbsp;", 50); 
  echo $column["userName"];
  echo str_repeat("&nbsp;", 50); 
  echo $column["email"];
  echo str_repeat("&nbsp;", 50); 
  echo $column["number"];
  echo str_repeat("&nbsp;", 50);
  echo $column["dob"];
  echo str_repeat("&nbsp;", 50);
  echo $column["age"];
  echo str_repeat("&nbsp;<br>",5);
} 
} else { 
  echo "0 results"; 
} 

//closing the connection
$conn->close(); 
?> 

<a href="index.html">  <button class="b1" type="button">Home</button></a>
</body>
</html>