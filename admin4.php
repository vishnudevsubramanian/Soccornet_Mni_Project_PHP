<html>
 <head>
  <title>ADMIN VIEW</title>
 </head>
 <body>
  <center><br><br><br><br>
  <form action="<?php $_POST_SELF ?>" method="POST"> 
   <table border="2">
   <tr><td>ENTER USERNAME:</td><td><input type="text" name="user"></td></tr>
   <tr><td colspan="2"><center><input type="submit" name="delete" value="DEACTIVATE" onclick="return confirm('ARE YOU SURE WANT TO DEACTIVATE?');""><input type="submit" name="view" value="VIEW"></center></td></tr>
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
 if(isset($_POST["view"]))
 {
  $user=$_POST["user"];
  $sql2="SELECT FIRST_NAME,LAST_NAME,ADDRESS,GENDER,USERNAME,COUNTRY,CREATED_ON,PHONE,E_mail FROM REGISTRATION WHERE USERNAME='$user'";
//echo $sql2;
  $result=mysqli_query($conn,$sql2);
  if($result->num_rows > 0)
  {
   echo "<table border=2 cellpadding=20>";
   echo "<tr>";
   echo "<td>";
   echo "FIRST_NAME";
   echo "</td>";
   echo "<td>";
   echo "LAST_NAME";
   echo "</td>";
   echo "<td>";
   echo "ADDRESS";
   echo "</td>";
   echo "<td>";
   echo "GENDER";
   echo "</td>";
   echo "<td>";
   echo "USERNAME";
   echo "</td>";
   echo "<td>";
   echo "COUNTRY";
   echo "</td>";
   echo "<td>";
   echo "ACCOUNT CREATED ON";
   echo "</td>";
   echo "<td>";
   echo "PHONE";
   echo "</td>";
   echo "<td>";
   echo "<center>E_mail</center>";
   echo "</td>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result))
   {
    echo "<tr>";
    echo "<td>";
    echo "$row[FIRST_NAME]";
    echo "</td>";
    echo "<td>";
    echo "$row[LAST_NAME]";
    echo "</td>";
    echo "<td>";
    echo "$row[ADDRESS]";
    echo "</td>";
    echo "<td>";
    echo "$row[GENDER]";
    echo "</td>";
    echo "<td>";
    echo "$row[USERNAME]";
    echo "</td>";
    echo "<td>";
    echo "$row[COUNTRY]";
    echo "</td>";
    echo "<td>";
    echo "$row[CREATED_ON]";
    echo "</td>";
    echo "<td>";
    echo "$row[PHONE]";
    echo "</td>";
    echo "<td>";
    echo "$row[E_mail]";
    echo "</td>";
    echo "<td>";
    echo "<form><input type=submit value=DEACTIVATE name=delete></form>";
    echo "</td>";
    echo "</tr>";
   } 
   echo "</table>";
  }
  else
  {
   echo "error". $sql2 ."<br>" .mysqli_error($conn);
   //echo "NO ROWS SELECTED";
  }
 }
 if(isset($_POST["delete"]))
 {
  $user=$_POST["user"];
  $sql3="DELETE FROM REGISTRATION WHERE USERNAME='$user'";
  $result=mysqli_query($conn,$sql3);
   if(mysqli_query($conn, $sql3))
   {
    echo ("ACCOUNT REMOVED SUCCESFULLY");
   }
   else
   {
    echo "error". $sql3 ."<br>" .mysqli_error($conn);
   }
  }
?>
