<html>
 <head>
  <title>Main Page</title>
 </head>
 <body>
  <center>
  <table border="2">
  <form action="<?php $_POST_SELF ?>" method="POST"> 
  <tr>
  <td>USERNAME:</td><td><input type="text" name="user"></td></tr>
  <td>PASSWORD:</td><td><input type="password" name="pass"></td></tr>
  <td colspan="2"><center><input type="submit" value="SUBMIT" name="login"></center></td></tr>
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
 else
 {
 // echo("CONNECTED SUCCESSFULLY");
 }
 if(isset($_POST["login"]))
 {
  $user=$_POST["user"];
  $pass=$_POST["pass"];
  $sql="SELECT USER_NAME,PASSWORD FROM ADMIN WHERE USER_NAME='$user'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
   while($row = mysqli_fetch_assoc($result))
   {
    $u=$row["USER_NAME"];
    $p=$row["PASSWORD"];
 }
 }
  else
  {
   $u="qwertyuiopasdjgkflfkgfkd";
   $p="dfiugiofdiofufogoifijgioj";
  }
  if($user==$u && $pass==$p)
  {
   header("Location:admin.php");
  }
  else
  {
   "INCORRECT USERNAME OR PASSWORD";
  }
 }
