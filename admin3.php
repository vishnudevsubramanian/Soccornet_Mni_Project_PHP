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
  $sql2="SELECT * FROM REGISTRATION";
  //echo $sql2;
  $result=mysqli_query($conn,$sql2);
  if($result->num_rows > 0)
  {
   echo "<table border=2 cellpadding=15>";
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
   echo "PHONE";
   echo "</td>";
   echo "<td>";
   echo "ACCOUNT CREATED ON";
   echo "</td>";
   echo "<td>";
   echo "<center>E_mail</center>";
   echo "</td>";
   echo "<td>";
   echo "<center>VIEW OR DEACTIVATE</center>";
   echo "</td>";
   echo "</tr><";
   while($row=mysqli_fetch_assoc($result))
   {
    echo "<tr>";
    echo "<td>";
    echo "<center>$row[FIRST_NAME]</center>";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[LAST_NAME]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[ADDRESS]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[GENDER]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[USERNAME]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[COUNTRY]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[PHONE]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[CREATED_ON]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[E_mail]</center";
    echo "</td>";
    echo "<td>";
    echo "<center><a href=admin4.php><input type=submit value=VIEW/DEACTVATE></a></center>";
    echo "</td>";
    echo "</tr></center>";
   } 
   echo "</table>";
  }
  else
  {
   echo "error". $sql2 ."<br>" .mysqli_error($conn);
   //echo "NO ROWS SELECTED";
  }
?>

