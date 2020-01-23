<?php
	include_once("config.php");
	//fetching data in descending order (lastest entry first)
	$sql = "SELECT M.NAME, M.DEPARTMENT, M.SUBJECT, M.M_STATUS, M.EMAIL
		FROM members M ";
	$result = mysqli_query($conn, $sql);
		session_start();
    if(is_null($_SESSION["user"]))
    {
      header("Location:http://localhost/NSURS/LOGIN.php");
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Members</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			table, th, td{
				border: 1px solid black; 
				border-collapse: collapse;	
			}
		</style>
	</head>
	<body style="background-color:#42a5f5 ;">
		<nav  class="navbar navbar-expand-lg "style="background-color: #0288d1 ;">
			<img src="LOGO.PNG" alt="LOGO" style="width:128px;height:78px;"> 
	  		<a style="font-family:Impact;font-size:300%;">  &nbsp NSU ROBOTICS SOCIETY </a>
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
        	<a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/CHATBOX.php">  
        		&nbsp 
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
        	<a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/QAROOM.php">   	&nbsp 
        		<img  src="questionanswericon.png" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        		<br>
        		<b style="color:black ;">QAROOM</b>
        	</a>
    
    		<label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        	<a style="font-family:Comic Sans MS;background-color:#42a5f5 ;align-items:center;"   href="http://localhost/NSURS/memberlist.php"> 
        		&nbsp &nbsp
        		<img  src="membersicon.png" alt="HTML tutorial" style="width:50px;height:40px;border:0;">
        		<br>
        		<b style="color:black ;">MEMBERS</b>
        	</a>

    		<label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
       		<a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/UPCOMINGEVENT.php"> 
       			&nbsp
       			<img  src="eventicon.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
       			<br>
       			<b style="color:black ;">EVENTS</b>
       		</a>

	    	<label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
    	    <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/LOGOUT.php">&nbsp 
        		<img  src="logout.png" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        		<br>
        		&nbsp
        		<b style="color:black ;"> LOGOUT</b>
        	</a>
  		</nav>
    <p style="font-size:200%;"align="center"> <strong>Members and Their Status </p>

		<table align="center" class="table table-bordered" style="background-color:#b0d7fa;font-family:Comic Sans MS;">
			<thead class="thead-dark">
       			<tr>
    				<th>Name</th>
    				<th >Department</th>
    				<th>Subject</th>
    				<th >Status</th>
    				<th>Email</th>
  				</tr>
			</thead>

			<?php 
				while($res = mysqli_fetch_array($result)) { 
			?>
					<tr>	
						<td><?php echo $res['NAME']; ?></td>
						<td><?php echo $res['DEPARTMENT'];?></td>		
        				<td><?php echo $res['SUBJECT'];?></td>
						<td><?php echo $res['M_STATUS'];?></td>		
        				<td><?php echo $res['EMAIL'];?></td>
					</tr>

			<?php	
				}
			?>

		</table>


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

         <a style="font-family:Calibri; ;"class="navbar-brand" href="http://localhost/NSURS/ABOUTUS.php"><b>ABOUT US</b></a>
         <p style="color: black;"> © Copyright reserved by Team Professional Noob</p>
     </div>
	</body>
</html>