<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    
</head>
<body>
    <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    <script type="text/javascript">


    </script>   
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading text-center">
              <h1>Registration Form</h1>
            </div>
            <div class="panel-body">
            <!--Making a form for all the various required fields-->
                <form action="site.php" method="post">
                    <div class="form-group">
                        <label for="userName">Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="userName"
                          name="userName"
                        />
                      </div>
                      <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input
                          type="text"
                          class="form-control"
                          id="email"
                          name="email"
                        />
                      </div>
                      <div class="form-group">
                        <label for="number">Phone Number</label>
                        <input
                          type="text"
                          class="form-control"
                          id="number"
                          name="number"
                        />
                      </div>
                      <div class="form-group">
                        <label for="dob" >Date Of Birth</label>
                        <input
                          type="text"
                          class="form-control"
                          id="dob"
                          name="dob"
                        />
                      </div>
                  

                      
    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div> 

    <a href="site.php"><input type="submit" class="btn btn-primary" /></a>
                
            </form>
          </div>
<div class="buttonBelt">
  <!--Providing various options via buttons-->
        <a href="site2.php">  <button class="b1" type="button">View Table</button></a>
        <a href="site3.php">  <button class="b2" type="button">Delete Rows</button></a>
        <a href="site4.php">  <button class="b3" type="button">Update Rows</button></a>
</div>

</body>
</html>
