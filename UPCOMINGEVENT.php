<?php
  include_once("config.php");
  //fetching data in descending order (lastest entry first)
  //  events_key  NSU_ID  etitle  elink   edates  times   dates
  $sql = "SELECT NSU_ID, etitle, elink ,edates, dates, times
      FROM eventsbox
      order by events_key DESC;";
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
		<title>Events</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
      form{
        width: 80%;
      }
			table, th, td{
				border: 1px solid black; 
				border-collapse: collapse;	
			}
		</style>
	</head>


	<body style="background-color:#42a5f5 ;">
		<nav  class="navbar navbar-expand-lg "style="background-color: #0288d1 ;">
      <img src="LOGO.PNG" alt="LOGO" style="width:128px;height:78px;"> 
        <a style="font-family:Impact;font-size:300%;">  &nbsp NSU ROBOTICS SOCIETY</a>
        <a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
            <a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
            <a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
            <img src="pp.PNG" alt="LOGO" style="width:60px;height:60px;"> 
            <a style="font-family:Comic Sans MS;font-size:150%;">&nbsp<?php
            echo $_SESSION["user"];
            ?></a>
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
        <a style="font-family:Comic Sans MS;align-items:center; "   href="http://localhost/NSURS/QAROOM.php">   &nbsp 
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
       
       <a style="font-family:Comic Sans MS;align-items:center;background-color:#42a5f5 ;"   href="http://localhost/NSURS/UPCOMINGEVENT.php">&nbsp
       <img  src="eventicon.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
       <br>
       <b style="color:black ;">EVENTS</b>
       </a>


    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/LOGOUT.php"> &nbsp 
        <img  src="logout.png" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        <br>&nbsp
        <b style="color:black ;"> LOGOUT</b>
        </a>
  </nav>

  <div align="center">
      <p style="font-size:200%;"> <strong> Upcoming Events </p>
      <form action="" method="post" name="">
          <div align="left" class="form-group">
            <input type="text"class="form-control" name="EventTitle" placeholder="Event's Name">
          </div>
          <div align="left" class="form-group">
            <input type="text"class="form-control" name="EventLink" placeholder="Event's Link">
          </div>
          <div align="left" class="form-group">
            <input type="DATE"class="form-control"name="EventDates" placeholder="Event's Date">
          </div> 
        <button type="submit" name="Submit" value="Submit" class="btn btn-primary">POST</button>
      </form>



      <div align="center">
    <table class="table table-bordered" style="background-color:#b0d7fa;font-family:Comic Sans MS;">
      <?php 
      $x=1;
        while($res = mysqli_fetch_array($result)) { 
      ?>
      <br>
      <br>
      <tr> 
      <a style="font-family:Comic Sans MS;align-items:center;"   href=<?php echo $res['elink']; ?>>
        <b style="color:black ;"><?php echo $res['etitle']; ?></b> 
        <br>
        <img  src="eventslisticon.png" alt="HTML tutorial" style="width:500px;height:150px;border:0;">
        <br>
        <b style="color:black ;"><?php echo $res['edates']; ?></b>
        <br>
        <b style="color:black ;">Posted By</b>
        <b style="color:black ;"><?php echo $res['NSU_ID']; ?></b>
        </a>

      </tr>

      
      <?php
      

        }
      ?>

      </table>
      </div>

<?php
      //including the database connection file
//  events_key  NSU_ID  etitle  elink   edates  times   dates
      $ekey = round(microtime(true)*1000);;
      $date =  date("Y-m-d");
      $time = date("h:i:sa");
      $nsu_id = $_SESSION["user"];
      include_once("config.php");
      if(isset($_POST['Submit'])) 
      { 
        $etit = $_POST['EventTitle'];
        $elin = $_POST['EventLink'];
        $edat = $_POST['EventDates'];
        
        $sql = "INSERT  INTO eventsbox(events_key, NSU_ID, etitle, elink, edates, times, dates) 
                VALUES('$ekey','$nsu_id', '$etit','$elin','$edat', '$date', '$time');";
        $result = mysqli_query($conn, $sql);
        echo("<meta http-equiv='refresh' content='1'>");
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

  <a style="font-family:Calibri; ;"class="navbar-brand" href="http://localhost/NSURS/ABOUTUS.php"><b>ABOUT US</b></a>
  <p style="color: black;"> © Copyright reserved by Team Professional Noob</p>
</div>

	</body>
</html>