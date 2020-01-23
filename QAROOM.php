<?php
//q_key 	NSU_ID 	ques 	times 	dates
	include_once("config.php");
	$sql = "SELECT q_key, NSU_ID, 	ques , dates, times
      FROM qaquestion
      order by q_key DESC;";
		$result = mysqli_query($conn, $sql);
	//ans_key	qu_key	NSU_ID	anss	times	dates 
	$sqla = "SELECT ans_key, qu_key, NSU_ID, anss , dates, times
      FROM qaanswer 
      order by ans_key DESC;";
		$results = mysqli_query($conn, $sqla);
		session_start();
		if(is_null($_SESSION["user"]))
		{
			header("Location:http://localhost/NSURS/LOGIN.php");
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>QAROOM</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			table, th, td{
				border: 1px solid black; 
				border-collapse: collapse;	
			}
			form{
        	width: 80%;
      		}
      .container 
      {
          border: 2px solid #dedede;
          background-color: #f1f1f1;
          border-radius: 5px;
          padding: 10px;
          margin: 10px 10px;
      }

      .darker 
      {
          border-color: #ccc;
          background-color:  #abb2b9;
      }

      .container::after 
      {
        
        content: "";
          clear: both;
          display: table;
      }

      .container img 
      {
          float: left;
          max-width: 60px;
          width: 100%;
          margin-right: 20px;
          border-radius: 50%;
      }

      .container img.right 
      {
          float: right;
          margin-left: 20px;
          margin-right:0;
      }

      .time-right 
      {
          float: right;
          color:  #154360;
      }

      .time-left 
      {
          float: left;
          color:  #154360 ;
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
        <a style="font-family:Comic Sans MS;background-color:#42a5f5 ;"class="navbar-brand" href="http://localhost/NSURS/QAROOM.php"  </a>
        <a style="font-family:Comic Sans MS;align-items:center;background-color:#42a5f5 ;"   href="http://localhost/NSURS/QAROOM.php">   &nbsp 
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

       <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/UPCOMINGEVENT.php">&nbsp
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
      <p style="font-size:200%;"> <strong> QA ROOM </p>
      <form action="" method="post" name="">
      
          <div align="left" class="form-group">
            <input type="text"class="form-control" name="questi" placeholder="Ask your questions...">
          </div>
    
        <button type="submit" name="Submit" value="Submit" class="btn btn-primary">POST</button>

      </form>
    </div>

    <div align="center">
    <table class="table table-bordered" style="background-color:#b0d7fa;font-family:Comic Sans MS;">
       <?php 
  while($res = mysqli_fetch_array($result)) { 
      ?>
      <tr> 
      	<br>
      <h6>QUESTION</h6>     
      <div class="container">

        <img src="questionicon.PNG" alt="Avatar" style="width:100%;">
        
        <p><?php echo $res['NSU_ID']; ?> </p>
        <p><?php echo $res['ques']; ?> </p>
      <p class="time-right"><?php echo $res['times']; ?></p>
      <p class="time-right"><?php echo $res['dates']; ?>  |  </p>
      </div>
      <h6>ANSWERS</h6>
      <div align="center">
    <table class="table table-bordered" style="background-color:#b0d7fa;font-family:Comic Sans MS;">
       <?php
       $comparevar =$res['q_key'];
       //ans_key	qu_key	NSU_ID	anss	times	dates 
    while($res2 = mysqli_fetch_array($results)) { 
      ?>
      <tr>
      <?php
      if($res2['qu_key']== $comparevar)
      {
      	?>

      	<div class="container">
        <img src="answericon.PNG" alt="Avatar" style="width:100%;">
        
        <p><?php echo $res2['NSU_ID']; ?> </p>
        <p><?php echo $res2['anss']; ?> </p>
      <p class="time-right"><?php echo $res2['times']; ?></p>
      <p class="time-right"><?php echo $res2['dates']; ?>  |  </p>
      </div>
      <?php  
      }      
      ?>
      
      </tr>
      
      <?php
        }
      ?>
    </table>
    </div>
      

      <div align="center">
      <form action="" method="post" name="">
      
          <div align="left" class="form-group">
            <input type="text"class="form-control" name="answ" placeholder="Comment An Answer">
          </div>
    
        <button type="submit" name="Submita" value="Submit" class="btn btn-primary">Comment</button>

      </form>
	

	<?php
    //q_key 	NSU_ID 	ques 	times 	dates 
	//ans_key 	q_key 	NSU_ID 	anss 	times 	dates
    //including the database connection file
      $anskey = round(microtime(true)*1000);
      $questionkey = $res['q_key'];;
      $date =  date("Y-m-d");
      $time = date("h:i:sa");
      $NSUID = $_SESSION["user"];
      include_once("config.php");
      if(isset($_POST['Submita'])) 
      { 
        $anst = $_POST['answ'];
        
        $sql = "INSERT  INTO qaanswer(ans_key, qu_key,NSU_ID,anss,dates,times) 
                VALUES('$anskey','$questionkey','$NSUID','$anst','$date', '$time');";
        $result = mysqli_query($conn, $sql);
        echo("<meta http-equiv='refresh' content='1'>");
        //header("Location: index.php");
      }
    ?>

    </div>
   </tr>
      <?php
     }
    ?>
    </table>
    </div>

    <?php
    //q_key 	NSU_ID 	ques 	times 	dates
     //including the database connection file
      $qkey = round(microtime(true)*1000);;
      $date =  date("Y-m-d");
      $time = date("h:i:sa");
      $NSUID = $_SESSION["user"];
      include_once("config.php");
      if(isset($_POST['Submit'])) 
      { 
        $quest = $_POST['questi'];
        
        $sql = "INSERT  INTO qaquestion(q_key,NSU_ID,ques,dates,times) 
                VALUES('$qkey','$NSUID','$quest','$date', '$time');";
        $result = mysqli_query($conn, $sql);
        echo("<meta http-equiv='refresh' content='1'>");
        //header("Location: index.php");
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
	
	
