 <!DOCTYPE html>
<html>
	<head>
		<title>SIGN UP</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style type="text/css">
			form{
				width: 30%;
			}
		</style>
	</head>

	<body style="background-color:#42a5f5;">
		<nav  class="navbar navbar-expand-lg "style="background-color: #0288d1;">
			<img src="LOGO.PNG" alt="LOGO" style="width:128px;height:78px;"> 
	  		<a style="font-family:Impact;font-size:300%;">  &nbsp NSU ROBOTICS SOCIETY</a>
		</nav>
		<nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #01579b   ;">
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="ABOUTUS.html">&nbsp &nbsp &nbsp &nbsp <b></b></a>
		</nav>
		<br>
		<br>
		<div align="center">
			<p style="font-size:200%;"> <strong> SIGN UP </p>
			<form action="" method="post" name="">
  				<div align="left" class="form-group">
   					<label for="exampleFormControlTextarea1">NSU ID</label>
   					<input type="text"class="form-control" name="signupid" placeholder="10 Digit">
  				</div>
  				<div align="left" class="form-group">
   					<label for="exampleFormControlTextarea1">NAME</label>
   					<input type="text"class="form-control"name="signupname" placeholder="Your Full Name">
  				</div>
  				<div align="left" class="form-group">
   					<label for="exampleFormControlTextarea1">EMAIL</label>
   					<input type="EMAIL"class="form-control"name="signupemail" placeholder="abc@northsouth.edu">
  				</div>
  				<div align="left" class="form-group">
  					<label for="exampleFormControlTextarea1">DEPARTMENT</label>
   					<input type="text"class="form-control"name="signupdepartment" placeholder="ECE">
  				</div>
  				<div align="left" class="form-group">
  					<label for="exampleFormControlTextarea1">SUBJECT</label>
   					<input type="text"class="form-control"name="signupsubject" placeholder="CSE">
  				</div>
  				   <div align="left" class="form-group">
              <label for="exampleFormControlTextarea1">BIRTHDATE</label>
            <input type="DATE"class="form-control"name="signupbirthdate" placeholder="BIRTHDATE">
          </div>                                                                                          
  				<div  align="left" class="form-group">
  					<label for="exampleFormControlTextarea1">BIO</label>
   					<textarea class="form-control" name="signupbio" rows="3" placeholder="About yourself"></textarea>
 				</div>
  				<div align="left" class="form-group">
  					<label for="exampleFormControlTextarea1">PASSWORD</label>
    				<input type="password" class="form-control" name="signuppassword"placeholder="Minimum 8 Characters">
  				</div>
  				<div align="left" class="form-group">
   					<label for="exampleFormControlTextarea1">STATUS</label>
   					<input type="text"class="form-control"name="signupstatus" placeholder="Need A Team">
  				</div>
        <button type="submit" name="Submit" value="Submit" class="btn btn-primary">SIGN UP</button>

			</form>
			<br>
			<p style="color:black;">Already a Member <a href="http://localhost/NSURS/LOGIN.php">Log In</a></p>
		</div>
    <?php
      //including the database connection file
      include_once("config.php");
      if(isset($_POST['Submit'])) 
      { 
        $id = $_POST['signupid'];
        $name = $_POST['signupname'];
        $email = $_POST['signupemail'];
        $department = $_POST['signupdepartment'];
        $subject = $_POST['signupsubject'];
        $birthdate = $_POST['signupbirthdate'];
        $bio = $_POST['signupbio'];
        $password = $_POST['signuppassword'];
        $status = $_POST['signupstatus'];
        $sql = "INSERT  INTO members(NSU_ID, NAME, EMAIL, DEPARTMENT, SUBJECT, BIRTH_DATE, BIO, M_PASSWORD, M_STATUS) 
                VALUES('$id', '$name', '$email',' $department', '$subject','$birthdate', '$bio', '$password', '$status');";
        $result = mysqli_query($conn, $sql);
        //header("Location: index.php");
        echo "<h6 align = 'center'>Your registration has been successfull</h6>";
      }
    ?>


      <br><br><br>
  <style>
.footer {
  
  left: 0;
  bottom: 0;
  width: 100%;
  height: 150px;
  background-color:#BFC9CA ;
  color: white;
  text-align: center;
}
</style>    
<div class="footer">
  <br><br>

  
  <p style="color: black;"> © Copyright reserved by Team Professional Noob</p>
</div>
	</body>
</html> 