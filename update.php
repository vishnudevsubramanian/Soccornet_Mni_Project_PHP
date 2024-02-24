<html>
 <head>
  <title>registration form</title>
 </head>
 <body><br><br><br><br><br>
  <center><br><br><br><br>
  <form action="<?php $_POST_SELF ?>" method="POST"> 
   <table border="2">
   <tr><td>ENTER USERNAME:</td><td><input type="text" name="user"></td></tr>
   <tr><td>ENTER PASSWORD:</td><td><input type="text" name="pass"></td></tr>  
   <tr><td colspan="2"><center><input type="submit" name="update" value="UPDATE" onclick="user1.php"></center></td></tr>
   </table>
  </form>
  </center>
 </body>
<html>
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
  $pass=$_POST["pass"];
  $sql="SELECT USERNAME,PASSWORD FROM REGISTRATION WHERE USERNAME='$user'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
   while($row = mysqli_fetch_assoc($result))
   {
    $u=$row["USERNAME"];
    $p=$row["PASSWORD"];
   }
  }
  else
  {
   $u="";
   $p="";
  }
  if($user==$u && $pass==$p)
  {
   header("Location:user1.php");
  }
  else
  {
   echo "INCORRECT USERNAME OR PASSWORD";
   //header("warn()");
  }
 }
?>
