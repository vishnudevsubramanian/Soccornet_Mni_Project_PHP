<html>
 <head>
  <title>registration form</title>
 </head>
 <body>
  <center>
  <form><br><br><br><br>
  <table border="2">
   <tr><td>ENTER USERNAME:</td><td><input type="text" name="user"></td></tr>
   <tr><td colspan="2"><center><input type="submit" name="view" value="VIEW"></center></td></tr>
  </form>
 </table>
 </center>
 </body>
</html>
<?php
 $dbhost='localhost';
 $dbuser='root';
 $dbpass="";
 $db="FOOTBALL_REG";
 $conn=mysqli_connect($dbhost, $dbuser, $dbpass,$db);
 if($conn->connect_error)
 {
  die("connection failed: " . $conn->connect_error);
 }
 //echo "connected successfully";
 if(isset($_POST["view"]))
 {
  $sql2="SELECT FIRST_NAME,LAST_NAME,ADDRESS,GENDER,USERNAME,PASSWORD,RE_PASSWORD,COUNTRY,PHONE,E_mail FROM REGISTRATION ";
  $result=mysqli_query($conn,$sql2);
  if($result->num_rows > 0)
  {
   echo "<table border=2>";
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
   echo "</tr>";
   echo "<tr>";
   echo "<td>";
   echo "USERNAME";
   echo "</td>";
   echo "<td>";
   echo "<tr>";
   echo "<td>";
   echo "COUNTRY";
   echo "</td>";
   echo "<td>";
   echo "<tr>";
   echo "<td>";
   echo "PHONE";
   echo "</td>";
   echo "<td>";
   echo "<tr>";
   echo "<td>";
   echo "E_mail";
   echo "</td>";
   echo "<td>";
while($row=mysqli_fetch_assoc($result))
       {
       echo "<tr>";
     echo "<td>";
    echo "$row[]"; 
     echo "</td>";
echo "<td>";
echo "$row[book_name]";
echo "</td>";
echo "<td>";
echo "$row[author]";
echo "</td>";
echo "<td>";
echo "$row[price]";
echo "</td>";
echo "</tr>";
}
echo "</table>";

?>

