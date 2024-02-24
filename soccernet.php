<html>
 <head>
  <title>Main Page</title>
 </head>
 
 <body background="Webp.net-resizeimage.jpg" height="4" width="400">
  <script type="text/javascript">
  function warn()
  {
   var retval=confirm("INCORRECT USERNAME OR PASSWORD");
   if(retval==true)
   { 
    return true;
   }
  }
  </script>
  <table>
  <form action="<?php $_POST_SELF ?>" method="POST"> 
  <a href="adminlog.php"><input type="button" value="ADMIN" style="height:50px; width:100px"></a>
  <div align="right"><font size="3" color="white">USER NAME:<input type="text" name="user">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPASSWORD:<input type="password" name="pass"></font><input type="submit" name="login" value="LOGIN"><br><br><a href="registration.php">NEW USERS?REGISTER HERE</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </div>
  </form>
 </table>
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
   $u="qwertyuiopasdjgkflfkgfkd";
   $p="dfiugiofdiofufogoifijgioj";
  }
  if($user==$u && $pass==$p)
  {
   header("Location:user.php");
  }
  else
  {
   //echo "INCORRECT USERNAME OR PASSWORD";
   warn();
  }
 }
?>
