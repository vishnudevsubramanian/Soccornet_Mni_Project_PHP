<html>
 <head>
  <title>registration form</title>
 </head>
 <body>
  </head>
  <body>
  <marquee font="red">USERNAME CAN'T BE CHANGED.....</marquee>
  <br><br><br><br><br><br><br>
  <center>
  <form action="<?php $_POST_SELF ?>" method="POST"> 
  <table border ="10">
   <tr><td>USERNAME :</td><td> <input type="text" name="user"></td></tr>
   <tr><td>FIRST NAME :</td><td> <input type="text" name="fname"></td></tr>
   <tr><td>LAST NAME  :</td><td> <input type="text" name="lname"></td></tr>
   <tr><td>ADDRESS    :</td><td> <textarea rows="2" cols="20" name="addr"></textarea></td></tr>
   <tr><td>GENDER     :</td><td> MALE<input type="radio" name="gen" value="M">FEMALE<input type="radio" name="gen" value="F"></td></tr>
   <tr><td>COUNTRY    :</td><td><select name="coun">
    <option><--SELECT--></option>
    <option value="INDIA">INDIA</option>
    <option value="JAPAN">JAPAN</option>
    <option value="THAILAND">THAILAND</option>
    <option value="AUSTRALIA">AUSTRALIA</option>
    <option value="CHILI">CHILI</option>  </select></td></tr>
   <tr><td>PHONE      : </td><td><input type="number" name="phn"></td></td>
   <tr><td>Email      : </td><td><input type="text" name="eml"></td></tr>
   <tr><td colspan="2"><center> <a href="user.php" onClick="return confirm('Are You Sure to logout?');"><input type="submit" name="update" value="UPDATE"></a></center></td></tr>
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
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $addr=$_POST["addr"];
  $gen=$_POST["gen"];
  $pass=$_POST["pass"];
  $repass=$_POST["repass"];
  $coun=$_POST["coun"];
  $phn=$_POST["phn"]; 
  $eml=$_POST["eml"];
  $sql1="UPDATE REGISTRATION SET FIRST_NAME='$fname',LAST_NAME='$fname',ADDRESS='$addr',GENDER='$gen',PHONE=$phn,E_mail='$eml' WHERE USERNAME='$user'";
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
