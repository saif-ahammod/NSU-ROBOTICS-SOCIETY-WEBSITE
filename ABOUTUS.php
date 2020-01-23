<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>About Us</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body style="background-color:  #42a5f5;">
		<nav  class="navbar navbar-expand-lg "style="background-color:  #0288d1  ;">
			<img src="LOGO.PNG" alt="LOGO" style="width:128px;height:78px;"> 
	  		<a style="font-family:Impact;font-size:300%;">  &nbsp NSU ROBOTICS SOCIETY</a>
	  		<a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
            <a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
            <a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
       			<img src="pp.PNG" alt="LOGO" style="width:60px;height:60px;"> 
        		<a style="font-family:Comic Sans MS;font-size:150%;">&nbsp
        		<?php
        			echo $_SESSION["user"];
        		?>
        		</a>
		</nav>
			

	<nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #01579b ; height:100px; ">
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp</label>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/HOME.php">  
        <img  src="homelogo.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
        <br>
        <b style="color:black ;">HOME</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp </label>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/Team.php">  
        <img  src="teamlogo.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
        <br> &nbsp
        <b style="color:black ;">Team</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/CHATBOX.php">  &nbsp 
        <img  src="chatlogo.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
        <br>
        <b style="color:black ;">CHATBOX</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/BLOG.php">   
        <img  src="12345.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
        <br>
        <b style="color:black ;">BLOG</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/QAROOM.php">   &nbsp 
        <img  src="questionanswericon.png" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        <br>
        <b style="color:black ;">QAROOM</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/memberlist.php"> &nbsp &nbsp
        <img  src="membersicon.png" alt="HTML tutorial" style="width:50px;height:40px;border:0;">
        <br>
        <b style="color:black ;">MEMBERS</b>
        </a>

    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
       <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/UPCOMINGEVENT.php"  </a>
       <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/UPCOMINGEVENT.php"> &nbsp &nbsp &nbsp &nbsp &nbsp
       <img  src="eventicon.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
       <br>
       <b style="color:black ;">UPCOMING EVENT</b>
       </a>


    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/LOGIN.php"> &nbsp 
        <img  src="logout.png" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        <br>&nbsp
        <b style="color:black ;"> LOGOUT</b>
        </a>
  </nav>

		
		<br><br>
		<h1 align="center" style="font-family:Comic Sans MS;">ABOUT US</h1>
		<br>
		<p align="center"><strong>The main objective of this website is to bring all the robotics lover people of North South University under a same roof</p>
		<br><br><br>
		<div align="center">
			<h4><strong>This Website is Developed By</h4>
			<br><br>
			<div class="container">
  <div class="row">
    <div class="col">
      <img src="saif.jpg" alt="saif" style="width:150px;height:150px;">
      <br>
			<p> Md. Saif Ahammod Khan.</p>
			<p>Id: 1721779042</p>
			<p>Email: saif.ahammod@gmail.com</p>
    </div>
    <div class="col">
     			<img src="riyad.jpg" alt="riyad" style="width:150px;height:150px;">
     			<br>
     			<p> Md Reyad Hossain</p>
				<p>Id: 1721966642</p>
				<p>Email: reyadhasan7254@gmail.com</p>
    </div>
  </div>
			


		</div>
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
