<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SUCCESS</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="style2.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <style>
*{
    background-color: black;
}

#success{
    width: 400px;
    height: 40px;
    font-size: 20px;
    padding: 50px;
    padding: 20px;
    margin: 0 auto;
    margin-top: 350px;
    justify-content: center;
    
    border-radius: 10px;
}

#successText{
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
    COLOR: YELLOW;
}


</style>
</head>
<body>
  <?php
  //using $_POST here so we'll be able to work with the entered values
	$userName = $_POST['userName'];
	$email = $_POST['email'];
	$number = $_POST['number'];
    $dob = $_POST['dob'];
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dob), date_create($today));
    $age = $diff->format('%y');
  
    
   
       
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
    //secret key for Captacha
        $secret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
            $succMsg = 'Your contact request have submitted successfully.';
        }
        else
        {
            $errMsg = 'Robot verification failed, please try again.';
        }
   }
   
	//Connecting to database
	$conn = new mysqli('127.0.0.1','root','','test');
	if($conn->connect_error){
    echo "$conn->connect_error";
    //in case the connection fails
		die("Connection Failed : ". $conn->connect_error);
	} else {
    //inserting into the database
		$stmt = $conn->prepare("insert into register(userName, email, number, dob, age) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisi", $userName, $email, $number, $dob, $age);
		$execval = $stmt->execute();
		echo $execval;
        $stmt->close();
        $sql = "SELECT id, userName, email, number, dob, age FROM register"; 
$result = $conn->query($sql); 
//closing the connection
		$conn->close();
    }
    
 
?>

<h1 class="animate__wobble" id="successText">Registered Successfully!</h1>
<a href="index.html">  <button class="b1" id="success" type="button">Home</button></a>
</body>
</html>