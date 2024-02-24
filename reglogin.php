<html>
 <head>
  <title>username</title>
 </head>
 <body>
  <center>
  <form action="<?php $_POST_SELF ?>" method="POST">
  <table border="2">
   <tr><td>ENTER USERNAME:</td><td><input type="text" name="user"></td></tr>
   <tr><td>ENTER PASSWORD:</td><td><input type="password" name="pass""></td></tr>
   <tr><td>RE_ENTER PASSWORD:</td><td><input type="password" name="repass"></td></tr>
   <tr><td colspan="2"><center><input type="submit" value="SAVE"></center></td></tr>
  </table>
  </form>
  </center>
  </table>
  </form>
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
 echo "CONNECTED SUCESSFULLY";
 if(isset($_POST["SAVE"]))
 {
  $user=$_POST["user"];
  $pass=$_POST["pass"];
  $repass=$_POST["repass"];
  $sql5="INSERT INTO REGISTRATION (USERNAME,PASSWORd,REPASSWORD) values('$user','$pass','$repass')" ;
  if(mysqli_query($conn,$sql5))
  {
   echo "NEW RECORD CREATED SUCCESSFULLY";
  }
  else
  {
   echo "ERROR".$sql5."<br>".mysqli_error($conn); 
  }
 }
?>
