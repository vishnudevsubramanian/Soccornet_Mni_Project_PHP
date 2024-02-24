<html>
 <head>
  <title>registration form</title>
 </head>
 <body>
  <center>
  <form action="<?php $_POST_SELF ?>" method="POST"> 
  <table border ="10">
   <tr><td>FIRST NAME :</td><td> <input type="text" name="fname"></td></tr>
   <tr><td>LAST NAME  :</td><td> <input type="text" name="lname"></td></tr>
   <tr><td>ADDRESS    :</td><td> <textarea rows="2" cols="20" name="addr"></textarea></td></tr>
   <tr><td>GENDER     :</td><td> MALE<input type="radio" name="gen" value="M">FEMALE<input type="radio" name="gen" value="F"></td></tr>
   <tr><td>ENTER USERNAME:</td><td><input type="text" name="user"></td></tr>
   <tr><td>ENTER PASSWORD:</td><td><input type="password" name="pass""></td></tr>
   <tr><td>RE_ENTER PASSWORD:</td><td><input type="password" name="repass"></td></tr>
   <tr><td>COUNTRY    :</td><td><select name="coun">
    <option><--SELECT--></option>
    <option value="INDIA">INDIA</option>
    <option value="JAPAN">JAPAN</option>
    <option value="THAILAND">THAILAND</option>
    <option value="AUSTRALIA">AUSTRALIA</option>
    <option value="CHILI">CHILI</option>  </select></td></tr>
   <tr><td>PHONE      : </td><td><input type="number" name="phn"></td></td>
   <tr><td>Email      : </td><td><input type="text" name="eml"></td></tr>
   <tr><td colspan="2"><center><a href="user.php" onclick="return confirm('ARE YOU SURE WANT TO SAVE?');"> <input type="submit" name="add" value="SAVE"></a><input type="reset" value="CLEAR"></center></td></tr>
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
 if(isset($_POST['add']))
 {
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $addr=$_POST["addr"];
  $gen=$_POST["gen"];
  $user=$_POST["user"];
  $pass=$_POST["pass"];
  $repass=$_POST["repass"];
  $coun=$_POST["coun"];
  $date=date('Y/m/d');
  $phn=$_POST["phn"]; 
  $eml=$_POST["eml"];
  if($_POST["pass"] == $_POST["repass"])
  {
   $sql="INSERT INTO REGISTRATION (FIRST_NAME,LAST_NAME,ADDRESS,GENDER,USERNAME,PASSWORD,RE_PASSWORD,COUNTRY,CREATED_ON,PHONE,E_mail) values('$fname','$lname','$addr','$gen','$user','$pass','$repass','$coun','$date',$phn,'$eml')";
   if(mysqli_query($conn,$sql))
   {
    echo "<br>NEW RECORD CREATED SUCCESSFULLY";
   }
   else
   {
    echo "ERROR".$sql."<br>".mysqli_error($conn); 
   }
   header("Location:user.php");
  }
  else
  {
   echo "PASSWORD MISS MATCH";
  } 
 }
 
?> 

