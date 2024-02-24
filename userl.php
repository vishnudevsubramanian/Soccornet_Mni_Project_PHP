Y<html>
 <head>
  <title>PASSWORD UPDATE</title>
 </head>
 <body><br><br><br><br><br><br><br>
  </head>
  <body>
  <center>
  <form action="<?php $_POST_SELF ?>" method="POST"> 
  <table border ="10">
   <tr><td>USER NAME :</td><td> <input type="text" name="user"></td></tr> 
   <tr><td>CURRENT PASSWORD :</td><td> <input type="password" name="passw"></td></tr>   
   <tr><td>NEW PASSWORD :</td><td> <input type="password" name="pass"></td></tr>
   <tr><td>CONFIRM PASSWORD  :</td><td> <input type="password" name="repass"></td></tr>
   <tr><td colspan="2"><center><a href="soccernet.php" onClick="return confirm('ARE YOU SURE WANT TO UPDATE?');"><input type="submit" name="update" value="UPDATE"></a></center></td></tr>
   </table>
  </form>
  </center>
 </body>
</html>
<?php
 $dbhost="localhost";
 $dbuser="root";
 $dbpass="";
 $db="FOOTBALL_REG";
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
 if($conn->connect_error)
 {
  die("CONNECTION FAILED : ".$conn->$connect_error);
 }
 //echo "CONNECTED SUCESSFULLY";
 if(isset($_POST["update"]))
 {
  $user=$_POST["user"];
  $passw=$_POST["passw"];
  $pass=$_POST["pass"];
  $repass=$_POST["repass"];
  $sql1="UPDATE REGISTRATION SET PASSWORD='$pass',RE_PASSWORD='$repass' WHERE PASSWORD='$passw' AND USERNAME='$user'";
  if(mysqli_query($conn,$sql1))
  {
   header("Location:user.php");
  }
  else
  {
   echo "ERROR".$sql1."<br>".mysqli_error($conn); 
  }
 }
?>
