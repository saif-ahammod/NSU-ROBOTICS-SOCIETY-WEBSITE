<?php
	include_once("config.php");
	//fetching data in descending order (lastest entry first)
  //article_key   NSU_ID  title   Article   times   dates
	$sql = "SELECT NSU_ID, title, Article , dates, times
      FROM blogstore
      order by article_key DESC;";
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
		<title>Blog</title>
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
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/HOME.php">  </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/HOME.php">  
        <img  src="homelogo.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
        <br>
        <b style="color:black ;">HOME</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp </label>
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/Team.php">  </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/Team.php">  
        <img  src="teamlogo.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
        <br> &nbsp
        <b style="color:black ;">Team</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/CHATBOX.php">  </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/CHATBOX.php">  &nbsp 
        <img  src="chatlogo.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
        <br>
        <b style="color:black ;">CHATBOX</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;background-color:#42a5f5 ;"class="navbar-brand" href="http://localhost/NSURS/BLOG.php">  </a>
        <a style="font-family:Comic Sans MS;align-items:center;background-color:#42a5f5 ;"   href="http://localhost/NSURS/BLOG.php">   
        <img  src="12345.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
        <br>
        <b style="color:black ;">BLOG</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS; "class="navbar-brand" href="http://localhost/NSURS/QAROOM.php">  </a>
        <a style="font-family:Comic Sans MS;align-items:center; "   href="http://localhost/NSURS/QAROOM.php">   &nbsp 
        <img  src="questionanswericon.png" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        <br>
        <b style="color:black ;">QAROOM</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/memberlist.php"> </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/memberlist.php"> &nbsp &nbsp
        <img  src="membersicon.png" alt="HTML tutorial" style="width:50px;height:40px;border:0;">
        <br>
        <b style="color:black ;">MEMBERS</b>
        </a>

    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
       <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/UPCOMINGEVENT.php"> &nbsp
       <img  src="eventicon.png" alt="HTML tutorial" style="width:50px;height:50px;border:0;">
       <br>
       <b style="color:black ;">EVENTS</b>
       </a>


    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/LOGOUT.php">  </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/LOGIN.php"> &nbsp 
        <img  src="logout.png" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        <br>&nbsp
        <b style="color:black ;"> LOGOUT</b>
        </a>
  </nav>



  <div align="center">
      <p style="font-size:200%;"> <strong> BLOG </p>
      <form action="" method="post" name="">
      
          <div align="left" class="form-group">
            <input type="text"class="form-control" name="Title" placeholder="TITLE">
          </div>
      
          <div  align="left" class="form-group">
            <textarea class="form-control" name="article" rows="3" placeholder="Write something here..."></textarea>
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
      <div class="container">
        <img src="ARTICLEICON.PNG" alt="Avatar" style="width:100%;">
        <p><?php echo $res['NSU_ID']; ?> </p>
        <p style="font-size:100%;"><strong><?php echo $res['title']; ?></strong> </p>
        <p><?php echo $res['Article']; ?> </p>
      <p class="time-right"><?php echo $res['times']; ?></p>
      <p class="time-right"><?php echo $res['dates']; ?>  |  </p>
      </div>
      
      </tr>
      
      <?php
        }
      ?>
    </table>
    </div>
    <?php
    //article_key   NSU_ID  title   Article   times   dates
      //including the database connection file
      $articlekey = round(microtime(true)*1000);;
      $date =  date("Y-m-d");
      $time = date("h:i:sa");
      $NSUID = $_SESSION["user"];
      include_once("config.php");
      if(isset($_POST['Submit'])) 
      { 
        $title = $_POST['Title'];
        $article = $_POST['article'];
        
        $sql = "INSERT  INTO blogstore(article_key,NSU_ID,title,Article,dates,times) 
                VALUES('$articlekey','$NSUID','$title','$article','$date', '$time');";
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